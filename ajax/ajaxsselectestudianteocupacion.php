<?php
require_once("../Crud/CrudEstudianteOcupacion.php");

use Crud\CrudEstudianteOcupacion;

function cargarestudianteocupacion($opt){
	    $oCrudestudianteocupacion=new CrudEstudianteOcupacion();
        $listaestudianteocupacion=$oCrudestudianteocupacion->mostrar();
        $lista='<option disabled><label>Seleccione un Estado Ocupacional</label></option>"';
		foreach($listaestudianteocupacion as $estudianteocupacion){
			if($opt==$estudianteocupacion->get_estudianteOcupacionId())
			{
				$lista.=(" <option selected='selected'  value='".$estudianteocupacion->get_estudianteOcupacionId()."'><label>"./**/(strtoupper($estudianteocupacion->get_estudianteOcupacion()))."</label></option>");
			}
			else
			{
				$lista.=(" <option  value='".$estudianteocupacion->get_estudianteOcupacionId()."'><label>"./**/(strtoupper($estudianteocupacion->get_estudianteOcupacion()))."</label></option>");
			}

        }
        return $lista;
            }
		?>