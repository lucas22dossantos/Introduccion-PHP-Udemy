<?php include 'includes/header.php';

// Ejemplo de cómo PHP puede trabajar con JSON.
// JSON sirve para intercambiar información entre distintos lenguajes, 
// por ejemplo PHP y JavaScript.

// Creamos un arreglo con algunos productos
$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
     ],
     [
        "nombre" => "Televisión 24",
        "precio" => 300,
        "disponible" => true
     ],
     [
        "nombre" => "Monitor Curvo",
        "precio" => 400,
        "disponible" => false
     ]
];

echo "<pre>";

// Mostramos el arreglo normal de PHP
echo "=== Arreglo en PHP ===\n";
var_dump($productos);

// json_encode() -> Convierte un arreglo/objeto de PHP a formato JSON (texto plano)
echo "\n=== Convertido a JSON ===\n";
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);// Al usar JSON_UNESCAPED_UNICODE evitamos que los acentos o la ñ se conviertan en códigos raros (\u00f3).
var_dump($json);

// json_decode() -> Convierte un texto JSON a un arreglo/objeto de PHP
echo "\n=== JSON convertido de nuevo a arreglo de PHP ===\n";
$dejson = json_decode($json, true); // el 'true' hace que sea un arreglo asociativo
var_dump($dejson);

echo "</pre>";

include 'includes/footer.php';
?>
