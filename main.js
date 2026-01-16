document.addEventListener("DOMContentLoaded", () => {
  // 1. Scramble Text Effect
  const heroTitle = document.querySelector(".glitch-text");
  if (heroTitle) {
    const originalText =
      heroTitle.getAttribute("data-text") || heroTitle.innerText;
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&";
    let iterations = 0;

    const interval = setInterval(() => {
      heroTitle.innerText = originalText
        .split("")
        .map((letter, index) => {
          if (index < iterations) {
            return originalText[index];
          }
          return chars[Math.floor(Math.random() * chars.length)];
        })
        .join("");

      if (iterations >= originalText.length) {
        clearInterval(interval);
      }

      iterations += 1 / 3; // Controls speed
    }, 30);
  }

  // 2. Scroll Observer (Fade In / Slide Up)
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Only animate once
      }
    });
  }, observerOptions);

  const productCards = document.querySelectorAll(".product-card");
  productCards.forEach((card) => {
    card.classList.add("fade-in-section"); // Add base class
    observer.observe(card);
  });

  // 3. Navbar Scroll Effect
  const header = document.querySelector(".main-header");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.classList.add("active-glass");
    } else {
      header.classList.remove("active-glass");
    }
  });
});
