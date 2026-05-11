<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class Skill extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'name',
        'name_en',
        'category',
        'icon',
        'percentage',
        'order',
    ];

    protected $casts = [
        'percentage' => 'integer',
        'order' => 'integer',
    ];
}
