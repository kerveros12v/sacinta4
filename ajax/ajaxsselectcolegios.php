<?php
require_once("../Crud/CrudColegios.php");
use Crud\CrudColegios;

function cargarColegios($id,$opt){
    $crudColegio1=new CrudColegios();
		$listacolegio=$crudColegio1->listaColegios($id);
        $lista='<option disabled><label>Seleccione un Colegio</label></option>"';
				foreach($listacolegio as $colegio){
						if($opt==$colegio->get_idColegios()){
                            $lista.="<option selected='selected' value='".$colegio->get_idColegios()."'><label>".($colegio->get_colegio())."</label></option>";
                        }else {
                            $lista.=" <option  value='".$colegio->get_idColegios()."'><label>".($colegio->get_colegio())."</label></option>";
                        }

                }
                return $lista;
}