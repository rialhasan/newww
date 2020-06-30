@extends("backend.master")
@section("content")
@section ("product") active @endsection
@section ("header_css")
<link href="{{asset('/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
<div class="page-inner" style="min-height:937px !important">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Form Elements</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="{{route('front')}}">Home</a></li>
                      
                            <li class="active">Product</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        
                    <form action="{{route('productPost')}}" method="post" enctype="multipart\from-data">
                    @csrf
                    <div class="col-md-8 col-md-offset-2"> 
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Product Add</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal m-t-xs">



<div class="form-group">
    <label for="product_name" class="col-sm-4 control-label">Product Name</label>
    <div class="col-sm-10">
        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name" >
                                               
                                            
    </div>
</div>


<div class="form-group">
    <label for="slug" class="col-sm-4 control-label">Product Slug</label>
    <div class="col-sm-10">
        <input readonly type="text" name="slug" class="form-control" id="slug"  >
                                               
                                            
    </div>
</div> 



<div class="form-group">
    <label for="product_summary" class="col-sm-4 control-label">Product Summary</label>
    <div class="col-sm-10">
        <input type="text" name="product_summary" class="form-control" id="product_summary" placeholder="Product Summary">
                                               
    </div>
</div>


<div class="form-group">
    <label for="product_description" class="col-sm-4 control-label">Product Description</label>
    <div class="col-sm-10">
     <textarea name="product_description" id="product_description" class="from-control" placeholder="Product Description"></textarea>
                                               
    </div>
</div>


<div class="form-group">
    <label for="product_summary" class="col-sm-4 control-label">Product Color</label>
    <div class="col-sm-10">
    <select multiple name="product_color" id="product_color" class="from-control" style='width:100%'>
    @foreach ($colors as $color)
    <option value="{{ $color->color_name }}">{{ $color->color_name }}</option>
    @endforeach
    </select>
                                               
    </div>
</div>


<div class="form-group">
    <label for="product_size" class="col-sm-4 control-label">Product Size</label>
    <div class="col-sm-10">
    <select multiple name="product_size" id="product_size" class="from-control" style='width:100%'> 
    @foreach ($sizes as $size)
    <option value="{{ $size->size_name }}">{{ $size->size_name }}</option>
    @endforeach
    </select>
                                               
    </div>
</div>


<div class="form-group">
    <label for="product_price" class="col-sm-4 control-label">Product Price</label>
    <div class="col-sm-10">
        <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Product Price">
                                               
    </div>
</div>



<div class="form-group">
    <label for="product_thumbnail" class="col-sm-4 control-label">Product Thumbnail</label>
    <div class="col-sm-10">
        <input type="file" name="product_thumbnail"  id="product_thumbnail" >
                                               
    </div>
</div>



<div class="form-group">
    <label for="product_quantity" class="col-sm-4 control-label">Product Quantity</label>
    <div class="col-sm-10">
        <input type="text" name="product_quantity" class="form-control" id="product_quantity" placeholder="Product Quantity">
                                               
    </div>
</div>


<div class="form-group">
    <label for="category_id" class="col-sm-4 control-label">Category</label>
    <div class="col-sm-10">
    <select name="category_id" id="category_id" class="from-control" style='width:100%'>
    @foreach ($categorics as $categori)
    <option value="{{ $categori->id }}">{{ $categori->category_name }}</option>
    @endforeach
    </select>
                                               
    </div>
</div>


<div class="form-group">
    <label for="subcategory_id" class="col-sm-4 control-label">Sub Category</label>
    <div class="col-sm-10">
    <select name="subcategory_id" id="subcategory_id" class="from-control select2" style='width:100%'>
    @foreach ($subcategorics as $subcategori)
    <option value="{{ $subcategori->id }}">{{ $subcategori->subcategory_name }}</option>
    @endforeach
    </select>
                                               
    </div>
</div>


<div class="form-group">
    <label for="product_alart" class="col-sm-4 control-label">Product Alart</label>
    <div class="col-sm-10">
        <input type="text" name="product_alart" class="form-control" id="product_alart" placeholder="Product Alart">
                                               
    </div>
</div>



<div class="form-group">
    <label for="product_code" class="col-sm-4 control-label">Product Code</label>
    <div class="col-sm-10">
        <input type="text" value="{{ $unique_code}}" readonly name="product_code" class="form-control" id="product_code" >
                                               
    </div>
</div>



<div class="form-group">
    <label for="product_tags" class="col-sm-4 control-label">Product Tag</label>
    <div class="col-sm-10">
        <input type="text" name="product_tags" class="form-control" id="product_tags" placeholder="Product Tag">
                                               
    </div>
</div>




<div class="form-group">
    <label for="product_image" class="col-sm-4 control-label">Product Thumbnail</label>
    <div class="col-sm-10">
        <input type="file" multiple name="product_image[]"  id="product_image" >
                                               
    </div>
</div>






                    </form>


                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-10">
                                                <button type="submit" class="btn btn-success m-t-xxs">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
                </div>
            </div>
@endsection

@section("footer_javascript")

<script>
 $(document).ready(function () {
    $('#success').fadeIn('slow').delay(5000).fadeOut('slow');
$('#product_color,#product_size,#category_id,#subcategory_id').select2();
$('#product_name').keyup(function(){
    $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
});
    });

</script>
@endsection