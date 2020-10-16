<?php

require_once("../Crud/CrudSexo.php");

use Clasesphp\Sexos;
use Crud\CrudSexo;

function cargarSexos()
{
    $lista = array();

    $sexo = new Sexos();
    $crudsexo = new CrudSexo();
    $lstsexo = $crudsexo->mostrar();
    foreach ($lstsexo as $sexo) {
        array_push($lista, $sexo->formatoArray());
    }

    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarSexos());
