<?php

namespace Clasesphp;

class Distributivos
{
	private $distributivosId;
	private $distributivosNumero;
	private $fechaVinculacion;
	private $numeroHorasClaseSemanales;
	private $numeroHorasAcademicas;
	private $numeroHorasInvestigacion;
	private $numeroHorasGestionDireccionAcacemica;
	private $distributivosTotalHoras;
	private $docentesNumeroIdentificacion;
	private $titulosprofecionalesId;
	private $gradoOcupacionalId;
	private $tiempoDedicacionId;
	private $proyectosinvestigacionId;
	private $distributivosOculto;
	private $distributivosAccion;
	private $distributivosfecha;
	private $distributivosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of distributivosId
	 */
	public function getDistributivosId()
	{
		return $this->distributivosId;
	}

	/**
	 * Set the value of distributivosId
	 *
	 * @return  self
	 */
	public function setDistributivosId($distributivosId)
	{
		$this->distributivosId = $distributivosId;

		return $this;
	}

	/**
	 * Get the value of distributivosNumero
	 */
	public function getDistributivosNumero()
	{
		return $this->distributivosNumero;
	}

	/**
	 * Set the value of distributivosNumero
	 *
	 * @return  self
	 */
	public function setDistributivosNumero($distributivosNumero)
	{
		$this->distributivosNumero = $distributivosNumero;

		return $this;
	}

	/**
	 * Get the value of fechaVinculacion
	 */
	public function getFechaVinculacion()
	{
		return $this->fechaVinculacion;
	}

	/**
	 * Set the value of fechaVinculacion
	 *
	 * @return  self
	 */
	public function setFechaVinculacion($fechaVinculacion)
	{
		$this->fechaVinculacion = $fechaVinculacion;

		return $this;
	}

	/**
	 * Get the value of numeroHorasClaseSemanales
	 */
	public function getNumeroHorasClaseSemanales()
	{
		return $this->numeroHorasClaseSemanales;
	}

	/**
	 * Set the value of numeroHorasClaseSemanales
	 *
	 * @return  self
	 */
	public function setNumeroHorasClaseSemanales($numeroHorasClaseSemanales)
	{
		$this->numeroHorasClaseSemanales = $numeroHorasClaseSemanales;

		return $this;
	}

	/**
	 * Get the value of numeroHorasAcademicas
	 */
	public function getNumeroHorasAcademicas()
	{
		return $this->numeroHorasAcademicas;
	}

	/**
	 * Set the value of numeroHorasAcademicas
	 *
	 * @return  self
	 */
	public function setNumeroHorasAcademicas($numeroHorasAcademicas)
	{
		$this->numeroHorasAcademicas = $numeroHorasAcademicas;

		return $this;
	}

	/**
	 * Get the value of numeroHorasInvestigacion
	 */
	public function getNumeroHorasInvestigacion()
	{
		return $this->numeroHorasInvestigacion;
	}

	/**
	 * Set the value of numeroHorasInvestigacion
	 *
	 * @return  self
	 */
	public function setNumeroHorasInvestigacion($numeroHorasInvestigacion)
	{
		$this->numeroHorasInvestigacion = $numeroHorasInvestigacion;

		return $this;
	}

	/**
	 * Get the value of numeroHorasGestionDireccionAcacemica
	 */
	public function getNumeroHorasGestionDireccionAcacemica()
	{
		return $this->numeroHorasGestionDireccionAcacemica;
	}

	/**
	 * Set the value of numeroHorasGestionDireccionAcacemica
	 *
	 * @return  self
	 */
	public function setNumeroHorasGestionDireccionAcacemica($numeroHorasGestionDireccionAcacemica)
	{
		$this->numeroHorasGestionDireccionAcacemica = $numeroHorasGestionDireccionAcacemica;

		return $this;
	}

	/**
	 * Get the value of distributivosTotalHoras
	 */
	public function getDistributivosTotalHoras()
	{
		return $this->distributivosTotalHoras;
	}

	/**
	 * Set the value of distributivosTotalHoras
	 *
	 * @return  self
	 */
	public function setDistributivosTotalHoras($distributivosTotalHoras)
	{
		$this->distributivosTotalHoras = $distributivosTotalHoras;

		return $this;
	}

	/**
	 * Get the value of docentesNumeroIdentificacion
	 */
	public function getDocentesNumeroIdentificacion()
	{
		return $this->docentesNumeroIdentificacion;
	}

	/**
	 * Set the value of docentesNumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setDocentesNumeroIdentificacion($docentesNumeroIdentificacion)
	{
		$this->docentesNumeroIdentificacion = $docentesNumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of titulosprofecionalesId
	 */
	public function getTitulosprofecionalesId()
	{
		return $this->titulosprofecionalesId;
	}

	/**
	 * Set the value of titulosprofecionalesId
	 *
	 * @return  self
	 */
	public function setTitulosprofecionalesId($titulosprofecionalesId)
	{
		$this->titulosprofecionalesId = $titulosprofecionalesId;

		return $this;
	}

	/**
	 * Get the value of gradoOcupacionalId
	 */
	public function getGradoOcupacionalId()
	{
		return $this->gradoOcupacionalId;
	}

	/**
	 * Set the value of gradoOcupacionalId
	 *
	 * @return  self
	 */
	public function setGradoOcupacionalId($gradoOcupacionalId)
	{
		$this->gradoOcupacionalId = $gradoOcupacionalId;

		return $this;
	}

	/**
	 * Get the value of tiempoDedicacionId
	 */
	public function getTiempoDedicacionId()
	{
		return $this->tiempoDedicacionId;
	}

	/**
	 * Set the value of tiempoDedicacionId
	 *
	 * @return  self
	 */
	public function setTiempoDedicacionId($tiempoDedicacionId)
	{
		$this->tiempoDedicacionId = $tiempoDedicacionId;

		return $this;
	}

	/**
	 * Get the value of proyectosinvestigacionId
	 */
	public function getProyectosinvestigacionId()
	{
		return $this->proyectosinvestigacionId;
	}

	/**
	 * Set the value of proyectosinvestigacionId
	 *
	 * @return  self
	 */
	public function setProyectosinvestigacionId($proyectosinvestigacionId)
	{
		$this->proyectosinvestigacionId = $proyectosinvestigacionId;

		return $this;
	}

	/**
	 * Get the value of distributivosOculto
	 */
	public function getDistributivosOculto()
	{
		return $this->distributivosOculto;
	}

	/**
	 * Set the value of distributivosOculto
	 *
	 * @return  self
	 */
	public function setDistributivosOculto($distributivosOculto)
	{
		$this->distributivosOculto = $distributivosOculto;

		return $this;
	}

	/**
	 * Get the value of distributivosAccion
	 */
	public function getDistributivosAccion()
	{
		return $this->distributivosAccion;
	}

	/**
	 * Set the value of distributivosAccion
	 *
	 * @return  self
	 */
	public function setDistributivosAccion($distributivosAccion)
	{
		$this->distributivosAccion = $distributivosAccion;

		return $this;
	}

	/**
	 * Get the value of distributivosfecha
	 */
	public function getDistributivosfecha()
	{
		return $this->distributivosfecha;
	}

	/**
	 * Set the value of distributivosfecha
	 *
	 * @return  self
	 */
	public function setDistributivosfecha($distributivosfecha)
	{
		$this->distributivosfecha = $distributivosfecha;

		return $this;
	}

	/**
	 * Get the value of distributivosuser
	 */
	public function getDistributivosuser()
	{
		return $this->distributivosuser;
	}

	/**
	 * Set the value of distributivosuser
	 *
	 * @return  self
	 */
	public function setDistributivosuser($distributivosuser)
	{
		$this->distributivosuser = $distributivosuser;

		return $this;
	}
}
