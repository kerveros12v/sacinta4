<?php

require_once("../Crud/CrudTipoDiscapacidad.php");

use Clasesphp\Tipodiscapacidad;
use Crud\CrudTipoDiscapacidad;

function cargarTipoDiscapacidad($opt)
{
    $oCrudtipodiscap = new CrudTipoDiscapacidad();
    $listdiscapa = $oCrudtipodiscap->mostrar();
    $tipodiscapa = new Tipodiscapacidad();
    $lista = '';
    foreach ($listdiscapa as $tipodiscapa) {
        if ($opt == $tipodiscapa->getTipoDiscapacidadid()) $lista .= " <option selected='selected'  value='" . $tipodiscapa->getTipoDiscapacidadid() . "'><label>" ./**/ ($tipodiscapa->getTipoDiscapacidad()) . "</label></option>";
        else {
            $lista .= " <option value='" . $tipodiscapa->getTipoDiscapacidadid() . "'><label>" ./**/ ($tipodiscapa->getTipoDiscapacidad()) . "</label></option>";
        }
    }
    return $lista;
}
