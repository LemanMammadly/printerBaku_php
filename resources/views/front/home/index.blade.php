@extends('front.layouts.master')
@section('title', 'Home Page')

@section('content')
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('front/assets/img/icon/loder.png') }}" alt="loder">
                </div>
            </div>
        </div>
    </div>

    <main>
        @include('front.home.partials.slider')
        @include('front.home.partials.category')
        @include('front.home.partials.trending')
        @include('front.home.partials.testimonials')




        <section class="latest-items section-padding fix">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-40">
                        <h2>You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="latest-items-active">

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/latest5.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/latest6.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/latest7.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/latest8.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/latest6.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-30">
                        <div class="properties-card">
                            <div class="properties-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/latest7.jpg" alt=""></a>
                                <div class="socal_icon">
                                    <a href="#"><i class="ti-shopping-cart"></i></a>
                                    <a href="#"><i class="ti-heart"></i></a>
                                    <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="pro-details.html">Cashmere Tank + Bag</a></h3>
                                <div class="properties-footer">
                                    <div class="price">
                                        <span>$98.00 <span>$120.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">

                        <div class="section-tittle text-center mb-40">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/blog1.jpg" alt=""></a>
                            </div>
                            <div class="blogs-cap">
                                <span>Fashion Tips</span>
                                <h5><a href="pro-details.html">What Curling Irons Are The Best Ones</a></h5>
                                <p>Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure,
                                    delectus..</p>
                                <a href="pro-details.html" class="red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/blog2.jpg" alt=""></a>
                            </div>
                            <div class="blogs-cap">
                                <span>Fashion Tips</span>
                                <h5><a href="pro-details.html">Vogue's Ultimate Guide To Autumn/
                                        Winter 2019 Shoes</a></h5>
                                <p>Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure,
                                    delectus..</p>
                                <a href="pro-details.html" class="red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="pro-details.html"><img src="assets/img/gallery/blog3.jpg" alt=""></a>
                            </div>
                            <div class="blogs-cap">
                                <span>Fashion Tips</span>
                                <h5><a href="pro-details.html">What Curling Irons Are The Best Ones</a></h5>
                                <p>Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure,
                                    delectus..</p>
                                <a href="pro-details.html" class="red-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="categories-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Fast & Free Delivery</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Secure Payment</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Money Back Guarantee</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s"
                            data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services4.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Online Support</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <div id="back-top">
        <a class="wrapper" title="Go to Top" href="#">
            <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div>
        </a>
    </div>
@endsection
