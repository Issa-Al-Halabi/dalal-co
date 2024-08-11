<?php

namespace App\Models;

use App\Enums\OrderTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreationMail;

class RenewalOfResidence extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "renewal_of_residences";

    public $translatable = [""];

    protected $fillable = [
        'user_id',
        'maid_id',
        'status_id',
        'new_residence_date',
    ];


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
        return $this->hasMany(ResidenceStatus::class);
    }

    // to send creation Mail
    protected static function booted()
    {
        static::created(function ($model) {
            try {
                // send a message to the user
                Mail::to($model->maid->owner->email)->send(new OrderCreationMail(
                    $model->maid->id,
                    $model->maid->fullName,
                    OrderTypes::getNameAr(OrderTypes::renewalOfResidence),
                    route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::renewalOfResidence), 'id' => $model->id]),
                ));
            } catch (\Throwable $th) {
                //throw $th;
            }
        });
    }
}
