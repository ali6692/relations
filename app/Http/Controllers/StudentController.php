<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function Monolog\toArray;

class StudentController extends Controller
{
    public function create()
    {
        $students =  \App\Models\Student::create([
            'full_name' => 'Faraz Ali Khan',
            'email'=>'abc@gmail.com',
            'gender'=>'M',
            'address'=>'Delhi',
            'subjects'=>'Maths English Science Social Science',
            'dob'=>'1995-09-28',
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
        $students=\App\Models\Student::find($id);
        $students->full_name='Rubal Gulati';
        $students->email='def@gmail.com';
        $students->gender='M';
        $student->address='Delhi';
        $students->subjects='Urdu';
        $students->dob='1996-08-03';
        $students->password='mno';
        $students->save();
        return $students ;
    }

    public function delete($id)
    {
        $students  = \App\Models\Student::find($id);
        $students->delete();
        return 'student deleted';
    }
}
