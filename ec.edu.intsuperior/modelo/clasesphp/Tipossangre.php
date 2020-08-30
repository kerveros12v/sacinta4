<?php

namespace Clasesphp;

class Tipossangre
{
	private $tipoSangreId;
	private $tipossangrescodigo;
	private $tipoSangre;
	private $tipossangreOculto;
	private $tipossangreAccion;
	private $tipossangrefecha;
	private $tipossangreuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoSangreId
	 */
	public function getTipoSangreId()
	{
		return $this->tipoSangreId;
	}

	/**
	 * Set the value of tipoSangreId
	 *
	 * @return  self
	 */
	public function setTipoSangreId($tipoSangreId)
	{
		$this->tipoSangreId = $tipoSangreId;

		return $this;
	}

	/**
	 * Get the value of tipossangrescodigo
	 */
	public function getTipossangrescodigo()
	{
		return $this->tipossangrescodigo;
	}

	/**
	 * Set the value of tipossangrescodigo
	 *
	 * @return  self
	 */
	public function setTipossangrescodigo($tipossangrescodigo)
	{
		$this->tipossangrescodigo = $tipossangrescodigo;

		return $this;
	}

	/**
	 * Get the value of tipoSangre
	 */
	public function getTipoSangre()
	{
		return $this->tipoSangre;
	}

	/**
	 * Set the value of tipoSangre
	 *
	 * @return  self
	 */
	public function setTipoSangre($tipoSangre)
	{
		$this->tipoSangre = $tipoSangre;

		return $this;
	}

	/**
	 * Get the value of tipossangreOculto
	 */
	public function getTipossangreOculto()
	{
		return $this->tipossangreOculto;
	}

	/**
	 * Set the value of tipossangreOculto
	 *
	 * @return  self
	 */
	public function setTipossangreOculto($tipossangreOculto)
	{
		$this->tipossangreOculto = $tipossangreOculto;

		return $this;
	}

	/**
	 * Get the value of tipossangreAccion
	 */
	public function getTipossangreAccion()
	{
		return $this->tipossangreAccion;
	}

	/**
	 * Set the value of tipossangreAccion
	 *
	 * @return  self
	 */
	public function setTipossangreAccion($tipossangreAccion)
	{
		$this->tipossangreAccion = $tipossangreAccion;

		return $this;
	}

	/**
	 * Get the value of tipossangrefecha
	 */
	public function getTipossangrefecha()
	{
		return $this->tipossangrefecha;
	}

	/**
	 * Set the value of tipossangrefecha
	 *
	 * @return  self
	 */
	public function setTipossangrefecha($tipossangrefecha)
	{
		$this->tipossangrefecha = $tipossangrefecha;

		return $this;
	}

	/**
	 * Get the value of tipossangreuser
	 */
	public function getTipossangreuser()
	{
		return $this->tipossangreuser;
	}

	/**
	 * Set the value of tipossangreuser
	 *
	 * @return  self
	 */
	public function setTipossangreuser($tipossangreuser)
	{
		$this->tipossangreuser = $tipossangreuser;

		return $this;
	}
}
