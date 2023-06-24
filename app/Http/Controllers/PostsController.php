<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Post::with(relations:'photos')->get();
        return view(view:'posts.index');
    }
    public function create()
    {
        return view(view:'posts.create');
    }
    public function store(Request $request)
    {
        $post=Post::create($request->only(['title']));
        $photos=explode(delimiter:",",$request->get(key:'photos'));
        foreach ($photos as $photo){
            Photo::create([
                'imageable_id'=>$post->id,
                'imageable_type'=>'App\Models\Post',
                'filename'=>$photo
            ]);

        }
        return redirect()->route(route:'posts.index');
    }
    public function show($id)
    {
        
    }
}
