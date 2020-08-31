<?php
require_once("../Crud/CrudBonodesarrollo.php");

use Clasesphp\Bonodesarrollo;
use Crud\CrudBonodesarrollo;

function cargarbonodesarrollo($opt){
	    $oCrudbonoDesarrollo=new CrudBonodesarrollo();
		$listabonoDesarrollo=$oCrudbonoDesarrollo->mostrar();
        $bonoDesarrollo=new Bonodesarrollo();
        $lista='<option disabled><label>Seleccione si recibe Bono de Desarrollo</label></option>"';
				foreach($listabonoDesarrollo as $bonoDesarrollo){
					if($opt==$bonoDesarrollo->get_bonoDesarrolloId())
					{
						$lista.=(" <option selected='selected'  value='".$bonoDesarrollo->get_bonoDesarrolloId()."'><label>"./*utf8_encode*/(strtoupper($bonoDesarrollo->get_bonoDesarrollo()))."</label></option>");
					}
					else
					{
                        $lista.=(" <option  value='".$bonoDesarrollo->get_bonoDesarrolloId()."'><label>"./*utf8_encode*/(strtoupper($bonoDesarrollo->get_bonoDesarrollo()))."</label></option>");
					}
                }
                return $lista;
            }
		?>