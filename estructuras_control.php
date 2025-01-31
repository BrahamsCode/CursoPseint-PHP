<?php
// ESTRUCTURAS DE CONTROL

// 1. IF - ELSE (Condicionales)
$edad = 18;

if ($edad >= 18) {
    echo "Eres mayor de edad<br>";
} else {
    echo "Eres menor de edad<br>";
}

// También existe el elseif para múltiples condiciones
$nota = 85;

if ($nota >= 90) {
    echo "Sobresaliente<br>";
} elseif ($nota >= 80) {
    echo "Notable<br>";
} elseif ($nota >= 70) {
    echo "Bien<br>";
} else {
    echo "Necesitas mejorar<br>";
}

// 2. SWITCH (para múltiples casos específicos)
$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Primer día de la semana<br>";
        break;
    case "martes":
        echo "Segundo día de la semana<br>";
        break;
    default:
        echo "Otro día de la semana<br>";
}

// 3. WHILE (bucle mientras)
$contador = 1;
while ($contador <= 5) {
    echo "Número: " . $contador . "<br>";
    $contador++;  // Incrementa el contador
}

// 4. FOR (bucle con contador)
for ($i = 1; $i <= 5; $i++) {
    echo "Vuelta número: " . $i . "<br>";
}

// 5. FOREACH (para recorrer arrays)
$frutas = ["manzana", "pera", "plátano"];
foreach ($frutas as $fruta) {
    echo "Me gusta la " . $fruta . "<br>";
}

// Con índice
foreach ($frutas as $indice => $fruta) {
    echo "Fruta " . $indice . ": " . $fruta . "<br>";
}
?>