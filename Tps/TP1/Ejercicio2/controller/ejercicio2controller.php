<?php
require "../model/datos.php";
$horasTotales = 0;
if ($_GET) {
  $horasPorDia[$_GET["dia"]] = $_GET["horasCursadas"];
}
foreach ($horasPorDia as $hora) {
  $horasTotales += $hora;
}


require "../view/Ejercicio2.php";
