<?php
namespace Clasesphp;

class SetecOcupacion{

private $setecocupacionAsignada,$setecOcupacionId,$fkaspirantesetec,$fktipoOcupacion,$fkestadoOcupacional,$horasTrabajadasxSemana,$fkareadepartamento;
public function __construct(){}
public function set_setecOcupacionId($setecOcupacionId){$this->setecOcupacionId=$setecOcupacionId;}
public function set_fkaspirantesetec($fkaspirantesetec){$this->fkaspirantesetec=$fkaspirantesetec;}
public function set_fktipoOcupacion($fktipoOcupacion){$this->fktipoOcupacion=$fktipoOcupacion;}
public function set_fkestadoOcupacional($fkestadoOcupacional){$this->fkestadoOcupacional=$fkestadoOcupacional;}
public function set_horasTrabajadasxSemana($horasTrabajadasxSemana){$this->horasTrabajadasxSemana=$horasTrabajadasxSemana;}
public function set_fkareadepartamento($fkareadepartamento){$this->fkareadepartamento=$fkareadepartamento;}
public function set_setecocupacionAsignada($setecocupacionAsignada){$this->setecocupacionAsignada=$setecocupacionAsignada;}
public function get_setecOcupacionId(){return $this->setecOcupacionId;}
public function get_fkaspirantesetec(){return $this->fkaspirantesetec;}
public function get_fktipoOcupacion(){return $this->fktipoOcupacion;}
public function get_fkestadoOcupacional(){return $this->fkestadoOcupacional;}
public function get_horasTrabajadasxSemana(){return $this->horasTrabajadasxSemana;}
public function get_fkareadepartamento(){return $this->fkareadepartamento;}
public function get_setecocupacionAsignada(){return $this->setecocupacionAsignada;}
public function formatoJSON(){
    $myarray=array(
        'setecOcupacionId'=>$this->setecOcupacionId,
        'fkaspirantesetec'=>$this->fkaspirantesetec,
        'fktipoOcupacion'=>$this->fktipoOcupacion,
        'fkestadoOcupacional'=>$this->fkestadoOcupacional,
        'horasTrabajadasxSemana'=>$this->horasTrabajadasxSemana,
        'fkareadepartamento'=>$this->fkareadepartamento,
        'setecocupacionAsignada'=>$this->setecocupacionAsignada
    );
    return json_encode($myarray);
}
public function formatoArray(){
    $myarray=array(
        'setecOcupacionId'=>$this->setecOcupacionId,
        'fkaspirantesetec'=>$this->fkaspirantesetec,
        'fktipoOcupacion'=>$this->fktipoOcupacion,
        'fkestadoOcupacional'=>$this->fkestadoOcupacional,
        'horasTrabajadasxSemana'=>$this->horasTrabajadasxSemana,
        'fkareadepartamento'=>$this->fkareadepartamento,
        'setecocupacionAsignada'=>$this->setecocupacionAsignada
    );
    return $myarray;
}
}
?>