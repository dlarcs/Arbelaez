document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".home-slider");
  if (!slider) return;

  const track = slider.querySelector(".home-slider__track");
  const slides = Array.from(slider.querySelectorAll(".home-slide"));
  const dots = Array.from(slider.querySelectorAll(".home-slider__dot"));
  const prevBtn = slider.querySelector(".home-slider__arrow--prev");
  const nextBtn = slider.querySelector(".home-slider__arrow--next");

  let currentIndex = 0;
  let autoPlayId = null;
  const autoPlayDelay = 7000; // 7 segundos

  const goToSlide = (index) => {
    if (!track || slides.length === 0) return;

    const total = slides.length;
    currentIndex = (index + total) % total;

    const offset = -currentIndex * 100;
    track.style.transform = `translateX(${offset}%)`;

    slides.forEach((slide, i) => {
      slide.classList.toggle("is-active", i === currentIndex);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("is-active", i === currentIndex);
    });
  };

  const nextSlide = () => goToSlide(currentIndex + 1);
  const prevSlide = () => goToSlide(currentIndex - 1);

  const startAutoPlay = () => {
    stopAutoPlay();
    autoPlayId = window.setInterval(nextSlide, autoPlayDelay);
  };

  const stopAutoPlay = () => {
    if (autoPlayId !== null) {
      window.clearInterval(autoPlayId);
      autoPlayId = null;
    }
  };

  // Eventos
  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      nextSlide();
      startAutoPlay();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      prevSlide();
      startAutoPlay();
    });
  }

  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      const index = Number(dot.dataset.index || 0);
      goToSlide(index);
      startAutoPlay();
    });
  });

  // Pausar cuando el mouse está sobre el slider (desktop)
  slider.addEventListener("mouseenter", stopAutoPlay);
  slider.addEventListener("mouseleave", startAutoPlay);

  // Swipe simple para mobile
  let startX = 0;
  let isDragging = false;

  slider.addEventListener("touchstart", (e) => {
    if (!e.touches || e.touches.length === 0) return;
    startX = e.touches[0].clientX;
    isDragging = true;
    stopAutoPlay();
  });

  slider.addEventListener("touchmove", (e) => {
    if (!isDragging || !e.touches || e.touches.length === 0) return;
    const currentX = e.touches[0].clientX;
    const diff = currentX - startX;

    // Umbral para considerar un swipe
    if (Math.abs(diff) > 50) {
      if (diff < 0) {
        nextSlide();
      } else {
        prevSlide();
      }
      isDragging = false;
      startAutoPlay();
    }
  });

  slider.addEventListener("touchend", () => {
    isDragging = false;
  });

  // Iniciar
  goToSlide(0);
  startAutoPlay();
});
