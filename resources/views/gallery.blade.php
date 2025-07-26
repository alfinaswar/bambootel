<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery - Villa & Resort</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gallery of our beautiful villa and resort.">
    <meta name="keywords" content="villa, resort, gallery, vacation, stay, nature, luxury">
    <meta name="author" content="">
    <!-- CSS Files -->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('')}}assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}assets/css/coloring.css" rel="stylesheet" type="text/css">
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

        <header class="transparent logo-center">
            <div class="container-fluid px-lg-5 px-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="de-flex">
                            <div class="col-start">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{ url('/') }}">Home</a></li>
                                    <li><a class="menu-item" href="{{ route('our-concept') }}">Our Concept</a></li>
                                    <li><a class="menu-item" href="{{ route('room') }}">Rooms</a></li>
                                    <li><a class="menu-item" href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a class="menu-item" href="{{ route('contact-us') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-center">
                                <a href="/"><img src="images/logo.webp" alt="Villa Resort Logo"></a>
                            </div>
                            <div class="col-end">
                                <div class="menu_side_area">
                                    <a href="/booking" class="btn-main btn-line bg-blur fx-slide sm-hide"><span>Book
                                            Now</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="section-hero"
            class="section-dark text-light no-top no-bottom relative overflow-hidden mh-600 jarallax">
            <img src="https://images.pexels.com/photos/9482125/pexels-photo-9482125.jpeg" class="jarallax-img"
                alt="Villa Resort">
            <div class="gradient-edge-top op-6"></div>
            <div class="abs w-80 bottom-10 z-2 w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="relative overflow-hidden">
                                <div class="wow fadeInUpBig" data-wow-duration="1.5s">
                                    <h1 class="fs-120 text-uppercase fs-sm-10vw mb-2 lh-1">Gallery</h1>
                                    <h3>Discover Our Villa & Resort</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-overlay op-5"></div>
        </section>

        <section class="relative p-1 section-dark">
            <div class="container-fluid relative z-2">
                <div class="row g-1">
                    <!-- Gallery Item 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hover overflow-hidden relative text-light text-center wow zoomIn"
                            data-wow-delay=".0s">
                            <div class="wow scaleIn overflow-hidden">
                                <img src="https://images.pexels.com/photos/9254155/pexels-photo-9254155.jpeg"
                                    class="hover-scale-1-1 w-100" alt="Gallery 1">
                            </div>
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <span class="btn-main btn-line fx-slide disabled"><span>Gallery 1</span></span>
                            </div>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        </div>
                    </div>
                    <!-- Gallery Item 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hover overflow-hidden relative text-light text-center wow zoomIn"
                            data-wow-delay=".1s">
                            <div class="wow scaleIn overflow-hidden">
                                <img src="https://images.pexels.com/photos/1488327/pexels-photo-1488327.png"
                                    class="hover-scale-1-1 w-100" alt="Gallery 2">
                            </div>
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <span class="btn-main btn-line fx-slide disabled"><span>Gallery 2</span></span>
                            </div>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        </div>
                    </div>
                    <!-- Gallery Item 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hover overflow-hidden relative text-light text-center wow zoomIn"
                            data-wow-delay=".2s">
                            <div class="wow scaleIn overflow-hidden">
                                <img src="https://images.pexels.com/photos/2724079/pexels-photo-2724079.jpeg"
                                    class="hover-scale-1-1 w-100" alt="Gallery 3">
                            </div>
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <span class="btn-main btn-line fx-slide disabled"><span>Gallery 3</span></span>
                            </div>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        </div>
                    </div>
                    <!-- Gallery Item 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hover overflow-hidden relative text-light text-center wow zoomIn"
                            data-wow-delay=".3s">
                            <div class="wow scaleIn overflow-hidden">
                                <img src="https://images.pexels.com/photos/271643/pexels-photo-271643.jpeg"
                                    class="hover-scale-1-1 w-100" alt="Gallery 4">
                            </div>
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <span class="btn-main btn-line fx-slide disabled"><span>Gallery 4</span></span>
                            </div>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        </div>
                    </div>
                    <!-- Gallery Item 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hover overflow-hidden relative text-light text-center wow zoomIn"
                            data-wow-delay=".4s">
                            <div class="wow scaleIn overflow-hidden">
                                <img src="https://images.pexels.com/photos/7546651/pexels-photo-7546651.jpeg"
                                    class="hover-scale-1-1 w-100" alt="Gallery 5">
                            </div>
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <span class="btn-main btn-line fx-slide disabled"><span>Gallery 5</span></span>
                            </div>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        </div>
                    </div>
                    <!-- Gallery Item 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="hover overflow-hidden relative text-light text-center wow zoomIn"
                            data-wow-delay=".5s">
                            <div class="wow scaleIn overflow-hidden">
                                <img src="https://images.pexels.com/photos/2062426/pexels-photo-2062426.jpeg"
                                    class="hover-scale-1-1 w-100" alt="Gallery 6">
                            </div>
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <span class="btn-main btn-line fx-slide disabled"><span>Gallery 6</span></span>
                            </div>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- Javascript Files -->
    <script src="{{asset('')}}assets/js/vendors.js"></script>
    <script src="{{asset('')}}assets/js/designesia.js"></script>
</body>

</html>
