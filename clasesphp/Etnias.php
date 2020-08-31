<?php

namespace Clasesphp;

class Etnias
{
	private $etniaId;
	private $etniascodigo;
	private $etnia;
	private $etniasOculto;
	private $etniasAccion;
	private $etniasfecha;
	private $etniasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of etniaId
	 */
	public function getEtniaId()
	{
		return $this->etniaId;
	}

	/**
	 * Set the value of etniaId
	 *
	 * @return  self
	 */
	public function setEtniaId($etniaId)
	{
		$this->etniaId = $etniaId;

		return $this;
	}

	/**
	 * Get the value of etniascodigo
	 */
	public function getEtniascodigo()
	{
		return $this->etniascodigo;
	}

	/**
	 * Set the value of etniascodigo
	 *
	 * @return  self
	 */
	public function setEtniascodigo($etniascodigo)
	{
		$this->etniascodigo = $etniascodigo;

		return $this;
	}

	/**
	 * Get the value of etnia
	 */
	public function getEtnia()
	{
		return $this->etnia;
	}

	/**
	 * Set the value of etnia
	 *
	 * @return  self
	 */
	public function setEtnia($etnia)
	{
		$this->etnia = $etnia;

		return $this;
	}

	/**
	 * Get the value of etniasOculto
	 */
	public function getEtniasOculto()
	{
		return $this->etniasOculto;
	}

	/**
	 * Set the value of etniasOculto
	 *
	 * @return  self
	 */
	public function setEtniasOculto($etniasOculto)
	{
		$this->etniasOculto = $etniasOculto;

		return $this;
	}

	/**
	 * Get the value of etniasAccion
	 */
	public function getEtniasAccion()
	{
		return $this->etniasAccion;
	}

	/**
	 * Set the value of etniasAccion
	 *
	 * @return  self
	 */
	public function setEtniasAccion($etniasAccion)
	{
		$this->etniasAccion = $etniasAccion;

		return $this;
	}

	/**
	 * Get the value of etniasfecha
	 */
	public function getEtniasfecha()
	{
		return $this->etniasfecha;
	}

	/**
	 * Set the value of etniasfecha
	 *
	 * @return  self
	 */
	public function setEtniasfecha($etniasfecha)
	{
		$this->etniasfecha = $etniasfecha;

		return $this;
	}

	/**
	 * Get the value of etniasuser
	 */
	public function getEtniasuser()
	{
		return $this->etniasuser;
	}

	/**
	 * Set the value of etniasuser
	 *
	 * @return  self
	 */
	public function setEtniasuser($etniasuser)
	{
		$this->etniasuser = $etniasuser;

		return $this;
	}
}
