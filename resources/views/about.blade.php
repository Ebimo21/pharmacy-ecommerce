@extends('layouts.master_home')

@section('about_content')
    
            <!-- breadcrumb-area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
            <section class="about-area pt-100 pb-100">
                <div class="container">
                    <div class="section-area-inner">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="about-image-wrap">
                                    <div class="about-img-top wow fadeInLeft" data-wow-delay=".2s">
                                        <img src="{{ asset('frontend/img/images/about_img01.jpg') }}" alt="">
                                    </div>
                                    <div class="about-img-bottom wow fadeInUp" data-wow-delay=".2s">
                                        <img src="{{ asset('frontend/img/images/about_img02.jpg') }}" alt="">
                                    </div>
                                    <img src="{{ asset('') }}frontend/img/images/about_shape01.png" alt="" class="about-top-shape">
                                    <img src="{{ asset('') }}frontend/img/images/about_shape02.png" alt="" class="about-bottom-shape">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="about-content">
                                    <h2 class="title">Let’s Make <br> Something for health</h2>
                                    <p class="big-desc">Doctor is auto-assig best matches concern You will get a diagnosis and treatment.</p>
                                    <p>Follow up with the doctor that even after your chat wiow closes. everyone to see and find myself sharing the link anywhere dolor sit amet, consetetur sadipscing elit sed diam nonumy eirmod tempor invidunt labore.</p>
                                    <p>Window closes. everyone to see it and find wiow myself sharing the link anywhere dolor consetetur.</p>
                                    <div class="about-content-list">
                                        <ul>
                                            <li>
                                                <div class="icon"><img src="{{ asset('') }}frontend/img/icon/about_icon01.png" alt=""></div>
                                                <h6 class="content">Authentic Medicines</h6>
                                            </li>
                                            <li>
                                                <div class="icon"><img src="{{ asset('') }}frontend/img/icon/about_icon02.png" alt=""></div>
                                                <h6 class="content">100% Satisfaction</h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="contact.html" class="btn about-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- customer-feedback-area -->
            <section class="customer-feedback-area">
                <div class="container">
                    <div class="section-area-inner">
                        <div class="row">
                            <div class="col-12">
                                <div class="customer-feedback-title">
                                    <h2 class="title">How our customers use.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="customer-feedback-active owl-carousel">
                                <div class="customer-feedback-item">
                                    <div class="feedback-item-content">
                                        <div class="feedback-tags">
                                            <ul>
                                                <li class="active"><a href="#">articles</a></li>
                                                <li><a href="#">#html</a></li>
                                                <li><a href="#">#technology</a></li>
                                                <li><a href="#">#base</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="title">Medical news and health news headlines posted throughout the day.</h2>
                                        <div class="feedback-client">
                                            <div class="thumb"><img src="{{ asset('frontend/img/images/feedback_client01.png') }}" alt=""></div>
                                            <div class="info">
                                                <h5>Donnie Jakson</h5>
                                                <span>UI | UX Design</span>
                                            </div>
                                        </div>
                                        <a href="about-us.html" class="btn feedback-btn">Learn More</a>
                                    </div>
                                    <div class="feedback-img" data-background="{{ asset('') }}frontend/img/images/feedback_img.jpg"></div>
                                </div>
                                <div class="customer-feedback-item">
                                    <div class="feedback-item-content">
                                        <div class="feedback-tags">
                                            <ul>
                                                <li class="active"><a href="#">articles</a></li>
                                                <li><a href="#">#html</a></li>
                                                <li><a href="#">#technology</a></li>
                                                <li><a href="#">#base</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="title">Medical news and health news headlines posted throughout the day.</h2>
                                        <div class="feedback-client">
                                            <div class="thumb"><img src="{{ asset('') }}frontend/img/images/feedback_client02.png" alt=""></div>
                                            <div class="info">
                                                <h5>Rouniy Kenon</h5>
                                                <span>UI | UX Design</span>
                                            </div>
                                        </div>
                                        <a href="about-us.html" class="btn feedback-btn">Learn More</a>
                                    </div>
                                    <div class="feedback-img" data-background="{{ asset('') }}frontend/img/images/feedback_img02.jpg"></div>
                                </div>
                                <div class="customer-feedback-item">
                                    <div class="feedback-item-content">
                                        <div class="feedback-tags">
                                            <ul>
                                                <li class="active"><a href="#">articles</a></li>
                                                <li><a href="#">#html</a></li>
                                                <li><a href="#">#technology</a></li>
                                                <li><a href="#">#base</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="title">Medical news and health news headlines posted throughout the day.</h2>
                                        <div class="feedback-client">
                                            <div class="thumb"><img src="{{ asset('') }}frontend/img/images/feedback_client02.png" alt=""></div>
                                            <div class="info">
                                                <h5>Rouniy Kenon</h5>
                                                <span>UI | UX Design</span>
                                            </div>
                                        </div>
                                        <a href="about-us.html" class="btn feedback-btn">Learn More</a>
                                    </div>
                                    <div class="feedback-img" data-background="{{ asset('') }}frontend/img/images/feedback_img03.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- customer-feedback-area-end -->

            <!-- support-area -->
            <section class="support-area">
                <div class="container">
                    <div class="section-area-inner">
                        <div class="row justify-content-center justify-content-xl-between">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="support-content">
                                    <span class="sub-title">medical support</span>
                                    <h3 class="title">Medical support is a Form of Child Support</h3>
                                    <a href="https://www.youtube.com/watch?v=Ujc-4USZDCo" class="popup-video"><i class="fas fa-play"></i><span>Our Videos Story</span></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="fact-item text-center">
                                            <div class="chart" data-percent="85">
                                                <span class="percentage">85<sup>%</sup></span>
                                            </div>
                                            <p>Happy Customer</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="fact-item text-center">
                                            <div class="chart" data-percent="70">
                                                <span class="percentage">70<sup>%</sup></span>
                                            </div>
                                            <p>Medical Support</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="fact-item text-center">
                                            <div class="chart" data-percent="55">
                                                <span class="percentage">55<sup>%</sup></span>
                                            </div>
                                            <p>Quality Works</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- support-area-end -->

            <!-- team-area -->
            <section class="team-area pt-100 pb-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="team-section-title text-center mb-50">
                                <div class="title-icon"><img src="{{ asset('') }}frontend/img/icon/title_icon.png" alt=""></div>
                                <h2 class="title">medical health team</h2>
                                <p>Pharmacist Assistants</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-area-inner">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-item mb-50">
                                    <div class="team-thumb">
                                        <img src="{{ asset('') }}frontend/img/images/team_img01.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <span>pharmacist</span>
                                        <h4 class="title">Martin Childe</h4>
                                        <a href="#" class="team-social"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-item mb-50">
                                    <div class="team-thumb">
                                        <img src="{{ asset('') }}frontend/img/images/team_img02.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <span>pharmacist</span>
                                        <h4 class="title">alexei navalny</h4>
                                        <a href="#" class="team-social"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-item mb-50">
                                    <div class="team-thumb">
                                        <img src="{{ asset('') }}frontend/img/images/team_img03.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <span>pharmacist</span>
                                        <h4 class="title">Martin Smith</h4>
                                        <a href="#" class="team-social"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-item mb-50">
                                    <div class="team-thumb">
                                        <img src="{{ asset('') }}frontend/img/images/team_img04.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <span>pharmacist</span>
                                        <h4 class="title">loan frauds</h4>
                                        <a href="#" class="team-social"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-area-end -->

            <!-- core-features-area -->
            <section class="core-features-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="core-features-item mb-30">
                                <div class="core-features-icon">
                                    <img src="{{ asset('') }}frontend/img/icon/delivery.png" alt="">
                                </div>
                                <div class="core-features-content">
                                    <h4 class="title">Home Delivery</h4>
                                    <p>Product Delivery is a customer-centric approach to defining.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="core-features-item mb-30">
                                <div class="core-features-icon">
                                    <img src="{{ asset('') }}frontend/img/icon/return.png" alt="">
                                </div>
                                <div class="core-features-content">
                                    <h4 class="title">Click and Pick</h4>
                                    <p>Product Delivery is a customer-centric approach to defining.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="core-features-item mb-30">
                                <div class="core-features-icon">
                                    <img src="{{ asset('') }}frontend/img/icon/headphone.png" alt="">
                                </div>
                                <div class="core-features-content">
                                    <h4 class="title">Quality Support</h4>
                                    <p>Product Delivery is a customer-centric approach to defining.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- core-features-area-end -->
@endsection

