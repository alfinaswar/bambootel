gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".gallery-item").forEach((item, i) => {
  gsap.to(item, {
    opacity: 1,
    scale: 1,
    duration: 0.8,
    delay: i * 0.2,
    ease: "power2.out",
    scrollTrigger: {
      trigger: item,
      start: "top 85%",
    },
  });
});

const galleryItems = document.querySelectorAll(".gallery-item img");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const lightboxClose = document.getElementById("lightbox-close");

galleryItems.forEach((img) => {
  img.addEventListener("click", () => {
    lightboxImg.src = img.src;
    lightbox.classList.remove("hidden");
    // optional animation
    gsap.fromTo(
      lightboxImg,
      { scale: 0.8, opacity: 0 },
      { scale: 1, opacity: 1, duration: 0.5, ease: "power2.out" }
    );
  });
});

lightboxClose.addEventListener("click", () => {
  gsap.to(lightboxImg, {
    scale: 0.8,
    opacity: 0,
    duration: 0.3,
    ease: "power2.in",
    onComplete: () => {
      lightbox.classList.add("hidden");
    },
  });
});

// Klik di luar gambar untuk menutup
lightbox.addEventListener("click", (e) => {
  if (e.target === lightbox) {
    gsap.to(lightboxImg, {
      scale: 0.8,
      opacity: 0,
      duration: 0.3,
      ease: "power2.in",
      onComplete: () => {
        lightbox.classList.add("hidden");
      },
    });
  }
});

const galleryWrappers = document.querySelectorAll(".gallery-item");

galleryWrappers.forEach((wrapper) => {
  const img = wrapper.querySelector("img");

  wrapper.addEventListener("mousemove", (e) => {
    const rect = wrapper.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width - 0.5) * 20; // rotasi ±10 deg
    const y = -((e.clientY - rect.top) / rect.height - 0.5) * 20;

    gsap.to(img, {
      rotationY: x,
      rotationX: y,
      z: 20, // angkat sedikit
      scale: 1.05, // zoom ringan
      duration: 0.3,
      ease: "power2.out",
      transformPerspective: 600,
    });
  });

  wrapper.addEventListener("mouseleave", () => {
    gsap.to(img, {
      rotationX: 0,
      rotationY: 0,
      z: 0,
      scale: 1,
      duration: 0.5,
      ease: "power2.out",
    });
  });
});

// ==== ANIMASI GALLERY TITLE & PARAGRAPH ====

// Pisahkan per kata biar animasi smooth tanpa pecah huruf
function splitGalleryText(selector) {
  const el = document.querySelector(selector);
  if (!el) return;
  const textEl = el.querySelector(".gallery-title-text");
  const text = textEl.textContent.trim();

  // Bagi teks per kata
  const split = text
    .split(" ")
    .map(word => `<span class="word"><span class="char">${word}</span>&nbsp;</span>`)
    .join("");

  textEl.innerHTML = split;
}

splitGalleryText(".gallery-title");

// Animasi untuk judul gallery
gsap.fromTo(
  ".gallery-title .word .char",
  { opacity: 0, y: 25, filter: "blur(6px)" },
  {
    opacity: 1,
    y: 0,
    filter: "blur(0px)",
    duration: 0.4,
    ease: "power3.out",
    stagger: 0.05,
    scrollTrigger: {
      trigger: ".gallery-title",
      start: "top 85%",
      toggleActions: "play none none reverse",
      id: "galleryTitleTrigger",
    },
  }
);

// Animasi paragrafnya muncul setelah judul selesai
gsap.fromTo(
  ".gallery-paragraph",
  { opacity: 0, y: 20 },
  {
    opacity: 1,
    y: 0,
    duration: 0.6,
    delay: 0.3,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".gallery-title",
      start: "top 80%",
      toggleActions: "play none none reverse",
      id: "galleryParagraphTrigger",
    },
  }
);

