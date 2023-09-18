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

Route::get('/subject-create', [App\Http\Controllers\SubjectController::class,'create']);
Route::get('/subject/{id}', [App\Http\Controllers\SubjectController::class,'show']);
Route::get('/subject-edit/{id}', [App\Http\Controllers\SubjectController::class,'edit']);
Route::get('/subject-delete/{id}', [App\Http\Controllers\SubjectController::class,'delete']);

Route::get('/country-create', [App\Http\Controllers\CountryController::class,'create']);
Route::get('/country/{id}', [App\Http\Controllers\CountryController::class,'show']);
Route::get('/country-edit/{id}', [App\Http\Controllers\CountryController::class,'edit']);
Route::get('/country-delete/{id}', [App\Http\Controllers\CountryController::class,'delete']);

Route::get('/state-create', [App\Http\Controllers\StateController::class,'create']);
Route::get('/state/{id}', [App\Http\Controllers\StateController::class,'show']);
Route::get('/state-edit/{id}', [App\Http\Controllers\StateController::class,'edit']);
Route::get('/state-delete/{id}', [App\Http\Controllers\StateController::class,'delete']);

Route::get('/hobby-create', [App\Http\Controllers\HobbyController::class,'create']);
Route::get('/hobby/{id}', [App\Http\Controllers\HobbyController::class,'show']);
Route::get('/hobby-edit/{id}', [App\Http\Controllers\HobbyController::class,'edit']);
Route::get('/hobby-delete/{id}', [App\Http\Controllers\HobbyController::class,'delete']);

Route::get('/department-create', [App\Http\Controllers\DepartmentController::class,'create']);
Route::get('/department/{id}', [App\Http\Controllers\DepartmentController::class,'show']);
Route::get('/department-edit/{id}', [App\Http\Controllers\DepartmentController::class,'edit']);
Route::get('/department-delete/{id}', [App\Http\Controllers\DepartmentController::class,'delete']);

