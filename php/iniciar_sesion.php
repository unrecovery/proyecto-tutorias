<?php
error_reporting(0);
include '../modelo/con_db.php';
session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
$consulta_usuario = "SELECT * FROM usuario WHERE usuario='$_SESSION[usuario]'AND password='$_SESSION[password]'";
$resultado = mysqli_query($conexion, $consulta_usuario);
$verifica = mysqli_fetch_array($resultado);

if ($verifica) {
  echo true;
} else {
  echo false;
  session_destroy();
}
mysqli_free_result($resultado);
mysqli_close($conexion);
// Kevin Gabriel Rodriguez Mayo / UNRECOVERY.DZ / DYSTOPIA / DIXBEAT / ARTEMIS
