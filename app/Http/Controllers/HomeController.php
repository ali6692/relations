<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sample()
    {
        return Inertia::render('Sample');
    }
    public function addRestaurant()
    {
        return Inertia::render('add-restaurant');
    }
    public function home()
    {
        return Inertia::render('home');
    }
    public function updateRestaurant()
    {
        return Inertia::render('update-restaurant');
    }
}

