<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Agregar jugadores</title>
</head>
<body>
<?php include("header.php") ?>
<style><?php include '/wamp64/www/curso_php_modulo_2_unidad_3/estilos.css'; ?></style>
<section class="jugador__contenido">
        <form action="agregar_jugadores.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="jugador__input">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="jugador__input">
            <label for="dorsal">Dorsal</label>
            <input type="number" name="dorsal" class="jugador__input">
            <label for="posicion">Posicion</label>
            <input type="text" name="posicion" class="jugador__input">
            <label for="edad">Edad</label>
            <input type="number" name="edad" class="jugador__input">
            <input type="submit" class="boton" value="AGREGAR JUGADOR">
        </form>
        <?php if (isset($_GET ['ok'])) {
            echo "<h3> El jugador ha sido enviado con éxito </h3>";
        }
        ?>
    </section>
<?php include("footer.php") ?>
</body>
</html>