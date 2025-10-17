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
    <link href="{{asset('')}}assets-fix/css/style.css" rel="stylesheet" />
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


<body class="bg-black min-h-screen scrollbar-custom">

    <nav id="navbar" class="fixed top-0 left-0 w-full bg-[#F5F5DC] z-50 transition-all duration-300 ease-in-out">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 md:px-10 py-3 md:py-5 relative">
            <div class="flex items-center md:hidden z-[1000]">
                <button id="burger"
                    class="w-8 h-8 flex flex-col justify-center items-center gap-1.5 focus:outline-none">
                    <span class="burger-line transition-all duration-300"></span>
                    <span class="burger-line transition-all duration-300"></span>
                    <span class="burger-line transition-all duration-300"></span>
                </button>
            </div>

            <ul class="hidden md:flex gap-6 text-[#333333] font-lato" id="desktop-menu">
                <li><a href="#home" class="nav-link text-[#333333]">Home</a></li>
                <li class="relative group">
                    <a href="#villas" class="nav-link text-[#333333]">Villas</a>
                    <ul
                        class="absolute left-0 mt-2 w-44 bg-white/80 backdrop-blur-lg text-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#"
                                class="text-[#333333]">The Nest</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#"
                                class="text-[#333333]">The Hatch</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#"
                                class="text-[#333333]">The Feather</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#"
                                class="text-[#333333]">The Wing</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#"
                                class="text-[#333333]">The Bond</a></li>
                        <li class="px-4 py-2 hover:bg-[#d8b29a]/50 hover:text-white"><a href="#"
                                class="text-[#333333]">The Heritage</a></li>
                    </ul>
                </li>
                <li><a href="#experiences" class="nav-link text-[#333333]">Experiences</a></li>
                <li><a href="#about" class="nav-link text-[#333333]">About</a></li>
                <li><a href="#gallery" class="nav-link text-[#333333]">Gallery</a></li>
                <li><a href="#contact" class="nav-link text-[#333333]">Contact</a></li>
            </ul>

            <a href="#home" class="absolute left-1/2 transform -translate-x-1/2 top-4 md:top-5">
                <img id="navbar-logo" src="{{ asset('assets-fix/img/Logo/Logo-putih.png') }}" alt="Calao Bali"
                    class="h-[80px] md:h-[100px] transition-all duration-300 ease-in-out" />
            </a>

            <div class="flex items-center">
                <a href="#book" id="book-btn"
                    class="px-4 py-2 rounded-full border-2 border-white text-[#333333] font-semibold transition-all duration-300 bg-white/80 bg-opacity-80 hover:bg-white hover:text-black hover:bg-opacity-100"
                    style="background-color:rgba(255,255,255,0.2);">
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
    <section id="hero" class="relative h-screen overflow-hidden text-white">
        <!-- Video background -->
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="{{asset('')}}assets-fix/video/rice.mp4" type="video/mp4" />
        </video>

        <!-- Gradient atas/bawah -->
        <div class="absolute top-0 left-0 w-full h-1/2 z-10 pointer-events-none
          bg-gradient-to-b from-[rgba(30,30,30,0.4)] to-[rgba(30,30,30,0)]"></div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 z-10 pointer-events-none
          bg-gradient-to-t from-[rgba(30,30,30,0.6)] to-[rgba(30,30,30,0)]"></div>

        <!-- Content -->
        <div class="relative z-20 flex flex-col items-center justify-center h-full px-6 text-center fade-section">
            <h1
                class="text-[32px] sm:text-[42px] md:text-[44px] lg:text-[46px] font-cormorant font-bold leading-tight text-white mb-1">
                DARE TO FLY
            </h1>
            <p class="text-lg md:text-xl font-cormorant lg:text-2xl text-white/80 mt-1">
                Where Dreams Kiss the Sky
            </p>

            <a href="#book"
                class="inline-block mt-[20px] px-8 py-2 bg-[#d8b29a]/80 text-white font-semibold rounded-lg opacity-70 transition-all duration-300 hover:bg-[#f7941d] hover:text-black hover:opacity-100 hover:bg-opacity-100">
                Book Now
            </a>
        </div>
    </section>





    <section id="introduction"
        class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-20 py-20 bg-[#F5F5DC] text-[#D4AF37]">
        <p
            class="text-2xl sm:text-3xl md:text-5xl text-center text-[#D4AF37] font-cormorant font-bold max-w-xl sm:max-w-2xl md:max-w-3xl mx-auto mb-8">
            Discover Simple Serenity. The Essence of Peaceful Living. We bottle Bali's quiet beauty and gentle luxury,
            delivering a feeling of unmistakable calm right to your door.
        </p>

        <!-- Optonal decorative accent -->
        <div class="mt-8 sm:mt-12 w-16 sm:w-20 h-1 bg-[#d8b29a] rounded-full opacity-50"></div>
    </section>


    <section id="about"
        class="relative w-full bg-[#F5F5DC] grid md:grid-cols-2 gap-10 overflow-hidden px-5 md:px-10 py-20">

        <div
            class="absolute top-1/2 left-1/4 w-[500px] h-[500px] bg-[#EAE0C8] rounded-full transform -translate-x-1/2 -translate-y-1/2 opacity-50 z-0 blur-3xl">
        </div>

        <div class="flex flex-col justify-center px-2 md:px-10 z-10">
            <h2
                class="text-3xl sm:text-4xl md:text-[40px] font-cormorant font-bold mb-4 text-[#D4AF37] text-justify md:text-left leading-tight">
                A Sanctuary Where Luxury and Nature Unite.
            </h2>

            <p
                class="text-lg sm:text-xl md:text-[18px] font-cormorant leading-relaxed mb-8 text-gray-700 text-justify md:text-left">
                Inspired by the spiritual harmony of Bali, Calao offers a seamless blend of high-end indulgence and
                eco-conscious living. Each villa is a private retreat designed to create unforgettable memories in the
                authentic heart of the island.
            </p>

            <div class="text-center md:text-left">
                <a href="#more-about"
                    class="inline-block bg-[#D4AF37] text-white font-cormorant font-bold text-lg px-8 py-3 rounded-md hover:bg-[#c5a230] transition-all duration-300 shadow-md hover:shadow-lg">
                    Discover Our Story
                </a>
            </div>
        </div>

        <div class="flex items-center justify-center mt-8 md:mt-0 px-2 md:px-10 z-10">
            <div
                class="bg-[#6B4F4B] p-4 rounded-xl shadow-2xl transform md:-rotate-2 hover:rotate-0 transition-transform duration-500 w-full max-w-[500px]">
                <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="A serene villa at Calao Bali"
                    class="w-full h-auto md:h-[520px] max-h-[450px] md:max-h-none rounded-md object-cover" />
            </div>
        </div>

    </section>




    <section id="villas" class="py-20 px-5 bg-[#F5F5DC] relative">
        <h2
            class="essence-title text-[24px] sm:text-[28px] md:text-[35px] font-cormorant font-bold text-center mb-12 text-[#D4AF37]">
            <span class="essence-text">The Essence of Bali. The Feeling of Home.</span>
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

                    <!-- The Nest -->
                    <div
                        class="min-w-[450px] sm:min-w-[320px] md:min-w-[450px] rounded-[9px] bg-[#F5F5DC] flex flex-col shrink-0">

                        <div
                            class="w-[450px] h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="The Nest"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[32px] font-bold text-[#D4AF37] font-cormorant">The Nest</h3>
                            <p class="text-[#333333]/80 font-cormorant text-[20px] leading-relaxed mt-1">
                                A tranquil hideaway surrounded by nature.
                            </p>
                            <button class="mt-2 px-1 py-2 text-[#D4AF37] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#D4AF37] to-[#D4AF37] bg-no-repeat [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- The Hatch -->
                    <div
                        class="min-w-[450px] sm:min-w-[320px] md:min-w-[450px] rounded-[9px] bg-[#F5F5DC] flex flex-col shrink-0">

                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="The Hatch"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[32px] font-bold text-[#D4AF37] font-cormorant">The Hatch
                            </h3>
                            <p class="text-[#333333]/80 font-cormorant text-[20px] leading-relaxed mt-1">
                                A tranquil hideaway surrounded by nature.
                            </p>
                            <button class="mt-2 px-1 py-2 text-[#D4AF37] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#D4AF37] to-[#D4AF37] bg-no-repeat [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- The Feather -->
                    <div
                        class="min-w-[450px] sm:min-w-[320px] md:min-w-[450px] rounded-[9px] bg-[#F5F5DC] flex flex-col shrink-0">

                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="The Feather"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[32px] font-bold text-[#D4AF37] font-cormorant">The Feather
                            </h3>
                            <p class="text-[#333333]/80 font-cormorant text-[20px] leading-relaxed mt-1">
                                A tranquil hideaway surrounded by nature.
                            </p>
                            <button class="mt-2 px-1 py-2 text-[#D4AF37] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#D4AF37] to-[#D4AF37] bg-no-repeat [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- The Wing -->
                    <div
                        class="min-w-[450px] sm:min-w-[320px] md:min-w-[450px] rounded-[9px] bg-[#F5F5DC] flex flex-col shrink-0">

                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="The Wing"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[32px] font-bold text-[#D4AF37] font-cormorant">The Wing</h3>
                            <p class="text-[#333333]/80 font-cormorant text-[20px] leading-relaxed mt-1">
                                A tranquil hideaway surrounded by nature.
                            </p>
                            <button class="mt-2 px-1 py-2 text-[#D4AF37] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#D4AF37] to-[#D4AF37] bg-no-repeat [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- The Bond -->
                    <div
                        class="min-w-[450px] sm:min-w-[320px] md:min-w-[450px] rounded-[9px] bg-[#F5F5DC] flex flex-col shrink-0">

                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="The Bond"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[32px] font-bold text-[#D4AF37] font-cormorant">The Bond</h3>
                            <p class="text-[#333333]/80 font-cormorant text-[20px] leading-relaxed mt-1">
                                A tranquil hideaway surrounded by nature.
                            </p>
                            <button class="mt-2 px-1 py-2 text-[#D4AF37] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#D4AF37] to-[#D4AF37] bg-no-repeat [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- The Heritage -->
                    <div
                        class="min-w-[450px] sm:min-w-[320px] md:min-w-[450px] rounded-[9px] bg-[#F5F5DC] flex flex-col shrink-0">

                        <div
                            class="w-full h-[550px] sm:h-[500px] md:h-[580px] rounded-[9px] relative overflow-hidden villa-container">
                            <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="The Heritage"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute bottom-3 left-0 right-0 flex justify-between px-4 z-10 opacity-0 transition-opacity duration-300 buttons">
                                <button
                                    class="prev-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">←</button>
                                <button
                                    class="next-btn w-12 h-12 sm:w-16 sm:h-16 flex items-center justify-center rounded-lg bg-white/40 border border-white/20 text-white text-2xl">→</button>
                            </div>
                        </div>
                        <div class="mt-4 text-left px-2">
                            <h3 class="text-[20px] sm:text-[32px] font-bold text-[#D4AF37] font-cormorant">The Heritage
                            </h3>
                            <p class="text-[#333333]/80 font-cormorant text-[20px] leading-relaxed mt-1">
                                A tranquil hideaway surrounded by nature.
                            </p>
                            <button class="mt-2 px-1 py-2 text-[#D4AF37] font-lato">
                                <span
                                    class="relative inline-block bg-gradient-to-r from-[#D4AF37] to-[#D4AF37] bg-no-repeat [background-position:0_100%] [background-size:100%_1px] transition-[background-size] duration-500 hover:[background-size:0%_1px]">
                                    EXPLORE VILLA
                                </span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="experience-title"
        class="flex flex-col justify-center items-center px-4 sm:px-8 md:px-20 py-12 bg-[#F5F5DC] text-[#D4AF37]">

        <p class="experience-quote text-2xl sm:text-3xl md:text-5xl text-center text-[#D4AF37] font-cormorant font-bold
    max-w-xl sm:max-w-2xl md:max-w-3xl mx-auto mb-8">
            <span class="experience-quote-text">Discover Simple Serenity. Essence of Peaceful Living.</span>
        </p>

        <div class="underline-line mt-[2px] sm:mt-[2px] w-16 sm:w-20 h-1 bg-[#d8b29a] rounded-full opacity-50"></div>
    </section>


    <section id="experiences" class="relative w-full h-screen overflow-hidden bg-center bg-cover"
        style="background-image: url('{{asset('')}}assets-fix/img/vila2.jpg'); background-attachment: fixed;">

        <!-- Bungkus warna krem -->
        <div class="overlay">
            <div class="panel left"></div>
            <div class="panel right"></div>
        </div>
    </section>

    <section id="experiences-cut" class="h-[860px] bg-[#F5F5DC] relative overflow-hidden">

        <div class="max-w-6xl mx-auto text-center relative z-0 pt-[130px]">
            <h2
                class="reveal-title relative text-center text-[40px] md:text-[50px] font-cormorant font-bold text-[#D4AF37] mb-20 inline-block">
                <span class="title-text">Treasures of Discovery</span>
                <span
                    class="underline absolute left-0 -bottom-1 h-[2px] bg-[#d8b29a] w-[20] origin-left scale-x-0"></span>
            </h2>



            <div class="relative h-[500px] flex items-center justify-center">
                <!-- Foto kiri -->
                <div class="experience-left absolute z-10 origin-right">
                    <img src="{{asset('')}}assets-fix/img/vila1.jpg"
                        class="w-[400px] h-[500px] object-cover rounded-2xl shadow-xl" />
                </div>

                <!-- Foto kanan -->
                <div class="experience-right absolute z-10 origin-left">
                    <img src="{{asset('')}}assets-fix/img/vila2.jpg"
                        class="w-[400px] h-[500px] object-cover rounded-2xl shadow-xl" />
                </div>

                <!-- Konten tengah -->
                <div
                    class="experience-text relative sm:absolute sm:inset-0 z-0 flex flex-col items-center justify-center px-4 sm:px-0 text-center">
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-cormorant font-semibold mb-4 text-[#D4AF37]">
                        Unforgettable Journey
                    </h3>
                    <p
                        class="text-gray-600 mb-6 max-w-xs sm:max-w-md md:max-w-lg font-lato text-sm sm:text-base md:text-[15px]">
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

    <section id="gallery" class="py-[80px] px-5 bg-[#F5F5DC] relative overflow-hidden">
        <div class="text-center mb-12 mt-[100px] relative z-10">
            <h2 class="gallery-title text-3xl sm:text-4xl md:text-5xl font-cormorant font-bold text-[#D4AF37] mb-4">
                <span class="gallery-title-text">The Beauty of Our Bali Resorts</span>
            </h2>
            <p class="gallery-paragraph text-gray-600 sm:text-lg md:text-xl max-w-2xl mx-auto">
                Explore the serene luxury and exquisite architecture of our villas and resorts, capturing the essence of
                Bali's tranquil charm.
            </p>

        </div>
        <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
            <img id="lightbox-img" src="" class="max-w-[450px] max-h-[90%] rounded-lg shadow-lg" />
            <span id="lightbox-close" class="absolute top-5 right-5 text-white text-3xl cursor-pointer">&times;</span>
        </div>
        <!-- Grid Foto -->
        <div
            class="gallery-grid grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 max-w-[2200px] mx-auto auto-rows-[200px] relative z-10">
            <div class="gallery-item col-span-2 row-span-2 opacity-0 transform scale-90">
                <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="Villa 1"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="{{asset('')}}assets-fix/img/vila3.jpg" alt="Villa 2"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="{{asset('')}}assets-fix/img/vila2.jpg" alt="Villa 3"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item col-span-2 row-span-2 opacity-0 transform scale-90">
                <img src="{{asset('')}}assets-fix/img/vila1.jpg" alt="Villa 4"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="{{asset('')}}assets-fix/img/vila2.jpg" alt="Villa 5"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="gallery-item opacity-0 transform scale-90">
                <img src="{{asset('')}}assets-fix/img/vila3.jpg" alt="Villa 6"
                    class="w-full h-full object-cover rounded-lg" />
            </div>
        </div>
    </section>




    <!-- Section 7: Contact -->
    <section id="contact"
        class="relative py-24 bg-gradient-to-tl from-[#f3ecd4] via-[#f7f5ea] to-[#F5F5DC] overflow-hidden">
        <!-- Soft background accent shapes -->
        <div class="absolute top-10 left-[5%] w-80 h-80 bg-[#D4AF37]/20 rounded-full blur-2xl z-0"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#d8b29a]/30 rounded-full blur-2xl z-0"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="text-center mb-20">
                <span class="inline-block text-[40px] mb-4 animate-bounce-slow"></span>
                <h2 class="text-4xl md:text-5xl font-cormorant font-bold text-[#D4AF37] drop-shadow-xl">Let’s Connect in
                    Paradise</h2>
                <p class="text-lg text-gray-600/80 mt-4 font-montserrat max-w-xl mx-auto">Whisper us your dream escape –
                    Our Bali haven awaits to give you a truly unforgettable experience.</p>
                <div
                    class="mt-6 h-1 w-28 bg-gradient-to-r from-[#D4AF37] via-[#d8b29a] to-[#F5F5DC] mx-auto rounded-full">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-14 items-start">
                <!-- Contact Form & Info Left -->
                <div
                    class="bg-white bg-opacity-90 backdrop-blur-xl shadow-xl rounded-3xl px-8 pt-12 pb-10 flex flex-col gap-10 border border-[#eadaad]">
                    <div>
                        <h3 class="text-2xl font-cormorant font-bold text-[#D4AF37] mb-4 flex items-center gap-2">
                            <svg class="w-7 h-7 text-[#D4AF37]" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="5" cy="12" r="2" />
                                <circle cx="12" cy="12" r="2" />
                                <circle cx="19" cy="12" r="2" />
                            </svg>
                            Contact Information
                        </h3>
                        <div class="space-y-5 font-montserrat text-gray-600">
                            <a href="https://wa.me/628888888888"
                                class="flex items-center gap-4 group hover:bg-[#fbf6ef] px-3 py-2 rounded-lg transition">
                                <svg class="h-7 w-7 text-[#25D366] group-hover:scale-110 transition" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163..."></path>
                                </svg>
                                <span class="group-hover:text-[#25D366] text-lg font-semibold transition">+62 888 8888
                                    8888</span>
                            </a>
                            <a href="mailto:info@calaobali.com"
                                class="flex items-center gap-4 group hover:bg-[#fbf6ef] px-3 py-2 rounded-lg transition">
                                <svg class="h-7 w-7 text-[#d8b29a] group-hover:scale-110 transition" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M4 4h16c1.1 0 2 .9 ..."></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span
                                    class="group-hover:text-[#ad895f] text-lg font-semibold transition">info@calaobali.com</span>
                            </a>
                            <div class="flex items-center gap-4">
                                <svg class="h-7 w-7 text-[#baffc1]" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span class="text-lg font-semibold text-[#47402d]">Bali, Indonesia</span>
                            </div>
                            <div class="flex gap-4 mt-2 text-xl">
                                <a href="https://wa.me/628888888888" target="_blank" aria-label="WhatsApp"
                                    class="hover:text-[#25D366] text-[#d8b29a]"><i class="fab fa-whatsapp"></i></a>
                                <a href="#" aria-label="Instagram" class="hover:text-pink-500 text-[#d8b29a]"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#" aria-label="Facebook" class="hover:text-blue-500 text-[#d8b29a]"><i
                                        class="fab fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>

                    <form action="#" autocomplete="off" class="space-y-7">
                        <div class="relative">
                            <input type="text" id="name"
                                class="w-full px-5 py-4 bg-[#f9f7f3] rounded-lg shadow-inner border border-[#e7ddb7] focus:border-[#D4AF37] focus:ring-2 focus:ring-[#f9f7f3] font-montserrat placeholder:italic placeholder:text-[#9b956a] text-lg transition"
                                placeholder="Your Full Name">
                            <label for="name"
                                class="absolute -top-6 left-1 text-sm font-montserrat text-[#d8b29a]">Name</label>
                        </div>
                        <div class="relative">
                            <input type="email" id="email"
                                class="w-full px-5 py-4 bg-[#f9f7f3] rounded-lg shadow-inner border border-[#e7ddb7] focus:border-[#D4AF37] focus:ring-2 focus:ring-[#f9f7f3] font-montserrat placeholder:italic placeholder:text-[#9b956a] text-lg transition"
                                placeholder="your.email@example.com">
                            <label for="email"
                                class="absolute -top-6 left-1 text-sm font-montserrat text-[#d8b29a]">Email</label>
                        </div>
                        <div class="relative">
                            <textarea id="message" rows="4"
                                class="w-full px-5 py-4 bg-[#f9f7f3] rounded-lg shadow-inner border border-[#e7ddb7] focus:border-[#D4AF37] focus:ring-2 focus:ring-[#f9f7f3] font-montserrat placeholder:italic placeholder:text-[#9b956a] text-lg transition"
                                placeholder="How can we help you?"></textarea>
                            <label for="message"
                                class="absolute -top-6 left-1 text-sm font-montserrat text-[#d8b29a]">Message</label>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-[#d8b29a] to-[#D4AF37] text-white font-cormorant text-xl py-3 rounded-lg shadow-md hover:from-[#D4AF37] hover:to-[#ad895f] transition-all duration-300 transform hover:scale-105 tracking-wide">
                            Send Message ✉️
                        </button>
                    </form>
                </div>
                <!-- End form left -->

                <!-- Map & FAQ Right -->
                <div class="flex flex-col gap-12">
                    <!-- Map Card -->
                    <div
                        class="w-full h-80 rounded-3xl overflow-hidden shadow-2xl border-[3px] border-[#e7ddb7] relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#d4af3727] via-[#eadaad13] to-transparent">
                        </div>
                        <iframe
                            src="https://maps.google.com/maps?width=600&height=400&hl=en&q=Ubud%2C%20Bali&t=&z=13&ie=UTF8&iwloc=B&output=embed"
                            class="w-full h-full border-0 mix-blend-multiply" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div
                            class="absolute top-3 left-3 flex items-center gap-2 bg-white/80 px-4 py-1 rounded-xl shadow backdrop-blur-md font-cormorant text-[#D4AF37] text-xl">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="5" fill="#D4AF37" />
                            </svg>
                            Ubud, Bali
                        </div>
                    </div>
                    <!-- FAQ Accordion -->
                    <div class="w-full">
                        <h3 class="text-2xl font-cormorant font-bold text-[#d8b29a] mb-4">Frequently Asked <span
                                class="text-[#D4AF37]">Questions</span> <span class="ml-2">❓</span></h3>
                        <div class="space-y-3">
                            <!-- Item 1 -->
                            <div class="border border-[#eadaad] rounded-xl bg-[#fffcf6]/60 shadow-sm overflow-hidden">
                                <button
                                    class="w-full text-left px-6 py-5 font-semibold font-montserrat text-[#6b4f4b] text-lg flex justify-between items-center faq-btn focus:outline-none transition">
                                    How can I book a villa?
                                    <span
                                        class="faq-icon text-[#b09d75] text-2xl transition-transform duration-300">+</span>
                                </button>
                                <div
                                    class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-[#fffdf7]">
                                    <p class="px-6 pb-5 pt-0 text-[#605441]">You can book directly through the <span
                                            class="text-[#D4AF37] font-bold">"Book Now"</span> buttons on our website,
                                        send us a message via the contact form, or just let us know via <span
                                            class="text-green-700">WhatsApp</span> for a more personal touch!</p>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="border border-[#eadaad] rounded-xl bg-[#fffcf6]/60 shadow-sm overflow-hidden">
                                <button
                                    class="w-full text-left px-6 py-5 font-semibold font-montserrat text-[#6b4f4b] text-lg flex justify-between items-center faq-btn focus:outline-none transition">
                                    What amenities are included?
                                    <span
                                        class="faq-icon text-[#b09d75] text-2xl transition-transform duration-300">+</span>
                                </button>
                                <div
                                    class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-[#fffdf7]">
                                    <p class="px-6 pb-5 pt-0 text-[#605441]">Each villa features high-speed Wi-Fi, AC in
                                        all rooms, a private pool, fully-equipped kitchen, daily housekeeping, tropical
                                        gardens, and that soothing ambience you only find in Bali.</p>
                                </div>
                            </div>
                            <!-- Add more elegant FAQ items below if needed -->
                        </div>
                    </div>
                </div>
                <!-- End map & faq -->
            </div>
        </div>
    </section>
    <script>
        // Accordion for FAQ (remains from original, enhance toggle)
        document.querySelectorAll('.faq-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('.faq-icon');
                const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";
                // Close all
                document.querySelectorAll('.faq-content').forEach(fc => fc.style.maxHeight = null);
                document.querySelectorAll('.faq-icon').forEach(i => i.innerText = '+');
                if (!isOpen) {
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.innerText = '−';
                }
            });
        });
    </script>

    <!-- Footer -->
    <footer
        class="relative pt-20 pb-8 text-center text-[#D4AF37] overflow-hidden bg-gradient-to-tr from-[#222019] via-[#41382d] to-[#D4AF37]/10">
        <div class="relative max-w-7xl mx-auto px-6 z-10">
            <div class="flex flex-col items-center mb-12">
                <img src="{{asset('assets-fix/img/Logo/Logo-putih.png')}}" alt="Calao Bali Logo"
                    class="h-24 md:h-28 mb-6 drop-shadow-lg" />
                <p class="font-cormorant text-xl md:text-2xl text-[#F5F5DC]/80 max-w-md">
                    Where luxury whispers and nature sings. Your sanctuary awaits.
                </p>
            </div>

            <div class="w-full flex justify-center items-center my-10">
                <div class="w-full max-w-xs h-px bg-[#D4AF37]/20"></div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-4 text-[#D4AF37]/50" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18V6" />
                </svg>
                <div class="w-full max-w-xs h-px bg-[#D4AF37]/20"></div>
            </div>

            <nav
                class="flex flex-wrap justify-center gap-x-6 sm:gap-x-8 gap-y-3 font-montserrat text-base text-[#F5F5DC]/90 font-medium mb-12">
                <a href="#home" class="hover:text-white transition-colors duration-300">Home</a>
                <a href="#villas" class="hover:text-white transition-colors duration-300">Villas</a>
                <a href="#experiences" class="hover:text-white transition-colors duration-300">Experiences</a>
                <a href="#gallery" class="hover:text-white transition-colors duration-300">Gallery</a>
                <a href="#contact" class="hover:text-white transition-colors duration-300">Contact</a>
            </nav>

            <div class="flex justify-center gap-6 mb-4">
                <a href="https://wa.me/1234567890" target="_blank" aria-label="WhatsApp"
                    class="text-[#D4AF37]/70 hover:text-green-400 transition-all duration-300 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.459L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.267.655 4.398 1.806 6.084l-1.16 4.237 4.238-1.162z" />
                    </svg>
                </a>
                <a href="#" aria-label="Instagram"
                    class="text-[#D4AF37]/70 hover:text-pink-400 transition-all duration-300 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.947s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z" />
                    </svg>
                </a>
                <a href="#" aria-label="Facebook"
                    class="text-[#D4AF37]/70 hover:text-blue-400 transition-all duration-300 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                </a>
            </div>

            <a href="mailto:info@calaobali.com"
                class="inline-block font-montserrat text-sm text-[#F5F5DC]/80 hover:text-white transition-colors duration-300">
                info@calaobali.com
            </a>

            <div class="mt-12 border-t border-[#D4AF37]/10 pt-6 text-sm text-[#F5F5DC]/60 font-montserrat">
                &copy; <span id="currentYear"></span> Calao Bali &mdash; All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="{{asset('')}}assets-fix/js/gsap.js"></script>
    <script src="{{asset('')}}assets-fix/js/navbar.js"></script>
    <script src="{{asset('')}}assets-fix/js/scroll.js"></script>
    <script src="{{asset('')}}assets-fix/js/scrolltrigger.js"></script>
    <script src="{{asset('')}}assets-fix/js/text-animation.js"></script>
    <script src="{{asset('')}}assets-fix/js/galeria.js"></script>
    <script src="{{asset('')}}assets-fix/js/custom.js"></script>
</body>

</html>