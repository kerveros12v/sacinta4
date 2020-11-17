<?php
require_once("../Crud/CrudSextaRazonBeca.php");

use Clasesphp\Sextarazonbeca;
use Crud\CrudSextarazonbeca;

function cargarsextarazonbeca($opt)
{
	$oCrud = new CrudSextarazonbeca();
	$listad = $oCrud->mostrar();
	$datos = new Sextarazonbeca();
	$lista = '<option disabled><label>Seleccione una razon de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getSextaRazonBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getSextaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getSextaRazonBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getSextaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getSextaRazonBeca())) . "</label></option>");
		}
	}
	return $lista;
}
