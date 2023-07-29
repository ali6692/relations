<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function create()
    {
        $students =  \App\Models\Student::create([
            'name' => 'Faraz Ali Khan',
            'email'=>'farazmsi2014@gmail.com',
            'gender'=>'M',
            'address'=>'I 42 A Abul Fazal Enclave Jamia Nagar',
            'dob'=>'1995-09-28',
            'password'=>'pqr'
        ]);
        $registration =  \App\Models\Registration::create([
            'name' => 'ABC',
            'email'=>'abc@gmail.com',
            'gender'=>'M',
            'address'=>'I 42 A Abul Fazal Enclave Jamia Nagar',
            'dob'=>'1995-09-28',
            'password'=>'pqr'
        ]);

        return $students;
        return $registration;
    }

    public function show($id)
    {
        $students = \App\Models\Student::find($id);
        $registration = \App\Models\Registration::find($id);

        return $students;
        return $registration;
    }

    public function edit($id)
    {
        $students  = \App\Models\Student::find($id);
        $students ->name='Bhavjot Singh';
        $students ->email='xyz@gmail.com';
        $students ->gender='M';
        $students ->address='XYZ';
        $students ->dob='1996-02-02';
        $students ->password='mno';
        $students ->save();
        return $students ;
        $registration = \App\Models\Registration::find($id);
        $registration->name='DEF';
        $registration->email='def@gmail.com';
        $registration->gender='M';
        $registration->address='Punjab';
        $registration->dob='1996-02-02';
        $registration->password='mno';
        $registration->save();
        return $registration;
    }

    public function delete($id)
    {
        $students  = \App\Models\Student::find($id);
        $registration = \App\Models\Registration::find($id);

        $students ->delete();
        $registration->delete();

        return 'student deleted';
        return 'registration deleted';
    }
}
