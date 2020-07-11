<?php

namespace Clasesphp;

class Becasdocentes
{
	private $becasDocentesId;
	private $montoBeca;
	private $fechainicioBeca;
	private $fechaFinBeca;
	private $docentes_numeroIdentificacion;
	private $poseeBeca_poseeBecaId;
	private $fbdfinanciamientoBecaId;
	private $tipoBeca_tipoBecaId;
	public function _construct()
	{
	}
	public function set_becasDocentesId($becasDocentesId)
	{
		$this->becasDocentesId = $becasDocentesId;
	}
	public function set_montoBeca($montoBeca)
	{
		$this->montoBeca = $montoBeca;
	}
	public function set_fechainicioBeca($fechainicioBeca)
	{
		$this->fechainicioBeca = $fechainicioBeca;
	}
	public function set_fechaFinBeca($fechaFinBeca)
	{
		$this->fechaFinBeca = $fechaFinBeca;
	}
	public function set_Docentes_numeroIdentificacion($docentes_numeroIdentificacion)
	{
		$this->docentes_numeroIdentificacion = $docentes_numeroIdentificacion;
	}
	public function set_PoseeBeca_poseeBecaId($poseeBeca_poseeBecaId)
	{
		$this->poseeBeca_poseeBecaId = $poseeBeca_poseeBecaId;
	}
	public function set_FBDfinanciamientoBecaId($fbdfinanciamientoBecaId)
	{
		$this->fbdfinanciamientoBecaId = $fbdfinanciamientoBecaId;
	}
	public function set_TipoBeca_tipoBecaId($tipoBeca_tipoBecaId)
	{
		$this->tipoBeca_tipoBecaId = $tipoBeca_tipoBecaId;
	}
	public function get_becasDocentesId()
	{
		return $this->becasDocentesId;
	}
	public function get_montoBeca()
	{
		return $this->montoBeca;
	}
	public function get_fechainicioBeca()
	{
		return $this->fechainicioBeca;
	}
	public function get_fechaFinBeca()
	{
		return $this->fechaFinBeca;
	}
	public function get_Docentes_numeroIdentificacion()
	{
		return $this->docentes_numeroIdentificacion;
	}
	public function get_PoseeBeca_poseeBecaId()
	{
		return $this->poseeBeca_poseeBecaId;
	}
	public function get_FBDfinanciamientoBecaId()
	{
		return $this->fbdfinanciamientoBecaId;
	}
	public function get_TipoBeca_tipoBecaId()
	{
		return $this->tipoBeca_tipoBecaId;
	}
}
