<?php

namespace Clasesphp;

class Discapacidad
{
	private $discapacidadId;
	private $discapacidadcodigo;
	private $discapacidad;
	private $discapacidadbool;
	private $discapacidadOculto;
	private $discapacidadAccion;
	private $discapacidadfecha;
	private $discapacidaduser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of discapacidadId
	 */
	public function getDiscapacidadId()
	{
		return $this->discapacidadId;
	}

	/**
	 * Set the value of discapacidadId
	 *
	 * @return  self
	 */
	public function setDiscapacidadId($discapacidadId)
	{
		$this->discapacidadId = $discapacidadId;

		return $this;
	}

	/**
	 * Get the value of discapacidadcodigo
	 */
	public function getDiscapacidadcodigo()
	{
		return $this->discapacidadcodigo;
	}

	/**
	 * Set the value of discapacidadcodigo
	 *
	 * @return  self
	 */
	public function setDiscapacidadcodigo($discapacidadcodigo)
	{
		$this->discapacidadcodigo = $discapacidadcodigo;

		return $this;
	}

	/**
	 * Get the value of discapacidad
	 */
	public function getDiscapacidad()
	{
		return $this->discapacidad;
	}

	/**
	 * Set the value of discapacidad
	 *
	 * @return  self
	 */
	public function setDiscapacidad($discapacidad)
	{
		$this->discapacidad = $discapacidad;

		return $this;
	}

	/**
	 * Get the value of discapacidadbool
	 */
	public function getDiscapacidadbool()
	{
		return $this->discapacidadbool;
	}

	/**
	 * Set the value of discapacidadbool
	 *
	 * @return  self
	 */
	public function setDiscapacidadbool($discapacidadbool)
	{
		$this->discapacidadbool = $discapacidadbool;

		return $this;
	}

	/**
	 * Get the value of discapacidadOculto
	 */
	public function getDiscapacidadOculto()
	{
		return $this->discapacidadOculto;
	}

	/**
	 * Set the value of discapacidadOculto
	 *
	 * @return  self
	 */
	public function setDiscapacidadOculto($discapacidadOculto)
	{
		$this->discapacidadOculto = $discapacidadOculto;

		return $this;
	}

	/**
	 * Get the value of discapacidadAccion
	 */
	public function getDiscapacidadAccion()
	{
		return $this->discapacidadAccion;
	}

	/**
	 * Set the value of discapacidadAccion
	 *
	 * @return  self
	 */
	public function setDiscapacidadAccion($discapacidadAccion)
	{
		$this->discapacidadAccion = $discapacidadAccion;

		return $this;
	}

	/**
	 * Get the value of discapacidadfecha
	 */
	public function getDiscapacidadfecha()
	{
		return $this->discapacidadfecha;
	}

	/**
	 * Set the value of discapacidadfecha
	 *
	 * @return  self
	 */
	public function setDiscapacidadfecha($discapacidadfecha)
	{
		$this->discapacidadfecha = $discapacidadfecha;

		return $this;
	}

	/**
	 * Get the value of discapacidaduser
	 */
	public function getDiscapacidaduser()
	{
		return $this->discapacidaduser;
	}

	/**
	 * Set the value of discapacidaduser
	 *
	 * @return  self
	 */
	public function setDiscapacidaduser($discapacidaduser)
	{
		$this->discapacidaduser = $discapacidaduser;

		return $this;
	}
}
