<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Deportration extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [""];
    protected $fillable = ["maid_id", "status_id", "deportration_date"];

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
        return $this->hasMany(DeportrationStatus::class);
    }
}
