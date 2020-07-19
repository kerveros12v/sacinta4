<?php

namespace Clasesphp;

class Bachilleratos
{
	private $bachilleratoId, $fkEstudiantesNumeroIdentificacion, $fkTiposBacilleratotiposBacilleratoId, $anioGraduacion, $colegios_idColegios, $bachilleratoOculto, $bachilleratoAccion, $bachilleratofecha, $bachilleratouser;

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
	public function set_colegios_idColegios($colegios_idColegios)
	{
		$this->colegios_idColegios = $colegios_idColegios;
	}
	public function get_colegios_idColegios()
	{
		return $this->colegios_idColegios;
	}
	public function set_bachilleratoOculto($bachilleratoOculto)
	{
		$this->bachilleratoOculto = $bachilleratoOculto;
	}
	public function get_bachilleratoOculto()
	{
		return $this->bachilleratoOculto;
	}
	public function set_bachilleratoAccion($bachilleratoAccion)
	{
		$this->bachilleratoAccion = $bachilleratoAccion;
	}
	public function get_bachilleratoAccion()
	{
		return $this->bachilleratoAccion;
	}
	public function set_bachilleratofecha($bachilleratofecha)
	{
		$this->bachilleratofecha = $bachilleratofecha;
	}
	public function get_bachilleratofecha()
	{
		return $this->bachilleratofecha;
	}
	public function set_bachilleratouser($bachilleratouser)
	{
		$this->bachilleratouser = $bachilleratouser;
	}
	public function get_bachilleratouser()
	{
		return $this->bachilleratouser;
	}
	public function __toString()
	{
		return ("bachilleratoId: {" . $this->bachilleratoId . "} fkEstudiantesNumeroIdentificacion: {" . $this->fkEstudiantesNumeroIdentificacion . "} fkTiposBacilleratotiposBacilleratoId: {" . $this->fkTiposBacilleratotiposBacilleratoId . "} anioGraduacion: {" . $this->anioGraduacion . "} colegiob: {" . $this->colegios_idColegios. "}");
	}
}
