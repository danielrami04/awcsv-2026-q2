<!DOCTYPE html>
<html>

<head>
    <title>Tarea PHP</title>
</head>

<body>

<?php

const SALTO_LINEA = "<br>";

// ==============================
// DECLARACIÓN DE VARIABLES
// ==============================

$nombre = "Daniel";
$apellido = "Ramirez";
$direccion = "San José";
$hobbie = "Gimnasio";
$colorFavorito = "Azul";
$leGustaLeer = true;

echo "<h3>Información Personal</h3>";

echo "<ul>";
echo "<li>Nombre: " . $nombre . "</li>";
echo "<li>Apellido: " . $apellido . "</li>";
echo "<li>Dirección: " . $direccion . "</li>";
echo "<li>Hobbie: " . $hobbie . "</li>";
echo "<li>Color Favorito: " . $colorFavorito . "</li>";
echo "<li>¿Le gusta leer?: " . ($leGustaLeer ? "Sí" : "No") . "</li>";
echo "</ul>";


// ==============================
// CONDICIONALES
// ==============================

echo "<h3>Condicionales</h3>";

$edad = 20;

if ($edad >= 18) {
    echo "Es mayor de edad" . SALTO_LINEA;
} else {
    echo "Es menor de edad" . SALTO_LINEA;
}


// Nota
$nota = 85;

if ($nota > 90) {
    echo "A" . SALTO_LINEA;
} elseif ($nota >= 70) {
    echo "B" . SALTO_LINEA;
} else {
    echo "C" . SALTO_LINEA;
}


// Calculadora
$numero1 = 10;
$numero2 = 5;
$operador = "*";

switch ($operador) {

    case "+":
        echo $numero1 . " + " . $numero2 . " = " . ($numero1 + $numero2) . SALTO_LINEA;
        break;

    case "-":
        echo $numero1 . " - " . $numero2 . " = " . ($numero1 - $numero2) . SALTO_LINEA;
        break;

    case "*":
        echo $numero1 . " * " . $numero2 . " = " . ($numero1 * $numero2) . SALTO_LINEA;
        break;

    case "/":
        echo $numero1 . " / " . $numero2 . " = " . ($numero1 / $numero2) . SALTO_LINEA;
        break;

    default:
        echo "Operador inválido" . SALTO_LINEA;
        break;
}


// ==============================
// OPERADORES
// ==============================

echo "<h3>Operadores</h3>";

$num1 = 25;
$num2 = 50;
$num3 = 15;

// Mayor de tres números

if ($num1 > $num2 && $num1 > $num3) {
    echo "El mayor es: " . $num1 . SALTO_LINEA;
} elseif ($num2 > $num3) {
    echo "El mayor es: " . $num2 . SALTO_LINEA;
} else {
    echo "El mayor es: " . $num3 . SALTO_LINEA;
}


// Clasificación de edad

$edadPersona = 30;

if ($edadPersona < 13) {
    echo "Niño" . SALTO_LINEA;
} elseif ($edadPersona < 18) {
    echo "Adolescente" . SALTO_LINEA;
} elseif ($edadPersona < 65) {
    echo "Adulto" . SALTO_LINEA;
} else {
    echo "Adulto Mayor" . SALTO_LINEA;
}


// Validar contraseñas

$contrasena1 = "123456";
$contrasena2 = "123456";

if ($contrasena1 === $contrasena2) {
    echo "Las contraseñas son iguales" . SALTO_LINEA;
} else {
    echo "Las contraseñas son diferentes" . SALTO_LINEA;
}


// ==============================
// FOR, WHILE Y DO WHILE
// ==============================

echo "<h3>For, While y Do While</h3>";


// Pares del 1 al 20 (while)

$contador = 1;

echo "Números pares del 1 al 20:" . SALTO_LINEA;

while ($contador <= 20) {

    if ($contador % 2 == 0) {
        echo $contador . SALTO_LINEA;
    }

    $contador++;
}


// Tabla del 7

echo SALTO_LINEA;
echo "Tabla del 7" . SALTO_LINEA;

for ($i = 1; $i <= 10; $i++) {

    echo "7 x " . $i . " = " . ($i * 7) . SALTO_LINEA;
}


// Contar del 20 al 0

echo SALTO_LINEA;
echo "Contando del 20 al 0" . SALTO_LINEA;

$numero = 20;

do {

    echo $numero . SALTO_LINEA;
    $numero--;

} while ($numero >= 0);

?>

</body>

</html>