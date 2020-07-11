<?php
require_once("../Crud/CrudCanton.php");

use  Crud\CrudCantones;
use  Clasesphp\Cantones;

function cargarCanton($opt, $id)
{
    $oCrudcantonNacionalidad = new CrudCantones();
    $listacantonNacionalidad = $oCrudcantonNacionalidad->mostrarlistapoProvincia($id);
    $cantonNacionalidad = new Cantones();
    $lista = '<option disabled><label>Seleccione un Canton</label></option>"';
    /*
    if ($opt == -1) {
        $lista .= " <option selected='selected' value='-1'><label>Todos</label></option>";
    }
    */
    foreach ($listacantonNacionalidad as $cantonNacionalidad) {
        if ($opt == $cantonNacionalidad->get_cantonId()) {
            $lista .= " <option selected='selected' value='" . $cantonNacionalidad->get_cantonId() . "'><label>" . ($cantonNacionalidad->get_canton()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $cantonNacionalidad->get_cantonId() . "'><label>" . ($cantonNacionalidad->get_canton()) . "</label></option>";
        }
    }
    return $lista;
}
function cargarlistaCanton($opt)
{
    $oCrudcantonNacionalidad = new CrudCantones();
    $listacantonNacionalidad = $oCrudcantonNacionalidad->mostrar();
    $cantonNacionalidad = new Cantones();
    $lista = '<option disabled><label>Seleccione un Canton</label></option>"';
    foreach ($listacantonNacionalidad as $cantonNacionalidad) {
        if ($opt == $cantonNacionalidad->get_cantonId()) {
            $lista .= " <option selected='selected' value='" . $cantonNacionalidad->get_cantonId() . "'><label>" . ($cantonNacionalidad->get_canton()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $cantonNacionalidad->get_cantonId() . "'><label>" . ($cantonNacionalidad->get_canton()) . "</label></option>";
        }
    }
    return $lista;
}
