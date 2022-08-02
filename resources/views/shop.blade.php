<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/fusta/fusta/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 05:41:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Best Furniture || Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
   
    <!-- header-area start -->
    <div class="header-area">
        <!-- header-top start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p>Default welcome msg! </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                       <!-- language-currency-wrapper start -->
                       <div class="language-currency-wrapper">
                           <ul>
                                <li class="drodown-show"><a href="#">$ Dollar (US) <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="open-dropdown">
                                        <li><a href="#">Euro €</a></li>
                                        <li class="active"><a href="#">USD $</a></li>
                                    </ul>
                                </li>
                                <li class="drodown-show"><a href="#"><img src="assets/images/icon/la-1.jpg')}}" alt=""> English <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="open-dropdown">
                                        <li class="active"><a href="#"><img src="assets/images/icon/la-1.jpg')}}" alt=""> English </a></li>
                                        <li><a href="#"><img src="assets/images/icon/la-2.jpg')}}" alt=""> Français</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                       </div>
                       <!-- language-currency-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <div class="header-bottom-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-5 col-5">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu-area text-center">
                            <nav class="main-navigation">
                                <ul>
                                    <li  class="active"><a href="{{route('home')}}">Trang Chủ</a>
                                    </li>
                                    <li><a href="{{route('shop')}}">Sản Phẩm</a>
                                    </li>
                                    <li><a href="{{route('contact_us')}}">Liên Hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-7 col-7">
                        <div class="right-blok-box d-flex">
                            <div class="search-wrap">
                                <a href="#" class="trigger-search"><i class="icon-magnifier"></i></a>
                            </div>
                          
                            <div class="user-wrap">
                                <a href="{{route('login_register')}}"><i class="icon-user"></i></a>
                            </div>
                            
                            <div class="shopping-cart-wrap">
                                <a href="{{route('cart')}}"><i class="icon-handbag"></i> <span id="cart-total">2</span></a>
                                <ul class="mini-cart">
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img alt="" src="assets/images/product/1.jpg')}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html"><h4>Product Name 01</h4></a>
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                            <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img alt="" src="assets/images/product/3.jpg')}}"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html"><h4>Product Name 03</h4></a>
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">$130.00</span></div>
                                            <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                        </div>
                                    </li>
                                    <li class="subtotal-titles">
                                        <div class="subtotal-titles"><h3>Sub-Total :</h3><span>$ 230.99</span></div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="{{route('cart')}}">View cart</a>
                                            <a href="#">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mobile-menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    
    <!-- main-search start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><span class="icon-close"></span></button>
        </div>
        <div class="sidebar-search-input">
            <form>
                <div class="form-search">
                    <input id="search" class="input-text" value="" placeholder="Search entire store here ..." type="search">
                    <button class="search-btn" type="button">
                        <i class="icon-magnifier"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- main-search start -->
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- main-content-wrap start -->
    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    <!-- shop-sidebar-wrap start -->
                    <div class="shop-sidebar-wrap">
                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar mb--30">
                            <h4 class="title">CATEGORIES</h4>
                            <ul>  
                                <li><a href="shop.html">Accessories <span>(18)</span></a></li>
                                <li><a href="shop.html">Kids <span>(16)</span></a></li>
                                <li><a href="shop.html">Men <span>(6)</span></a></li>
                                <li><a href="shop.html">Women <span>(11)</span></a></li>
                            </ul>
                        </div>
                        <!-- shop-sidebar end -->
                        
                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar mb--30">
                            <h4 class="title">FILTER BY PRICE</h4>
                            <!-- filter-price-content start -->
                            <div class="filter-price-content">
                                <form action="#" method="post">
                                    <div id="price-slider" class="price-slider"></div>
                                    <div class="filter-price-wapper">
                                        <div class="filter-price-cont">
                                            <span>Price:</span> 
                                            <div class="input-type">
                                                <input type="text" id="min-price" readonly=""/>
                                            </div>
                                            <span>—</span>
                                            <div class="input-type">
                                                <input type="text" id="max-price" readonly=""/>
                                            </div>
                                            <a class="add-to-cart-button" href="#">
                                                <span>FILTER</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>  
                            </div>
                            <!-- filter-price-content end -->
                        </div>
                        <!-- shop-sidebar end -->
                        
                        <!-- shop-sidebar start -->
                        <div class="sidbar-product shop-sidebar mb--30">
                            <h4 class="title">best product</h4>
                            <!-- sidbar-product-inner start -->
                            <div class="sidbar-product-inner">
                                <div class="product-image">
                                    <a href="product-details.html"><img src="assets/images/product/10.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-content text-start">
                                    <h3><a href="product-details.html">Products Name 003</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">120.00</span>
                                        <span class="old-price">130.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- sidbar-product-inner end -->
                            <!-- sidbar-product-inner start -->
                            <div class="sidbar-product-inner">
                                <div class="product-image">
                                    <a href="product-details.html"><img src="assets/images/product/11.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-content text-start">
                                    <h3><a href="product-details.html">Products Name 011</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">140.00</span>
                                        <span class="old-price">103.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- sidbar-product-inner end -->
                            <!-- sidbar-product-inner start -->
                            <div class="sidbar-product-inner">
                                <div class="product-image">
                                    <a href="product-details.html"><img src="assets/images/product/5.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-content text-start">
                                    <h3><a href="product-details.html">Products Name 008</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">160.00</span>
                                        <span class="old-price">121.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- sidbar-product-inner end -->
                        </div>
                        <!-- shop-sidebar end -->
                        
                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar mb--30">
                            <h4 class="title">SIZE</h4>
                            <ul>  
                                <li><a href="shop.html">S <span>(11)</span></a></li>
                                <li><a href="shop.html">M <span>(13)</span></a></li>
                                <li><a href="shop.html">L <span>(6)</span></a></li>
                                <li><a href="shop.html">XLL <span>(51)</span></a></li>
                                <li><a href="shop.html">XXL <span>(3)</span></a></li>
                            </ul>
                        </div>
                        <!-- shop-sidebar end -->
                        
                        
                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar">
                            <h4 class="title">Hot Tags</h4>
                            <div class="sidebar-tag">
                                <a href="#">Women</a>
                                <a href="#">Bags</a>
                                <a href="#">Man</a>
                                <a href="#">Hot</a>
                                <a href="#">fashion</a>
                                <a href="#">digital</a>
                            </div>
                        </div>
                        <!-- shop-sidebar end -->
                    </div>
                    <!-- shop-sidebar-wrap end -->
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <!-- shop-product-wrapper start -->
                    <div class="shop-product-wrapper">
                        <div class="row">
                            <div class="col">
                                <!-- shop-top-bar start -->
                                <div class="shop-top-bar">
                                    <!-- product-view-mode start -->
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul role="tablist" class="nav shop-item-filter-list">
                                            <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-bs-toggle="tab" class="active show" aria-selected="true"><i class="ion-ios-keypad-outline"></i></a></li>
                                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-bs-toggle="tab"><i class="ion-ios-list-outline"></i> </a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <!-- product-view-mode end -->
                                    <!-- product-short start -->
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low > High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                    <!-- product-short end -->
                                </div>
                                <!-- shop-top-bar end -->
                            </div>
                        </div>
                        
                        <!-- shop-products-wrap start -->
                        <div class="shop-products-wrap">
                            <div class="tab-content">
                                <div id="grid" class="tab-pane fade active show" role="tabpanel">
                                    <div class="shop-product-wrap">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/1.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 001</a></h3>
                                                        <div class="price-box">
                                                            <span class="old-price">140.00</span>
                                                            <span class="new-price">120.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/2.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 002</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">120.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/3.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 003</a></h3>
                                                        <div class="price-box">
                                                            <span class="old-price">230.00</span>
                                                            <span class="new-price">210.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/4.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 004</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">120.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="#"><img src="assets/images/product/5.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 005</a></h3>
                                                        <div class="price-box">
                                                            <span class="old-price">180.00</span>
                                                            <span class="new-price">150.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/6.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 006</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">130.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/7.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 007</a></h3>
                                                        <div class="price-box">
                                                            <span class="old-price">250.00</span>
                                                            <span class="new-price">230.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/8.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 008</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">120.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/9.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="product-details.html">Products Name 009</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">133.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="list" class="tab-pane fade" role="tabpanel">
                                    <div class="shop-product-list-wrap">
                                        <div class="row product-layout-list">
                                            <div class="col-lg-4 col-md-5">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/2.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-8 col-md-7">
                                                <div class="product-content text-start">
                                                    <h3><a href="product-details.html">Products Name 002</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">120.00</span>
                                                        <span class="old-price">130.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row product-layout-list">
                                            <div class="col-lg-4 col-md-5">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/3.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-8 col-md-7">
                                                <div class="product-content text-start">
                                                    <h3><a href="product-details.html">Products Name 003</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">121.00</span>
                                                        <span class="old-price">132.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row product-layout-list">
                                            <div class="col-lg-4 col-md-5">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/4.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-8 col-md-7">
                                                <div class="product-content text-start">
                                                    <h3><a href="product-details.html">Products Name 004</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">111.00</span>
                                                        <span class="old-price">162.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row product-layout-list">
                                            <div class="col-lg-4 col-md-5">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/6.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-8 col-md-7">
                                                <div class="product-content text-start">
                                                    <h3><a href="product-details.html">Products Name 005</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">89.00</span>
                                                        <span class="old-price">99.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row product-layout-list">
                                            <div class="col-lg-4 col-md-5">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="product-details.html"><img src="assets/images/product/8.jpg')}}" alt=""></a>
                                                        <div class="product-action">
                                                            <a href="#" class="wishlist"><i class="icon-heart"></i></a>
                                                            <a href="#" class="add-to-cart"><i class="icon-handbag"></i></a>
                                                            <a href="#" class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-8 col-md-7">
                                                <div class="product-content text-start">
                                                    <h3><a href="product-details.html">Products Name 008</a></h3>
                                                    <div class="price-box">
                                                        <span class="new-price">86.00</span>
                                                        <span class="old-price">97.00</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop-products-wrap end -->
                        
                        <!-- paginatoin-area start -->
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 10-13 of 13 item(s) </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        <li><a class="Previous" href="#">Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                          <a class="Next" href="#"> Next </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- paginatoin-area end -->
                    </div>
                    <!-- shop-product-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
    
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top pt--40 pb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>My Account</h3>
                            </div>
                            <ul class="footer-info-list">
                                <li>
                                    <i class="ion-ios-location-outline"></i> 184 Main Rd E, St Albans VIC 3021, Australia
                                </li>
                                <li>
                                    <i class="ion-ios-email-outline"></i> Mill Us : <a href="#">yourmail@gmail.com</a>
                                </li>
                                <li>
                                    <i class="ion-ios-telephone-outline"></i> Phone: + 00 254 254565 54
                                </li>
                            </ul>
                            <div class="payment-cart">
                                <img src="assets/images/icon/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Shopify</a></li>
                                <li><a href="#">Prestashop</a></li>
                                <li><a href="#">Opencart</a></li>
                                <li><a href="#">Magento</a></li>
                                <li><a href="#">Jigoshop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Information</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Returns & Exchanges</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Orders Tracking</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Shopping Rates</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-md-6"><div class="copyright">
                        <p>Copyright ©All Right Reserved.</p>
                    </div></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->
    
    <!-- Modal-wrapper start -->
    <div class="modal-wrapper">
        <div class="modal fade " id="exampleModalCenter" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- modal-inner-area start -->
                        <div class="modal-inner-area row">
                            <div class="col-xl-6 col-lg-7 col-md-6">
                                <div class="product-details-images">
                                    <div class="product_details_container">
                                        <!-- product_big_images start -->
                                        <div class="product_big_images-top">
                                            <div class="portfolio-full-image tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="img-tab-5">
                                                    <img src="{{asset('assets/images/product-details/big-img/w1.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-6">
                                                    <img src="{{asset('assets/images/product-details/big-img/w2.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-7">
                                                    <img src="{{asset('assets/images/product-details/big-img/w3.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-8">
                                                    <img src="{{asset('assets/images/product-details/big-img/w4.jpg')}}" alt="full-image">
                                                </div>
                                                <div role="tabpanel" class="tab-pane product-video-position" id="img-tab-9">
                                                    <img src="{{asset('assets/images/product-details/big-img/w3.jpg')}}" alt="full-image">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product_big_images end -->

                                        <!-- Start Small images -->
                                        <ul class="product_small_images-bottom horizantal-product-active nav" role="tablist">
                                            <li role="presentation" class="pot-small-img active">
                                                <a href="#img-tab-5" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/1.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-6" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/2.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-7" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/3.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-8" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/4.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                            <li role="presentation" class="pot-small-img">
                                                <a href="#img-tab-9" role="tab" data-bs-toggle="tab">
                                                    <img src="{{asset('assets/images/product-details/small-img/3.jpg')}}" alt="small-image">
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End Small images -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-6">
                                <!-- product_details_info start -->
                                <div class="product_details_info">
                                    <h2>Black Clock</h2>
                                    <!-- pro_rating start -->
                                    <div class="pro_rating d-flex">
                                        <ul class="product-rating d-flex">
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                        </ul>
                                        <span class="rat_qun"> (Based on 0 Ratings) </span>
                                    </div>
                                    <!-- pro_rating end -->
                                    <!-- pro_details start -->
                                    <div class="pro_details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostr exercitation ullamco laboris nisi ut aliquip ex ea. </p>
                                    </div>
                                    <!-- pro_details end -->
                                    <!-- pro_dtl_prize start -->
                                    <ul class="pro_dtl_prize">
                                        <li class="old_prize">$15.21</li>
                                        <li> $10.00</li>
                                    </ul>
                                    <!-- pro_dtl_prize end -->
                                    <!-- pro_dtl_color start-->
                                    <div class="pro_dtl_color">
                                        <h2 class="title_2">Choose Colour</h2>
                                        <ul class="pro_choose_color">
                                            <li class="red"><a href="#"><i class="ion-record"></i></a></li>
                                            <li class="blue"><a href="#"><i class="ion-record"></i></a></li>
                                            <li class="perpal"><a href="#"><i class="ion-record"></i></a></li>
                                            <li class="yellow"><a href="#"><i class="ion-record"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- pro_dtl_color end-->
                                    <!-- pro_dtl_size start -->
                                    <div class="pro_dtl_size">
                                        <h2 class="title_2">Size</h2>
                                        <ul class="pro_choose_size">
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                    <!-- pro_dtl_size end -->
                                    <!-- product-quantity-action start -->
                                    <div class="product-quantity-action">
                                        <div class="prodict-statas"><span>Quantity :</span></div>
                                        <div class="product-quantity">
                                            <form action="#">
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- product-quantity-action end -->
                                    <!-- pro_dtl_btn start -->
                                    <ul class="pro_dtl_btn">
                                        <li><a href="#"  class="buy_now_btn">buy now</a></li>
                                        <li><a href="#"><i class="ion-heart"></i></a></li>
                                    </ul>
                                    <!-- pro_dtl_btn end -->
                                    <!-- pro_social_share start -->
                                    <div class="pro_social_share d-flex">
                                        <h2 class="title_2">Share :</h2>
                                        <ul class="pro_social_link">
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- pro_social_share end -->
                                </div>
                                <!-- product_details_info end -->
                            </div>
                        </div>
                        <!-- modal-inner-area end -->
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <!-- Modal-wrapper end -->
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jquery -->		
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>


<!-- Mirrored from htmldemo.net/fusta/fusta/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 05:41:02 GMT -->
</html>