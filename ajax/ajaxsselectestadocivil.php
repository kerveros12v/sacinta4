<?php

require_once('../Crud/CrudEstadoCivil.php');
use Crud\CrudEStadoCivil;

function cargarEstadoCivil($opt){
	$oCrudEstadoCivil=new CrudEStadoCivil();
		$listaEstadoCivil=$oCrudEstadoCivil->mostrar();
        $lista='<option disabled><label>Seleccione un Estado Civil</label></option>"';
				foreach($listaEstadoCivil as $estcivil){
                    if($opt==$estcivil->get_estadoCivilId()) {
                        $lista.=" <option selected='selected' value='".$estcivil->get_estadoCivilId()."'><label>".utf8_decode(($estcivil->get_estadoCivil()))."</label></option>";
                    }else{
                        $lista.=" <option  value='".$estcivil->get_estadoCivilId()."'><label>".utf8_decode(($estcivil->get_estadoCivil()))."</label></option>";
                    }
                }
                    return $lista;
}