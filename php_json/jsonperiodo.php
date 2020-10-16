<?php
require_once("../crud/CrudPeriodoacademico.php");
function cargarperiodoacademico(){
    $lista='';

    $periodoacademico= new Periodoacademico();
    $simatricula=FALSE;
    $crudperiodoaca=new CrudPeriodoacademico();
    $periodoacademico=$crudperiodoaca->obtenerPeriodoAcademicoActual();

   
    return $periodoacademico->formatoJSON();
}
header("Content-Type: application/json");
echo cargarperiodoacademico();
?>