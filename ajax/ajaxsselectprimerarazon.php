<?php
require_once("../Crud/CrudPrimeraRazonBeca.php");

use Clasesphp\PrimeraRazonBeca;
use Crud\CrudPrimeraRazonBeca;

function cargarprimerarazon($opt)
{
	$oCrud = new CrudPrimeraRazonBeca();
	$listabonoDesarrollo = $oCrud->mostrar();
	$dato = new PrimeraRazonBeca();
	$lista = '<option disabled><label>Seleccione una razon de beca</label></option>"';
	foreach ($listabonoDesarrollo as $dato) {
		if ($opt == $dato->getPrimeraRazonBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $dato->getPrimeraRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($dato->getPrimeraRazonBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $dato->getPrimeraRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($dato->getPrimeraRazonBeca())) . "</label></option>");
		}
	}
	return $lista;
}
