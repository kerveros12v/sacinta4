<?php

require_once("../Crud/CrudSetecCondicionTrabajo.php");

use Clasesphp\SeteCondicionLaboral;
use Crud\CrudSeteCondicionLaboral;

function cargarSetecCondicionlaboral($opt)
{
    $oCrudd1 = new CrudSeteCondicionLaboral();
    $listad1 = $oCrudd1->mostrar();
    $d1 = new SeteCondicionLaboral();
    $lista = '<option disabled><label>Seleccione la fecha de una Condicion Laboral</label></option>';
    foreach ($listad1 as $d1) {
        if ($opt == $d1->getIdSeteCondicionLaboral()) {
            $lista .= "ingreso";
            $lista .= " <option selected='selected' value='" . $d1->getIdSeteCondicionLaboral() . "'><label>" ./**/ ($d1->getFecharegistro()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $d1->getIdSeteCondicionLaboral() . "'><label>" ./**/ ($d1->getFecharegistro()) . "</label></option>";
        }
    }
    return $lista;
}
try {
    echo cargarSetecCondicionlaboral(-1);
} catch (\Throwable $e) {
    // throw ;
    echo $e;
}
