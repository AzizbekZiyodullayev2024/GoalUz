<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/latest-article', [ArticleController::class, 'getLatestArticle']);