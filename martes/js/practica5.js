// Cambiar el título
function modificarTitulo() {
    document.getElementById("titulo").innerHTML =
        "Título Modificado con JavaScript";
}

// Cambiar una imagen por otra
function cambiarImagen() {
    document.getElementById("imagen").src =
        "https://picsum.photos/400";
}

// Cambiar tamaño de la imagen con botón
function cambiarTamannoImagen() {
    document.getElementById("imagen").style.width = "400px";
}

// Cambiar color de los textos con botón
function cambiarColorTextos() {
    document.getElementById("texto1").style.color = "red";
    document.getElementById("texto2").style.color = "blue";
}

// Evento mouseenter para cambiar tamaño del texto
document.getElementById("texto1").addEventListener("mouseenter", function () {
    this.style.fontSize = "35px";
});

document.getElementById("texto2").addEventListener("mouseenter", function () {
    this.style.fontSize = "35px";
});