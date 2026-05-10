<?php
/* 
SISTEMA DE CLASIFICACIÓN DE ESTUDIANTES POR NOTAS.

    Nota                Resultado
----------------------------------------------
    90-100               Exelente
    70-89               Bueno
    60-69               Regular
    <60                 Reprobado
*/

/* $nota = 200;
if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 70) {
    echo "Bueno";
} elseif ($nota >= 60) {
    echo "Regular";
} else {
    echo "Reprobado";
} */

$nota = $_GET["nota"] ?? "";

if ($nota >= 90) {
    echo "Estudiante excelente";
} elseif ($nota >= 70) {
    echo "Estudiante Bueno";
} elseif ($nota >= 60) {
    echo "Estudiante Regular";
} else {
    echo "Estudiante Reprobado";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO_1</title>
</head>

<body>
    <h1>SISTEMA DE CLASIFICACIÓN DE ESTUDIANTES POR NOTAS.</h1>
    <form action="ejercicio_1.php" method="GET">
        <label for="">Ingrese la Nota: </label>
        <input type="number" name="nota">
        <br>
        <button type="submit">Verificar</button>
    </form>
</body>

</html>