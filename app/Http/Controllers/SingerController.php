<?php

namespace App\Http\Controllers;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer()
    {
        $singer=new Singer();
        $singer->name='Arijit Singh';
        $singer->save();
        $songids=[1];
       // $singer->songs()->attach($songids);
       return $singer;
    }
    public function show_singer($id)
    {
        $singer=Song::find($id);
        return $singer;
    }
}
