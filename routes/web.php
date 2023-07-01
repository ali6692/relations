<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;

Route::get('add-author',[AuthorController::class,'add_author']);
Route::get('show-author/{id}',[AuthorController::class,'show_author']);
Route::get('add-post/{id}',[PostController::class,'add_post']);
Route::get('show-post/{id}',[PostController::class,'show_post']);
Route::get('index/{id}',[IndexController::class,'index']);
