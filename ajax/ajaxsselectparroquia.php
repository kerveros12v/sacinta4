<?php

require_once("../Crud/CrudParroquia.php");
use Clasesphp\Parroquia;
use Crud\CrudParroquia;

function cargarParroquia($opt,$id){
$parroquia = new Parroquia();
//echo($parroquia->__toString()."<br>");
$crudparroquia = new CrudParroquia();
$lstparroquia=$crudparroquia->mostrarporCiudad($id);
$lista='<option disabled><label>Seleccione una Parroquia</label></option>"';
foreach ($lstparroquia as $parroquia){
    if($opt==$parroquia->get_idparroquias()){
        $lista.="<option selected='selected' value='".$parroquia->get_idparroquias()."'><label>".$parroquia->get_parroquia()."</label></option>";
    }else{
        $lista.="<option value='".$parroquia->get_idparroquias()."'><label>".$parroquia->get_parroquia()."</label></option>";
    }
}
return $lista;
}