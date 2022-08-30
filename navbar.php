<!-- Barra de navegacion superior-->
<header>
  <div class="header">
    <ul>
      <li style="float:left;"><img class="active" src="https://0201.nccdn.net/4_2/000/000/046/6ea/LogoConalepTabasco-Horiz.jpg#RDAMDAID27061963" alt="Logo conalep"></li>-->
      <li><a style="background-color: #e10000;" href="finalizar_sesion.php">Cerrar Sesion</a></li>
      <li><a href="panel.php">Inicio</a></li>
    </ul>
  </div>
</header>
<!-- Contenedor barra lateral de datos de usuario en sesion-->
<div class="contenedor_usuario">
  <div class="contenedor">
    <div class="informacion">
      <div class="datos">
        <ul class="informacion-texto">
          <li>
            <h3><?php echo $fila['nombre_datos']; ?></h3>
          </li>
          <li>
            <h5><?php if ($fila['id_rol'] == 1) {
                  echo ("Docente");
                } else {
                  if ($fila['id_rol'] == 2) {
                    echo ("Formacion Tecnica");
                  } else {
                    echo ("Titular");
                  }
                }; ?></h5>
          </li>
          <li>

          </li>

        </ul>
      </div>

    </div>

  </div>
</div>