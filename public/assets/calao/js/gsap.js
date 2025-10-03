// --- 1. Setup Lenis (sudah ada) ---
const lenis = new Lenis({
  duration: 0.8,
  smooth: true,
  smoothTouch: false,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// --- 2. Register GSAP ScrollTrigger (sudah ada) ---
gsap.registerPlugin(ScrollTrigger);

// --- 3. Animate sections on scroll (sudah ada) ---
function animateOnScroll(selector, options = {}) {
  const elems = document.querySelectorAll(selector);
  elems.forEach(el => {
    el.classList.add("opacity-0", "translate-y-10"); // state awal

    ScrollTrigger.create({
      trigger: el,
      start: options.start || "top 80%",
      onEnter: () => {
        el.classList.remove("opacity-0", "translate-y-10");
        el.classList.add("opacity-100", "translate-y-0", "transition-all", "duration-700", "ease-out");
      },
      onLeaveBack: () => {
        el.classList.remove("opacity-100", "translate-y-0");
        el.classList.add("opacity-0", "translate-y-10");
      }
    });
  });
}

// Apply animasi
animateOnScroll(".section.experiences .inner");
animateOnScroll("#gallery > div");
animateOnScroll("#stay > div");
animateOnScroll("#contact > div");

// --- 4. Smooth scroll untuk link menu (sudah ada) ---
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", e => {
    e.preventDefault();
    const target = document.querySelector(anchor.getAttribute("href"));
    if (target) {
      lenis.scrollTo(target, { offset: 0, duration: 1 });
    }
  });
});

// --- 5. Parallax untuk hero ---
const heroVideo = document.querySelector("#hero video");
const heroText = document.querySelector("#hero > .relative");

gsap.to(heroVideo, {
  yPercent: 20, // video bergerak lebih lambat
  ease: "none",
  scrollTrigger: {
    trigger: "#hero",
    start: "top top",
    end: "bottom top",
    scrub: true
  }
});

gsap.to(heroText, {
  yPercent: -10, // teks bergerak lebih cepat, kesan depth
  ease: "none",
  scrollTrigger: {
    trigger: "#hero",
    start: "top top",
    end: "bottom top",
    scrub: true
  }
});
