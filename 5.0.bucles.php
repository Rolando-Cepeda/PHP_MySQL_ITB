<?php
/* 
    ESTRUCTURAS REPETITIVAS
Los bucles (loops) en PHP 8 ejecutan un bloque de código
varias veces, mientras la condición sea verdad, cuando la condición sea
falsa saldrá del bucle.

En PHP 8 existen 4 estructuras principales de bucles.
    - while
    - do while
    - for
    - foreach(se puede decir que es un derivado del for)*
        - Se utiliza para: datos MySQL, Listas, arrays, JSON
Además existen instrucciones de control de bucles como:
    - break
    - continue

*/

// ******* WHILE *******
// 1 2 3 4 5 6 7 8 9 10
$n = 1;
while ($n <= 10) {
    echo $n . "/-\ ";
    $n++; // la variable $n se incrementa en la unidad.
}
echo "<br>";
// 10 9 8 7 6 5 4 3 2 1
$n2 = 10;
while ($n2 >= 1) {
    echo $n2 . " - ";
    $n2--;
}

echo "<br>";
// ******* DO WHILE *******
$x = 1;
do {
    echo $x . " ";
    $x++;
} while($x <= 10);

echo "<br>";
// ******* FOR *******
// for(inicialización; condición;inc/dec)
for($i=1; $i <=10; $i++) {
    echo $i . " * ";
}

echo "<br>";
// Palabras clave break y continue
for($j=1; $j <= 10; $j++) {
    if($j == 5) {
        //break;// rompe la estructura(while, do while, for)
        continue; // Salta a la siguiente iteración.
    }
    echo $j . "-*-";
}
?>