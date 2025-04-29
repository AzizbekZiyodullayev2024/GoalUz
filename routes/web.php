<?php

use App\Models\Team;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $teams = Team::all();
    return view('welcome', compact('teams'));
});