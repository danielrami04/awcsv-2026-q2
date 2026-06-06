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