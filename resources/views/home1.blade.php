<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Bali: Eco-Luxury Bamboo Villas - Private Retreats with Mount Agung Views</title>
    <meta name="description"
        content="Discover unparalleled eco-luxury at Calao Bali. Private bamboo villas with Mount Agung views, in-villa dining, wellness retreats, and private pools.">
    <meta name="keywords"
        content="eco-luxury villas in Bali, private bamboo villas Bali, Mount Agung views, sustainable luxury Bali, in-villa dining Bali, wellness retreat Bali, private villa with plunge pool">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --color-white: #FFFFFF;
            --color-terracotta: #d8b29a;
            --color-sandy-beige: #F5F2EA;
            --color-dark-charcoal: #333333;
            --color-black: #000000;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--color-dark-charcoal);
            line-height: 1.6;
            background-color: var(--color-sandy-beige);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            color: var(--color-dark-charcoal);
            margin-bottom: 0.5em;
        }

        a {
            text-decoration: none;
            color: var(--color-dark-charcoal);
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--color-terracotta);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .header-scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8em;
            color: var(--color-white);
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .header-scrolled .logo {
            color: var(--color-dark-charcoal);
            text-shadow: none;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            font-weight: 500;
            color: var(--color-white);
            padding: 5px 0;
            position: relative;
        }

        .header-scrolled nav ul li a {
            color: var(--color-dark-charcoal);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: var(--color-terracotta);
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .hamburger-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
            z-index: 1001;
        }

        .hamburger-menu span {
            height: 2px;
            width: 25px;
            background-color: var(--color-white);
            margin-bottom: 5px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .header-scrolled .hamburger-menu span {
            background-color: var(--color-dark-charcoal);
        }

        #hero {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--color-white);
            overflow: hidden;
        }

        #hero video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            background-size: cover;
        }

        #hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        #hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
        }

        #hero-content h1 {
            font-size: 3.5em;
            margin-bottom: 15px;
            color: var(--color-white);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        #hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: var(--color-white);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .btn-primary {
            display: inline-block;
            background-color: var(--color-terracotta);
            color: var(--color-white);
            padding: 15px 30px;
            border-radius: 5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            background-color: #c49d8a;
            transform: translateY(-2px);
        }

        section {
            padding: 80px 20px;
            text-align: center;
            position: relative;
        }

        section:nth-of-type(even) {
            background-color: var(--color-sandy-beige);
        }

        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .preview-item {
            background-color: var(--color-white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .preview-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .preview-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .preview-item-content {
            padding: 25px;
        }

        .preview-item-content h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .preview-item-content p {
            font-size: 0.95em;
            color: var(--color-dark-charcoal);
            margin-bottom: 20px;
        }

        .preview-item .btn-secondary {
            display: inline-block;
            color: var(--color-terracotta);
            border: 1px solid var(--color-terracotta);
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .preview-item .btn-secondary:hover {
            background-color: var(--color-terracotta);
            color: var(--color-white);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        #booking-cta-section {
            background-color: var(--color-dark-charcoal);
            color: var(--color-white);
            padding: 100px 20px;
        }

        #booking-cta-section h2 {
            color: var(--color-white);
            font-size: 3em;
            margin-bottom: 30px;
        }

        #booking-cta-section .btn-primary {
            background-color: var(--color-terracotta);
            color: var(--color-white);
            padding: 20px 40px;
            font-size: 1.2em;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: var(--color-black);
            color: var(--color-white);
            text-align: center;
            padding: 40px 20px;
            font-size: 0.9em;
        }

        footer .social-links a {
            color: var(--color-white);
            margin: 0 10px;
            font-size: 1.5em;
            transition: color 0.3s ease;
        }

        footer .social-links a:hover {
            color: var(--color-terracotta);
        }

        /* Animation Classes */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .animate-fade-right {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-fade-right.animated {
            opacity: 1;
            transform: translateX(0);
        }

        .animate-fade-left {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-fade-left.animated {
            opacity: 1;
            transform: translateX(0);
        }

        .animate-fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-fade-up.animated {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            header {
                padding: 15px 20px;
                background-color: rgba(255, 255, 255, 0.95);
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .logo {
                color: var(--color-dark-charcoal);
                text-shadow: none;
            }

            nav {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 70px;
                left: 0;
                background-color: var(--color-white);
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                padding: 20px 0;
            }

            nav.active {
                display: flex;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
            }

            nav ul li {
                margin: 10px 0;
                text-align: center;
            }

            nav ul li a {
                color: var(--color-dark-charcoal);
                font-size: 1.1em;
            }

            .hamburger-menu {
                display: flex;
            }

            #hero-content h1 {
                font-size: 2.5em;
            }

            #hero-content p {
                font-size: 1em;
            }

            .btn-primary {
                padding: 12px 25px;
                font-size: 0.9em;
            }

            section {
                padding: 60px 20px;
            }

            section h2 {
                font-size: 2em;
            }

            .feature-grid,
            .preview-grid,
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">CALAO BALI</div>
        <nav>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#concept">Our Concept</a></li>
                <li><a href="#villas">The Villas</a></li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <main>
        <section id="hero">
            <video id="hero-video" autoplay muted loop playsinline>
                <source src="{{ asset('assets/video/baliview.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>
            <script>
                // Memastikan video diputar secara otomatis di berbagai browser
                document.addEventListener('DOMContentLoaded', function () {
                    var video = document.getElementById('hero-video');
                    if (video) {
                        var playPromise = video.play();
                        if (playPromise !== undefined) {
                            playPromise.catch(function (error) {
                                // Jika autoplay gagal (misal, karena kebijakan browser), coba play manual
                                video.muted = true;
                                video.play();
                            });
                        }
                    }
                });
            </script>
            <div class="overlay"></div>
            <div id="hero-content" class="animate-on-scroll">
                <h1>Find Serenity at Calao Bali</h1>
                <p>Your private eco-luxury bamboo villa retreat, surrounded by breathtaking nature and Mount Agung
                    views.</p>
                <a href="#booking-cta-section" class="btn-primary">Book Now</a>
            </div>
        </section>

        <!-- Remove big text sections and add more images for a more fluid, less rigid feel -->

        <!-- Gallery Section: More Images, Less Text -->
        <section id="gallery" class="container" style="padding-top: 100px;">
            <div class="gallery-grid">
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-gallery-1.jpg" alt="Calao Gallery 1" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-gallery-2.jpg" alt="Calao Gallery 2" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-gallery-3.jpg" alt="Calao Gallery 3" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-gallery-4.jpg" alt="Calao Gallery 4" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-villa-1.jpg" alt="Villa Arjuna" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-villa-2.jpg" alt="Villa Bima" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-experience-1.jpg" alt="Private Dining" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-experience-2.jpg" alt="Wellness & Yoga" class="animate-fade-up">
                </div>
                <div class="gallery-item animate-fade-up">
                    <img src="placeholder-experience-3.jpg" alt="Nature Walks" class="animate-fade-up">
                </div>
            </div>
            <a href="link-to-full-gallery.html" class="btn-primary animate-on-scroll" style="margin-top: 50px;">View
                Full Gallery</a>
        </section>

        <!-- Villas Preview: Just Images, Minimal Text -->
        <section id="villas" class="container" style="padding-top: 60px;">
            <div class="preview-grid">
                <div class="preview-item animate-fade-right">
                    <img src="placeholder-villa-1.jpg" alt="Calao Villa A" class="animate-fade-up">
                </div>
                <div class="preview-item animate-fade-left">
                    <img src="placeholder-villa-2.jpg" alt="Calao Villa B" class="animate-fade-up">
                </div>
                <div class="preview-item animate-fade-up">
                    <img src="placeholder-villa-3.jpg" alt="Calao Villa C" class="animate-fade-up">
                </div>
                <div class="preview-item animate-fade-up">
                    <img src="placeholder-villa-4.jpg" alt="Calao Villa D" class="animate-fade-up">
                </div>
            </div>
            <a href="link-to-all-villas.html" class="btn-primary animate-on-scroll" style="margin-top: 50px;">Explore
                All Villas</a>
        </section>

        <!-- Experiences Preview: Just Images, Minimal Text -->
        <section id="experiences" class="container" style="padding-top: 60px;">
            <div class="preview-grid">
                <div class="preview-item animate-fade-right">
                    <img src="placeholder-experience-1.jpg" alt="Private Dining" class="animate-fade-up">
                </div>
                <div class="preview-item animate-fade-up">
                    <img src="placeholder-experience-2.jpg" alt="Wellness & Yoga" class="animate-fade-up">
                </div>
                <div class="preview-item animate-fade-left">
                    <img src="placeholder-experience-3.jpg" alt="Nature Walks" class="animate-fade-up">
                </div>
            </div>
            <a href="link-to-all-experiences.html" class="btn-primary animate-on-scroll" style="margin-top: 50px;">See
                All Experiences</a>
        </section>

        <!-- Booking CTA remains -->
        <section id="booking-cta-section">
            <h2 class="animate-on-scroll">Ready to Plan Your Getaway?</h2>
            <p class="animate-on-scroll"
                style="color: var(--color-sandy-beige); margin-bottom: 30px; font-size: 1.1em;">Book directly with us
                for the best rates and real-time availability.</p>
            <a href="link-to-booking-engine.html" class="btn-primary animate-on-scroll">Book Now</a>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Calao Bali. All rights reserved.</p>
            <div class="social-links" style="margin-top: 15px;">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i>WhatsApp</a>
            </div>
            <p style="margin-top: 10px;">
                <a href="privacy-policy.html" style="color: var(--color-white);">Privacy Policy</a> |
                <a href="terms-conditions.html" style="color: var(--color-white);">Terms & Conditions</a>
            </p>
        </div>
    </footer>

    <script>
        // Header Scroll Effect
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });

        // Hamburger Menu Toggle
        const hamburger = document.querySelector('.hamburger-menu');
        const nav = document.querySelector('nav');

        hamburger.addEventListener('click', () => {
            nav.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        document.querySelectorAll('nav ul li a').forEach(item => {
            item.addEventListener('click', () => {
                if (nav.classList.contains('active')) {
                    nav.classList.remove('active');
                    hamburger.classList.remove('active');
                }
            });
        });

        // Scroll Animation
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll, .animate-fade-up, .animate-fade-right, .animate-fade-left');
            const windowHeight = window.innerHeight;
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < windowHeight - 60) {
                    el.classList.add('animated');
                }
            });
        }
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('DOMContentLoaded', animateOnScroll);

        // Hamburger menu animation (CSS in <style> tag)
        /*
        .hamburger-menu.active span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }
        .hamburger-menu.active span:nth-child(2) {
            opacity: 0;
        }
        .hamburger-menu.active span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }
        */
    </script>
</body>

</html>