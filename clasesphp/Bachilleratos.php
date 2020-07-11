<?php

namespace Clasesphp;

class Bachilleratos
{
	private $bachilleratoId;
	private $fkEstudiantesNumeroIdentificacion;
	private $fkTiposBacilleratotiposBacilleratoId;
	private $anioGraduacion;
	private $colegiob;
	public function _construct()
	{
	}
	public function set_bachilleratoId($bachilleratoId)
	{
		$this->bachilleratoId = $bachilleratoId;
	}
	public function set_fkEstudiantesNumeroIdentificacion($fkEstudiantesNumeroIdentificacion)
	{
		$this->fkEstudiantesNumeroIdentificacion = $fkEstudiantesNumeroIdentificacion;
	}
	public function set_fkTiposBacilleratotiposBacilleratoId($fkTiposBacilleratotiposBacilleratoId)
	{
		$this->fkTiposBacilleratotiposBacilleratoId = $fkTiposBacilleratotiposBacilleratoId;
	}
	public function set_anioGraduacion($anioGraduacion)
	{
		$this->anioGraduacion = $anioGraduacion;
	}
	public function get_bachilleratoId()
	{
		return $this->bachilleratoId;
	}
	public function get_fkEstudiantesNumeroIdentificacion()
	{
		return $this->fkEstudiantesNumeroIdentificacion;
	}
	public function get_fkTiposBacilleratotiposBacilleratoId()
	{
		return $this->fkTiposBacilleratotiposBacilleratoId;
	}
	public function get_anioGraduacion()
	{
		return $this->anioGraduacion;
	}

	public function set_colegio($colegiob)
	{
		$this->colegiob = $colegiob;
	}
	public function get_colegio()
	{
		return $this->colegiob;
	}
	public function __toString()
	{
		return ("bachilleratoId: {" . $this->bachilleratoId . "} fkEstudiantesNumeroIdentificacion: {" . $this->fkEstudiantesNumeroIdentificacion . "} fkTiposBacilleratotiposBacilleratoId: {" . $this->fkTiposBacilleratotiposBacilleratoId . "} anioGraduacion: {" . $this->anioGraduacion . "} colegiob: {" . $this->colegiob . "}");
	}
}
