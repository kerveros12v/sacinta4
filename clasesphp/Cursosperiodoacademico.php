<?php

namespace Clasesphp;

class Cursosperiodoacademico
{
	private $periodoAcademicoCursoId;
	private $cursosperiodoacademicocodigo;
	private $fkperiodoacademicoId;
	private $fkidCursos;
	private $cursosperiodoacademicoOculto;
	private $cursosperiodoacademicoAccion;
	private $cursosperiodoacademicofecha;
	private $cursosperiodoacademicouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of periodoAcademicoCursoId
	 */
	public function getPeriodoAcademicoCursoId()
	{
		return $this->periodoAcademicoCursoId;
	}

	/**
	 * Set the value of periodoAcademicoCursoId
	 *
	 * @return  self
	 */
	public function setPeriodoAcademicoCursoId($periodoAcademicoCursoId)
	{
		$this->periodoAcademicoCursoId = $periodoAcademicoCursoId;

		return $this;
	}

	/**
	 * Get the value of cursosperiodoacademicocodigo
	 */
	public function getCursosperiodoacademicocodigo()
	{
		return $this->cursosperiodoacademicocodigo;
	}

	/**
	 * Set the value of cursosperiodoacademicocodigo
	 *
	 * @return  self
	 */
	public function setCursosperiodoacademicocodigo($cursosperiodoacademicocodigo)
	{
		$this->cursosperiodoacademicocodigo = $cursosperiodoacademicocodigo;

		return $this;
	}

	/**
	 * Get the value of fkperiodoacademicoId
	 */
	public function getFkperiodoacademicoId()
	{
		return $this->fkperiodoacademicoId;
	}

	/**
	 * Set the value of fkperiodoacademicoId
	 *
	 * @return  self
	 */
	public function setFkperiodoacademicoId($fkperiodoacademicoId)
	{
		$this->fkperiodoacademicoId = $fkperiodoacademicoId;

		return $this;
	}

	/**
	 * Get the value of fkidCursos
	 */
	public function getFkidCursos()
	{
		return $this->fkidCursos;
	}

	/**
	 * Set the value of fkidCursos
	 *
	 * @return  self
	 */
	public function setFkidCursos($fkidCursos)
	{
		$this->fkidCursos = $fkidCursos;

		return $this;
	}

	/**
	 * Get the value of cursosperiodoacademicoOculto
	 */
	public function getCursosperiodoacademicoOculto()
	{
		return $this->cursosperiodoacademicoOculto;
	}

	/**
	 * Set the value of cursosperiodoacademicoOculto
	 *
	 * @return  self
	 */
	public function setCursosperiodoacademicoOculto($cursosperiodoacademicoOculto)
	{
		$this->cursosperiodoacademicoOculto = $cursosperiodoacademicoOculto;

		return $this;
	}

	/**
	 * Get the value of cursosperiodoacademicoAccion
	 */
	public function getCursosperiodoacademicoAccion()
	{
		return $this->cursosperiodoacademicoAccion;
	}

	/**
	 * Set the value of cursosperiodoacademicoAccion
	 *
	 * @return  self
	 */
	public function setCursosperiodoacademicoAccion($cursosperiodoacademicoAccion)
	{
		$this->cursosperiodoacademicoAccion = $cursosperiodoacademicoAccion;

		return $this;
	}

	/**
	 * Get the value of cursosperiodoacademicofecha
	 */
	public function getCursosperiodoacademicofecha()
	{
		return $this->cursosperiodoacademicofecha;
	}

	/**
	 * Set the value of cursosperiodoacademicofecha
	 *
	 * @return  self
	 */
	public function setCursosperiodoacademicofecha($cursosperiodoacademicofecha)
	{
		$this->cursosperiodoacademicofecha = $cursosperiodoacademicofecha;

		return $this;
	}

	/**
	 * Get the value of cursosperiodoacademicouser
	 */
	public function getCursosperiodoacademicouser()
	{
		return $this->cursosperiodoacademicouser;
	}

	/**
	 * Set the value of cursosperiodoacademicouser
	 *
	 * @return  self
	 */
	public function setCursosperiodoacademicouser($cursosperiodoacademicouser)
	{
		$this->cursosperiodoacademicouser = $cursosperiodoacademicouser;

		return $this;
	}
}
