<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/fusta/fusta/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 05:41:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register || Fusta - Furniture eCommerce Bootstra5 HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
                                <li class="drodown-show"><a href="#"><img src="assets/images/icon/la-1.jpg" alt=""> English <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="open-dropdown">
                                        <li class="active"><a href="#"><img src="assets/images/icon/la-1.jpg" alt=""> English </a></li>
                                        <li><a href="#"><img src="assets/images/icon/la-2.jpg" alt=""> Français</a></li>
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
                            <a href="index.html"><img src="assets/images/logo/logo.jpg" alt=""></a>
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
                                            <a href="single-product.html"><img alt="" src="assets/images/product/1.jpg"></a>
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
                                            <a href="single-product.html"><img alt="" src="assets/images/product/3.jpg"></a>
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
                    <h2 class="breadcrumb-title">Login &amp; Register</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Login &amp; Register</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb lagin-and-register-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 m-auto">
                    <div class="login-register-wrapper">
                        <!-- login-register-tab-list start -->
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <!-- login-register-tab-list end -->
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <div class="login-input-box">
                                                <input type="text" name="user-name" placeholder="User Name">
                                                <input type="password" name="user-password" placeholder="Password">
                                            </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <div class="button-box">
                                                    <button class="login-btn btn" type="submit"><span>Login</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <div class="login-input-box">
                                                <input type="text" name="user-name" placeholder="User Name">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <input name="user-email" placeholder="Email" type="email">
                                            </div>
                                            <div class="button-box">
                                                <button class="register-btn btn" type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jquery -->		
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from htmldemo.net/fusta/fusta/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 05:41:06 GMT -->
</html>