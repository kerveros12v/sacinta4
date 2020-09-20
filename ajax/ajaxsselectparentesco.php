<?php

require_once("../Crud/CrudParentesco.php");

use Crud\CrudParentescos;

function cargarparentesco($opt)
{
    $crudparentesco1 = new CrudParentescos();
    $listaparentesco = $crudparentesco1->mostrar();
    $lista = '<option value="0"><label>Seleccione un Parentesco</label></option>';
    foreach ($listaparentesco as $parentesco) {
        if ($opt == $parentesco->getIdParentescos()) {
            $lista .= " <option selected='selected'  value='" . $parentesco->getIdParentescos() . "'><label>" . ($parentesco->getParentesco()) . "</label></option>";
        } else {
            $lista .= " <option  value='" . $parentesco->getIdParentescos() . "'><label>" . ($parentesco->getParentesco()) . "</label></option>";
        }
    }
    return $lista;
}
