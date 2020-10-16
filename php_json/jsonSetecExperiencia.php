<?php

require_once("../Crud/CrudSetecExperienciaLaboral.php");

use Clasesphp\SetecExperienciaLaboral;
use Crud\CrudSetecExperienciaLaboral;

function cargarSetecExperienciaLaboral()
{
    $id = $_GET['id'];
    $dato = new SetecExperienciaLaboral();
    $crud = new CrudSetecExperienciaLaboral();
    $dato = $crud->obtenerSetecexperiencialaboral($id);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargarSetecExperienciaLaboral());
