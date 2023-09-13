<?php
use Illuminate\Support\Facades\Route;

Route::get('/sample', [\App\Http\Controllers\HomeController::class,'sample']);;
Route::get('/home', [\App\Http\Controllers\HomeController::class,'home']);;
Route::get('/add-restaurant', [\App\Http\Controllers\HomeController::class,'addRestaurant']);;
Route::get('/update-restaurant', [\App\Http\Controllers\HomeController::class,'updateRestaurant']);;


Route::get('/registration-create', [App\Http\Controllers\StudentController::class,'create']);
Route::get('/registration/{id}', [App\Http\Controllers\StudentController::class,'show']);
Route::get('/registration-edit/{id}', [App\Http\Controllers\StudentController::class,'edit']);
Route::get('/registration-delete/{id}', [App\Http\Controllers\StudentController::class,'delete']);

Route::get('/api/products',[App\Http\Controllers\ProductController::class,'index']);

