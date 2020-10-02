<?php

namespace Clasesphp;

class Bachilleratos
{
	private $bachilleratoId;
	private $fkEstudiantesNumeroIdentificacion;
	private $fkTiposBacilleratotiposBacilleratoId;
	private $anioGraduacion;
	private $colegiosidColegios;
	private $bachilleratoOculto;
	private $bachilleratoAccion;
	private $bachilleratofecha;
	private $bachilleratouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of bachilleratoId
	 */
	public function getBachilleratoId()
	{
		return $this->bachilleratoId;
	}

	/**
	 * Set the value of bachilleratoId
	 *
	 * @return  self
	 */
	public function setBachilleratoId($bachilleratoId)
	{
		$this->bachilleratoId = $bachilleratoId;

		return $this;
	}

	/**
	 * Get the value of fkEstudiantesNumeroIdentificacion
	 */
	public function getFkEstudiantesNumeroIdentificacion()
	{
		return $this->fkEstudiantesNumeroIdentificacion;
	}

	/**
	 * Set the value of fkEstudiantesNumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setFkEstudiantesNumeroIdentificacion($fkEstudiantesNumeroIdentificacion)
	{
		$this->fkEstudiantesNumeroIdentificacion = $fkEstudiantesNumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of fkTiposBacilleratotiposBacilleratoId
	 */
	public function getFkTiposBacilleratotiposBacilleratoId()
	{
		return $this->fkTiposBacilleratotiposBacilleratoId;
	}

	/**
	 * Set the value of fkTiposBacilleratotiposBacilleratoId
	 *
	 * @return  self
	 */
	public function setFkTiposBacilleratotiposBacilleratoId($fkTiposBacilleratotiposBacilleratoId)
	{
		$this->fkTiposBacilleratotiposBacilleratoId = $fkTiposBacilleratotiposBacilleratoId;

		return $this;
	}

	/**
	 * Get the value of anioGraduacion
	 */
	public function getAnioGraduacion()
	{
		return $this->anioGraduacion;
	}

	/**
	 * Set the value of anioGraduacion
	 *
	 * @return  self
	 */
	public function setAnioGraduacion($anioGraduacion)
	{
		$this->anioGraduacion = $anioGraduacion;

		return $this;
	}

	/**
	 * Get the value of colegios_idColegios
	 */
	public function getColegiosidColegios()
	{
		return $this->colegiosidColegios;
	}

	/**
	 * Set the value of colegios_idColegios
	 *
	 * @return  self
	 */
	public function setColegiosidColegios($colegiosidColegios)
	{
		$this->colegiosidColegios = $colegiosidColegios;

		return $this;
	}

	/**
	 * Get the value of bachilleratoOculto
	 */
	public function getBachilleratoOculto()
	{
		return $this->bachilleratoOculto;
	}

	/**
	 * Set the value of bachilleratoOculto
	 *
	 * @return  self
	 */
	public function setBachilleratoOculto($bachilleratoOculto)
	{
		$this->bachilleratoOculto = $bachilleratoOculto;

		return $this;
	}

	/**
	 * Get the value of bachilleratoAccion
	 */
	public function getBachilleratoAccion()
	{
		return $this->bachilleratoAccion;
	}

	/**
	 * Set the value of bachilleratoAccion
	 *
	 * @return  self
	 */
	public function setBachilleratoAccion($bachilleratoAccion)
	{
		$this->bachilleratoAccion = $bachilleratoAccion;

		return $this;
	}

	/**
	 * Get the value of bachilleratofecha
	 */
	public function getBachilleratofecha()
	{
		return $this->bachilleratofecha;
	}

	/**
	 * Set the value of bachilleratofecha
	 *
	 * @return  self
	 */
	public function setBachilleratofecha($bachilleratofecha)
	{
		$this->bachilleratofecha = $bachilleratofecha;

		return $this;
	}

	/**
	 * Get the value of bachilleratouser
	 */
	public function getBachilleratouser()
	{
		return $this->bachilleratouser;
	}

	/**
	 * Set the value of bachilleratouser
	 *
	 * @return  self
	 */
	public function setBachilleratouser($bachilleratouser)
	{
		$this->bachilleratouser = $bachilleratouser;

		return $this;
	}
	public function __toString()
	{
		return $this->bachilleratoId . "-" .
			$this->fkEstudiantesNumeroIdentificacion . "-" .
			$this->fkTiposBacilleratotiposBacilleratoId . "-" .
			$this->anioGraduacion . "-" .
			$this->colegiosidColegios . "-" .
			$this->bachilleratoOculto . "-" .
			$this->bachilleratoAccion . "-" .
			$this->bachilleratofecha . "-" .
			$this->bachilleratouser;
	}
}
