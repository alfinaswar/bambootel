gsap.registerPlugin(ScrollTrigger);


gsap.utils.toArray(".about-fade").forEach((el) => {
  gsap.from(el, {
    y: 50,          // Slide sedikit dari bawah
    opacity: 0,     // Mulai transparan
    duration: 1,    // Durasi fade
    ease: "power2.out",
    scrollTrigger: {
      trigger: el,
      start: "top 80%", // Mulai fade saat elemen muncul
      toggleActions: "play none none none"
    }
  });
});
// Parallax effect gambar
gsap.from(".about-img", {
  y: 50,
  opacity: 0,
  scale: 0.95,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".about-img-wrapper",
    start: "top 80%",
    toggleActions: "play none none none"
  }
});

// 2. Hover / cursor animation
const img = document.querySelector(".about-img");

img.addEventListener("mousemove", (e) => {
  const rect = img.getBoundingClientRect();
  const x = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 ~ 0.5
  const y = (e.clientY - rect.top) / rect.height - 0.5;
  
  gsap.to(img, {
    rotationY: x * 10,   // tilt horizontal
    rotationX: -y * 10,  // tilt vertical
    scale: 1.05,
    transformPerspective: 500,
    ease: "power2.out",
    duration: 0.3
  });
});

img.addEventListener("mouseleave", () => {
  gsap.to(img, { rotationY: 0, rotationX: 0, scale: 1, duration: 0.5, ease: "power2.out" });
});

// Foto kiri
gsap.to(".experience-left", {
  x: -500,        
  rotate: -5,
  ease: "power2.out",
  scrollTrigger: {
    trigger: "#experiences",
    start: "top center",   // mulai pas section masuk ke tengah viewport
    end: "bottom center",  // baru selesai pas section keluar setengah
    scrub: 1,              // halus ngikutin scroll
  }
});

// Foto kanan
gsap.to(".experience-right", {
  x: 500,         
  rotate: 5,
  ease: "power2.out",
  scrollTrigger: {
    trigger: "#experiences",
    start: "top center",
    end: "bottom center",
    scrub: 1,
  }
});

// Teks tengah ikut scroll (muncul -> ilang)
// Teks tengah
gsap.fromTo(".experience-text",
  { opacity: 0, y: 40 },   // awalnya turun & transparan
  { 
    opacity: 1,
    y: 0,
    ease: "power2.out",
    scrollTrigger: {
      trigger: "#experiences",
      start: "top 60%",     // teks muncul pas foto mulai misah
      end: "bottom 60%",    // teks ilang pas foto mau nutup lagi
      scrub: true,          // biar smooth ikut scroll
    }
  }
);

// Animasi akar numbuh
gsap.from("#rootPath path", {
  strokeDasharray: 1000,  // panjang garis
  strokeDashoffset: 1000, // sembunyiin
  scrollTrigger: {
    trigger: "#section1", // mulai dari section tertentu
    start: "top center",
    end: "#section4 bottom", // sepanjang beberapa section
    scrub: true,
  },
  strokeDashoffset: 0,    // garis keungkap
  ease: "none"
});



gsap.from(".gallery-img", {
  opacity: 0,
  y: 50, // muncul dari bawah
  scale: 0.9, // sedikit lebih kecil lalu membesar
  duration: 1.2,
  ease: "power3.out",
  stagger: {
    amount: 1, // total durasi spread animasi
    from: "center" // mulai dari tengah grid, lalu keluar
  },
  scrollTrigger: {
    trigger: "#gallery",
    start: "top 80%", // mulai animasi saat section 80% masuk layar
    toggleActions: "play none none reverse" // balik pas discroll ke atas
  }
});


gsap.registerPlugin(ScrollTrigger);

gsap.to("#scrollLineSvg path", {
  strokeDashoffset: 0,  // garis akan tergambar penuh
  scrollTrigger: {
    trigger: "#scrollLineSvg",
    start: "top bottom",   // mulai ketika top SVG muncul di viewport
    end: "bottom top",     // selesai saat bottom SVG melewati top viewport
    scrub: true,           // animasi mengikuti scroll
    // markers: true       // aktifkan untuk debugging posisi start/end
  }
});

gsap.registerPlugin(ScrollTrigger);

gsap.to("#experiences h2 span", {
  scaleX: 1,
  transformOrigin: "left center",
  duration: 2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: "#experiences",  // trigger section, bukan h2
    start: "top 70%",         // mulai saat section masuk viewport 70%
    toggleActions: "play none none none"
  }
});
;







