<?php
require_once("../crud/CrudParroquia.php");
function cargarParroquia(){
    $lista=array();
   $id=$_GET['id'];
    $dato= new Parroquia();
    $crud=new CrudParroquia();
    $lstdatos=$crud->mostrarporCiudad($id);
    foreach($lstdatos as $dato){    
    array_push($lista,$dato->formatoArray());
    }
   
    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarParroquia());

?>