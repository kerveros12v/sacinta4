<?php
require_once("../crud/CrudFormacionArtesanal.php");
function cargarFormacionArtesanal(){
    $lista=array();
   $id=$_GET['id'];
    $dato= new FormacionArtesanal();
    $crud=new CrudFormacionArtesanal();
    $lstdatos=$crud->mostrar();
    foreach($lstdatos as $dato){    
    array_push($lista,$dato->formatoArray());
    }
   
    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarFormacionArtesanal());

?>