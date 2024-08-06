<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeportrationStatus extends Model
{
    use HasFactory;

    protected $table ="deportration_status";
    protected $fillable = [
        'deportration_id',
        'status_id',
        'specifications',
    ];

    protected $casts = [
        'specifications' => 'json',
    ];

    public function order()
    {
        return $this->belongsTo(Deportration::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
