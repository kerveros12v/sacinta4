<?php

require_once("../Crud/CrudTipoDiscapacidad.php");
use Clasesphp\Tipodiscapacidad;
use Crud\CrudTipoDiscapacidad;

function cargarTipoDiscapacidad($opt){
 $oCrudtipodiscap=new CrudTipoDiscapacidad();
 $listdiscapa=$oCrudtipodiscap->mostrar();
 $tipodiscapa=new Tipodiscapacidad();
 $lista='';
         foreach($listdiscapa as $tipodiscapa){
       if($opt==$tipodiscapa->get_tipoDiscapacidadid())$lista.=" <option selected='selected'  value='".$tipodiscapa->get_tipoDiscapacidadid()."'><label>"./**/($tipodiscapa->get_tipoDiscapacidad())."</label></option>";
        else{
            $lista.=" <option value='".$tipodiscapa->get_tipoDiscapacidadid()."'><label>"./**/($tipodiscapa->get_tipoDiscapacidad())."</label></option>";
        }
    }
         return $lista;
        }
?>