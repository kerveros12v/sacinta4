<?php
namespace Clasesphp;

	class Estudiantestitulados{
private $idEstudiantesTitulados;
private $codigoITSegresados;
private $institutos_InstitutosId;
private $provincia_provinciaId;
private $estudiantes_numeroIdentificacion;
private $carreras_carrerasId;
private $estudiantesTituladosTrabajoTitulacion;

		public function _construct(){}
		public function set_idEstudiantesTitulados($idEstudiantesTitulados){$this->idEstudiantesTitulados=$idEstudiantesTitulados;}
		public function set_CodigoITSegresados($codigoITSegresados){$this->codigoITSegresados=$codigoITSegresados;}
		public function set_institutos_InstitutosId($institutos_InstitutosId){$this->institutos_InstitutosId=$institutos_InstitutosId;}
		public function set_provincia_provinciaId($provincia_provinciaId){$this->provincia_provinciaId=$provincia_provinciaId;}
		public function set_estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion){$this->estudiantes_numeroIdentificacion=$estudiantes_numeroIdentificacion;}
		public function set_carreras_carrerasId($carreras_carrerasId){$this->carreras_carrerasId=$carreras_carrerasId;}
		public function set_estudiantesTituladosTrabajoTitulacion($estudiantesTituladosTrabajoTitulacion){$this->estudiantesTituladosTrabajoTitulacion=$estudiantesTituladosTrabajoTitulacion;}
		public function get_idEstudiantesTitulados(){return $this->idEstudiantesTitulados;}
		public function get_codigoITSegresados(){return $this->codigoITSegresados;}
		public function get_institutos_InstitutosId(){return $this->institutos_InstitutosId;}
		public function get_provincia_provinciaId(){return $this->provincia_provinciaId;}
		public function get_estudiantes_numeroIdentificacion(){return $this->estudiantes_numeroIdentificacion;}
		public function get_carreras_carrerasId(){return $this->carreras_carrerasId;}
		public function get_estudiantesTituladosTrabajoTitulacion(){return $this->estudiantesTituladosTrabajoTitulacion;}
	}
?>