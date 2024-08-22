<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceOrder extends Model
{

    // use HasFactory, HasTranslations;
    use HasFactory;

    public $translatable = [""];

    protected $fillable = [
        "user_id",
        "service_id",
        "notes",
        "approved",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
