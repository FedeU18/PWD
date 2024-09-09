<?php


class Login
{
  public function verificar($metodo)
  {
    $cuentasDePrueba = [
      ["usuario" => "fedeu18", "clave" => "federico1234"],
      ["usuario" => "emanuel1", "clave" => "ema12345"],
      ["usuario" => "joaquin2", "clave" => "joaquin123"],
    ];
    $usuario = $metodo["usuario"];
    $clave = $metodo["clave"];
    $login = false;

    $i = 0;
    while ($i < count($cuentasDePrueba) && !$login) {
      if ($cuentasDePrueba[$i]["usuario"] === $usuario && $cuentasDePrueba[$i]["clave"] === $clave) {
        $login = true;
      }
      $i++;
    }

    if ($login) {
      header("Location: ../bienvenido.php");
      exit;
    } else {

      header("Location: ../error.php");
      exit;
    }
  }
}
