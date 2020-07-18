<?php

require_once("../Crud/CrudPueblonacionalidad.php");
use Clasesphp\PueblosNacionalidad;
use Crud\CrudPuebloNacionalidad;

function cargarPueblo($opt){
    $oCrudPueblonacionalidad=new CrudPuebloNacionalidad();
				$listapueblonacionalidad1=$oCrudPueblonacionalidad->mostrar();
                   $pueblonacionalidad1=new PueblosNacionalidad();
                   $lista='<option disabled><label>Seleccione un Pueblo</label></option>"';
				foreach($listapueblonacionalidad1 as $pueblonacionalidad1){
                    if($opt==$pueblonacionalidad1->get_puebloNacionalidadId()){
                        $lista.=" <option selected='selected'  value='".$pueblonacionalidad1->get_puebloNacionalidadId()."'><label>".( $pueblonacionalidad1->get_puebloNacionalidad())."</label></option>";
                    }else{
                        $lista.=" <option value='".$pueblonacionalidad1->get_puebloNacionalidadId()."'><label>".( $pueblonacionalidad1->get_puebloNacionalidad())."</label></option>";
                    }
                    }
				return $lista;
}