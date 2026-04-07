/* ======================================================
   Insectos Gallery — dataset + filters + lightbox
   (sin dependencias)
====================================================== */

const INSECTS = [
  // Mariposas
  {
    id: 1,
    name: "Esperanza verde",
    category: "Grillo",
    scientific: "Microcentrum sp.",
    photographer: "Ana Grisales",
    desc: "Es una mariposa tropical de presencia majestuosa, admirada por la armonía de sus formas y la elegancia serena de su vuelo, símbolo de belleza en los ecosistemas americanos.",
    img: "../../view/insectos/img/grillo_Esperanza_verde.jpeg"
  },
  {
    id: 2,
    name: "Mariposa malaquita",
    category: "Mariposas",
    scientific: "Siproeta stelenes",
    photographer: "Ana Grisales",
    desc: "Su azul iridiscente brilla con luz suave. Ideal para fotos en sombra abierta.",
    img: "../../view/insectos/img/Mariposa_malaquita.jpeg"
  },
  {
    id: 3,
    name: "Mariposa búho",
    category: "Mariposas",
    scientific: " Caligo memnon",
    photographer: "Ana Grisales",
    desc: "Grande y enigmática, vuela al atardecer y la noche. Sus alas presentan patrones que imitan corteza, pero destacan los grandes “ojos” en la parte posterior, diseñados para intimidar depredadores. Una especie imponente y fascinante de los bosques tropicales.",
    img: "../../view/insectos/img/polilla_peluche.jpeg"
  },
  {
    id: 4,
    name: "Polilla peluche",
    category: "Polilla",
    scientific: "Podalia orsilochus",
    photographer: "Ana Grisales",
    desc: "Pequeña y de apariencia esponjosa, destaca por su cuerpo cubierto de densos mechones y sus antenas plumosas. Su textura suave y su contraste de tonos la hacen muy llamativa a simple vista.",
    img: "../../view/insectos/img/mariposabuho.jpeg"
  },
  {
    id: 5,
    name: "Araña de seda dorada",
    category: "Arácnido",
    scientific: "Trichonephila clavipes",
    photographer: "Ana Grisales",
    desc: "Gran tejedora de telarañas orbiculares, reconocida por sus patas largas y delgadas y su abdomen alargado con puntos amarillos brillantes. Produce una seda resistente con tono dorado y suele encontrarse en jardines y zonas abiertas. Es inofensiva para las personas.",
    img: "../../view/insectos/img/Arana_seda_dorada.jpeg"
  }


];

const CATEGORIES_ORDER = [
  "Todas",
  "Mariposas",
  "Escarabajos",
  "Abejas y avispas",
  "Libélulas",
  "Hormigas",
  "Mantodeos",
  "Ortópteros",
  "Polillas",
  "Hemípteros"
];

const els = {
  grid: document.getElementById("grid"),
  chips: document.getElementById("filterChips"),
  search: document.getElementById("searchInput"),

  lightbox: document.getElementById("lightbox"),
  backdrop: null,

  lbImg: document.getElementById("lbImg"),
  lbCategory: document.getElementById("lbCategory"),
  lbName: document.getElementById("lbName"),
  lbSci: document.getElementById("lbSci"),
  lbPhotographer: document.getElementById("lbPhotographer"),
  lbDesc: document.getElementById("lbDesc"),

  btnClose: document.getElementById("btnClose"),
  btnPrev: document.getElementById("btnPrev"),
  btnNext: document.getElementById("btnNext")
};

let state = {
  query: "",
  category: "Todas",
  filtered: [...INSECTS],
  currentIndex: -1,
  lastFocused: null
};

function normalizeText(str){
  return (str || "")
    .toLowerCase()
    .normalize("NFD")
    .replace(/[\u0300-\u036f]/g, "");
}

function buildChips(){
  els.chips.innerHTML = "";

  CATEGORIES_ORDER.forEach(cat => {
    const btn = document.createElement("button");
    btn.type = "button";
    btn.className = "chip";
    btn.textContent = cat;
    btn.setAttribute("aria-pressed", String(cat === state.category));
    btn.addEventListener("click", () => {
      state.category = cat;
      updateChipsActive();
      applyFilters();
      renderGrid();
    });
    els.chips.appendChild(btn);
  });
}

function updateChipsActive(){
  [...els.chips.querySelectorAll(".chip")].forEach(chip => {
    chip.setAttribute("aria-pressed", String(chip.textContent === state.category));
  });
}

function applyFilters(){
  const q = normalizeText(state.query);

  state.filtered = INSECTS.filter(item => {
    const okCat = state.category === "Todas" ? true : item.category === state.category;

    if (!q) return okCat;

    const hay = normalizeText(`${item.name} ${item.scientific} ${item.category} ${item.photographer}`);
    return okCat && hay.includes(q);
  });
}

function renderGrid(){
  els.grid.innerHTML = "";

  if (!state.filtered.length){
    const empty = document.createElement("div");
    empty.style.padding = "24px";
    empty.style.textAlign = "center";
    empty.style.color = "rgba(28,42,34,.60)";
    empty.textContent = "No se encontraron resultados. Prueba con otro nombre o filtro.";
    els.grid.appendChild(empty);
    return;
  }

  state.filtered.forEach((item, idx) => {
    const card = document.createElement("article");
    card.className = "card";
    card.role = "listitem";
    card.tabIndex = 0;
    card.setAttribute("data-idx", String(idx));
    card.setAttribute("aria-label", `${item.name}. Abrir fotografía ampliada.`);

    card.innerHTML = `
      <div class="card__media">
        <img loading="lazy" decoding="async" src="${item.img}" alt="${item.name}">
      </div>
      <div class="card__body">
        <div class="tag">${item.category}</div>
        <h3 class="card__title">${item.name}</h3>
        <p class="card__sci">${item.scientific}</p>
        <p class="card__meta">Fotografía: ${item.photographer}</p>
      </div>
    `;

    const open = () => openLightbox(idx);
    card.addEventListener("click", open);
    card.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        open();
      }
    });

    els.grid.appendChild(card);
  });
}

function openLightbox(filteredIndex){
  if (filteredIndex < 0 || filteredIndex >= state.filtered.length) return;

  state.currentIndex = filteredIndex;
  state.lastFocused = document.activeElement;

  const item = state.filtered[state.currentIndex];

  els.lbImg.src = item.img;
  els.lbImg.alt = item.name;
  els.lbCategory.textContent = item.category;
  els.lbName.textContent = item.name;
  els.lbSci.textContent = item.scientific;
  els.lbPhotographer.textContent = item.photographer;
  els.lbDesc.textContent = item.desc;

  els.lightbox.classList.add("is-open");
  els.lightbox.setAttribute("aria-hidden", "false");

  els.btnClose.focus();
  updateNavButtons();

  // Lock scroll del body cuando abre
  document.documentElement.style.overflow = "hidden";
  document.body.style.overflow = "hidden";
}

function closeLightbox(){
  els.lightbox.classList.remove("is-open");
  els.lightbox.setAttribute("aria-hidden", "true");

  // Unlock scroll del body cuando cierra
  document.documentElement.style.overflow = "";
  document.body.style.overflow = "";

  if (state.lastFocused && typeof state.lastFocused.focus === "function"){
    state.lastFocused.focus();
  }
}

function updateNavButtons(){
  const hasPrev = state.currentIndex > 0;
  const hasNext = state.currentIndex < state.filtered.length - 1;

  els.btnPrev.disabled = !hasPrev;
  els.btnNext.disabled = !hasNext;

  els.btnPrev.style.opacity = hasPrev ? "1" : ".35";
  els.btnNext.style.opacity = hasNext ? "1" : ".35";
}

function goPrev(){
  if (state.currentIndex <= 0) return;
  openLightbox(state.currentIndex - 1);
}

function goNext(){
  if (state.currentIndex >= state.filtered.length - 1) return;
  openLightbox(state.currentIndex + 1);
}

function bindLightboxEvents(){
  const backdrop = document.querySelector(".lightbox__backdrop");
  els.backdrop = backdrop;

  backdrop.addEventListener("click", () => closeLightbox());
  els.btnClose.addEventListener("click", () => closeLightbox());
  els.btnPrev.addEventListener("click", () => goPrev());
  els.btnNext.addEventListener("click", () => goNext());

  document.addEventListener("keydown", (e) => {
    const isOpen = els.lightbox.classList.contains("is-open");
    if (!isOpen) return;

    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") goPrev();
    if (e.key === "ArrowRight") goNext();
  });
}

function init(){
  buildChips();
  applyFilters();
  renderGrid();
  bindLightboxEvents();

  els.search.addEventListener("input", (e) => {
    state.query = e.target.value || "";
    applyFilters();
    renderGrid();
  });
}

init();
