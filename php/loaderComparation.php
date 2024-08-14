<script>
// Esperar a que se cargue completamente el documento
document.addEventListener("DOMContentLoaded", function() {
    // Mostrar el loader al cargar la página
    var loaderContainer = document.querySelector(".loader-container");
    loaderContainer.style.display = "flex"; // Mostrar el loader

    // Mostrar el contenido después de 1.5 segundos
    setTimeout(function() {
        loaderContainer.style.display = "none"; // Ocultar el loader
        document.querySelector(".content").classList.remove("hidden"); // Mostrar el contenido
    }, 3000);
});
</script>
<div class="loader-container">
    <div class="loader1"></div>
    <div class="loader1"></div>
    <div class="loader1"></div>
</div>