<?php

require_once("../Crud/CrudTipoMatricula.php");

use Clasesphp\Tipomatricula;
use Crud\CrudTipomatricula;

function cargartipoMatricula($opt)
{
    $crud1 = new CrudTipomatricula();
    $lista = '<option disabled><label>Seleccione Tipo de Matricula</label></option>';
    $listadatos = $crud1->mostrar();

    $dato = new Tipomatricula();
    foreach ($listadatos as $dato) {
        if ($dato->getTipoMatriculaId() == $opt) {
            $lista .= "<option selected='selected' value='" . $dato->getTipoMatriculaId() . "'><label>" . (($dato->getTipoMatricula())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $dato->getTipoMatriculaId() . "'><label>" . (($dato->getTipoMatricula())) . "</label></option>";
        }
    }

    return $lista;
}
