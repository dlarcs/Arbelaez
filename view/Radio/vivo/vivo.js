// === CONFIGURA ESTO ===
  const STREAM_URL = "https://radio.tu-dominio.com/stream.mp3"; // o .aac / .m3u8
  const ICECAST_STATUS = "https://radio.tu-dominio.com/status-json.xsl"; // opcional
  const SHOUTCAST_STATUS = "https://radio.tu-dominio.com/stats?sid=1&json=1"; // opcional
  // ======================

  const audio = document.getElementById("radioAudio");
  const playBtn = document.getElementById("playBtn");
  const vol = document.getElementById("vol");
  const statusEl = document.getElementById("status");
  const npEl = document.getElementById("nowPlaying");
  const openExternal = document.getElementById("openExternal");

  openExternal.href = STREAM_URL;

  let hls;

  function setStatus(msg){ statusEl.textContent = msg; }

  function setupSrc() {
    if (STREAM_URL.endsWith(".m3u8")) {
      // Safari/iOS soportan HLS nativamente
      if (audio.canPlayType("application/vnd.apple.mpegURL")) {
        audio.src = STREAM_URL;
      } else if (window.Hls && Hls.isSupported()) {
        hls = new Hls({ maxBufferLength: 10 });
        hls.loadSource(STREAM_URL);
        hls.attachMedia(audio);
      } else {
        setStatus("Tu navegador no soporta HLS. Intenta en Safari o usa un stream MP3/AAC.");
      }
    } else {
      // MP3/AAC directo
      audio.src = STREAM_URL;
    }
  }

  setupSrc();

  // Controles
  playBtn.addEventListener("click", async () => {
    if (audio.paused) {
      try {
        await audio.play();
        playBtn.textContent = "⏸️ Pausar";
        playBtn.setAttribute("aria-pressed", "true");
        setStatus("Reproduciendo…");
      } catch (e) {
        setStatus("El navegador bloqueó el autoplay. Toca de nuevo para reproducir.");
      }
    } else {
      audio.pause();
      playBtn.textContent = "▶️ Reproducir";
      playBtn.setAttribute("aria-pressed", "false");
      setStatus("Pausado.");
    }
  });

  vol.addEventListener("input", () => { audio.volume = Number(vol.value); });

  audio.addEventListener("error", () => setStatus("No se pudo cargar el stream (¿URL correcta/HTTPS activo?)."));
  audio.addEventListener("stalled", () => setStatus("Conexión inestable… intentando reconectar."));
  audio.addEventListener("playing", () => setStatus("Reproduciendo…"));
  audio.addEventListener("waiting", () => setStatus("Buffering…"));

  // Now Playing (si el servidor lo expone). Respetará CORS del servidor.
  async function fetchNowPlaying() {
    try {
      // Primero probamos Icecast
      if (ICECAST_STATUS) {
        const r = await fetch(ICECAST_STATUS, { cache: "no-store" });
        if (r.ok) {
          const data = await r.json();
          const src = Array.isArray(data.icestats?.source) ? data.icestats.source[0] : data.icestats?.source;
          if (src?.title) {
            npEl.textContent = "Ahora suena: " + src.title;
            return;
          }
        }
      }
      // Luego SHOUTcast
      if (SHOUTCAST_STATUS) {
        const r2 = await fetch(SHOUTCAST_STATUS, { cache: "no-store" });
        if (r2.ok) {
          const d2 = await r2.json();
          if (d2.songtitle) {
            npEl.textContent = "Ahora suena: " + d2.songtitle;
            return;
          }
        }
      }
      // Si nada devuelve, ocultamos el texto
      npEl.textContent = "";
    } catch (e) {
      // Si CORS bloquea, no mostramos error al usuario final
    }
  }
  // Actualiza cada 15s
  setInterval(fetchNowPlaying, 15000);
  fetchNowPlaying();
