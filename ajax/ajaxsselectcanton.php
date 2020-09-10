<?php
require_once("../Crud/CrudCanton.php");

use  Crud\CrudCantones;
use  Clasesphp\Cantones;

function cargarCanton($opt, $id)
{
    $oCrudcantonNacionalidad = new CrudCantones();
    $listacantonNacionalidad = $oCrudcantonNacionalidad->mostrarlistapoProvincia($id);
    $cantonNacionalidad = new Cantones();
    $lista = '<option value=0 selected="selected" ><label>Seleccione un Canton</label></option>"';
    foreach ($listacantonNacionalidad as $cantonNacionalidad) {
        if ($opt == $cantonNacionalidad->getCantonId()) {
            $lista .= " <option selected='selected' value='" . $cantonNacionalidad->getCantonId() . "'><label>" . ($cantonNacionalidad->getCanton()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $cantonNacionalidad->getCantonId() . "'><label>" . ($cantonNacionalidad->getCanton()) . "</label></option>";
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
        if ($opt == $cantonNacionalidad->getCantonId()) {
            $lista .= " <option selected='selected' value='" . $cantonNacionalidad->getCantonId() . "'><label>" . ($cantonNacionalidad->getCanton()) . "</label></option>";
        } else {
            $lista .= " <option value='" . $cantonNacionalidad->getCantonId() . "'><label>" . ($cantonNacionalidad->getCanton()) . "</label></option>";
        }
    }
    return $lista;
}
