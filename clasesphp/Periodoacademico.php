<?php
namespace Clasesphp;

class Periodoacademico
{
private $periodoacademicoAccion, $periodoacademicofecha, $periodoacademicouser;
private $periodoacademicoId;
private $periodoAcademico;
private $fechaInicio;
private $duracionPeriodoAcademico;
private $anioPeriodoAcademico;
private $actual;
private $codigoPeriodo;
private $cicloperiodo_idcicloperiodo;
private $periodoacademicoOculto;
public function _construct(){}
public function set_periodoacademicoAccion($periodoacademicoAccion){$this->periodoacademicoAccion=$periodoacademicoAccion;}
public function get_periodoacademicoAccion(){return $this->periodoacademicoAccion;}
public function set_periodoacademicofecha($periodoacademicofecha){$this->periodoacademicofecha=$periodoacademicofecha;}
public function get_periodoacademicofecha(){return $this->periodoacademicofecha;}
public function set_periodoacademicouser($periodoacademicouser){$this->periodoacademicouser=$periodoacademicouser;}
public function get_periodoacademicouser(){return $this->periodoacademicouser;}
public function set_oculto($periodoacademicoOculto){$this->periodoacademicoOculto=$periodoacademicoOculto;}
public function get_oculto(){return $this->periodoacademicoOculto;}
public function set_periodoacademicoId($periodoacademicoId){$this->periodoacademicoId=$periodoacademicoId;}
public function get_periodoacademicoId(){return $this->periodoacademicoId;}
public function set_codigo($codigoPeriodo){$this->codigoPeriodo=$codigoPeriodo;}
public function get_codigo(){return $this->codigoPeriodo;}
public function set_ciclo($cicloperiodo_idcicloperiodo){$this->cicloperiodo_idcicloperiodo=$cicloperiodo_idcicloperiodo;}
public function get_ciclo(){return $this->cicloperiodo_idcicloperiodo;}
public function set_periodoAcademico($periodoAcademico){$this->periodoAcademico=$periodoAcademico;}
public function get_periodoAcademico(){return $this->periodoAcademico;}
public function set_fechaInicio($fechaInicio){$this->fechaInicio=$fechaInicio;}
public function get_fechaInicio(){return $this->fechaInicio;}
public function set_duracionPeriodoAcademico($duracionPeriodoAcademico){$this->duracionPeriodoAcademico=$duracionPeriodoAcademico;}
public function get_duracionPeriodoAcademico(){return $this->duracionPeriodoAcademico;}
public function set_anioPeriodoAcademico($anioPeriodoAcademico){$this->anioPeriodoAcademico=$anioPeriodoAcademico;}
public function get_anioPeriodoAcademico(){return $this->anioPeriodoAcademico;}
public function set_actual($actual){$this->actual=$actual;}
public function get_actual(){return $this->actual;}
public function __toString()
{
    return $this->periodoAcademico;
}
public function formatoJSON(){
    $myarray=array('periodoacademicoId'=>$this->periodoacademicoId,
    'periodoAcademico'=>$this->periodoAcademico,
    'fechaInicio'=>$this->fechaInicio,
    'duracionPeriodoAcademico'=>$this->duracionPeriodoAcademico,
    'anioPeriodoAcademico'=>$this->anioPeriodoAcademico,
    'actual'=>$this->actual,'codigo'=>$this->codigo,
    'ciclo'=>$this->ciclo,'oculto'=>$this->oculto);
    return json_encode($myarray);
}
}
?>