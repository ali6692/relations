<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Address;
use App\Models\User;
Route::get('/user', function()
{  
    \App\Models\Address::create([
        'user_id'=>1,
        'country'=>'India'
    ]);
    \App\Models\Address::create([
        'user_id'=>2,
        'country'=>'United States of America'
    ]);
    \App\Models\Address::create([
        'user_id'=>3,
        'country'=>'United Kingdom'
    ]);
    return 'address created'; 
});