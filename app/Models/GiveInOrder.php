<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class GiveInOrder extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [""];

    protected $table = "give_in_orders";

    protected $fillable = [
        'maid_id',
        'new_owner_id',
        'status_id',
    ];


    public function maid()
    {
        return $this->belongsTo(Maid::class);
    }

    public function new_owner()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function statuses()
    {
        return $this->hasMany(GiveInStatus::class);
    }
}
