window.onload = function () {

    let btnTitulo = document.getElementById("btnTitulo");
    let btnImagen = document.getElementById("btnImagen");
    let btnTamanno = document.getElementById("btnTamanno");
    let btnColor = document.getElementById("btnColor");

    let titulo = document.getElementById("titulo");
    let imagen = document.getElementById("imagen");
    let texto1 = document.getElementById("Bienvenidos");
    let texto2 = document.getElementById("Práctica semanal de JavaScript");

    // Cambiar título
    btnTitulo.addEventListener("click", function () {
        titulo.innerHTML = "Título Modificado con JavaScript";
    });

    // Cambiar imagen
    btnImagen.addEventListener("click", function () {
        imagen.src = "https://picsum.photos/400";
    });

    // Cambiar tamaño de imagen
    btnTamanno.addEventListener("click", function () {
        imagen.style.width = "400px";
    });

    // Cambiar colores de los textos
    btnColor.addEventListener("click", function () {
        texto1.style.color = "red";
        texto2.style.color = "blue";
    });

    // Mouse Enter sobre texto 1
    texto1.addEventListener("mouseenter", function () {
        texto1.style.fontSize = "35px";
    });

    // Mouse Enter sobre texto 2
    texto2.addEventListener("mouseenter", function () {
        texto2.style.fontSize = "35px";
    });

    console.log("Práctica 5 cargada correctamente");
};