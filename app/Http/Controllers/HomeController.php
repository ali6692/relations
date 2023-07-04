<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        dd('Home Component');
        return Inertia::render('Home');
    }
    public function helloworld()
    {
        dd('Welcome to your Vue.js App');
        return Inertia::render(  'HelloWorld');
    }
    public function app()
    {
        dd('Welcome to your Vue.js App');
        return Inertia::render(  'App');
    }
}
