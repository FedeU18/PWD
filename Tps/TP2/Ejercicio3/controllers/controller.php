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

    foreach ($cuentasDePrueba as $cuenta) {
      if ($cuenta["usuario"] === $usuario && $cuenta["clave"] === $clave) {
        $login = true;
      }
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
