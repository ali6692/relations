<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function create()
    {
        $departments= \App\Models\Department::create([
            'name'=>'Economics',
        ]);
        return $departments;
    }
    public function show($id)
    {
        $departments=\App\Models\Department::find($id);
        return $departments;
    }
    public function edit($id)
    {
        $departments=\App\Models\Department::find($id);
        $departments->name='Mathematics';
        $departments->save();
        return $departments ;
    }
    public function delete($id)
    {
        $departments  = \App\Models\Department::find($id);
        $departments->delete();
        return 'department deleted';
    }
}
