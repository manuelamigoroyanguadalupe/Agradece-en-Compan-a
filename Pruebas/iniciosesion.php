<?php
session_start();
include 'conexion.php';

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

$sql = 'SELECT idAlumno FROM alumno
WHERE correo="'.$usuario.'"
AND contrasena="' .$contrasena. '";';

echo $sql;
echo '<br/>';

$resultado = $conexion->query ($sql);
if ($resultado->num_rows > 0){
  $fila=$resultado->fetch_array();
  $conexion->close;

  $_SESSION['id] = $fila["idAlumno"];
 
}

?>
