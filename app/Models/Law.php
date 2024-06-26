<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Law extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        "name",
        "content",
    ];
    protected $fillable = [
        "name",
        "type",
        "content",
    ];
}
