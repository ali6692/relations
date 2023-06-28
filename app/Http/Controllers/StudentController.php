<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        return Student::all()->toArray();
    }
    public function add_student()
    {
        $student=new Student();
        $student->name='Bhavjot Singh Suri';
        $student->city='New Delhi';
        $student->save();
    }
}
