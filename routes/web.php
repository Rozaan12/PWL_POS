<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController; // Tambahkan ini untuk mengimpor LevelController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']); // Route untuk LevelController
