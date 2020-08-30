<?php


require_once("../Crud/CrudSectorEconomico.php");

use Clasesphp\Sectoreconomico;
use Crud\CrudSectorEconomico;

function cargarsectoreconomico($opt){
    $oCrudsectrabajo=new CrudSectorEconomico();
    $listsectrabajo=$oCrudsectrabajo->mostrar();
    $sectrabajo=new Sectoreconomico();
    $lista='<option disabled><label>Seleccione un Sector Economico</label></option>"';
            foreach($listsectrabajo as $sectrabajo){
                if($opt==$sectrabajo->get_sectorEconomicoid())
                {
                    $lista.=(" <option selected='selected' value='".$sectrabajo->get_sectorEconomicoid()."'><label>".$sectrabajo->get_sectoreconomicocodigo()." - ".($sectrabajo->get_SectorEconomico())."</label></option>");
                }
                else
                {
                    $lista.=(" <option  value='".$sectrabajo->get_sectorEconomicoid()."'><label>".($sectrabajo->get_SectorEconomico())."</label></option>");
                }
            }
            return $lista;
}

		?>