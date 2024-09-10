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


  public function cargar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "SELECT * FROM auto WHERE Patente = " . $this->getPatente();

    if ($base->Iniciar()) {
      $res = $base->Ejecutar($sql);
      if ($res > -1) {
        if ($res > 0) {
          $row = $base->Registro();
          $this->setear(
            $row["Patente"],
            $row["Marca"],
            $row["Modelo"],
            $row["DniDuenio"],
          );
          $resp = true;
        }
      }
    } else {
      $this->setMensajeoperacion("Auto->cargar: " . $base->getError());
    }
    return $resp;
  }

  public function insertar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "INSERT INTO persona(Patente,Marca,Modelo,DniDuenio) 
    VALUES('{$this->getPatente()}', '{$this->getMarca()}' , '{$this->getModelo()}', '{$this->getDniDuenio()}')";

    if ($base->Iniciar()) {
      if ($elid = $base->Ejecutar($sql)) {
        $this->setPatente($elid);
        $resp = true;
      } else {
        $this->setMensajeoperacion("Auto->Insertar: " . $base->getError());
      }
    } else {
      $this->setMensajeoperacion("Auto->Insertar: " . $base->getError());
    }
    return $resp;
  }

  public function modificar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "UPDATE auto 
    SET Marca='{$this->getMarca()}', Modelo='{$this->getModelo()}', DniDuenio='{$this->getDniDuenio()}' 
    WHERE Patente='{$this->getPatente()}'";
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        $resp = true;
      } else {
        $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
      }
    } else {
      $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
    }
    return $resp;
  }

  public function eliminar()
  {
    $resp = false;
    $base = new BaseDatos();
    $sql = "DELETE FROM auto WHERE Patente=" . $this->getPatente();
    if ($base->Iniciar()) {
      if ($base->Ejecutar($sql)) {
        return true;
      } else {
        $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
      }
    } else {
      $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
    }
    return $resp;
  }

  public function listar($parametro = "")
  {
    $arreglo = array();
    $base = new BaseDatos();
    $sql = "SELECT * FROM auto ";
    if ($parametro != "") {
      $sql .= 'WHERE ' . $parametro;
    }
    $res = $base->Ejecutar($sql);
    if ($res > -1) {
      if ($res > 0) {
        while ($row = $base->Registro()) {
          $obj = new Auto();
          $obj->setear(
            $row["Patente"],
            $row["Marca"],
            $row["Modelo"],
            $row["DniDuenio"],
          );
          array_push($arreglo, $obj);
        }
      }
    } else {
      $this->setmensajeoperacion("Auto->listar: " . $base->getError());
    }

    return $arreglo;
  }
}
