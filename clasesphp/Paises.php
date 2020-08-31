<?php

namespace Clasesphp;

class Paises
{
	private $paisId;
	private $paisescodigo;
	private $pais;
	private $paisesOculto;
	private $paisesAccion;
	private $paisesfecha;
	private $paisesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of paisId
	 */
	public function getPaisId()
	{
		return $this->paisId;
	}

	/**
	 * Set the value of paisId
	 *
	 * @return  self
	 */
	public function setPaisId($paisId)
	{
		$this->paisId = $paisId;

		return $this;
	}

	/**
	 * Get the value of paisescodigo
	 */
	public function getPaisescodigo()
	{
		return $this->paisescodigo;
	}

	/**
	 * Set the value of paisescodigo
	 *
	 * @return  self
	 */
	public function setPaisescodigo($paisescodigo)
	{
		$this->paisescodigo = $paisescodigo;

		return $this;
	}

	/**
	 * Get the value of pais
	 */
	public function getPais()
	{
		return $this->pais;
	}

	/**
	 * Set the value of pais
	 *
	 * @return  self
	 */
	public function setPais($pais)
	{
		$this->pais = $pais;

		return $this;
	}

	/**
	 * Get the value of paisesOculto
	 */
	public function getPaisesOculto()
	{
		return $this->paisesOculto;
	}

	/**
	 * Set the value of paisesOculto
	 *
	 * @return  self
	 */
	public function setPaisesOculto($paisesOculto)
	{
		$this->paisesOculto = $paisesOculto;

		return $this;
	}

	/**
	 * Get the value of paisesAccion
	 */
	public function getPaisesAccion()
	{
		return $this->paisesAccion;
	}

	/**
	 * Set the value of paisesAccion
	 *
	 * @return  self
	 */
	public function setPaisesAccion($paisesAccion)
	{
		$this->paisesAccion = $paisesAccion;

		return $this;
	}

	/**
	 * Get the value of paisesfecha
	 */
	public function getPaisesfecha()
	{
		return $this->paisesfecha;
	}

	/**
	 * Set the value of paisesfecha
	 *
	 * @return  self
	 */
	public function setPaisesfecha($paisesfecha)
	{
		$this->paisesfecha = $paisesfecha;

		return $this;
	}

	/**
	 * Get the value of paisesuser
	 */
	public function getPaisesuser()
	{
		return $this->paisesuser;
	}

	/**
	 * Set the value of paisesuser
	 *
	 * @return  self
	 */
	public function setPaisesuser($paisesuser)
	{
		$this->paisesuser = $paisesuser;

		return $this;
	}
}
