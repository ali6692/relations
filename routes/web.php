<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraController;


Route::get('/data',[LaraController::class,'index']);
