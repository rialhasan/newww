<?php

namespace App\Http\Controllers;

use App\Color;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    function color(){
        return view("backend.color.color");
    }

    function colorPost(Request $request){

        $color =Color::where("color_name", $request->color_name)->exists();

        if($color){
        echo "This Color is already created in database";  
        }else{
            Color::insert([

                "color_code"=> $request->color_code,
                "color_name"=> $request->color_name,
                "created_at"=> Carbon::now("Asia/Dhaka")
                ]);
                return back();
        }


       
        
 
      
    }
}
