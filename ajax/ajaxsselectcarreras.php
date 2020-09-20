<?php
require_once("../Crud/CrudCarreras.php");

use Clasesphp\Carreras;
use Crud\CrudCarreras;

function cargarCarrera($opt)
{
    $crud1 = new CrudCarreras();
    $lista = '<option disabled><label>Seleccione una Carrera</label></option>"';

    $listadato = $crud1->mostrar();
    $dato = new Carreras();
    foreach ($listadato as $dato) {
        if ($dato->getCarrerasId() == $opt) {
            $lista .= "<option selected='selected' value='" . $dato->getCarrerasId() . "'><label>" . (($dato->getCarrera())) . "</label></option>";
        } else {
            $lista .= "<option value='" . $dato->getCarrerasId() . "'><label>" . (($dato->getCarrera())) . "</label></option>";
        }
    }
    return $lista;
}
