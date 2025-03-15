<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function fruits()
    {
        $fruits=array('apple', 'banana', 'cherry','cherry','watermelon','Guava');
        return view('homework', compact('fruits'));
        }
}
