<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class StateController extends Controller
{
    public function create()
    {
        $states = \App\Models\State::create([
            'name' => 'Delhi',
            'country_id'=>1,
        ]);
        return $states;
    }

    public function show($id)
    {
        $states = \App\Models\State::find($id);
        return $states;
    }

    public function edit($id)
    {
        $states = \App\Models\State::find($id);
        $states->name = 'Himachal Pradesh';
        $states->country_id=2;
        $states->save();
        return $states;
    }

    public function delete($id)
    {
        $states = \App\Models\State::find($id);
        $states->delete();
        return 'state deleted';
    }
}
