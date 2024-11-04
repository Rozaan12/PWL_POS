<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\KateController;
use App\Http\Controllers\LevelController; // Tambahkan ini untuk mengimpor LevelController
use App\Http\Controllers\KategoriController; // Tambahkan ini untuk mengimpor KategoriController
use App\Http\Controllers\UserController; // Tambahkan ini untuk mengimpor UserController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']); // Route untuk LevelController
Route::get('/kategori', [KategoriController::class, 'index']); // Route untuk KategoriController
Route::get('/user', [UserController::class, 'index']); // Route untuk userController
