<?php
require_once("../Crud/CrudAplicacionBecas.php");
require_once("../controladores/respuestasgenerales.php");

use Clasesphp\Aplicacionbecas;
use Crud\CrudAplicacionbecas;

function cargarbecaestudiantes($opt)
{
    $oCrud = new CrudAplicacionbecas();
    $listab = $oCrud->obtenerlistaBeca($opt);
    $beca1 = new Aplicacionbecas();
    $lista = '<option disabled ><label>Seleccione una Beca</label></option> <option value=0><label>Nueva Beca</label></option>';
    foreach ($listab as $beca1) {
        $lista .= "<option value='" .
            $beca1->getIdAplicacionBecas() .
            "'><label>" .
            $beca1->getAplicacionbecascodigo() .
            " - " .
            $beca1->getAbfechainicio() .
            "(" .
            boolestadoactualdetalle($beca1->getAbactivo()) .
            ")</label></option>";
    }
    return $lista;
}
