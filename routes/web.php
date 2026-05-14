<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/follow', [FeedController::class, 'follow']);
Route::get('/create-post', [FeedController::class, 'createPost']);