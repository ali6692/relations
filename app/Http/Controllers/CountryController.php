<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CountryController extends Controller
{
    public function create()
    {
        $countries= \App\Models\Country::create([
            'name'=>'India',
        ]);
        return $countries;
    }
    public function show($id)
    {
        $countries=\App\Models\Country::find($id);
        return $countries;
    }
    public function edit($id)
    {
        $countries= \App\Models\Country::find($id);
        $countries->name='Canada';
        $countries->save();
        return $countries ;
    }
    public function delete($id)
    {
        $countries  = \App\Models\Country::find($id);
        $countries->delete();
        return 'country deleted';
    }
}
