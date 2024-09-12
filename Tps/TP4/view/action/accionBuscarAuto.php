<?php
include_once "../../utils/functions.php";
include_once "../../model/conection/db.php";
include_once "../../model/Auto.php";
include_once "../../controller/AutoController.php";
$datos = data_submitted();

$controlAuto = new AutoController();

$autoEncontrado = $controlAuto->buscar($datos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>auto</title>
</head>

<body>
  <h1>Resultado: </h1>
  <?php
  if (count($autoEncontrado) > 0) {
    echo  "<h3>El auto buscado es: </h3>";
    echo "<ul>";
    echo   "<li>Patente: {$autoEncontrado[0]->getPatente()}</li>";
    echo   "<li>Marca: {$autoEncontrado[0]->getMarca()}</li>";
    echo   "<li>Modelo: {$autoEncontrado[0]->getModelo()}</li>";
    echo  "<li>DNI del dueño: {$autoEncontrado[0]->getDniDuenio()}</li>";
    echo "</ul>";
  } else {
    echo "<h3>No se a encontrado ningún auto con esa patente</h3>";
  }
  ?>
  <a href="../BuscarAuto.php">volver</a>
</body>

</html>