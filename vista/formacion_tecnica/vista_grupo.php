<?php

include '../../modelo/con_db.php';
session_start();
$validar = $_SESSION['usuario'];
if ($validar == null || $validar == '') {
  header(
    'location:index.html'
  );
  die();
}

$resultado = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$validar' ");
$fila = mysqli_fetch_array($resultado);
