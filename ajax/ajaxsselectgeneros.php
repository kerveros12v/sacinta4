<?php
require_once('../Crud/CrudGeneros.php');

use Clasesphp\Generos;
use Crud\CrudGeneros;

function cargarGeneros($opt)
{
    $oCrudGeneros = new CrudGeneros();
    $listaGeneros = $oCrudGeneros->mostrar();
    $generos = new  Generos();
    $lista = '<option disabled><label>Seleccione un Genero</label></option>';
    foreach ($listaGeneros as $generos) {
        if ($opt == $generos->getGeneroId()) {
            $lista .= "<option selected='selected'  value='" . $generos->getGeneroId() . "'><label>" . (strtoupper($generos->getGenero())) . "</label></option>";
        } else {
            $lista .= "<option  value='" . $generos->getGeneroId() . "'><label>" . (strtoupper($generos->getGenero())) . "</label></option>";
        }
    }
    return $lista;
}
