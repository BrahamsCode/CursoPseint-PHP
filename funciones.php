<?php
// FUNCIONES EN PHP

// 1. Función básica sin parámetros
function saludar() {
    echo "¡Hola mundo!<br>";
}
// Llamar a la función
saludar();

// 2. Función con parámetros
function saludarPersona($nombre) {
    echo "¡Hola " . $nombre . "!<br>";
}
saludarPersona("Juan");

// 3. Función con múltiples parámetros
function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}
$resultado = sumar(5, 3);
echo "La suma es: " . $resultado . "<br>";

// 4. Función con parámetros por defecto
function mostrarInfo($nombre, $edad = 25) {
    echo "Nombre: " . $nombre . ", Edad: " . $edad . "<br>";
}
mostrarInfo("Ana");        // Usará la edad por defecto
mostrarInfo("Pedro", 30);  // Usará la edad proporcionada

// 5. Función que retorna múltiples valores usando array
function calcularOperaciones($num1, $num2) {
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    return [
        "suma" => $suma,
        "resta" => $resta
    ];
}

$operaciones = calcularOperaciones(10, 5);
echo "Suma: " . $operaciones["suma"] . "<br>";
echo "Resta: " . $operaciones["resta"] . "<br>";

// 6. Función con tipo de datos (PHP 7+)
function multiplicar(int $a, int $b): int {
    return $a * $b;
}
echo "Multiplicación: " . multiplicar(4, 3) . "<br>";

// 7. Funciones con variables globales
$mensaje = "mensaje global";
function mostrarMensajeGlobal() {
    global $mensaje;  // Declarar acceso a variable global
    echo $mensaje . "<br>";
}
mostrarMensajeGlobal();
?>