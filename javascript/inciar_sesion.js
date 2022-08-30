$("#click").on("click", function () {
  event.preventDefault();
  var usuario = document.getElementById("usuario").value;
  var password = document.getElementById("password").value;

  if (usuario == "") {
    alert("Ingrese su Usuario");
    return false;
  }
  if (password == "") {
    alert("ingrese su contraseña");
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
