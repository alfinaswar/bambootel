<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Anadudi - Where Black Sand Meets Blue Water</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/custom-home3.css')}}" />
</head>

<body>
    <!-- Header dan Navigasi -->
    <header>
        <a href="#" class="logo">CALAO<span> BALI</span></a>
        <a href="#" class="logo">
            <img src="{{ asset('assets/logocalao/Calao6-05.png') }}" alt="Calao Bali Logo"
                style="height:110px; vertical-align:middle;" class="logo-img logo-img-light">
            <img src="{{ asset('assets/logocalao/Calao6-04.png') }}" alt="Calao Bali Logo Hitam"
                style="height:110px; vertical-align:middle; display:none;" class="logo-img logo-img-dark">
        </a>

        <div class="menu-toggle"><i class="fas fa-bars"></i></div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Villas</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section dengan Video -->
    <section class="hero" id="home">
        <video autoplay muted loop class="hero-video">
            <source src="{{asset('assets/video/baliview.mp4')}}" type="video/mp4">
            Browser Anda tidak mendukung video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Where Black Sand Meets Blue Water</h1>
            <p class="hero-subtitle">Calao - Bali</p>
            <a href="#experience" class="cta-button">Discover More</a>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- About Section dengan Gaya "Where Black Sand Meets Blue Water" -->
    <section class="about" id="about">
        <div class="section-header">
            <p class="section-subtitle">The Calao Experience</p>
            <div class="section-divider"></div>
            <h2 class="section-title">A Premium Holiday Experience Amidst Nature</h2>
        </div>

        <div class="about-content">
            <div class="about-text-block">
                <p class="about-text-large">Calao sits on a quiet and calm Pabean Beach, on Bali's South-East coast,
                    where guests enjoy tranquility and peace. The only sound ever heard here is the soothing sound of
                    waves gently crashing against the shore.</p>

                <p class="about-text-normal">Spectacular views of the Indian Ocean and the monumental silhouettes of
                    Mount Agung and Nasa Penida Island complete the heavenly experience. Pabean Beach is part of
                    Gianyar, the same regency that Ubud, the cultural and spiritual heart of Bali, belongs to. Hence, a
                    cultural day trip to Ubud is a great option for guests staying at Calao.</p>
            </div>

            <div class="about-highlight">
                <div class="highlight-title">WHERE BLACK SAND</div>
                <div class="highlight-divider"></div>
                <div class="highlight-text">Most people are familiar with pristine white sand beaches but many have yet
                    to discover the magic of black sand – and when they do, they are usually left intrigued and amazed.
                </div>
            </div>

            <div class="about-text-block">
                <p class="about-text-normal">It forms from eroded volcanic material such as lava, basalt rocks and other
                    dark-colored rocks and minerals and is found on beaches near volcanic activity. The black sand on
                    the Island of the Gods originates from its most sacred volcano, the majestic Mount Agung. It is
                    believed that black sand possesses healing powers, helping to treat arthritis, sciatica and other
                    joint inflammation illnesses.</p>
            </div>

            <div class="about-highlight">
                <div class="highlight-title">MEETS BLUE WATER</div>
                <div class="highlight-divider"></div>
                <div class="highlight-text">The contrast between the dark volcanic sand and the vibrant blue waters
                    creates a mesmerizing landscape that captivates every visitor. This unique natural phenomenon offers
                    a beach experience unlike any other.</div>
            </div>

            <div class="about-image-grid">
                <div class="image-item">
                    <img src="https://images.unsplash.com/photo-1552733407-5d5c46c3bb3b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Black Sand Beach">
                    <div class="image-caption">Pabean Black Sand Beach</div>
                </div>
                <div class="image-item">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Villa Exterior">
                    <div class="image-caption">Calao Villa Exterior</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities" id="experience">
        <div class="section-header">
            <p class="section-subtitle">Luxury Amenities</p>
            <div class="section-divider"></div>
            <h2 class="section-title">Villa Facilities</h2>
        </div>

        <div class="facilities-grid">
            <div class="facility-card">
                <div class="facility-icon">
                    <i class="fas fa-infinity"></i>
                </div>
                <h3 class="facility-title">Infinity Pool</h3>
                <p class="facility-desc">Private infinity pool with stunning ocean views, perfect for relaxing while
                    watching the sunset over the Indian Ocean.</p>
            </div>

            <div class="facility-card">
                <div class="facility-icon">
                    <i class="fas fa-spa"></i>
                </div>
                <h3 class="facility-title">Spa & Wellness</h3>
                <p class="facility-desc">Traditional Balinese spa treatments in the privacy of your villa, using natural
                    ingredients and ancient techniques.</p>
            </div>

            <div class="facility-card">
                <div class="facility-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 class="facility-title">Private Chef</h3>
                <p class="facility-desc">Personal chef service to prepare authentic Balinese cuisine or international
                    dishes tailored to your preferences.</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="section-header">
            <p class="section-subtitle">Visual Journey</p>
            <div class="section-divider"></div>
            <h2 class="section-title">Gallery</h2>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                    alt="Villa 1">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                    alt="Villa 2">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                    alt="Villa 3">
                <div class="gallery-overlay">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="section-header">
            <p class="section-subtitle">Get In Touch</p>
            <div class="section-divider"></div>
            <h2 class="section-title">Contact Us</h2>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <h3>Stay at Anaduri</h3>
                <p><i class="fas fa-map-marker-alt"></i> Pabean Beach, Gianyar, Bali, Indonesia</p>
                <p><i class="fas fa-phone"></i> +62 812-3456-7890</p>
                <p><i class="fas fa-envelope"></i> info@anadurivillas.com</p>
                <p><i class="fas fa-clock"></i> Reception: 24/7</p>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Inquiry</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Calao</h3>
                <p>Where Black Sand Meets Blue Water. Experience luxury and tranquility at our exclusive beachfront
                    villas in Bali.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Villas</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Villa Types</h3>
                <ul>
                    <li><a href="#">Ocean View Villa</a></li>
                    <li><a href="#">Beachfront Villa</a></li>
                    <li><a href="#">Family Villa</a></li>
                    <li><a href="#">Honeymoon Suite</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Anaduri Villas. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
        // Sticky Header
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            header.classList.toggle('scrolled', window.scrollY > 100);

            // Back to Top Button
            const backToTop = document.querySelector('.back-to-top');
            backToTop.classList.toggle('active', window.scrollY > 500);
        });

        // Mobile Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');

        menuToggle.addEventListener('click', function () {
            nav.classList.toggle('active');
            menuToggle.querySelector('i').classList.toggle('fa-bars');
            menuToggle.querySelector('i').classList.toggle('fa-times');
        });

        // Smooth Scrolling untuk Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Tutup mobile menu setelah klik link
                    if (nav.classList.contains('active')) {
                        nav.classList.remove('active');
                        menuToggle.querySelector('i').classList.remove('fa-times');
                        menuToggle.querySelector('i').classList.add('fa-bars');
                    }
                }
            });
        });

        // Back to Top Functionality
        document.querySelector('.back-to-top').addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Scroll Animation for Elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        const elementsToAnimate = document.querySelectorAll('.about-text-block');
        elementsToAnimate.forEach(el => {
            observer.observe(el);
        });

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you! Your inquiry has been sent. We will contact you shortly.');
            this.reset();
        });
    </script>
    <script>
        // Script untuk mengganti logo saat discroll
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('header');
            const logoLight = document.querySelector('.logo-img-light');
            const logoDark = document.querySelector('.logo-img-dark');

            function toggleLogo() {
                if (header.classList.contains('scrolled')) {
                    logoLight.style.display = 'none';
                    logoDark.style.display = 'inline';
                } else {
                    logoLight.style.display = 'inline';
                    logoDark.style.display = 'none';
                }
            }

            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                toggleLogo();
            });

            // Inisialisasi saat load
            toggleLogo();
        });
    </script>
</body>

</html>