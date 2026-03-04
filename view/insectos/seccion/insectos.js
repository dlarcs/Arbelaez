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
    name: "Mariposa cristal",
    category: "Mariposas",
    scientific: "Greta oto",
    photographer: "Juan Sebastián Ríos",
    desc: "Alas transparentes y delicadas. Se ve mejor con fondos oscuros y desenfocados.",
    img: "https://picsum.photos/seed/mariposa-cristal/1200/800"
  },

  // Escarabajos
  {
    id: 6,
    name: "Escarabajo rinoceronte",
    category: "Escarabajos",
    scientific: "Dynastes hercules",
    photographer: "Roberto Vargas",
    desc: "Grande y potente, con cuerno distintivo. Suele encontrarse cerca de troncos y materia orgánica.",
    img: "https://picsum.photos/seed/escarabajo-rinoceronte/1200/800"
  },
  {
    id: 7,
    name: "Escarabajo joya",
    category: "Escarabajos",
    scientific: "Chrysochroa fulgidissima",
    photographer: "Diego Ramírez",
    desc: "Brillo metálico intenso. La luz lateral resalta sus colores tipo ‘gema’.",
    img: "https://picsum.photos/seed/escarabajo-joya/1200/800"
  },
  {
    id: 8,
    name: "Mariquita de siete puntos",
    category: "Escarabajos",
    scientific: "Coccinella septempunctata",
    photographer: "Nathalia Josa",
    desc: "Pequeña y muy fotogénica. Perfecta para macro en hojas con gotas de rocío.",
    img: "https://picsum.photos/seed/mariquita-siete/1200/800"
  },
  {
    id: 9,
    name: "Escarabajo ciervo",
    category: "Escarabajos",
    scientific: "Lucanus cervus",
    photographer: "Camila Torres",
    desc: "Mandíbulas grandes y forma robusta. Se observa en zonas boscosas y madera vieja.",
    img: "https://picsum.photos/seed/escarabajo-ciervo/1200/800"
  },
  {
    id: 10,
    name: "Escarabajo pelotero",
    category: "Escarabajos",
    scientific: "Scarabaeus sacer",
    photographer: "María Fernanda López",
    desc: "Conocido por su comportamiento de rodar bolas de materia orgánica. Muy interesante para series.",
    img: "https://picsum.photos/seed/pelotero/1200/800"
  },

  // Abejas y avispas
  {
    id: 11,
    name: "Abeja melífera",
    category: "Abejas y avispas",
    scientific: "Apis mellifera",
    photographer: "Juan Sebastián Ríos",
    desc: "Polinizadora clave. Fotografía ideal en flores con luz suave de mañana.",
    img: "https://picsum.photos/seed/abeja-melifera/1200/800"
  },
  {
    id: 12,
    name: "Abejorro",
    category: "Abejas y avispas",
    scientific: "Bombus terrestris",
    photographer: "Diego Ramírez",
    desc: "Cuerpo robusto y peludo. Se mueve lento al alimentarse: buen sujeto para macro.",
    img: "https://picsum.photos/seed/abejorro/1200/800"
  },
  {
    id: 13,
    name: "Avispa papelera",
    category: "Abejas y avispas",
    scientific: "Polistes dominula",
    photographer: "Roberto Vargas",
    desc: "Construye nidos de ‘papel’. En foto, mantén distancia y usa zoom para seguridad.",
    img: "https://picsum.photos/seed/avispa-papelera/1200/800"
  },
  {
    id: 14,
    name: "Abeja de las orquídeas",
    category: "Abejas y avispas",
    scientific: "Euglossa dilemma",
    photographer: "Camila Torres",
    desc: "Brillo metálico y colores intensos. Atraída por fragancias florales.",
    img: "https://picsum.photos/seed/abeja-orquideas/1200/800"
  },
  {
    id: 15,
    name: "Avispón europeo",
    category: "Abejas y avispas",
    scientific: "Vespa crabro",
    photographer: "María Fernanda López",
    desc: "Imponente y veloz. Para foto, busca tomas en reposo o en flores (con cuidado).",
    img: "https://picsum.photos/seed/avispon/1200/800"
  },

  // Libélulas
  {
    id: 16,
    name: "Libélula emperador",
    category: "Libélulas",
    scientific: "Anax imperator",
    photographer: "Nathalia Josa",
    desc: "Vuelo rápido y territorial. Suele posarse en tallos cerca del agua.",
    img: "https://picsum.photos/seed/libelula-emperador/1200/800"
  },
  {
    id: 17,
    name: "Caballito del diablo azul",
    category: "Libélulas",
    scientific: "Enallagma cyathigerum",
    photographer: "Diego Ramírez",
    desc: "Más delgado que una libélula. Perfecto para macro sobre vegetación ribereña.",
    img: "https://picsum.photos/seed/caballito-azul/1200/800"
  },
  {
    id: 18,
    name: "Libélula roja",
    category: "Libélulas",
    scientific: "Crocothemis erythraea",
    photographer: "Roberto Vargas",
    desc: "Color rojo intenso. Se aprecia mejor con fondo verde desenfocado.",
    img: "https://picsum.photos/seed/libelula-roja/1200/800"
  },
  {
    id: 19,
    name: "Libélula tigre",
    category: "Libélulas",
    scientific: "Onychogomphus forcipatus",
    photographer: "María Fernanda López",
    desc: "Patrones amarillos y negros. Frecuenta ríos y quebradas con piedras.",
    img: "https://picsum.photos/seed/libelula-tigre/1200/800"
  },
  {
    id: 20,
    name: "Caballito del diablo verde",
    category: "Libélulas",
    scientific: "Lestes viridis",
    photographer: "Camila Torres",
    desc: "Tonos verdes y postura calmada. Excelente para fotos con detalle en ojos.",
    img: "https://picsum.photos/seed/caballito-verde/1200/800"
  },

  // Hormigas
  {
    id: 21,
    name: "Hormiga arriera",
    category: "Hormigas",
    scientific: "Atta cephalotes",
    photographer: "Juan Sebastián Ríos",
    desc: "Famosa por cargar hojas. Un gran tema para contar historia en fotografía.",
    img: "https://picsum.photos/seed/hormiga-arriera/1200/800"
  },
  {
    id: 22,
    name: "Hormiga bala",
    category: "Hormigas",
    scientific: "Paraponera clavata",
    photographer: "Diego Ramírez",
    desc: "Grande y muy fuerte. Observa desde lejos y evita manipularla.",
    img: "https://picsum.photos/seed/hormiga-bala/1200/800"
  },
  {
    id: 23,
    name: "Hormiga carpintera",
    category: "Hormigas",
    scientific: "Camponotus pennsylvanicus",
    photographer: "María Fernanda López",
    desc: "Se asocia a madera. Ideal para macro en troncos y cortezas.",
    img: "https://picsum.photos/seed/hormiga-carpintera/1200/800"
  },
  {
    id: 24,
    name: "Hormiga roja",
    category: "Hormigas",
    scientific: "Solenopsis invicta",
    photographer: "Camila Torres",
    desc: "Muy común en zonas abiertas. Para fotos, mantén distancia y evita contacto.",
    img: "https://picsum.photos/seed/hormiga-roja/1200/800"
  },
  {
    id: 25,
    name: "Hormiga tejedor",
    category: "Hormigas",
    scientific: "Oecophylla smaragdina",
    photographer: "Roberto Vargas",
    desc: "Construye nidos uniendo hojas. Un comportamiento espectacular para fotografía.",
    img: "https://picsum.photos/seed/hormiga-tejedor/1200/800"
  },

  // Extra (para 30+)
  {
    id: 26,
    name: "Mantis religiosa",
    category: "Mantodeos",
    scientific: "Mantis religiosa",
    photographer: "Nathalia Josa",
    desc: "Cazadora paciente. Muy buena para retratos con fondo limpio y enfoque en ojos.",
    img: "https://picsum.photos/seed/mantis/1200/800"
  },
  {
    id: 27,
    name: "Saltamontes verde",
    category: "Ortópteros",
    scientific: "Tettigonia viridissima",
    photographer: "Diego Ramírez",
    desc: "Camuflaje perfecto en vegetación. Ideal para macros con textura en alas.",
    img: "https://picsum.photos/seed/saltamontes-verde/1200/800"
  },
  {
    id: 28,
    name: "Grillo",
    category: "Ortópteros",
    scientific: "Gryllus campestris",
    photographer: "Roberto Vargas",
    desc: "Activo al atardecer y noche. Fotografía en reposo para mayor detalle.",
    img: "https://picsum.photos/seed/grillo/1200/800"
  },
  {
    id: 29,
    name: "Polilla atlas",
    category: "Polillas",
    scientific: "Attacus atlas",
    photographer: "María Fernanda López",
    desc: "Enorme y sorprendente. Se aprecia mejor en tomas con referencia de escala.",
    img: "https://picsum.photos/seed/polilla-atlas/1200/800"
  },
  {
    id: 30,
    name: "Cigarra",
    category: "Hemípteros",
    scientific: "Cicada orni",
    photographer: "Camila Torres",
    desc: "Conocida por su canto. En foto, busca ángulos laterales para destacar alas transparentes.",
    img: "https://picsum.photos/seed/cigarra/1200/800"
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
