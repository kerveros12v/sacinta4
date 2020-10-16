<?php

require_once("../Crud/CrudSocioEmpleo.php");

use Clasesphp\SocioEmpleo;
use Crud\CrudSocioEmpleo;

function cargarSocioEmpleo()
{
    $lista = array();

    $dato = new SocioEmpleo();
    $crud = new CrudSocioEmpleo();
    $lstdatos = $crud->mostrar();
    foreach ($lstdatos as $dato) {
        array_push($lista, $dato->formatoArray());
    }

    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarSocioEmpleo());
