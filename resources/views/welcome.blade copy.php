<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Bali: Eco-Luxury Bamboo Villas - Private Retreats with Mount Agung Views</title>
    <meta name="description" content="Temukan pengalaman eco-luxury tak tertandingi di Calao Bali. Vila bambu pribadi dengan pemandangan Gunung Agung, in-villa dining, wellness retreat, dan kolam renang pribadi.">
    <meta name="keywords" content="eco-luxury villas in Bali, private bamboo villas Bali, Mount Agung views, sustainable luxury Bali, in-villa dining Bali, wellness retreat Bali, private villa with plunge pool">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        /* CSS Variabel untuk Warna Brand */
        :root {
            --color-white: #FFFFFF;
            --color-terracotta: #d8b29a;
            --color-sandy-beige: #F5F2EA;
            --color-dark-charcoal: #333333;
            --color-black: #000000;
        }

        /* Base Styles */
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
            overflow-x: hidden; /* Mencegah scroll horizontal yang tidak diinginkan */
        }

        h1, h2, h3, h4, h5, h6 {
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

        /* Header & Navigation */
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
            /* Latar belakang transparan di awal, bisa berubah saat scroll */
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .header-scrolled {
            background-color: rgba(255, 255, 255, 0.95); /* Sedikit buram saat discroll */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8em;
            color: var(--color-white); /* Warna putih di atas video */
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5); /* Sedikit bayangan agar terlihat di video */
        }
        .header-scrolled .logo {
            color: var(--color-dark-charcoal); /* Warna gelap saat header discroll */
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
            color: var(--color-white); /* Warna putih di atas video */
            padding: 5px 0;
            position: relative;
        }
        .header-scrolled nav ul li a {
            color: var(--color-dark-charcoal); /* Warna gelap saat header discroll */
        }
        nav ul li a::after { /* Efek garis bawah */
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

        /* Burger menu untuk mobile */
        .hamburger-menu {
            display: none; /* Sembunyikan di desktop */
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

        /* Hero Section */
        #hero {
            position: relative;
            width: 100%;
            height: 100vh; /* Fullscreen */
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
            background: rgba(0, 0, 0, 0.4); /* Overlay gelap agar teks terlihat */
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
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }
        #hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: var(--color-white);
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .btn-primary:hover {
            background-color: #c49d8a; /* sedikit lebih gelap */
            transform: translateY(-2px);
        }

        /* Sections Styling */
        section {
            padding: 80px 20px;
            text-align: center;
            position: relative;
        }

        section:nth-of-type(even) {
            background-color: var(--color-sandy-beige);
        }

        section h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }
        section h2::after { /* Garis bawah elegan */
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
            width: 60px;
            height: 2px;
            background-color: var(--color-terracotta);
        }

        /* Intro Section */
        #intro p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1em;
            color: var(--color-dark-charcoal);
        }

        /* Features Section */
        #features .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        #features .feature-item {
            text-align: center;
        }

        #features .feature-item .icon {
            font-size: 3em; /* Gunakan ikon font atau SVG */
            color: var(--color-terracotta);
            margin-bottom: 15px;
        }
        #features .feature-item h3 {
            font-size: 1.3em;
            margin-bottom: 10px;
            color: var(--color-dark-charcoal);
        }
        #features .feature-item p {
            font-size: 0.95em;
            color: var(--color-dark-charcoal);
        }

        /* Villa & Experiences Preview */
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
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .preview-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
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

        /* Gallery Teaser */
        #gallery-teaser .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }
        #gallery-teaser .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        #gallery-teaser .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Booking CTA Section */
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
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
        }

        /* Footer */
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

        /* Responsiveness (Mobile First - adjust for larger screens later if needed) */
        @media (max-width: 768px) {
            header {
                padding: 15px 20px;
                background-color: rgba(255, 255, 255, 0.95); /* Selalu buram di mobile */
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            .logo {
                color: var(--color-dark-charcoal); /* Selalu gelap di mobile */
                text-shadow: none;
            }
            nav {
                display: none; /* Sembunyikan nav di mobile secara default */
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 70px; /* Di bawah header */
                left: 0;
                background-color: var(--color-white);
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                padding: 20px 0;
            }
            nav.active {
                display: flex; /* Tampilkan saat aktif */
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
                display: flex; /* Tampilkan hamburger di mobile */
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

            .feature-grid, .preview-grid, .gallery-grid {
                grid-template-columns: 1fr; /* Satu kolom di mobile */
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
            <video autoplay muted loop playsinline>
                <source src="your-video-background.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay"></div>
            <div id="hero-content">
                <h1>Temukan Ketenangan di Calao Bali</h1>
                <p>Retret vila bambu eco-luxury pribadi Anda, dikelilingi oleh alam yang menakjubkan dan pemandangan Gunung Agung.</p>
                <a href="#booking-cta-section" class="btn-primary">Pesan Sekarang</a>
            </div>
        </section>

        <section id="intro" class="container">
            <h2>Ketenangan dalam Kemewahan Alami</h2>
            <p>Di Calao Bali, kami percaya pada kemewahan yang selaras dengan alam. Setiap vila bambu kami dirancang untuk menawarkan privasi dan kenyamanan tak tertandingi, menciptakan tempat perlindungan di mana Anda dapat memulihkan diri, terhubung kembali dengan diri sendiri, dan menikmati keindahan abadi Bali.</p>
        </section>

        <section id="features" class="container">
            <h2>Fitur Utama Calao Bali</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <div class="icon">🌿</div>
                    <h3>Vila Bambu Pribadi</h3>
                    <p>Desain arsitektur bambu yang unik dan berkelanjutan, menyatu sempurna dengan lingkungan.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">⛰️</div>
                    <h3>Pemandangan Gunung Agung</h3>
                    <p>Nikmati panorama megah Gunung Agung langsung dari kenyamanan vila Anda.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">🏊</div>
                    <h3>Kolam Renang Pribadi</h3>
                    <p>Setiap vila dilengkapi dengan kolam renang pribadi untuk relaksasi eksklusif.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">🍽️</div>
                    <h3>In-Villa Dining</h3>
                    <p>Rasakan pengalaman kuliner istimewa di dalam vila Anda, dengan sentuhan inspirasi Maroko.</p>
                </div>
                <div class="feature-item">
                    <div class="icon">🧘</div>
                    <h3>Retret Kesehatan</h3>
                    <p>Sesi yoga pribadi, meditasi, dan perawatan spa untuk menyegarkan pikiran dan tubuh.</p>
                </div>
            </div>
        </section>

        <section id="villas" class="container">
            <h2>Vila-Vila Kami yang Unik</h2>
            <p>Jelajahi koleksi enam vila bambu pribadi kami, masing-masing dirancang dengan cermat untuk memberikan pengalaman menginap yang tak terlupakan.</p>
            <div class="preview-grid">
                <div class="preview-item">
                    <img src="placeholder-villa-1.jpg" alt="Calao Villa A">
                    <div class="preview-item-content">
                        <h3>Vila Arjuna</h3>
                        <p>Vila luas dengan dua kamar tidur, pemandangan lembah, dan area bersantai pribadi.</p>
                        <a href="link-to-villa-arjuna.html" class="btn-secondary">Lihat Detail</a>
                    </div>
                </div>
                <div class="preview-item">
                    <img src="placeholder-villa-2.jpg" alt="Calao Villa B">
                    <div class="preview-item-content">
                        <h3>Vila Bima</h3>
                        <p>Retret romantis dengan satu kamar tidur, kolam renang pribadi, dan privasi maksimal.</p>
                        <a href="link-to-villa-bima.html" class="btn-secondary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <a href="link-to-all-villas.html" class="btn-primary" style="margin-top: 50px;">Jelajahi Semua Vila</a>
        </section>

        <section id="experiences" class="container">
            <h2>Pengalaman yang Dikurasi</h2>
            <p>Tingkatkan pengalaman Anda di Calao Bali dengan berbagai aktivitas yang dirancang untuk memanjakan indra dan menenangkan jiwa.</p>
            <div class="preview-grid">
                <div class="preview-item">
                    <img src="placeholder-experience-1.jpg" alt="Private Dining">
                    <div class="preview-item-content">
                        <h3>In-Villa Dining Eksklusif</h3>
                        <p>Nikmati hidangan lezat yang terinspirasi Maroko dan hidangan lokal Bali di vila Anda.</p>
                        <a href="link-to-dining-details.html" class="btn-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="preview-item">
                    <img src="placeholder-experience-2.jpg" alt="Wellness & Yoga">
                    <div class="preview-item-content">
                        <h3>Kesehatan & Yoga</h3>
                        <p>Sesi yoga pribadi, meditasi, dan perawatan spa yang menenangkan di tengah alam.</p>
                        <a href="link-to-wellness-details.html" class="btn-secondary">Selengkapnya</a>
                    </div>
                </div>
                <div class="preview-item">
                    <img src="placeholder-experience-3.jpg" alt="Nature Walks">
                    <div class="preview-item-content">
                        <h3>Jelajah Alam & Budaya</h3>
                        <p>Temukan keindahan alam Bali dan kekayaan budayanya melalui tur yang dipandu.</p>
                        <a href="link-to-excursion-details.html" class="btn-secondary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <a href="link-to-all-experiences.html" class="btn-primary" style="margin-top: 50px;">Lihat Semua Pengalaman</a>
        </section>

        <section id="gallery" class="container">
            <h2>Galeri Foto & Video</h2>
            <p>Saksikan keindahan Calao Bali melalui koleksi foto dan video beresolusi tinggi kami.</p>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="placeholder-gallery-1.jpg" alt="Galeri Calao 1">
                </div>
                <div class="gallery-item">
                    <img src="placeholder-gallery-2.jpg" alt="Galeri Calao 2">
                </div>
                <div class="gallery-item">
                    <img src="placeholder-gallery-3.jpg" alt="Galeri Calao 3">
                </div>
                <div class="gallery-item">
                    <img src="placeholder-gallery-4.jpg" alt="Galeri Calao 4">
                </div>
                </div>
            <a href="link-to-full-gallery.html" class="btn-primary" style="margin-top: 50px;">Lihat Galeri Lengkap</a>
        </section>

        <section id="booking-cta-section">
            <h2>Siap Merencanakan Liburan Anda?</h2>
            <p style="color: var(--color-sandy-beige); margin-bottom: 30px; font-size: 1.1em;">Pesan langsung dengan kami untuk harga terbaik dan ketersediaan waktu nyata.</p>
            <a href="link-to-booking-engine.html" class="btn-primary">Pesan Sekarang</a>
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
                <a href="privacy-policy.html" style="color: var(--color-white);">Kebijakan Privasi</a> |
                <a href="terms-conditions.html" style="color: var(--color-white);">Syarat & Ketentuan</a>
            </p>
        </div>
    </footer>

    <script>
        // Header Scroll Effect
        window.addEventListener('scroll', function() {
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
            hamburger.classList.toggle('active'); // Untuk animasi hamburger
        });

        // Menutup menu saat link diklik (opsional, untuk SPA)
        document.querySelectorAll('nav ul li a').forEach(item => {
            item.addEventListener('click', () => {
                if (nav.classList.contains('active')) {
                    nav.classList.remove('active');
                    hamburger.classList.remove('active');
                }
            });
        });

        // Tambahan untuk animasi hamburger menu
        // Styling untuk animasi hamburger menu (tambahkan di dalam <style> tag)
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