<?php include 'includes/header.php';

    // Las variables en PHP siempre empiezan con el signo $
    $nombre = "Lucas";
    $edad = 25;

    // Mostrar el contenido de las variables
    echo "Nombre: $nombre ";
    echo "Edad: $edad";

    // var_dump muestra tipo de dato y valor (útil para debug)
    var_dump($nombre);

    // ------------------------------
    // Constantes en PHP
    // ------------------------------

    // Las constantes se definen con define() o con la palabra clave const
    // No llevan el signo $ al usarlas
    // Una vez definidas, no se pueden modificar

    define("constante", "10"); // define() se usa fuera de clases
    echo constante;

    const constante2 = "Hola"; // const se puede usar dentro o fuera de clases
    echo constante2;

include 'includes/footer.php';
?>