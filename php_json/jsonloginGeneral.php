<?php
require_once("../crud/CrudSetecPerfil.php");
function cargar(){
    $id=$_GET['id'];
    $dato= new LoginGeneral();
    $crud=new CrudLoginGeneral();
    $dato=$crud->obtenerLoginGeneral($id);
    return $dato->formatoJSON();
}

header("Content-Type: application/json");
print_r(cargar());
?>