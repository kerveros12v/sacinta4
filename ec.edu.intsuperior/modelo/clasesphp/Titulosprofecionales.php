<?php

namespace Clasesphp;

class Titulosprofecionales
{
	private $tituloProfecionalId;
	private $tpCodigo;
	private $tituloProfecional;
	private $tpOculto;
	private $tpAccion;
	private $tpfecha;
	private $tpuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tituloProfecionalId
	 */
	public function getTituloProfecionalId()
	{
		return $this->tituloProfecionalId;
	}

	/**
	 * Set the value of tituloProfecionalId
	 *
	 * @return  self
	 */
	public function setTituloProfecionalId($tituloProfecionalId)
	{
		$this->tituloProfecionalId = $tituloProfecionalId;

		return $this;
	}

	/**
	 * Get the value of tpCodigo
	 */
	public function getTpCodigo()
	{
		return $this->tpCodigo;
	}

	/**
	 * Set the value of tpCodigo
	 *
	 * @return  self
	 */
	public function setTpCodigo($tpCodigo)
	{
		$this->tpCodigo = $tpCodigo;

		return $this;
	}

	/**
	 * Get the value of tituloProfecional
	 */
	public function getTituloProfecional()
	{
		return $this->tituloProfecional;
	}

	/**
	 * Set the value of tituloProfecional
	 *
	 * @return  self
	 */
	public function setTituloProfecional($tituloProfecional)
	{
		$this->tituloProfecional = $tituloProfecional;

		return $this;
	}

	/**
	 * Get the value of tpOculto
	 */
	public function getTpOculto()
	{
		return $this->tpOculto;
	}

	/**
	 * Set the value of tpOculto
	 *
	 * @return  self
	 */
	public function setTpOculto($tpOculto)
	{
		$this->tpOculto = $tpOculto;

		return $this;
	}

	/**
	 * Get the value of tpAccion
	 */
	public function getTpAccion()
	{
		return $this->tpAccion;
	}

	/**
	 * Set the value of tpAccion
	 *
	 * @return  self
	 */
	public function setTpAccion($tpAccion)
	{
		$this->tpAccion = $tpAccion;

		return $this;
	}

	/**
	 * Get the value of tpfecha
	 */
	public function getTpfecha()
	{
		return $this->tpfecha;
	}

	/**
	 * Set the value of tpfecha
	 *
	 * @return  self
	 */
	public function setTpfecha($tpfecha)
	{
		$this->tpfecha = $tpfecha;

		return $this;
	}

	/**
	 * Get the value of tpuser
	 */
	public function getTpuser()
	{
		return $this->tpuser;
	}

	/**
	 * Set the value of tpuser
	 *
	 * @return  self
	 */
	public function setTpuser($tpuser)
	{
		$this->tpuser = $tpuser;

		return $this;
	}
}
