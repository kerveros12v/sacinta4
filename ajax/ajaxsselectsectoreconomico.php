<?php


require_once("../Crud/CrudSectorEconomico.php");

use Clasesphp\Sectoreconomico;
use Crud\CrudSectorEconomico;

function cargarsectoreconomico($opt)
{
    $oCrudsectrabajo = new CrudSectorEconomico();
    $listsectrabajo = $oCrudsectrabajo->mostrar();
    $sectrabajo = new Sectoreconomico();
    $lista = '<option disabled><label>Seleccione un Sector Economico</label></option>"';
    foreach ($listsectrabajo as $sectrabajo) {
        if ($opt == $sectrabajo->getSectorEconomicoid()) {
            $lista .= (" <option selected='selected' value='" . $sectrabajo->getSectorEconomicoid() . "'><label>" . $sectrabajo->getSectoreconomicocodigo() . " - " . ($sectrabajo->getSectorEconomico()) . "</label></option>");
        } else {
            $lista .= (" <option  value='" . $sectrabajo->getSectorEconomicoid() . "'><label>" . $sectrabajo->getSectoreconomicocodigo() . " - " . ($sectrabajo->getSectorEconomico()) . "</label></option>");
        }
    }
    return $lista;
}
