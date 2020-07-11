<?php
namespace Clasesphp;

class SetecTipoOcupacion{
private $idsetecTipoOcupacion, $tipoOcupacion;
public function __construct(){ }
public function set_idsetecTipoOcupacion($idsetecTipoOcupacion){$this->idsetecTipoOcupacion=$idsetecTipoOcupacion;}
public function set_tipoOcupacion($tipoOcupacion){$this->tipoOcupacion=$tipoOcupacion;}
public function get_idsetecTipoOcupacion(){return $this->idsetecTipoOcupacion;}
public function get_tipoOcupacion(){return $this->tipoOcupacion;}
public function formatoJSON(){
    $myarray=array(
        'idsetecTipoOcupacion'=>$this->idsetecTipoOcupacion,
        'tipoOcupacion'=>$this->tipoOcupacion
    );
    return json_encode($myarray);
}
}

?>