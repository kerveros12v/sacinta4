<?php

require_once("../Crud/CrudSetecEstadoOcupacional.php");

use Clasesphp\SetecEstadoOcupacional;
use Crud\CrudSetecEstadoOcupacional;

function cargarEstadoOcupacional($opt)
{
    $oCrud = new CrudSetecEstadoOcupacional();
    $listaT = $oCrud->mostrar();
    $tipo = new SetecEstadoOcupacional();
    $lista = '<option disabled><label>Seleccione un Estado de Ocupacional</label></option>"';
    foreach ($listaT as $tipo) {
        if ($opt == $tipo->getSetecEstadoOcupacionalId()) {
            $lista .= " <option selected='selected' value='" . $tipo->getSetecEstadoOcupacionalId() . "'><label>" ./**/ ($tipo->getEstadoOcupacional()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $tipo->getSetecEstadoOcupacionalId() . "'><label>" ./**/ ($tipo->getEstadoOcupacional()) . "</label></option>";
        }
    }
    return $lista;
}
