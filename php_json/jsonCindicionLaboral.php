<?php
require_once("../crud/CrudSetecCondicionTrabajo.php");
function cargar(){
    $id=$_GET['id'];
    $fecha=$_GET['fecha'];
    $dato= new SeteCondicionLaboral();
    $crud=new CrudSeteCondicionLaboral();
    $dato=$crud->obtenersetec($id,$fecha);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargar());
?>