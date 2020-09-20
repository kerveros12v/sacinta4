<?php
require_once("../Crud/CrudBonodesarrollo.php");

use Clasesphp\Bonodesarrollo;
use Crud\CrudBonodesarrollo;

function cargarbonodesarrollo($opt)
{
	$oCrudbonoDesarrollo = new CrudBonodesarrollo();
	$listabonoDesarrollo = $oCrudbonoDesarrollo->mostrar();
	$bonoDesarrollo = new Bonodesarrollo();
	$lista = '<option disabled><label>Seleccione si recibe Bono de Desarrollo</label></option>"';
	foreach ($listabonoDesarrollo as $bonoDesarrollo) {
		if ($opt == $bonoDesarrollo->getBonoDesarrolloId()) {
			$lista .= (" <option selected='selected'  value='" . $bonoDesarrollo->getBonoDesarrolloId() . "'><label>" ./*utf8_encode*/ (strtoupper($bonoDesarrollo->getBonoDesarrollo())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $bonoDesarrollo->getBonoDesarrolloId() . "'><label>" ./*utf8_encode*/ (strtoupper($bonoDesarrollo->getBonoDesarrollo())) . "</label></option>");
		}
	}
	return $lista;
}
