<?php
require_once("../clasesphp/Paises.php");
require_once("../Crud/CrudPaises.php");

use Clasesphp\Paises;
use Crud\CrudPaises;

function cargarPais($opt){
                $oCrudPais=new CrudPaises();
				$listaPaises=$oCrudPais->mostrar();
			   	$pais1=new Paises();
                   $lista='<option disabled><label>Seleccione un Pais</label></option>"';
				foreach($listaPaises as $pais1){
                    if($opt==$pais1->get_paisId()) {
                        $lista.=" <option  selected='selected' value='".$pais1->get_paisId()."'><label>".( $pais1->get_pais())."</label></option>";
                    }else{
                        $lista.=" <option value='".$pais1->get_paisId()."'><label>".( $pais1->get_pais())."</label></option>";
                    }
                 }
                    return $lista;
}
?>