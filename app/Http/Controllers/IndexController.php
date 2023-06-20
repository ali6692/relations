<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Group;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return Member::with('group')->get();
    }
    public function group()
    {
        return Group::with('member')->get();
    }

    public function member(Request $request)
    {       
        $member= new Member();
        $member->member_id=$request['member_id'];
        $member->name=$request['name'];
        $member->email=$request['email'];
        $member->contact=$request['contact'];
        $member->group_id=$request['group_id']; 
        $member->save();
        return $this->hasMany('App\Models\Member','group_id','group_id');
    }
    
}