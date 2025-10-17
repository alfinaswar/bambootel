gsap.registerPlugin(ScrollTrigger);



// Foto kiri — buka jauh ke kiri
gsap.fromTo(".experience-left",
  { x: "0%", rotate: 0, scale: 1 },
  {
    x: "-500px",      // buka lebih jauh
    rotate: -10,      // miring dikit biar natural
    scale: 0.95,      // sedikit mengecil biar terasa menjauh
    ease: "power3.out",
    scrollTrigger: {
      trigger: "#experiences-cut",
      start: "top 75%",   // mulai agak lambat
      end: "bottom 10%",  // selesai pas ketemu section lain
      scrub: 1.2,         // biar lebih smooth
    }
  }
);

// Foto kanan — buka jauh ke kanan
gsap.fromTo(".experience-right",
  { x: "0%", rotate: 0, scale: 1 },
  {
    x: "500px",
    rotate: 10,
    scale: 0.95,
    ease: "power3.out",
    scrollTrigger: {
      trigger: "#experiences-cut",
      start: "top 75%",
      end: "bottom 10%",
      scrub: 1.2,
    }
  }
);


// Teks fade-in halus
gsap.fromTo(".experience-text",
  { opacity: 0, y: 30 },
  {
    opacity: 1,
    y: 0,
    ease: "power3.out",
    duration: 1.2,
    scrollTrigger: {
      trigger: ".experience-text",
      start: "top 85%",
      toggleActions: "play none none reverse",
    }
  }
);



gsap.fromTo("#experiences .left",
  { x: "-35%" },  // agak kebuka dikit
  { 
    x: "-120%",   // keluar lebih jauh biar "kenceng"
    ease: "power2.out",
    scrollTrigger: {
      trigger: "#experiences",
      start: "top 85%",   // mulai agak telat
      end: "bottom 40%",  // selesai lebih cepat → gerakan terasa lebih "cepat / kenceng"
      scrub: true,
    }
  }
);

// Panel kanan
gsap.fromTo("#experiences .right",
  { x: "35%" },
  { 
    x: "120%",
    ease: "power2.out",
    scrollTrigger: {
      trigger: "#experiences",
      start: "top 85%",
      end: "bottom 40%",
      scrub: true,
    }
  }
);





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







