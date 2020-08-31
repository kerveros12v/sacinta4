<?php

require_once("../Crud/CrudCategoriaMigratoria.php");
use Clasesphp\Categoriasmigratoria;
use Crud\CrudCategoriasMigratoria;

function cargarCategoriaMigratoria($opt){
    $oCrudcategoraMigratoria=new CrudCategoriasMigratoria();
	  	  		$listacategoriasMigratoria=$oCrudcategoraMigratoria->mostrar();
                 $catmigra=new Categoriasmigratoria();
                 $lista='<option disabled><label>Seleccione un Categoria Migratoria</label></option>"';
				foreach($listacategoriasMigratoria as $catmigra){
                    if($opt==$catmigra->get_categoriaMigratoriaId()){
                        $lista.="<option  selected='selected' value='".$catmigra->get_categoriaMigratoriaId()."'><label>"./**/( $catmigra->get_categoriaMigratoria())."</label></option>";
                    }else{
                        $lista.="<option  value='".$catmigra->get_categoriaMigratoriaId()."'><label>"./**/( $catmigra->get_categoriaMigratoria())."</label></option>";
                    }
					}
					return $lista;
                }