// ../../view/Naturaleza/galery/galery.js

document.addEventListener("DOMContentLoaded", () => {
  const filtersBar = document.querySelector(".restos_filters");
  const filterButtons = document.querySelectorAll(".filter_btn");
  const cards = document.querySelectorAll(".resto_card");

  if (!filtersBar || !filterButtons.length || !cards.length) return;

  // Aplica el filtro a las tarjetas
  const applyFilter = (value) => {
    cards.forEach((card) => {
      const matches = value === "all" || card.classList.contains(value);
      // Usamos el atributo [hidden] para que respete tu CSS
      card.toggleAttribute("hidden", !matches);
    });
  };

  // Marca un botón como activo y actualiza aria-pressed
  const setActiveButton = (btn) => {
    filterButtons.forEach((button) => {
      button.classList.toggle("is-active", button === btn);
      button.setAttribute(
        "aria-pressed",
        button === btn ? "true" : "false"
      );
    });
  };

  // Click en los botones de filtro
  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const value = button.dataset.filter || "all";
      setActiveButton(button);
      applyFilter(value);
    });
  });

  // Filtro por defecto (por si acaso)
  const defaultBtn = document.querySelector(
    ".filter_btn.is-active"
  ) || filterButtons[0];

  if (defaultBtn) {
    setActiveButton(defaultBtn);
    applyFilter(defaultBtn.dataset.filter || "all");
  }
});
