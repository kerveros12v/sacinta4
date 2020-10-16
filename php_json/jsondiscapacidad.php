<?php
require_once("../crud/CrudDiscapacidad.php");
function cargarDiscapacidad(){
    $lista=null;
   
    $discapacidad= new Discapacidad();
    $cruddiscapacidad=new CrudDiscapacidad();
    $lstdiscapacidad=$cruddiscapacidad->mostrar();
    foreach($lstdiscapacidad as $discapacidad){    
    $lista[]= $discapacidad->formatoArray();
    }

    return json_encode($lista);
}

header("Content-Type: application/json");
print_r(cargarDiscapacidad());

?>