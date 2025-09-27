<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Bali - Eco-Luxury Bamboo Villas</title>

    <meta name="description"
        content="Discover Calao Bali, a private sanctuary of eco-luxury bamboo villas with stunning Mount Agung views. Experience sustainable luxury, private pools, and in-villa dining.">
    <meta name="keywords"
        content="eco-luxury villas bali, private bamboo villas bali, mount agung views, sustainable luxury bali, wellness retreat bali, private villa with plunge pool">

    <link rel="stylesheet" href="{{asset('assets/css/demo9/bundle.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap"
        rel="stylesheet">
    <style>
        .typing-effect {
            display: inline-block;
            border-right: 2px solid #333;
            white-space: nowrap;
            overflow: hidden;
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #fff;
            min-height: 3.5rem;
            letter-spacing: 1px;
        }

        @media (max-width: 600px) {
            .typing-effect {
                font-size: 1.5rem;
            }
        }

        .hero-image-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .hero-video {
            display: none !important;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.45);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>

    <header id="main-header">
        <nav class="container">
            <a href="#home" class="logo" data-aos="fade-down" data-aos-delay="500">CALAO</a>
            <ul class="nav-menu">
                <li><a href="#concept" data-aos="fade-down" data-aos-delay="600">Our Concept</a></li>
                <li><a href="#villas" data-aos="fade-down" data-aos-delay="700">The Villas</a></li>
                <li><a href="#experiences" data-aos="fade-down" data-aos-delay="800">Experiences</a></li>
                <li><a href="#gallery" data-aos="fade-down" data-aos-delay="900">Gallery</a></li>
                <li><a href="#contact" data-aos="fade-down" data-aos-delay="1000">Contact</a></li>
            </ul>
            <a href="#book" class="btn btn-primary" data-aos="fade-down" data-aos-delay="1100">Book Now</a>
        </nav>
    </header>

    <main>
        <section id="home" class="hero" style="position:relative; min-height: 80vh;">
            <!-- Gambar dari internet -->
            <video class="hero-image-bg" autoplay loop muted playsinline>
                <source src="{{ asset('assets/video/baliview.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung video tag.
            </video>
            <div class="hero-overlay"></div>
            <div class="hero-content"
                style="display:flex; flex-direction:column; align-items:center; justify-content:center; height:80vh;">
                <h1 data-aos="fade-up" data-aos-delay="500">
                    <span class="typing-effect" id="typing-title"></span>
                </h1>
                <p data-aos="fade-up" data-aos-delay="700">Boutique eco-luxury bamboo villas with breathtaking Mount
                    Agung views.</p>
            </div>
        </section>

        <section class="features">
            <div class="container features-grid">
                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-leaf">
                        <path
                            d="M12 21.35c-2.41-1.8-4.5-3.88-4.5-6.85C7.5 10.63 10.13 8 12 8s4.5 2.63 4.5 6.5c0 2.97-2.09 5.05-4.5 6.85z">
                        </path>
                    </svg>
                    <h3>Sustainable Design</h3>
                    <p>Crafted from natural bamboo, embracing eco-friendly principles.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-lock">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <h3>Absolute Privacy</h3>
                    <p>Your own private sanctuary with a personal plunge pool.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="600">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-mountains">
                        <path d="M8 7l4 4 4-4"></path>
                        <path d="M16 14l-4 4-4-4"></path>
                        <path d="M18 10L12 4 6 10"></path>
                        <path d="M22 6L12 0 2 6"></path>
                        <path d="M2 18h20"></path>
                        <path d="M6 14h12"></path>
                    </svg>
                    <h3>Mount Agung Views</h3>
                    <p>Wake up to the majestic panorama of Bali's sacred volcano.</p>
                </div>
            </div>
        </section>

        <section id="concept" class="section">
            <div class="container concept-layout">
                <div class="concept-image" data-aos="fade-right">
                    <img src="https://via.placeholder.com/600x800.png?text=Bamboo+Architecture"
                        alt="Eco-luxury bamboo architecture">
                </div>
                <div class="concept-text" data-aos="fade-left">
                    <h2>Our Concept</h2>
                    <h3>Inspired by Nature, Crafted for Serenity</h3>
                    <p>Inspired by the graceful Calao bird, our villas blend seamlessly into the natural landscape. We
                        champion eco-luxury through sustainable bamboo architecture, minimalist design, and a deep
                        respect for the Balinese environment.</p>
                    <p>At Calao, we offer more than just a stay; we provide a private, exclusive experience designed to
                        reconnect you with nature and yourself.</p>
                    <a href="#" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </section>

        <section id="villas" class="section bg-beige">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>The Villas</h2>
                    <p>Six unique sanctuaries, each designed for ultimate comfort and privacy.</p>
                </div>
                <div class="villas-grid">
                    <div class="villa-card" data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://via.placeholder.com/500x350.png?text=Villa+Satu" alt="Villa Satu">
                        <div class="villa-card-content">
                            <h3>Villa Satu</h3>
                            <p>An intimate one-bedroom haven with a private plunge pool and garden.</p>
                            <a href="#" class="btn btn-terracotta">Explore Villa</a>
                        </div>
                    </div>
                    <div class="villa-card" data-aos="zoom-in" data-aos-delay="400">
                        <img src="https://via.placeholder.com/500x350.png?text=Villa+Dua" alt="Villa Dua">
                        <div class="villa-card-content">
                            <h3>Villa Dua</h3>
                            <p>Spacious living for families, featuring panoramic jungle views.</p>
                            <a href="#" class="btn btn-terracotta">Explore Villa</a>
                        </div>
                    </div>
                    <div class="villa-card" data-aos="zoom-in" data-aos-delay="600">
                        <img src="https://via.placeholder.com/500x350.png?text=Villa+Tiga" alt="Villa Tiga">
                        <div class="villa-card-content">
                            <h3>Villa Tiga</h3>
                            <p>Experience expansive views and ultimate serenity.</p>
                            <a href="#" class="btn btn-terracotta">Explore Villa</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiences" class="section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Curated Experiences</h2>
                    <p>Immerse yourself in the soul of Bali with our bespoke activities.</p>
                </div>
                <div class="experiences-grid">
                    <div class="experience-item" data-aos="fade-up" data-aos-delay="200"
                        style="background-image: url('https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=800&q=80');">
                        <h3>Private Dining</h3>
                    </div>
                    <div class="experience-item" data-aos="fade-up" data-aos-delay="400"
                        style="background-image: url('https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=800&q=80');">
                        <h3>Wellness & Yoga</h3>
                    </div>
                    <div class="experience-item" data-aos="fade-up" data-aos-delay="600"
                        style="background-image: url('https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=800&q=80');">
                        <h3>Nature Walks</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery" class="section bg-beige">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Gallery</h2>
                    <p>A glimpse into the serene world of Calao Bali.</p>
                </div>
                <div class="gallery-grid">
                    <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80"
                        alt="Gallery Image" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=400&q=80"
                        alt="Gallery Image" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?auto=format&fit=crop&w=400&q=80"
                        alt="Gallery Image" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80"
                        alt="Gallery Image" data-aos="zoom-in" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80"
                        alt="Gallery Image" data-aos="zoom-in" data-aos-delay="500">
                    <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=400&q=80"
                        alt="Gallery Image" data-aos="zoom-in" data-aos-delay="600">
                </div>
            </div>
        </section>

        <section id="book" class="cta-section">
            <div class="container">
                <h2 data-aos="fade-up">Your Sanctuary Awaits</h2>
                <p data-aos="fade-up" data-aos-delay="200">Check availability and secure your unforgettable stay at
                    Calao Bali.</p>
                <a href="#" class="btn btn-primary btn-large" data-aos="zoom-in" data-aos-delay="400">Check Availability
                    & Book</a>
            </div>
        </section>
    </main>

    <footer id="contact" class="section">
        <div class="container footer-grid">
            <div class="footer-col" data-aos="fade-up">
                <h3>Contact Us</h3>
                <p>Jalan Raya Tirta Gangga, Karangasem, Bali, Indonesia</p>
                <p>
                    <strong>Phone:</strong> +62 123 4567 890<br>
                    <strong>WhatsApp:</strong> +62 123 4567 890<br>
                    <strong>Email:</strong> reservations@calaobali.com
                </p>
            </div>
            <div class="footer-col" data-aos="fade-up" data-aos-delay="200">
                <h3>Send an Inquiry</h3>
                <form class="contact-form">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn-terracotta">Send</button>
                </form>
            </div>
            <div class="footer-col" data-aos="fade-up" data-aos-delay="400">
                <h3>Find Us</h3>
                <div class="map-placeholder">
                    <p>Google Map will be here.</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Calao Bali. All Rights Reserved. | <a href="#">Privacy Policy</a></p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize AOS
            AOS.init({
                duration: 1000, // Durasi animasi dalam ms
                once: true,     // Animasi hanya sekali saat scroll ke bawah
                mirror: false   // Animasi tidak terjadi saat scroll ke atas
            });

            // Header scroll effect
            const header = document.getElementById('main-header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Smooth scroll for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Typing animation for hero title
            const text = "Experience Tranquility in Nature";
            const typingEl = document.getElementById('typing-title');
            let idx = 0;
            function typeWriter() {
                if (typingEl && idx <= text.length) {
                    typingEl.textContent = text.substring(0, idx);
                    idx++;
                    setTimeout(typeWriter, 70);
                }
            }
            setTimeout(typeWriter, 600); // delay to sync with AOS
        });
        // Smooth scroll for navigation links

    </script>
</body>

</html>