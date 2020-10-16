<?php
require_once("../Crud/CrudFormacionArtesanal.php");

use Clasesphp\FormacionArtesanal;
use Crud\CrudFormacionArtesanal;

function cargarFormacionArtesanal($id)
{
	$oCrudNivelformacion = new CrudFormacionArtesanal();
	$listaCrudNivelformacion = $oCrudNivelformacion->mostrar();
	$formacion = new FormacionArtesanal();
	$lista = '';
	foreach ($listaCrudNivelformacion as $formacion) {
		if ($id == $formacion->getIdformacionArtesano()) {
			$lista .= " <option selected='selected' value='" . $formacion->getIdformacionArtesano() . "'><label>" . ($formacion->getFormacionArtesanal()) . "</label></option>";
		} else {
			$lista .= " <option value='" . $formacion->getIdformacionArtesano() . "'><label>" . ($formacion->getFormacionArtesanal()) . "</label></option>";
		}
	}
	return $lista;
}
