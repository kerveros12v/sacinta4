<?php

namespace Clasesphp;

class Parentescos
{
	private $idParentescos;
	private $parentescocodigo;
	private $parentesco;
	private $parentescosOculto;
	private $parentescosAccion;
	private $parentescosfecha;
	private $parentescosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idParentescos
	 */
	public function getIdParentescos()
	{
		return $this->idParentescos;
	}

	/**
	 * Set the value of idParentescos
	 *
	 * @return  self
	 */
	public function setIdParentescos($idParentescos)
	{
		$this->idParentescos = $idParentescos;

		return $this;
	}

	/**
	 * Get the value of parentescocodigo
	 */
	public function getParentescocodigo()
	{
		return $this->parentescocodigo;
	}

	/**
	 * Set the value of parentescocodigo
	 *
	 * @return  self
	 */
	public function setParentescocodigo($parentescocodigo)
	{
		$this->parentescocodigo = $parentescocodigo;

		return $this;
	}

	/**
	 * Get the value of parentesco
	 */
	public function getParentesco()
	{
		return $this->parentesco;
	}

	/**
	 * Set the value of parentesco
	 *
	 * @return  self
	 */
	public function setParentesco($parentesco)
	{
		$this->parentesco = $parentesco;

		return $this;
	}

	/**
	 * Get the value of parentescosOculto
	 */
	public function getParentescosOculto()
	{
		return $this->parentescosOculto;
	}

	/**
	 * Set the value of parentescosOculto
	 *
	 * @return  self
	 */
	public function setParentescosOculto($parentescosOculto)
	{
		$this->parentescosOculto = $parentescosOculto;

		return $this;
	}

	/**
	 * Get the value of parentescosAccion
	 */
	public function getParentescosAccion()
	{
		return $this->parentescosAccion;
	}

	/**
	 * Set the value of parentescosAccion
	 *
	 * @return  self
	 */
	public function setParentescosAccion($parentescosAccion)
	{
		$this->parentescosAccion = $parentescosAccion;

		return $this;
	}

	/**
	 * Get the value of parentescosfecha
	 */
	public function getParentescosfecha()
	{
		return $this->parentescosfecha;
	}

	/**
	 * Set the value of parentescosfecha
	 *
	 * @return  self
	 */
	public function setParentescosfecha($parentescosfecha)
	{
		$this->parentescosfecha = $parentescosfecha;

		return $this;
	}

	/**
	 * Get the value of parentescosuser
	 */
	public function getParentescosuser()
	{
		return $this->parentescosuser;
	}

	/**
	 * Set the value of parentescosuser
	 *
	 * @return  self
	 */
	public function setParentescosuser($parentescosuser)
	{
		$this->parentescosuser = $parentescosuser;

		return $this;
	}
}
