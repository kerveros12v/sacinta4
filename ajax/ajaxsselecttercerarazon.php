<?php
require_once("../Crud/CrudTerceraRazonBeca.php");

use Clasesphp\Tercerarazonbeca;
use Crud\CrudTercerarazonbeca;

function cargartercerarazon($opt)
{
	$oCrud = new CrudTercerarazonbeca();
	$listad = $oCrud->mostrar();
	$datos = new Tercerarazonbeca();
	$lista = '<option disabled><label>Seleccione una razon de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getTerceraRazonBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getTerceraRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getTerceraRazonBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getTerceraRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getTerceraRazonBeca())) . "</label></option>");
		}
	}
	return $lista;
}
