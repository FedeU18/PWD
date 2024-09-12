<?php
include_once "../model/conection/db.php";
include_once "../model/Persona.php";
include_once "../controller/PersonaController.php";
$controlPersona = new PersonaController();

$arregloPersonas = $controlPersona->buscar(null);;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Personas</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
        <th>Telefono</th>
        <th>Domicilio</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (count($arregloPersonas) > 0) {
        foreach ($arregloPersonas as $persona) {
          echo "<tr>";
          echo "<td>{$persona->getNroDni()}</td>";
          echo "<td>{$persona->getNombre()}</td>";
          echo "<td>{$persona->getApellido()}</td>";
          echo "<td>{$persona->getFechaNac()}</td>";
          echo "<td>{$persona->getTelefono()}</td>";
          echo "<td>{$persona->getDomicilio()}</td>";
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
</body>

</html>