<?php
require_once("../Crud/CrudEtnia.php");

use Clasesphp\Etnias;
use Crud\CrudEtnia;

function cargarEtnia($opt)
{
    $oCrud = new CrudEtnia();
    $listaetnia = $oCrud->mostrar();
    $etnia1 = new Etnias();
    $lista = '<option disabled><label>Seleccione una Etnia</label></option>"';
    foreach ($listaetnia as $etnia1) {
        if ($opt == $etnia1->getEtniaId()) {
            $lista .= " <option  selected='selected' value='" . $etnia1->getEtniaId() . "'><label>" . ($etnia1->getEtnia()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $etnia1->getEtniaId() . "'><label>" . ($etnia1->getEtnia()) . "</label></option>";
        }
    }
    return $lista;
}
