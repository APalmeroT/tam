<?php
include ("cn.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$insertar = "INSERT INTO usuarios(nombre, descripcion, direccion, telefono) VALUES ('$nombre', '$descripcion', '$direccion', '$telefono')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
  echo "<script>alert('Gracias por sugerir un destino, ha sido registrado y pronto se tomara a consideración'); window.location='/tamaolipas/LOGIN/welcome.php'</script>";
} else {
  echo "<script>alert('error al realizar el registro, revise los datos ingresados');window.history.go(-1);</script>";
}