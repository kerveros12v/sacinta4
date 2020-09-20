<?php
require_once("../Crud/CrudCicloPeriodo.php");

use Crud\CrudCicloPeriodo;

function ciclop($id)
{
    $lista = "";
    try {
        $crudciclo = new CrudCicloPeriodo();
        $listacliclos = $crudciclo->mostrar();
        foreach ($listacliclos as $c) {
            if ($id == $c->getIdcicloperiodo())
                $lista .= "<option selected='selected' value='" . $c->getIdcicloperiodo() . "'><label>" . ($c->getCiclo()) . "</label></option>";
            else
                $lista .= "<option value='" . $c->getIdcicloperiodo() . "'><label>" . ($c->getCiclo()) . "</label></option>";
        }
    } catch (Exception $ex) {
        echo ('<script>console.log(' . $ex . ');</script>');
    }
    $lista .= "";
    return $lista;
}
