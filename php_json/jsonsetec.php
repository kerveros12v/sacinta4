<?php

require_once("../Crud/CrudSetec.php");

use Clasesphp\Setec;
use Crud\CrudSetec;

function cargarSetec()
{
    $a = $_GET['a'];
    $dato = new Setec();
    $crud = new CrudSetec();
    $dato = $crud->mostrarsetec($a);
    $lista = null;
    foreach ($dato as $dat) {
        $lista[] = $dat->formatoArray();
    }
    return $lista;
}

header("Content-Type: application/json");
print_r(json_encode(cargarSetec()));
