<?php include 'includes/header.php';

//while
// primero revisa la condición antes de entrar al bucle
$numero = 0;

while ($numero < 10)
{
    echo $numero . ", "; // imprime el valor actual de la variable
    $numero++; // incrementa de 1 en 1
}

// do while
// ingresa al bucle primero y luego revisa la condición
echo "<br>";

$numero2 = 0;

do {
    echo $numero2 . ", "; // imprime el valor actual de la variable
    $numero2++; // incrementa de 1 en 1
} while ($numero2 < 10);

//for loop
echo "<br>";

for ($numero3 = 0; $numero3 < 10; $numero3++)
{
    echo $numero3 . ", ";
}

//ejemplo
/* Si el número actual es:
   - Múltiplo de 3 → imprimir Fizz
   - Múltiplo de 5 → imprimir Buzz
   - Múltiplo de 3 y 5 → imprimir Fizz Buzz
*/
echo "<br>";

for ($i = 1; $i < 20; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " - Fizz Buzz <br>";
    } else if ($i % 3 === 0) {
        echo $i . " - Fizz <br>";   
    } else if ($i % 5 === 0) {
        echo $i . " - Buzz <br>" ;
    }
}

// foreach: recorre un arreglo y ejecuta el bloque de código por cada elemento

$clientes = ["Pedro", "Lucas", "Lucia"];

// Recorre el arreglo $clientes, y en cada iteración almacena el valor en $c
foreach($clientes as $c)
{
    echo $c . "<br>"; // Muestra el valor de cada cliente
}

$client = [
    "nombre" => "Lucas",
    "saldo" => 200,
    "tipo" => "premium"
];

// Recorre el arreglo asociativo $client
// $key obtiene la clave y $valor obtiene el valor correspondiente
foreach($client as $key => $valor)
{
    echo $key . " - " . $valor . "<br>"; // Muestra clave y valor
}


include 'includes/footer.php';
?>
