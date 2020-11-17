<?php
require_once("../Crud/CrudTipoBeca.php");

use Clasesphp\Tipobeca;
use Crud\CrudTipoBeca;

function cargartipobeca($opt)
{
	$oCrud = new CrudTipoBeca();
	$listad = $oCrud->mostrar();
	$datos = new Tipobeca();
	$lista = '<option disabled><label>Seleccione una tipo de beca</label></option>"';
	foreach ($listad as $datos) {
		if ($opt == $datos->getTipoBecaId()) {
			$lista .= (" <option selected='selected'  value='" . $datos->getTipoBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getTipoBeca())) . "</label></option>");
		} else {
			$lista .= (" <option  value='" . $datos->getTipoBecaId() . "'><label>" ./*utf8_encode*/ (strtoupper($datos->getTipoBeca())) . "</label></option>");
		}
	}
	return $lista;
}
