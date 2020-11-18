<?php

require_once("../Crud/CrudMatriculacion.php");

use Crud\CrudMatriculas;

function matriulaporfecha()
{
    $crudmatri1 = new CrudMatriculas();
    $listafechas = $crudmatri1->mostrarlistafechasMatriculacion();
    $lstfechas = "";
    foreach ($listafechas as $fecha) {
        $lstfechas .= (" <option  value='" . $fecha . "'><label>" . ($fecha) . "</label></option>");
    }
    return $lstfechas;
}
echo matriulaporfecha();
