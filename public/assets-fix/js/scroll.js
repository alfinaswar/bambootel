const wrapper = document.getElementById("villaWrapper");
const scrollLeftBtn = document.getElementById("scrollLeft");
const scrollRightBtn = document.getElementById("scrollRight");

let currentX = 0;
const step = 500;

// Hitung jarak maksimal scroll
function getMaxScroll() {
  const wrapperWidth = wrapper.scrollWidth;
  const parentWidth = wrapper.parentElement.offsetWidth;
  const extraMargin = 70; // jarak tambahan di kanan supaya tombol ga nempel
  return wrapperWidth - parentWidth + extraMargin;
}

// Scroll wrapper (tombol scroll) tetap smooth di semua device
function scrollWrapper(direction) {
  currentX += direction * step;

  if (currentX < 0) currentX = 0;
  if (currentX > getMaxScroll()) currentX = getMaxScroll();

  gsap.to(wrapper, { x: -currentX, duration: 1.2, ease: "power2.inOut" });
  updateButtons();
}

function updateButtons() {
  scrollLeftBtn.disabled = currentX <= 0;
  scrollRightBtn.disabled = currentX >= getMaxScroll();
}

// Inisialisasi tombol scroll wrapper
scrollLeftBtn.addEventListener("click", () => scrollWrapper(-1));
scrollRightBtn.addEventListener("click", () => scrollWrapper(1));
updateButtons();

// =================== IMAGE SLIDER DALAM CARD ===================
const villaImages = [
  "assets/img/vila1.jpg",
  "assets/img/vila2.jpg",
  "assets/img/vila3.jpg"
];

document.querySelectorAll("#villaWrapper > div").forEach((card) => {
  let currentIndex = 0;
  const imgContainer = card.querySelector("div.relative"); 
  const currentImg = imgContainer.querySelector("img");

  // Pastikan posisi image absolute
  currentImg.style.position = "absolute";
  currentImg.style.inset = "0";
  currentImg.style.zIndex = 1;

  // Next image
  card.querySelector(".next-btn").addEventListener("click", () => {
    let nextIndex = (currentIndex + 1) % villaImages.length;
    
    // Mobile (<768px) -> langsung switch tanpa fade
    if (window.innerWidth < 768) {
      currentImg.src = villaImages[nextIndex];
    } else {
      changeImage(currentImg, villaImages[nextIndex]);
    }

    currentIndex = nextIndex;
  });

  // Prev image
  card.querySelector(".prev-btn").addEventListener("click", () => {
    let nextIndex = (currentIndex - 1 + villaImages.length) % villaImages.length;

    if (window.innerWidth < 768) {
      currentImg.src = villaImages[nextIndex];
    } else {
      changeImage(currentImg, villaImages[nextIndex]);
    }

    currentIndex = nextIndex;
  });
});

// Fungsi changeImage pakai GSAP fade (desktop)
function changeImage(currentImg, newSrc) {
  const container = currentImg.parentElement;
  const newImg = document.createElement("img");
  newImg.src = newSrc;
  newImg.className = "villa-img w-full h-full object-cover";
  newImg.style.position = "absolute";
  newImg.style.inset = "0";
  newImg.style.opacity = 0;
  newImg.style.zIndex = 2;

  container.appendChild(newImg);

  gsap.to(currentImg, { opacity: 0, duration: 0.7 });
  gsap.to(newImg, { 
    opacity: 1, 
    duration: 0.7,
    onComplete: () => {
      currentImg.style.zIndex = 0;
      newImg.style.zIndex = 1;
      // update reference
      currentImg.src = newSrc;
      container.removeChild(newImg);
    }
  });
}
