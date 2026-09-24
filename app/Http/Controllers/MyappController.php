<?php

namespace App\Http\Controllers;

class MyappController extends Controller
{
    public function index()
    {
        return 'hello from controller';
    }
    public function aboutus($id, $name){
        return view('aboutus', compact('$id','$name'));
    }
}