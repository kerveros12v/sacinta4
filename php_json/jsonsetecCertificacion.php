<?php

require_once("../Crud/CrudSetecCertificacion.php");

use Clasesphp\SetecCertificacion;
use Crud\CrudSetecCertificacion;

function cargarSetecCertificacion()
{
    $id = $_GET['id'];
    $dato = new SetecCertificacion();
    $crud = new CrudSetecCertificacion();
    $dato = $crud->obtenerSetecCertificacion($id);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargarSetecCertificacion());
