// Mobile: controlar apertura del menú principal y submenús
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".site-header");
  const toggle = document.querySelector(".nav-toggle");
  const parentButtons = document.querySelectorAll(".nav__link--parent");
  const submenuPanels = document.querySelectorAll(".nav__submenu");

  if (toggle) {
    toggle.addEventListener("click", () => {
      const isOpen = header.classList.contains("is-open");
      header.classList.toggle("is-open", !isOpen);
      toggle.setAttribute("aria-expanded", String(!isOpen));

      // Si se cierra el menú principal, cerrar todos los submenús
      if (isOpen) {
        parentButtons.forEach((btn) => btn.classList.remove("is-open"));
        submenuPanels.forEach((panel) => panel.classList.remove("is-open"));
      }
    });
  }

  // Submenús mobile (acordeón)
  parentButtons.forEach((btn) => {
    btn.addEventListener("click", (event) => {
      // En desktop el hover se encarga del submenú, así que solo actuamos si está en viewport pequeño
      if (window.matchMedia("(min-width: 768px)").matches) return;

      event.preventDefault();
      const id = btn.dataset.submenu;
      const panel = document.querySelector(
        `[data-submenu-panel="${id}"]`
      );

      if (!panel) return;

      const wasOpen = btn.classList.contains("is-open");

      // Cerrar todos
      parentButtons.forEach((b) => b.classList.remove("is-open"));
      submenuPanels.forEach((p) => p.classList.remove("is-open"));

      // Abrir el que se pulsó si no estaba ya abierto
      if (!wasOpen) {
        btn.classList.add("is-open");
        panel.classList.add("is-open");
      }
    });
  });

  // Cerrar menú si se redimensiona a desktop para evitar estados raros
  window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 768px)").matches) {
      header.classList.remove("is-open");
      toggle && toggle.setAttribute("aria-expanded", "false");
      parentButtons.forEach((btn) => btn.classList.remove("is-open"));
      submenuPanels.forEach((panel) => panel.classList.remove("is-open"));
    }
  });
});
