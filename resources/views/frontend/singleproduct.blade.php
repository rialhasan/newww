@extends('frontend.master')
@section('header_css')
<link rel="stylesheet" href="{{url('/frontend')}}/css/jQuery.fancybox.css">
@endsection
@section('content')
   <!-- About Banner Start -->
   <section id="about">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Product Details</h2>
                   <p><a href="{{url('/')}}">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Product Details</span></p>
               </div>
           </div>
       </div>
   </section>
   <!-- About Banner End -->
   
   <!-- Product Details Part start -->
   <section id="details-of-product">
       <div class="container">
           <div class="row">
               <div class="col-md-5 tahsan2">
                   <div class="xzoom-container">
                       
                      @foreach($multii as $multiss)
                      <img class="xzoom" id="xzoom-default" src="{{url('product_img/multi/'.$multiss->image_name)}}" xoriginal="{{url($multiss->image_name)}}" alt="" />
                      @endforeach
                        <div class="xzoom-thumbs">
                        @foreach($multi as $multis)
                        <a href="{{url($multis->image_name)}}">
                        <img class="xzoom-gallery" width="80" src="{{url('product_img/multi/'.$multis->image_name)}}"  xpreview="{{url($multis->image_name)}}" alt=""></a>
                        @endforeach          
                      </div>
                    </div>
               </div>
               <div class="details-product-item col-md-7">
                   <div class="product-details">
                       <div>
                          <h3>{{$product->product_name}}</h3>
                          <h4>
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i> 
                              <i class="fa fa-star"></i>
                              <span>| (124 Reviews)</span> 
                          </h4>
                          <h5>৳ {{$product->product_price}}</h5>
                          <p>{{$product->product_price}}</p>
                       </div>
                   </div>
                   <div class="color-select category">
                      <div class="checkbox chek2 checkbox-success check22">
                           {{-- <ul>
                              <li><span>Color</span></li>
                               @foreach(json_decode($product->product_color) as $colur)
                               <li>
                                    <input type="radio" name= "color" value="{{$colur}}"> {{$colur}}
                                    
                               </li>
                               @endforeach
                           </ul> --}}
                        </div>
                        <div class="checkbox chek2 checkbox-success check33">
                          {{-- <ul>
                              <li><span>Size</span></li>
                              @foreach(json_decode($product->product_color) as $size)
                               <li>
                                    <input type="radio" name= "color" value="{{$size}}"> {{$size}}
                                    
                               </li>
                               @endforeach
                          </ul> --}}
                        </div>
                   </div>
                   <div class="quantity">
                      
                       <div class="handle-counter" id="handleCounter">
                       <div class="quan-head">
                          <h3>Quantity :</h3>
                      </div>
                        <div class="input">
                            <input type="text" value="1">
                        </div>
                        <div class="click">
                            <button class="counter-plus btn btn-primary">+</button>
                            <button class="counter-minus btn btn-primary">-</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                   </div>
                   <div class="add-wishlist">
                       <a href="#"><i class="fa fa-heart"></i></a>
                       <a href="#"><i class="fa fa-random"></i></a>
                       <a href="#"><i class="fa fa-shopping-basket"></i></a>
                   </div>
                   <div class="code-cate">
                       <p>Code<a href="#">: SKY-12345678</a></p>
                       <p>Category<a href="#" class="tahsan3">: {{ $product->cate->category_name }}</a></p>
                       <p>Tags<a href="#" class="tahsan5">: T-shirt, Skirt</a></p>
                   </div>
                   <div class="share">
                    <h6>Share:</h6>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-behance"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  </div>
               </div>
           </div>
       </div>
   </section>
  <!-- product details end -->
  
<!-- Product Discription Part start -->    
   <section id="discription">
       <div class="container">
           <div class="">
               <div class="">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                     <li><a href="#">|</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occacat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                        <p>natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explibo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
               </div>
           </div>
       </div>
   </section>
   <!-- product discription end -->    
   
   <!-- Latest Part Start -->
   <section id="latest">
      <i class="fa fa-chevron-left prv-arrow2"></i>
      <i class="fa fa-chevron-right nxt-arrow2"></i>
       <div class="container">
           <div class="row">
               <div class="latest-main">
                    <div class="heading2 text-center">
                       <h2>latest Products</h2>
                   </div>
                   <div class="latest-item">
                       <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="#">
                                    <img src="images/latest1.jpg" alt="featured-product-img" class="img-responsive">
                                </a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Samsung-GTS</p><span>$ 99.00</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="#"><img src="images/latest2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Samsung-Notebook</p><span>$ 99.00</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="gallery_product col-md-3">
                            <div class="featured-product">
                               <a href="#"> <img src="images/latest3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>iPhone-6sPlus</p><span>$ 99.00</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="#"><img src="images/latest4.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>HTC-Bluray 35</p><span>$ 99.00</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="#"><img src="images/latest2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Samsung-Notebook</p><span>$ 99.00</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="#"><img src="images/latest3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>iPhone-6sPlus</p><span>$ 99.00</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                            
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Latest Part End -->
   
   <!-- Brand Part Start -->
   <section id="brand">
      <i class="fa fa-chevron-left prv-arrow4"></i>
      <i class="fa fa-chevron-right nxt-arrow4"></i>
       <div class="container">
           <div class="row">
               <div class="brand-slider">
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand2.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand1.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand3.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand4.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand5.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand3.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Brand End -->
@endsection
@section('footer_js')
<script src="{{url('/frontend')}}/js/jquery.elevatezoom.js"></script>
<script src="{{url('/frontend')}}/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="{{url('/frontend')}}/js/xzoom.min.js"></script>
<script src="{{url('/frontend')}}/js/setup.js"></script>
@endsection