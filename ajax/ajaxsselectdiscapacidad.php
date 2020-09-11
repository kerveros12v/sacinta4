<?php

require_once("../Crud/CrudDiscapacidad.php");

use Clasesphp\Discapacidad;
use Crud\CrudDiscapacidad;

function discapacidad($opt)
{
    $oCrudDiscapacidadesestudiantes = new CrudDiscapacidad();
    $listDiscapacidadesestudiantes = $oCrudDiscapacidadesestudiantes->mostrar();
    $discapacidadesestudiantes = new Discapacidad();
    $lista = '';
    foreach ($listDiscapacidadesestudiantes as $discapacidadesestudiantes) {
        if ($opt == $discapacidadesestudiantes->getDiscapacidadId()) $lista .= " <option selected='selected'  value='" . $discapacidadesestudiantes->getDiscapacidadId() . "'><label>" ./**/ ($discapacidadesestudiantes->getDiscapacidad()) . "</label></option>";
        else $lista .= " <option value='" . $discapacidadesestudiantes->getDiscapacidadId() . "'><label>" ./**/ ($discapacidadesestudiantes->getDiscapacidad()) . "</label></option>";
    }
    return $lista;
}
