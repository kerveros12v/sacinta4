<?php

require_once("../Crud/CrudTipoSostenimiento.php");

use Clasesphp\Sostenimientos;
use Crud\CrudTipoSostenimientos;

function cargarSotenimiento($opt)
{
    $crudsostenimiento = new CrudTipoSostenimientos();
    $listasostenimiento = $crudsostenimiento->mostrar();
    $sostenimiento1 = new Sostenimientos();
    $lista = '<option><label>Seleccione un Tipo de Sostenimiento</label></option>"';
    foreach ($listasostenimiento as $sostenimiento1) {
        if ($opt == $sostenimiento1->getIdSostenimiento()) {
            $lista .= " <option selected='selected'  value='" . $sostenimiento1->getIdSostenimiento() . "'><label>" . ($sostenimiento1->getSostenimiento()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $sostenimiento1->getIdSostenimiento() . "'><label>" . ($sostenimiento1->getSostenimiento()) . "</label></option>";
        }
    }
    return $lista;
}
