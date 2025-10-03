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
