<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2</title>
</head>

<body>
  <form action="../controller/ejercicio2controller.php" method="GET" name="horas" id="horas">
    <label for="">Ingrese el día</label>
    <input type="text" name="dia" id="dia">
    <label for="">Ingrese las horas cursadas ese día</label>
    <input type="number" name="horasCursadas" id="horasCursadas">
    <input type="submit" value="Aceptar">
  </form>
  <?php
  if ($horasTotales > 0) {
    echo "<div>";
    echo "<p>Horas cursadas: $horasTotales</p>";
    echo "</div>";
  }
  ?>
</body>

</html>