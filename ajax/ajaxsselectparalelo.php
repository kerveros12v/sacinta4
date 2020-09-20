<?php

require_once("../Crud/CrudParalelo.php");

use Crud\CrudParalelo;

function cargarparalelo($opt)
{
    $lista = '<option disabled><label>Seleccione un Paralelo</label></option>"';
    $oCrudParalelo = new CrudParalelo();
    $listaparalelo = $oCrudParalelo->mostrar();
    foreach ($listaparalelo as $paralelo) {
        if ($paralelo->getParaleloId() == $opt) {
            $lista .= (" <option selected='selected' value='" . $paralelo->getParaleloId() . "'><label>" . ($paralelo->getParalelo()) . "</label></option>");
        } else {
            $lista .= (" <option  value='" . $paralelo->getParaleloId() . "'><label>" . ($paralelo->getParalelo()) . "</label></option>");
        }
    }
    return $lista;
}
