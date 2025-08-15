<?php include 'includes/header.php';

// Función con tipo de retorno nullable (?string)
function usuarioA(bool $autenticado) : ?string  
{
    if ($autenticado) {
        return "Usuario autenticado";
    } else {
        return "No autenticado";
    }
}

$usuario = usuarioA(false);
echo $usuario;

echo "<br>";

// Función con unión de tipos en el retorno (int|string)
function obtenerDato(): int|string {
    // Devuelve un número o un texto aleatoriamente
    return rand(0,1) ? 42 : "cuarenta y dos";
}

echo "Dato obtenido: " . obtenerDato();
echo "<br>";

// Función pura: devuelve un valor sin afectar nada externo
function funcionPura(int $numero): int {
    return $numero * 2;
}
echo "Función pura (doble de 5): " . funcionPura(5);
echo "<br>";

// Función con efecto secundario: imprime directamente
function funcionConEfectoSecundario(string $mensaje) {
    echo "Mensaje: $mensaje";
}
funcionConEfectoSecundario("Hola desde la función");
echo "<br>";

// Función de orden superior (recibe otra función como parámetro)
function aplicar($valor, callable $funcion) {
    return $funcion($valor);
}
echo "Orden superior (triple de 4): " . aplicar(4, fn($n) => $n * 3);
echo "<br>";

// Closure con 'use' para capturar variables externas
$saludo = "Hola";
$saludar = function($nombre) use ($saludo) {
    return "$saludo, $nombre";
};
echo $saludar("Lucas");
echo "<br>";

// Funciones dentro de una clase
class Calculadora {
    public static function multiplicar(int $a, int $b): int {
        return $a * $b;
    }

    public function restar(int $a, int $b): int {
        return $a - $b;
    }
}

echo "Multiplicación estática: " . Calculadora::multiplicar(3, 4);
echo "<br>";

$calc = new Calculadora();
echo "Resta: " . $calc->restar(10, 4);

include 'includes/footer.php';
?>
