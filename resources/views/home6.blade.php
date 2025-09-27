<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysian Villas - Surga Pribadi Anda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@300;400&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-font: 'Playfair Display', serif;
            --secondary-font: 'Lato', sans-serif;
            --text-color: #333;
            --background-color: #fdfcf9;
            --accent-color: #d4af37;
            --dark-color: #1a1a1a;
        }

        /* Reset dan Gaya Dasar */
        body {
            font-family: var(--secondary-font);
            margin: 0;
            color: var(--text-color);
            background-color: var(--background-color);
            line-height: 1.7;
            font-weight: 300;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            font-family: var(--primary-font);
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 4rem;
            font-weight: 700;
        }

        .button {
            background-color: var(--accent-color);
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 400;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .button:hover {
            background-color: #b89a30;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }


        /* Header dan Navigasi */
        .header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
            background-color: transparent;
            transition: background-color 0.4s ease, padding 0.4s ease;
        }

        .header.scrolled {
            background-color: rgba(26, 26, 26, 0.9);
            padding: 0.5rem 0;
            backdrop-filter: blur(10px);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            color: #fff;
            font-family: var(--primary-font);
            font-size: 1.8rem;
            text-decoration: none;
        }

        .nav-menu {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent-color);
        }


        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            overflow: hidden;
        }

        .hero-video-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
        }

        .hero-video-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .hero video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-content {
            animation: fadeIn 1.5s ease-out;
        }

        .hero-title {
            font-family: var(--primary-font);
            font-size: 4.5rem;
            margin: 0;
            animation: slideUp 1s 0.5s ease-out backwards;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin: 1rem 0 2rem;
            font-weight: 300;
            animation: slideUp 1s 0.8s ease-out backwards;
        }

        .hero .button {
            animation: slideUp 1s 1.1s ease-out backwards;
        }

        /* Animasi Keyframes untuk Teks Hero */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* Bagian Villas */
        .villas-section {
            padding: 6rem 0;
        }

        .villa-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .villa-card {
            background: #fff;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .villa-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 40px rgba(0, 0, 0, 0.1);
        }

        .villa-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .villa-card-content {
            padding: 1.5rem;
        }

        .villa-card h3 {
            font-family: var(--primary-font);
            margin: 0 0 0.5rem;
        }

        .villa-card-content a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 400;
        }


        /* Bagian Experience */
        .experience-section {
            padding: 6rem 0;
            background: #fff;
        }

        .experience-content {
            display: flex;
            align-items: center;
            gap: 4rem;
        }

        .experience-image {
            flex: 1;
        }

        .experience-image img {
            width: 100%;
            border-radius: 10px;
        }

        .experience-text {
            flex: 1;
        }

        .experience-text .section-title {
            text-align: left;
        }


        /* Bagian Galeri */
        .gallery-section {
            padding: 6rem 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 1rem;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 10px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: #fff;
            text-align: center;
            padding: 4rem 0;
        }

        .footer-email {
            color: var(--accent-color);
            font-family: var(--primary-font);
            font-size: 2rem;
            text-decoration: none;
            display: block;
            margin: 1rem 0;
        }

        .footer-bottom {
            margin-top: 3rem;
            opacity: 0.6;
        }

        /* Animasi Scroll */
        .reveal {
            opacity: 0;
            transform: translateY(60px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <header class="header">
        <nav class="navbar container">
            <a href="#" class="nav-logo">Elysian Villas</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#villas" class="nav-link">Villas</a></li>
                <li class="nav-item"><a href="#experience" class="nav-link">The Experience</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link button">Book Now</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-video-wrapper">
            <video playsinline autoplay muted loop poster="hero-poster.jpg">
                <source src="{{ asset('assets/video/baliview.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Temukan Surga Pribadi Anda</h1>
            <p class="hero-subtitle">Kemewahan tak tertandingi bertemu dengan ketenangan alam.</p>
            <a href="#villas" class="button">Jelajahi Properti</a>
        </div>
    </section>

    <section id="villas" class="villas-section">
        <div class="container">
            <h2 class="section-title reveal">Koleksi Villa Eksklusif Kami</h2>
            <div class="villa-grid">
                <div class="villa-card reveal">
                    <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=1925&auto=format&fit=crop"
                        alt="Villa Samudra">
                    <div class="villa-card-content">
                        <h3>Villa Samudra</h3>
                        <p>Villa 4 kamar tidur dengan kolam renang infinity yang menghadap langsung ke samudra biru.</p>
                        <a href="#">Lihat Detail &rarr;</a>
                    </div>
                </div>
                <div class="villa-card reveal">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?q=80&w=1932&auto=format&fit=crop"
                        alt="Villa Taman Sari">
                    <div class="villa-card-content">
                        <h3>Villa Taman Sari</h3>
                        <p>Surga 3 kamar tidur yang tersembunyi di tengah taman tropis yang rimbun dan menenangkan.</p>
                        <a href="#">Lihat Detail &rarr;</a>
                    </div>
                </div>
                <div class="villa-card reveal">
                    <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?q=80&w=1740&auto=format&fit=crop"
                        alt="Villa Nirwana">
                    <div class="villa-card-content">
                        <h3>Villa Nirwana</h3>
                        <p>Properti megah 5 kamar tidur di puncak tebing dengan pemandangan matahari terbenam terbaik.
                        </p>
                        <a href="#">Lihat Detail &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="experience-section">
        <div class="container experience-content">
            <div class="experience-image reveal">
                <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=1740&auto=format&fit=crop"
                    alt="Pelayanan di Villa Mewah">
            </div>
            <div class="experience-text reveal">
                <h2 class="section-title">Pengalaman Tak Terlupakan</h2>
                <p>Di Elysian Villas, setiap detail dirancang untuk kesempurnaan. Tim kami yang berdedikasi siap
                    memberikan layanan personal, mulai dari koki pribadi, perawatan spa di dalam villa, hingga tur lokal
                    yang eksklusif. Kami menciptakan kenangan yang akan bertahan seumur hidup.</p>
                <a href="#" class="button">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section">
        <div class="container">
            <h2 class="section-title reveal">Momen Elysian</h2>
            <div class="gallery-grid">
                <div class="gallery-item reveal"><img
                        src="https://images.unsplash.com/photo-1615571022219-eb45cf7faa9d?q=80&w=1887&auto=format&fit=crop"
                        alt="Galeri 1"></div>
                <div class="gallery-item reveal"><img
                        src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=1740&auto=format&fit=crop"
                        alt="Galeri 2"></div>
                <div class="gallery-item reveal"><img
                        src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=1740&auto=format&fit=crop"
                        alt="Galeri 3"></div>
                <div class="gallery-item reveal"><img
                        src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?q=80&w=1740&auto=format&fit=crop"
                        alt="Galeri 4"></div>
            </div>
        </div>
    </section>


    <footer id="contact" class="footer">
        <div class="container">
            <p>Rencanakan liburan impian Anda bersama kami.</p>
            <a href="mailto:booking@elysianvillas.com" class="footer-email">booking@elysianvillas.com</a>
            <div class="footer-bottom">
                <p>&copy; 2025 Elysian Villas. Dirancang dengan Penuh Gairah.</p>
            </div>
        </div>
    </footer>

    <script>// Efek header transparan menjadi solid saat scroll
        const header = document.querySelector('.header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });


        // Fungsi untuk animasi elemen saat di-scroll
        function revealElements() {
            const reveals = document.querySelectorAll('.reveal');

            for (let i = 0; i < reveals.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = reveals[i].getBoundingClientRect().top;
                const elementVisible = 100; // Jarak dari bawah layar sebelum elemen muncul

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add('active');
                } else {
                    // Opsional: hapus kelas 'active' jika elemen keluar dari pandangan lagi
                    // reveals[i].classList.remove('active');
                }
            }
        }

        window.addEventListener('scroll', revealElements);
        // Panggil fungsi saat pertama kali memuat halaman jika ada elemen yang sudah terlihat
        revealElements();</script>
    <script src="script.js"></script>
</body>

</html>