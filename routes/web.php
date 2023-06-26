<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Tag;


Route::get('/data',[PostController::class,'index']);
