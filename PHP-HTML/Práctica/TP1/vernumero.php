<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Numero</title>
</head>

<body>
  <h1>Ver Número</h1>
  <?php
  if ($_POST) {
    $numero = $_POST["numero"];
    if ($numero > 0) {
      echo "<p>El número $numero, es positivo</p>";
    } else if ($numero < 0) {
      echo "<p>El número $numero, es negativo</p>";
    } else {
      echo "<p>El número $numero, es Cero</p>";
    }
  }
  ?>
  <a href="./Ejercicio1.php">Volver</a>
</body>

</html>