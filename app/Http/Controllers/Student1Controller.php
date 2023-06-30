<?php

namespace App\Http\Controllers;
use App\Models\Student1;
use Illuminate\Http\Request;


class Student1Controller extends Controller
{
    public function show()
    {
        return Student1::all()->toArray();
    }   
}
