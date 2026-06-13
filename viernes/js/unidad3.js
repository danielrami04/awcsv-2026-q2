let nombreEstudiante = "Karol Leal" + " Rojas";
let edad = 36;
let altura = 1.6;
let esEstudiante = true;

let hobbies = ["leer", "tejer", "ver netflix"];
let persona = {
    nombre: "Karol",
    edad: 36,
    altura: 1.6,
    esEstudiante: true
};

const edadMayor = 18;

console.log(nombreEstudiante);
console.log(edad);
console.log(altura);
console.log(esEstudiante);
console.log(hobbies);
console.log(persona);

console.log(persona.nombre);
console.log(hobbies[2]);


// let vrs var

/* let no me permite redeclaraciones
let fruta = "manzana";
let fruta = "melon";

console.log(fruta);
*/
/* var permite dar un error de undefined no se cae con let si
console.log(fruta);
let fruta = "melon";
*/

/* var primero de redeclarar pero ademas le cae encima aunque un bloque aparte */
let fruta = "pera";// Globales
if (true) {
    let fruta = "melon"; // local salida:melon
    console.log(fruta);
}

console.log(fruta); // global salida :pera


console.log(nombreEstudiante.toUpperCase());
console.log(altura.toFixed(6));

let mensaje = "";

if (edad >= edadMayor) {
    mensaje = "Es mayor de edad"
} else {
    mensaje = "Es menor de edad";
}
console.log(mensaje);

mensaje = (edad >= edadMayor) ? "Es mayor de edad" : "Es menor de edad";
console.log(mensaje);

if (edad >= edadMayor) {
    if (esEstudiante) {
        mensaje = "Es mayor de edad y estudiante"
    } else {
        mensaje = "Es menor de edad y no estudiante";
    }
} else {

    if (esEstudiante) {
        mensaje = "Es menor de edad y estudiante"
    } else {
        mensaje = "Es menor de edad y no estudiante";
    }
}

console.log(mensaje);
let semaforo = "verde";

if (semaforo == "verde") {
    console.log("siga!");
} else if (semaforo == "amarillo") {
    console.log("cuidado!");
} else if (semaforo == "rojo") {
    console.log("detengase!")
} else {
    console.log("no existe color!");
}

switch (semaforo) {
    case 'verde':
        console.log("siga!");
        break;
    case 'amarillo':
        console.log("cuidado");
        break;
    case 'rojo':
        console.log("detengase!");
        break;
    default:
        console.log("no existe color!");
        break;
}


for (let i = 0; i <= 10; i++) {
    console.log(i);
}

for (let i = 0; i < hobbies.length; i++) {
    console.log(hobbies[i]);
}

hobbies.forEach(hobbie => {
    console.log(hobbie);
});

for (let i in hobbies) {
    console.log(hobbies[i]);
}

while (edad < 40) {
    edad++;
    console.log(edad, "WHILE");
}

do {
    edad++;
    console.log(edad, "DO WHILE");
} while (edad < 20);

function sumar(numero1, numero2) {
    return numero1 + numero2;
}

let total = sumar(5, 6);
console.log(total);

function saludar() {
    console.log("Hola");
}

saludar();


document.addEventListener("DOMContentLoaded", function () {

    // etiqueta
    let h2 = document.querySelector("h2");
    console.log(h2);

    h2.style.fontSize = "40";
    h2.innerText = "Nuevo texto";
    /*
    // id
    let tareaInput = document.getElementById("tarea");
    //tareaInput.value = "Nueva tarea";
    console.log(tareaInput.value);

    tareaInput = document.querySelector("#tarea");
    //tareaInput.value = "Nueva tarea";
    console.log(tareaInput.value);
 */
    //clase
    let clase = document.querySelectorAll(".grupoClase");
    console.log(clase);

    clase.forEach(element => {
        element.style.color = "red";
    });


    let newImagen = document.createElement("img");
    newImagen.src = "./images/banner.jpg";

    let body = document.body;

    body.appendChild(newImagen);

    h2.style.color = "blue";

    let btnAgregar = document.getElementById("btnAgregar");

    let contador = 2;

    btnAgregar.addEventListener("click", function () {
        let tareaInput = document.getElementById("tarea");
        let tarea = tareaInput.value;
        let mensaje = document.getElementById("mensaje");
        let listaTarea = document.getElementById("listaTareas");
        if (contador <= 5) {
            if (tarea == "") {
                tareaInput.style.borderColor = "red";
                mensaje.innerText = "Campo obligatorio!";

            } else {
                tareaInput.style.borderColor = "black";
                let nuevaTareaLi = document.createElement("li");
                nuevaTareaLi.innerText = tarea;
                nuevaTareaLi.style.color = "red";
                listaTarea.appendChild(nuevaTareaLi);
                tareaInput.value = "";
                nuevaTareaLi.dataset.tarea = contador++;
                mensaje.innerText = "Tarea agregada!";


            }
        } else {
            mensaje.innerText = "Maximo 5";
        }


        setTimeout(() => {
            mensaje.innerText = "";
        }, 2000);
    })
    /*
    let btnSeleccionar = document.getElementById("btnSeleccionar");
    btnSeleccionar.addEventListener("click", function(){
        let seleccionarUL = document.querySelectorAll("ul li");
        console.log(seleccionarUL);
        let total = 0;
        seleccionarUL.forEach(li => {
            total += parseInt(li.innerText);
            console.log(total);
        });
    })

    */
    listaTareas.addEventListener("click", function (event) {

        const id = event.target.dataset.tarea;
        const tarea = event.target.innerText;
        console.log(`ID: ${id} - Tarea: ${tarea}`);
    });


})