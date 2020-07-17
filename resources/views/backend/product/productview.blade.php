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
                                    <h4 class="panel-title">Category View</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL </th>
                                                    <th>Product Name</th>
                                                    <th>Product Size</th>
                                                    <th>Product Thumbnail</th>
                                                    <th>Product Quantity</th>
                                                    <th>Product Multi Image</th>
                                                    <th>Product Color</th>
                                                    <th>Create Time</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $key => $item)
                                            <tr>
                                                    <th scope="row">{{$products->firstItem() + $key }}</th>
                                                    <td>{{ $item->product_name}}</td>
                                                    <td class="text-center">{{ $item->product_price}}</td>
                                                    <td class="text-center"><img width="100" height="100" src="{{ $item->category_thubnail}}" alt=""></td>
                                                    <td class="text-center">{{ $item->product_quantity}}</td>
                                                    <td class="text-center">
                                                    @foreach (App\MultiImage::where("product_id", $item->id)->get() as $proitem)
                                                     <img height="100" src="{{ url($proitem->image_name) }}" alt="">
                                                    @endforeach
                                                    </td>
                                                    <td class="text-center">
                                                    {{-- @php
                                                        $count= 1;
                                                        $data= count(json_decode($item->product_color ) ?? 0);
                                                    @endphp
                                                    @foreach (json_decode($item->product_color) as $value)
                                                    {{ $value}}
                                                    @if ($count < $data)
                                                    {{ ","}}
                                                    @endif
                                                    @php
                                                         $count++;
                                                    @endphp
                                                    @endforeach      --}}

                                                   </td>
                                                    <td class="text-center">{{ $item->created_at->format("D M Y") }}</td>
                                                    <td>
                                                    <a href="{{ route('productEdit', $item->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('singleproduct', [$item->slug, $item->id]) }}" class="btn btn-info">View</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            
                                            </tbody>
                                        </table>
                                        {{$products->links()}}
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
@endsection$products