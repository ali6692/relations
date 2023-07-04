<?php
use Illuminate\Support\Facades\Route;


Route::get('/hello', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/helloworld', [\App\Http\Controllers\HomeController::class, 'helloworld']);
Route::get('/hi', [\App\Http\Controllers\HomeController::class, 'app']);



