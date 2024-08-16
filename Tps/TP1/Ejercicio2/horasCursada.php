<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horas Cursada</title>
</head>

<body>
  <p>Total Horas cursadas:</p>
  <?php
  $horas = [];

  if ($_GET) {
    $horas[] = $_GET["horasCursadas"];
    $totalHoras = 0;
    foreach ($horas as $hora) {
      $totalHoras += $hora;
    }

    echo "<h1>$totalHoras</h1>";
  }
  ?>
  <a href="./Ejercicio2.php">Volver</a>
</body>

</html>