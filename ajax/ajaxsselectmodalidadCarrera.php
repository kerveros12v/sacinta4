<?php
require_once("../clasesphp/Modalidadcarreras.php");
require_once("../Crud/CrudModalidadCarrera.php");


use Clasesphp\Modalidadcarreras;
use Crud\CrudModalidadcarreras;

function cargarmodalidadCarrera($opt)
{
    $crudmodalidad = new CrudModalidadcarreras();
    $listamodalidad = $crudmodalidad->mostrar();
    $datos = new Modalidadcarreras();
    $lista = '<option value="0"><label>Seleccione una Modalidad</label></option>';
    foreach ($listamodalidad as $datos) {
        if ($opt == $datos->getModalidadCarreraId())
            $lista .= " <option selected='selected' value='" . $datos->getModalidadCarreraId() . "'><label>" . $datos->getModalidadCarrera() . "</label></option>";
        else
            $lista .= " <option value='" . $datos->getModalidadCarreraId() . "'><label>" . $datos->getModalidadCarrera() . "</label></option>";
    }
    return $lista;
}
