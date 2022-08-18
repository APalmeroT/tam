<?php

    include("cn.php");
    $usuarios = "SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pagina principal</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../formulario/estilos.css">
    </head>
    <body>
        <div class="container-add">
            <h2 class="container__title">Registro de destinos</h2>
            <form action="insertar.php" method="post" class="container__from">
                <label for="" class="container__label">Nombre del destino:</label>
                <br>
                <input name="nombre" type="text" class="container__input">
                <br>
                <label for="" class="container__label">Teléfono de contacto:</label>
                <br>
                <input name="telefono" type="number" class="container__input">
                <br>
                <label for="" class="container__label">Dirección del destino:</label>
                <br>
                <input name="direccion" type="text" class="container__input">
                <br>
                <label for="" class="container__label">Descripción del destino:</label>
                <br>
                <input name="descripcion" type="text" class="container__input">
                <br>
                <input class="container__submit"type="submit" value="Registrar">
            </form>
        </div>

    </doby>
</html>