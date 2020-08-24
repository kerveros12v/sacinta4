<?php

namespace Clasesphp;

class Provincias
{
	private $provinciaId;
	private $provinciacodigo;
	private $provincia;
	private $provinciapais;
	private $provinciaOculto;
	private $provinciaAccion;
	private $provinciafecha;
	private $provinciauser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of provinciaId
	 */
	public function getProvinciaId()
	{
		return $this->provinciaId;
	}

	/**
	 * Set the value of provinciaId
	 *
	 * @return  self
	 */
	public function setProvinciaId($provinciaId)
	{
		$this->provinciaId = $provinciaId;

		return $this;
	}

	/**
	 * Get the value of provinciacodigo
	 */
	public function getProvinciacodigo()
	{
		return $this->provinciacodigo;
	}

	/**
	 * Set the value of provinciacodigo
	 *
	 * @return  self
	 */
	public function setProvinciacodigo($provinciacodigo)
	{
		$this->provinciacodigo = $provinciacodigo;

		return $this;
	}

	/**
	 * Get the value of provincia
	 */
	public function getProvincia()
	{
		return $this->provincia;
	}

	/**
	 * Set the value of provincia
	 *
	 * @return  self
	 */
	public function setProvincia($provincia)
	{
		$this->provincia = $provincia;

		return $this;
	}

	/**
	 * Get the value of provinciapais
	 */
	public function getProvinciapais()
	{
		return $this->provinciapais;
	}

	/**
	 * Set the value of provinciapais
	 *
	 * @return  self
	 */
	public function setProvinciapais($provinciapais)
	{
		$this->provinciapais = $provinciapais;

		return $this;
	}

	/**
	 * Get the value of provinciaOculto
	 */
	public function getProvinciaOculto()
	{
		return $this->provinciaOculto;
	}

	/**
	 * Set the value of provinciaOculto
	 *
	 * @return  self
	 */
	public function setProvinciaOculto($provinciaOculto)
	{
		$this->provinciaOculto = $provinciaOculto;

		return $this;
	}

	/**
	 * Get the value of provinciaAccion
	 */
	public function getProvinciaAccion()
	{
		return $this->provinciaAccion;
	}

	/**
	 * Set the value of provinciaAccion
	 *
	 * @return  self
	 */
	public function setProvinciaAccion($provinciaAccion)
	{
		$this->provinciaAccion = $provinciaAccion;

		return $this;
	}

	/**
	 * Get the value of provinciafecha
	 */
	public function getProvinciafecha()
	{
		return $this->provinciafecha;
	}

	/**
	 * Set the value of provinciafecha
	 *
	 * @return  self
	 */
	public function setProvinciafecha($provinciafecha)
	{
		$this->provinciafecha = $provinciafecha;

		return $this;
	}

	/**
	 * Get the value of provinciauser
	 */
	public function getProvinciauser()
	{
		return $this->provinciauser;
	}

	/**
	 * Set the value of provinciauser
	 *
	 * @return  self
	 */
	public function setProvinciauser($provinciauser)
	{
		$this->provinciauser = $provinciauser;

		return $this;
	}
}
