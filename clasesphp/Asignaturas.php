<?php

namespace Clasesphp;

class Asignaturas
{
	private $asignaturasId;
	private $codigoMateria;
	private $materia;
	private $asignaturasOculto;
	private $asignaturasAccion;
	private $asignaturasfecha;
	private $asignaturasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}


	/**
	 * Get the value of AsignaturasId
	 */
	public function getAsignaturasId()
	{
		return $this->asignaturasId;
	}

	/**
	 * Set the value of AsignaturasId
	 *
	 * @return  self
	 */
	public function setAsignaturasId($asignaturasId)
	{
		$this->asignaturasId = $asignaturasId;

		return $this;
	}

	/**
	 * Get the value of codigoMateria
	 */
	public function getCodigoMateria()
	{
		return $this->codigoMateria;
	}

	/**
	 * Set the value of codigoMateria
	 *
	 * @return  self
	 */
	public function setCodigoMateria($codigoMateria)
	{
		$this->codigoMateria = $codigoMateria;

		return $this;
	}

	/**
	 * Get the value of materia
	 */
	public function getMateria()
	{
		return $this->materia;
	}

	/**
	 * Set the value of materia
	 *
	 * @return  self
	 */
	public function setMateria($materia)
	{
		$this->materia = $materia;

		return $this;
	}

	/**
	 * Get the value of asignaturasOculto
	 */
	public function getAsignaturasOculto()
	{
		return $this->asignaturasOculto;
	}

	/**
	 * Set the value of asignaturasOculto
	 *
	 * @return  self
	 */
	public function setAsignaturasOculto($asignaturasOculto)
	{
		$this->asignaturasOculto = $asignaturasOculto;

		return $this;
	}

	/**
	 * Get the value of asignaturasAccion
	 */
	public function getAsignaturasAccion()
	{
		return $this->asignaturasAccion;
	}

	/**
	 * Set the value of asignaturasAccion
	 *
	 * @return  self
	 */
	public function setAsignaturasAccion($asignaturasAccion)
	{
		$this->asignaturasAccion = $asignaturasAccion;

		return $this;
	}

	/**
	 * Get the value of asignaturasfecha
	 */
	public function getAsignaturasfecha()
	{
		return $this->asignaturasfecha;
	}

	/**
	 * Set the value of asignaturasfecha
	 *
	 * @return  self
	 */
	public function setAsignaturasfecha($asignaturasfecha)
	{
		$this->asignaturasfecha = $asignaturasfecha;

		return $this;
	}

	/**
	 * Get the value of asignaturasuser
	 */
	public function getAsignaturasuser()
	{
		return $this->asignaturasuser;
	}

	/**
	 * Set the value of asignaturasuser
	 *
	 * @return  self
	 */
	public function setAsignaturasuser($asignaturasuser)
	{
		$this->asignaturasuser = $asignaturasuser;

		return $this;
	}
}
