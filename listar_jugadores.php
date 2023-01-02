<?php
$conexion = mysqli_connect('localhost', 'root', '', 'curso_php_inicial') or exit ("No se pudo conectar");
$select = mysqli_query($conexion, "SELECT * FROM jugadores");
$jugadores = mysqli_fetch_all($select, MYSQLI_ASSOC);

foreach ($jugadores as $jugador) {
    $tmp['id_jugador'] = $jugador['id_jugador'];
    $tmp['nombre'] = $jugador['nombre'];
    $tmp['apellido'] = $jugador['apellido'];
    $tmp['dorsal'] = $jugador['dorsal'];
    $tmp['posicion'] = $jugador['posicion'];
    $tmp['edad'] = $jugador['edad'];
    $listaJugadores[] = $tmp;
}
$conexion->close();

require_once('/wamp64/www/curso_php_modulo_2_unidad_3/listar2.php');

?>
