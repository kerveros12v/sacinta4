<?php
namespace Clasesphp;

	class Discapacidadesestudiantes{
		private $carnetConadisId;
		private $fkEstudiantesNumeroIdentificacion;
		private $fkDiscapacidadDiscapacidadId;
		private $fkTipoDiscapacidadTipoDiscapacidadId;
		private $porcentajeDiscapacidad;
		private $discapacidadestperiodo;
		public function set_discapacidadestperiodo($discapacidadestperiodo){$this->discapacidadestperiodo=$discapacidadestperiodo;}

public function get_discapacidadestperiodo(){return $this->discapacidadestperiodo;}
public function set_CarnetConadisId($carnetConadisId){$this->carnetConadisId=$carnetConadisId;}
public function set_fkEstudiantesNumeroIdentificacion($fkEstudiantesNumeroIdentificacion){$this->fkEstudiantesNumeroIdentificacion=$fkEstudiantesNumeroIdentificacion;}
public function set_fkDiscapacidadDiscapacidadId($fkDiscapacidadDiscapacidadId){$this->fkDiscapacidadDiscapacidadId=$fkDiscapacidadDiscapacidadId;}
public function set_fkTipoDiscapacidadTipoDiscapacidadId($fkTipoDiscapacidadTipoDiscapacidadId){$this->fkTipoDiscapacidadTipoDiscapacidadId=$fkTipoDiscapacidadTipoDiscapacidadId;}
public function set_porcentajeDiscapacidad($porcentajeDiscapacidad){$this->porcentajeDiscapacidad=$porcentajeDiscapacidad;}

public function get_CarnetConadisId(){return $this->carnetConadisId;}
public function get_fkEstudiantesNumeroIdentificacion(){return $this->fkEstudiantesNumeroIdentificacion;}
public function get_fkDiscapacidadDiscapacidadId(){return $this->fkDiscapacidadDiscapacidadId;}
public function get_fkTipoDiscapacidadTipoDiscapacidadId(){return $this->fkTipoDiscapacidadTipoDiscapacidadId;}
public function get_porcentajeDiscapacidad(){return $this->porcentajeDiscapacidad;}
public function _construct(){}
	public function toString(){
	return("carnetConadisId: {".$this->carnetConadisId."} fkEstudiantesNumeroIdentificacion: {".$this->fkEstudiantesNumeroIdentificacion."} fkDiscapacidadDiscapacidadId {".$this->fkDiscapacidadDiscapacidadId."} fkTipoDiscapacidadTipoDiscapacidadId: {".$this->fkTipoDiscapacidadTipoDiscapacidadId."} porcentajeDiscapacidad: {".$this->porcentajeDiscapacidad."} discapacidadestperiodo: {".$this->discapacidadestperiodo."}");
	}
	}
?>