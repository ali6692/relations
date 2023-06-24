<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;

class LaraController extends Controller
{
    public function index()
    {
        return Post::all();
    }
    public function comment(Request $request)
    {
        $comment=New Comment();
        $comment->id=$request['id'];
        $comment->body=$request['body'];
        $comment->commentable_type=$request['commentable_type'];
        $comment->commentable_id=$request['commentable_id'];
        $commet->save();
        return $this->morphTo();
    }
    public function post(Request $request)
    {
        $post=New Post();
        $post->id=$request['id'];
        $post->title=$request['title'];
        $post->save();
        return $this->morphMany(Comment::class,'commentable');        
    }
    public function product(Request $request)
    {
        $product=New Products;
        $product->title=$request['title'];
        $product->save();
        return $this->morphMany(related:'App\Models\Photo',name:'imageable'); 
    }
}
