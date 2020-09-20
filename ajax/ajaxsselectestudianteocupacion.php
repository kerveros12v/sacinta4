<?php
require_once("../Crud/CrudEstudianteOcupacion.php");

use Crud\CrudEstudianteOcupacion;

function cargarestudianteocupacion($opt)
{
	$oCrudestudianteocupacion = new CrudEstudianteOcupacion();
	$listaestudianteocupacion = $oCrudestudianteocupacion->mostrar();
	$lista = '<option disabled><label>Seleccione un Estado Ocupacional</label></option>"';
	foreach ($listaestudianteocupacion as $estudianteocupacion) {
		if ($opt == $estudianteocupacion->getEstudianteOcupacionId()) {
			$lista .= (" <option selected='selected'  value='" . $estudianteocupacion->getEstudianteOcupacionId() . "'><label>" ./**/ (strtoupper($estudianteocupacion->getEstudianteOcupacion())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $estudianteocupacion->getEstudianteOcupacionId() . "'><label>" ./**/ (strtoupper($estudianteocupacion->getEstudianteOcupacion())) . "</label></option>");
		}
	}
	return $lista;
}
