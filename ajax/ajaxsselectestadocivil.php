<?php

require_once('../Crud/CrudEstadoCivil.php');

use Crud\CrudEStadoCivil;

function cargarEstadoCivil($opt)
{
    $oCrudEstadoCivil = new CrudEStadoCivil();
    $listaEstadoCivil = $oCrudEstadoCivil->mostrar();
    $lista = '<option disabled><label>Seleccione un Estado Civil</label></option>"';
    foreach ($listaEstadoCivil as $estcivil) {
        if ($opt == $estcivil->getEstadoCivilId()) {
            $lista .= " <option selected='selected' value='" . $estcivil->getEstadoCivilId() . "'><label>" . utf8_decode(($estcivil->getEstadoCivil())) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $estcivil->getEstadoCivilId() . "'><label>" . utf8_decode(($estcivil->getEstadoCivil())) . "</label></option>";
        }
    }
    return $lista;
}
