<?php

require_once("../Crud/CrudTipoSangre.php");
use Clasesphp\Tipossangre;
use Crud\CrudTipoSangre;

function cargartipoSangre($opt){
$oCrudTipoSangre=new CrudTipoSangre();
		$listaTipoSangre=$oCrudTipoSangre->mostrar();
        $tiposangre=new Tipossangre();
        $lista='<option disabled><label>Seleccione un Tipo de Sangre</label></option>"';
				foreach($listaTipoSangre as $tiposangre){
                    if($opt==$tiposangre->get_tipoSangreId()) {
                        $lista.=" <option selected='selected' value='".$tiposangre->get_tipoSangreId()."'><label>"./**/($tiposangre->get_tipoSangre())."</label></option>";
                    }else{
                        $lista.=" <option  value='".$tiposangre->get_tipoSangreId()."'><label>"./**/($tiposangre->get_tipoSangre())."</label></option>";
                    }
                }
        return $lista;
}