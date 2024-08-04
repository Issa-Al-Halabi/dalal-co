<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class RenewalOfResidence extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "renewal_of_residences";

    public $translatable = [""];

    protected $fillable = [
        'maid_id',
        'status_id',
    ];

    public function maid()
    {
        return $this->belongsTo(Maid::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function statuses()
    {
        return $this->hasMany(ResidenceStatus::class);
    }
}
