<?php

namespace Clasesphp;

class Tipocolegio
{
	private $tipoColegioId;
	private $tipocolegiocodigo;
	private $tipoColegio;
	private $tipocolegioOculto;
	private $tipocolegioAccion;
	private $tipocolegiofecha;
	private $tipocolegiouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoColegioId
	 */
	public function getTipoColegioId()
	{
		return $this->tipoColegioId;
	}

	/**
	 * Set the value of tipoColegioId
	 *
	 * @return  self
	 */
	public function setTipoColegioId($tipoColegioId)
	{
		$this->tipoColegioId = $tipoColegioId;

		return $this;
	}

	/**
	 * Get the value of tipocolegiocodigo
	 */
	public function getTipocolegiocodigo()
	{
		return $this->tipocolegiocodigo;
	}

	/**
	 * Set the value of tipocolegiocodigo
	 *
	 * @return  self
	 */
	public function setTipocolegiocodigo($tipocolegiocodigo)
	{
		$this->tipocolegiocodigo = $tipocolegiocodigo;

		return $this;
	}

	/**
	 * Get the value of tipoColegio
	 */
	public function getTipoColegio()
	{
		return $this->tipoColegio;
	}

	/**
	 * Set the value of tipoColegio
	 *
	 * @return  self
	 */
	public function setTipoColegio($tipoColegio)
	{
		$this->tipoColegio = $tipoColegio;

		return $this;
	}

	/**
	 * Get the value of tipocolegioOculto
	 */
	public function getTipocolegioOculto()
	{
		return $this->tipocolegioOculto;
	}

	/**
	 * Set the value of tipocolegioOculto
	 *
	 * @return  self
	 */
	public function setTipocolegioOculto($tipocolegioOculto)
	{
		$this->tipocolegioOculto = $tipocolegioOculto;

		return $this;
	}

	/**
	 * Get the value of tipocolegioAccion
	 */
	public function getTipocolegioAccion()
	{
		return $this->tipocolegioAccion;
	}

	/**
	 * Set the value of tipocolegioAccion
	 *
	 * @return  self
	 */
	public function setTipocolegioAccion($tipocolegioAccion)
	{
		$this->tipocolegioAccion = $tipocolegioAccion;

		return $this;
	}

	/**
	 * Get the value of tipocolegiofecha
	 */
	public function getTipocolegiofecha()
	{
		return $this->tipocolegiofecha;
	}

	/**
	 * Set the value of tipocolegiofecha
	 *
	 * @return  self
	 */
	public function setTipocolegiofecha($tipocolegiofecha)
	{
		$this->tipocolegiofecha = $tipocolegiofecha;

		return $this;
	}

	/**
	 * Get the value of tipocolegiouser
	 */
	public function getTipocolegiouser()
	{
		return $this->tipocolegiouser;
	}

	/**
	 * Set the value of tipocolegiouser
	 *
	 * @return  self
	 */
	public function setTipocolegiouser($tipocolegiouser)
	{
		$this->tipocolegiouser = $tipocolegiouser;

		return $this;
	}
}
