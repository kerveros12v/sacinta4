<?php

namespace Clasesphp;

class Proyectosinvestigacion
{
	private $proyectosInvestigacionId;
	private $piTema;
	private $piOculto;
	private $piAccion;
	private $pifecha;
	private $piuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of proyectosInvestigacionId
	 */
	public function getProyectosInvestigacionId()
	{
		return $this->proyectosInvestigacionId;
	}

	/**
	 * Set the value of proyectosInvestigacionId
	 *
	 * @return  self
	 */
	public function setProyectosInvestigacionId($proyectosInvestigacionId)
	{
		$this->proyectosInvestigacionId = $proyectosInvestigacionId;

		return $this;
	}

	/**
	 * Get the value of piTema
	 */
	public function getPiTema()
	{
		return $this->piTema;
	}

	/**
	 * Set the value of piTema
	 *
	 * @return  self
	 */
	public function setPiTema($piTema)
	{
		$this->piTema = $piTema;

		return $this;
	}

	/**
	 * Get the value of piOculto
	 */
	public function getPiOculto()
	{
		return $this->piOculto;
	}

	/**
	 * Set the value of piOculto
	 *
	 * @return  self
	 */
	public function setPiOculto($piOculto)
	{
		$this->piOculto = $piOculto;

		return $this;
	}

	/**
	 * Get the value of piAccion
	 */
	public function getPiAccion()
	{
		return $this->piAccion;
	}

	/**
	 * Set the value of piAccion
	 *
	 * @return  self
	 */
	public function setPiAccion($piAccion)
	{
		$this->piAccion = $piAccion;

		return $this;
	}

	/**
	 * Get the value of pifecha
	 */
	public function getPifecha()
	{
		return $this->pifecha;
	}

	/**
	 * Set the value of pifecha
	 *
	 * @return  self
	 */
	public function setPifecha($pifecha)
	{
		$this->pifecha = $pifecha;

		return $this;
	}

	/**
	 * Get the value of piuser
	 */
	public function getPiuser()
	{
		return $this->piuser;
	}

	/**
	 * Set the value of piuser
	 *
	 * @return  self
	 */
	public function setPiuser($piuser)
	{
		$this->piuser = $piuser;

		return $this;
	}
}
