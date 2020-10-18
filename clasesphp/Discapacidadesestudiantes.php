<?php

namespace Clasesphp;

class Discapacidadesestudiantes
{
	private $discapacidadesestudiantesid;
	private $carnetConadisId;
	private $fkEstudiantesNumeroIdentificacion;
	private $fkTipoDiscapacidadTipoDiscapacidadId;
	private $porcentajeDiscapacidad;
	private $discapacidadestperiodo;
	private $discapacidadesestudiantesOculto;
	private $discapacidadesestudiantesAccion;
	private $discapacidadesestudiantesfecha;
	private $discapacidadesestudiantesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of discapacidadesestudiantesid
	 */
	public function getDiscapacidadesestudiantesid()
	{
		return $this->discapacidadesestudiantesid;
	}

	/**
	 * Set the value of discapacidadesestudiantesid
	 *
	 * @return  self
	 */
	public function setDiscapacidadesestudiantesid($discapacidadesestudiantesid)
	{
		$this->discapacidadesestudiantesid = $discapacidadesestudiantesid;

		return $this;
	}

	/**
	 * Get the value of carnetConadisId
	 */
	public function getCarnetConadisId()
	{
		return $this->carnetConadisId;
	}

	/**
	 * Set the value of carnetConadisId
	 *
	 * @return  self
	 */
	public function setCarnetConadisId($carnetConadisId)
	{
		$this->carnetConadisId = $carnetConadisId;

		return $this;
	}

	/**
	 * Get the value of fkEstudiantesNumeroIdentificacion
	 */
	public function getFkEstudiantesNumeroIdentificacion()
	{
		return $this->fkEstudiantesNumeroIdentificacion;
	}

	/**
	 * Set the value of fkEstudiantesNumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setFkEstudiantesNumeroIdentificacion($fkEstudiantesNumeroIdentificacion)
	{
		$this->fkEstudiantesNumeroIdentificacion = $fkEstudiantesNumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of fkTipoDiscapacidadTipoDiscapacidadId
	 */
	public function getFkTipoDiscapacidadTipoDiscapacidadId()
	{
		return $this->fkTipoDiscapacidadTipoDiscapacidadId;
	}

	/**
	 * Set the value of fkTipoDiscapacidadTipoDiscapacidadId
	 *
	 * @return  self
	 */
	public function setFkTipoDiscapacidadTipoDiscapacidadId($fkTipoDiscapacidadTipoDiscapacidadId)
	{
		$this->fkTipoDiscapacidadTipoDiscapacidadId = $fkTipoDiscapacidadTipoDiscapacidadId;

		return $this;
	}

	/**
	 * Get the value of porcentajeDiscapacidad
	 */
	public function getPorcentajeDiscapacidad()
	{
		return $this->porcentajeDiscapacidad;
	}

	/**
	 * Set the value of porcentajeDiscapacidad
	 *
	 * @return  self
	 */
	public function setPorcentajeDiscapacidad($porcentajeDiscapacidad)
	{
		$this->porcentajeDiscapacidad = $porcentajeDiscapacidad;

		return $this;
	}

	/**
	 * Get the value of discapacidadestperiodo
	 */
	public function getDiscapacidadestperiodo()
	{
		return $this->discapacidadestperiodo;
	}

	/**
	 * Set the value of discapacidadestperiodo
	 *
	 * @return  self
	 */
	public function setDiscapacidadestperiodo($discapacidadestperiodo)
	{
		$this->discapacidadestperiodo = $discapacidadestperiodo;

		return $this;
	}

	/**
	 * Get the value of discapacidadesestudiantesOculto
	 */
	public function getDiscapacidadesestudiantesOculto()
	{
		return $this->discapacidadesestudiantesOculto;
	}

	/**
	 * Set the value of discapacidadesestudiantesOculto
	 *
	 * @return  self
	 */
	public function setDiscapacidadesestudiantesOculto($discapacidadesestudiantesOculto)
	{
		$this->discapacidadesestudiantesOculto = $discapacidadesestudiantesOculto;

		return $this;
	}

	/**
	 * Get the value of discapacidadesestudiantesAccion
	 */
	public function getDiscapacidadesestudiantesAccion()
	{
		return $this->discapacidadesestudiantesAccion;
	}

	/**
	 * Set the value of discapacidadesestudiantesAccion
	 *
	 * @return  self
	 */
	public function setDiscapacidadesestudiantesAccion($discapacidadesestudiantesAccion)
	{
		$this->discapacidadesestudiantesAccion = $discapacidadesestudiantesAccion;

		return $this;
	}

	/**
	 * Get the value of discapacidadesestudiantesfecha
	 */
	public function getDiscapacidadesestudiantesfecha()
	{
		return $this->discapacidadesestudiantesfecha;
	}

	/**
	 * Set the value of discapacidadesestudiantesfecha
	 *
	 * @return  self
	 */
	public function setDiscapacidadesestudiantesfecha($discapacidadesestudiantesfecha)
	{
		$this->discapacidadesestudiantesfecha = $discapacidadesestudiantesfecha;

		return $this;
	}

	/**
	 * Get the value of discapacidadesestudiantesuser
	 */
	public function getDiscapacidadesestudiantesuser()
	{
		return $this->discapacidadesestudiantesuser;
	}

	/**
	 * Set the value of discapacidadesestudiantesuser
	 *
	 * @return  self
	 */
	public function setDiscapacidadesestudiantesuser($discapacidadesestudiantesuser)
	{
		$this->discapacidadesestudiantesuser = $discapacidadesestudiantesuser;

		return $this;
	}
	public function __toString()
	{
		return "discapacidadesestudiantesid{" . $this->discapacidadesestudiantesid . "}carnetConadisId{" .
			$this->carnetConadisId . "}fkEstudiantesNumeroIdentificacion{" .
			$this->fkEstudiantesNumeroIdentificacion . "}fkTipoDiscapacidadTipoDiscapacidadId{" .
			$this->fkTipoDiscapacidadTipoDiscapacidadId . "}porcentajeDiscapacidad{" .
			$this->porcentajeDiscapacidad . "}discapacidadestperiodo{" .
			$this->discapacidadestperiodo . "}";
	}
}
