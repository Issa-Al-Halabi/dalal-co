<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
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
