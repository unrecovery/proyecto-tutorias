<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/css.css" />
  <title>Registro de Estudiantes - CONALEP TABASCO</title>
</head>

<?php
include 'navbar_psp.php';
?>

<body>

  <div class="contenedor-fuera" style="padding-left:11%; margin-top:7%;">

    <div class="container">
      <h2>Registro de Estudiante</h2>
      <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
        <form>
          <div class="row">
            <div class="col">
              <label for="nombre" class="col-form-label">Nombre Completo:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre Estudiante">
            </div>
            <div class="col">
              <label for="matricula" class="col-form-label">Matricula:</label>
              <input type="text" class="form-control" id=matricula placeholder="Matricula">
            </div>
            <div class="col">
              <label for="nacimiento" class="col-form-label">Fecha de Nacimiento:</label>
              <input type="date" class="form-control" id="nacimiento" placeholder="Seleccione Fecha">
            </div>

            <div class=" col">
              <label for="curp" class="col-form-label">CURP</label>
              <input type="text" class="form-control" id="curp" placeholder="TOHA530902HSPRRN07">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="ciudad" class="col-form-label">Ciudad</label>
              <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
            </div>
            <div class="col">
              <label for="direccion" class="col-form-label">Direccion</label>
              <input type="text" class="form-control" id="direccion" placeholder="Nombre de Calle y Numero de calle">
            </div>
            <div class="col">
              <label for="municipio" class="col-form-label">Municipio</label>
              <input type="text" class="form-control" id="municipio" placeholder="Municipio">
            </div>
            <div class="col">
              <label for="estado" class="col-form-label">Estado</label>
              <input type="text" class="form-control" id="estado" placeholder="Estado">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="numero" class="col-form-label">Numero De Telefono</label>
              <input type="number" class="form-control" id="numeros" placeholder="Maximo 10 Digitos">
            </div>
            <div class="col">
              <label for="sexo" class="col-form-label">Sexo</label>
              <select class="form-select" name="sexo" id="sexo">
                <option value="no">Seleccione</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Distinto">Prefiero no Decirlo</option>
              </select>
            </div>
            <div class="col">
              <label for="carrera" class="col-form-label">Carrera</label>
              <select class="form-select" name="carrera" id="carrera" required>
                <option value="null">Seleccione</option>
                <option value="op1">Op1</option>

              </select>
            </div>
          </div>
          <br />
          <button type="submit" class="btn btn-primary click" id="click">Registrar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="../../jquery/jquery.mobile-1.4.5.min.js"></script>
  <script type="text/javascript" src="../../javascript\registroEstudiante.js"></script>
  <!--KEVIN GABRIEL RODRIGUEZ MAYO / UNRECOVERY.DZ / DYSTOPIA / DIXBEAT-->
</body>

</html>