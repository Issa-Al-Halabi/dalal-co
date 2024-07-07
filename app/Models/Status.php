<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Status extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'title',
        'description',
    ];

    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'specifications',
        'order_type',
    ];

    protected $casts = [
        'specifications' => 'json',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
