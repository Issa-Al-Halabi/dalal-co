<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidenceStatus extends Model
{
    use HasFactory;

    protected $table = "residence_statuses";
    protected $fillable = [
        'renewal_of_residence_id',
        'status_id',
        'specifications',
    ];

    protected $casts = [
        'specifications' => 'json',
    ];

    public function renewalOfResidence()
    {
        return $this->belongsTo(RenewalOfResidence::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
