<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegesterController extends Controller
{
    public function OpenRegester()
    {
        return view('regester');
    }

    public function Regester(Request $request){
        $request->validate([
            "fullName"=>"required",
            "email"=>"required|email", 
            "password"=>"required|min:6|max:8",
            "confirmPassword"=>"required|same:password",
        ]);
    {
        echo $request->fullName . '<br>';
        echo $request -> email . '<br>';
        echo $request -> password . '<br>';
        echo $request -> confirmPassword . '<br>';
    }
}
}