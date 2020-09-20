<?php
require_once("../Crud/CrudColegios.php");

use Crud\CrudColegios;

function cargarColegios($id, $opt)
{
    $crudColegio1 = new CrudColegios();
    $listacolegio = $crudColegio1->listaColegios($id);
    $lista = '<option disabled><label>Seleccione un Colegio</label></option>"';
    foreach ($listacolegio as $colegio) {
        if ($opt == $colegio->getIdColegios()) {
            $lista .= "<option selected='selected' value='" . $colegio->getIdColegios() . "'><label>" . ($colegio->getColegio()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $colegio->getIdColegios() . "'><label>" . ($colegio->getColegio()) . "</label></option>";
        }
    }
    return $lista;
}
