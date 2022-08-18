<?php
include ("cn.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

//actualizar los datos
$actualizar = "UPDATE usuarios SET nombre='$nombre', descripcion='$descripcion', direccion='$direccion', telefono='$telefono' WHERE id='$id'";


$resultado = mysqli_query($conexion, $insertar);


if($resultado) {
    echo "<script>alert('Se han actulizado los datos con exito'); window.location='/tamaolipas/formulario/edicion.php'</script>";
  } else {
    echo "<script>alert('no se pudo actualizar');window.history.go(-1);</script>";
  }