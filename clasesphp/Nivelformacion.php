<?php
namespace Clasesphp;
class Nivelformacion{
private $nivelFormacionId, $codigonivelFormacion,$nivelFormacion, $nivelInstruccion,$nivelformacionfecha,$nivelformacionuser,$nivelformacionOculto,$nivelformacionAccion;
public function set_nivelFormacionId($nivelFormacionId){$this->nivelFormacionId=$nivelFormacionId;}
public function set_nivelFormacion($nivelFormacion){$this->nivelFormacion=$nivelFormacion;}
public function set_NivelInstruccion($nivelInstruccion) {$this->nivelInstruccion = $nivelInstruccion;}
public function set_Nivelformacionfecha($nivelformacionfecha) {$this->nivelformacionfecha = $nivelformacionfecha;}
public function set_Nivelformacionuser($nivelformacionuser) {$this->nivelformacionuser = $nivelformacionuser;}
public function set_NivelformacionOculto($nivelformacionOculto) {$this->nivelformacionOculto = $nivelformacionOculto;}
public function set_NivelformacionAccion($nivelformacionAccion) {$this->nivelformacionAccion = $nivelformacionAccion;}
public function set_codigonivelFormacion($codigonivelFormacion){$this->codigonivelFormacion=$codigonivelFormacion;}
public function get_codigonivelFormacion(){return $this->codigonivelFormacion;}
public function get_nivelFormacionId(){return $this->nivelFormacionId;}
public function get_nivelFormacion(){return $this->nivelFormacion;}
public function get_NivelInstruccion() { return $this->nivelInstruccion;}
public function get_Nivelformacionfecha() {return $this->nivelformacionfecha;}
public function get_Nivelformacionuser() {return $this->nivelformacionuser;}
public function get_NivelformacionOculto() {return $this->nivelformacionOculto;}
public function get_NivelformacionAccion() { return $this->nivelformacionAccion;}


public function formatoArray(){
    return array(
       'nivelFormacionId'=>$this->nivelFormacionId,
       'codigonivelFormacion'=>$this->codigonivelFormacion,
       'nivelFormacion'=>$this->nivelFormacion,
       'nivelInstruccion'=>$this->nivelInstruccion,
       'nivelformacionfecha'=>$this->nivelformacionfecha,
       'nivelformacionuser'=>$this->nivelformacionuser,
       'nivelformacionOculto'=>$this->nivelformacionOculto,
       'nivelformacionAccion'=>$this->nivelformacionAccion
    );
}
public function formatoJSON(){
     $myarray=array(
       'nivelFormacionId'=>$this->nivelFormacionId,
       'codigonivelFormacion'=>$this->codigonivelFormacion,
       'nivelFormacion'=>$this->nivelFormacion,
       'nivelInstruccion'=>$this->nivelInstruccion,
       'nivelformacionfecha'=>$this->nivelformacionfecha,
       'nivelformacionuser'=>$this->nivelformacionuser,
       'nivelformacionOculto'=>$this->nivelformacionOculto,
       'nivelformacionAccion'=>$this->nivelformacionAccion
    );
    return json_encode($myarray);
}
}
?>
