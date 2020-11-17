<?php
require_once("../Crud/CrudCuartaRazonBeca.php");

use Clasesphp\Cuartarazonbeca;
use Crud\CrudCuartarazonbeca;

function cargarcuartarazonbeca($opt)
{
	$oCrud = new CrudCuartarazonbeca();
	$listad = $oCrud->mostrar();
	$datos = new Cuartarazonbeca();
	$lista = '<option disabled><label>Seleccione una razon de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getCuartaRazonBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getCuartaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getCuartaRazonBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getCuartaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getCuartaRazonBeca())) . "</label></option>");
		}
	}
	return $lista;
}
