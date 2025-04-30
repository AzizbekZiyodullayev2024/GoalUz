<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'content', 'image_url',
        'author', 'published_at', 'views'
    ];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}