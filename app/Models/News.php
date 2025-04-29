<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'published_at',
    ];

    protected $dates = ['published_at'];

    public function getRouteKeyName()
    {
        return 'slug'; // show() funksiyasida `slug` orqali topish uchun
    }
}
