<?php

require_once("../Crud/CrudSetecEncuestador.php");

use Clasesphp\SetecEncuestador;
use Crud\CrudSetecEncuestador;

function cargarSetecEncuestador()
{
    $id = $_GET['id'];
    $dato = new SetecEncuestador();
    $crud = new CrudSetecEncuestador();
    $dato = $crud->obtenerSetecEncuestador($id);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargarSetecEncuestador());
