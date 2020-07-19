<?php
require_once("../Crud/CrudIngresosestudiante.php");
use Clasesphp\Ingresosestudiante;
use Crud\CrudIngresosestudiante;

function cargaringresosEstudiantes($opt){
    $oCruds=new CrudIngresosestudiante();
    $lists=$oCruds->mostrar();
    $ingresosestudiantes=new Ingresosestudiante();
    $lista='<option disabled><label>Seleccione un uso del Ingreso del Estudiante</label></option>"';
            foreach($lists as $ingresosestudiantes){
                if($opt==$ingresosestudiantes->get_ingresosestudianteId())
                {
                    $lista.=(" <option selected='selected' value='".$ingresosestudiantes->get_ingresosestudianteId()."'><label>".($ingresosestudiantes->get_ingresosestudiante())."</label></option>");
                }
                else
                {
                    $lista.=(" <option  value='".$ingresosestudiantes->get_ingresosestudianteId()."'><label>".($ingresosestudiantes->get_ingresosestudiante())."</label></option>");
                }
            }
            return $lista;
}

		?>