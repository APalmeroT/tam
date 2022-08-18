<body background="bg.jpg"
    style="text-aling: center;"

>
<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <?php echo "<h1>Saludos " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php" >Cerrar sesión</a>
    <br>
    <a href="..//index.php">Volver a inicio</a>
    <br>
    <a href="../formulario/index.php">Sugerir destino</a>
    <br>
    <a href="../formulario/sugact.php">Revisar sugerencias activas</a>
    </div>
</body>
</html>