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

  public function setear($nroDNI, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
  {
    $this->setNroDNI($nroDNI);
    $this->setApellido($apellido);
    $this->setNombre($nombre);
    $this->setFechaNac($fechaNac);
    $this->setTelefono($telefono);
    $this->setDomicilio($domicilio);
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

  public function cargar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "SELECT * FROM persona WHERE NroDni = " . $this->getNroDNI();

    if ($base->Iniciar()) {
      $res = $base->Ejecutar($sql);
      if ($res > -1) {
        if ($res > 0) {
          $row = $base->Registro();
          $this->setear(
            $row["NroDni"],
            $row["Apellido"],
            $row["Nombre"],
            $row["fechaNac"],
            $row["Telefono"],
            $row["Domicilio"]
          );
          $resp = true;
        }
      }
    } else {
      $this->setMensajeoperacion("Persona->cargar: " . $base->getError());
    }
    return $resp;
  }

  public function insertar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "INSERT INTO persona(NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio) 
    VALUES('{$this->getNroDNI()}', '{$this->getApellido()}' , '{$this->getNombre()}', '{$this->getFechaNac()}', '{$this->getTelefono()}','{$this->getDomicilio()}')";

    if ($base->Iniciar()) {
      if ($elid = $base->Ejecutar($sql)) {
        $this->setNroDNI($elid);
        $resp = true;
      } else {
        $this->setMensajeoperacion("Persona->Insertar: " . $base->getError());
      }
    } else {
      $this->setMensajeoperacion("Persona->Insertar: " . $base->getError());
    }
    return $resp;
  }

  public function modificar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "UPDATE persona 
    SET Apellido='{$this->getApellido()}', Nombre='{$this->getNombre()}', fechaNac='{$this->getFechaNac()}', Telefono='{$this->getTelefono()}', Domicilio='{$this->getDomicilio()}'
    WHERE NroDni='{$this->getNroDNI()}'";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
      }
    } else {
      $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
    }
    return $resp;
  }

  public function eliminar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "DELETE FROM persona WHERE NroDni=" . $this->getNroDNI();
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
      }
    } else {
      $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
    }
    return $resp;
  }

  public function listar($parametro = "")
  {
    $arreglo = array();
    $base = new BaseDatos();
    $sql = "SELECT * FROM persona ";
    if ($parametro != "") {
      $sql .= 'WHERE ' . $parametro;
    }
    $res = $base->Ejecutar($sql);
    if ($res > -1) {
      if ($res > 0) {
        while ($row = $base->Registro()) {
          $obj = new Persona();
          $obj->setear(
            $row["NroDni"],
            $row["Apellido"],
            $row["Nombre"],
            $row["fechaNac"],
            $row["Telefono"],
            $row["Domicilio"]
          );
          array_push($arreglo, $obj);
        }
      }
    } else {
      $this->setmensajeoperacion("Persona->listar: " . $base->getError());
    }

    return $arreglo;
  }
}
