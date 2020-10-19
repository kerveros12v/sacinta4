<?php

require_once("../Crud/CrudHaperdidoLaGratuidad.php");

use Clasesphp\Haperdidolagratuidad;
use Crud\CrudHaperdidoLaGratuidad;

function cargarHaperdidolagratuidad($opt)
{
    $ocrud = new CrudHaperdidoLaGratuidad();
    $listah = $ocrud->mostrar();
    $dato = new Haperdidolagratuidad();
    $lista = '<option value="0" disabled="disabled"><label>Seleccione un Opcion</label></option>"';
    foreach ($listah as $dato) {


        if ($opt == $dato->getHaPerdidoLaGratuidadId()) {
            $lista .= "<option  selected='selected' value='" . $dato->getHaPerdidoLaGratuidadId() . "'><label>" ./**/ ($dato->getHaPerdidoLaGratuidad()) . "</label></option>";
        } else {
            $lista .= "<option  value='" . $dato->getHaPerdidoLaGratuidadId() . "'><label>" ./**/ ($dato->getHaPerdidoLaGratuidad()) . "</label></option>";
        }
    }
    return $lista;
}
