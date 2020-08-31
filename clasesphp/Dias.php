<?php

namespace Clasesphp;

class Dias
{
	private $idDias;
	private $dia;
	private $diasOculto;
	private $diasAccion;
	private $diasfecha;
	private $diasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idDias
	 */
	public function getIdDias()
	{
		return $this->idDias;
	}

	/**
	 * Set the value of idDias
	 *
	 * @return  self
	 */
	public function setIdDias($idDias)
	{
		$this->idDias = $idDias;

		return $this;
	}

	/**
	 * Get the value of dia
	 */
	public function getDia()
	{
		return $this->dia;
	}

	/**
	 * Set the value of dia
	 *
	 * @return  self
	 */
	public function setDia($dia)
	{
		$this->dia = $dia;

		return $this;
	}

	/**
	 * Get the value of diasOculto
	 */
	public function getDiasOculto()
	{
		return $this->diasOculto;
	}

	/**
	 * Set the value of diasOculto
	 *
	 * @return  self
	 */
	public function setDiasOculto($diasOculto)
	{
		$this->diasOculto = $diasOculto;

		return $this;
	}

	/**
	 * Get the value of diasAccion
	 */
	public function getDiasAccion()
	{
		return $this->diasAccion;
	}

	/**
	 * Set the value of diasAccion
	 *
	 * @return  self
	 */
	public function setDiasAccion($diasAccion)
	{
		$this->diasAccion = $diasAccion;

		return $this;
	}

	/**
	 * Get the value of diasfecha
	 */
	public function getDiasfecha()
	{
		return $this->diasfecha;
	}

	/**
	 * Set the value of diasfecha
	 *
	 * @return  self
	 */
	public function setDiasfecha($diasfecha)
	{
		$this->diasfecha = $diasfecha;

		return $this;
	}

	/**
	 * Get the value of diasuser
	 */
	public function getDiasuser()
	{
		return $this->diasuser;
	}

	/**
	 * Set the value of diasuser
	 *
	 * @return  self
	 */
	public function setDiasuser($diasuser)
	{
		$this->diasuser = $diasuser;

		return $this;
	}
}
