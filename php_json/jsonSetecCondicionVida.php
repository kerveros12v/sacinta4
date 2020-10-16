<?php


require_once("../Crud/CrudSetecCondicionVida.php");

use Clasesphp\SetecCondicionVida;
use Crud\CrudSetecCondicionVida;

function cargarSetecCondicionVida()
{
    $id = $_GET['id'];
    $fecha = $_GET['fecha'];
    $dato = new SetecCondicionVida();
    $crud = new CrudSetecCondicionVida();
    $dato = $crud->obtenersetec($id, $fecha);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargarSetecCondicionVida());
