<?php

require_once("../Crud/CrudSocioEmpleo.php");

use Clasesphp\SocioEmpleo;
use Crud\CrudSocioEmpleo;

function cargarSetecSocioEmpleo($id)
{
    $oCrudSetecSocioEmpleo = new CrudSocioEmpleo();
    $listsocio = $oCrudSetecSocioEmpleo->mostrar();
    $socio = new SocioEmpleo();
    $lista = '';
    foreach ($listsocio as $socio) {
        if ($id == $socio->getIdsocioempleo()) {
            $lista .= " <option selected='selected'  value='" . $socio->getIdsocioempleo() . "'><label>" ./**/ ($socio->getSocioEmpleoregistro()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $socio->getIdsocioempleo() . "'><label>" ./**/ ($socio->getSocioEmpleoregistro()) . "</label></option>";
        }
    }
    return $lista;
}
