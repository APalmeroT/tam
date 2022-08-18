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
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>

        <div class="container-table">
            <div class="table__title">Tabla de sugerencias activas<a href="edicion.php" class="title_edit">Edición</a></div>
            <div class="table__header">Nombre del destino</div>
            <div class="table__header">Teléfono de contacto</div>
            <div class="table__header">Dirección del destino</div>
            <div class="table__header">Descripción del destino</div>
            <?php $resultado = mysqli_query($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) {?>
                <div class="table__item"><?php echo $row["nombre"];?></div>
                <div class="table__item"><?php echo $row["telefono"];?></div>
                <div class="table__item"><?php echo $row["direccion"];?></div>
                <div class="table__item"><?php echo $row["descripcion"];?></div>
                <?php } mysqli_free_result($resultado);?>
        </div>
    </doby>
</html>