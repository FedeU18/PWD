<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>

  <!-- CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS personalizado (opcional) -->
  <link rel="stylesheet" href="./css/styles.css">

</head>

<body class="bg-dark">
  <div class="border border-secondary shadow-lg rounded login-container p-5 d-flex justify-content-center flex-column align-items-center bg-light">
    <h2 class="mb-4">Member Login</h2>
    <form id="loginForm" action="./action/action.php" method="POST">
      <input type="hidden" name="action" value="verificar">
      <div class="mb-3 input-group">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" required>
      </div>
      <div class="mb-3 input-group">
        <input type="password" class="form-control" id="clave" name="clave" placeholder="Password" required>
      </div>
      <input type="submit" class="bg-success text-light btn btn-login w-100" value="Login" />
    </form>
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Validación con jQuery -->
  <script src="./js/validacion.js"></script>
  <!-- JavaScript de Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>