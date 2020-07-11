<?php

namespace Clasesphp;

class Asistenciaestudiantes
{
	private $asistenciaEstudiantesId;
	private $distributivos_distributivosId;
	private $fecha;
	private $taetipoAsistenciaEstudiantesId;
	private $matriculas_CodigoMatricula;
	public function _construct()
	{
	}
	public function set_asistenciaEstudiantesId($asistenciaEstudiantesId)
	{
		$this->asistenciaEstudiantesId = $asistenciaEstudiantesId;
	}
	public function set_Distributivos_distributivosId($distributivos_distributivosId)
	{
		$this->distributivos_distributivosId = $distributivos_distributivosId;
	}
	public function set_fecha($fecha)
	{
		$this->fecha = $fecha;
	}
	public function set_taetipoAsistenciaEstudiantesId($taetipoAsistenciaEstudiantesId)
	{
		$this->taetipoAsistenciaEstudiantesId = $taetipoAsistenciaEstudiantesId;
	}
	public function set_Matriculas_CodigoMatricula($matriculas_CodigoMatricula)
	{
		$this->matriculas_CodigoMatricula = $matriculas_CodigoMatricula;
	}
	public function get_asistenciaEstudiantesId()
	{
		return  $this->asistenciaEstudiantesId;
	}
	public function get_Distributivos_distributivosId()
	{
		return  $this->distributivos_distributivosId;
	}
	public function get_fecha()
	{
		return  $this->fecha;
	}
	public function get_taetipoAsistenciaEstudiantesId()
	{
		return  $this->taetipoAsistenciaEstudiantesId;
	}
	public function get_Matriculas_CodigoMatricula()
	{
		return $this->matriculas_CodigoMatricula;
	}
}
