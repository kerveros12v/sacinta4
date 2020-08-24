<?php

namespace Clasesphp;

class Generos
{
	private $generoId;
	private $generoscodigo;
	private $genero;
	private $generoOculto;
	private $generoAccion;
	private $generofecha;
	private $generouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of generoId
	 */
	public function getGeneroId()
	{
		return $this->generoId;
	}

	/**
	 * Set the value of generoId
	 *
	 * @return  self
	 */
	public function setGeneroId($generoId)
	{
		$this->generoId = $generoId;

		return $this;
	}

	/**
	 * Get the value of generoscodigo
	 */
	public function getGeneroscodigo()
	{
		return $this->generoscodigo;
	}

	/**
	 * Set the value of generoscodigo
	 *
	 * @return  self
	 */
	public function setGeneroscodigo($generoscodigo)
	{
		$this->generoscodigo = $generoscodigo;

		return $this;
	}

	/**
	 * Get the value of genero
	 */
	public function getGenero()
	{
		return $this->genero;
	}

	/**
	 * Set the value of genero
	 *
	 * @return  self
	 */
	public function setGenero($genero)
	{
		$this->genero = $genero;

		return $this;
	}

	/**
	 * Get the value of generoOculto
	 */
	public function getGeneroOculto()
	{
		return $this->generoOculto;
	}

	/**
	 * Set the value of generoOculto
	 *
	 * @return  self
	 */
	public function setGeneroOculto($generoOculto)
	{
		$this->generoOculto = $generoOculto;

		return $this;
	}

	/**
	 * Get the value of generoAccion
	 */
	public function getGeneroAccion()
	{
		return $this->generoAccion;
	}

	/**
	 * Set the value of generoAccion
	 *
	 * @return  self
	 */
	public function setGeneroAccion($generoAccion)
	{
		$this->generoAccion = $generoAccion;

		return $this;
	}

	/**
	 * Get the value of generofecha
	 */
	public function getGenerofecha()
	{
		return $this->generofecha;
	}

	/**
	 * Set the value of generofecha
	 *
	 * @return  self
	 */
	public function setGenerofecha($generofecha)
	{
		$this->generofecha = $generofecha;

		return $this;
	}

	/**
	 * Get the value of generouser
	 */
	public function getGenerouser()
	{
		return $this->generouser;
	}

	/**
	 * Set the value of generouser
	 *
	 * @return  self
	 */
	public function setGenerouser($generouser)
	{
		$this->generouser = $generouser;

		return $this;
	}
}
