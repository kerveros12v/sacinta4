<?php

require_once("../Crud/CrudTipoMatricula.php");

use Clasesphp\Tipomatricula;
use Crud\CrudTipomatricula;

function cargartipoMatricula($opt){
$crud1=new CrudTipomatricula();
$lista='<option disabled><label>Seleccione Tipo de Matricula</label></option>';
        $listadatos=$crud1->mostrar();

		$dato=new Tipomatricula();
		foreach($listadatos as $dato){
            if($dato->get_tipoMatriculaId()==$opt) {
                $lista.="<option selected='selected' value='".$dato->get_tipoMatriculaId()."'><label>".((  $dato->get_tipoMatricula()))."</label></option>";
            }else{
                $lista.="<option value='".$dato->get_tipoMatriculaId()."'><label>".((  $dato->get_tipoMatricula()))."</label></option>";
            }
        }

    return $lista;
}
?>