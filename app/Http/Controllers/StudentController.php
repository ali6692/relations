<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function Monolog\toArray;

class StudentController extends Controller
{
    public function create()
    {
        $students =  \App\Models\Student::create([
            'name' => 'Faraz Ali Khan',
            'email'=>'abc@gmail.com',
            'gender'=>'M',
            'address'=>'Delhi',
            'dob'=>'1995-09-28',
            'mobile_no'=>123,
            'country_id'=>'1',
            'state_id'=>'1',
            'pin_code'=>'110017',
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
        $students->name='Rubal Gulati';
        $students->email='def@gmail.com';
        $students->gender='M';
        $students->address='Delhi';
        $students->dob='1996-08-03';
        $students->mobile_no=456;
        $students->state_id='2';
        $students->country_id='2';
        $students->pin_code='823001';
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
