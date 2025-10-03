<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calao Bali - Where Dreams Kiss the Sky</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/demo9/bundle.css')}}">
</head>

<body>

    <header id="main-header">
        <nav class="container">
            <a href="#" class="logo">
                <img src="https://placehold.co/120x50/ffffff/ffffff?text=." alt="Calao Bali Logo White"
                    class="logo-white">
                <img src="https://placehold.co/120x50/d8b29a/d8b29a?text=." alt="Calao Bali Logo Terracotta"
                    class="logo-terracotta">
            </a>
            <ul class="nav-links">
                <li><a href="#hero">Home</a></li>
                <li class="dropdown">
                    <a href="#villas">Villas</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">The Nest</a></li>
                        <li><a href="#">The Hatch</a></li>
                        <li><a href="#">The Feather</a></li>
                        <li><a href="#">The Wing</a></li>
                        <li><a href="#">The Bond</a></li>
                        <li><a href="#">The Heritage</a></li>
                    </ul>
                </li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#" class="btn btn-book-now">BOOK NOW</a>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero">
            <video autoplay muted loop playsinline id="hero-video">
                <source
                    src="https://assets.mixkit.co/videos/preview/mixkit-beautiful-shot-of-a-rice-field-in-bali-4318-large.mp4"
                    type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1>DARE TO FLY</h1>
                <p>Where Dreams Kiss the Sky</p>
                <a href="#" class="btn btn-hero">BOOK YOUR STAY</a>
            </div>
        </section>

        <section id="intro" class="text-center-section fade-in-section">
            <div class="container">
                <h2>An Escape Woven from Nature and Dreams</h2>
                <p>Calao Bali is more than a destination; it's a sanctuary carved into the heart of Bali's breathtaking
                    landscape. Here, luxury coexists with nature, offering an unparalleled retreat where every moment is
                    a cherished memory.</p>
            </div>
        </section>

        <section id="villas" class="fade-in-section">
            <div class="container">
                <h2 class="section-title">Our Private Sanctuaries</h2>
                <div class="carousel-wrapper">
                    <button id="prev-btn" class="carousel-btn prev" aria-label="Previous Villa">&lt;</button>
                    <div class="villa-slider-container">
                        <div class="villa-slider">
                            <div class="villa-card">
                                <img src="https://placehold.co/600x400/d8b29a/fff?text=The+Nest" alt="The Nest Villa">
                                <div class="villa-info">
                                    <h3>The Nest</h3>
                                    <p>2 Bedrooms</p>
                                    <a href="#" class="btn btn-secondary">Explore Villa</a>
                                </div>
                            </div>
                            <div class="villa-card">
                                <img src="https://placehold.co/600x400/a39185/fff?text=The+Hatch" alt="The Hatch Villa">
                                <div class="villa-info">
                                    <h3>The Hatch</h3>
                                    <p>2 Bedrooms</p>
                                    <a href="#" class="btn btn-secondary">Explore Villa</a>
                                </div>
                            </div>
                            <div class="villa-card">
                                <img src="https://placehold.co/600x400/c7b3a5/fff?text=The+Feather"
                                    alt="The Feather Villa">
                                <div class="villa-info">
                                    <h3>The Feather</h3>
                                    <p>1 Bedroom</p>
                                    <a href="#" class="btn btn-secondary">Explore Villa</a>
                                </div>
                            </div>
                            <div class="villa-card">
                                <img src="https://placehold.co/600x400/bda99a/fff?text=The+Wing" alt="The Wing Villa">
                                <div class="villa-info">
                                    <h3>The Wing</h3>
                                    <p>1 Bedroom</p>
                                    <a href="#" class="btn btn-secondary">Explore Villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="next-btn" class="carousel-btn next" aria-label="Next Villa">&gt;</button>
                </div>
            </div>
        </section>

        <section id="experiences" class="fade-in-section">
            <div class="container">
                <h2 class="section-title">Curated Experiences</h2>
                <div class="experience-grid">
                    <div class="experience-item">
                        <img src="https://placehold.co/500x350/ccc/333?text=Yoga+Retreat" alt="Yoga Retreat">
                        <h3>Morning Yoga</h3>
                        <p>Greet the sun with a rejuvenating yoga session overlooking the rice paddies.</p>
                        <a href="#" class="discover-link">Discover More</a>
                    </div>
                    <div class="experience-item">
                        <img src="https://placehold.co/500x350/bbb/333?text=Cooking+Class" alt="Balinese Cooking Class">
                        <h3>Culinary Journey</h3>
                        <p>Learn the secrets of Balinese cuisine with our private chefs.</p>
                        <a href="#" class="discover-link">Discover More</a>
                    </div>
                    <div class="experience-item">
                        <img src="https://placehold.co/500x350/aaa/333?text=Spa+Treatment" alt="Spa Treatment">
                        <h3>Spa & Wellness</h3>
                        <p>Indulge in traditional treatments designed to soothe your body and soul.</p>
                        <a href="#" class="discover-link">Discover More</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery" class="fade-in-section">
            <div class="container">
                <h2 class="section-title">Moments at Calao</h2>
                <div class="photo-grid">
                    <div class="photo-item"><img src="https://placehold.co/400x400/d8b29a/fff?text=View"
                            alt="Gallery Image 1"></div>
                    <div class="photo-item grid-span-row-2"><img src="https://placehold.co/400x600/a39185/fff?text=Pool"
                            alt="Gallery Image 2"></div>
                    <div class="photo-item"><img src="https://placehold.co/400x300/c7b3a5/fff?text=Interior"
                            alt="Gallery Image 3"></div>
                    <div class="photo-item"><img src="https://placehold.co/400x300/bda99a/fff?text=Food"
                            alt="Gallery Image 4"></div>
                    <div class="photo-item"><img src="https://placehold.co/400x400/a39185/fff?text=Nature"
                            alt="Gallery Image 5"></div>
                    <div class="photo-item"><img src="https://placehold.co/400x300/d8b29a/fff?text=Detail"
                            alt="Gallery Image 6"></div>
                </div>
            </div>
        </section>

        <section id="about" class="fade-in-section">
        </section>
        <section id="contact" class="fade-in-section">
        </section>
    </main>



</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // ======================= 1. HEADER & MOBILE MENU =======================
        const header = document.getElementById('main-header');
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        // Sticky Header on Scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }

        // Close mobile menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                }
            });
        });


        // ======================= 2. FADE-IN ANIMATION ON SCROLL =======================
        const sectionsToAnimate = document.querySelectorAll('.fade-in-section');

        const observerOptions = {
            root: null, // observes intersections relative to the viewport
            rootMargin: '0px',
            threshold: 0.1 // trigger when 10% of the element is visible
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Stop observing once it's visible
                }
            });
        }, observerOptions);

        sectionsToAnimate.forEach(section => {
            observer.observe(section);
        });


        // ======================= 3. VILLA CAROUSEL LOGIC =======================
        const sliderContainer = document.querySelector('.villa-slider-container');
        const slider = document.querySelector('.villa-slider');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        if (slider) {
            const villaCards = document.querySelectorAll('.villa-card');
            if (villaCards.length === 0) return;

            let cardWidth = villaCards[0].offsetWidth;
            let gap = 30; // Sesuai dengan gap di CSS

            const updateButtons = () => {
                // Disable prev button if at the start
                prevBtn.disabled = slider.scrollLeft === 0;
                // Disable next button if at the end
                nextBtn.disabled = slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1; // -1 for precision
            };

            nextBtn.addEventListener('click', () => {
                slider.scrollLeft += cardWidth + gap;
                setTimeout(updateButtons, 400); // Update after scroll animation
            });

            prevBtn.addEventListener('click', () => {
                slider.scrollLeft -= cardWidth + gap;
                setTimeout(updateButtons, 400);
            });

            // Update buttons on initial load
            updateButtons();
        }
    });
</script>