<?php

namespace Clasesphp;

class Horas
{
	private $idHoras;
	private $nHora;
	private $horaInicio;
	private $horaFin;
	private $horasOculto;
	private $horasAccion;
	private $horasfecha;
	private $horasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idHoras
	 */
	public function getIdHoras()
	{
		return $this->idHoras;
	}

	/**
	 * Set the value of idHoras
	 *
	 * @return  self
	 */
	public function setIdHoras($idHoras)
	{
		$this->idHoras = $idHoras;

		return $this;
	}

	/**
	 * Get the value of nHora
	 */
	public function getNHora()
	{
		return $this->nHora;
	}

	/**
	 * Set the value of nHora
	 *
	 * @return  self
	 */
	public function setNHora($nHora)
	{
		$this->nHora = $nHora;

		return $this;
	}

	/**
	 * Get the value of horaInicio
	 */
	public function getHoraInicio()
	{
		return $this->horaInicio;
	}

	/**
	 * Set the value of horaInicio
	 *
	 * @return  self
	 */
	public function setHoraInicio($horaInicio)
	{
		$this->horaInicio = $horaInicio;

		return $this;
	}

	/**
	 * Get the value of horaFin
	 */
	public function getHoraFin()
	{
		return $this->horaFin;
	}

	/**
	 * Set the value of horaFin
	 *
	 * @return  self
	 */
	public function setHoraFin($horaFin)
	{
		$this->horaFin = $horaFin;

		return $this;
	}

	/**
	 * Get the value of horasOculto
	 */
	public function getHorasOculto()
	{
		return $this->horasOculto;
	}

	/**
	 * Set the value of horasOculto
	 *
	 * @return  self
	 */
	public function setHorasOculto($horasOculto)
	{
		$this->horasOculto = $horasOculto;

		return $this;
	}

	/**
	 * Get the value of horasAccion
	 */
	public function getHorasAccion()
	{
		return $this->horasAccion;
	}

	/**
	 * Set the value of horasAccion
	 *
	 * @return  self
	 */
	public function setHorasAccion($horasAccion)
	{
		$this->horasAccion = $horasAccion;

		return $this;
	}

	/**
	 * Get the value of horasfecha
	 */
	public function getHorasfecha()
	{
		return $this->horasfecha;
	}

	/**
	 * Set the value of horasfecha
	 *
	 * @return  self
	 */
	public function setHorasfecha($horasfecha)
	{
		$this->horasfecha = $horasfecha;

		return $this;
	}

	/**
	 * Get the value of horasuser
	 */
	public function getHorasuser()
	{
		return $this->horasuser;
	}

	/**
	 * Set the value of horasuser
	 *
	 * @return  self
	 */
	public function setHorasuser($horasuser)
	{
		$this->horasuser = $horasuser;

		return $this;
	}
}
