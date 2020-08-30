<?php

namespace Clasesphp;

class Tipomatricula
{
	private $tipoMatriculaId;
	private $tipomatriculacodigo;
	private $tipoMatricula;
	private $tipomatriculaOculto;
	private $tipomatriculaAccion;
	private $tipomatriculafecha;
	private $tipomatriculauser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoMatriculaId
	 */
	public function getTipoMatriculaId()
	{
		return $this->tipoMatriculaId;
	}

	/**
	 * Set the value of tipoMatriculaId
	 *
	 * @return  self
	 */
	public function setTipoMatriculaId($tipoMatriculaId)
	{
		$this->tipoMatriculaId = $tipoMatriculaId;

		return $this;
	}

	/**
	 * Get the value of tipomatriculacodigo
	 */
	public function getTipomatriculacodigo()
	{
		return $this->tipomatriculacodigo;
	}

	/**
	 * Set the value of tipomatriculacodigo
	 *
	 * @return  self
	 */
	public function setTipomatriculacodigo($tipomatriculacodigo)
	{
		$this->tipomatriculacodigo = $tipomatriculacodigo;

		return $this;
	}

	/**
	 * Get the value of tipoMatricula
	 */
	public function getTipoMatricula()
	{
		return $this->tipoMatricula;
	}

	/**
	 * Set the value of tipoMatricula
	 *
	 * @return  self
	 */
	public function setTipoMatricula($tipoMatricula)
	{
		$this->tipoMatricula = $tipoMatricula;

		return $this;
	}

	/**
	 * Get the value of tipomatriculaOculto
	 */
	public function getTipomatriculaOculto()
	{
		return $this->tipomatriculaOculto;
	}

	/**
	 * Set the value of tipomatriculaOculto
	 *
	 * @return  self
	 */
	public function setTipomatriculaOculto($tipomatriculaOculto)
	{
		$this->tipomatriculaOculto = $tipomatriculaOculto;

		return $this;
	}

	/**
	 * Get the value of tipomatriculaAccion
	 */
	public function getTipomatriculaAccion()
	{
		return $this->tipomatriculaAccion;
	}

	/**
	 * Set the value of tipomatriculaAccion
	 *
	 * @return  self
	 */
	public function setTipomatriculaAccion($tipomatriculaAccion)
	{
		$this->tipomatriculaAccion = $tipomatriculaAccion;

		return $this;
	}

	/**
	 * Get the value of tipomatriculafecha
	 */
	public function getTipomatriculafecha()
	{
		return $this->tipomatriculafecha;
	}

	/**
	 * Set the value of tipomatriculafecha
	 *
	 * @return  self
	 */
	public function setTipomatriculafecha($tipomatriculafecha)
	{
		$this->tipomatriculafecha = $tipomatriculafecha;

		return $this;
	}

	/**
	 * Get the value of tipomatriculauser
	 */
	public function getTipomatriculauser()
	{
		return $this->tipomatriculauser;
	}

	/**
	 * Set the value of tipomatriculauser
	 *
	 * @return  self
	 */
	public function setTipomatriculauser($tipomatriculauser)
	{
		$this->tipomatriculauser = $tipomatriculauser;

		return $this;
	}
}
