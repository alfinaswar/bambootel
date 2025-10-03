<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calao</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap"
        rel="stylesheet" />
    <link href="assets/calao/css/style.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        cormorant: ['"Cormorant Garamond"', "serif"],
                        montserrat: ["Montserrat", "sans-serif"],
                        playfair: ["Playfair Display", "serif"],
                    },
                    colors: {
                        terracotta: "#d8b29a",
                        gold: "#f7941d",
                    },
                },
            },
        };
    </script>
</head>


<body class="bg-black min-h-screen">

    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 md:px-10 py-3 md:py-5 relative">
            <div class="flex items-center md:hidden z-[1000]">
                <button id="burger"
                    class="w-8 h-8 flex flex-col justify-center items-center gap-1.5 focus:outline-none">
                    <span class="burger-line transition-all duration-300"></span>
                    <span class="burger-line transition-all duration-300"></span>
                    <span class="burger-line transition-all duration-300"></span>
                </button>
            </div>

            <ul class="hidden md:flex gap-6 text-white font-lato" id="desktop-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li class="relative group">
                    <a href="#villas" class="nav-link">Villas</a>
                    <ul
                        class="absolute left-0 mt-2 w-44 bg-white/80 backdrop-blur-lg text-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#">The Nest</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#">The Hatch</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#">The Feather</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#">The Wing</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#">The Bond</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#">The Heritage</a></li>
                    </ul>
                </li>
                <li><a href="#experiences" class="nav-link">Experiences</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#gallery" class="nav-link">Gallery</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            {{-- logo pas --}}
            <a href="#home" class="absolute left-1/2 transform -translate-x-1/2 top-4 md:top-5">
                <img id="navbar-logo" src="{{ asset('assets/calao/img/Logo/Logo-putih.png') }}" alt="Calao Bali"
                    class="h-[80px] md:h-[100px] transition-all duration-300 ease-in-out" />
            </a>

            <div class="flex items-center">
                <a href="#book" id="book-btn"
                    class="px-4 py-2 rounded-full border-2 border-white text-white font-semibold transition-all duration-300 hover:bg-white hover:text-black">
                    Book Now
                </a>
            </div>
        </div>
    </nav>

    <div id="mobile-menu"
        class="fixed top-0 left-0 w-full h-screen bg-black/90 backdrop-blur-sm flex flex-col justify-center items-center -translate-y-full transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] z-[999]">
        <ul class="flex flex-col items-center gap-8 text-white text-3xl font-cormorant">
            <li class="menu-item"><a href="#home" class="mobile-link">Home</a></li>
            <li class="menu-item text-center">
                <details class="group">
                    <summary class="mobile-link cursor-pointer list-none">Villas</summary>
                    <ul class="mt-4 flex flex-col gap-3 text-xl font-montserrat text-gray-300">
                        <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Nest</a></li>
                        <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Hatch</a></li>
                        <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Feather</a></li>
                        <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Wing</a></li>
                        <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Bond</a></li>
                        <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Heritage</a></li>
                    </ul>
                </details>
            </li>
            <li class="menu-item"><a href="#experiences" class="mobile-link">Experiences</a></li>
            <li class="menu-item"><a href="#about" class="mobile-link">About</a></li>
            <li class="menu-item"><a href="#gallery" class="mobile-link">Gallery</a></li>
            <li class="menu-item"><a href="#contact" class="mobile-link">Contact</a></li>
        </ul>
    </div>









    <!-- Section 1: Hero + About -->
    <section id="hero" class=" relative h-screen overflow-hidden text-white">

        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="assets/calao/video/rice.mp4" type="video/mp4" />
        </video>

        <div class="absolute top-0 left-0 w-full h-1/2 z-10 pointer-events-none"
            style="background: linear-gradient(to bottom, rgba(30,30,30,0.4), rgba(30,30,30,0));">
        </div>

        <!-- Gradient overlay bawah (lebih gelap) -->
        <div class="absolute bottom-0 left-0 w-full h-1/2 z-10 pointer-events-none"
            style="background: linear-gradient(to top, rgba(30,30,30,0.6), rgba(30,30,30,0));">
        </div>


        <div class="relative z-20 max-w-3xl mt-[300px] mx-auto px-5 text-center">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-cormorant font-bold leading-tight text-white mb-4">
                DARE TO FLY
            </h1>
            <p class="text-lg md:text-xl font-cormorant lg:text-2xl text-white/80">
                Where Dreams Kiss the Sky
            </p>
            <a href="#book"
                class="inline-block mt-[20px] px-8 py-2 bg-[#d8b29a] text-white font-semibold rounded-lg transition-all duration-300 hover:bg-[#f7941d] hover:text-black">
                Book Now
            </a>
        </div>
    </section>
    <section id="introduction"
        class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-20 py-20 bg-white text-[#111111]">
        <p
            class="text-2xl sm:text-3xl md:text-5xl text-center text-[#111111] font-cormorant font-bold max-w-xl sm:max-w-2xl md:max-w-3xl mx-auto mb-8">
            Discover Simple Serenity. The Essence of Peaceful Living. We bottle Bali's quiet beauty and gentle luxury,
            delivering a feeling of unmistakable calm right to your door.
        </p>

        <!-- Optional decorative accent -->
        <div class="mt-8 sm:mt-12 w-16 sm:w-20 h-1 bg-[#d8b29a] rounded-full opacity-50"></div>
    </section>



    <!-- Section 3: Villas Showcase (Slider placeholder) -->
    <section id="villas" class="py-20 px-5 bg-white relative">
        <h2 class="text-[24px] sm:text-[28px] md:text-[35px] font-cormorant font-bold text-center mb-12 text-[#333333]">
            The Essence of Bali. The Feeling of Home.
        </h2>


        <div class="relative flex">
            <!-- Tombol navigasi horizontal kiri (hanya desktop) -->
            <div class="hidden md:flex flex-col gap-3 absolute top-1/2 -translate-y-1/2 z-20 ml-20">
                <button id="scrollLeft"
                    class="backdrop-blur-md text-[#d8b29a] w-24 px-6 py-4 text-[40px] rounded-[5px] border-[1px] border-[#d8b29a] hover:bg-[#d8b29a] hover:text-white transition">
                    ←
                </button>
                <button id="scrollRight"
                    class="backdrop-blur-md text-[#d8b29a] w-24 px-6 py-4 text-[40px] rounded-[5px] border-[1px] border-[#d8b29a] hover:bg-[#d8b29a] hover:text-white transition">
                    →
                </button>
            </div>

            <!-- Wrapper slider -->
            <div class="overflow-x-auto md:overflow-hidden ml-0 md:ml-[340px] px-4 md:px-16 w-full" id="villaSlider">
                <div id="villaWrapper" class="flex gap-6 min-w-max">
                    <!-- Slide 1 -->
                    <div
                        class="min-w-[80%] sm:min-w-[350px] md:min-w-[450px] rounded-[9px] bg-white flex flex-col shrink-0">
                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="assets/calao/img/vila1.jpg" alt="Villa 1" class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[28px] font-bold text-[#333333] font-cormorant">Villa
                                Serenity</h3>
                            <button class="mt-2 px-1 py-2 text-[#d8b29a] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#d8b29a] to-[#d8b29a] bg-no-repeat
                [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>




                    <div
                        class="min-w-[80%] sm:min-w-[350px] md:min-w-[450px] rounded-[9px] bg-white flex flex-col shrink-0">
                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="assets/calao/img/vila1.jpg" alt="Villa 1" class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[28px] font-bold text-[#333333] font-cormorant">Villa
                                Serenity</h3>
                            <button class="mt-2 px-1 py-2 text-[#d8b29a] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#d8b29a] to-[#d8b29a] bg-no-repeat
                [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                    <div
                        class="min-w-[80%] sm:min-w-[350px] md:min-w-[450px] rounded-[9px] bg-white flex flex-col shrink-0">
                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="assets/calao/img/vila1.jpg" alt="Villa 1" class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[28px] font-bold text-[#333333] font-cormorant">Villa
                                Serenity</h3>
                            <button class="mt-2 px-1 py-2 text-[#d8b29a] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#d8b29a] to-[#d8b29a] bg-no-repeat
                [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="experiences" class="h-[800px] bg-white relative overflow-hidden">

        <div class="max-w-6xl mx-auto text-center relative z-0 pt-12">
            <h2 class="relative text-3xl md:text-4xl font-cormorant font-bold text-[#333333] mb-20 inline-block">
                Treasures of Discovery
                <!-- Underline -->
                <span class="absolute left-0 -bottom-1 h-[1px] bg-[#d8b29a] w-full origin-left scale-x-0"></span>
            </h2>


            <div class="relative h-[500px] flex items-center justify-center">
                <!-- Foto kiri -->
                <div class="experience-left absolute z-10">
                    <img src="assets/calao/img/vila1.jpg"
                        class="w-[400px] h-[500px] object-cover rounded-2xl shadow-xl" />
                </div>

                <!-- Foto kanan -->
                <div class="experience-right absolute z-10">
                    <img src="assets/calao/img/vila2.jpg"
                        class="w-[400px] h-[500px] object-cover rounded-2xl shadow-xl" />
                </div>

                <!-- Konten tengah di belakang foto -->
                <div
                    class="experience-text relative sm:absolute sm:inset-0 z-0 flex flex-col items-center justify-center px-4 sm:px-0 text-center">
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-cormorant font-semibold mb-4 text-[#333333]">
                        Unforgettable Journey
                    </h3>
                    <p
                        class="text-gray-600 mb-6 max-w-xs sm:max-w-md md:max-w-lg font-lato text-sm sm:text-base md:text-lg">
                        Leave the everyday, enter Bali's sanctuary of splendor. We present exclusive Sensory Encounters
                        designed to
                        transform you. Every detail is an Art of Living, meticulously refined and personal. Unlock the
                        majesty of
                        the Gods Island, tailor-made.
                    </p>
                    <button class="px-4 py-1.5 sm:px-5 sm:py-2 border-[1px] border-[#d8b29a] text-[#d8b29a] bg-transparent rounded-md
          hover:bg-[#FFD700] hover:text-black transition-colors duration-300 font-semibold text-sm sm:text-base">
                        Discover More
                    </button>
                </div>
            </div>
        </div>
    </section>






    <section id="gallery" class="py-1 px-5 bg-white relative overflow-hidden">
        <!-- Motif Bali tipis di background -->
        <svg class="absolute inset-0 w-full h-full z-0 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="baliPatternUnique" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                    <!-- Motif daun tipis -->
                    <path d="M10 25 C15 10, 35 10, 40 25 S65 40, 50 50" stroke="#f3e0d8" stroke-width="1.5" fill="none"
                        opacity="0.25" />
                    <!-- Titik-titik kecil -->
                    <circle cx="25" cy="25" r="2" fill="#f3e0d8" opacity="0.15" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#baliPatternUnique)" />
        </svg>

        <!-- Header Galeri -->
        <div class="text-center mb-12 relative z-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-cormorant font-bold text-[#333333] mb-4">
                The Beauty of Our Bali Resorts
            </h2>
            <p class="text-gray-600 sm:text-lg md:text-xl max-w-2xl mx-auto">
                Explore the serene luxury and exquisite architecture of our villas and resorts, capturing the essence of
                Bali's
                tranquil charm.
            </p>
        </div>
        <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
            <img id="lightbox-img" src="" class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg" />
            <span id="lightbox-close" class="absolute top-5 right-5 text-white text-3xl cursor-pointer">&times;</span>
        </div>
        <!-- Grid Foto -->
        <div
            class="gallery-grid grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 max-w-[2200px] mx-auto auto-rows-[200px] relative z-10">
            <div class="gallery-item col-span-2 row-span-2 opacity-0 transform scale-90">
                <img src="assets/calao/img/vila1.jpg" alt="Villa 1" class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="assets/calao/img/vila3.jpg" alt="Villa 2" class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="assets/calao/img/vila2.jpg" alt="Villa 3" class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item col-span-2 row-span-2 opacity-0 transform scale-90">
                <img src="assets/calao/img/vila1.jpg" alt="Villa 4" class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="assets/calao/img/vila2.jpg" alt="Villa 5" class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="assets/calao/img/vila3.jpg" alt="Villa 6" class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
    </section>

    <section id="about"
        class="relative w-full bg-[#FFFFFF] grid md:grid-cols-2 gap-10 overflow-hidden px-5 md:px-10 py-20">

        <!-- Ornamen dekoratif tipis -->
        <div class="absolute top-0 left-0 w-full flex justify-center pointer-events-none z-0 mt-4">
            <svg width="250" height="30" viewBox="0 0 250 30" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 15 Q25 0 50 15 T100 15 T150 15 T200 15 T250 15" fill="transparent" stroke="#d8b29a"
                    stroke-width="1" />
            </svg>
        </div>

        <!-- Teks -->
        <div class="flex flex-col justify-center px-2 md:px-10 z-10 about-text">
            <h2 class="text-2xl sm:text-3xl md:text-3xl font-cormorant font-bold mb-4 text-[#333333]">
                Calao Bali is ultimate luxury meets the soul of the island.
            </h2>

            <p class="text-lg sm:text-xl md:text-2xl font-cormorant mb-4 text-gray-700 about-fade">
                Inspired deeply by the spiritual harmony of Balinese traditions and
                the majesty of its lush nature, we offer a perfect, seamless blend
                of high-end indulgence and eco-conscious living. Our commitment to
                the island's spirit is evident in every architectural detail and
                guest experience.
            </p>

            <p class="text-lg sm:text-xl md:text-2xl font-cormorant leading-relaxed mb-6 text-gray-700 about-fade">
                Every single villa, from the private plunge pool to the hand-carved
                furniture and use of sustainable local materials, is meticulously
                designed to create a personal sanctuary. Our focus is on ensuring
                your stay is not just a standard vacation, but a source of truly
                unforgettable memories—whether through a serene morning yoga session
                overlooking the rice paddies or an immersive cultural workshop.
                Experience the authentic heart of the real Bali, elevated by
                world-class service and unparalleled sophistication.
            </p>
        </div>

        <!-- Gambar -->
        <div class="flex justify-center md:justify-end mt-8 md:mt-0 px-2 md:px-10 z-10 about-img-wrapper">
            <img src="assets/calao/img/vila1.jpg" alt="About Calao Bali"
                class="w-full max-w-[600px] md:h-[600px] h-[450px] sm:h-[500px] object-cover rounded-xl shadow-lg about-img cursor-pointer" />
        </div>
    </section>


    <!-- Section 7: Contact -->
    <section id="contact" class="py-24 bg-[#f9f6f2]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-cormorant font-bold text-[#333333]">Get In Touch</h2>
                <p class="text-lg text-gray-500 mt-2 font-montserrat">We're here to help you craft your unforgettable
                    Bali
                    experience.</p>
                <div class="mt-4 h-0.5 w-24 bg-[#d8b29a] mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-lg flex flex-col gap-8">
                    <div>
                        <h3 class="text-2xl font-cormorant font-semibold text-[#333333] mb-4">Contact Information</h3>
                        <div class="space-y-4 font-montserrat text-gray-600">
                            <a href="https://wa.me/628888888888" class="flex items-center gap-4 group">
                                <svg class="h-6 w-6 text-[#d8b29a]" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <span class="group-hover:text-[#333] transition-colors">+62 888 8888 8888</span>
                            </a>
                            <a href="mailto:info@calaobali.com" class="flex items-center gap-4 group">
                                <svg class="h-6 w-6 text-[#d8b29a]" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="group-hover:text-[#333] transition-colors">info@calaobali.com</span>
                            </a>
                            <div class="flex items-center gap-4">
                                <svg class="h-6 w-6 text-[#d8b29a]" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>Bali, Indonesia</span>
                            </div>
                        </div>
                    </div>

                    <form action="#" class="space-y-6">
                        <div>
                            <label for="name" class="font-montserrat font-semibold text-gray-700">Name</label>
                            <input type="text" id="name"
                                class="w-full mt-2 p-3 bg-gray-50 border-b-2 border-gray-200 focus:border-[#d8b29a] focus:outline-none transition-colors"
                                placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="font-montserrat font-semibold text-gray-700">Email</label>
                            <input type="email" id="email"
                                class="w-full mt-2 p-3 bg-gray-50 border-b-2 border-gray-200 focus:border-[#d8b29a] focus:outline-none transition-colors"
                                placeholder="your.email@example.com">
                        </div>
                        <div>
                            <label for="message" class="font-montserrat font-semibold text-gray-700">Message</label>
                            <textarea id="message" rows="4"
                                class="w-full mt-2 p-3 bg-gray-50 border-b-2 border-gray-200 focus:border-[#d8b29a] focus:outline-none transition-colors"
                                placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-[#333333] text-white font-bold font-montserrat py-3 rounded-lg hover:bg-[#d8b29a] hover:text-black transition-all duration-300 transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="flex flex-col gap-12">
                    <div class="w-full h-80 rounded-2xl shadow-lg overflow-hidden">
                        <iframe
                            src="https://maps.google.com/maps?width=600&height=400&hl=en&q=University%20of%20Oxford&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-full">
                        <h3 class="text-2xl font-cormorant font-semibold text-[#333333] mb-4">Frequently Asked Questions
                        </h3>
                        <div class="space-y-3">
                            <div class="border border-gray-200 rounded-lg">
                                <button
                                    class="w-full text-left p-4 font-semibold font-montserrat text-gray-700 flex justify-between items-center faq-btn">
                                    How can I book a villa?
                                    <span class="faq-icon transform transition-transform duration-300">+</span>
                                </button>
                                <div
                                    class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="p-4 pt-0 text-gray-600">You can book directly through the "Book Now"
                                        buttons on our website,
                                        or by sending us a message through the contact form. For direct inquiries, feel
                                        free to reach out
                                        via
                                        WhatsApp.</p>
                                </div>
                            </div>
                            <div class="border border-gray-200 rounded-lg">
                                <button
                                    class="w-full text-left p-4 font-semibold font-montserrat text-gray-700 flex justify-between items-center faq-btn">
                                    What amenities are included?
                                    <span class="faq-icon transform transition-transform duration-300">+</span>
                                </button>
                                <div
                                    class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <p class="p-4 pt-0 text-gray-600">Each villa includes high-speed Wi-Fi, air
                                        conditioning in all rooms,
                                        a
                                        private pool, fully-equipped kitchen, and daily housekeeping services to ensure
                                        a comfortable stay.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer
        class="relative bg-gradient-to-tr from-[#1a1a1a] via-[#222] to-[#3a2c23] text-white pt-20 pb-10 overflow-hidden animate-on-scroll-footer">
        <div class="absolute inset-0 pointer-events-none z-0">
            <div
                class="absolute top-0 left-0 w-1/2 h-1/2 bg-gradient-to-br from-[#d8b29a]/5 via-transparent to-transparent rounded-full -translate-x-1/4 -translate-y-1/4 footer-ornament-1">
            </div>
            <div
                class="absolute bottom-0 right-0 w-1/3 h-1/3 bg-gradient-to-tl from-[#f7941d]/5 via-transparent to-transparent rounded-full translate-x-1/4 translate-y-1/4 footer-ornament-2">
            </div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
            <div class="flex flex-col items-center mb-12 footer-item footer-item-1">
                <img src="{{ asset('assets/calao/img/Logo/Logo-putih.png') }}" alt="Calao Bali"
                    class="h-20 drop-shadow-lg" />
                <h2 class="text-4xl font-cormorant font-bold text-white tracking-wide mt-4">Calao Bali</h2>
                <p class="text-gray-300 font-cormorant text-xl mt-2 max-w-md mx-auto">
                    Where luxury whispers and nature sings. Your sanctuary awaits.
                </p>
            </div>

            <nav class="flex justify-center flex-wrap gap-x-6 md:gap-x-10 gap-y-3 mb-12 footer-item footer-item-2">
                <a href="#home"
                    class="font-montserrat text-gray-300 hover:text-[#d8b29a] transition-all duration-300 hover:-translate-y-1">Home</a>
                <a href="#villas"
                    class="font-montserrat text-gray-300 hover:text-[#d8b29a] transition-all duration-300 hover:-translate-y-1">Villas</a>
                <a href="#experiences"
                    class="font-montserrat text-gray-300 hover:text-[#d8b29a] transition-all duration-300 hover:-translate-y-1">Experiences</a>
                <a href="#gallery"
                    class="font-montserrat text-gray-300 hover:text-[#d8b29a] transition-all duration-300 hover:-translate-y-1">Gallery</a>
                <a href="#contact"
                    class="font-montserrat text-gray-300 hover:text-[#d8b29a] transition-all duration-300 hover:-translate-y-1">Contact</a>
            </nav>

            <div class="max-w-lg mx-auto mb-12 footer-item footer-item-3">
                <h3 class="font-cormorant text-xl text-[#f7941d] mb-4">Get Exclusive Offers</h3>
                <form action="#"
                    class="flex items-center gap-2 bg-black/20 p-2 rounded-full ring-1 ring-white/10 focus-within:ring-[#d8b29a] transition-all">
                    <input type="email" placeholder="Enter your email address..."
                        class="w-full bg-transparent text-white px-4 py-2 focus:outline-none placeholder:text-gray-500 font-montserrat">
                    <button type="submit"
                        class="bg-[#d8b29a] text-black font-bold font-montserrat px-6 py-2 rounded-full hover:bg-[#f7941d] hover:shadow-lg hover:shadow-[#f7941d]/20 transition-all duration-300">
                        Send
                    </button>
                </form>
            </div>

            <div class="border-t border-white/10 pt-8 footer-item footer-item-4">
                <div class="flex justify-center gap-5 mb-6">
                    <a href="https://wa.me/1234567890" aria-label="WhatsApp"
                        class="text-gray-400 hover:text-green-400 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.459L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.267.655 4.398 1.806 6.084l-1.16 4.237 4.238-1.162z" />
                        </svg>
                        <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out">
                            <div
                                class="max-w-7xl mx-auto flex items-center justify-between px-4 md:px-10 py-3 md:py-5 relative">
                                <div class="flex items-center md:hidden z-[1000]">
                                    <button id="burger"
                                        class="w-8 h-8 flex flex-col justify-center items-center gap-1.5 focus:outline-none">
                                        <span class="burger-line transition-all duration-300"></span>
                                        <span class="burger-line transition-all duration-300"></span>
                                        <span class="burger-line transition-all duration-300"></span>
                                    </button>
                                </div>

                                <ul class="hidden md:flex gap-6 text-white font-lato" id="desktop-menu">
                                </ul>
                                {{-- logo besar --}}
                                <a href="#home" class="absolute left-1/2 transform -translate-x-1/2 top-4 md:top-5">
                                    <img id="navbar-logo" src="{{ asset('assets/calao/img/Logo/Logo-putih.png') }}"
                                        alt="Calao we"
                                        class="h-[80px] md:h-[100px] transition-all duration-300 ease-in-out" />
                                </a>

                                <div class="flex items-center">
                                    <a href="#book" id="book-btn"
                                        class="px-4 py-2 rounded-full border-2 border-white text-white font-semibold transition-all duration-300 hover:bg-white hover:text-black">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </nav>

                        <div id="mobile-menu"
                            class="fixed top-0 left-0 w-full h-screen bg-black/90 backdrop-blur-sm flex flex-col justify-center items-center
                            -translate-y-full transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] z-[999]">

                            <ul class="flex flex-col items-center gap-8 text-white text-3xl font-cormorant">
                                <li class="menu-item"><a href="#home" class="mobile-link">Home</a></li>
                                <li class="menu-item text-center">
                                    <details class="group">
                                        <summary class="mobile-link cursor-pointer list-none">Villas</summary>
                                        <ul class="mt-4 flex flex-col gap-3 text-xl font-montserrat text-gray-300">
                                            <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Nest</a>
                                            </li>
                                            <li class="menu-item-sub"><a href="#" class="mobile-link-sub">The Hatch</a>
                                            </li>
                                        </ul>
                                    </details>
                                </li>
                                <li class="menu-item"><a href="#experiences" class="mobile-link">Experiences</a></li>
                                <li class="menu-item"><a href="#about" class="mobile-link">About</a></li>
                                <li class="menu-item"><a href="#gallery" class="mobile-link">Gallery</a></li>
                                <li class="menu-item"><a href="#contact" class="mobile-link">Contact</a></li>
                            </ul>
                        </div>
                    </a>
                    <a href="#" aria-label="Instagram"
                        class="text-gray-400 hover:text-pink-400 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.947s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook"
                        class="text-gray-400 hover:text-blue-500 transition-all duration-300 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                </div>
                <p class="text-gray-500 text-sm font-montserrat tracking-wide">
                    &copy; 2025 Calao Bali. All Rights Reserved. Designed with passion.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="assets/calao/js/gsap.js"></script>
    <script src="assets/calao/js/navbar.js"></script>
    <script src="assets/calao/js/scroll.js"></script>
    <script src="assets/calao/js/scrolltrigger.js"></script>
    <script src="assets/calao/js/text-animation.js"></script>
    <script src="assets/calao/js/galeria.js"></script>
    <script src="assets/calao/js/custom.js"></script>
</body>

</html>