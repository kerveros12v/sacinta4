<?php

namespace Clasesphp;

class Sostenimientos
{
	private $idSostenimiento;
	private $sostenimientoscodigo;
	private $sostenimiento;
	private $sostenimientosOculto;
	private $sostenimientosAccion;
	private $sostenimientosfecha;
	private $sostenimientosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idSostenimiento
	 */
	public function getIdSostenimiento()
	{
		return $this->idSostenimiento;
	}

	/**
	 * Set the value of idSostenimiento
	 *
	 * @return  self
	 */
	public function setIdSostenimiento($idSostenimiento)
	{
		$this->idSostenimiento = $idSostenimiento;

		return $this;
	}

	/**
	 * Get the value of sostenimientoscodigo
	 */
	public function getSostenimientoscodigo()
	{
		return $this->sostenimientoscodigo;
	}

	/**
	 * Set the value of sostenimientoscodigo
	 *
	 * @return  self
	 */
	public function setSostenimientoscodigo($sostenimientoscodigo)
	{
		$this->sostenimientoscodigo = $sostenimientoscodigo;

		return $this;
	}

	/**
	 * Get the value of sostenimiento
	 */
	public function getSostenimiento()
	{
		return $this->sostenimiento;
	}

	/**
	 * Set the value of sostenimiento
	 *
	 * @return  self
	 */
	public function setSostenimiento($sostenimiento)
	{
		$this->sostenimiento = $sostenimiento;

		return $this;
	}

	/**
	 * Get the value of sostenimientosOculto
	 */
	public function getSostenimientosOculto()
	{
		return $this->sostenimientosOculto;
	}

	/**
	 * Set the value of sostenimientosOculto
	 *
	 * @return  self
	 */
	public function setSostenimientosOculto($sostenimientosOculto)
	{
		$this->sostenimientosOculto = $sostenimientosOculto;

		return $this;
	}

	/**
	 * Get the value of sostenimientosAccion
	 */
	public function getSostenimientosAccion()
	{
		return $this->sostenimientosAccion;
	}

	/**
	 * Set the value of sostenimientosAccion
	 *
	 * @return  self
	 */
	public function setSostenimientosAccion($sostenimientosAccion)
	{
		$this->sostenimientosAccion = $sostenimientosAccion;

		return $this;
	}

	/**
	 * Get the value of sostenimientosfecha
	 */
	public function getSostenimientosfecha()
	{
		return $this->sostenimientosfecha;
	}

	/**
	 * Set the value of sostenimientosfecha
	 *
	 * @return  self
	 */
	public function setSostenimientosfecha($sostenimientosfecha)
	{
		$this->sostenimientosfecha = $sostenimientosfecha;

		return $this;
	}

	/**
	 * Get the value of sostenimientosuser
	 */
	public function getSostenimientosuser()
	{
		return $this->sostenimientosuser;
	}

	/**
	 * Set the value of sostenimientosuser
	 *
	 * @return  self
	 */
	public function setSostenimientosuser($sostenimientosuser)
	{
		$this->sostenimientosuser = $sostenimientosuser;

		return $this;
	}
}
