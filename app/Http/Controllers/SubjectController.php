<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function create()
    {
        $subjects= \App\Models\Subject::create([
            'name'=>'Maths Science Social Science French English ',
        ]);
        return $subjects;
    }
    public function show($id)
    {
        $subjects=\App\Models\Subject::find($id);
        return $subjects;
    }
    public function edit($id)
    {
        $subjects=\App\Models\Subject::find($id);
        $subjects->name='C C++ Java Python PHP R';
        $subjects->save();
        return $subjects ;
    }
    public function delete($id)
    {
        $subjects  = \App\Models\Subject::find($id);
        $subjects->delete();
        return 'subject deleted';
    }

}
