<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Person::get(); //select * from tbl_name;
        return view('person.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "contact" => "required|digits:10",
            "password" => "required",
        ]);

        $table = new Person();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->contact = $request->contact;
        $table->password = $request->password;
        $table->save();
        return redirect('person');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
        return view('person.edit', compact('person'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
        $table = Person::find($person->_id);
        $table->name = $request->name;
        $table->email = $request->email;
        $table->contact = $request->contact;
        $table->password = $request->password;
        $table->save();
        return redirect('person');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
        $person->delete();
        return redirect('person');
    }
}
