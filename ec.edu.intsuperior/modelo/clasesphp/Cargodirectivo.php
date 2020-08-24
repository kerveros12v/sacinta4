<?php

namespace Clasesphp;

class Cargodirectivo
{
	private $cargoDirectivoId;
	private $cargodirectivocodigo;
	private $cargoDirectivo;
	private $cargodirectivoOculto;
	private $cargodirectivoAccion;
	private $cargodirectivofecha;
	private $cargodirectivouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of cargoDirectivoId
	 */
	public function getCargoDirectivoId()
	{
		return $this->cargoDirectivoId;
	}

	/**
	 * Set the value of cargoDirectivoId
	 *
	 * @return  self
	 */
	public function setCargoDirectivoId($cargoDirectivoId)
	{
		$this->cargoDirectivoId = $cargoDirectivoId;

		return $this;
	}

	/**
	 * Get the value of cargodirectivocodigo
	 */
	public function getCargodirectivocodigo()
	{
		return $this->cargodirectivocodigo;
	}

	/**
	 * Set the value of cargodirectivocodigo
	 *
	 * @return  self
	 */
	public function setCargodirectivocodigo($cargodirectivocodigo)
	{
		$this->cargodirectivocodigo = $cargodirectivocodigo;

		return $this;
	}

	/**
	 * Get the value of cargoDirectivo
	 */
	public function getCargoDirectivo()
	{
		return $this->cargoDirectivo;
	}

	/**
	 * Set the value of cargoDirectivo
	 *
	 * @return  self
	 */
	public function setCargoDirectivo($cargoDirectivo)
	{
		$this->cargoDirectivo = $cargoDirectivo;

		return $this;
	}

	/**
	 * Get the value of cargodirectivoOculto
	 */
	public function getCargodirectivoOculto()
	{
		return $this->cargodirectivoOculto;
	}

	/**
	 * Set the value of cargodirectivoOculto
	 *
	 * @return  self
	 */
	public function setCargodirectivoOculto($cargodirectivoOculto)
	{
		$this->cargodirectivoOculto = $cargodirectivoOculto;

		return $this;
	}

	/**
	 * Get the value of cargodirectivoAccion
	 */
	public function getCargodirectivoAccion()
	{
		return $this->cargodirectivoAccion;
	}

	/**
	 * Set the value of cargodirectivoAccion
	 *
	 * @return  self
	 */
	public function setCargodirectivoAccion($cargodirectivoAccion)
	{
		$this->cargodirectivoAccion = $cargodirectivoAccion;

		return $this;
	}

	/**
	 * Get the value of cargodirectivofecha
	 */
	public function getCargodirectivofecha()
	{
		return $this->cargodirectivofecha;
	}

	/**
	 * Set the value of cargodirectivofecha
	 *
	 * @return  self
	 */
	public function setCargodirectivofecha($cargodirectivofecha)
	{
		$this->cargodirectivofecha = $cargodirectivofecha;

		return $this;
	}

	/**
	 * Get the value of cargodirectivouser
	 */
	public function getCargodirectivouser()
	{
		return $this->cargodirectivouser;
	}

	/**
	 * Set the value of cargodirectivouser
	 *
	 * @return  self
	 */
	public function setCargodirectivouser($cargodirectivouser)
	{
		$this->cargodirectivouser = $cargodirectivouser;

		return $this;
	}
}
