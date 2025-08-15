<?php include 'includes/header.php';

//creamos una fucion
function suma($num1, $num2) //colocamos parametros
{
    echo $num1 + $num2;
} 
//llamamos a la funcion
suma(100, 200); //podemos agregamos argumentos

echo "<br>";

suma(10, 2);

function saludar($nombre = "Invitado") {
    echo "Hola, $nombre";
}

echo "<br>";

saludar(); // Hola, Invitado
echo "<br>";
saludar("Lucas"); // Hola, Lucas


include 'includes/footer.php';
?>