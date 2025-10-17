// --- 1. Setup Lenis (super smooth + storytelling flow) ---
const lenis = new Lenis({
  duration: 1.6, // lebih lambat dari sebelumnya (1.2 → 1.6)
  easing: t => 1 - Math.pow(1 - t, 3), // easing lebih halus, kayak slow-in slow-out
  smooth: true,
  smoothTouch: true,
  direction: 'vertical',
  gestureDirection: 'vertical',
  touchMultiplier: 1.2, // sedikit dikurangi biar lembut di HP
  lerp: 0.06 // semakin kecil, semakin halus pergerakannya
});

// Sinkronisasi Lenis + ScrollTrigger (biar nggak flicker)
function raf(time) {
  lenis.raf(time);
  ScrollTrigger.update();
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// --- 2. Register GSAP ScrollTrigger ---
gsap.registerPlugin(ScrollTrigger);

// --- 3. Animate sections (fade-in smooth & cinematic) ---
function animateOnScroll(selector, options = {}) {
  const elems = document.querySelectorAll(selector);
  elems.forEach(el => {
    el.style.opacity = 0;
    el.style.transform = "translateY(30px)";

    ScrollTrigger.create({
      trigger: el,
      start: options.start || "top 85%",
      onEnter: () => {
        gsap.to(el, {
          opacity: 1,
          y: 0,
          duration: 1.4, // agak lebih lambat
          ease: "power2.out"
        });
      },
      onLeaveBack: () => {
        gsap.to(el, {
          opacity: 0,
          y: 30,
          duration: 0.8,
          ease: "power1.in"
        });
      }
    });
  });
}

// Terapkan animasi
animateOnScroll(".section.experiences .inner");
animateOnScroll("#gallery > div");
animateOnScroll("#stay > div");
animateOnScroll("#contact > div");

// --- 4. Smooth scroll anchor links (pakai Lenis) ---
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", e => {
    e.preventDefault();
    const target = document.querySelector(anchor.getAttribute("href"));
    if (target) lenis.scrollTo(target, { offset: 0, duration: 1.6, easing: (t) => 1 - Math.pow(1 - t, 3) });
  });
});

// --- 5. Parallax untuk hero (cinematic depth) ---
const heroVideo = document.querySelector("#hero video");
const heroText = document.querySelector("#hero > .relative");

if (heroVideo && heroText) {
  gsap.to(heroVideo, {
    yPercent: 25,
    ease: "none",
    scrollTrigger: {
      trigger: "#hero",
      start: "top top",
      end: "bottom top",
      scrub: 1.5, // lebih lembut
    },
  });

  gsap.to(heroText, {
    yPercent: -15,
    ease: "none",
    scrollTrigger: {
      trigger: "#hero",
      start: "top top",
      end: "bottom top",
      scrub: 1.5,
    },
  });
}

gsap.registerPlugin(ScrollTrigger);

// 1️⃣ Fade in saat page load
gsap.from(".fade-section", {
  opacity: 0,
  duration: 1.2,
  ease: "power2.out"
});








