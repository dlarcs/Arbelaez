// =========================
// TOURBURGER LOGIC
// =========================

document.addEventListener("DOMContentLoaded", () => {
  // =========================
  // MODAL TÉRMINOS
  // =========================
  const modal = document.getElementById("tourburger-terms");
  const openButtons = document.querySelectorAll("[data-open-modal]");
  const closeElements = modal ? modal.querySelectorAll("[data-close-modal]") : [];

  const openModal = () => {
    if (!modal) return;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
  };

  const closeModal = () => {
    if (!modal) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
  };

  if (modal) {
    openButtons.forEach((btn) => {
      btn.addEventListener("click", openModal);
    });

    closeElements.forEach((el) => {
      el.addEventListener("click", closeModal);
    });

    document.addEventListener("keyup", (event) => {
      if (event.key === "Escape" && modal.classList.contains("is-open")) {
        closeModal();
      }
    });
  }

  // =========================
  // CAMBIO DE IMAGEN DEL HERO
  // =========================
  const heroImage = document.querySelector(".tourburger__image");
  const cards = document.querySelectorAll(".tourburger-card");

  if (heroImage && cards.length) {
    cards.forEach((card) => {
      const imgSrc = card.getAttribute("data-image");
      const imgAlt = card.getAttribute("data-image-alt") || heroImage.alt;

      if (!imgSrc) return;

      const triggers = card.querySelectorAll(
  ".tourburger-card__name, .tourburger-card__details, .tourburger-card__thumb"
);


      triggers.forEach((trigger) => {
        trigger.addEventListener("click", () => {
          heroImage.style.opacity = "0.15";

          setTimeout(() => {
            heroImage.src = imgSrc;
            heroImage.alt = imgAlt;
            heroImage.style.opacity = "1";
          }, 150);
        });
      });
    });
  }
});
