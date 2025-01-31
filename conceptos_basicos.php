<?php
// COMENTARIOS
// Esto es un comentario de una línea
/* Esto es un comentario 
   de múltiples líneas */

// VARIABLES Y TIPOS DE DATOS
// String (texto)
$nombre = "Juan";
echo "Mi nombre es: " . $nombre . "<br>";

// Integer (números enteros)
$edad = 25;
echo "Mi edad es: " . $edad . "<br>";

// Float (números decimales)
$altura = 1.75;
echo "Mi altura es: " . $altura . " metros<br>";

// Boolean (verdadero/falso)
$esEstudiante = true;
echo "¿Es estudiante? " . ($esEstudiante ? "Sí" : "No") . "<br>";

// Array (arreglo/lista)
$colores = ["rojo", "azul", "verde"];
echo "Mi primer color favorito es: " . $colores[0] . "<br>";
   
// CONCATENACIÓN
$nombre = "María";
$apellido = "López";
// Hay dos formas de concatenar:
echo $nombre . " " . $apellido . "<br>";  // Usando punto
echo "$nombre $apellido<br>";             // Usando comillas dobles

// OPERADORES MATEMÁTICOS BÁSICOS
$numero1 = 10;
$numero2 = 5;

echo "Suma: " . ($numero1 + $numero2) . "<br>";
echo "Resta: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "División: " . ($numero1 / $numero2) . "<br>";
?>