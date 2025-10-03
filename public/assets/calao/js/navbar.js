const navbar = document.getElementById('navbar');
const logo = document.getElementById('navbar-logo');
const menuItems = document.querySelectorAll('#navbar-menu li a');
const bookBtn = document.getElementById('book-btn');
const mobileMenu = document.getElementById('mobile-menu');

let logoDefault = 'assets/img/Logo/Logo-putih.png';
let logoScrolled = 'assets/img/logo/logo-terra.png';

window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  const isMobile = window.innerWidth < 768;

  const logoScaleDefault = 1;
  const logoScaleScrolled = isMobile ? 0.7 : 0.8;
  const logoYOffset = isMobile ? -30 : -25;

  const navBackground = scrollY > 20 ? '#ffffff' : 'transparent';
  const navShadow = scrollY > 20 ? '0 2px 10px rgba(0,0,0,0.1)' : 'none';
  const menuTextColor = scrollY > 20 ? '#d8b29a' : '#ffffff';

  // Navbar transform
  gsap.to(navbar, { backgroundColor: navBackground, boxShadow: navShadow, duration: 0.3, ease: "power2.out" });

  // Logo transform + crossfade
  if (scrollY > 20) {
    gsap.to(logo, { scale: logoScaleScrolled, y: logoYOffset, duration: 0.3, ease: "power2.out" });
    if (!logo.src.includes('logo-terra.png')) {
      gsap.to(logo, { opacity: 0, duration: 0.15, onComplete: () => {
        logo.src = logoScrolled;
        gsap.to(logo, { opacity: 1, duration: 0.15 });
      }});
    }
  } else {
    gsap.to(logo, { scale: logoScaleDefault, y: 0, duration: 0.3, ease: "power2.out" });
    if (!logo.src.includes('Logo-putih.png')) {
      gsap.to(logo, { opacity: 0, duration: 0.15, onComplete: () => {
        logo.src = logoDefault;
        gsap.to(logo, { opacity: 1, duration: 0.15 });
      }});
    }
  }

  // Menu & Book Now desktop
  menuItems.forEach(item => gsap.to(item, { color: menuTextColor, duration: 0.3 }));
  gsap.to(bookBtn, { backgroundColor: scrollY > 20 ? '#d8b29a' : 'transparent', color: scrollY > 20 ? '#ffffff' : '#ffffff', border: scrollY > 20 ? 'none' : '2px solid #ffffff', duration: 0.3 });

  // Mobile menu styling (ikut navbar)
  if (isMobile) {
    gsap.to(mobileMenu, { backgroundColor: scrollY > 20 ? '#ffffff' : '#ffffff', boxShadow: scrollY > 20 ? '0 2px 10px rgba(0,0,0,0.1)' : '0 2px 10px rgba(0,0,0,0.1)', duration: 0.3 });
    // opsional: ubah teks mobile menu warna
    const mobileLinks = mobileMenu.querySelectorAll('a, summary');
    mobileLinks.forEach(link => gsap.to(link, { color: scrollY > 20 ? '#d8b29a' : '#333333', duration: 0.3 }));
  }
});

// Burger toggle
const burger = document.getElementById('burger');
burger.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});
