<?php

$nombres = ["Rolando", "Ana", "Karla"];
foreach ($nombres as $name) {
    echo $name . "<br>";
}
echo $nombres[0] . "<br>";
echo "****  Arreglos Asociativos ******* <br>";

$persona = ["nombre" => "Rolando", "edad" => 42, "ciudad" => "Madrid"];
echo $persona["ciudad"] . "<br>";

echo "****  Arreglos Multidimensionales ******* <br>";
$estudiantes = [
    ["Juan", 20],   // 1 fila de columnas
    ["Karla", 19],  // 2 fila de columnas
    ["Pedro", 22]   // 3 fila de columnas
];
echo $estudiantes[2][0] . "<br>";
echo "Mi nombre es " . $estudiantes[0][0] . " y mi edad es: " . $estudiantes[0][1] . "<br>";

echo "****  Recorrer Arreglos ******* <br>";
$frutas = ["Manzana", "Banana", "Naranja"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "****  Recorrer Arreglos Asociativos ******* <br>";
$vecinos = [
    "Rolando" => 42,
    "Génesis" => 24,
    "Santiago" => 18
];
foreach ($vecinos as $nombre => $edad) {
    echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años. <br>";
}

echo "***** Agregar elementos a un ARREGLO. *******<br> ";
$edades_persona = [10, 20, 30, 40, 50];
print_r($edades_persona);
echo "<br>";
$edades_persona[] = 18;
print_r($edades_persona);
echo "<br>";

echo "************ Añadir elementos a un ARRAY ***********";
array_push($edades_persona, 17, 16);
print_r($edades_persona);
echo "<br>";

echo "************ Elimina el último elemento de un ARRAY ***********";
array_pop($edades_persona);
print_r($edades_persona);
echo "<br>";

echo "************ Elimina el primero elemento de un ARRAY ***********";
array_shift($edades_persona);
print_r($edades_persona);
echo "<br>";

echo "**** unset - Elimina un índice específico. ********";
unset($edades_persona[2]);
print_r($edades_persona);

echo "<br>";
echo count($edades_persona);