<?php
require_once("../Crud/CrudCicloPeriodo.php");
use Crud\CrudCicloPeriodo;
function ciclop($id){
    $lista="";
try{
    $crudciclo = new CrudCicloPeriodo();
    $listacliclos=$crudciclo->mostrar();
    foreach($listacliclos as $c){
        if($id==$c->get_idcicloperiodo())
        $lista.="<option selected='selected' value='".$c->get_idcicloperiodo()."'><label>".($c->get_ciclo())."</label></option>";
        else
        $lista.="<option value='".$c->get_idcicloperiodo()."'><label>".($c->get_ciclo())."</label></option>";
    }
}catch(Exception $ex){
    echo ('<script>console.log('.$ex.');</script>');
}
$lista.="";
    return $lista;
}