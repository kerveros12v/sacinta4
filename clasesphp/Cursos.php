<?php

namespace Clasesphp;
//idCursos, cursoscodigo, fkcarrerasId, fkparaleloId, fknivelAcademicoQueCursaId, fkjJornadaAcademicaId, cursosOculto, cursosAccion, cursosfecha, cursosuser
class Cursos
{
	private $idCursos;
	private $cursoscodigo;
	private $fkcarrerasId;
	private $fkparaleloId;
	private $fknivelAcademicoQueCursaId;
	private $fkjJornadaAcademicaId;
	private $cursosOculto;
	private $cursosAccion;
	private $cursosfecha;
	private $cursosuser;
	private $fkperiodo;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idCursos
	 */
	public function getIdCursos()
	{
		return $this->idCursos;
	}

	/**
	 * Set the value of idCursos
	 *
	 * @return  self
	 */
	public function setIdCursos($idCursos)
	{
		$this->idCursos = $idCursos;

		return $this;
	}

	/**
	 * Get the value of cursoscodigo
	 */
	public function getCursoscodigo()
	{
		return $this->cursoscodigo;
	}

	/**
	 * Set the value of cursoscodigo
	 *
	 * @return  self
	 */
	public function setCursoscodigo($cursoscodigo)
	{
		$this->cursoscodigo = $cursoscodigo;

		return $this;
	}

	/**
	 * Get the value of fkcarrerasId
	 */
	public function getFkcarrerasId()
	{
		return $this->fkcarrerasId;
	}

	/**
	 * Set the value of fkcarrerasId
	 *
	 * @return  self
	 */
	public function setFkcarrerasId($fkcarrerasId)
	{
		$this->fkcarrerasId = $fkcarrerasId;

		return $this;
	}

	/**
	 * Get the value of fkparaleloId
	 */
	public function getFkparaleloId()
	{
		return $this->fkparaleloId;
	}

	/**
	 * Set the value of fkparaleloId
	 *
	 * @return  self
	 */
	public function setFkparaleloId($fkparaleloId)
	{
		$this->fkparaleloId = $fkparaleloId;

		return $this;
	}

	/**
	 * Get the value of fknivelAcademicoQueCursaId
	 */
	public function getFknivelAcademicoQueCursaId()
	{
		return $this->fknivelAcademicoQueCursaId;
	}

	/**
	 * Set the value of fknivelAcademicoQueCursaId
	 *
	 * @return  self
	 */
	public function setFknivelAcademicoQueCursaId($fknivelAcademicoQueCursaId)
	{
		$this->fknivelAcademicoQueCursaId = $fknivelAcademicoQueCursaId;

		return $this;
	}

	/**
	 * Get the value of fkjJornadaAcademicaId
	 */
	public function getFkjJornadaAcademicaId()
	{
		return $this->fkjJornadaAcademicaId;
	}

	/**
	 * Set the value of fkjJornadaAcademicaId
	 *
	 * @return  self
	 */
	public function setFkjJornadaAcademicaId($fkjJornadaAcademicaId)
	{
		$this->fkjJornadaAcademicaId = $fkjJornadaAcademicaId;

		return $this;
	}

	/**
	 * Get the value of cursosOculto
	 */
	public function getCursosOculto()
	{
		return $this->cursosOculto;
	}

	/**
	 * Set the value of cursosOculto
	 *
	 * @return  self
	 */
	public function setCursosOculto($cursosOculto)
	{
		$this->cursosOculto = $cursosOculto;

		return $this;
	}

	/**
	 * Get the value of cursosAccion
	 */
	public function getCursosAccion()
	{
		return $this->cursosAccion;
	}

	/**
	 * Set the value of cursosAccion
	 *
	 * @return  self
	 */
	public function setCursosAccion($cursosAccion)
	{
		$this->cursosAccion = $cursosAccion;

		return $this;
	}

	/**
	 * Get the value of cursosfecha
	 */
	public function getCursosfecha()
	{
		return $this->cursosfecha;
	}

	/**
	 * Set the value of cursosfecha
	 *
	 * @return  self
	 */
	public function setCursosfecha($cursosfecha)
	{
		$this->cursosfecha = $cursosfecha;

		return $this;
	}

	/**
	 * Get the value of cursosuser
	 */
	public function getCursosuser()
	{
		return $this->cursosuser;
	}

	/**
	 * Set the value of cursosuser
	 *
	 * @return  self
	 */
	public function setCursosuser($cursosuser)
	{
		$this->cursosuser = $cursosuser;

		return $this;
	}

	/**
	 * Get the value of fkperiodo
	 */
	public function getFkperiodo()
	{
		return $this->fkperiodo;
	}

	/**
	 * Set the value of fkperiodo
	 *
	 * @return  self
	 */
	public function setFkperiodo($fkperiodo)
	{
		$this->fkperiodo = $fkperiodo;

		return $this;
	}
}
