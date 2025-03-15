<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::latest()->paginate(3); //select * from tbl_name;
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "cat_name" => "required",
            "cat_pic" => "required"
        ]);

        $imgName = "Cat" . time() . "." . $request->cat_pic->extension();
        $request->cat_pic->move(public_path('image'), $imgName);

        // move_uploaded_file(asset('image')."/".$imgName,$request->cat_pic);

        $table = new Category();
        $table->cat_name = $request->cat_name;
        $table->cat_pic = $imgName;
        $table->save();
        return redirect('category')->withSuccess("Inserted Success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        //
        $table = Category::find($category->_id);
        $table->cat_name = $request->cat_name;
        if (isset($request->cat_pic)) {
            $imgName = "Cat" . time() . "." . $request->cat_pic->extension();
            $request->cat_pic->move(public_path('image'), $imgName);
            $table->cat_pic = $imgName;
        }
        $table->save();
        return redirect('category')->withSuccess("Updated Success");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //

        $category->delete();
        return redirect('category')->withSuccess("Deleted Success");;
    }
    
}
