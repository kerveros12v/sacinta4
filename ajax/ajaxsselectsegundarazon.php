<?php
require_once("../Crud/CrudSegundaaRazonBeca.php");

use Clasesphp\Segundarazonbeca;
use Crud\CrudsegundarazonBeca;

function cargarsegundarazon($opt)
{
	$oCrud = new CrudsegundarazonBeca();
	$listad = $oCrud->mostrar();
	$datos = new Segundarazonbeca();
	$lista = '<option disabled><label>Seleccione una razon de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getSegundaRazonBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getSegundaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getSegundaRazonBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getSegundaRazonBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getSegundaRazonBeca())) . "</label></option>");
		}
	}
	return $lista;
}
