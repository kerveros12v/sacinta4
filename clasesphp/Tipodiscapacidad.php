<?php

namespace Clasesphp;

class Tipodiscapacidad
{
	private $tipoDiscapacidadid;
	private $tdcodigo;
	private $tipoDiscapacidad;
	private $tipodiscapacidadbool;
	private $tdOculto;
	private $tdAccion;
	private $tdfecha;
	private $tduser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoDiscapacidadid
	 */
	public function getTipoDiscapacidadid()
	{
		return $this->tipoDiscapacidadid;
	}

	/**
	 * Set the value of tipoDiscapacidadid
	 *
	 * @return  self
	 */
	public function setTipoDiscapacidadid($tipoDiscapacidadid)
	{
		$this->tipoDiscapacidadid = $tipoDiscapacidadid;

		return $this;
	}

	/**
	 * Get the value of tdcodigo
	 */
	public function getTdcodigo()
	{
		return $this->tdcodigo;
	}

	/**
	 * Set the value of tdcodigo
	 *
	 * @return  self
	 */
	public function setTdcodigo($tdcodigo)
	{
		$this->tdcodigo = $tdcodigo;

		return $this;
	}

	/**
	 * Get the value of tipoDiscapacidad
	 */
	public function getTipoDiscapacidad()
	{
		return $this->tipoDiscapacidad;
	}

	/**
	 * Set the value of tipoDiscapacidad
	 *
	 * @return  self
	 */
	public function setTipoDiscapacidad($tipoDiscapacidad)
	{
		$this->tipoDiscapacidad = $tipoDiscapacidad;

		return $this;
	}

	/**
	 * Get the value of tipodiscapacidadbool
	 */
	public function getTipodiscapacidadbool()
	{
		return $this->tipodiscapacidadbool;
	}

	/**
	 * Set the value of tipodiscapacidadbool
	 *
	 * @return  self
	 */
	public function setTipodiscapacidadbool($tipodiscapacidadbool)
	{
		$this->tipodiscapacidadbool = $tipodiscapacidadbool;

		return $this;
	}

	/**
	 * Get the value of tdOculto
	 */
	public function getTdOculto()
	{
		return $this->tdOculto;
	}

	/**
	 * Set the value of tdOculto
	 *
	 * @return  self
	 */
	public function setTdOculto($tdOculto)
	{
		$this->tdOculto = $tdOculto;

		return $this;
	}

	/**
	 * Get the value of tdAccion
	 */
	public function getTdAccion()
	{
		return $this->tdAccion;
	}

	/**
	 * Set the value of tdAccion
	 *
	 * @return  self
	 */
	public function setTdAccion($tdAccion)
	{
		$this->tdAccion = $tdAccion;

		return $this;
	}

	/**
	 * Get the value of tdfecha
	 */
	public function getTdfecha()
	{
		return $this->tdfecha;
	}

	/**
	 * Set the value of tdfecha
	 *
	 * @return  self
	 */
	public function setTdfecha($tdfecha)
	{
		$this->tdfecha = $tdfecha;

		return $this;
	}

	/**
	 * Get the value of tduser
	 */
	public function getTduser()
	{
		return $this->tduser;
	}

	/**
	 * Set the value of tduser
	 *
	 * @return  self
	 */
	public function setTduser($tduser)
	{
		$this->tduser = $tduser;

		return $this;
	}
	public function formatoJSON()
	{
		$myarray = array(
			'tipoDiscapacidadid' => $this->tipoDiscapacidadid,
			'tipoDiscapacidad' => $this->tipoDiscapacidad
		);
		return json_encode($myarray);
	}
	public function formatoArray()
	{
		$myarray = array(
			'tipoDiscapacidadid' => $this->tipoDiscapacidadid,
			'tipoDiscapacidad' => $this->tipoDiscapacidad
		);
		return $myarray;
	}
}
