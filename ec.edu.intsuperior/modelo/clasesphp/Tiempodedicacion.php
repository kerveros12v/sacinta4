<?php

namespace Clasesphp;

class Tiempodedicacion
{
	private $tiempoDedicacionId;
	private $tiempodedicacioncodigo;
	private $tiempoDedicacion;
	private $tiempodedicacionOculto;
	private $tiempodedicacionAccion;
	private $tiempodedicacionfecha;
	private $tiempodedicacionuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
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
	 * Get the value of tiempodedicacioncodigo
	 */
	public function getTiempodedicacioncodigo()
	{
		return $this->tiempodedicacioncodigo;
	}

	/**
	 * Set the value of tiempodedicacioncodigo
	 *
	 * @return  self
	 */
	public function setTiempodedicacioncodigo($tiempodedicacioncodigo)
	{
		$this->tiempodedicacioncodigo = $tiempodedicacioncodigo;

		return $this;
	}

	/**
	 * Get the value of tiempoDedicacion
	 */
	public function getTiempoDedicacion()
	{
		return $this->tiempoDedicacion;
	}

	/**
	 * Set the value of tiempoDedicacion
	 *
	 * @return  self
	 */
	public function setTiempoDedicacion($tiempoDedicacion)
	{
		$this->tiempoDedicacion = $tiempoDedicacion;

		return $this;
	}

	/**
	 * Get the value of tiempodedicacionOculto
	 */
	public function getTiempodedicacionOculto()
	{
		return $this->tiempodedicacionOculto;
	}

	/**
	 * Set the value of tiempodedicacionOculto
	 *
	 * @return  self
	 */
	public function setTiempodedicacionOculto($tiempodedicacionOculto)
	{
		$this->tiempodedicacionOculto = $tiempodedicacionOculto;

		return $this;
	}

	/**
	 * Get the value of tiempodedicacionAccion
	 */
	public function getTiempodedicacionAccion()
	{
		return $this->tiempodedicacionAccion;
	}

	/**
	 * Set the value of tiempodedicacionAccion
	 *
	 * @return  self
	 */
	public function setTiempodedicacionAccion($tiempodedicacionAccion)
	{
		$this->tiempodedicacionAccion = $tiempodedicacionAccion;

		return $this;
	}

	/**
	 * Get the value of tiempodedicacionfecha
	 */
	public function getTiempodedicacionfecha()
	{
		return $this->tiempodedicacionfecha;
	}

	/**
	 * Set the value of tiempodedicacionfecha
	 *
	 * @return  self
	 */
	public function setTiempodedicacionfecha($tiempodedicacionfecha)
	{
		$this->tiempodedicacionfecha = $tiempodedicacionfecha;

		return $this;
	}

	/**
	 * Get the value of tiempodedicacionuser
	 */
	public function getTiempodedicacionuser()
	{
		return $this->tiempodedicacionuser;
	}

	/**
	 * Set the value of tiempodedicacionuser
	 *
	 * @return  self
	 */
	public function setTiempodedicacionuser($tiempodedicacionuser)
	{
		$this->tiempodedicacionuser = $tiempodedicacionuser;

		return $this;
	}
}
