<?php

require_once("../Crud/CrudPueblonacionalidad.php");

use Clasesphp\PueblosNacionalidad;
use Crud\CrudPuebloNacionalidad;

function cargarPueblo($opt)
{
    $oCrudPueblonacionalidad = new CrudPuebloNacionalidad();
    $listapueblonacionalidad1 = $oCrudPueblonacionalidad->mostrar();
    $pueblonacionalidad1 = new PueblosNacionalidad();
    $lista = '<option disabled><label>Seleccione un Pueblo</label></option>"';
    foreach ($listapueblonacionalidad1 as $pueblonacionalidad1) {
        if ($opt == $pueblonacionalidad1->getPuebloNacionalidadId()) {
            $lista .= " <option selected='selected'  value='" . $pueblonacionalidad1->getPuebloNacionalidadId() . "'><label>" . ($pueblonacionalidad1->getPuebloNacionalidad()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $pueblonacionalidad1->getPuebloNacionalidadId() . "'><label>" . ($pueblonacionalidad1->getPuebloNacionalidad()) . "</label></option>";
        }
    }
    return $lista;
}
function cargarPuebloporEtnia($etnia)
{
    $oCrudPueblonacionalidad = new CrudPuebloNacionalidad();
    $listapueblonacionalidad1 = $oCrudPueblonacionalidad->mostrarporEtnia($etnia);
    $pueblonacionalidad1 = new PueblosNacionalidad();
    $lista = '<option disabled><label>Seleccione un Pueblo</label></option>"';
    foreach ($listapueblonacionalidad1 as $pueblonacionalidad1) {
        $lista .= " <option   value='" . $pueblonacionalidad1->getPuebloNacionalidadId() . "'><label>" . ($pueblonacionalidad1->getPuebloNacionalidad()) . "</label></option>";
    }
    return $lista;
}
function cargarPuebloEtnia($opt, $etnia)
{
    $oCrudPueblonacionalidad = new CrudPuebloNacionalidad();
    $listapueblonacionalidad1 = $oCrudPueblonacionalidad->mostrarporEtnia($etnia);
    $pueblonacionalidad1 = null;
    $lista = '<option disabled><label>Seleccione un Pueblo</label></option>"';
    foreach ($listapueblonacionalidad1 as $pueblonacionalidad1) {
        if ($opt == $pueblonacionalidad1->getPuebloNacionalidadId()) {
            $lista .= " <option selected='selected'  value='" . $pueblonacionalidad1->getPuebloNacionalidadId() . "'><label>" . ($pueblonacionalidad1->getPuebloNacionalidad()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $pueblonacionalidad1->getPuebloNacionalidadId() . "'><label>" . ($pueblonacionalidad1->getPuebloNacionalidad()) . "</label></option>";
        }
    }
    return $lista;
}
