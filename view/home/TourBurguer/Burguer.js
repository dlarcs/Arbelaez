// =========================
// TOURBURGER MODAL LOGIC
// =========================

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("tourburger-terms");
  if (!modal) return;

  const openButtons = document.querySelectorAll("[data-open-modal]");
  const closeElements = modal.querySelectorAll("[data-close-modal]");

  const openModal = () => {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
  };

  const closeModal = () => {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
  };

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
});
