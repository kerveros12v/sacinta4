<?php

require_once("../Crud/CrudIdiomas.php");

use Clasesphp\Idiomas;
use Crud\CrudIdiomas;

function cargarIdioma($opt)
{
    $oCrudIdioma = new CrudIdiomas();
    $listaIdiomas = $oCrudIdioma->mostrar();
    $dioma1 = new Idiomas();
    $lista = '<option disabled><label>Seleccione un Idioma Ansestral</label></option>"';
    foreach ($listaIdiomas as $dioma1) {
        if ($opt == $dioma1->getIdidiomaAncestral()) {
            $lista .= "<option selected='selected' value='" . $dioma1->getIdidiomaAncestral() . "'><label>" . ($dioma1->getIdioma()) . "</label></option>";
        } else {
            $lista .= "<option value='" . $dioma1->getIdidiomaAncestral() . "'><label>" . ($dioma1->getIdioma()) . "</label></option>";
        }
    }
    return $lista;
}
function cargarIdiomaEtnia($opt, $etnia)
{
    $oCrudIdioma = new CrudIdiomas();
    $listaIdiomas = $oCrudIdioma->mostrarporEtnia($etnia);
    $dioma1 = new Idiomas();
    $lista = '<option disabled><label>Seleccione un Idioma Ansestral</label></option>"';
    foreach ($listaIdiomas as $dioma1) {
        if ($opt == $dioma1->getIdidiomaAncestral()) {
            $lista .= "<option selected='selected' value='" . $dioma1->getIdidiomaAncestral() . "'><label>" . ($dioma1->getIdioma()) . "</label></option>";
        } else {
            $lista .= "<option value='" . $dioma1->getIdidiomaAncestral() . "'><label>" . ($dioma1->getIdioma()) . "</label></option>";
        }
    }
    return $lista;
}
function cargarIdiomaporEtnia($opt)
{
    $oCrudIdioma = new CrudIdiomas();
    $listaIdiomas = $oCrudIdioma->mostrarporEtnia($opt);
    $dioma1 = new Idiomas();
    $lista = '<option disabled><label>Seleccione un Idioma Ansestral</label></option>"';
    foreach ($listaIdiomas as $dioma1) {

        $lista .= "<option value='" . $dioma1->getIdidiomaAncestral() . "'><label>" . ($dioma1->getIdioma()) . "</label></option>";
    }
    return $lista;
}
