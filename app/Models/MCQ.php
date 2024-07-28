<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCQ extends Model
{
    use HasFactory;

    protected $fillable = [
        'elderly_care',
        "children_care",
        "nursing_course",
        "homework_experience",
        "recepion",
    ];
}
