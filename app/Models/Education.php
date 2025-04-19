<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $table = 'educations';
    

    protected $fillable = [
        'degree',
        'university',
        'year_start',
        'year_end',
        'start_month',
        'end_month',
        'description',
    ];


}
