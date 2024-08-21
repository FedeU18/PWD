<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
  <link rel="stylesheet" href="../styles4.css">
</head>

<body>
  <form action="./resultado.php" method="GET" id="presentacion" name="presentacion">
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
    <div>
      <label for="gender">Sexo:</label><br>
      <input type="radio" name="gender" value="masculino" id="masculino">
      <label for="masculino">Masculino</label><br>
      <input type="radio" name="gender" value="femenino" id="femenino">
      <label for="femenino">Femenino</label>
    </div>
    <div>
      <label for="studies">Nivel de estudios:</label><br>
      <input type="radio" name="studies" value="no_estudios" id="no_estudios">
      <label for="no_estudios">No tiene estudios</label><br>
      <input type="radio" name="studies" value="primarios" id="primarios">
      <label for="primarios">Estudios primarios</label><br>
      <input type="radio" name="studies" value="secundarios" id="secundarios">
      <label for="secundarios">Estudios secundarios</label>
    </div>
    <input id="submit" type="submit">
  </form>
</body>

</html>