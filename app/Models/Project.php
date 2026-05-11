<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Traits\Translatable;

class Project extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'title_en',
        'description',
        'description_en',
        'image',
        'project_link',
        'github_link',
        'technologies',
        'order',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}
