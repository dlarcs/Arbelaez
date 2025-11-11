// --- Barra de progreso tal como la tienes ---
const onProgress = (event) => {
  const progressBar = event.target.querySelector('.progress-bar');
  const updatingBar = event.target.querySelector('.update-bar');
  updatingBar.style.width = `${event.detail.totalProgress * 100}%`;
  if (event.detail.totalProgress === 1) {
    progressBar.classList.add('hide');
    event.target.removeEventListener('progress', onProgress);
  } else {
    progressBar.classList.remove('hide');
  }
};

// --- Lógica para habilitar AR solo en Android ---
document.addEventListener('DOMContentLoaded', () => {
  const mv = document.getElementById('mv');
  const arButton = document.getElementById('ar-button');
  if (!mv) return;

  // Detección simple de Android
  const isAndroid = /Android/i.test(navigator.userAgent);

  if (isAndroid) {
    // Solo Android: permitimos AR vía WebXR/Scene Viewer
    mv.setAttribute('ar', '');
    mv.setAttribute('ar-modes', 'webxr scene-viewer');
    if (arButton) arButton.style.display = ''; // mostrar si estaba oculto
  } else {
    // iOS y demás: quitamos AR y ocultamos botón
    mv.removeAttribute('ar');
    mv.removeAttribute('ar-modes');
    if (arButton) arButton.style.display = 'none';
  }

  // Conectar la barra de progreso
  mv.addEventListener('progress', onProgress);
});
