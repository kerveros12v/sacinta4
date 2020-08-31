<?php
require_once("../Crud/crudPermisos.php");
use Crud\CrudPermisos;

function cargarlstaccesodepcodigo($opt){
                $crud1=new CrudPermisos();
				$listag=$crud1->listaaccesospermisoscodigo();

                   $lista='<option disabled><label>Seleccione un Perfil</label></option>"';
				foreach($listag as $d){
                    if($opt==$d) {
                        $lista.=" <option  selected='selected' value='".$d."'><label>".( $d)."</label></option>";
                    }else{
                        $lista.=" <option value='".$d."'><label>".( $d)."</label></option>";
                    }
                 }
                    return $lista;
}
?>