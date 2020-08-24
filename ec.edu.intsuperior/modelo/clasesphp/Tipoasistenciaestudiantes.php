<?php
namespace Clasesphp;

class Tipoasistenciaestudiantes{
	private $tipoAsistenciaEstudiantesId;
	private $tipoAlcanceProyectoVinculacion;
	private $tipoAsistenciaEstudiante;
	public function _construct() {}
	public function set_tipoAsistenciaEstudiantesId($tipoAsistenciaEstudiantesId) {$this->tipoAsistenciaEstudiantesId=$tipoAsistenciaEstudiantesId;}
	public function get_tipoAsistenciaEstudiantesId() {return $this->tipoAsistenciaEstudiantesId;}
	public function set_tipoAsistenciaEstudiantesCodigo($tipoAsistenciaEstudiantesCodigo) {$this->tipoAsistenciaEstudiantesCodigo=$tipoAsistenciaEstudiantesCodigo;}
	public function get_tipoAsistenciaEstudiantesCodigo() {return $this->tipoAsistenciaEstudiantesCodigo;}
	public function set_tipoAsistenciaEstudiante($tipoAsistenciaEstudiante) {$this->tipoAsistenciaEstudiante=$tipoAsistenciaEstudiante;}
	public function get_tipoAsistenciaEstudiante() {return $this->tipoAsistenciaEstudiante;}
}
?>