document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("rifaSlider");
  const track = document.getElementById("rifaTrack");
  const slides = [...document.querySelectorAll(".rifa-slide")];
  const dotsWrap = document.getElementById("rifaDots");
  const prevBtn = document.getElementById("btnPrev");
  const nextBtn = document.getElementById("btnNext");

  if (!slider || !track || slides.length === 0) return;

  let index = 0;

  const dots = slides.map((_, i) => {
    const dot = document.createElement("button");
    dot.className = "rifa-dot";
    dot.type = "button";
    dot.setAttribute("aria-label", `Ir al slide ${i + 1}`);

    dot.addEventListener("click", () => {
      index = i;
      updateSlider();
    });

    dotsWrap.appendChild(dot);
    return dot;
  });

  function updateSlider() {
    track.style.transform = `translateX(-${index * 100}%)`;

    dots.forEach((dot, i) => {
      dot.classList.toggle("is-active", i === index);
    });
  }

  function nextSlide() {
    index = index === slides.length - 1 ? 0 : index + 1;
    updateSlider();
  }

  function prevSlide() {
    index = index === 0 ? slides.length - 1 : index - 1;
    updateSlider();
  }

  nextBtn?.addEventListener("click", nextSlide);
  prevBtn?.addEventListener("click", prevSlide);

  updateSlider();
});
