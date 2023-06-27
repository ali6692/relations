<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;
class SongController extends Controller
{
    public function add_song()
    {
        $song=new Song();
        $song->title='Tum hi ho';
        $song->save();
        return $song;
    }
    public function show_song($id)
    {
        $song=Singer::find($id);
        return $song;
    }
}
