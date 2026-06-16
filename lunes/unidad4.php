<!DOCTYPE html>
<html>

<head>
    <title>Unidad 3</title>
    <script src="./js/unidad3.js"></script>
</head>

<body>

    <?php

    echo "Hola mundo en PHP!";

    $nombre = "Karol";
    $edad = 36;
    $estatura = 1.6;
    $esProfesor = true;

    $edad = $edad + $estatura;

    const SALTO_LINEA = "<br>";

    const EDAD_MAYOR = 18;

    echo $nombre . " <b>" . $edad . "</b> " . $estatura . "<br> " . $esProfesor;


    /*
    function getNombre()
    {
        $nombre = "tatiana";
        echo $nombre . "local" . SALTO_LINEA;
    }

    getNombre();
    echo $nombre . "global" .    SALTO_LINEA;

    */

    $mensaje = ($edad >= EDAD_MAYOR) ? "Es Mayor de edad" : "Es menor de edad";
    echo $mensaje;
    echo SALTO_LINEA;


    if ($edad >= EDAD_MAYOR) {
        if ($esProfesor) {
            echo "Es Mayor de edad y profesor";
        } else {
            echo "Es Mayor de edad y no es profesor";
        }
    } else {
        if ($esProfesor) {
            echo "Es menor de edad y profesor";
        } else {
            echo "Es menor de edad y no es profesor";
        }
    }
    echo SALTO_LINEA;
    $semaforo = "verde";

    if ($semaforo == "verde") {
        echo "Siga!";
    } elseif ($semaforo == "amarillo") {
        echo "Cuidado!";
    } elseif ($semaforo == "rojo") {
        echo "Detengase!";
    } else {
        echo "Color no evaluado!";
    }
    echo SALTO_LINEA;
    $semaforo = "rojo";
    switch ($semaforo) {
        case "verde":
            echo "Siga!";
            break;
        case "amarillo":
            echo "Cuidado!";
            break;
        case "rojo":
            echo "Detengase!";
            break;
        default:
            echo "Color no evaluado!";
            break;
    }

    echo SALTO_LINEA;

    $a = 10;
    $b = "10";

    if ($a == $b) { // valor a es igual a b?  
        echo "a y b son de valor igual" . SALTO_LINEA;
    }

    if ($a === $b) { // valor y tipo a es igual a b?  
        echo "a y b son de valor y tipo igual" . SALTO_LINEA;
    }

    if ($a != $b) { //el valor de a es diferente b?
        echo "el valor de a es diferente a b" . SALTO_LINEA;
    }
    if ($a !== $b) { //el valor o el tipo de a es diferente b?
        echo "el valor o el tipo de a es diferente a b" . SALTO_LINEA;
    }


    if ($edad >= EDAD_MAYOR && $esProfesor) {
        echo "Es Mayor de edad y profesor";
    }
    echo SALTO_LINEA;

    if ($edad < EDAD_MAYOR || $esProfesor) {
        echo "Es menor de edad o es profesor";
    }

    echo SALTO_LINEA;

    if ($edad >= EDAD_MAYOR || !$esProfesor) {
        echo "Es mayor de edad o no es profesor";
    }

    echo SALTO_LINEA;


    // tabla del 5
    echo "TABLA DEL 5" . SALTO_LINEA;
    for ($i = 0; $i <= 10; $i++) {
        echo "5 x " . $i . " = " . ($i * 5) . SALTO_LINEA;
    }
    while ($edad < 40) {
        $edad++;
        echo $edad . SALTO_LINEA;
    }
    // do while 
    echo $edad . SALTO_LINEA;
    do {
        $edad++;
        echo $edad . SALTO_LINEA;
    } while ($edad < 10);


    ?>
</body>

</html>