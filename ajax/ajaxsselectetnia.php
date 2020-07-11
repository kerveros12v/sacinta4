<?php
require_once("../Crud/CrudEtnia.php");

use Clasesphp\Etnias;
use Crud\CrudEtnia;

function cargarEtnia($opt){
                $oCrud=new CrudEtnia();
				$listaetnia=$oCrud->mostrar();
			   	$etnia1=new Etnias();
                   $lista='<option disabled><label>Seleccione una Etnia</label></option>"';
				foreach($listaetnia as $etnia1){
                    if($opt==$etnia1->get_etniaId()) {
                        $lista.=" <option  selected='selected' value='".$etnia1->get_etniaId()."'><label>".( $etnia1->get_etnia())."</label></option>";
                    }else{
                        $lista.=" <option value='".$etnia1->get_etniaId()."'><label>".( $etnia1->get_etnia())."</label></option>";
                    }
                 }
                    return $lista;
}
?>