// /js/validacion.js
$(document).ready(function () {
  $("#loginForm").on("submit", function (e) {
    var username = $("#usuario").val();
    var password = $("#clave").val();

    if (password.length < 8) {
      alert("La contraseña debe tener al menos 8 caracteres.");
      e.preventDefault(); // Evita el envío del formulario
    } else if (password === username) {
      alert("La contraseña no puede ser igual al nombre de usuario.");
      e.preventDefault(); // Evita el envío del formulario
    } else if (!/[A-Za-z]/.test(password) || !/[0-9]/.test(password)) {
      alert("La contraseña debe contener letras y números.");
      e.preventDefault(); // Evita el envío del formulario
    }
  });
});
