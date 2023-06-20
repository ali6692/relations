<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
User,
Contact,
Post,
Category
};

class TestController extends Controller
{
    //
    public function index()
    {
        //$user=User::with('contact')->first();
        //dd($user->toArray());
       // $contact=Contact::with('user')->first();
        //dd($contact->toArray());
        //has many
        //$user=User::with(['contact','posts'])->find(1);
        //dd ($user->toArray());
        //$post=Post::with('user')->first();
        //dd($post->toArray());
        // many to many
        $categories=Category::all();
        $post=Post::with('categories')->get();
        
        
        dd($post->toArray());

    }

}
