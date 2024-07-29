<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'elderly_care',
        "children_care",
        "nursing_course",
        "homework_experience",
        "reception",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
