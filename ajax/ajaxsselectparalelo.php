<?php

require_once("../Crud/CrudParalelo.php");
use Crud\CrudParalelo;

function cargarparalelo($opt){
    $lista='<option disabled><label>Seleccione un Paralelo</label></option>"';
    $oCrudParalelo=new CrudParalelo();
    $listaparalelo=$oCrudParalelo->mostrar();
            foreach($listaparalelo as $paralelo){
                if($paralelo->get_paraleloId()==$opt){
                    $lista.=(" <option selected='selected' value='".$paralelo->get_paraleloId()."'><label>".($paralelo->get_paralelo())."</label></option>");
                }else{
                    $lista.=(" <option  value='".$paralelo->get_paraleloId()."'><label>".($paralelo->get_paralelo())."</label></option>");
                }

            }
            return $lista;
}

		?>