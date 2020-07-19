<?php
require_once("../Crud/CrudPeriodoacademico.php");

use Clasesphp\Periodoacademico;
use Crud\CrudPeriodoacademico;

function cargarperiodo($opt){
$crud1=new CrudPeriodoacademico();
//Opcion de unico periodo(Periodo actual)
$lista='<option disabled><label>Seleccione un Periodo academico</label></option>"';
    if($opt==0){
        $periodo=$crud1->obtenerPeriodoAcademicoActual();
        $lista.="<option selected='selected' value='".$periodo->get_periodoacademicoId()."'><label>".((  $periodo->get_periodoAcademico()))."</label></option>";

    }else {
        $listapeiodos=$$crud1->mostrar();
		$periodo=new Periodoacademico();
		foreach($listapeiodos as $periodo){
            if($periodo->get_actual()==1) {
                        $lista.="<option selected='selected' value='".$periodo->get_periodoacademicoId()."'><label>".((  $periodo->get_periodoAcademico()))."</label></option>";
            }else{
                $lista.="<option value='".$periodo->get_periodoacademicoId()."'><label>".((  $periodo->get_periodoAcademico()))."</label></option>";
            }
        }
    }
    return $lista;
}
?>