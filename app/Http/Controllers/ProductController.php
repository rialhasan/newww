<?php

namespace App\Http\Controllers;
use App\Color;
use App\Size;
use App\MultiImage;
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
       $unique_code= Str::random(10);
       $colors = Color::orderBy("color_name","asc")->get();
       $sizes = Size::orderBy("size_name","asc")->get();
       $categorics = Category::orderBy("category_name","asc")->get();
       $subcategorics = SubCategory::orderBy("subcategory_name","asc")->get();
       return view("backend.product.product",compact("colors","sizes","categorics","subcategorics", "unique_code"));
   }

   function productPost(Request $request){

// dd($request->all());
    $request->validate([
        'product_thumbnail' => 'required',
    ]);
    $slug= $request->slug;
    if ($request->hasFile('product_thumbnail')){
    $img= $request->file('product_thumbnail');
    $ext= $slug.'.'.$img->getClientOriginalExtension();
    Image::make($img)->resize(270, 350)->save(public_path('product_img/'.$ext));
    }
    else{
        echo "No Image";
    }



    $product= Product::create([
        'product_name' => $request->product_name,
        'slug' =>$request->slug,
        'product_summary' =>$request->product_summary,
        'product_description' =>$request->product_description,
        'product_color' =>$request->product_color,
        'product_size' =>$request->product_size ?? 0,
        'product_price' =>$request->product_price,
        'product_thumbnail' =>'product_img/'.$ext,
        'product_quantity' =>$request->product_quantity,
        'category_id' =>$request->category_id ?? 0,
        'subcategory_id' =>$request->subcategory_id ?? 0,
        'product_alart' =>$request->product_alart,
        'product_code' =>$request->product_code,
        'product_tags' =>$request->product_tags
    ]);

    if ($request->hasFile('product_image')){
        $img= $request->file('product_image');

        foreach($img as $mg){
            $ext= $slug.Str::random(5).'.'.$mg->getClientOriginalExtension();
        Image::make($mg)->resize(270, 350)->save(public_path('product_img/multi/'.$ext));
           

         MultiImage::create([
            'product_id'=> $product->id,
            'image_name'=> '/product_img/multi/'.$ext,
         ]);
        }
        
        }
        else{
            echo "No Image";
        }

    return redirect()->back();

   }
 
   function productList(){
       $products=Product::paginate();
       return view('backend.product.productview',compact('products'));
   }
   function productEdit($id){
    $unique_code= Str::random(10);
    $colors = Color::orderBy("color_name","asc")->get();
    $sizes = Size::orderBy("size_name","asc")->get();
    $categorics = Category::orderBy("category_name","asc")->get();
    $subcategorics = SubCategory::orderBy("subcategory_name","asc")->get();
    $product= Product::findOrFail($id);
    session('product_id',$id);
    return view("backend.product.productedit",compact("colors","sizes","categorics","subcategorics", "unique_code","product"));
      
   }

   function productUpdate(Request $request){
    if ($request->hasFile('product_thumbnail')){
    $id= $request->get('product_id');
    $slug = $request->slug;
    $get_img= Product::findOrFail($id)->product_thumbnail;
    // unlink(public_path( $get_img));

    $img= $request->file('product_thumbnail');
    $ext= $slug.'.'.$img->getClientOriginalExtension();
    Image::make($img)->resize(270, 350)-save(public_path('product_img/'.$ext));
    }
    return view();
    Product::findOrFail($request->product_id)->update([

    ]);

    return view();
   }
  
}
