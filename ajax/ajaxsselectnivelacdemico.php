<?php

require_once("../Crud/CrudNivelacademico.php");

use Clasesphp\Nivelacademico;
use Crud\CrudNivelacademico;

function cargarnivelAcademico($opt)
{
    $crud1 = new CrudNivelacademico();
    $lista = '<option disabled><label>Seleccione el Nivel Academico</label></option>';
    $listadatos = $crud1->mostrar();

    $dato = new Nivelacademico();
    foreach ($listadatos as $dato) {
        if ($dato->getnivelAcademicoQueCursaId() == $opt) {
            $lista .= "<option selected='selected' value='" . $dato->getnivelAcademicoQueCursaId() . "'><label>" . (($dato->getNivelAcademicoQueCursa())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $dato->getnivelAcademicoQueCursaId() . "'><label>" . (($dato->getNivelAcademicoQueCursa())) . "</label></option>";
        }
    }

    return $lista;
}
