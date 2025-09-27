<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Bali - Eco-Luxury Bamboo Villas</title>
    <link rel="stylesheet" href="{{asset('assets/css/custom-8.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@300;400;500&display=swap"
        rel="stylesheet">
</head>

<body>

    <header class="header">
        <nav class="navbar container">
            <a href="#home" class="nav-logo">CALAO</a>
            <ul class="nav-menu">
                <li><a href="#concept">OUR CONCEPT</a></li>
                <li><a href="#villas">THE VILLAS</a></li>
                <li><a href="#experiences">EXPERIENCES</a></li>
                <li><a href="#gallery">GALLERY</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
            <a href="#contact" class="nav-button">BOOK NOW</a>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-video-bg">
                <video playsinline autoplay muted loop poster="placeholder-poster.jpg">
                    <source src="{{ asset('assets/video/baliview.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="hero-content">
                <h1 class="animate-on-load">Where Nature Meets Luxury</h1>
                <p class="animate-on-load">Experience tranquility in our private eco-luxury bamboo villas.</p>
            </div>
        </section>

        <section id="concept" class="concept-section">
            <div class="container reveal">
                <h2 class="section-title">OUR CONCEPT: The Soul of Calao</h2>
                <p class="concept-intro">At Calao Bali, we've crafted more than just villas; we've built a philosophy.
                    Inspired by the majestic Calao bird, symbolizing grace and connection to nature, our sanctuary
                    blends sustainable luxury with authentic Balinese tranquility.</p>
            </div>

            <div class="concept-story-grid container">
                <div class="story-left reveal">
                    <img src="https://images.unsplash.com/photo-1549294413-26f195200c16?q=80&w=1964&auto=format&fit=crop"
                        alt="Calao Bird Inspiration" class="story-image">
                    <h3>Inspired by Nature</h3>
                    <p>Every element of Calao Bali reflects our deep reverence for the environment. From our towering
                        bamboo structures to the lush, untouched landscapes, we invite you to immerse yourself in the
                        natural beauty that surrounds us.</p>
                </div>
                <div class="story-right reveal">
                    <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=1925&auto=format&fit=crop"
                        alt="Eco-Luxury Design" class="story-image">
                    <h3>Eco-Luxury Living</h3>
                    <p>Our commitment to sustainability is woven into the very fabric of our villas. Experience
                        unparalleled comfort without compromising on ecological integrity. Enjoy modern amenities in a
                        setting that harmonizes with nature's rhythm.</p>
                </div>
            </div>

            <div class="container text-center-section reveal">
                <h2 class="section-title">A Sanctuary of Serenity</h2>
                <p>Calao Bali is a testament to mindful living. We offer a secluded haven where privacy, peace, and
                    personalized experiences converge, creating moments that resonate long after you depart.</p>
                <a href="#villas" class="button">EXPLORE OUR VILLAS</a>
            </div>
        </section>

        <section id="villas" class="villas-preview-section">
            <div class="container text-center-section reveal">
                <h2>The Villas</h2>
                <p>Enam vila bambu yang unik, masing-masing merupakan mahakarya desain dan kenyamanan, menawarkan
                    pemandangan menakjubkan dan privasi penuh.</p>
            </div>
            <div class="container villa-grid reveal">
                <div class="villa-card">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070"
                        alt="Villa Name Two">
                    <h3>Villa Serenity</h3>
                    <a href="#" class="link-arrow">DISCOVER</a>
                </div>
                <div class="villa-card">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2000"
                        alt="Villa Name Three">
                    <h3>Villa Horizon</h3>
                    <a href="#" class="link-arrow">DISCOVER</a>
                </div>
                <div class="villa-card">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070"
                        alt="Villa Name One">
                    <h3>Villa Dream</h3>
                    <a href="#" class="link-arrow">DISCOVER</a>
                </div>
            </div>
        </section>

        <section id="experiences" class="experience-preview-section">
            <div class="container reveal">
                <div class="experience-image">
                    <img src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?q=80&w=2070"
                        alt="Private Dining Experience">
                </div>
                <div class="experience-text">
                    <h2>Unforgettable Experiences</h2>
                    <p>Dari santapan pribadi dengan masakan unik yang terinspirasi Maroko hingga sesi yoga yang
                        menyegarkan dan jalan-jalan di alam, kami menyusun pengalaman yang menghubungkan Anda dengan
                        jiwa Bali.</p>
                    <a href="#" class="button">EXPLORE MORE</a>
                </div>
            </div>
        </section>

        <section id="gallery" class="gallery-teaser-section">
            <div class="container text-center-section reveal">
                <h2>Gallery</h2>
                <p>Sekilas ke dalam dunia Calao Bali yang tenang.</p>
            </div>
            <div class="gallery-grid reveal">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1598928506311-c55ded91a20c?q=80&w=2070"
                        alt="Gallery Teaser 1"></div>
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=2070"
                        alt="Gallery Teaser 2"></div>
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?q=80&w=2080"
                        alt="Gallery Teaser 3"></div>
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=2071"
                        alt="Gallery Teaser 4"></div>
            </div>
        </section>

        <section id="contact" class="cta-section">
            <div class="cta-overlay"></div>
            <div class="container reveal">
                <h2>Your Sanctuary Awaits</h2>
                <p>Biarkan kami menjadi bagian dari perjalanan tak terlupakan Anda di Bali. Periksa ketersediaan dan
                    amankan
                    surga bambu pribadi Anda hari ini.</p>
                <a href="#" class="button">BOOK YOUR VILLA</a>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4 class="footer-logo">CALAO</h4>
                    <p>Your private bamboo sanctuary. A harmonious blend of nature, comfort, and sustainable luxury.</p>
                </div>
                <div class="footer-col">
                    <h4>QUICK NAV</h4>
                    <ul class="footer-links">
                        <li><a href="#concept">Our Concept</a></li>
                        <li><a href="#villas">The Villas</a></li>
                        <li><a href="#experiences">Experiences</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>CONTACT US</h4>
                    <p>
                        Jalan Raya Kedewatan, Bali<br>
                        <a href="mailto:info@calaobali.com">info@calaobali.com</a><br>
                        <a href="tel:+621234567890">+62 123 4567 890</a>
                    </p>
                </div>
                <div class="footer-col">
                    <h4>FOLLOW US</h4>
                    <div class="social-icons">
                        <a href="#" aria-label="Instagram">[IG]</a>
                        <a href="#" aria-label="Facebook">[FB]</a>
                        <a href="#" aria-label="YouTube">[YT]</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 CALAO BALI. All Rights Reserved. Crafted with care.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Smooth scroll untuk navigasi internal
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // 1. Efek Header saat scroll
            const header = document.querySelector('.header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 2. Animasi elemen saat terlihat di layar
            function revealOnScroll() {
                const reveals = document.querySelectorAll('.reveal');

                for (let i = 0; i < reveals.length; i++) {
                    const windowHeight = window.innerHeight;
                    const elementTop = reveals[i].getBoundingClientRect().top;
                    const elementVisible = 150; // Jarak trigger dari bawah layar

                    if (elementTop < windowHeight - elementVisible) {
                        reveals[i].classList.add('active');
                    }
                }
            }

            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Panggil saat load untuk elemen yang sudah terlihat
        });
    </script>
</body>

</html>