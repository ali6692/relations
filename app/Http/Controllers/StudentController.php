<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function Monolog\toArray;

class StudentController extends Controller
{
    public function create()
    {
        $students =  \App\Models\Student::create([
            'name' => 'Insha Gilani',
            'email'=>'inshagilanidel1985@gmail.com',
            'gender'=>'F',
            'address'=>'F-13/17 B,First Floor,Joga Bai Extension,Okhla,New Delhi-110025',
            'dob'=>'1998-06-06',
            'password'=>'pqr'
        ]);
        return $students;
    }

    public function show($id)
    {
        $students = \App\Models\Student::find($id);
        return $students;
    }

    public function edit($id)
    {
        $students  = \App\Models\Student::find($id);
        $students ->name='Sana Saeed';
        $students ->email='sanasaeed954@gmail.com';
        $students ->gender='F';
        $students ->address='B 21/A,Abul Fazal Enclave,Jamia Nagar,Okhla,New Delhi-110025';
        $students ->dob='1998-10-20';
        $students ->password='mno';
        $students ->save();
        return $students ;
    }

    public function delete($id)
    {
        $students  = \App\Models\Student::find($id);
        $students->delete();
        return 'student deleted';
    }
}
