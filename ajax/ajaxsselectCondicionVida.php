<?php

require_once("../Crud/CrudSetecCondicionVida.php");

use Clasesphp\SetecCondicionVida;
use Crud\CrudSetecCondicionVida;

function cargarSetecCondicionVida($opt)
{
    $oCrudd1 = new CrudSetecCondicionVida();
    $listad1 = $oCrudd1->mostrar();
    $d1 = new SetecCondicionVida();
    $lista = '<option disabled><label>Seleccione una Fecha de Condicion de Vida</label></option>';
    foreach ($listad1 as $d1) {
        if ($opt == $d1->getIdSetecCondiciondeVida()) {
            $lista .= " <option selected='selected' value='" . $d1->getIdSetecCondiciondeVida() . "'><label>" ./**/ ($d1->getSetecCondiciondeVidaFecha()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $d1->getIdSetecCondiciondeVida() . "'><label>" ./**/ ($d1->getSetecCondiciondeVidaFecha()) . "</label></option>";
        }
    }
    return $lista;
}
