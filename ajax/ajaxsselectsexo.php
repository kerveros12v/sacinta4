<?php

require_once('../Crud/CrudSexo.php');

use Clasesphp\Sexos;
use Crud\CrudSexo;

function cargarSexos($opt)
{
  $oCrudSexo = new CrudSexo();
  $listaSexo = $oCrudSexo->mostrar();
  $sexos = new Sexos();
  $lista = '<option disabled><label>Seleccione un Sexo</label></option>"';
  foreach ($listaSexo as $sexos) {
    if ($opt == $sexos->getSexoId()) {
      $lista .= "<option selected='selected' value='" . $sexos->getSexoId() . "'><label>" . (($sexos->getSexo())) . "</label></option>";
    } else {
      $lista .= "<option value='" . $sexos->getSexoId() . "'><label>" . (($sexos->getSexo())) . "</label></option>";
    }
  }
  return $lista;
}
