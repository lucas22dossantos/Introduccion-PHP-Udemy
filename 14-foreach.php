<?php include 'includes/header.php';


$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
     ],
     [
        "nombre" => "Television 24",
        "precio" => 300,
        "disponible" => true
     ],
     [
        "nombre" => "Monitor Curvo",
        "precio" => 400,
        "disponible" => false
     ]

];

foreach( $productos as $producto){ ?>
    
    <li>
        <p>Producto: <?php echo $producto["nombre"]; ?> </p>
        <p>precio: <?php echo $producto["precio"]; ?> </p>
        <p>disponibilidad: <?php echo ($producto["disponible"]) ? "Disponible" : "No Disponible"; ?> </p>
    
    </li>
    
    
<?php
    // echo "<pre>";
    // var_dump($producto);
    // echo"</pre>";
}


include 'includes/footer.php';
?>