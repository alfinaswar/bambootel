<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Bali - Eco-Luxury Villas</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <style>
        /* CSS Variables for Brand Colors */
        :root {
            --white: #FFFFFF;
            --terracotta: #d8b29a;
            --sandy-beige: #F5F2EA;
            --charcoal: #333333;
        }

        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--charcoal);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        h1 {
            font-size: 3.5rem;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        h3 {
            font-size: 1.8rem;
        }

        p {
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--terracotta);
            color: var(--white);
            border: none;
            border-radius: 2px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            background-color: var(--charcoal);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--terracotta);
            color: var(--terracotta);
        }

        .btn-outline:hover {
            background-color: var(--terracotta);
            color: var(--white);
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 60px;
            height: 2px;
            background-color: var(--terracotta);
            margin: 15px auto;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background-color: var(--white);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--white);
            z-index: 1001;
        }

        header.scrolled .logo {
            color: var(--charcoal);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: var(--white);
            font-weight: 500;
            font-size: 0.9rem;
            letter-spacing: 1px;
            position: relative;
        }

        header.scrolled nav ul li a {
            color: var(--charcoal);
        }

        nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--terracotta);
            transition: width 0.3s ease;
        }

        nav ul li a:hover:after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 1001;
        }

        header.scrolled .mobile-menu-btn {
            color: var(--charcoal);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            z-index: 1;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Features Section */
        .features {
            background-color: var(--sandy-beige);
            padding: 100px 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .feature-item {
            text-align: center;
            padding: 30px 20px;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--terracotta);
            margin-bottom: 20px;
        }

        .feature-item h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        /* Villas Preview Section */
        .villas-preview {
            padding: 100px 0;
        }

        .villas-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .villa-card {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .villa-card:hover {
            transform: translateY(-10px);
        }

        .villa-image {
            height: 300px;
            overflow: hidden;
        }

        .villa-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .villa-card:hover .villa-image img {
            transform: scale(1.1);
        }

        .villa-content {
            padding: 20px;
            background-color: var(--white);
        }

        .villa-content h3 {
            margin-bottom: 10px;
        }

        .villa-price {
            color: var(--terracotta);
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Experiences Section */
        .experiences {
            background-color: var(--sandy-beige);
            padding: 100px 0;
        }

        .experiences-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .experience-item {
            display: flex;
            flex-direction: column;
            background-color: var(--white);
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .experience-image {
            height: 250px;
            overflow: hidden;
        }

        .experience-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .experience-item:hover .experience-image img {
            transform: scale(1.1);
        }

        .experience-content {
            padding: 25px;
            flex-grow: 1;
        }

        /* Gallery Section */
        .gallery {
            padding: 100px 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            height: 250px;
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

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay span {
            color: var(--white);
            font-size: 1.5rem;
        }

        /* Booking CTA Section */
        .booking-cta {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            text-align: center;
            color: var(--white);
        }

        .booking-cta h2 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .booking-cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2.5rem;
        }

        /* Footer */
        footer {
            background-color: var(--charcoal);
            color: var(--white);
            padding: 70px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background-color: var(--terracotta);
            bottom: -10px;
            left: 0;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #ccc;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: var(--terracotta);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--terracotta);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #ccc;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .villas-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 2rem;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .mobile-menu-btn {
                display: block;
            }

            nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--white);
                padding: 80px 30px 30px;
                transition: right 0.3s ease;
                z-index: 1000;
            }

            nav.active {
                right: 0;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 0 0 20px 0;
            }

            nav ul li a {
                color: var(--charcoal);
                font-size: 1.1rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .villas-grid {
                grid-template-columns: 1fr;
            }

            .experiences-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .booking-cta h2 {
                font-size: 2.2rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .booking-cta h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">Calao Bali</a>
            <button class="mobile-menu-btn">☰</button>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#concept">Our Concept</a></li>
                    <li><a href="#villas">The Villas</a></li>
                    <li><a href="#experiences">Experiences</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#book">Book Now</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <video autoplay muted loop class="hero-video">
            <source src="{{asset('assets/video/mainvideo.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Eco-Luxury Villas in Bali</h1>
            <p>Experience sustainable luxury in our private bamboo villas with breathtaking Mount Agung views</p>
            <a href="#book" class="btn">Book Your Stay</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Calao Bali</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🏠</div>
                    <h3>Private Villas</h3>
                    <p>Exclusive bamboo villas with plunge pools for complete privacy</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🌿</div>
                    <h3>Sustainable Luxury</h3>
                    <p>Eco-friendly design that respects Bali's natural beauty</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🍽️</div>
                    <h3>Private Dining</h3>
                    <p>Moroccan-inspired cuisine served in the comfort of your villa</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🧘</div>
                    <h3>Wellness Focus</h3>
                    <p>Yoga, meditation, and spa treatments for complete rejuvenation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Villas Preview Section -->
    <section class="villas-preview" id="villas">
        <div class="container">
            <h2 class="section-title">Our Exclusive Villas</h2>
            <div class="villas-grid">
                <div class="villa-card">
                    <div class="villa-image">
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Villa Alba">
                    </div>
                    <div class="villa-content">
                        <h3>Villa Alba</h3>
                        <p class="villa-price">From $350/night</p>
                        <p>Spacious two-bedroom villa with private infinity pool and panoramic mountain views.</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="villa-card">
                    <div class="villa-image">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Villa Surya">
                    </div>
                    <div class="villa-content">
                        <h3>Villa Surya</h3>
                        <p class="villa-price">From $300/night</p>
                        <p>Luxurious one-bedroom retreat with sun deck and outdoor rain shower.</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="villa-card">
                    <div class="villa-image">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Villa Chandra">
                    </div>
                    <div class="villa-content">
                        <h3>Villa Chandra</h3>
                        <p class="villa-price">From $400/night</p>
                        <p>Romantic honeymoon villa with private garden and plunge pool.</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="#villas" class="btn">View All Villas</a>
            </div>
        </div>
    </section>

    <!-- Experiences Section -->
    <section class="experiences" id="experiences">
        <div class="container">
            <h2 class="section-title">Unique Experiences</h2>
            <div class="experiences-grid">
                <div class="experience-item">
                    <div class="experience-image">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Private Dining">
                    </div>
                    <div class="experience-content">
                        <h3>Private Dining</h3>
                        <p>Indulge in our Moroccan-inspired cuisine prepared by our private chef. Enjoy a romantic
                            dinner under the stars or a family feast in the comfort of your villa.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="experience-item">
                    <div class="experience-image">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Wellness & Yoga">
                    </div>
                    <div class="experience-content">
                        <h3>Wellness & Yoga</h3>
                        <p>Rejuvenate with daily yoga sessions, traditional Balinese spa treatments, and meditation
                            practices amidst nature's tranquility.</p>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <h2 class="section-title">Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Villa Exterior">
                    <div class="gallery-overlay">
                        <span>Villa Exterior</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Pool View">
                    <div class="gallery-overlay">
                        <span>Pool View</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Interior Design">
                    <div class="gallery-overlay">
                        <span>Interior Design</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Dining Experience">
                    <div class="gallery-overlay">
                        <span>Dining Experience</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Spa Treatment">
                    <div class="gallery-overlay">
                        <span>Spa Treatment</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1528127269322-539801943592?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Nature Walks">
                    <div class="gallery-overlay">
                        <span>Nature Walks</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Sunset Views">
                    <div class="gallery-overlay">
                        <span>Sunset Views</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Cultural Excursions">
                    <div class="gallery-overlay">
                        <span>Cultural Excursions</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking CTA Section -->
    <section class="booking-cta" id="book">
        <div class="container">
            <h2>Ready for Your Eco-Luxury Escape?</h2>
            <p>Book your stay at Calao Bali and experience sustainable luxury amidst Bali's natural beauty. Our team is
                ready to create your perfect getaway.</p>
            <a href="#book" class="btn">Book Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Calao Bali</h3>
                    <p>Eco-luxury bamboo villas offering privacy, sustainability, and authentic Balinese experiences
                        with Moroccan-inspired culinary delights.</p>
                    <div class="social-links">
                        <a href="#"><span>FB</span></a>
                        <a href="#"><span>IG</span></a>
                        <a href="#"><span>TW</span></a>
                        <a href="#"><span>PT</span></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#concept">Our Concept</a></li>
                        <li><a href="#villas">The Villas</a></li>
                        <li><a href="#experiences">Experiences</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Jl. Raya Sidemen, Karangasem</li>
                        <li>Bali, Indonesia 80861</li>
                        <li>+62 361 234 5678</li>
                        <li>info@calaobali.com</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p>Subscribe to receive updates on special offers and experiences.</p>
                    <form>
                        <input type="email" placeholder="Your email"
                            style="width: 100%; padding: 10px; margin-bottom: 10px; border: none; border-radius: 2px;">
                        <button type="submit" class="btn" style="width: 100%;">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Calao Bali. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const nav = document.querySelector('nav');

        mobileMenuBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('nav a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
            });
        });
    </script>
</body>

</html>
