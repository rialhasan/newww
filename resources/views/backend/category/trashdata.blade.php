@extends("backend.master")
@section("content")
@section ("act") active @endsection
<div class="page-inner" style="min-height:789px !important">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Responsive Tables</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Responsive Tables</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">


                        
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Trash Data</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL </th>
                                                    <th>Category Name</th>
                                                    <th>Create Time</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($trash as $key => $item)
                                            <tr>
                                                    <th scope="row">{{$trash->firstItem() + $key }}</th>
                                                    <td>{{ $item->category_name}}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                    <a href="{{route('categoryRestore', $item->id) }}" class="btn btn-info">Restore</a>
                                                    <a href="{{route('forDelete', $item->id) }}" class="btn btn-danger">Permanent Delete</a>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            
                                            </tbody>
                                        </table>
                                        {{$trash->links()}}
                                    </div>
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
