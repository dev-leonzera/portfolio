<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class Education extends Model
{
    use Translatable;

    protected $table = 'educations';
    

    protected $fillable = [
        'degree',
        'degree_en',
        'university',
        'year_start',
        'year_end',
        'start_month',
        'end_month',
        'description',
        'description_en',
        'order'
    ];


}
