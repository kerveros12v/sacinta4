<?php

require_once('../Crud/CrudSexo.php');

use Clasesphp\Sexos;
use Crud\CrudSexo;

function cargarSexos($opt){
    $oCrudSexo=new CrudSexo();
    $listaSexo=$oCrudSexo->mostrar();
    $sexos=new Sexos();
    $lista='<option disabled><label>Seleccione un Sexo</label></option>"';
            foreach($listaSexo as $sexos){
              if($opt==$sexos->get_sexoId()) {
                $lista.= "<option selected='selected' value='".$sexos->get_sexoId()."'><label>".(($sexos->get_sexo()))."</label></option>";
              }else{
                  $lista.= "<option value='".$sexos->get_sexoId()."'><label>".(($sexos->get_sexo()))."</label></option>";
              }
            }
            return $lista;
}
?>