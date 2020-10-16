<?php

require_once("../Crud/CrudSetecOcupacion.php");

use Clasesphp\SetecOcupacion;
use Crud\CrudSetecOcupacion;

function cargarSetecOcupacion()
{
    $id = $_GET['id'];
    $dato = new SetecOcupacion();
    $crud = new CrudSetecOcupacion();
    $dato = $crud->obtenerSetecOcupacion($id);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargarSetecOcupacion());
