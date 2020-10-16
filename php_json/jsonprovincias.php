<?php
require_once("../crud/CrudProvincia.php");
function cargarprovincia(){
    $lista=null;
   
    $provincia= new Provincias();
    $crudprovincia=new CrudProvincias();
    $lstprovincia=$crudprovincia->mostrar();
    foreach($lstprovincia as $provincia){    
    $lista[]= $provincia->formatoArray();
    }
    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarprovincia());

?>