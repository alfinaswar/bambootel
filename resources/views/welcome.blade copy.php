<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Visit Calao</title>
    <link rel="icon" href="{{asset('')}}assets/images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="calao" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('')}}assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- custom-css -->
    <link href="{{asset('')}}assets/css/swiper-custom-1.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/datepicker.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{asset('')}}assets/css/colors/scheme-01.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->


        <header class="transparent header-light header-float">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-inner">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        calao
                                    </div>
                                    <!-- logo close -->
                                </div>

                                <div class="de-flex-col">
                                    <div class="de-flex-col header-col-mid">
                                        <ul id="mainmenu" style="font-family: 'Playfair Display', 'Lora', serif;">
                                            <li>
                                                <a class="menu-item" href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li>
                                                <a class="menu-item" href="{{ route('our-concept') }}">Our Concept</a>
                                            </li>
                                            <li>
                                                <a class="menu-item" href="{{ route('room') }}">Rooms</a>
                                            </li>
                                            <li>
                                                <a class="menu-item" href="{{ route('gallery') }}">Gallery</a>
                                            </li>
                                            <li>
                                                <a class="menu-item" href="{{ route('contact-us') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="de-flex-col">
                                    <a class="btn-main fx-slide w-100" href="#section-contact"><span>Book Now</span></a>

                                    <div class="menu_side_area">
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="section-hero" class="text-light no-top no-bottom relative overflow-hidden z-1000">
            <div class="abs w-100 abs-centered z-2">
                <div class="container">
                    <div class="spacer-double"></div>

                    <div class="row g-4 align-items-center justify-content-between">
                        <div class="col-md-5">
                            <h1 class="mb-0" style="font-family: 'Playfair Display', 'Lora', serif;">Elegant and Comfort
                                in a Modern Space</h1>
                        </div>

                        <div class="col-lg-4">
                            <h4 class="fw-400">320 40th Street B4, New York, NY 10019</h4>
                            <a class="btn-main btn-line bg-blur fx-slide" href="#"><span>Schedule a
                                    Visit</span></a>&nbsp;
                            <a class="btn-main btn-line bg-blur fx-slide" href="#"><span>Explore Property</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vertical-center">
                <video autoplay loop muted playsinline style="width:100%; height:100%; object-fit:cover;">
                    <source src="{{ asset('assets/video/mainvideo2.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung tag video.
                </video>
            </div>

            <div class="abs w-100 bottom-0 z-2 pb-4 sm-hide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6>The Villas</h6>
                                </div>
                                <div>
                                    <h6>Private dining</h6>
                                </div>
                                <div>
                                    <h6>Wellness & Yoga</h6>
                                </div>
                                <div>
                                    <h6>Swimming Pool</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-overview">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-5">
                        <div class="ps-lg-3">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".2s" sty>Our Concept</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s"
                                style="font-family: 'Playfair Display', 'Lora', serif;">
                                Inspired by the Calao Bird: Eco-Luxury, Sustainability, Privacy & Exclusivity
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s"
                                style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                Terinspirasi dari keanggunan dan keunikan burung Calao, hunian kami dirancang dengan
                                konsep eco-luxury yang mengutamakan keberlanjutan, privasi, dan eksklusivitas. Setiap
                                detail arsitektur dan interior berpadu harmonis antara keindahan alam dan teknologi
                                modern, menciptakan ruang tinggal yang nyaman, ramah lingkungan, dan tenang bagi mereka
                                yang mendambakan gaya hidup berkelas selaras dengan alam.
                            </p>
                            <a class="btn-main fx-slide" href="#"><span>Book Now</span></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="h-100 rounded-1">
                                    <img src="{{asset('')}}assets/images/icons-color/1.png"
                                        class="w-70px mb-4 wow scaleIn" alt="">
                                    <div class="relative wow fadeInUp">
                                        <h4 style="font-family: 'Playfair Display', 'Lora', serif;">Strategic Location
                                        </h4>
                                        <p class="mb-0"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">Our
                                            resort or villa is located in a prime area, easily
                                            accessible and close to various tourist destinations and public facilities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="h-100 rounded-1">
                                    <img src="{{asset('')}}assets/images/icons-color/2.png"
                                        class="w-70px mb-4 wow scaleIn" alt="">
                                    <div class="relative wow fadeInUp">
                                        <h4 style="font-family: 'Playfair Display', 'Lora', serif;">Complete Facilities
                                        </h4>
                                        <p class="mb-0"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">Equipped
                                            with a swimming pool, restaurant, spa, and children's
                                            playground for the comfort of the whole family.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="h-100 rounded-1">
                                    <img src="{{asset('')}}assets/images/icons-color/3.png"
                                        class="w-70px mb-4 wow scaleIn" alt="">
                                    <div class="relative wow fadeInUp">
                                        <h4 style="font-family: 'Playfair Display', 'Lora', serif;">Modern & Natural
                                            Design</h4>
                                        <p class="mb-0"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">Combining
                                            modern design with natural touches, creating a
                                            comfortable and calming atmosphere.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="h-100 rounded-1">
                                    <img src="{{asset('')}}assets/images/icons-color/4.png"
                                        class="w-70px mb-4 wow scaleIn" alt="">
                                    <div class="relative wow fadeInUp">
                                        <h4 style="font-family: 'Playfair Display', 'Lora', serif;">Professional Service
                                        </h4>
                                        <p class="mb-0"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">Our staff
                                            is ready to serve you with friendliness and
                                            professionalism to ensure an unforgettable stay experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="section-rooms" style="background-color: #F5F2EA; color:black;">
            <div class="container">
                <div class="row g-4 gx-5 justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Villa Specifications</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s"
                            style="font-family: 'Playfair Display', 'Lora', serif;">Discover Villa</h2>
                    </div>
                </div>
                <div class="row g-4 gx-5 justify-content-center wow fadeInUp">
                    <div class="col-lg-12">
                        <div class="de-tab pill">
                            <ul class="d-tab-nav mb-4" style="font-family: 'Playfair Display', 'Lora', serif;">
                                <li class="active-tab">Villa Aurora</li>
                                <li>Villa Serenity</li>
                                <li>Villa Harmony</li>
                                <li>Villa Celeste</li>
                                <li>Villa Eden</li>
                                <li>Villa Solace</li>
                            </ul>
                            <ul class="d-tab-content pt-3">
                                <li>
                                    <div class="row g-4 justify-content-between">
                                        <div class="col-lg-4"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative bg-dark-2 rounded-1 h-100">
                                                <h3 class="fs-32 mb-4 p-40">Villa Aurora</h3>
                                                <div class="abs p-sm-relative bottom-0 p-40 start-0 w-100">
                                                    <p class="mb-0">Villa Aurora offers a spacious living area of 1700
                                                        sqft (158 m²), perfect for families seeking comfort and elegance
                                                        in every corner.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="relative">
                                                <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                    <h4 class="mb-0">1700 sqft</h4>
                                                </div>
                                                <img src="https://images.pexels.com/photos/261101/pexels-photo-261101.jpeg"
                                                    class="w-100 rounded-1" alt="Villa Aurora">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row g-4 justify-content-between">
                                        <div class="col-lg-4"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative bg-dark-2 rounded-1 h-100">
                                                <h3 class="fs-32 mb-4 p-40">Villa Serenity</h3>
                                                <div class="abs p-sm-relative bottom-0 p-40 start-0 w-100">
                                                    <p class="mb-0">Villa Serenity features 4 luxurious bedrooms, each
                                                        designed for maximum relaxation and privacy for all family
                                                        members.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative">
                                                <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                    <h4 class="mb-0">4 Bedrooms</h4>
                                                </div>
                                                <img src="https://images.pexels.com/photos/279574/pexels-photo-279574.jpeg"
                                                    class="w-100 rounded-1" alt="Villa Serenity">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row g-4 justify-content-between">
                                        <div class="col-lg-4"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative bg-dark-2 rounded-1 h-100">
                                                <h3 class="fs-32 mb-4 p-40">Villa Harmony</h3>
                                                <div class="abs p-sm-relative bottom-0 p-40 start-0 w-100">
                                                    <p class="mb-0">Villa Harmony is equipped with 3 modern bathrooms,
                                                        combining style and functionality for your daily needs.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="relative">
                                                <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                    <h4 class="mb-0">3 Bathrooms</h4>
                                                </div>
                                                <img src="https://images.pexels.com/photos/8844759/pexels-photo-8844759.jpeg"
                                                    class="w-100 rounded-1" alt="Villa Harmony">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row g-4 justify-content-between">
                                        <div class="col-lg-4"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative bg-dark-2 rounded-1 h-100">
                                                <h3 class="fs-32 mb-4 p-40">Villa Celeste</h3>
                                                <div class="abs p-sm-relative bottom-0 p-40 start-0 w-100">
                                                    <p class="mb-0">Villa Celeste boasts a contemporary kitchen with
                                                        premium appliances, ideal for culinary enthusiasts and family
                                                        gatherings.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="relative"
                                                style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                                <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                    <h4 class="mb-0">Modern Kitchen</h4>
                                                </div>
                                                <img src="https://images.pexels.com/photos/2724079/pexels-photo-2724079.jpeg"
                                                    class="w-100 rounded-1" alt="Villa Celeste">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row g-4 justify-content-between">
                                        <div class="col-lg-4"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative bg-dark-2 rounded-1 h-100">
                                                <h3 class="fs-32 mb-4 p-40">Villa Eden</h3>
                                                <div class="abs p-sm-relative bottom-0 p-40 start-0 w-100">
                                                    <p class="mb-0">Villa Eden provides a large carport that can fit up
                                                        to 2 cars, ensuring your vehicles are always safe and secure.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="relative"
                                                style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                                <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                    <h4 class="mb-0">2 Cars</h4>
                                                </div>
                                                <img src="https://images.pexels.com/photos/31587587/pexels-photo-31587587.jpeg"
                                                    class="w-100 rounded-1" alt="Villa Eden">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row g-4 justify-content-between">
                                        <div class="col-lg-4"
                                            style="font-family: 'Montserrat', 'Open Sans', Arial, sans-serif;">
                                            <div class="relative bg-dark-2 rounded-1 h-100">
                                                <h3 class="fs-32 mb-4 p-40">Villa Solace</h3>
                                                <div class="abs p-sm-relative bottom-0 p-40 start-0 w-100">
                                                    <p class="mb-0">Villa Solace is designed for tranquility, featuring
                                                        a private garden and outdoor lounge for your relaxation and
                                                        leisure.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="relative">
                                                <div class="bg-blur abs p-2 bottom-0 rounded-2 px-4 m-4 text-white">
                                                    <h4 class="mb-0">Private Garden</h4>
                                                </div>
                                                <img src="https://images.pexels.com/photos/28843968/pexels-photo-28843968.jpeg"
                                                    class="w-100 rounded-1" alt="Villa Solace">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-gallery" class="bg-color-op-1">
            <div class="container">
                <div class="row g-4 gx-5 justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Discover Gallery</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s"
                            style="font-family: 'Playfair Display', 'Lora', serif;">Experience the Beauty of Bali Villas
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul id="filters" class="wow fadeInUp" data-wow-delay="0s"
                            style="font-family: 'Playfair Display', 'Lora', serif;">
                            <li><a href="#" data-filter="*" class="selected">View All</a></li>
                            <li><a href="#" data-filter=".exterior">Exterior</a></li>
                            <li><a href="#" data-filter=".interior">Interior</a></li>
                            <li><a href="#" data-filter=".facilities">Facilities</a></li>
                        </ul>
                    </div>
                </div>

                <div id="gallery" class="row g-3 wow fadeInUp" data-wow-delay=".3s">

                    <div class="col-md-4 col-sm-6 col-12 item interior">
                        <a href="{{asset('')}}assets/images/gallery/l1.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l1.webp" class="w-100 hover-scale-1-2"
                                    alt="Spacious Living Room - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item interior">
                        <a href="{{asset('')}}assets/images/gallery/l2.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l2.webp" class="w-100 hover-scale-1-2"
                                    alt="Modern Kitchen - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item interior">
                        <a href="{{asset('')}}assets/images/gallery/l3.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l3.webp" class="w-100 hover-scale-1-2"
                                    alt="Elegant Bedroom - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item interior">
                        <a href="{{asset('')}}assets/images/gallery/l4.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l4.webp" class="w-100 hover-scale-1-2"
                                    alt="Luxurious Bathroom - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item interior">
                        <a href="{{asset('')}}assets/images/gallery/l5.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l5.webp" class="w-100 hover-scale-1-2"
                                    alt="Cozy Lounge Area - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item exterior">
                        <a href="{{asset('')}}assets/images/gallery/l6.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l6.webp" class="w-100 hover-scale-1-2"
                                    alt="Tropical Garden - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item exterior">
                        <a href="{{asset('')}}assets/images/gallery/l7.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l7.webp" class="w-100 hover-scale-1-2"
                                    alt="Private Pool - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item exterior">
                        <a href="{{asset('')}}assets/images/gallery/l8.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l8.webp" class="w-100 hover-scale-1-2"
                                    alt="Sunset View - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item facilities">
                        <a href="{{asset('')}}assets/images/gallery/l9.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l9.webp" class="w-100 hover-scale-1-2"
                                    alt="Spa & Wellness - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item facilities">
                        <a href="{{asset('')}}assets/images/gallery/l10.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l10.webp" class="w-100 hover-scale-1-2"
                                    alt="Outdoor Dining - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item facilities">
                        <a href="{{asset('')}}assets/images/gallery/l11.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l11.webp" class="w-100 hover-scale-1-2"
                                    alt="Yoga Pavilion - Bali Villa">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-12 item facilities">
                        <a href="{{asset('')}}assets/images/gallery/l12.webp" class="image-popup d-block hover">
                            <div class="relative overflow-hidden rounded-1">
                                <div
                                    class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                    View Photo
                                </div>
                                <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                                <img src="{{asset('')}}assets/images/gallery/l12.webp" class="w-100 hover-scale-1-2"
                                    alt="Traditional Balinese Decor - Bali Villa">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>






        <section aria-label="section" class="p-0 section-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="d-block hover popup-youtube" href="https://www.youtube.com/watch?v=C6rf51uHWJg">
                            <div class="relative overflow-hidden">
                                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                    <div class="player circle wow scaleIn"><span></span></div>
                                </div>
                                <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                <img src="{{asset('')}}assets/images/background/2.webp" class="w-100 hover-scale-1-1"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-cta-booking">
            <div class="container">
                <div class="row justify-content-center align-items-center py-5">
                    <div class="col-lg-8 text-center">
                        {{-- <img src="{{asset('')}}assets/images/cta-booking.webp" alt="Book Your Villa"
                            class="mb-4 w-200px wow fadeInUp" data-wow-delay=".05s"> --}}
                        <h2 class="mb-3 wow fadeInUp" data-wow-delay=".1s"
                            style="font-family: 'Playfair Display', 'Lora', serif;">Book Your Villa Now!</h2>
                        <p class="fs-18 mb-4 wow fadeInUp" data-wow-delay=".2s">
                            Enjoy the best stay experience at our villa. Click the button below to make your reservation
                            now and get a special offer!
                        </p>
                        <a href="https://wa.me/6281234567890?text=Hello%2C%20I%20would%20like%20to%20book%20the%20villa"
                            target="_blank" class="btn-main btn-lg wow fadeInUp  background-color: #F5F2EA;"
                            data-wow-delay=".3s" style="font-family: 'Playfair Display', 'Lora', serif;">
                            Book Now via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- footer begin -->
    {{-- <footer class="section-dark">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <img src="{{asset('')}}assets/images/logo.webp" class="w-200px" alt="">
                        <div class="spacer-single"></div>
                        <div class="fs-16">
                            712 Jefferson Ave, Brooklyn<br>
                            New York 11221
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-60 id-color icon_phone"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Call Us</h4>
                            <p>Call: +1 123 456 789</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-60 id-color icon_clock"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Opening Hours</h4>
                            <p>Mon to Sat 08:00 - 20:00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center">
                        <i class="fs-60 id-color icon_mail"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Email Us</h4>
                            <p>contact@calao.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        Copyright 2025 - calao by Designesia
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="social-icons mb-sm-30 text-center">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- footer end -->

    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('')}}assets/js/vendors.js"></script>
    <script src="{{asset('')}}assets/js/designesia.js"></script>
    <script src="{{asset('')}}assets/js/validation-booking.js"></script>
    <script src="{{asset('')}}assets/js/swiper.js"></script>
    <script src="{{asset('')}}assets/js/custom-swiper-2.js"></script>

    <!-- datepicker begin -->
    <script>
        $(function () {
            $("#date").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });

    </script>
    <!-- datepicker close -->

</body>

</html>
