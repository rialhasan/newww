<?php

namespace App\Http\Controllers;
use App\Color;
use App\Cart;
use App\Size;
use App\Category;
use App\MultiImage;
use App\Product;

use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    function frontend(){
        $cats = Category::orderBy("category_name", "asc")->get();
        return view('frontend.main',compact("cats"));
    }

    function singleproduct($slug){
        $product= Product::where('slug', $slug)->with('cate')->first();
        $multi= MultiImage::where("product_id",$product->id)->get();
        $multii= MultiImage::where("product_id",$product->id)->limit(1)->get();
        return view('frontend.singleproduct',compact("product"," multi","multii"));
    }

    function SingleCart($id){

        $ip=$_SERVER['REMOTE_ADDR'];
        $MAC= exec('getmac');
        $MAC= strtok($MAC, '');

        Cart::insert([
            "product_id"=> $id,
            "user_ip"=> $ip,
            "device"=> $MAC,
            "quantity"=> 1,
            "created_at" => Carbon::now("Asia/Dhaka")
        ]);

        return view();
    }
}
