<?php

require_once("../Crud/CrudIdiomas.php");
use Clasesphp\Idiomas;
use Crud\CrudIdiomas;

function cargarIdioma($opt){
	    $oCrudIdioma=new CrudIdiomas();
		$listaIdiomas=$oCrudIdioma->mostrar();
        $dioma1=new Idiomas();
        $lista='<option disabled><label>Seleccione un Idioma Ansestral</label></option>"';
		foreach($listaIdiomas as $dioma1){
            if($opt==$dioma1->get_ididiomaAncestral()){
                $lista.= "<option selected='selected' value='".$dioma1->get_ididiomaAncestral()."'><label>".($dioma1->get_idioma())."</label></option>";
            }else{
                $lista.= "<option value='".$dioma1->get_ididiomaAncestral()."'><label>".($dioma1->get_idioma())."</label></option>";
            }
        }
        return $lista;
}
