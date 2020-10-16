<?php

require_once("../Crud/CrudSetecEncuestador.php");

use Clasesphp\SetecEncuestador;
use Crud\CrudSetecEncuestador;

function cargarEncuestador($opt)
{
    $oCrudd1 = new CrudSetecEncuestador();
    $listad1 = $oCrudd1->mostrar();
    $d1 = new SetecEncuestador();
    $lista = '<option disabled><label>Seleccione un Encuestador</label></option>"';
    foreach ($listad1 as $d1) {
        if ($opt == $d1->getIdnumIdentificacion()) {
            $lista .= " <option selected='selected' value='" . $d1->getIdnumIdentificacion() . "'><label>" ./**/ ($d1->getNombre()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $d1->getIdnumIdentificacion() . "'><label>" ./**/ ($d1->getNombre()) . "</label></option>";
        }
    }
    return $lista;
}
