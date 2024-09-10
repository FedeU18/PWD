<?php

// CREATE TABLE `auto` (
//   `Patente` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
//   `Marca` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
//   `Modelo` int(11) NOT NULL,
//   `DniDuenio` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
//   PRIMARY KEY  (`Patente`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

class Auto
{
  private $patente;
  private $marca;
  private $modelo;
  private $dniDuenio;
  private $mensajeoperacion;

  public function __construct()
  {
    $this->patente = "";
    $this->marca = "";
    $this->modelo = 0;
    $this->dniDuenio = "";
    $this->mensajeoperacion = "";
  }

  public function setear($patente, $marca, $modelo, $dniDuenio)
  {
    $this->setPatente($patente);
    $this->setMarca($marca);
    $this->setModelo($modelo);
    $this->setDniDuenio($dniDuenio);
  }

  public function getPatente()
  {
    return $this->patente;
  }
  public function setPatente($patente)
  {
    $this->patente = $patente;

    return $this;
  }

  public function getMarca()
  {
    return $this->marca;
  }
  public function setMarca($marca)
  {
    $this->marca = $marca;

    return $this;
  }

  public function getModelo()
  {
    return $this->modelo;
  }
  public function setModelo($modelo)
  {
    $this->modelo = $modelo;

    return $this;
  }

  public function getDniDuenio()
  {
    return $this->dniDuenio;
  }
  public function setDniDuenio($dniDuenio)
  {
    $this->dniDuenio = $dniDuenio;
  }

  public function getMensajeoperacion()
  {
    return $this->mensajeoperacion;
  }
  public function setMensajeoperacion($mensajeoperacion)
  {
    $this->mensajeoperacion = $mensajeoperacion;
  }
}
