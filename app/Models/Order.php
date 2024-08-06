<?php

namespace App\Models;

use App\Enums\OrderTypes;
use App\Mail\OrderCreationMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Spatie\Translatable\HasTranslations;

class Order extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [""];

    protected $fillable = [
        'user_id',
        'maid_id',
        'type',
        'status_id',
        'book_ticket',
        'deliver_service',
    ];

    protected $casts = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function maid()
    {
        return $this->belongsTo(Maid::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function statuses()
    {
        return $this->hasMany(OrderStatus::class);
    }

    protected static function booted()
    {

        static::created(function ($model) {
            try {
                // send a message to the user
                Mail::to($model->user->email)->send(new OrderCreationMail(
                    $model->maid->id,
                    $model->maid->fullName,
                    OrderTypes::getNameAr($model->type),
                    route('OrderTrack', ['type' =>  OrderTypes::getName($model->type), 'id' => $model->id]),
                ));
            } catch (\Throwable $th) {
                //throw $th;
            }
        });
    }
}
