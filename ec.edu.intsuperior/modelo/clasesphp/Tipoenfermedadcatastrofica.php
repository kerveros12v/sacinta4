<?php

namespace Clasesphp;

class Tipoenfermedadcatastrofica
{
	private $tipoEnfermedadCatastroficaId;
	private $teccodigo;
	private $tipoEnfermedadCatastrofica;
	private $tecOculto;
	private $tecAccion;
	private $tecfecha;
	private $tecuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoEnfermedadCatastroficaId
	 */
	public function getTipoEnfermedadCatastroficaId()
	{
		return $this->tipoEnfermedadCatastroficaId;
	}

	/**
	 * Set the value of tipoEnfermedadCatastroficaId
	 *
	 * @return  self
	 */
	public function setTipoEnfermedadCatastroficaId($tipoEnfermedadCatastroficaId)
	{
		$this->tipoEnfermedadCatastroficaId = $tipoEnfermedadCatastroficaId;

		return $this;
	}

	/**
	 * Get the value of teccodigo
	 */
	public function getTeccodigo()
	{
		return $this->teccodigo;
	}

	/**
	 * Set the value of teccodigo
	 *
	 * @return  self
	 */
	public function setTeccodigo($teccodigo)
	{
		$this->teccodigo = $teccodigo;

		return $this;
	}

	/**
	 * Get the value of tipoEnfermedadCatastrofica
	 */
	public function getTipoEnfermedadCatastrofica()
	{
		return $this->tipoEnfermedadCatastrofica;
	}

	/**
	 * Set the value of tipoEnfermedadCatastrofica
	 *
	 * @return  self
	 */
	public function setTipoEnfermedadCatastrofica($tipoEnfermedadCatastrofica)
	{
		$this->tipoEnfermedadCatastrofica = $tipoEnfermedadCatastrofica;

		return $this;
	}

	/**
	 * Get the value of tecOculto
	 */
	public function getTecOculto()
	{
		return $this->tecOculto;
	}

	/**
	 * Set the value of tecOculto
	 *
	 * @return  self
	 */
	public function setTecOculto($tecOculto)
	{
		$this->tecOculto = $tecOculto;

		return $this;
	}

	/**
	 * Get the value of tecAccion
	 */
	public function getTecAccion()
	{
		return $this->tecAccion;
	}

	/**
	 * Set the value of tecAccion
	 *
	 * @return  self
	 */
	public function setTecAccion($tecAccion)
	{
		$this->tecAccion = $tecAccion;

		return $this;
	}

	/**
	 * Get the value of tecfecha
	 */
	public function getTecfecha()
	{
		return $this->tecfecha;
	}

	/**
	 * Set the value of tecfecha
	 *
	 * @return  self
	 */
	public function setTecfecha($tecfecha)
	{
		$this->tecfecha = $tecfecha;

		return $this;
	}

	/**
	 * Get the value of tecuser
	 */
	public function getTecuser()
	{
		return $this->tecuser;
	}

	/**
	 * Set the value of tecuser
	 *
	 * @return  self
	 */
	public function setTecuser($tecuser)
	{
		$this->tecuser = $tecuser;

		return $this;
	}
}
