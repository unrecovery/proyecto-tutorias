$("#click").on("click", function () {
  event.preventDefault();
  let nombre_completo = document.getElementById("nombre").value;
  let matricula = document.getElementById("matricula").value;
  let nacimiento = document.getElementById("nacimiento").value;
  let curp = document.getElementById("curp").value;
  let ciudad = document.getElementById("ciudad").value;
  let direccion = document.getElementById("direccion").value;
  let municipio = document.getElementById("municipio").value;
  let estado = document.getElementById("estado").value;
  let numeros = document.getElementById("numeros").value;
  let sexo = document.getElementById("sexo").value;
  let carrera = document.getElementById("carrera").value;
  if (nombre_completo == "") {
    alert("Es necesario que Ingrese el Nombre Completo del Estudiante");
    return false;
  }
  if (matricula == "") {
    alert("Introduzca la Matricula del Estudiante");
    return false;
  }
  if (nacimiento == "") {
    alert("Seleccione la Fecha de Nacimiento del Estudiante");
    return false;
  }
  if (curp == "") {
    alert("Ingrese la Curp del Estudiante");
    return false;
  }
  if (ciudad == "") {
    alert("Ingrese la ciudad del Estudiante");
    return false;
  }
  if (estado == "") {
    alert("Seleccione el Estado del Estudiante");
    return false;
  }
  if (numeros == "") {
    alert("Ingrese el Número del Estudiante");
    return false;
  }
  if (direccion == "") {
    alert("Ingrese la Direccion del Estudiante");
    return false;
  }
  if (municipio == "") {
    alert("Ingrese El Municipio del Estudiante");
    return false;
  }
  if (sexo == "") {
    alert("Seleccione el Sexo del Estudiante");
    return false;
  }

  if (carrera == "") {
    alert("Ingrese la Carrera del Estudiante");
    return false;
  }

  $.post(
    "php/iniciar_sesion.php",
    {
      usuario: usuario,
      password: password,
    },
    function (respuesta) {
      if (respuesta == true) {
        window.location.assign("panel.php");
      } else {
        alert("Ingrese otro Usuario o Contraseña");
      }
    }
  );
});
