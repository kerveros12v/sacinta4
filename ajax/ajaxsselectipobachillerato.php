<?php
require_once("../Crud/CrudTipoBachillerato.php");

use Crud\CrudTipoBachillerato;

function cargartipobachillerato($opt)
{
    $crud = new CrudTipoBachillerato();
    $listadato = $crud->mostrar();

    $lista = '<option value="0"><label>Seleccione un Tipo de Bachillerato</label></option>';
    foreach ($listadato as $dato) {
        if ($opt == $dato->getTiposBacilleratoId())
            $lista .= " <option selected='selected' value='" . $dato->getTiposBacilleratoId() . "'><label>" . $dato->getTipoBacillerato() . "</label></option>";

        else
            $lista .= " <option value='" . $dato->getTiposBacilleratoId() . "'><label>" . $dato->getTipoBacillerato() . "</label></option>";
    }
    return $lista;
}
