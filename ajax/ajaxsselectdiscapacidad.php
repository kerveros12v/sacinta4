<?php

require_once("../Crud/CrudDiscapacidad.php");
use Clasesphp\Discapacidad;
use Crud\CrudDiscapacidad;

function discapacidad($opt){
	    $oCrudDiscapacidadesestudiantes=new CrudDiscapacidad();
		$listDiscapacidadesestudiantes=$oCrudDiscapacidadesestudiantes->mostrar();
        $discapacidadesestudiantes=new Discapacidad();
        $lista='';
				foreach($listDiscapacidadesestudiantes as $discapacidadesestudiantes){
                    if($opt==$discapacidadesestudiantes->get_discapacidadId())$lista.=" <option selected='selected'  value='".$discapacidadesestudiantes->get_discapacidadId()."'><label>"./**/($discapacidadesestudiantes->get_discapacidad())."</label></option>";
                    else $lista.=" <option value='".$discapacidadesestudiantes->get_discapacidadId()."'><label>"./**/($discapacidadesestudiantes->get_discapacidad())."</label></option>";
                }
                return $lista;
}
?>