<?php
// CREATE TABLE `persona` (
//   `NroDni` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
//   `Apellido` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
//   `Nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
//   `fechaNac` date NOT NULL default '0000-00-00',
//   `Telefono` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
//   `Domicilio` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
//   PRIMARY KEY  (`NroDni`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

class Persona
{
  private $nroDNI;
  private $apellido;
  private $nombre;
  private $fechaNac;
  private $telefono;
  private $domicilio;
  private $mensajeoperacion;

  public function __construct()
  {
    $this->nroDNI = "";
    $this->apellido = "";
    $this->nombre = "";
    $this->fechaNac = "";
    $this->telefono = "";
    $this->domicilio = "";
    $this->mensajeoperacion = "";
  }

  public function getNroDNI()
  {
    return $this->nroDNI;
  }
  public function setNroDNI($nroDNI)
  {
    $this->nroDNI = $nroDNI;
  }

  public function getApellido()
  {
    return $this->apellido;
  }
  public function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getFechaNac()
  {
    return $this->fechaNac;
  }
  public function setFechaNac($fechaNac)
  {
    $this->fechaNac = $fechaNac;
  }

  public function getTelefono()
  {
    return $this->telefono;
  }
  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;
  }

  public function getDomicilio()
  {
    return $this->domicilio;
  }
  public function setDomicilio($domicilio)
  {
    $this->domicilio = $domicilio;
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
