<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles4.css">

  <title>Resultado</title>
</head>

<body>
  <h1>resultado</h1>
  <p class="<?php
            if ($_GET['edad'] >= 18) {
              echo 'aceptado';
            } else {
              echo 'rechazado';
            }
            ?>">
    <?php
    if ($_GET["edad"] >= 18) {
      echo "Eres mayor de edad";
    } else {
      echo "Eres menor de edad";
    }
    ?>
  </p>
  <a href="./formulario.php">Volver</a>
</body>

</html>