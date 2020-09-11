<?php

namespace Clasesphp;

class Estadosciviles
{
	private $estadoCivilId;
	private $estadoscivilcodigo;
	private $estadoCivil;
	private $estadoCivilOculto;
	private $estadoCivilAccion;
	private $estadoCivilfecha;
	private $estadoCiviluser;
	/**
	 * Class constructor. 
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of estadoCivilId
	 */
	public function getEstadoCivilId()
	{
		return $this->estadoCivilId;
	}

	/**
	 * Set the value of estadoCivilId
	 *
	 * @return  self
	 */
	public function setEstadoCivilId($estadoCivilId)
	{
		$this->estadoCivilId = $estadoCivilId;

		return $this;
	}

	/**
	 * Get the value of estadoscivilcodigo
	 */
	public function getEstadoscivilcodigo()
	{
		return $this->estadoscivilcodigo;
	}

	/**
	 * Set the value of estadoscivilcodigo
	 *
	 * @return  self
	 */
	public function setEstadoscivilcodigo($estadoscivilcodigo)
	{
		$this->estadoscivilcodigo = $estadoscivilcodigo;

		return $this;
	}

	/**
	 * Get the value of estadoCivil
	 */
	public function getEstadoCivil()
	{
		return $this->estadoCivil;
	}

	/**
	 * Set the value of estadoCivil
	 *
	 * @return  self
	 */
	public function setEstadoCivil($estadoCivil)
	{
		$this->estadoCivil = $estadoCivil;

		return $this;
	}

	/**
	 * Get the value of estadoCivilOculto
	 */
	public function getEstadoCivilOculto()
	{
		return $this->estadoCivilOculto;
	}

	/**
	 * Set the value of estadoCivilOculto
	 *
	 * @return  self
	 */
	public function setEstadoCivilOculto($estadoCivilOculto)
	{
		$this->estadoCivilOculto = $estadoCivilOculto;

		return $this;
	}

	/**
	 * Get the value of estadoCivilAccion
	 */
	public function getEstadoCivilAccion()
	{
		return $this->estadoCivilAccion;
	}

	/**
	 * Set the value of estadoCivilAccion
	 *
	 * @return  self
	 */
	public function setEstadoCivilAccion($estadoCivilAccion)
	{
		$this->estadoCivilAccion = $estadoCivilAccion;

		return $this;
	}

	/**
	 * Get the value of estadoCivilfecha
	 */
	public function getEstadoCivilfecha()
	{
		return $this->estadoCivilfecha;
	}

	/**
	 * Set the value of estadoCivilfecha
	 *
	 * @return  self
	 */
	public function setEstadoCivilfecha($estadoCivilfecha)
	{
		$this->estadoCivilfecha = $estadoCivilfecha;

		return $this;
	}

	/**
	 * Get the value of estadoCiviluser
	 */
	public function getEstadoCiviluser()
	{
		return $this->estadoCiviluser;
	}

	/**
	 * Set the value of estadoCiviluser
	 *
	 * @return  self
	 */
	public function setEstadoCiviluser($estadoCiviluser)
	{
		$this->estadoCiviluser = $estadoCiviluser;

		return $this;
	}
}
