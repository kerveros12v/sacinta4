<?php

require_once("../Crud/CrudTipoSangre.php");

use Clasesphp\Tipossangre;
use Crud\CrudTipoSangre;

function cargartipoSangre($opt)
{
    $oCrudTipoSangre = new CrudTipoSangre();
    $listaTipoSangre = $oCrudTipoSangre->mostrar();
    $tiposangre = new Tipossangre();
    $lista = '<option disabled><label>Seleccione un Tipo de Sangre</label></option>"';
    foreach ($listaTipoSangre as $tiposangre) {
        if ($opt == $tiposangre->getTipoSangreId()) {
            $lista .= " <option selected='selected' value='" . $tiposangre->getTipoSangreId() . "'><label>" ./**/ ($tiposangre->getTipoSangre()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $tiposangre->getTipoSangreId() . "'><label>" ./**/ ($tiposangre->getTipoSangre()) . "</label></option>";
        }
    }
    return $lista;
}
