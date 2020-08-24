<?php

namespace Clasesphp;

class Participaenproyectovinculacionsociedad
{
	private $pappvsid;
	private $participaEnProyectoVinculacionSociedad;
	private $ppvsOculto;
	private $ppvsAccion;
	private $ppvsfecha;
	private $ppvsuser;
	/**
	 * Class constructor.
	 */
	function __construct()
	{
	}

	/**
	 * Get the value of pappvsid
	 */
	public function getPappvsid()
	{
		return $this->pappvsid;
	}

	/**
	 * Set the value of pappvsid
	 *
	 * @return  self
	 */
	public function setPappvsid($pappvsid)
	{
		$this->pappvsid = $pappvsid;

		return $this;
	}

	/**
	 * Get the value of participaEnProyectoVinculacionSociedad
	 */
	public function getParticipaEnProyectoVinculacionSociedad()
	{
		return $this->participaEnProyectoVinculacionSociedad;
	}

	/**
	 * Set the value of participaEnProyectoVinculacionSociedad
	 *
	 * @return  self
	 */
	public function setParticipaEnProyectoVinculacionSociedad($participaEnProyectoVinculacionSociedad)
	{
		$this->participaEnProyectoVinculacionSociedad = $participaEnProyectoVinculacionSociedad;

		return $this;
	}

	/**
	 * Get the value of ppvsOculto
	 */
	public function getPpvsOculto()
	{
		return $this->ppvsOculto;
	}

	/**
	 * Set the value of ppvsOculto
	 *
	 * @return  self
	 */
	public function setPpvsOculto($ppvsOculto)
	{
		$this->ppvsOculto = $ppvsOculto;

		return $this;
	}

	/**
	 * Get the value of ppvsAccion
	 */
	public function getPpvsAccion()
	{
		return $this->ppvsAccion;
	}

	/**
	 * Set the value of ppvsAccion
	 *
	 * @return  self
	 */
	public function setPpvsAccion($ppvsAccion)
	{
		$this->ppvsAccion = $ppvsAccion;

		return $this;
	}

	/**
	 * Get the value of ppvsfecha
	 */
	public function getPpvsfecha()
	{
		return $this->ppvsfecha;
	}

	/**
	 * Set the value of ppvsfecha
	 *
	 * @return  self
	 */
	public function setPpvsfecha($ppvsfecha)
	{
		$this->ppvsfecha = $ppvsfecha;

		return $this;
	}

	/**
	 * Get the value of ppvsuser
	 */
	public function getPpvsuser()
	{
		return $this->ppvsuser;
	}

	/**
	 * Set the value of ppvsuser
	 *
	 * @return  self
	 */
	public function setPpvsuser($ppvsuser)
	{
		$this->ppvsuser = $ppvsuser;

		return $this;
	}
}
