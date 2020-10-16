<?php

require_once("../Crud/CrudSetecestadoCertificacion.php");

use Clasesphp\Setecestadoscertificacion;
use Crud\CrudSetecestadoscertificacion;

function cargarSetecestadoscertificacion($opt)
{
    $oCrudd1 = new CrudSetecestadoscertificacion();
    $listad1 = $oCrudd1->mostrar();
    $d1 = new Setecestadoscertificacion();
    $lista = '<option disabled><label>Seleccione una Estado de Certificacion</label></option>';
    foreach ($listad1 as $d1) {
        if ($opt == $d1->getIdsec()) {
            $lista .= " <option selected='selected' value='" . $d1->getIdsec() . "'><label>" ./**/ ($d1->getSecdetalle()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $d1->getIdsec() . "'><label>" ./**/ ($d1->getSecdetalle()) . "</label></option>";
        }
    }
    return $lista;
}
