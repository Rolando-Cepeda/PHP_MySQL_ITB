<?php

/* 
    ARREGLOS EN PHP8
En PHP8, los arreglos(arrays) son una de las estructuras de datos
más importantes. Permiten almacenar múltiples valores dentro de
una sola variable.

Un array puede contener:
    - Números
    - Texto
    - Booleanos
    - Otros arrays
    - Obhetos

Esto convierte a PHP en un lenguaje flexible para trabajar con DATOS.
*/

// FOrma moderna(recomendada en PHP 8
$frutas = ["Manzana", "Banana", "Naranja"];
echo $frutas[0] . "<br>"; //Posición 0
echo $frutas[1] .  "<br>"; // Posición 1
echo $frutas[2] . "<br>"; // Posición 2

// Forma clásica
$numeros = array(10, 20, 30, 40);

//  TIPOS DE ARREGLOS.

// ****** Arreglos inexados(quiere decir que trabAjan mediante indices como 0, 1) ****
// Trabajan mediante índices.
echo "****** ARREGLOS INDEXADOS (quiere decir que trabajan con indices como 0, 1) ****  <br>";
$colores = ["Rojo", "Azul", "Negro"];
echo $colores[2] . "<br>";

// ******* ARREGLOS ASOCIATIVOS. - Los índices son nombres(claves) *********
// Trabaja con pares clave: valor
// Se utilizan para extraer información de una base de datos o enviar datos a la misma.
echo "******* ARREGLOS ASOCIATIVOS. - Los índices son nombres(claves) ********* <br>";
$persona = ["nombre" => "karla", "edad" => 25, "ciudad" => "La Paz"];
$persona_2 = [
    "nombre" => "Rolando",
    "edad" => "24",
    "ciudad" => "Riobamba"
];

echo $persona["nombre"] . "<br>";
echo $persona["ciudad"] . "<br>";

// ***********  ARREGLOS MULTIDIMENSIONALES  ***************************
// Son arreglos dentro de otros arreglos.
// Trabaja con índices.
echo "***********  ARREGLOS MULTIDIMENSIONALES  *************************** <br>";
$estudiantes = [
    ["Juan", 20],
    ["Karla", 19],
    ["Pedro", 22]
];
echo $estudiantes[1][0] . "<br>"; // Karla
echo $estudiantes[2][1] . "<br>"; // 22

// Recorrer ARREGLOS con foreach.
// El foreach es el más utilizado para recorrer arrrays.
/* foreach($array as $valor) {
    Usamos cualquier función para mostrar en la página.
    foreach recorre los valores, NO recorre los índices.
} */
echo "**********  Recorrer ARREGLOS con foreach.  ************* <br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "********** Utilizamos el condicional if ************** <br>";
foreach ($frutas as $fruta) {
    if ($fruta == "Banana") {
        echo $fruta . "<br>";
    }
}

//Recorrer ARREGLOS ASOCIATIVOS con foreach.
echo "**** Recorrer ARREGLOS ASOCIATIVOS con foreach. ***** <br>";
$edades = [
    "Juan" => 20,
    "Pedro" => 19,
    "Karla" => 22
];
foreach ($edades as $nombre => $edad) {
    echo $nombre . " tiene " . $edad . " años <br>";
}

// Como AGREGAR elementos a un Arreglo
// Métodos para manipular los ARRAYS.
// Cuando queremos mostrar todo el arreglo, utilizamos print_r(muestra índice y valor.)
// Cuando queremos mostrar UN SOLO ELEMENTO usamos echo.
echo "******** Como AGREGAR elementos a un Arreglo ****** <br>";
$edades_persona = [10, 20, 19, 18];
$edades_persona[] = 35;

print_r($edades_persona);
echo "<br>";

// Método array_push() Añade múltiples elementos a un ARRAY, devuelve el nuevo número de elementos del arreglo.
array_push($edades_persona, 17, 25);
print_r($edades_persona);
echo "<br>";
// ELIMINAR elementos de un arreglo array_pop(elimina el último elemento)
echo "ELIMINAR elementos de un arreglo array_pop(elimina el último elemento)  <br>";
array_pop($edades_persona);
print_r($edades_persona);
echo "<br>";
// ELIMINAR el PRIMER elemento de un array array_shift()
echo " ELIMINAR el <strong>PRIMER elemento</strong> de un array <strong>array_shift()</strong> <br>";
array_shift($edades_persona);
print_r($edades_persona);
echo "<br>";

// Eliminar un índice específico unset()
unset($edades_persona[2]);
print_r($edades_persona);
echo "<br>";
// Método count($array).- Se utiliza para contar cuantos elementros tiene un arreglo.
echo count($edades_persona);
echo "<br>";
// Método sort(). - Ordena un arreglo de manera ascendente.
sort($edades_persona);
print_r($edades_persona);
echo "<br>";
// Método rsort(). - Ordena un arreglo de manera descendente.
rsort($edades_persona);
print_r($edades_persona);

