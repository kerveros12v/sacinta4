<?php

require_once("../Crud/CrudSetecAspirante.php");

use Clasesphp\SetecAspirante;
use Crud\CrudSetecAspirante;

function cargarAspirante()
{
    $id = $_GET['id'];
    $lista = array();
    $dato = new SetecAspirante();
    $crud = new CrudSetecAspirante();
    $dato = $crud->obtenerSetecaspirante($id);
    array_push($lista, $dato->formatoArray());
    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarAspirante());
