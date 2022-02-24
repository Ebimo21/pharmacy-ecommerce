<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="header-top-area">
                        <div class="header-top-left-text">
                            <p>We provides <span>Covid-19</span> medical accessories</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div id="sticky-header" class="menu-area">
        <div class="container">
            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
            <div class="menu-wrap">
                <nav class="menu-nav">
                    <div class="row align-items-center">
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                    <li ><a href="{{ route('about') }}">About</a></li>
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                    
                                    <li><a href="ask-doctor.html">ASK DOCTOR</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="logo">
                                <a href="index-2.html"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-9">
                            <div class="header-action">
                                <ul>
                                    <li class="header-search">
                                        <form action="#">
                                            <button><i class="fas fa-search"></i></button>
                                            <input type="text" placeholder="Search fre Medicines">
                                        </form>
                                    </li>
                                    @if (Route::has('login'))
                                    @auth
                                    <li class="header-user d-none d-md-block">
                                        <a href="{{ route('dashboard') }}"><i class="far fa-user"></i></a>
                                    </li>
                                    @else
                                    <li class="header-user d-none d-md-block">
                                    <a href="{{ route('login') }}"><i class="far fa-user"></i></a>
                                    </li>
                                    @endauth
                                    @endif
                                    
                                    <li class="header-shop-cart d-none d-md-flex">
                                        <a href="#">
                                            <img src="{{ asset('') }}frontend/img/icon/shape-img.png" alt="">
                                            <span class="cart-count">0</span>
                                        </a>
                                        <span class="cart-price">$0.00</span>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset('') }}frontend/img/products/cart_p01.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Exclusive Winter Jackets</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset('') }}frontend/img/products/cart_p02.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Winter Jackets For Women</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="#">Shopping Cart</a>
                                                    <a class="black-color" href="#">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="close-btn"><i class="fas fa-times"></i></div>
                    <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('') }}frontend/img/logo/logo.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-backdrop"></div>
            <!-- End Mobile Menu -->
        </div>
    </div>
    <div class="header-category d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-category-wrap">
                        <div class="header-cat-list">
                            <ul>
                                <li><a href="shop.html">Health Store</a></li>
                                <li><a href="shop.html">COLLECTIONS</a></li>
                                <li><a href="shop.html">protein Store</a></li>
                                <li><a href="shop.html">Pharmacy</a></li>
                                <li><a href="shop.html">Tests</a></li>
                                <li><a href="shop.html">MedPlus</a></li>
                                <li><a href="shop.html">BEAUTY</a></li>
                            </ul>
                        </div>
                        <div class="header-category-btn">
                            <a href="shop.html">GET 5% OFF NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>