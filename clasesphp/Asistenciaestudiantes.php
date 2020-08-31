<?php

namespace Clasesphp;

class Asistenciaestudiantes
{
	private $asistenciaEstudiantesId;
	private $asistenciaestudiantescodigo;
	private $fecha;
	private $matriculas_matriculasId;
	private $fktipoAsistenciaEstudiantesId;
	private $fkdistributivocursoasignaturaid;
	private $asistenciaestudiantesOculto;
	private $asistenciaestudiantesAccion;
	private $asistenciaestudiantesfecha;
	private $asistenciaestudiantesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of asistenciaEstudiantesId
	 */
	public function getAsistenciaEstudiantesId()
	{
		return $this->asistenciaEstudiantesId;
	}

	/**
	 * Set the value of asistenciaEstudiantesId
	 *
	 * @return  self
	 */
	public function setAsistenciaEstudiantesId($asistenciaEstudiantesId)
	{
		$this->asistenciaEstudiantesId = $asistenciaEstudiantesId;

		return $this;
	}

	/**
	 * Get the value of asistenciaestudiantescodigo
	 */
	public function getAsistenciaestudiantescodigo()
	{
		return $this->asistenciaestudiantescodigo;
	}

	/**
	 * Set the value of asistenciaestudiantescodigo
	 *
	 * @return  self
	 */
	public function setAsistenciaestudiantescodigo($asistenciaestudiantescodigo)
	{
		$this->asistenciaestudiantescodigo = $asistenciaestudiantescodigo;

		return $this;
	}

	/**
	 * Get the value of fecha
	 */
	public function getFecha()
	{
		return $this->fecha;
	}

	/**
	 * Set the value of fecha
	 *
	 * @return  self
	 */
	public function setFecha($fecha)
	{
		$this->fecha = $fecha;

		return $this;
	}

	/**
	 * Get the value of matriculas_matriculasId
	 */
	public function getMatriculas_matriculasId()
	{
		return $this->matriculas_matriculasId;
	}

	/**
	 * Set the value of matriculas_matriculasId
	 *
	 * @return  self
	 */
	public function setMatriculas_matriculasId($matriculas_matriculasId)
	{
		$this->matriculas_matriculasId = $matriculas_matriculasId;

		return $this;
	}

	/**
	 * Get the value of fktipoAsistenciaEstudiantesId
	 */
	public function getFktipoAsistenciaEstudiantesId()
	{
		return $this->fktipoAsistenciaEstudiantesId;
	}

	/**
	 * Set the value of fktipoAsistenciaEstudiantesId
	 *
	 * @return  self
	 */
	public function setFktipoAsistenciaEstudiantesId($fktipoAsistenciaEstudiantesId)
	{
		$this->fktipoAsistenciaEstudiantesId = $fktipoAsistenciaEstudiantesId;

		return $this;
	}

	/**
	 * Get the value of fkdistributivocursoasignaturaid
	 */
	public function getFkdistributivocursoasignaturaid()
	{
		return $this->fkdistributivocursoasignaturaid;
	}

	/**
	 * Set the value of fkdistributivocursoasignaturaid
	 *
	 * @return  self
	 */
	public function setFkdistributivocursoasignaturaid($fkdistributivocursoasignaturaid)
	{
		$this->fkdistributivocursoasignaturaid = $fkdistributivocursoasignaturaid;

		return $this;
	}

	/**
	 * Get the value of asistenciaestudiantesOculto
	 */
	public function getAsistenciaestudiantesOculto()
	{
		return $this->asistenciaestudiantesOculto;
	}

	/**
	 * Set the value of asistenciaestudiantesOculto
	 *
	 * @return  self
	 */
	public function setAsistenciaestudiantesOculto($asistenciaestudiantesOculto)
	{
		$this->asistenciaestudiantesOculto = $asistenciaestudiantesOculto;

		return $this;
	}

	/**
	 * Get the value of asistenciaestudiantesAccion
	 */
	public function getAsistenciaestudiantesAccion()
	{
		return $this->asistenciaestudiantesAccion;
	}

	/**
	 * Set the value of asistenciaestudiantesAccion
	 *
	 * @return  self
	 */
	public function setAsistenciaestudiantesAccion($asistenciaestudiantesAccion)
	{
		$this->asistenciaestudiantesAccion = $asistenciaestudiantesAccion;

		return $this;
	}

	/**
	 * Get the value of asistenciaestudiantesfecha
	 */
	public function getAsistenciaestudiantesfecha()
	{
		return $this->asistenciaestudiantesfecha;
	}

	/**
	 * Set the value of asistenciaestudiantesfecha
	 *
	 * @return  self
	 */
	public function setAsistenciaestudiantesfecha($asistenciaestudiantesfecha)
	{
		$this->asistenciaestudiantesfecha = $asistenciaestudiantesfecha;

		return $this;
	}

	/**
	 * Get the value of asistenciaestudiantesuser
	 */
	public function getAsistenciaestudiantesuser()
	{
		return $this->asistenciaestudiantesuser;
	}

	/**
	 * Set the value of asistenciaestudiantesuser
	 *
	 * @return  self
	 */
	public function setAsistenciaestudiantesuser($asistenciaestudiantesuser)
	{
		$this->asistenciaestudiantesuser = $asistenciaestudiantesuser;

		return $this;
	}
}
