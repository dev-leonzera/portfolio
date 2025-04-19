<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'position',
        'description',
        'year_start',
        'start_month',
        'year_end',
        'end_month',
        'current',
        'order'
    ];

    protected $casts = [
        'current' => 'boolean',
        'year_start' => 'integer',
        'year_end' => 'integer'
    ];

    public function setYearStartAttribute($value)
    {
        $this->attributes['year_start'] = (int) $value;
    }

    public function setYearEndAttribute($value)
    {
        $this->attributes['year_end'] = $value ? (int) $value : null;
    }

    public function setStartMonthAttribute($value)
    {
        $this->attributes['start_month'] = str_pad($value, 2, '0', STR_PAD_LEFT);
    }

    public function setEndMonthAttribute($value)
    {
        $this->attributes['end_month'] = $value ? str_pad($value, 2, '0', STR_PAD_LEFT) : null;
    }
}
