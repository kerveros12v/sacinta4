<?php
require_once("../Crud/Crudnivelformacion.php");

use Clasesphp\Nivelformacion;
use Crud\CrudNivelformacion;

function cargarnivelformacion($opt){
$oCrudNivelformacion=new CrudNivelformacion();
				$listaCrudNivelformacion=$oCrudNivelformacion->mostrar();
                   $formacion=new Nivelformacion();
                   $lista='<option disabled><label>Seleccione un Nivel de Formacion</label></option>"';
				foreach($listaCrudNivelformacion as $formacion){
						if($opt==$formacion->get_nivelFormacionId())
					{
						$lista.=(" <option selected='selected' value='".$formacion->get_nivelFormacionId()."'><label>".($formacion->get_nivelFormacion())."</label></option>");
					}
					else {
				$lista.=(" <option  value='".$formacion->get_nivelFormacionId()."'><label>".($formacion->get_nivelFormacion())."</label></option>");
					}
                }
                return $lista;
            }
?>