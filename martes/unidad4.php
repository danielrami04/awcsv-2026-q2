<!DOCTYPE html>
<html>

<head>
    <title>Unidad 4</title>
</head>

<body>

    <?php
    $nombre = "Karol"; // global
    $apellido = "Leal";

    $edad = 36;
    $altura = 1.6;
    $esProfesor = true;

    const SALTO_LINEA = "<br>";
    const EDAD_MAYOR = 18;

    echo $nombre . " " . $apellido . SALTO_LINEA;
    echo $edad . SALTO_LINEA;



    function saludar()
    {
        $nombre = "Tatiana"; //local de la funcion
        echo $nombre . SALTO_LINEA;
    }

    saludar();

    if ($edad >= EDAD_MAYOR) {
        echo "Es mayor de edad" . SALTO_LINEA;
    } else {
        echo "Es menor de edad" . SALTO_LINEA;
    }


    if ($edad >= EDAD_MAYOR) {
        if ($esProfesor) {
            echo "Es mayor de edad y profesor" . SALTO_LINEA;
        } else {
            echo "Es mayor de edad y no es profesor" . SALTO_LINEA;
        }
    } else {
        if ($esProfesor) {
            echo "Es menor de edad y profesor" . SALTO_LINEA;
        } else {
            echo "Es menor de edad y no es profesor" . SALTO_LINEA;
        }
    }

    $semaforo = "verde";

    switch ($semaforo) {
        case 'verde':
            echo "Siga" . SALTO_LINEA;
            break;
        case 'amarillo':
            echo "Cuidado!" . SALTO_LINEA;
            break;
        case 'rojo':
            echo "Detengase!" . SALTO_LINEA;
            break;
        default;
            echo "Color no definido !" . SALTO_LINEA;
            break;
    }


    $mensaje = ($esProfesor) ? "Es profesor" : "No es profesor";
    echo $mensaje . SALTO_LINEA;

    $a = "10";
    $b = 10;

    //?? Es el mismo valor?

    if ($a == $b) {
        echo $a . " es el mismo valor que " . $b . SALTO_LINEA;
    }

    //?? Es el mismo valor Y tipo de dato?

    if ($a === $b) {
        echo $a . " es el mismo valor y tipo que " . $b . SALTO_LINEA;
    }


    //?? Son diferentes valores

    if ($a != $b) {
        echo $a . " es diferente valor que " . $b . SALTO_LINEA;
    }

    //?? Es diferente valor O tipo de dato?

    if ($a !== $b) {
        echo $a . " es diferente valor O tipo que " . $b . SALTO_LINEA;
    }


    if ($edad < EDAD_MAYOR) {
        echo "edad es menor que 18";
    }


    if ($edad >= EDAD_MAYOR && $esProfesor) {
        echo "Es mayor de edad y profesor" . SALTO_LINEA;
    }


    if ($edad < EDAD_MAYOR || $esProfesor) {
        echo "Es menor de edad o profesor" . SALTO_LINEA;
    }

    if ($edad >= EDAD_MAYOR && !$esProfesor) {
        echo "Es mayor de edad y no profesor" . SALTO_LINEA;
    }

    // hasta  un numero definido for
    //tabla del 5
    echo "Tabla del 5" . SALTO_LINEA;
    for ($i = 0; $i <= 10; $i++) {
        echo "5 X " . $i . " = " . ($i * 5) . SALTO_LINEA;
    }

    $edad = 28;
    while ($edad < 30) {
        $edad++;
        echo $edad . SALTO_LINEA;
    }
    //$edad = 28;
    do {
        $edad++;
        echo $edad . SALTO_LINEA;
    } while ($edad < 30);

    ?>

</body>

</html>