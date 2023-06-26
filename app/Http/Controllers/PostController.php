<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use\App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $tag=Tag::find(2);
        
        dd($tag->post);

    }
    public function tag(Request $request)
    {
        $tag=new Tag();
        $tag->name=$request['name'];
        $tag->save();
        return $this->belongsToMany(Tag::class);
    }
    public function post()
    {
        $post=new Post();
        $post->title=$request['title'];
        $post->save();
        return $this->belongsToMany(Post::class);
    }
}
