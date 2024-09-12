<?php

class AutoController
{
  private function cargarObjeto($param)
  {
    $objAuto = null;

    if (
      array_key_exists('Patente', $param)
      and array_key_exists('Marca', $param)
      and array_key_exists('Modelo', $param)
      and array_key_exists('DniDuenio', $param)
    ) {
      $objAuto = new Auto();
      $objAuto->setear(
        $param['Patente'],
        $param['Marca'],
        $param['Modelo'],
        $param['DniDuenio'],
      );
    }
    return $objAuto;
  }

  private function cargarObjetoConClave($param)
  {
    $objAuto = null;

    if (isset($param['Patente'])) {
      $objAuto = new Auto();
      $objAuto->setear($param['Patente'], null, null, null);
    }
    return $objAuto;
  }

  private function seteadosCamposClaves($param)
  {
    $resp = false;
    if (isset($param['Patente']))
      $resp = true;
    return $resp;
  }

  public function alta($param)
  {
    $resp = false;
    // $param['id'] = null;
    $objAuto = $this->cargarObjeto($param);
    //        verEstructura($elObjtTabla);
    if ($objAuto != null and $objAuto->insertar()) {
      $resp = true;
    }
    return $resp;
  }

  public function baja($param)
  {
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objAuto = $this->cargarObjetoConClave($param);
      if ($objAuto != null and $objAuto->eliminar()) {
        $resp = true;
      }
    }

    return $resp;
  }

  public function modificacion($param)
  {
    //echo "Estoy en modificacion";
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $objAuto = $this->cargarObjeto($param);
      if ($objAuto != null and $objAuto->modificar()) {
        $resp = true;
      }
    }
    return $resp;
  }

  public function buscar($param)
  {
    $where = " true ";
    if ($param <> NULL) {
      if (isset($param['Patente']))
        $where .= " AND Patente = '" . $param['Patente'] . "'";
    }
    $objAuto = new Auto();
    $arreglo = $objAuto->listar($where);
    return $arreglo;
  }
}
