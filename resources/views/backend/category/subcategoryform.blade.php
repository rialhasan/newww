@extends("backend.master")
@section("content")
@section ("subcategory") active @endsection
@section('header_css')
<link href="//cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection
<div class="page-inner" style="min-height:937px !important">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Form Elements</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Form Elements</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        
                    <form action="{{route('SubCategoryList')}}" method="post">
        
                    @csrf
                    <div class="col-md-8 col-md-offset-2"> 
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Horizontal Form</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal m-t-xs">
                                        <div class="form-group">
                                            <label for="category_name" class="col-sm-2 control-label">Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="category_id" id="category_id">
                                                @foreach($categorics as $item)
                                                <option value="{{$item->id}}">{{$item->category_name}}</option>
                                                @endforeach
                                                
                                                </select>
                                              
                                            
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label for="subcategory_name" class="col-sm-2 control-label">Sub Category</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="subcategory_name" class="form-control" id="subcategory_name" placeholder="Sub Category Name">
                                               
                                            
                                            </div>
                                        </div>
                    </form>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
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
<script src="//cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>$(document).ready(function() {
    $('#category_id').select2();
});</script>
<script>
$("#success").fadeIn('slow').delay(5000).fadeOut('slow');
</script>
@endsection