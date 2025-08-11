<?php include 'includes/header.php';

$carrito = ["tablet", "televicion", "computadora"];

//util para ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


//acceder a un elemento de un array
echo"<br/>";
echo $carrito[2];
echo"<br/>";


//agregamos un nuevo elemento al array en el indice 3
$carrito[3] = "Nuevo Producto";
echo $carrito[3];
echo"<br/>";

//agregamos un elemento al final
array_push($carrito, "Ultimo elemento");
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//agregamos un elemento al inicio
array_unshift($carrito, "Primer elemento");
echo "<pre>";
var_dump($carrito);
echo "</pre>";

include 'includes/footer.php';

?>