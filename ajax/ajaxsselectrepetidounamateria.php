<?php

require_once("../Crud/CrudHarepetidoalmenosunamateria.php");

use Clasesphp\Harepetidoalmenosunamateria;
use Crud\CrudHarepetidoalmenosunamateria;

function cargarHarepetidoalmenosunamateria($opt)
{
    $ocrud = new CrudHarepetidoalmenosunamateria();
    $listah = $ocrud->mostrar();
    $dato = new Harepetidoalmenosunamateria();
    $lista = '<option value="0" disabled="disabled"><label>Seleccione un Opcion</label></option>"';
    foreach ($listah as $dato) {


        if ($opt == $dato->getHaRepetidoAlMenosUnaMateriaid()) {
            $lista .= "<option  selected='selected' value='" . $dato->getHaRepetidoAlMenosUnaMateriaid() . "'><label>" ./**/ ($dato->getHaRepetidoAlMenosUnaMateria()) . "</label></option>";
        } else {
            $lista .= "<option  value='" . $dato->getHaRepetidoAlMenosUnaMateriaid() . "'><label>" ./**/ ($dato->getHaRepetidoAlMenosUnaMateria()) . "</label></option>";
        }
    }
    return $lista;
}
