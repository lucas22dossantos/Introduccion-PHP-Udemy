<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

//if simple
if($autenticado || $admin){
    echo "Acceso concedido: usuario autenticado.";
}else{
    echo "Acceso denegado: usuario no autenticado.";
}

echo "<br>";

//if anidado

$cliente = [
    "nombre" => "Lucas",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "Premium"
    ]
];

//si el array cliente no está vacío, ingresa al if
if(!empty($cliente)){ 
   
    echo "cliente no esta vacio";

    if($cliente["saldo"] > 0){
        echo "<br>";
        echo " El cliente tiene saldo disponible.";
    }else{
        echo "<br>";
        echo "El cliente no tiene saldo.";
    }
}else
{
     echo "cliente esta vacio";
}

//else if
if($cliente["saldo"] > 0)
{
    echo "<br>";
    echo "Saldo positivo en la cuenta del cliente.";
}else if( $cliente["informacion"]["tipo"] === "Premium")
{
    echo "El cliente pertenece a la categoría Premium.";
}else
{
    echo "Cliente sin saldo o no clasificado como Premium.";
}

//switch
$tecnologia = "PHP";

echo "<br>";
switch ($tecnologia) {
    case "PHP":
        echo "PHP: lenguaje popular para desarrollo web.";
        break;

    case "JavaScript":
        echo "JavaScript: lenguaje usado en el lado del cliente y servidor.";
        break;
    
    case "HTML":
        echo "HTML: lenguaje de marcado para estructurar contenido web.";
        break;

    default:
        echo "Lenguaje no reconocido en este ejemplo.";
        break;
}

include 'includes/footer.php';
?>
