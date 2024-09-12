<?php

class PersonaController
{
  private function cargarObjeto($param)
  {
    $obj = null;

    if (
      array_key_exists('NroDni', $param)
      and array_key_exists('Apellido', $param)
      and array_key_exists('Nombre', $param)
      and array_key_exists('fechaNac', $param)
      and array_key_exists('Telefono', $param)
      and array_key_exists('Domicilio', $param)
    ) {
      $obj = new Persona();
      $obj->setear(
        $param['NroDni'],
        $param['Apellido'],
        $param['Nombre'],
        $param['fechaNac'],
        $param['Telefono'],
        $param['Domicilio'],
      );
    }
    return $obj;
  }

  private function cargarObjetoConClave($param)
  {
    $obj = null;

    if (isset($param['NroDni'])) {
      $obj = new Persona();
      $obj->setear($param['NroDni'], null, null, null, null, null);
    }
    return $obj;
  }

  private function seteadosCamposClaves($param)
  {
    $resp = false;
    if (isset($param['NroDni'])) {
      $resp = true;
    }
    return $resp;
  }

  public function alta($param)
  {
    $resp = false;
    //$param['NroDni'] = null; // el DNI como PK debería cargarse manualmente?
    $elObjtPersona = $this->cargarObjeto($param);
    if ($elObjtPersona != null and $elObjtPersona->insertar()) {
      $resp = true;
    }
    return $resp;
  }

  public function baja($param)
  {
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objPersona = $this->cargarObjetoConClave($param);
      if ($objPersona != null && $objPersona->eliminar()) {
        $resp = true;
      }
    }
    return $resp;
  }

  public function modificacion($param)
  {
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objPersona = $this->cargarObjeto($param);
      if ($objPersona != null and $objPersona->modificar()) {
        $resp = true;
      }
    }
    return $resp;
  }

  public function buscar($param)
  {
    $where = " true ";
    if ($param <> null) {
      if (isset($param["NroDni"])) {
        $where .= " AND NroDni =" . $param["NroDni"];
      }
    }
    $objPersona = new Persona();
    $arreglo = $objPersona->listar($where);
    return $arreglo;
  }
}
