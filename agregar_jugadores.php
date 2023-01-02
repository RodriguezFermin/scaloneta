<?php
$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$dorsal_form = $_POST ['dorsal'];
$posicion_form = $_POST ['posicion'];
$edad_form = $_POST ['edad'];


// Conexion a base de datos;

$conexion = mysqli_connect('localhost', 'root', '', 'curso_php_inicial') or exit ("No se pudo conectar");

mysqli_query($conexion, "INSERT INTO jugadores VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$dorsal_form', '$posicion_form','$edad_form')");

$conexion->close();

header('Location: agregar.php?ok');

?>