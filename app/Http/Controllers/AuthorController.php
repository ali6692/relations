<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add_author()
    {
        $author=new Author();
        $author->username='faraz';
        $author->password='123';
        $author->save();
    }
    public function show_author($id)
    {
        $author=Post::find($id)->author;
        return $author;
    }
}
