<?php

require_once("../Crud/CrudSetecTipoOcupacion.php");

use Clasesphp\SetecTipoOcupacion;
use Crud\CrudSetecTipoOcupacion;

function cargartipoOcupacion($opt)
{
    $oCrud = new CrudSetecTipoOcupacion();
    $listaT = $oCrud->mostrar();
    $tipo = new SetecTipoOcupacion();
    $lista = '<option disabled><label>Seleccione un Tipo de Ocupacion</label></option>"';
    foreach ($listaT as $tipo) {
        if ($opt == $tipo->getIdsetecTipoOcupacion()) {
            $lista .= " <option selected='selected' value='" . $tipo->getIdsetecTipoOcupacion() . "'><label>" ./**/ ($tipo->getTipoOcupacion()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $tipo->getIdsetecTipoOcupacion() . "'><label>" ./**/ ($tipo->getTipoOcupacion()) . "</label></option>";
        }
    }
    return $lista;
}
