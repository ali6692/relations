<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products=Product::with(relations:'photos')->get();
        return view(view:'products.index',compact(varname:'products'));

    }
    public function create()
    {

    }
    public function store(Request $request)
    {

    }
    public function show($id)
    {
        
    }
}
