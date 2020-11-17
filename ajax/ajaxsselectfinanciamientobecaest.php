<?php
require_once("../Crud/CrudFinanciamientobeca.php");

use Clasesphp\Financiamientobeca;
use Crud\CrudFinanciamientobeca;

function cargarfinanciamientobeca($opt)
{
	$oCrud = new CrudFinanciamientobeca();
	$listad = $oCrud->mostrar();
	$datos = new Financiamientobeca();
	$lista = '<option disabled><label>Seleccione una forma de Financiamiento de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getFinanciamientoBecaid()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getFinanciamientoBecaid() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getFinanciamientoBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getFinanciamientoBecaid() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getFinanciamientoBeca())) . "</label></option>");
		}
	}
	return $lista;
}
