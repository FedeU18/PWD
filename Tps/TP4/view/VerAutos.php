<?php
include_once "../model/conection/db.php";
include_once "../model/Auto.php";
include_once "../controller/AutoController.php";
$objAutoController = new AutoController();
$arregloAutos = $objAutoController->buscar(null);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Autos</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>DNI del Dueño</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (count($arregloAutos) > 0) {
        foreach ($arregloAutos as $auto) {
          echo "<tr>";
          echo "<td>{$auto->getPatente()}</td>";
          echo "<td>{$auto->getMarca()}</td>";
          echo "<td>{$auto->getModelo()}</td>";
          echo "<td>{$auto->getDniDuenio()}</td>";
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
</body>

</html>