<?php

namespace Clasesphp;

class Colegios
{
	private $idColegios;
	private $colegioscodigo;
	private $colegio;
	private $cantonCantonId;
	private $tipoColegioTipoColegioId;
	private $colegiosOculto;
	private $colegiosAccion;
	private $colegiosfecha;
	private $colegiosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idColegios
	 */
	public function getIdColegios()
	{
		return $this->idColegios;
	}

	/**
	 * Set the value of idColegios
	 *
	 * @return  self
	 */
	public function setIdColegios($idColegios)
	{
		$this->idColegios = $idColegios;

		return $this;
	}

	/**
	 * Get the value of colegioscodigo
	 */
	public function getColegioscodigo()
	{
		return $this->colegioscodigo;
	}

	/**
	 * Set the value of colegioscodigo
	 *
	 * @return  self
	 */
	public function setColegioscodigo($colegioscodigo)
	{
		$this->colegioscodigo = $colegioscodigo;

		return $this;
	}

	/**
	 * Get the value of colegio
	 */
	public function getColegio()
	{
		return $this->colegio;
	}

	/**
	 * Set the value of colegio
	 *
	 * @return  self
	 */
	public function setColegio($colegio)
	{
		$this->colegio = $colegio;

		return $this;
	}

	/**
	 * Get the value of cantonCantonId
	 */
	public function getCantonCantonId()
	{
		return $this->cantonCantonId;
	}

	/**
	 * Set the value of cantonCantonId
	 *
	 * @return  self
	 */
	public function setCantonCantonId($cantonCantonId)
	{
		$this->cantonCantonId = $cantonCantonId;

		return $this;
	}

	/**
	 * Get the value of tipoColegioTipoColegioId
	 */
	public function getTipoColegioTipoColegioId()
	{
		return $this->tipoColegioTipoColegioId;
	}

	/**
	 * Set the value of tipoColegioTipoColegioId
	 *
	 * @return  self
	 */
	public function setTipoColegioTipoColegioId($tipoColegioTipoColegioId)
	{
		$this->tipoColegioTipoColegioId = $tipoColegioTipoColegioId;

		return $this;
	}

	/**
	 * Get the value of colegiosOculto
	 */
	public function getColegiosOculto()
	{
		return $this->colegiosOculto;
	}

	/**
	 * Set the value of colegiosOculto
	 *
	 * @return  self
	 */
	public function setColegiosOculto($colegiosOculto)
	{
		$this->colegiosOculto = $colegiosOculto;

		return $this;
	}

	/**
	 * Get the value of colegiosAccion
	 */
	public function getColegiosAccion()
	{
		return $this->colegiosAccion;
	}

	/**
	 * Set the value of colegiosAccion
	 *
	 * @return  self
	 */
	public function setColegiosAccion($colegiosAccion)
	{
		$this->colegiosAccion = $colegiosAccion;

		return $this;
	}

	/**
	 * Get the value of colegiosfecha
	 */
	public function getColegiosfecha()
	{
		return $this->colegiosfecha;
	}

	/**
	 * Set the value of colegiosfecha
	 *
	 * @return  self
	 */
	public function setColegiosfecha($colegiosfecha)
	{
		$this->colegiosfecha = $colegiosfecha;

		return $this;
	}

	/**
	 * Get the value of colegiosuser
	 */
	public function getColegiosuser()
	{
		return $this->colegiosuser;
	}

	/**
	 * Set the value of colegiosuser
	 *
	 * @return  self
	 */
	public function setColegiosuser($colegiosuser)
	{
		$this->colegiosuser = $colegiosuser;

		return $this;
	}
}
