<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('verified');
    }
     function categoryform(){
         return view('backend.category.category');
     }
     function categoryinsert(Request $request){
         $request->validate([
             "category_name" => "required",
         ]
       
         );
         Category::insert([
             "category_name" => $request->category_name,
             "created_at" => Carbon::now("Asia/Dhaka"),
         ]);
         return back();
       

     }
      function categoryview(){
          $cate=Category::paginate(2);
          return view("backend.category.catview", compact('cate'));
      }

      function categorydelete($id){
          Category:: findOrFail($id)->delete();
          return back();
      }
      function categoryTrash(){
          $trash= Category:: onlyTrashed()->paginate();
          return view("backend.category.trashdata", compact("trash"));
      }
      function forDelete($id){
          Category:: onlyTrashed()->findOrFail($id)->forceDelete();
          return back();
      }

      function categoryEdit($id){
          $edview= Category::findOrFail($id);
          return view ("backend.category.editview", compact("edview"));
      }

      function categoryUpdate(Request $request){
        Category::findOrFail($request->id)->update([
            "category_name" => $request->category_name,
            "created_at" => Carbon::now("Asia/Dhaka"),
        ]);
        return back();
      }
      function categoryRestore($id){
        Category:: onlyTrashed($id)->findOrFail($id)->restore();
        return back();
      }
}