<?php
require_once("../Crud/CrudJornadasAcademicas.php");

use Clasesphp\Jornadasacademicas;
use Crud\CrudJornadasAcademicas;

function cargarJornadaAcademica($opt){
$crud1=new CrudJornadasAcademicas();
$lista='<option disabled><label>Seleccione una Jornada Academica</label></option>"';

        $listadato=$crud1->mostrar();
		$dato=new Jornadasacademicas();
		foreach($listadato as $dato){
            if($dato->get_JornadaAcademicaId()==$opt) {
                        $lista.="<option selected='selected' value='".$dato->get_JornadaAcademicaId()."'><label>".((  $dato->get_JornadaAcademica()))."</label></option>";
            }else{
                $lista.="<option value='".$dato->get_JornadaAcademicaId()."'><label>".((  $dato->get_JornadaAcademica()))."</label></option>";
            }

    }
    return $lista;
}
?>