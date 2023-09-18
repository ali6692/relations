<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function create()
    {
        $hobbies= \App\Models\Hobby::create([
            'name'=>'Reading newspaper',
        ]);
        return $hobbies;
    }
    public function show($id)
    {
        $hobbies=\App\Models\Hobby::find($id);
        return $hobbies;
    }
    public function edit($id)
    {
        $hobbies=\App\Models\Hobby::find($id);
        $hobbies->name='Photography';
        $hobbies->save();
        return $hobbies ;
    }
    public function delete($id)
    {
        $hobbies  = \App\Models\Hobby::find($id);
        $hobbies->delete();
        return 'hobby deleted';
    }
}
