<?php

namespace App\Http\Controllers;
use App\Color;
use App\Size;
use App\Category;
use App\SubCategory;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
   function product(){
       $colors = Color::orderBy("color_name","asc")->get();
       $sizes = Size::orderBy("size_name","asc")->get();
       $categorics = Category::orderBy("category_name","asc")->get();
       $subcategorics = SubCategory::orderBy("subcategory_name","asc")->get();
       return view("backend.product.product",compact("colors","sizes","categorics","subcategorics"));
   }

   function productPost(Request $request){


    $request->validate([
        $slug= $request->slug;

        'product_thumbnail' => 'required|mimes:jpeg,bmp,png'
    ]);

    if ($request->hasFile('product_thumbnail')){
    $img= $request->file('product_thumbnail');
    $ext= $slug.'.'.$img->getClientOriginalExtension();
    Image::make($img)->resize(270, 350)-save(public_path('product_img/'.$ext));
    }
    else{
        echo "No Image";
    }



    $product_id= Product::insertGetId([
        'product_name' => $request->product_name,
        'slug' =>$request->slug,
        'product_summary' =>$request->product_summary,
        'product_description' =>$request->product_description,
        'product_color' =>$request->product_color,
        'product_size' =>$request->product_size,
        'product_price' =>$request->product_price,
        'product_thumbnail' =>'product_img/'.$ext,
        'product_quantity' =>$request->product_quantity,
        'category_id' =>$request->category_id,
        'subcategory_id' =>$request->subcategory_id,
        'product_alart' =>$request->product_alart,
        'product_code' =>$request->product_code,
        'product_tags' =>$request->product_tags,
        'created_at'=> Carbon::now("Asia/Dhaka")
    ]);

    if ($request->hasFile('product_image')){
        $img= $request->file('product_image');

        foreach($img as $mg){
            $ext= $slug.Str::random(5).'.'.$mg->getClientOriginalExtension();
        Image::make($mg)->resize(270, 350)-save(public_path('product_img/multi/'.$ext));
           

         MultiImage::insert([
          
            'product_id'=> $product_id,
            'image_name'=> '/product_img/multi/'.$ext,
            'created_at'=> Carbon::now("Asia/Dhaka")
         ]);
        }
        
        }
        else{
            echo "No Image";
        }

    return back();

   }
 
   function productList(){
       $products=Product::paginate();
       return view('backend.product.productview',compact('products'));
   }
}
