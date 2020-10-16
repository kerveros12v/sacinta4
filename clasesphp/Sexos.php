<?php

namespace Clasesphp;

class Sexos
{
	private $sexoId;
	private $sexocodigo;
	private $sexo;
	private $sexoOculto;
	private $sexoAccion;
	private $sexofecha;
	private $sexouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of sexoId
	 */
	public function getSexoId()
	{
		return $this->sexoId;
	}

	/**
	 * Set the value of sexoId
	 *
	 * @return  self
	 */
	public function setSexoId($sexoId)
	{
		$this->sexoId = $sexoId;

		return $this;
	}

	/**
	 * Get the value of sexocodigo
	 */
	public function getSexocodigo()
	{
		return $this->sexocodigo;
	}

	/**
	 * Set the value of sexocodigo
	 *
	 * @return  self
	 */
	public function setSexocodigo($sexocodigo)
	{
		$this->sexocodigo = $sexocodigo;

		return $this;
	}

	/**
	 * Get the value of sexo
	 */
	public function getSexo()
	{
		return $this->sexo;
	}

	/**
	 * Set the value of sexo
	 *
	 * @return  self
	 */
	public function setSexo($sexo)
	{
		$this->sexo = $sexo;

		return $this;
	}

	/**
	 * Get the value of sexoOculto
	 */
	public function getSexoOculto()
	{
		return $this->sexoOculto;
	}

	/**
	 * Set the value of sexoOculto
	 *
	 * @return  self
	 */
	public function setSexoOculto($sexoOculto)
	{
		$this->sexoOculto = $sexoOculto;

		return $this;
	}

	/**
	 * Get the value of sexoAccion
	 */
	public function getSexoAccion()
	{
		return $this->sexoAccion;
	}

	/**
	 * Set the value of sexoAccion
	 *
	 * @return  self
	 */
	public function setSexoAccion($sexoAccion)
	{
		$this->sexoAccion = $sexoAccion;

		return $this;
	}

	/**
	 * Get the value of sexofecha
	 */
	public function getSexofecha()
	{
		return $this->sexofecha;
	}

	/**
	 * Set the value of sexofecha
	 *
	 * @return  self
	 */
	public function setSexofecha($sexofecha)
	{
		$this->sexofecha = $sexofecha;

		return $this;
	}

	/**
	 * Get the value of sexouser
	 */
	public function getSexouser()
	{
		return $this->sexouser;
	}

	/**
	 * Set the value of sexouser
	 *
	 * @return  self
	 */
	public function setSexouser($sexouser)
	{
		$this->sexouser = $sexouser;

		return $this;
	}
	public function formatoJSON()
	{
		$myarray = array('sexoId' => $this->sexoId, 'sexo' => $this->sexo);
		return json_encode($myarray);
	}
	public function formatoArray()
	{
		$myarray = array('sexoId' => $this->sexoId, 'sexo' => $this->sexo);
		return ($myarray);
	}
}
