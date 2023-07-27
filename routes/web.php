<?php
use Illuminate\Support\Facades\Route;

Route::get('/sample', [\App\Http\Controllers\HomeController::class, 'sample']);;
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home']);;
Route::get('/add-restaurant', [\App\Http\Controllers\HomeController::class, 'addRestaurant']);;



