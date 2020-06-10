@extends("backend.master")
@section("content")
@section ("act") active @endsection
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
                        
                    <form action="{{route('categoryUpdate')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$edview->id}}">
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
                                                <input type="text" name="category_name" class="form-control" value="{{ $edview->category_name}}" id="category_name" placeholder="Category Name">
                                               
                                            
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