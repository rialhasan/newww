@extends("backend.master")
@section("content")
@section ("color") active @endsection
<div class="page-inner" style="min-height:937px !important">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Form Elements</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="{{route('front')}}">Home</a></li>
                            <li class="active">Color</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        
                    <form action="{{route('colorPost')}}" method="post">
                    @csrf
                    <div class="col-md-8 col-md-offset-2"> 
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Color Add</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal m-t-xs">




                                    <div class="form-group">
                                            <label for="color_code" class="col-sm-2 control-label">Color Code</label>
                                            <div class="col-sm-10">
                                                <input type="color" name="color_code"  id="color_code">
                                               
                                            
                                            </div>
                                        </div>


                                   <div class="form-group">
                                            <label for="color_name" class="col-sm-2 control-label">Color Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="color_name" class="form-control" id="color_name" placeholder="Color Name">
                                               
                                            
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
                @component('inc.copyright')
              @endcomponent
            </div>
@endsection