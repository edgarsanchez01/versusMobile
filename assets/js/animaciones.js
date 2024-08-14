// Función para aplicar las animaciones con el delay dado
function applyAnimations(delay) {
  const anim = ScrollReveal({
    origin: "top",
    distance: '60px',
    duration: 1000,
    delay: delay,
    reset: true
  });

  anim.reveal(`.main-banner, .dispositivo, .dispositivos`, {
    origin: "top",
    distance: '60px',
    duration: 700,
    delay: delay,
    reset: true
  });

  anim.reveal(`.most-popular`);

  anim.reveal(`.featured-games, .vistos, .recomendados`, {
    distance: '100px',
    origin: "left",
    duration: 1000,
    delay: delay
  });

  anim.reveal(`.top-downloaded, .carrusel, .calidad-precio, .card`, {
    distance: '100px',
    origin: "top",
    duration: 1000,
    delay: delay
  });

  anim.reveal(`.phone`, {
    origin: "top",
    duration: 1000,
    delay: delay
  });

  anim.reveal(`.footer`, {
    origin: "bottom",
    distance: '20px',
    duration: 1000,
    delay: delay
  });
}

// Esperar a que se cargue completamente el documento
document.addEventListener("DOMContentLoaded", function() {
  // Animar con el delay inicial de 1000 ms
  applyAnimations(500);

  // Evento de scroll para animar con el delay de 300 ms mientras se mantiene en la página
  let scrollDelayApplied = false;
  window.addEventListener("scroll", function() {
    if (!scrollDelayApplied) {
      applyAnimations(300);
      scrollDelayApplied = true;
    }
  });
});












