<?php
require_once('../Crud/CrudGeneros.php');
use Clasesphp\Generos;
use Crud\CrudGeneros;

function cargarGeneros($opt){
	    $oCrudGeneros=new CrudGeneros();
		$listaGeneros=$oCrudGeneros->mostrar();
        $generos=new  Generos();
        $lista='<option disabled><label>Seleccione un Genero</label></option>"';
				foreach($listaGeneros as $generos){
                    if($opt==$generos->get_generoId()) {
                        $lista.="<option selected='selected'  value='".$generos->get_generoId()."'><label>".(strtoupper($generos->get_genero()))."</label></option>";
                    }else{
                        $lista.="<option  value='".$generos->get_generoId()."'><label>".(strtoupper($generos->get_genero()))."</label></option>";
                    }
                }
         return $lista;
}