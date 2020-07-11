<?php
require_once("../Crud/crudPermisosDepartamentos.php");
use Crud\CrudPermisosDepartamentos;

function cargarlstdepartamentos($opt){
                $crud1=new CrudPermisosDepartamentos();
				$listag=$crud1->mostrar();

                   $lista='<option disabled><label>Seleccione un Perfil</label></option>"';
				foreach($listag as $d){
                    if($opt==$d->get_iddepartamentos()) {
                        $lista.=" <option  selected='selected' value='".$d->get_iddepartamentos()."'><label>".($d->get_departamento())."</label></option>";
                    }else{
                        $lista.=" <option value='".$d->get_iddepartamentos()."'><label>".( $d->get_departamento())."</label></option>";
                    }
                 }
                    return $lista;
}
?>