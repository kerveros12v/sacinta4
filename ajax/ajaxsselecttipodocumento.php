<?php
require_once('../Crud/CrudTipoDocumento.php');
use Clasesphp\Tipodocumento;
use Crud\CrudTipodocumento;
function cargartipodocumento($op){
	    $oCrudTipoDocumento=new CrudTipodocumento();
		$listatipoDocumento=$oCrudTipoDocumento->mostrar();
        $tipDocument=new Tipodocumento();
        $lista='';
				foreach($listatipoDocumento as $tipDocument){
                    if($op==$tipDocument->get_tipoDocumentoId()){
                        $lista.="<option selected='selected' value='".$tipDocument->get_tipoDocumentoId()."'>".(strtoupper($tipDocument->get_tipoDocumento()))."</option>";
                    }
                    else
                    {
                        $lista.="<option  value='".$tipDocument->get_tipoDocumentoId()."'>".(strtoupper($tipDocument->get_tipoDocumento()))."</option>";
                    }
                }
                return $lista;
    }
?>