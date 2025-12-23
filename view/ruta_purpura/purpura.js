  // ====== Datos del violentómetro ======
  const LEVELS = [
    {
      id: 0,
      label: "Verde · Alertas",
      colorVar: "--green",
      title: "Control sutil / maltrato emocional",
      signs: [
        "Celos, revisión de celular, “bromas” humillantes o desprecio.",
        "Control de ropa, amistades, horarios o redes.",
        "Culpabilización: “tú me obligas”, “si me amaras…”",
        "Minimiza lo que sientes o te hace dudar de tu percepción."
      ],
      doNow: [
        "Habla con alguien de confianza y nombra lo que está pasando.",
        "Define límites y observa si hay escalada o represalias.",
        "Busca orientación (Línea Púrpura / 155) para planear con seguridad.",
        "Cuida tu privacidad (contraseñas, verificación en dos pasos)."
      ],
      primaryAction: { text: "Orientación (Línea Púrpura)", href: "tel:018000112137" },
      secondaryAction: { text: "Orientación nacional 155", href: "tel:155" }
    },
    {
      id: 1,
      label: "Amarillo · Riesgo",
      colorVar: "--yellow",
      title: "Control fuerte / aislamiento / chantaje",
      signs: [
        "Amenazas (quitar hijos, dinero, trabajo) o chantaje emocional.",
        "Aislamiento: impide que veas familia/amigos, te vigila o sigue.",
        "Control económico: te quita dinero, te endeuda, te prohíbe trabajar.",
        "Empujones, golpes a paredes/objetos, gritos, intimidación."
      ],
      doNow: [
        "Arma un plan de seguridad (salida, contactos, bolsa de emergencia).",
        "Si es seguro, registra incidentes (fechas, mensajes, capturas).",
        "Consulta rutas de protección (Comisarías de Familia) con orientación previa.",
        "Evita confrontaciones si eso aumenta el riesgo."
      ],
      primaryAction: { text: "WhatsApp Línea Púrpura", href: "https://wa.me/573007551846" },
      secondaryAction: { text: "Llamar 155", href: "tel:155" }
    },
    {
      id: 2,
      label: "Naranja · Alto riesgo",
      colorVar: "--orange",
      title: "Amenazas / agresión física / violencia sexual",
      signs: [
        "Golpes, patadas, lesiones, estrangulamiento, uso/amenaza con armas.",
        "Violencia sexual o coerción sexual.",
        "Amenazas de muerte o de hacer daño a ti, hijos o mascotas.",
        "Escalada: cada episodio es más frecuente o más grave."
      ],
      doNow: [
        "Prioriza salir a un lugar seguro (vecino, familiar, lugar público).",
        "Llama al 123 si hay riesgo o agresión reciente (emergencia).",
        "Busca atención médica si hay lesiones o violencia sexual.",
        "Pide orientación para medidas de protección y denuncia cuando estés segura."
      ],
      primaryAction: { text: "Emergencia 123", href: "tel:123" },
      secondaryAction: { text: "Fiscalía 122", href: "tel:122" }
    },
    {
      id: 3,
      label: "Rojo · Emergencia",
      colorVar: "--red",
      title: "Peligro inminente / agresión en curso",
      signs: [
        "Agresión en este momento o intento de retenerte contra tu voluntad.",
        "Amenaza inmediata con arma o intento de estrangulamiento.",
        "Lesiones graves, pérdida de conciencia, sangrado intenso.",
        "Amenaza directa y actual: “te voy a matar” y está cerca."
      ],
      doNow: [
        "Si puedes, aléjate y busca un lugar con gente (o un espacio seguro con salida).",
        "Llama al 123 inmediatamente.",
        "Si no puedes salir, intenta hacer ruido o pedir ayuda a terceros (vecinos).",
        "Después, busca apoyo psicosocial/jurídico para activar ruta y protección."
      ],
      primaryAction: { text: "Llamar 123", href: "tel:123" },
      secondaryAction: { text: "Orientación (Línea Púrpura)", href: "tel:018000112137" }
    }
  ];

  const lvlContent = document.getElementById("lvlContent");
  const lvlButtons = Array.from(document.querySelectorAll(".lvl-btn"));

  function renderLevel(levelId){
    const data = LEVELS.find(x => x.id === levelId) || LEVELS[0];
    const color = getComputedStyle(document.documentElement).getPropertyValue(data.colorVar).trim();

    lvlContent.innerHTML = `
      <span class="pill" style="border-color: rgba(255,255,255,.14);">
        <span class="swatch" style="background:${color}"></span>
        ${escapeHtml(data.label)} · ${escapeHtml(data.title)}
      </span>

      <div class="cols">
        <div>
          <b style="font-size:13px;">Señales comunes</b>
          <ul class="list">
            ${data.signs.map(s => `<li>${escapeHtml(s)}</li>`).join("")}
          </ul>
        </div>

        <div>
          <b style="font-size:13px;">Qué hacer ahora</b>
          <ul class="list">
            ${data.doNow.map(s => `<li>${escapeHtml(s)}</li>`).join("")}
          </ul>

          <div style="display:flex; flex-wrap:wrap; gap:8px; margin-top:10px;">
            <a class="btn ${levelId >= 2 ? "btn-danger" : "btn-primary"}" href="${data.primaryAction.href}">
              ${escapeHtml(data.primaryAction.text)}
            </a>
            <a class="btn" href="${data.secondaryAction.href}">
              ${escapeHtml(data.secondaryAction.text)}
            </a>
          </div>
        </div>
      </div>
    `;
  }

  function setActiveButton(levelId){
    lvlButtons.forEach(btn => {
      const isActive = Number(btn.dataset.level) === levelId;
      btn.classList.toggle("is-active", isActive);
      btn.setAttribute("aria-selected", isActive ? "true" : "false");
    });
  }

  lvlButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const levelId = Number(btn.dataset.level);
      setActiveButton(levelId);
      renderLevel(levelId);
    });
  });

  // ====== FAQ accordion ======
  document.querySelectorAll(".faq-item").forEach(item => {
    const q = item.querySelector(".faq-q");
    q.addEventListener("click", () => {
      const open = item.classList.toggle("is-open");
      q.setAttribute("aria-expanded", open ? "true" : "false");
    });
  });

  // ====== Modo discreto ======
  const toggleDiscreet = document.getElementById("toggleDiscreet");
  toggleDiscreet.addEventListener("click", () => {
    const on = document.body.classList.toggle("is-discreet");
    toggleDiscreet.setAttribute("aria-pressed", on ? "true" : "false");
  });

  // ====== Salir rápido ======
  const quickExit = document.getElementById("quickExit");
  quickExit.addEventListener("click", () => {
    // Cambia por cualquier web “neutral” que prefieras
    window.location.replace("https://www.google.com/");
  });

  // ====== Helpers ======
  function escapeHtml(str){
    return String(str)
      .replaceAll("&","&amp;")
      .replaceAll("<","&lt;")
      .replaceAll(">","&gt;")
      .replaceAll('"',"&quot;")
      .replaceAll("'","&#039;");
  }

  // Render inicial
  setActiveButton(0);
  renderLevel(0);
