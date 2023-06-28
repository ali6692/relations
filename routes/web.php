<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('student',[StudentController::class,'show']);
Route::get('add-student',[StudentController::class,'add_student']);
