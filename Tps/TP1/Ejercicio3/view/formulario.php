<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
  <link rel="stylesheet" href="../styles.css">
</head>

<body>
  <form action="../controller/controller.php" method="GET" id="presentacion" name="presentacion">
    <div>
      <label for="nombre">Nombre: </label><br>
      <input type="text" name="nombre" id="nombre"><br>
    </div>
    <div>
      <label for="apellido">Apellido: </label><br>
      <input type="text" name="apellido" id="apellido"><br>
    </div>
    <div>
      <label for="edad">Edad: </label><br>
      <input type="number" name="edad" id="edad"><br>
    </div>
    <div>
      <label for="direccion">Direccion: </label><br>
      <input type="text" name="direccion" id="direccion"><br>
    </div>
    <input id="submit" type="submit">
  </form>
</body>

</html>