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
       // $categories=Category::all();
        //$post=Post::with('categories')->get();        
        //dd($post->toArray());
        $user=User::first();
        dd($user->toArray());

    }
    
    public function contact(Request $request)
    {
        $contact= new Contact();
        $contact->user_id=$request['user_id'];
        $contact->phone_no=$request['phone_no'];
        $contact->address=$request['address'];  
        $contact->save();
        return $this->belongsTo(User::class);
    }
    public function user(Request $request)
    {
        $user= new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();
        return $this->hasMany(Post::class);
    }
    public function category(Request $request)
    {
        $category=new Category();
        $category->name=$request['name'];
        $category->save();
        return $this->belongsToMany(Post::class);
    }

}
