<?php
require_once("../clasesphp/Residenciaestudiantes.php");
require_once("../crud/CrudResidenciaestudiantes.php");
function cargarResidencia(){
   $cdi1=$_POST['ced'];
   $periodo=$_POST['periodo'];
    //$cdi1=1003854179;
    //$periodo=1;
   $crudresi=new CrudResidenciaestudiantes();
   //$crudresi->eliminar('813');
   $residenciaest= new Residenciaestudiantes();
    
    if($crudresi->existe($cdi1, $periodo)==1){
        $residenciaest=$crudresi->obtenerresidenciaestudiantes($cdi1, $periodo);
      
    }
    return $residenciaest->formatoJSON();
    
       // echo($residenciaest->toString()."<br>");
        //$listados= $crudresi->mostrar();
       //foreach($listados as $residenciaest )echo($residenciaest->toString()."<br>");
}
echo cargarResidencia();
?>
