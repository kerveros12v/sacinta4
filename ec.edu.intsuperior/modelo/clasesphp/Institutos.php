<?php

namespace Clasesphp;

class Institutos
{
	private $institutosId;
	private $institutoscodigo;
	private $institutoNombre;
	private $cantonId;
	private $fkidSostenimiento;
	private $institutosOculto;
	private $institutosAccion;
	private $institutosfecha;
	private $institutosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}



	/**
	 * Get the value of institutoscodigo
	 */
	public function getInstitutoscodigo()
	{
		return $this->institutoscodigo;
	}

	/**
	 * Set the value of institutoscodigo
	 *
	 * @return  self
	 */
	public function setInstitutoscodigo($institutoscodigo)
	{
		$this->institutoscodigo = $institutoscodigo;

		return $this;
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
	 * Get the value of fkidSostenimiento
	 */
	public function getFkidSostenimiento()
	{
		return $this->fkidSostenimiento;
	}

	/**
	 * Set the value of fkidSostenimiento
	 *
	 * @return  self
	 */
	public function setFkidSostenimiento($fkidSostenimiento)
	{
		$this->fkidSostenimiento = $fkidSostenimiento;

		return $this;
	}

	/**
	 * Get the value of institutosOculto
	 */
	public function getInstitutosOculto()
	{
		return $this->institutosOculto;
	}

	/**
	 * Set the value of institutosOculto
	 *
	 * @return  self
	 */
	public function setInstitutosOculto($institutosOculto)
	{
		$this->institutosOculto = $institutosOculto;

		return $this;
	}

	/**
	 * Get the value of institutosAccion
	 */
	public function getInstitutosAccion()
	{
		return $this->institutosAccion;
	}

	/**
	 * Set the value of institutosAccion
	 *
	 * @return  self
	 */
	public function setInstitutosAccion($institutosAccion)
	{
		$this->institutosAccion = $institutosAccion;

		return $this;
	}

	/**
	 * Get the value of institutosfecha
	 */
	public function getInstitutosfecha()
	{
		return $this->institutosfecha;
	}

	/**
	 * Set the value of institutosfecha
	 *
	 * @return  self
	 */
	public function setInstitutosfecha($institutosfecha)
	{
		$this->institutosfecha = $institutosfecha;

		return $this;
	}

	/**
	 * Get the value of institutosuser
	 */
	public function getInstitutosuser()
	{
		return $this->institutosuser;
	}

	/**
	 * Set the value of institutosuser
	 *
	 * @return  self
	 */
	public function setInstitutosuser($institutosuser)
	{
		$this->institutosuser = $institutosuser;

		return $this;
	}

	/**
	 * Get the value of institutosId
	 */
	public function getInstitutosId()
	{
		return $this->institutosId;
	}

	/**
	 * Set the value of institutosId
	 *
	 * @return  self
	 */
	public function setInstitutosId($institutosId)
	{
		$this->institutosId = $institutosId;

		return $this;
	}

	/**
	 * Get the value of institutoNombre
	 */
	public function getInstitutoNombre()
	{
		return $this->institutoNombre;
	}

	/**
	 * Set the value of institutoNombre
	 *
	 * @return  self
	 */
	public function setInstitutoNombre($institutoNombre)
	{
		$this->institutoNombre = $institutoNombre;

		return $this;
	}
}
