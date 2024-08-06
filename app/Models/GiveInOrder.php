<?php

namespace App\Models;

use App\Enums\OrderTypes;
use App\Mail\OrderCreationMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Spatie\Translatable\HasTranslations;

class GiveInOrder extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [""];

    protected $table = "give_in_orders";

    protected $fillable = [
        'maid_id',
        'old_owner_id',
        'new_owner_id',
        'status_id',
    ];


    public function maid()
    {
        return $this->belongsTo(Maid::class);
    }

    public function old_owner()
    {
        return $this->belongsTo(User::class);
    }

    public function new_owner()
    {
        return $this->belongsTo(User::class);
    }


    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function statuses()
    {
        return $this->hasMany(GiveInStatus::class);
    }


    // to send creation Mail
    protected static function booted()
    {
        static::created(function ($model) {
            try {
                // send a message to the user
                Mail::to($model->old_owner->email)->send(new OrderCreationMail(
                    $model->maid->id,
                    $model->maid->fullName,
                    OrderTypes::getNameAr(OrderTypes::giveIn),
                    route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::giveIn), 'id' => $model->id]),
                ));

                Mail::to($model->new_owner->email)->send(new OrderCreationMail(
                    $model->maid->id,
                    $model->maid->fullName,
                    OrderTypes::getNameAr(OrderTypes::giveIn),
                    route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::giveIn), 'id' => $model->id]),
                ));
            } catch (\Throwable $th) {
                //throw $th;
            }
        });
    }
}
