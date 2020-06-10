<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function SubCategory(){
        $categorics=Category::orderBy("category_name", "asc")->get();
        return view('backend.category.subcategoryform', compact("categorics"));
   }

   function SubCategoryList(Request $request){

    $data= new SubCategory;
    $data->category_id = $request->category_id;
    $data->subcategory_name = $request->subcategory_name;
    $data->save();
    return redirect(route("SubCategoryView"));
   }

   function SubCategoryView(){

    $subview = SubCategory::with("category")->paginate();
    return view("backend.category.subcategoryview", compact("subview"));
   }
}
