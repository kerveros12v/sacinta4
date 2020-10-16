<?php
require_once("../crud/CrudCanton.php");
function cargarCanton(){
    $lista=array();
   $id=$_GET['id'];
    $canton= new Cantones();
    $crudcanton=new CrudCantones();
    $lstcanton=$crudcanton->mostrarlistapoProvincia($id);
    foreach($lstcanton as $canton){    
    array_push($lista,$canton->formatoArray());
    }
   
    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarCanton());

?>