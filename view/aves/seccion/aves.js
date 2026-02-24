/* ======================================================
   Avifauna Gallery — dataset + filters + lightbox
   (sin dependencias)
====================================================== */

const BIRDS = [
  // Colibríes
  {
    id: 1,
    name: "Colibrí garganta rubí",
    category: "Colibríes",
    scientific: "Archilochus colubris",
    photographer: "Ana Vela",
    desc: "Pequeño y veloz, suele verse visitando flores tubulares. Su vuelo estacionario es perfecto para observar detalles del plumaje.",
    img: "https://picsum.photos/seed/colibri-garganta-rubi/1200/800"
  },
  {
    id: 2,
    name: "Colibrí de Anna",
    category: "Colibríes",
    scientific: "Calypte anna",
    photographer: "Diego Ramírez",
    desc: "Con destellos iridiscentes, destaca en jardines y bordes de bosque. Ideal para fotos con fondo suave (bokeh).",
    img: "https://picsum.photos/seed/colibri-anna/1200/800"
  },
  {
    id: 3,
    name: "Colibrí rufous",
    category: "Colibríes",
    scientific: "Selasphorus rufus",
    photographer: "Roberto Vargas",
    desc: "Muy territorial en comederos. Suele regresar al mismo posadero, lo que facilita capturas en serie.",
    img: "https://picsum.photos/seed/colibri-rufous/1200/800"
  },
  {
    id: 4,
    name: "Colibrí orejas violetas",
    category: "Colibríes",
    scientific: "Colibri thalassinus",
    photographer: "María Fernanda López",
    desc: "Se reconoce por tonos verdes brillantes y marcas violetas. Frecuenta bosques montanos y jardines.",
    img: "https://picsum.photos/seed/colibri-orejas-violetas/1200/800"
  },
  {
    id: 5,
    name: "Colibrí pico espada",
    category: "Colibríes",
    scientific: "Ensifera ensifera",
    photographer: "Juan Sebastián Ríos",
    desc: "Su pico extremadamente largo lo hace único. Se asocia a flores profundas; una especie icónica de los Andes.",
    img: "https://picsum.photos/seed/colibri-pico-espada/1200/800"
  },

  // Cardenales
  {
    id: 6,
    name: "Cardenal norteño",
    category: "Cardenales",
    scientific: "Cardinalis cardinalis",
    photographer: "Roberto Vargas",
    desc: "El rojo intenso del macho lo vuelve protagonista. Busca ramas con buena separación del fondo para un retrato limpio.",
    img: "https://picsum.photos/seed/cardenal-norteno/1200/800"
  },
  {
    id: 7,
    name: "Cardenal de cresta larga",
    category: "Cardenales",
    scientific: "Paroaria coronata",
    photographer: "Diego Ramírez",
    desc: "Cresta marcada y máscara facial; luce increíble con luz suave de mañana. Se mueve entre arbustos y bordes abiertos.",
    img: "https://picsum.photos/seed/cardenal-cresta-larga/1200/800"
  },
  {
    id: 8,
    name: "Cardenal de cabeza roja",
    category: "Cardenales",
    scientific: "Paroaria gularis",
    photographer: "Nathalia Josa",
    desc: "Contraste fuerte entre rojo y blanco. Frecuenta orillas de ríos y vegetación ribereña.",
    img: "https://picsum.photos/seed/cardenal-cabeza-roja/1200/800"
  },
  {
    id: 9,
    name: "Cardenal rojo",
    category: "Cardenales",
    scientific: "Cardinalis phoeniceus",
    photographer: "Camila Torres",
    desc: "Se observa en sabanas y matorrales. Buen sujeto para fotos con composición minimalista.",
    img: "https://picsum.photos/seed/cardenal-rojo/1200/800"
  },
  {
    id: 10,
    name: "Cardenal amarillo",
    category: "Cardenales",
    scientific: "Gubernatrix cristata",
    photographer: "Diego Ramírez",
    desc: "Muy llamativo por su plumaje amarillo y cresta. En foto, cuida la exposición para no perder detalle en luces.",
    img: "https://picsum.photos/seed/cardenal-amarillo/1200/800"
  },

  // Rapaces
  {
    id: 11,
    name: "Halcón peregrino",
    category: "Rapaces",
    scientific: "Falco peregrinus",
    photographer: "Roberto Vargas",
    desc: "Famoso por su velocidad en picada. Si lo ves posado, espera el despegue: suele ser el momento más fotogénico.",
    img: "https://picsum.photos/seed/halcon-peregrino/1200/800"
  },
  {
    id: 12,
    name: "Águila calva",
    category: "Rapaces",
    scientific: "Haliaeetus leucocephalus",
    photographer: "María Fernanda López",
    desc: "Imponente en vuelo. Los contraluces suaves funcionan muy bien para siluetas y perfiles dramáticos.",
    img: "https://picsum.photos/seed/aguila-calva/1200/800"
  },
  {
    id: 13,
    name: "Gavilán de Cooper",
    category: "Rapaces",
    scientific: "Accipiter cooperii",
    photographer: "Juan Sebastián Ríos",
    desc: "Aparece de forma repentina. Enfoque rápido y ráfaga ayudan a capturar su mirada intensa.",
    img: "https://picsum.photos/seed/gavilan-cooper/1200/800"
  },
  {
    id: 14,
    name: "Búho real (rapaz nocturna)",
    category: "Rapaces",
    scientific: "Bubo bubo",
    photographer: "Camila Torres",
    desc: "Ojos penetrantes y postura firme. Ideal para tomas con textura de plumas y fondos oscuros.",
    img: "https://picsum.photos/seed/buho-real-rapaz/1200/800"
  },
  {
    id: 15,
    name: "Milano cola blanca",
    category: "Rapaces",
    scientific: "Elanus leucurus",
    photographer: "Diego Ramírez",
    desc: "Suele ‘flotar’ en el aire mientras busca presas. Un sujeto perfecto para fotos de acción en campo abierto.",
    img: "https://picsum.photos/seed/milano-cola-blanca/1200/800"
  },

  // Loros
  {
    id: 16,
    name: "Guacamaya azul y amarilla",
    category: "Loros",
    scientific: "Ara ararauna",
    photographer: "Nathalia Josa",
    desc: "Colores vibrantes y gran presencia. Busca fondos verdes para resaltar el azul/amarillo sin saturar de más.",
    img: "https://picsum.photos/seed/guacamaya-azul-amarilla/1200/800"
  },
  {
    id: 17,
    name: "Guacamaya roja",
    category: "Loros",
    scientific: "Ara macao",
    photographer: "Roberto Vargas",
    desc: "Muy llamativa; un clásico en fotografía tropical. La luz de tarde realza los rojos y naranjas.",
    img: "https://picsum.photos/seed/guacamaya-roja/1200/800"
  },
  {
    id: 18,
    name: "Loro amazónico",
    category: "Loros",
    scientific: "Amazona ochrocephala",
    photographer: "María Fernanda López",
    desc: "Tonos verdes con acentos amarillos. Buen sujeto para retratos cercanos con detalle en el ojo.",
    img: "https://picsum.photos/seed/loro-amazonico/1200/800"
  },
  {
    id: 19,
    name: "Periquito australiano",
    category: "Loros",
    scientific: "Melopsittacus undulatus",
    photographer: "Camila Torres",
    desc: "Pequeño y expresivo. En foto, usa composición simple para que el patrón del plumaje sea protagonista.",
    img: "https://picsum.photos/seed/periquito-australiano/1200/800"
  },
  {
    id: 20,
    name: "Cotorra argentina",
    category: "Loros",
    scientific: "Myiopsitta monachus",
    photographer: "Juan Sebastián Ríos",
    desc: "Muy sociable y ruidosa. Sus nidos comunales son un tema interesante para series fotográficas.",
    img: "https://picsum.photos/seed/cotorra-argentina/1200/800"
  },

  // Búhos
  {
    id: 21,
    name: "Lechuza común",
    category: "Búhos",
    scientific: "Tyto alba",
    photographer: "Diego Ramírez",
    desc: "Rostro en forma de corazón. Con poca luz, prioriza velocidades seguras o usa trípode si está posada.",
    img: "https://picsum.photos/seed/lechuza-comun/1200/800"
  },
  {
    id: 22,
    name: "Búho cornudo",
    category: "Búhos",
    scientific: "Bubo virginianus",
    photographer: "Roberto Vargas",
    desc: "‘Orejas’ prominentes y gran tamaño. Excelente para composiciones nocturnas con ramas como marco natural.",
    img: "https://picsum.photos/seed/buho-cornudo/1200/800"
  },
  {
    id: 23,
    name: "Mochuelo",
    category: "Búhos",
    scientific: "Athene noctua",
    photographer: "María Fernanda López",
    desc: "Pequeño, curioso, muy fotogénico. Suele posarse en estructuras bajas, ideal para ángulos a su altura.",
    img: "https://picsum.photos/seed/mochuelo/1200/800"
  },
  {
    id: 24,
    name: "Búho nival",
    category: "Búhos",
    scientific: "Bubo scandiacus",
    photographer: "Camila Torres",
    desc: "Blanco y elegante. En nieve o fondos claros, cuida la exposición para mantener textura en plumas.",
    img: "https://picsum.photos/seed/buho-nival/1200/800"
  },
  {
    id: 25,
    name: "Autillo europeo",
    category: "Búhos",
    scientific: "Otus scops",
    photographer: "Juan Sebastián Ríos",
    desc: "Camuflaje perfecto en troncos. Buen reto para fotos: busca luz lateral suave para revelar volumen.",
    img: "https://picsum.photos/seed/autillo-europeo/1200/800"
  },

  // Extra (para llegar a 30+ con variedad)
  {
    id: 26,
    name: "Colibrí cola de tijera",
    category: "Colibríes",
    scientific: "Eupetomena macroura",
    photographer: "Nathalia Josa",
    desc: "Cola larga y vuelo ágil. Se luce en tomas laterales con fondo desenfocado.",
    img: "https://picsum.photos/seed/colibri-cola-tijera/1200/800"
  },
  {
    id: 27,
    name: "Cardenal enmascarado",
    category: "Cardenales",
    scientific: "Paroaria nigrogenis",
    photographer: "Diego Ramírez",
    desc: "Máscara oscura muy distintiva. Un retrato frontal con luz suave resalta su patrón facial.",
    img: "https://picsum.photos/seed/cardenal-enmascarado/1200/800"
  },
  {
    id: 28,
    name: "Aguililla de Harris",
    category: "Rapaces",
    scientific: "Parabuteo unicinctus",
    photographer: "Roberto Vargas",
    desc: "Rapaz social; a veces se ve en grupos. Buen tema para contar historias en fotografía.",
    img: "https://picsum.photos/seed/aguililla-harris/1200/800"
  },
  {
    id: 29,
    name: "Loro gris africano",
    category: "Loros",
    scientific: "Psittacus erithacus",
    photographer: "María Fernanda López",
    desc: "Tonos grises elegantes y mirada intensa. Funciona bien en retratos con contraste moderado.",
    img: "https://picsum.photos/seed/loro-gris-africano/1200/800"
  },
  {
    id: 30,
    name: "Búho moteado",
    category: "Búhos",
    scientific: "Strix occidentalis",
    photographer: "Camila Torres",
    desc: "De hábitos discretos. En bosque, la paciencia es clave: observa posaderos y zonas de sombra.",
    img: "https://picsum.photos/seed/buho-moteado/1200/800"
  }
];

const CATEGORIES_ORDER = ["Todas", "Colibríes", "Cardenales", "Rapaces", "Loros", "Búhos"];

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
  filtered: [...BIRDS],
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

  state.filtered = BIRDS.filter(item => {
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

  // Enfocar el botón de cerrar para accesibilidad
  els.btnClose.focus();

  updateNavButtons();
}

function closeLightbox(){
  els.lightbox.classList.remove("is-open");
  els.lightbox.setAttribute("aria-hidden", "true");

  // limpiar imagen (opcional)
  // els.lbImg.src = "";

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
  // Cerrar por backdrop
  const backdrop = document.querySelector(".lightbox__backdrop");
  els.backdrop = backdrop;

  backdrop.addEventListener("click", () => closeLightbox());
  els.btnClose.addEventListener("click", () => closeLightbox());
  els.btnPrev.addEventListener("click", () => goPrev());
  els.btnNext.addEventListener("click", () => goNext());

  // Teclado
  document.addEventListener("keydown", (e) => {
    const isOpen = els.lightbox.classList.contains("is-open");
    if (!isOpen) return;

    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") goPrev();
    if (e.key === "ArrowRight") goNext();
  });

  // Evitar click dentro del panel cierre accidental (ya que backdrop es aparte)
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
