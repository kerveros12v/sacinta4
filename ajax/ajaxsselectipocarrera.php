<?php
require_once("../Crud/CrudTipoCarreras.php");

use Crud\CrudTipoCarreras;

function cargartipocarrera($opt)
{
    $crud = new CrudTipoCarreras();
    $listadato = $crud->mostrar();

    $lista = '<option selected="selected" value="0"><label>Seleccione un Tipo de Carrera</label></option>';
    foreach ($listadato as $dato) {
        if ($opt == $dato->getTipoCarrerasId())
            $lista .= " <option selected='selected' value='" . $dato->getTipoCarrerasId() . "'><label>" . $dato->getTipoCarreras() . "</label></option>";

        else
            $lista .= " <option value='" . $dato->getTipoCarrerasId() . "'><label>" . $dato->getTipoCarreras() . "</label></option>";
    }
    return $lista;
}
