<?php

use App\Models\Team;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     $teams = Team::all();
//     return view('welcome', compact('teams'));
// });

Route::get('/', function () {
    $teams = Team::all();
    return view('home', compact('teams'));
});