<?php

namespace Clasesphp;

class Instituciondondecursaestudios
{
	private $iDCEId;
	private $iDCE;
	private $iDCEOculto;
	private $iDCEAccion;
	private $iDCEfecha;
	private $iDCEuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of iDCEId
	 */
	public function getIDCEId()
	{
		return $this->iDCEId;
	}

	/**
	 * Set the value of iDCEId
	 *
	 * @return  self
	 */
	public function setIDCEId($iDCEId)
	{
		$this->iDCEId = $iDCEId;

		return $this;
	}

	/**
	 * Get the value of iDCE
	 */
	public function getIDCE()
	{
		return $this->iDCE;
	}

	/**
	 * Set the value of iDCE
	 *
	 * @return  self
	 */
	public function setIDCE($iDCE)
	{
		$this->iDCE = $iDCE;

		return $this;
	}

	/**
	 * Get the value of iDCEOculto
	 */
	public function getIDCEOculto()
	{
		return $this->iDCEOculto;
	}

	/**
	 * Set the value of iDCEOculto
	 *
	 * @return  self
	 */
	public function setIDCEOculto($iDCEOculto)
	{
		$this->iDCEOculto = $iDCEOculto;

		return $this;
	}

	/**
	 * Get the value of iDCEAccion
	 */
	public function getIDCEAccion()
	{
		return $this->iDCEAccion;
	}

	/**
	 * Set the value of iDCEAccion
	 *
	 * @return  self
	 */
	public function setIDCEAccion($iDCEAccion)
	{
		$this->iDCEAccion = $iDCEAccion;

		return $this;
	}

	/**
	 * Get the value of iDCEfecha
	 */
	public function getIDCEfecha()
	{
		return $this->iDCEfecha;
	}

	/**
	 * Set the value of iDCEfecha
	 *
	 * @return  self
	 */
	public function setIDCEfecha($iDCEfecha)
	{
		$this->iDCEfecha = $iDCEfecha;

		return $this;
	}

	/**
	 * Get the value of iDCEuser
	 */
	public function getIDCEuser()
	{
		return $this->iDCEuser;
	}

	/**
	 * Set the value of iDCEuser
	 *
	 * @return  self
	 */
	public function setIDCEuser($iDCEuser)
	{
		$this->iDCEuser = $iDCEuser;

		return $this;
	}
}
