<?php
require_once("../Crud/CrudQuintaRazonBeca.php");

use Clasesphp\Quintarazonbeca;
use Crud\CrudQuintarazonbeca;

function cargarquintarazonbeca($opt)
{
	$oCrud = new CrudQuintarazonbeca();
	$listad = $oCrud->mostrar();
	$datos = new Quintarazonbeca();
	$lista = '<option disabled><label>Seleccione una razon de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getQuintaRazonBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getQuintaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getQuintaRazonBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getQuintaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getQuintaRazonBeca())) . "</label></option>");
		}
	}
	return $lista;
}
