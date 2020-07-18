<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>E-BUY</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
</head>
<body>
  <!-- Header Part Start -->
   <header id="header">
       <div class="container">
           <div class="row">
               <div class="header-content">
                   <div class="col-md-4">
                       <div class="header-left">
                            <div class="sel-box">
                                 <select class="bdr">
                                    <option>ENG</option>
                                    <option>BAN</option>
                                    <option>ESP</option>
                                </select>
                            </div>
                            <div class="sel-box">
                                 <select>
                                    <option>USD</option>
                                    <option>EUR</option>
                                    <option>GBP</option>
                                </select>
                            </div>
                            <div class="sel-box">
                                 <a href="tel:+12345678900">Toll Free: +123 4567 8900</a>
                            </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-md-offset-4">
                       <div class="header-right text-right">
                           <ul>
                               <li>
                                   <a href="shopping-cart.html"><i class="fa fa-heart"></i> Wishlist</a>
                               </li>
                               <li>
                                   <a href="my-account.html"><i class="fa fa-user"></i> My Account</a>
                               </li>
                               <li>
                                   <a href="{{route('login')}}">Login</a>
                               </li>
                               <li>
                                   <a href="{{route('register')}}">Register</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
<!-- Header Part End -->
   
<!-- mobile menu end -->     
<nav class="mobile-menu hidden">
  <a href="index.html">
      <img src="images/logo.png" alt="logo">
  </a>
   <ul>
        <li class="">
            <a href="#">
              Home
            </a>
            <ul>
              <a class="" href="index.html">Home 1</a>
              <a class="" href="index2.html">Home 2</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shop
            </a>
            <ul>
              <a class="" href="product-grid-view.html">Product Grid View</a>
              <a class="" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
              <a class="" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
              <a class="" href="product-details.html">Product Details</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <ul>
              <a class="" href="about.html">About</a>
              <a class="" href="shopping-cart.html">Cart</a>
              <a class="" href="checkout.html">Checkout</a>
              <a class="" href="my-account.html">Login</a>
              <a class="" href="my-account.html">Register</a>
              <a class="" href="shopping-cart.html">Whislist</a>
              <a class="" href="404.html">404</a>
            </ul>
          </li>
          <li class="">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <ul>
              <a class="" href="blog-grid-view.html">Blog Grid View</a>
              <a class="" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
              <a class="" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
              <a class="" href="blog-details.html">Blog Details</a>
            </ul>
          </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
<!-- mobile menu end -->   
 
<!-- Navbar Part Start -->   
    <nav class="navbar navbar-default hidden-xs">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="logo" class="img-responsive">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
<!--            <li class="active"><a href="index.html">Home</a></li>-->
<!--            <li><a href="product-grid-view.html">Men</a></li>-->
<!--            <li><a href="product-grid-view-with-sidebar.html">Women</a></li>-->
<!--            <li><a href="product-list-view-with-sidebar.html">Accesorries</a></li>-->
<!--            <li><a href="blog-grid-view.html">Blog</a></li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.html">Home 1</a>
                  <a class="dropdown-item" href="index2.html">Home 2</a>
                </div>
              </li>
              <li><a class="dropdown-item" href="about.html">About</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="product-grid-view.html">Product Grid View</a>
                  <a class="dropdown-item" href="product-grid-view-with-sidebar.html">Product Grid View With Sidebar</a>
                  <a class="dropdown-item" href="product-list-view-with-sidebar.html">Product List View With Sidebar</a>
                  <a class="dropdown-item" href="product-details.html">Product Details</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="shopping-cart.html">Cart</a>
                  <a class="dropdown-item" href="checkout.html">Checkout</a>
                  <a class="dropdown-item" href="my-account.html">Login</a>
                  <a class="dropdown-item" href="my-account.html">Register</a>
                  <a class="dropdown-item" href="shopping-cart.html">Whislist</a>
                  <a class="dropdown-item" href="404.html">404</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="blog-grid-view.html">Blog Grid View</a>
                  <a class="dropdown-item" href="blog-grid-with-sidebar.html">Blog Grid View With Sidebar</a>
                  <a class="dropdown-item" href="blog-grid-list-view.html">Blog List View With Sidebar</a>
                  <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                </div>
              </li>
            <li><a href="contact.html">Contact</a></li>
          </ul> 
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" id="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
            <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
              </span>

                  <div class="items text-left">
                      <div class="items-total">
                          <p>You have <span>02 items</span> in your shopping bag</p>
                      </div>
                      <div class="item-choose-main">
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="images/items1.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="images/items2.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="total-price">
                          <h3>Total <span>$ 500.00</span></h3>
                      </div>
                      <div class="items-check text-center">
                          <a href="#">view cart</a>
                          <a class="check-out" href="#">Checkout</a>
                      </div>
                  </div>
              </li>
           </ul>
        </div>
    </div>
</nav>
<!-- Navbar Part End -->
    
<!-- mobile logo start -->      
<nav class="navbar-default visible-xs">
  <div class="container">
      <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="logo" class="img-responsive">
          </a>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <form class="search-form">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                </form>
            </li>
            <li class="tahsan"><span><a href="#"><i class="fa fa-shopping-bag"></i> 2 Items</a>
              </span>

                  <div class="items text-left">
                      <div class="items-total">
                          <p>You have <span>02 items</span> in your shopping bag</p>
                      </div>
                      <div class="item-choose-main">
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="images/items1.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                          <div class="item-choose">
                              <ul>
                                  <li>
                                      <img src="images/items2.png" alt="item1" class="img-responsive">
                                  </li>
                                  <li>
                                      <h3>T-shirt for Women</h3>
                                      <p>Price : $ 99.00</p>
                                      <p>Qty :  02</p>
                                  </li>
                                  <li>
                                      <i class="fa fa-trash-o"></i>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="total-price">
                          <h3>Total <span>$ 500.00</span></h3>
                      </div>
                      <div class="items-check text-center">
                          <a href="#">view cart</a>
                          <a class="check-out" href="#">Checkout</a>
                      </div>
                  </div>
              </li>
           </ul>
        </div>
    </div>
</nav>
<!-- mobile logo end -->  
   
<!-- Banner Part Start -->
   <section id="banner">
      <i class="fa fa-chevron-left prv-arrow"></i>
      <i class="fa fa-chevron-right nxt-arrow"></i>
       <div class="banner-slider">
           <div class="banner-img" style="background: url(images/banner1.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="banner-img" style="background: url(images/banner2.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="banner-img" style="background: url(images/banner3.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="banner-img" style="background: url(images/banner4.jpg) no-repeat center; background-size: cover">
               <div class="container">
                   <div class="row">
                       <div class="col-md-5">
                           <div class="banner-content">
                           <h1>2017</h1>
                           <h2>Trendy Design</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                           <a href="#">View More</a>
                           <a class="pur" href="#">Purchase</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Banner Part End -->
   
   <!-- Service Part Start -->
   <section id="service">
       <div class="container">
           <div class="row">
               <div class="service-main">
                   <div class="col-md-4">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-truck rotat"></i> Free Shipping</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
                   <div class="col-md-4 service-mid">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-support"></i> 24/7 Support</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-money"></i> Cashback</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Service Part End -->
   
   <!-- Newest Part Start -->
   <section id="newest">
       <div class="container">
           <div class="row">
               <div class="newest-main">
                   <div class="col-md-4 col-sm-4">
                       <div class="newest-item">
                           <img src="images/newest1.jpg" alt="newest1" class="img-responsive">
                           <div class="overlay1 text-center">
                               <h2>new</h2>
                               <h3>jeans shirt</h3>
                               <a href="#">shop now</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-4">
                       <div class="newest-item">
                           <img src="images/newest2.jpg" alt="newest1" class="img-responsive">
                           <div class="overlay1 text-center">
                               <h2>2017</h2>
                               <h3>women's glass</h3>
                               <a href="#">shop now</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-4">
                       <div class="newest-item">
                           <img src="images/newest3.jpg" alt="newest1" class="img-responsive">
                           <div class="overlay1 text-center">
                               <h2>best</h2>
                               <h3>mens Shirt</h3>
                               <a href="#">shop now</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Newest Part End -->
   
   <!-- Featured Part Start -->
   <section id="featured">
       <div class="container">
           <div class="row">
               <div class="featured-main">
                   <div class="heading text-center">
                       <h2>featured Products</h2>
                   </div>
                   <div class="featured-filter">
                       <div class="text-center">
                            <button class="btn btn-default active filter-button" data-filter="all">All</button>
                            <button class="btn btn-default filter-button" data-filter="men">men</button>
                            <button class="btn btn-default filter-button" data-filter="women">women</button>
                            <button class="btn btn-default filter-button" data-filter="child">children</button>
                            <button class="btn btn-default filter-button" data-filter="access">accesorries</button>
                        </div>
                        
                        <div class="gallery_product col-md-3 col-sm-4 filter men">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured1.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Woolen T-Shirt</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter women">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Woolen T-Shirt Ash</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter men access">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured4.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>T-Shirt for Women</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter women child">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Silk Skirt</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter men">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured1.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Woolen T-Shirt</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter women access">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured4.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>T-Shirt for women</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter men">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured2.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Silk Skirt</p><span>$ 99.00</span>
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
                        <div class="gallery_product col-md-3 col-sm-4 filter women child">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="images/featured3.jpg" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a> 
                                    <a href="#"><i class="fa fa-random"></i></a> 
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a> 
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>Woolen T-Shirt ash</p><span>$ 99.00</span>
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
   <!-- Featured Part End -->
   
   <!-- Upcoming Part Start -->
   <section id="upcoming">
       <div class="upcoming-bg">
           <div class="container">
               <div class="row">
                   <div class="upcoming-main">
                       <div class="col-md-6">
                           <div class="upcoming-product-img">
                               <img src="images/macbook.png" alt="macbook" class="img-responsive">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="upcoming-prouct-details">
                               <h3>New Product</h3>
                               <h2>Microsoft Surface Pro</h2>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It hasived not only five centuries, with the release of Letraset sheets.</p>
                           </div>
                           <div class="luanch">
                                <h2>launch in</h2>
                                <div class="coundown_res">
                                    <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="day"></h2>
                                            <p>days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="hour"></h2>
                                            <p>hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="month"></h2>
                                            <p>mins</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="second"></h2>
                                            <p>sec</p>
                                         </div>
                                      </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Upcoming Part End -->
   
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
                                <a href="product-details.html"><img src="images/latest1.jpg" alt="featured-product-img" class="img-responsive"></a>
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
                                <a href="product-details.html"><img src="images/latest2.jpg" alt="featured-product-img" class="img-responsive"></a>
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
                                <a href="product-details.html"><img src="images/latest3.jpg" alt="featured-product-img" class="img-responsive"></a>
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
                                <a href="product-details.html"><img src="images/latest4.jpg" alt="featured-product-img" class="img-responsive"></a>
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
                                <a href="product-details.html"><img src="images/latest2.jpg" alt="featured-product-img" class="img-responsive"></a>
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
                                <a href="product-details.html"><img src="images/latest3.jpg" alt="featured-product-img" class="img-responsive"></a>
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
   
   <!-- Testimonial Part Start -->
   <section  id="testimonial">
      <div class="heading3 text-center">
          <h2>testimonial</h2>
      </div>
       <div class="testimonial-bg">
          <i class="fa fa-chevron-left prv-arrow3"></i>
           <i class="fa fa-chevron-right nxt-arrow3"></i>
           <div class="container">
               <div class="row">
                   <div class="testimonial-main">
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="images/testimonial1.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Shahin Alom</h2>
                                    <h3>Sketch Artist</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>Shahin Alom</h4>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="images/testimonial2.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Mahadi Tahsan</h2>
                                    <h3>Software Developer</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>mahadi tahsan</h4>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="images/testimonial1.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Shohan Hossain</h2>
                                    <h3>Software Developer</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>Shohan Hossain</h4>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img src="images/testimonial2.png" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2>Sujon Saha</h2>
                                    <h3>Graphic Designer</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                    <h4>Aminul Islam</h4>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Testimonial Part End -->
   
   <!-- Blog Part Start -->
   <section id="blog">
       <div class="container">
           <div class="row">
               <div class="heading4 text-center">
                   <h2>our blog</h2>
               </div>
               <div class="blog-main">
                   <div class="col-md-4 col-sm-4">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="images/blog1.jpg" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                   </div>
                               </div>
                           <div class="blog-details">
                               <h3>Best E-commerce I’d shopping yet</h3>
                               <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p> 
                               <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-4">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="images/blog2.jpg" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                   </div>
                               </div>
                           <div class="blog-details">
                               <h3>I’m satisfy with their services</h3>
                               <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p> 
                               <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-4">
                       <div class="blog-item">
                           <div class="blog-img">
                               <img src="images/blog3.jpg" alt="blog-img" class="img-responsive">
                                   <div class="overlay3">
                                        <h4><i class="fa fa-calendar"></i> 26 October 2017</h4>
                                        <a href="blog-details.html"><i class="fa fa-link"></i> </a>
                                        <p><span><i class="fa fa-user"></i> By: Admin </span> <span><i class="fa fa-user"></i>  2.5k Likes </span> <span><i class="fa fa-comment"></i> 1.5k comments </span><p>
                                   </div>
                               </div>
                           <div class="blog-details">
                               <h3>I’ll never forget their hospitality</h3>
                               <p>Lorem Ipsum is simply dummy text of the printing andg industry. Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p> 
                               <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i> </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Blog Part End -->
   
   <!-- Footer Part Start -->
   <section id="footer">
       <div class="footer-bg">
           <div class="container">
               <div class="row">
                   <div class="footer-main">
                       <div class="col-md-3 col-sm-6">
                           <div class="footer-logo">
                               <a href="#"><img src="images/footer-logo.png" alt="footer-logo" class="img-responsive"></a>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                               <p>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-6">
                           <div class="contact">
                            <h2>Contact us</h2>
                               <p><i class="fa fa-map-marker"></i> <a href="#">1234, Parkstreet Avenue, NewYork</a> </p>
                               <p><i class="fa fa-phone"></i> <a href="tel:+12345678900">+123 456 78900</a>,<a href="tel:+00987654321"> +009 876 54321</a> </p>
                               <p><i class="fa fa-envelope"></i> <a href="mailto:info@e-feri.com">info@e-feri.com</a>,<a href="mailto:e-feri@info.com"> e-feri@info.com</a> </p>
                               <p><i class="fa fa-globe"></i> <a href="www.e-feri.com">www.e-feri.com</a>,<a href="www.infoferi.com">www.infoferi.com</a> </p>
                           </div>
                       </div>
                       <div class="col-md-2 col-sm-6">
                           <div class="account">
                              <h2>my account</h2>
                               <a href="my-account.html">my account</a>
                               <a href="shopping-cart.html">wishlist</a>
                               <a href="shopping-cart.html">shopping cart</a>
                               <a href="#">compare</a>
                               <a href="checkout.html">checkout</a>
                           </div>
                       </div>
                       <div class="col-md-4 col-sm-6">
                           <div class="newsletter">
                               <h2>Sign Up For Newsletter</h2>
                                   <form>
                                       <div class="input-group">
                                            <input id="1" class="form-control" type="text" name="search" placeholder="Your Mail" required/>
                                            <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                            </span>
                                       </div>
                                   </form>
                               <div class="footer-social">
                                   <h3>follow us on</h3>
                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                   <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                   <a href="#"><i class="fa fa-behance"></i></a>
                                   <a href="#"><i class="fa fa-linkedin"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Footer Part End -->
   
   <!-- Footer Bottom Start -->
   <section id="footer-btm">
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-xs-12">
                  <div class="copywright">
                       <p>Copyright &copy; 2017. All right reserved by <a href="index.html">E-BUY</a></p>
                   </div>
               </div>
               <div class="col-md-6 col-xs-12">
                   <div class="payment text-right">
                       <img src="images/card1.png" alt="card" class="img-responsive">
                       <img src="images/card2.png" alt="card" class="img-responsive">
                       <img src="images/card3.png" alt="card" class="img-responsive">
                       <img src="images/card4.png" alt="card" class="img-responsive">
                       <img src="images/card5.png" alt="card" class="img-responsive">
                   </div>
               </div>
           </div>
       </div>
   </section>   
   <!-- Footer Bottom End -->   
   

    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>