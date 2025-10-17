// Ambil elemen <p>
const introText = document.querySelector("#introduction p");

// Split teks menjadi huruf
const letters = introText.textContent.split("");
introText.textContent = "";
letters.forEach(letter => {
  const span = document.createElement("span");
  span.textContent = letter;
  span.style.opacity = 0.2; // awal samar
  span.style.display = "inline";
  introText.appendChild(span);
});

// Animasi fade in per huruf
gsap.to("#introduction p span", {
  opacity: 1,
  stagger: 0.01, // lebih cepat, efek ketik
  ease: "power1.out",
  scrollTrigger: {
    trigger: "#introduction p",
    start: "top 80%",
    end: "bottom top",
    scrub: true
  }
});


// === Animasi Treasures of Discovery ===

// Bagi teks jadi per kata (biar animasi halus tapi gak kepisah huruf)
function splitRevealText(selector) {
  const el = document.querySelector(selector);
  if (!el) return;

  const textEl = el.querySelector(".title-text");
  const text = textEl.textContent.trim();

  const split = text
    .split(" ")
    .map(word => `<span class="word"><span class="char">${word}</span>&nbsp;</span>`)
    .join("");

  textEl.innerHTML = split;
}

splitRevealText(".reveal-title");

// Animasi teks utama
gsap.fromTo(
  ".reveal-title .word .char",
  { opacity: 0, y: 25, filter: "blur(6px)" },
  {
    opacity: 1,
    y: 0,
    filter: "blur(0px)",
    duration: 0.4,
    ease: "power3.out",
    stagger: 0.05,
    scrollTrigger: {
      trigger: ".reveal-title",
      start: "top 85%",
      toggleActions: "play none none reverse",
      id: "revealTitleTrigger",
    },
  }
);

// Animasi underline-nya
gsap.to(".reveal-title .underline", {
  scaleX: 1,
  duration: 0.6,
  ease: "power2.out",
  delay: 0.3,
  scrollTrigger: {
    trigger: ".reveal-title",
    start: "top 85%",
    toggleActions: "play none none reverse",
    id: "underlineRevealTrigger",
  },
});


gsap.registerPlugin(ScrollTrigger);

// Fungsi split per kata (bukan huruf)
function splitExperienceText(selector) {
  const el = document.querySelector(selector);
  if (!el) return;
  const textEl = el.querySelector(".experience-quote-text");
  const text = textEl.textContent.trim();

  // Bagi teks per kata, lalu bungkus tiap kata dengan <span>
  const split = text
    .split(" ")
    .map(word => `<span class="word"><span class="char">${word}</span>&nbsp;</span>`)
    .join("");

  textEl.innerHTML = split;
}

splitExperienceText(".experience-quote");

// Animasi tiap kata biar gak ada pecah baris aneh
gsap.utils.toArray(".experience-quote").forEach(el => {
  gsap.fromTo(
    el.querySelectorAll(".word .char"),
    { opacity: 0, y: 20, filter: "blur(6px)" },
    {
      opacity: 1,
      y: 0,
      filter: "blur(0px)",
      ease: "power3.out",
      duration: 0.4,
      stagger: 0.05,
      scrollTrigger: {
        trigger: el,
        start: "top 85%",
        toggleActions: "play none none reverse",
        id: "experienceQuoteTrigger",
      },
    }
  );
});

// Garis bawah animasi cepat juga
gsap.to("#experience-title .underline-line", {
  scrollTrigger: {
    trigger: "#experience-title",
    start: "top 85%",
    toggleActions: "play none none reverse",
  },
  scaleX: 1,
  ease: "power2.out",
  duration: 0.5,
  delay: 0.2,
});

// === Animasi The Essence of Bali ===
function splitEssenceText(selector) {
  const el = document.querySelector(selector);
  if (!el) return;

  const textEl = el.querySelector(".essence-text");
  const text = textEl.textContent.trim();

  const split = text
    .split(" ")
    .map(word => `<span class="word"><span class="char">${word}</span>&nbsp;</span>`)
    .join("");

  textEl.innerHTML = split;
}

splitEssenceText(".essence-title");

// Animasi munculnya teks
gsap.fromTo(
  ".essence-title .word .char",
  { opacity: 0, y: 25, filter: "blur(6px)" },
  {
    opacity: 1,
    y: 0,
    filter: "blur(0px)",
    duration: 0.35,
    ease: "power3.out",
    stagger: 0.04,
    scrollTrigger: {
      trigger: ".essence-title",
      start: "top 85%",
      toggleActions: "play none none reverse",
      id: "essenceTitleTrigger",
    },
  }
);


gsap.registerPlugin(ScrollTrigger);

// Animasi teks satu per satu (stack dari bawah)
gsap.fromTo(
  ".about-line",
  { opacity: 0, y: 60, filter: "blur(10px)" },
  {
    opacity: 1,
    y: 0,
    filter: "blur(0px)",
    duration: 1,
    stagger: 0.25, // muncul satu-satu
    ease: "power3.out",
    scrollTrigger: {
      trigger: "#about",
      start: "top 80%",
      toggleActions: "play none none reverse",
    },
  }
);

// Parallax halus untuk gambar (bergerak pelan pas scroll)
gsap.to(".about-img-wrapper", {
  yPercent: -10, // geser dikit pas scroll
  ease: "none",
  scrollTrigger: {
    trigger: "#about",
    start: "top bottom",
    end: "bottom top",
    scrub: true, // biar smooth ikut scroll
  },
});





