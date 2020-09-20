<?php
require_once("../clasesphp/Parroquia.php");
require_once("../Crud/CrudParroquia.php");

use Clasesphp\Parroquia;
use Crud\CrudParroquia;

function cargarParroquia($opt, $id)
{
    $parroquia = new Parroquia();
    $crudparroquia = new CrudParroquia();
    $lstparroquia = $crudparroquia->mostrarporCiudad($id);
    $lista = '<option><label>Seleccione una Parroquia</label></option>"';
    foreach ($lstparroquia as $parroquia) {
        if ($opt == $parroquia->getIdparroquias()) {
            $lista .= "<option selected='selected' value='" . $parroquia->getIdparroquias() . "'><label>" . $parroquia->getParroquia() . "</label></option>";
        } else {
            $lista .= "<option value='" . $parroquia->getIdparroquias() . "'><label>" . $parroquia->getParroquia() . "</label></option>";
        }
    }
    return $lista;
}
function cargarParroquia1($id)
{
    $parroquia = new Parroquia();
    $crudparroquia = new CrudParroquia();
    $lstparroquia = $crudparroquia->mostrarporCiudad($id);
    $lista = '<option><label>Seleccione una Parroquia</label></option>"';
    foreach ($lstparroquia as $parroquia) {
        $lista .= "<option value='" . $parroquia->getIdparroquias() . "'><label>" . $parroquia->getParroquia() . "</label></option>";
    }
    return $lista;
}
