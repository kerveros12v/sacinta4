<?php
require_once("../crud/Crudnivelformacion.php");
function cargarNivelFormacion(){
    $lista=array();
    $dato= new Nivelformacion();
    $crud=new CrudNivelformacion();
    $lstdatos=$crud->mostrar();
    foreach($lstdatos as $dato){    
    array_push($lista,$dato->formatoArray());
    }
   
    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarNivelFormacion());

?>