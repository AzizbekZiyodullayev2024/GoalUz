<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getLatestArticle()
{
    $article = Article::with('category')->latest('published_at')->first();

    if (!$article) {
        return response()->json(['error' => 'No article found'], 404);
    }

    return response()->json([
        'title' => $article->title,
        'content' => $article->content,
        'published_at' => $article->published_at ?? now(),
        'views' => $article->views,
        'image_url' => $article->image ? asset('storage/articles/' . $article->image) : null,
        'category' => $article->category ? [
            'id' => $article->category->id,
            'name' => $article->category->name,
        ] : null,
    ]);
}
}