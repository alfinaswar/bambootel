
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray('.gallery-item').forEach((item, i) => {
    gsap.to(item, {
      opacity: 1,
      scale: 1,
      duration: 0.8,
      delay: i * 0.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: item,
        start: "top 85%",
      }
    });
  });

  const galleryItems = document.querySelectorAll(".gallery-item img");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const lightboxClose = document.getElementById("lightbox-close");

  galleryItems.forEach(img => {
    img.addEventListener("click", () => {
      lightboxImg.src = img.src;
      lightbox.classList.remove("hidden");
      // optional animation
      gsap.fromTo(lightboxImg, {scale: 0.8, opacity: 0}, {scale: 1, opacity: 1, duration: 0.5, ease: "power2.out"});
    });
  });

  lightboxClose.addEventListener("click", () => {
    gsap.to(lightboxImg, {scale: 0.8, opacity: 0, duration: 0.3, ease: "power2.in", onComplete: () => {
      lightbox.classList.add("hidden");
    }});
  });

  // Klik di luar gambar untuk menutup
  lightbox.addEventListener("click", (e) => {
    if(e.target === lightbox){
      gsap.to(lightboxImg, {scale: 0.8, opacity: 0, duration: 0.3, ease: "power2.in", onComplete: () => {
        lightbox.classList.add("hidden");
      }});
    }
  });

  const galleryWrappers = document.querySelectorAll(".gallery-item");

  galleryWrappers.forEach(wrapper => {
    const img = wrapper.querySelector("img");
  
    wrapper.addEventListener("mousemove", (e) => {
      const rect = wrapper.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width - 0.5) * 20; // rotasi ±10 deg
      const y = -((e.clientY - rect.top) / rect.height - 0.5) * 20;
  
      gsap.to(img, {
        rotationY: x,
        rotationX: y,
        z: 20,       // angkat sedikit
        scale: 1.05, // zoom ringan
        duration: 0.3,
        ease: "power2.out",
        transformPerspective: 600
      });
    });
  
    wrapper.addEventListener("mouseleave", () => {
      gsap.to(img, { rotationX: 0, rotationY: 0, z: 0, scale: 1, duration: 0.5, ease: "power2.out" });
    });
  });
  
  