<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Maid extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['first_name', 'last_name', 'description', 'languages', 'countries', 'experiences'];

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'nationality_id',
        'description',
        'languages',
        'countries',
        'experiences',
        'image',
        'video',
    ];

    protected $casts = [
        'languages' => 'array',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }
}
