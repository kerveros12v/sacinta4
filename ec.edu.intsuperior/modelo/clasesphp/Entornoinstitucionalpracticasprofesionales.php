<?php

namespace Clasesphp;

class Entornoinstitucionalpracticasprofesionales
{
	private $eIPPid;
	private $eipfcodigo;
	private $entornoInstitucional;
	private $eipfOculto;
	private $eipfAccion;
	private $eipffecha;
	private $eipfuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of eIPPid
	 */
	public function getEIPPid()
	{
		return $this->eIPPid;
	}

	/**
	 * Set the value of eIPPid
	 *
	 * @return  self
	 */
	public function setEIPPid($eIPPid)
	{
		$this->eIPPid = $eIPPid;

		return $this;
	}

	/**
	 * Get the value of eipfcodigo
	 */
	public function getEipfcodigo()
	{
		return $this->eipfcodigo;
	}

	/**
	 * Set the value of eipfcodigo
	 *
	 * @return  self
	 */
	public function setEipfcodigo($eipfcodigo)
	{
		$this->eipfcodigo = $eipfcodigo;

		return $this;
	}

	/**
	 * Get the value of entornoInstitucional
	 */
	public function getEntornoInstitucional()
	{
		return $this->entornoInstitucional;
	}

	/**
	 * Set the value of entornoInstitucional
	 *
	 * @return  self
	 */
	public function setEntornoInstitucional($entornoInstitucional)
	{
		$this->entornoInstitucional = $entornoInstitucional;

		return $this;
	}

	/**
	 * Get the value of eipfOculto
	 */
	public function getEipfOculto()
	{
		return $this->eipfOculto;
	}

	/**
	 * Set the value of eipfOculto
	 *
	 * @return  self
	 */
	public function setEipfOculto($eipfOculto)
	{
		$this->eipfOculto = $eipfOculto;

		return $this;
	}

	/**
	 * Get the value of eipfAccion
	 */
	public function getEipfAccion()
	{
		return $this->eipfAccion;
	}

	/**
	 * Set the value of eipfAccion
	 *
	 * @return  self
	 */
	public function setEipfAccion($eipfAccion)
	{
		$this->eipfAccion = $eipfAccion;

		return $this;
	}

	/**
	 * Get the value of eipffecha
	 */
	public function getEipffecha()
	{
		return $this->eipffecha;
	}

	/**
	 * Set the value of eipffecha
	 *
	 * @return  self
	 */
	public function setEipffecha($eipffecha)
	{
		$this->eipffecha = $eipffecha;

		return $this;
	}

	/**
	 * Get the value of eipfuser
	 */
	public function getEipfuser()
	{
		return $this->eipfuser;
	}

	/**
	 * Set the value of eipfuser
	 *
	 * @return  self
	 */
	public function setEipfuser($eipfuser)
	{
		$this->eipfuser = $eipfuser;

		return $this;
	}
}
