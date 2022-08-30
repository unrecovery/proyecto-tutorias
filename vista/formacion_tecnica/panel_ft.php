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

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/css.css" />
  <title>Planteles - </title>
</head>
<?php
include 'navbar_ft.php';
?>


<body>
  <!--Tabla de consulta de planteles-->
  <div class="contenedor-fuera" style="padding-left:10%;">
    <div class="container mt-4">
      <h2>Informacion de los Grupos Plantel: Villahermosa I </h2>

      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Grupo</th>
            <th>Carrera</th>
            <th>PSP Responsable</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>201-CONS18</td>
            <td>CONTABILIDAD</td>
            <td>SANDY CRISTELL AGUILAR REYNA</td>
            <td>Botones</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>