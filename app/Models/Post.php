<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Translatable;

class Post extends Model
{
    use Translatable;

    protected $fillable = [
        'title', 'title_en', 'slug', 'content', 'content_en', 'excerpt', 'excerpt_en', 'image', 'published_at', 'category_id'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->t('content')));
        $minutes = ceil($words / 200); // 200 words per minute average
        return $minutes;
    }
}
