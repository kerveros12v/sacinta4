<?php

namespace Clasesphp;

class Cargogestiondireccionacademico
{
	private $cargoGestionDireccionAcademicoId;
	private $cargogestiondireccionacademicocodigo;
	private $cargo;
	private $fkcargoDirectivoId;
	private $cargogestiondireccionacademicoOculto;
	private $cargogestiondireccionacademicoAccion;
	private $cargogestiondireccionacademicofecha;
	private $cargogestiondireccionacademicouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of cargoGestionDireccionAcademicoId
	 */
	public function getCargoGestionDireccionAcademicoId()
	{
		return $this->cargoGestionDireccionAcademicoId;
	}

	/**
	 * Set the value of cargoGestionDireccionAcademicoId
	 *
	 * @return  self
	 */
	public function setCargoGestionDireccionAcademicoId($cargoGestionDireccionAcademicoId)
	{
		$this->cargoGestionDireccionAcademicoId = $cargoGestionDireccionAcademicoId;

		return $this;
	}

	/**
	 * Get the value of cargogestiondireccionacademicocodigo
	 */
	public function getCargogestiondireccionacademicocodigo()
	{
		return $this->cargogestiondireccionacademicocodigo;
	}

	/**
	 * Set the value of cargogestiondireccionacademicocodigo
	 *
	 * @return  self
	 */
	public function setCargogestiondireccionacademicocodigo($cargogestiondireccionacademicocodigo)
	{
		$this->cargogestiondireccionacademicocodigo = $cargogestiondireccionacademicocodigo;

		return $this;
	}

	/**
	 * Get the value of cargo
	 */
	public function getCargo()
	{
		return $this->cargo;
	}

	/**
	 * Set the value of cargo
	 *
	 * @return  self
	 */
	public function setCargo($cargo)
	{
		$this->cargo = $cargo;

		return $this;
	}

	/**
	 * Get the value of fkcargoDirectivoId
	 */
	public function getFkcargoDirectivoId()
	{
		return $this->fkcargoDirectivoId;
	}

	/**
	 * Set the value of fkcargoDirectivoId
	 *
	 * @return  self
	 */
	public function setFkcargoDirectivoId($fkcargoDirectivoId)
	{
		$this->fkcargoDirectivoId = $fkcargoDirectivoId;

		return $this;
	}

	/**
	 * Get the value of cargogestiondireccionacademicoOculto
	 */
	public function getCargogestiondireccionacademicoOculto()
	{
		return $this->cargogestiondireccionacademicoOculto;
	}

	/**
	 * Set the value of cargogestiondireccionacademicoOculto
	 *
	 * @return  self
	 */
	public function setCargogestiondireccionacademicoOculto($cargogestiondireccionacademicoOculto)
	{
		$this->cargogestiondireccionacademicoOculto = $cargogestiondireccionacademicoOculto;

		return $this;
	}

	/**
	 * Get the value of cargogestiondireccionacademicoAccion
	 */
	public function getCargogestiondireccionacademicoAccion()
	{
		return $this->cargogestiondireccionacademicoAccion;
	}

	/**
	 * Set the value of cargogestiondireccionacademicoAccion
	 *
	 * @return  self
	 */
	public function setCargogestiondireccionacademicoAccion($cargogestiondireccionacademicoAccion)
	{
		$this->cargogestiondireccionacademicoAccion = $cargogestiondireccionacademicoAccion;

		return $this;
	}

	/**
	 * Get the value of cargogestiondireccionacademicofecha
	 */
	public function getCargogestiondireccionacademicofecha()
	{
		return $this->cargogestiondireccionacademicofecha;
	}

	/**
	 * Set the value of cargogestiondireccionacademicofecha
	 *
	 * @return  self
	 */
	public function setCargogestiondireccionacademicofecha($cargogestiondireccionacademicofecha)
	{
		$this->cargogestiondireccionacademicofecha = $cargogestiondireccionacademicofecha;

		return $this;
	}

	/**
	 * Get the value of cargogestiondireccionacademicouser
	 */
	public function getCargogestiondireccionacademicouser()
	{
		return $this->cargogestiondireccionacademicouser;
	}

	/**
	 * Set the value of cargogestiondireccionacademicouser
	 *
	 * @return  self
	 */
	public function setCargogestiondireccionacademicouser($cargogestiondireccionacademicouser)
	{
		$this->cargogestiondireccionacademicouser = $cargogestiondireccionacademicouser;

		return $this;
	}
}
