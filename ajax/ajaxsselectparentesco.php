<?php

require_once("../Crud/CrudParentesco.php");
use Crud\CrudParentescos;

function cargarparentesco($opt){
$crudparentesco1=new CrudParentescos();
$listaparentesco=$crudparentesco1->mostrar();
$lista='<option disabled><label>Seleccione un Parentesco</label></option>"';
        foreach($listaparentesco as $parentesco){
           if($opt==$parentesco->get_idParentescos())
            {
                $lista.=" <option selected='selected'  value='".$parentesco->get_idParentescos()."'><label>".($parentesco->get_parentesco())."</label></option>";
            }
            else {
                $lista.=" <option  value='".$parentesco->get_idParentescos()."'><label>".($parentesco->get_parentesco())."</label></option>";
            }
        }
        return $lista;
    }