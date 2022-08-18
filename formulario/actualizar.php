<?php
    include("cn.php");
    $id = $_GET["id"];
    $usuarios = "SELECT * FROM usuarios WHERE id = '$id'";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <form class="container-table container-table--edit" action="procesar_actualizar.php" method="post">
            <div class="table__title table__title--edit">Datos de destino sugerido</div>
            <div class="table__header">Nombre del destino</div>
            <div class="table__header">Descripción del destino</div>
            <div class="table__header">Dirección del destino</div>
            <div class="table__header">Teléfono de contacto</div>
            <div class="table__header">Operación</div>
            <?php $resultado = mysqli_query($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) {?>
                <input type="hidden" class="table__item" value="<?php echo $row ["id"];?>" name="id">
                <input type="text" class="table__input" value="<?php echo $row ["nombre"];?>" name="nombre">
                <input type="text" class="table__input" value="<?php echo $row ["descripcion"];?>" name="descripcion">
                <input type="text" class="table__input" value="<?php echo $row ["direccion"];?>" name="direccion">
                <input type="text" class="table__input" value="<?php echo $row ["telefono"];?>" name="telefono">
                <?php } mysqli_free_result($resultado);?>
                <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
        </form>
    </doby>
</html>