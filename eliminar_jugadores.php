<?php
$dorsal_form = $_POST ['dorsal'];

$conexion = mysqli_connect('localhost', 'root', '', 'curso_php_inicial') or exit ("No se pudo conectar");

mysqli_query($conexion, "DELETE FROM jugadores WHERE dorsal = '$dorsal_form'");

$conexion->close();

require_once('/wamp64/www/curso_php_modulo_2_unidad_3/listar_jugadores.php');
?>