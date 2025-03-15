<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getCategortyData()
    {
        $data = Category::get(); //select * from categories
        // $data = Category :: where("cat_name","LIKE s%")
        // ->where("")
        // ->get();

        if ($data != null) {
            return [
                "status" => true,
                "message" => "Data fetched successfully",
                "data" => $data
            ];
        } else {
            return [
                "status" => false,
                "message" => "No data found",
                "data" => null
            ];
        }
    }

    public function addCategoryApi(Request $request)
    {
        if (isset($request->cat_name)) {
            $table = new Category();
            $table->cat_name = $request->cat_name;
            $table->cat_pic = "";
            $table->save();

            $data = Category::get();
            return [
                "status" => true,
                "message" => "Category added successfully",
                "data" => $data
            ];
        } else {
            return [
                "status" => false,
                "message" => "Category name is required",
                "data" => null
            ];
        }
    }
}
