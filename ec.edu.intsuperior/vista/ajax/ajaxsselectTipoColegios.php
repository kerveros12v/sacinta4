<?php
require_once("../Crud/CrudTipoColegio.php");

use Clasesphp\Tipocolegio;
use Crud\CrudTipocolegio;

function cargartipoColegio($opt){
                $ocrudtipoColegio=new CrudTipocolegio();
				$listatipoColegio=$ocrudtipoColegio->mostrar();
			   	$tipoColegio1=new Tipocolegio();
                   $lista='<option disabled><label>Seleccione un Tipo de Colegio</label></option>"';
				foreach($listatipoColegio as $tipoColegio1){
                    if($opt==$tipoColegio1->get_tipoColegioId()) {
                        $lista.=" <option  selected='selected' value='".$tipoColegio1->get_tipoColegioId()."'><label>".( $tipoColegio1->get_tipoColegio())."</label></option>";
                    }else{
                        $lista.=" <option value='".$tipoColegio1->get_tipoColegioId()."'><label>".( $tipoColegio1->get_tipoColegio())."</label></option>";
                    }
                 }
                    return $lista;
}
?>