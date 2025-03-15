<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function demo()
    {
        $name = 'Jay';
        $arr=array("Red","Yellow","Green","White","Black");
        return view('practice',compact('name','arr'));
    }
}
