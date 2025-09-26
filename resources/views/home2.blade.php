<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Resort - Eco-Luxury Villas</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            color: #333333;
            overflow-x: hidden;
            background-color: #FFFFFF;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: #d8b29a;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            color: #333333;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #d8b29a;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 400;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
            letter-spacing: 1px;
        }

        .hero-subtitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .cta-button {
            background: #d8b29a;
            color: white;
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 2px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            opacity: 0;
            animation: fadeInUp 1s ease 1s forwards;
        }

        .cta-button:hover {
            background: #c19a7a;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(216, 178, 154, 0.4);
        }

        /* Key Features */
        .features {
            display: flex;
            justify-content: center;
            gap: 4rem;
            margin-top: 4rem;
            opacity: 0;
            animation: fadeInUp 1s ease 1.5s forwards;
        }

        .feature-icon {
            text-align: center;
            color: white;
        }

        .feature-icon i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #d8b29a;
        }

        .feature-icon p {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Sections */
        .section {
            padding: 5rem 0;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 400;
            text-align: center;
            margin-bottom: 4rem;
            color: #333333;
            letter-spacing: 0.5px;
        }

        .concept-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .concept-text {
            font-size: 1.1rem;
            line-height: 1.8;
            font-weight: 400;
        }

        .concept-text h3 {
            font-family: 'Playfair Display', serif;
            color: #d8b29a;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            font-weight: 500;
        }

        .concept-image {
            width: 100%;
            height: 400px;
            background: #F5F2EA;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d8b29a;
            font-size: 1.2rem;
            border: 1px solid rgba(216, 178, 154, 0.2);
        }

        /* Villa Grid */
        .villa-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .villa-card {
            background: white;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(216, 178, 154, 0.1);
        }

        .villa-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
        }

        .villa-image {
            width: 100%;
            height: 280px;
            background: #F5F2EA;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d8b29a;
            font-size: 1rem;
            font-weight: 500;
        }

        .villa-content {
            padding: 2rem;
        }

        .villa-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 1rem;
            color: #333333;
        }

        .villa-description {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .villa-features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 2rem;
        }

        .feature-tag {
            background: #F5F2EA;
            color: #333333;
            padding: 0.5rem 1rem;
            border-radius: 2px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(216, 178, 154, 0.2);
        }

        /* Experiences Grid */
        .experience-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .experience-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 4px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(216, 178, 154, 0.1);
        }

        .experience-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .experience-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 500;
            color: #333333;
            margin-bottom: 1rem;
        }

        .experience-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        /* Gallery */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
        }

        .gallery-item {
            height: 280px;
            background: #F5F2EA;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d8b29a;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(216, 178, 154, 0.2);
        }

        .gallery-item:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        /* Booking Section */
        .booking {
            background: #F5F2EA;
            color: #333333;
            text-align: center;
        }

        .booking .section-title {
            color: #333333;
        }

        .booking-form {
            max-width: 600px;
            margin: 0 auto;
            display: grid;
            gap: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-input {
            padding: 1.2rem;
            border: 1px solid rgba(216, 178, 154, 0.3);
            border-radius: 2px;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
            background: white;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #d8b29a;
        }

        /* Contact */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info {
            space-y: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #d8b29a;
        }

        .contact-item h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: #333333;
            margin-bottom: 0.5rem;
        }

        .map-placeholder {
            height: 350px;
            background: #F5F2EA;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d8b29a;
            border: 1px solid rgba(216, 178, 154, 0.2);
        }

        /* Footer */
        .footer {
            background: #333333;
            color: white;
            text-align: center;
            padding: 3rem 0;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .features {
                flex-direction: column;
                gap: 2rem;
            }

            .concept-grid {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">🦜 Calao Resort</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#concept">Our Concept</a></li>
                <li><a href="#villas">Villas</a></li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#booking">Book Now</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="{{asset('assets/video/videoplayback.webm')}}" type="video/mp4">
            <source src="{{asset('assets/video/videoplayback.webm')}}" type="video/webm">
            <!-- Fallback untuk browser yang tidak support video -->
            <div
                style="background: linear-gradient(45deg, #2C3E50, #3498DB); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; width: 100%; height: 100%;">
                Villa Video Background
            </div>
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Calao Resort</h1>
            <p class="hero-subtitle">Where Luxury Meets Nature in Perfect Harmony</p>
            <a href="#booking" class="cta-button">Reserve Your Paradise</a>

            <div class="features">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                    <p>Eco-Luxury</p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-mountain"></i>
                    <p>Private Villas</p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-spa"></i>
                    <p>Wellness</p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-utensils"></i>
                    <p>Fine Dining</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Concept -->
    <section id="concept" class="section">
        <h2 class="section-title">Our Concept</h2>
        <div class="concept-grid">
            <div class="concept-text">
                <h3 style="color: #D4AF37; margin-bottom: 1rem;">Inspired by the Majestic Calao Bird</h3>
                <p>Just as the Calao bird represents freedom, wisdom, and connection to nature, our resort embodies
                    these values in every aspect of your stay. Our eco-luxury villas are designed to blend seamlessly
                    with the natural environment while providing unparalleled comfort and privacy.</p>
                <br>
                <p>We believe in sustainable luxury that respects and celebrates the beauty of our natural surroundings.
                    Each villa is a sanctuary of tranquility, offering you an exclusive retreat where modern amenities
                    meet timeless elegance.</p>
                <br>
                <p><strong>Our commitment:</strong> Zero carbon footprint, locally sourced materials, and supporting
                    local communities while creating unforgettable experiences for our guests.</p>
            </div>
            <div class="concept-image">
                <div>
                    <i class="fas fa-kiwi-bird" style="font-size: 4rem; margin-bottom: 1rem; display: block;"></i>
                    <p>Calao Bird Inspiration</p>
                    <p style="font-size: 0.9rem;">Eco-Luxury • Sustainability • Privacy</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Villas -->
    <section id="villas" class="section" style="background: #F5F2EA;">
        <h2 class="section-title">Our Exclusive Villas</h2>
        <div class="villa-grid">
            <div class="villa-card">
                <div class="villa-image">Villa Serenity - Ocean View</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Serenity</h3>
                    <p class="villa-description">Perched on a cliff with breathtaking ocean views, this villa offers
                        complete privacy and tranquility in a minimalist setting.</p>
                    <div class="villa-features">
                        <span class="feature-tag">3 Bedrooms</span>
                        <span class="feature-tag">Private Pool</span>
                        <span class="feature-tag">Ocean View</span>
                        <span class="feature-tag">Butler Service</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.8rem; padding: 0.8rem 1.8rem;">Reserve
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Harmony - Garden Paradise</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Harmony</h3>
                    <p class="villa-description">Surrounded by lush tropical gardens, perfect for nature lovers seeking
                        peace and serenity.</p>
                    <div class="villa-features">
                        <span class="feature-tag">2 Bedrooms</span>
                        <span class="feature-tag">Garden View</span>
                        <span class="feature-tag">Outdoor Shower</span>
                        <span class="feature-tag">Yoga Deck</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.8rem; padding: 0.8rem 1.8rem;">Reserve
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Majesty - Hilltop Retreat</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Majesty</h3>
                    <p class="villa-description">Our premium hilltop villa with panoramic views and ultimate luxury
                        amenities in elegant, refined spaces.</p>
                    <div class="villa-features">
                        <span class="feature-tag">4 Bedrooms</span>
                        <span class="feature-tag">Panoramic View</span>
                        <span class="feature-tag">Private Chef</span>
                        <span class="feature-tag">Wine Cellar</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.8rem; padding: 0.8rem 1.8rem;">Reserve
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Zen - Meditation Haven</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Zen</h3>
                    <p class="villa-description">Designed for wellness and meditation, featuring minimalist luxury and
                        healing spaces crafted from natural materials.</p>
                    <div class="villa-features">
                        <span class="feature-tag">2 Bedrooms</span>
                        <span class="feature-tag">Meditation Room</span>
                        <span class="feature-tag">Spa Bath</span>
                        <span class="feature-tag">Silence Zone</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.8rem; padding: 0.8rem 1.8rem;">Reserve
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Adventure - Explorer's Base</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Adventure</h3>
                    <p class="villa-description">Perfect for active guests, with direct access to hiking trails and
                        adventure activities, designed with natural stone and wood.</p>
                    <div class="villa-features">
                        <span class="feature-tag">3 Bedrooms</span>
                        <span class="feature-tag">Trail Access</span>
                        <span class="feature-tag">Equipment Room</span>
                        <span class="feature-tag">Fire Pit</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.8rem; padding: 0.8rem 1.8rem;">Reserve
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Romance - Couples Retreat</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Romance</h3>
                    <p class="villa-description">An intimate setting designed for couples, with romantic amenities and
                        sunset views in warm, elegant interiors.</p>
                    <div class="villa-features">
                        <span class="feature-tag">1 Bedroom</span>
                        <span class="feature-tag">Sunset View</span>
                        <span class="feature-tag">Couples Spa</span>
                        <span class="feature-tag">Private Dining</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.8rem; padding: 0.8rem 1.8rem;">Reserve
                        Now</a>
                    <a href="#booking" class="cta-button" style="font-size: 0.9rem; padding: 0.8rem 1.5rem;">Book
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Adventure - Explorer's Base</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Adventure</h3>
                    <p class="villa-description">Perfect for active guests, with direct access to hiking trails and
                        adventure activities.</p>
                    <div class="villa-features">
                        <span class="feature-tag">3 Bedrooms</span>
                        <span class="feature-tag">Trail Access</span>
                        <span class="feature-tag">Equipment Room</span>
                        <span class="feature-tag">Fire Pit</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.9rem; padding: 0.8rem 1.5rem;">Book
                        Now</a>
                </div>
            </div>

            <div class="villa-card">
                <div class="villa-image">Villa Romance - Couples Retreat</div>
                <div class="villa-content">
                    <h3 class="villa-title">Villa Romance</h3>
                    <p class="villa-description">An intimate setting designed for couples, with romantic amenities and
                        sunset views.</p>
                    <div class="villa-features">
                        <span class="feature-tag">1 Bedroom</span>
                        <span class="feature-tag">Sunset View</span>
                        <span class="feature-tag">Couples Spa</span>
                        <span class="feature-tag">Private Dining</span>
                    </div>
                    <a href="#booking" class="cta-button" style="font-size: 0.9rem; padding: 0.8rem 1.5rem;">Book
                        Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiences -->
    <section id="experiences" class="section">
        <h2 class="section-title">Curated Experiences</h2>
        <div class="experience-grid">
            <div class="experience-card">
                <div class="experience-icon">🍽️</div>
                <h3>Private Moroccan Dining</h3>
                <p>Indulge in authentic Moroccan flavors prepared by our master chef in the privacy of your villa or our
                    exclusive dining pavilion.</p>
            </div>
            <div class="experience-card">
                <div class="experience-icon">🧘</div>
                <h3>Wellness & Yoga</h3>
                <p>Daily yoga sessions, meditation workshops, and spa treatments designed to rejuvenate your mind, body,
                    and soul.</p>
            </div>
            <div class="experience-card">
                <div class="experience-icon">🥾</div>
                <h3>Nature Walks</h3>
                <p>Guided explorations through pristine landscapes, discovering local flora, fauna, and hidden natural
                    treasures.</p>
            </div>
            <div class="experience-card">
                <div class="experience-icon">🏛️</div>
                <h3>Cultural Excursions</h3>
                <p>Immerse yourself in local culture with visits to traditional villages, artisan workshops, and
                    historical sites.</p>
            </div>
            <div class="experience-card">
                <div class="experience-icon">🎨</div>
                <h3>Art & Craft Workshops</h3>
                <p>Learn traditional crafts from local artisans, creating unique souvenirs and memories of your stay.
                </p>
            </div>
            <div class="experience-card">
                <div class="experience-icon">⭐</div>
                <h3>Stargazing Nights</h3>
                <p>Professional astronomy sessions under pristine dark skies, away from city lights and distractions.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="section" style="background: #F8F9FA;">
        <h2 class="section-title">Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">Villa Interiors</div>
            <div class="gallery-item">Ocean Views</div>
            <div class="gallery-item">Dining Experiences</div>
            <div class="gallery-item">Spa & Wellness</div>
            <div class="gallery-item">Nature & Gardens</div>
            <div class="gallery-item">Cultural Activities</div>
            <div class="gallery-item">Sunset Moments</div>
            <div class="gallery-item">Adventure Activities</div>
        </div>
    </section>

    <!-- Booking -->
    <section id="booking" class="section booking">
        <h2 class="section-title" style="color: white;">Reserve Your Paradise</h2>
        <div class="booking-form">
            <div class="form-row">
                <input type="date" class="form-input" placeholder="Check-in Date">
                <input type="date" class="form-input" placeholder="Check-out Date">
            </div>
            <div class="form-row">
                <select class="form-input">
                    <option>Select Villa</option>
                    <option>Villa Serenity</option>
                    <option>Villa Harmony</option>
                    <option>Villa Majesty</option>
                    <option>Villa Zen</option>
                    <option>Villa Adventure</option>
                    <option>Villa Romance</option>
                </select>
                <input type="number" class="form-input" placeholder="Number of Guests" min="1" max="8">
            </div>
            <div class="form-row">
                <input type="text" class="form-input" placeholder="Full Name">
                <input type="email" class="form-input" placeholder="Email Address">
            </div>
            <textarea class="form-input" placeholder="Special Requests" rows="4"></textarea>
            <button class="cta-button" style="margin-top: 1rem;">Check Availability & Pricing</button>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>Paradise Valley, Hidden Cove<br>Tropical Island Resort</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone contact-icon"></i>
                    <div>
                        <h4>Phone</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fab fa-whatsapp contact-icon"></i>
                    <div>
                        <h4>WhatsApp</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope contact-icon"></i>
                    <div>
                        <h4>Email</h4>
                        <p>reservations@calaoresort.com</p>
                    </div>
                </div>
            </div>
            <div class="map-placeholder">
                <div>
                    <i class="fas fa-map"
                        style="font-size: 3rem; color: #D4AF37; margin-bottom: 1rem; display: block;"></i>
                    <p>Interactive Google Map</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Calao Resort. All rights reserved. | Eco-Luxury Redefined</p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                navbar.style.background = 'rgba(0, 0, 0, 0.9)';
            }
        });

        // Simple booking form validation
        document.querySelector('.booking-form button').addEventListener('click', function (e) {
            e.preventDefault();
            alert('Thank you for your interest! Our booking system will redirect you to secure payment processing. A reservation specialist will contact you within 24 hours to confirm your booking details.');
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe sections for scroll animations
        document.querySelectorAll('.section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.8s ease';
            observer.observe(section);
        });
    </script>
</body>

</html>