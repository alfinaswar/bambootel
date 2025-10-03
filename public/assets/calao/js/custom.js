document.addEventListener("DOMContentLoaded", () => {
  // === Elemen Navbar Utama ===
  const navbar = document.getElementById("navbar");
  const logo = document.getElementById("navbar-logo");
  const logoPutih = "assets/img/Logo/Logo-putih.png";
  const logoTerakota = "assets/img/Logo/Logo-terakota.png";

  // === Elemen untuk Mobile Menu ===
  const burger = document.getElementById("burger");
  const mobileMenu = document.getElementById("mobile-menu");
  const body = document.body;

  // === Logika untuk MEMBUKA & MENUTUP Menu ===
  // Kita hanya perlu toggle satu kelas pada body
  burger.addEventListener("click", () => {
    body.classList.toggle("menu-open");

    // Mencegah body di-scroll saat menu terbuka
    if (body.classList.contains("menu-open")) {
      body.style.overflow = "hidden";
    } else {
      body.style.overflow = "";
    }
  });

  // Menutup menu saat salah satu link di dalamnya di-klik
  document.querySelectorAll("#mobile-menu a").forEach((link) => {
    link.addEventListener("click", () => {
      body.classList.remove("menu-open");
      body.style.overflow = "";
    });
  });

  // === Logika untuk Perubahan Navbar Saat Scroll (Tidak Berubah) ===
  window.addEventListener("scroll", () => {
    // Jangan jalankan logika scroll jika menu mobile sedang terbuka
    if (body.classList.contains("menu-open")) {
      return;
    }

    if (window.scrollY > 50) {
      if (!navbar.classList.contains("scrolled")) {
        navbar.classList.add("scrolled");
        logo.src = logoTerakota;
      }
    } else {
      if (navbar.classList.contains("scrolled")) {
        navbar.classList.remove("scrolled");
        logo.src = logoPutih;
      }
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  // ... (Kode JavaScript Anda yang lain, seperti untuk navbar, dll) ...

  // === Logika untuk FAQ yang Interaktif ===
  const faqButtons = document.querySelectorAll(".faq-btn");

  faqButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector(".faq-icon");

      // Toggle active state
      if (content.style.maxHeight) {
        // Close the FAQ
        content.style.maxHeight = null;
        icon.classList.remove("rotate-45");
      } else {
        // Open the FAQ
        content.style.maxHeight = content.scrollHeight + "px";
        icon.classList.add("rotate-45");
      }
    });
  });
});
