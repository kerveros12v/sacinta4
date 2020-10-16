<?php
require_once("../crud/CrudPeriodoacademico.php");
function cargarperiodoacademico(){
    $lista=null;

    $periodoacademico= new Periodoacademico();
    $crudperiodoaca=new CrudPeriodoacademico();
    $lstperiodoacademico=$crudperiodoaca->mostrar();
    foreach($lstperiodoacademico as $periodo){    
        $lista[]= $periodo->formatoJSON();
    }
    $salida='{"periodos":[';
        if($lista!=null){
        for($i=0;$i<(count($lista));$i++){
        if($i<(sizeof($lista)-1)) {
            $salida.=$lista[$i].",";
        }
        else {
        $salida.=$lista[$i];
        }
        }
        $salida.=']}';
        }
        else{
            $salida="NO existen datos";
        }
        return $salida;
    
}
header("Content-Type: application/json");
print_r( cargarperiodoacademico());
?>