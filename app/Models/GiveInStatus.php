<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiveInStatus extends Model
{
    use HasFactory;

    protected $table = "give_in_statuses";

    protected $fillable = [
        'give_in_order_id',
        'status_id',
        'specifications',
    ];


    protected $casts = [
        'specifications' => 'json',
    ];

    public function giveInOrder()
    {
        return $this->belongsTo(GiveInOrder::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
