<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Translatable\HasTranslations;

class Nationality extends Model implements Sortable
{
    use HasFactory, HasTranslations, SortableTrait;

    protected $table = "nationalities";
    public $translatable = ['nationality'];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    protected $fillable = [
        'nationality',
        'status',
    ];
}
