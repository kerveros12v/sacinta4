<?php

namespace Clasesphp;

class Cantones
{
	private $cantonId;
	private $cantoncodigo;
	private $canton;
	private $cantonprovincia;
	private $cantonOculto;
	private $cantonAccion;
	private $cantonfecha;
	private $cantonuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}
	public function formatoJSON()
	{
		$myarray = array('cantonId' => $this->cantonId, 'canton' => $this->canton, 'cantoncodigo' => $this->cantoncodigo, 'cantonprovincia' => $this->cantonprovincia);
		return json_encode($myarray);
	}
	public function formatoArray()
	{
		$myarray = array('cantonId' => $this->cantonId, 'canton' => $this->canton, 'cantoncodigo' => $this->cantoncodigo, 'cantonprovincia' => $this->cantonprovincia);
		return $myarray;
	}

	/**
	 * Get the value of cantonId
	 */
	public function getCantonId()
	{
		return $this->cantonId;
	}

	/**
	 * Set the value of cantonId
	 *
	 * @return  self
	 */
	public function setCantonId($cantonId)
	{
		$this->cantonId = $cantonId;

		return $this;
	}

	/**
	 * Get the value of cantoncodigo
	 */
	public function getCantoncodigo()
	{
		return $this->cantoncodigo;
	}

	/**
	 * Set the value of cantoncodigo
	 *
	 * @return  self
	 */
	public function setCantoncodigo($cantoncodigo)
	{
		$this->cantoncodigo = $cantoncodigo;

		return $this;
	}

	/**
	 * Get the value of canton
	 */
	public function getCanton()
	{
		return $this->canton;
	}

	/**
	 * Set the value of canton
	 *
	 * @return  self
	 */
	public function setCanton($canton)
	{
		$this->canton = $canton;

		return $this;
	}

	/**
	 * Get the value of cantonprovincia
	 */
	public function getCantonprovincia()
	{
		return $this->cantonprovincia;
	}

	/**
	 * Set the value of cantonprovincia
	 *
	 * @return  self
	 */
	public function setCantonprovincia($cantonprovincia)
	{
		$this->cantonprovincia = $cantonprovincia;

		return $this;
	}

	/**
	 * Get the value of cantonOculto
	 */
	public function getCantonOculto()
	{
		return $this->cantonOculto;
	}

	/**
	 * Set the value of cantonOculto
	 *
	 * @return  self
	 */
	public function setCantonOculto($cantonOculto)
	{
		$this->cantonOculto = $cantonOculto;

		return $this;
	}

	/**
	 * Get the value of cantonAccion
	 */
	public function getCantonAccion()
	{
		return $this->cantonAccion;
	}

	/**
	 * Set the value of cantonAccion
	 *
	 * @return  self
	 */
	public function setCantonAccion($cantonAccion)
	{
		$this->cantonAccion = $cantonAccion;

		return $this;
	}

	/**
	 * Get the value of cantonfecha
	 */
	public function getCantonfecha()
	{
		return $this->cantonfecha;
	}

	/**
	 * Set the value of cantonfecha
	 *
	 * @return  self
	 */
	public function setCantonfecha($cantonfecha)
	{
		$this->cantonfecha = $cantonfecha;

		return $this;
	}

	/**
	 * Get the value of cantonuser
	 */
	public function getCantonuser()
	{
		return $this->cantonuser;
	}

	/**
	 * Set the value of cantonuser
	 *
	 * @return  self
	 */
	public function setCantonuser($cantonuser)
	{
		$this->cantonuser = $cantonuser;

		return $this;
	}

	public function __toString()
	{
		return $this->canton;
	}
}
