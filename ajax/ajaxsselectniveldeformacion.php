<?php
require_once("../Crud/Crudnivelformacion.php");

use Clasesphp\Nivelformacion;
use Crud\CrudNivelformacion;

function cargarnivelformacion($opt)
{
	$oCrudNivelformacion = new CrudNivelformacion();
	$listaCrudNivelformacion = $oCrudNivelformacion->mostrar();
	$formacion = new Nivelformacion();
	$lista = '<option disabled><label>Seleccione un Nivel de Formacion</label></option>"';
	foreach ($listaCrudNivelformacion as $formacion) {
		if ($opt == $formacion->getNivelFormacionId()) {
			$lista .= (" <option selected='selected' value='" . $formacion->getNivelFormacionId() . "'><label>" . ($formacion->getNivelFormacion()) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $formacion->getNivelFormacionId() . "'><label>" . ($formacion->getNivelFormacion()) . "</label></option>");
		}
	}
	return $lista;
}
