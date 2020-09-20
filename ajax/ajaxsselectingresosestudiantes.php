<?php
require_once("../Crud/CrudIngresosestudiante.php");

use Clasesphp\Ingresosestudiante;
use Crud\CrudIngresosestudiante;

function cargaringresosEstudiantes($opt)
{
    $oCruds = new CrudIngresosestudiante();
    $lists = $oCruds->mostrar();
    $ingresosestudiantes = new Ingresosestudiante();
    $lista = '<option disabled><label>Seleccione un uso del Ingreso del Estudiante</label></option>"';
    foreach ($lists as $ingresosestudiantes) {
        if ($opt == $ingresosestudiantes->getIngresosestudianteId()) {
            $lista .= (" <option selected='selected' value='" . $ingresosestudiantes->getIngresosestudianteId() . "'><label>" . ($ingresosestudiantes->getIngresosestudiante()) . "</label></option>");
        } else {
            $lista .= (" <option  value='" . $ingresosestudiantes->getIngresosestudianteId() . "'><label>" . ($ingresosestudiantes->getIngresosestudiante()) . "</label></option>");
        }
    }
    return $lista;
}
