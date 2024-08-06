<?php

namespace App\Models;

use App\Enums\OrderTypes;
use App\Mail\OrderCreationMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Spatie\Translatable\HasTranslations;

class Deportration extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [""];
    protected $fillable = ["maid_id", "status_id", "deportration_date"];

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
        return $this->hasMany(DeportrationStatus::class);
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
                    OrderTypes::getNameAr(OrderTypes::deportration),
                    route('OrderTrack', ['type' =>  OrderTypes::getName(OrderTypes::deportration), 'id' => $model->id]),
                ));
            } catch (\Throwable $th) {
                //throw $th;
            }
        });
    }
}
