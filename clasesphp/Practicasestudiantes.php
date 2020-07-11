<?php
namespace Clasesphp;

class Practicasestudiantes
{
private $practicasEstudiantesId;
private $estudiantes_numeroIdentificacion;
private $fkPracticasPreProfecionalesId;
private $fkhaRealizadoPracticasPreprofesionalesid;
private $nombreDeLaActividad;
private $objetivoDeLaActividad;
private $periodoAcademico_periodoacademicoId;
private $empresas_empresasId;
private $representanteLega;
public function _construct(){}
public function set_practicasEstudiantesId($practicasEstudiantesId){$this->practicasEstudiantesId=$practicasEstudiantesId;}
public function get_practicasEstudiantesId(){return $this->practicasEstudiantesId;}
public function set_estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion){$this->estudiantes_numeroIdentificacion=$estudiantes_numeroIdentificacion;}
public function get_estudiantes_numeroIdentificacion(){return $this->estudiantes_numeroIdentificacion;}
public function set_fkPracticasPreProfecionalesId($fkPracticasPreProfecionalesId){$this->fkPracticasPreProfecionalesId=$fkPracticasPreProfecionalesId;}
public function get_fkPracticasPreProfecionalesId(){return $this->fkPracticasPreProfecionalesId;}
public function set_fkhaRealizadoPracticasPreprofesionalesid($fkhaRealizadoPracticasPreprofesionalesid){$this->fkhaRealizadoPracticasPreprofesionalesid=$fkhaRealizadoPracticasPreprofesionalesid;}
public function get_fkhaRealizadoPracticasPreprofesionalesid(){return $this->fkhaRealizadoPracticasPreprofesionalesid;}
public function set_nombreDeLaActividad($nombreDeLaActividad){$this->nombreDeLaActividad=$nombreDeLaActividad;}
public function get_nombreDeLaActividad(){return $this->nombreDeLaActividad;}
public function set_objetivoDeLaActividad($objetivoDeLaActividad){$this->objetivoDeLaActividad=$objetivoDeLaActividad;}
public function get_objetivoDeLaActividad(){return $this->objetivoDeLaActividad;}
public function set_periodoAcademico_periodoacademicoId($periodoAcademico_periodoacademicoId){$this->periodoAcademico_periodoacademicoId=$periodoAcademico_periodoacademicoId;}
public function get_periodoAcademico_periodoacademicoId(){return $this->periodoAcademico_periodoacademicoId;}
public function set_empresas_empresasId($empresas_empresasId){$this->empresas_empresasId=$empresas_empresasId;}
public function get_empresas_empresasId(){return $this->empresas_empresasId;}
public function set_representanteLega($representanteLega){$this->representanteLega=$representanteLega;}
public function get_representanteLega(){return $this->representanteLega;}
}
?>