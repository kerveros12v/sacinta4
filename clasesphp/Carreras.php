<?php

namespace Clasesphp;

class Carreras
{
	private $carrerasId;
	private $codigoCarreras;
	private $carrera;
	private $estado;
	private $carreraTituloAOptener;
	private $fktipoCarrerasId;
	private $fkmodalidadCarreraId;
	private $carreraOculto;
	private $carreraAccion;
	private $carrerafecha;
	private $carrerauser;
	private $carrerasinstituto;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of carrerasId
	 */
	public function getCarrerasId()
	{
		return $this->carrerasId;
	}

	/**
	 * Set the value of carrerasId
	 *
	 * @return  self
	 */
	public function setCarrerasId($carrerasId)
	{
		$this->carrerasId = $carrerasId;

		return $this;
	}

	/**
	 * Get the value of codigoCarreras
	 */
	public function getCodigoCarreras()
	{
		return $this->codigoCarreras;
	}

	/**
	 * Set the value of codigoCarreras
	 *
	 * @return  self
	 */
	public function setCodigoCarreras($codigoCarreras)
	{
		$this->codigoCarreras = $codigoCarreras;

		return $this;
	}

	/**
	 * Get the value of carrera
	 */
	public function getCarrera()
	{
		return $this->carrera;
	}

	/**
	 * Set the value of carrera
	 *
	 * @return  self
	 */
	public function setCarrera($carrera)
	{
		$this->carrera = $carrera;

		return $this;
	}

	/**
	 * Get the value of estado
	 */
	public function getEstado()
	{
		return $this->estado;
	}

	/**
	 * Set the value of estado
	 *
	 * @return  self
	 */
	public function setEstado($estado)
	{
		$this->estado = $estado;

		return $this;
	}

	/**
	 * Get the value of carreraTituloAOptener
	 */
	public function getCarreraTituloAOptener()
	{
		return $this->carreraTituloAOptener;
	}

	/**
	 * Set the value of carreraTituloAOptener
	 *
	 * @return  self
	 */
	public function setCarreraTituloAOptener($carreraTituloAOptener)
	{
		$this->carreraTituloAOptener = $carreraTituloAOptener;

		return $this;
	}

	/**
	 * Get the value of fktipoCarrerasId
	 */
	public function getFktipoCarrerasId()
	{
		return $this->fktipoCarrerasId;
	}

	/**
	 * Set the value of fktipoCarrerasId
	 *
	 * @return  self
	 */
	public function setFktipoCarrerasId($fktipoCarrerasId)
	{
		$this->fktipoCarrerasId = $fktipoCarrerasId;

		return $this;
	}

	/**
	 * Get the value of fkmodalidadCarreraId
	 */
	public function getFkmodalidadCarreraId()
	{
		return $this->fkmodalidadCarreraId;
	}

	/**
	 * Set the value of fkmodalidadCarreraId
	 *
	 * @return  self
	 */
	public function setFkmodalidadCarreraId($fkmodalidadCarreraId)
	{
		$this->fkmodalidadCarreraId = $fkmodalidadCarreraId;

		return $this;
	}

	/**
	 * Get the value of carreraOculto
	 */
	public function getCarreraOculto()
	{
		return $this->carreraOculto;
	}

	/**
	 * Set the value of carreraOculto
	 *
	 * @return  self
	 */
	public function setCarreraOculto($carreraOculto)
	{
		$this->carreraOculto = $carreraOculto;

		return $this;
	}

	/**
	 * Get the value of carreraAccion
	 */
	public function getCarreraAccion()
	{
		return $this->carreraAccion;
	}

	/**
	 * Set the value of carreraAccion
	 *
	 * @return  self
	 */
	public function setCarreraAccion($carreraAccion)
	{
		$this->carreraAccion = $carreraAccion;

		return $this;
	}

	/**
	 * Get the value of carrerafecha
	 */
	public function getCarrerafecha()
	{
		return $this->carrerafecha;
	}

	/**
	 * Set the value of carrerafecha
	 *
	 * @return  self
	 */
	public function setCarrerafecha($carrerafecha)
	{
		$this->carrerafecha = $carrerafecha;

		return $this;
	}

	/**
	 * Get the value of carrerauser
	 */
	public function getCarrerauser()
	{
		return $this->carrerauser;
	}

	/**
	 * Set the value of carrerauser
	 *
	 * @return  self
	 */
	public function setCarrerauser($carrerauser)
	{
		$this->carrerauser = $carrerauser;

		return $this;
	}
	public function __toString()
	{
		return $this->carrera;
	}

	/**
	 * Get the value of carrerasinstituto
	 */
	public function getCarrerasinstituto()
	{
		return $this->carrerasinstituto;
	}

	/**
	 * Set the value of carrerasinstituto
	 *
	 * @return  self
	 */
	public function setCarrerasinstituto($carrerasinstituto)
	{
		$this->carrerasinstituto = $carrerasinstituto;

		return $this;
	}
}
