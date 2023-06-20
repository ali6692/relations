<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 
//Route::get('/data',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('/create',[App\Http\Controllers\TestController::class,'group']);
Route::get('/view',[App\Http\Controllers\TestController::class, 'index']);
/*Route::get('/register',[RegistrationController::class,'register']);
Route::get('/customer',function()
{

    $customer=Customer::all();
    echo "<pre>";
    print_r($customer);
});
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);
Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'register']);
Route::get('/customer-create', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('/customer/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/customer-edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/customer-delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);
*/