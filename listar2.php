<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Listar</title>
</head>
<body>    
<?php include("header.php") ?>
<style><?php include '/wamp64/www/curso_php_modulo_2_unidad_3/estilos.css'; ?></style>
<h2>Lista de jugadores</h2>
    <table>
        <tr>
        <th>Nombre    </th>
        <th>Apellido    </th>
        <th>Dorsal    </th>    
        <th>Posicion    </th>
        <th>Edad    </th>
        </tr>
        <?php foreach ($listaJugadores as $tmp) {?>				
            <tr>
            <form action="eliminar_jugadores.php" method="POST">
                <td><?php echo $tmp['nombre']?></td>
                <td><?php echo $tmp['apellido']?></td>
                <td><?php echo $tmp['dorsal']?><label for="dorsal"></label><input type="hidden" name="dorsal" class="jugador__input" value="<?php echo $tmp['dorsal']?>"></td>
                <td><?php echo $tmp['posicion']?></td>
                <td><?php echo $tmp['edad']?></td>
                <td> <input type="submit" class="boton" value="ELIMINAR JUGADOR"></td>
            </form>
            </tr>
            <?php } ?>
    </table>
<?php include("footer.php") ?>
</body>
</html>