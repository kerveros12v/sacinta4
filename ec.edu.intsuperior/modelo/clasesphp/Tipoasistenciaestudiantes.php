<?php

namespace Clasesphp;

class Tipoasistenciaestudiantes
{
	private $tipoAsistenciaEstudiantesId;
	private $taeCodigo;
	private $tipoAsistenciaEstudiante;
	private $taeOculto;
	private $taeAccion;
	private $taefecha;
	private $taesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoAsistenciaEstudiantesId
	 */
	public function getTipoAsistenciaEstudiantesId()
	{
		return $this->tipoAsistenciaEstudiantesId;
	}

	/**
	 * Set the value of tipoAsistenciaEstudiantesId
	 *
	 * @return  self
	 */
	public function setTipoAsistenciaEstudiantesId($tipoAsistenciaEstudiantesId)
	{
		$this->tipoAsistenciaEstudiantesId = $tipoAsistenciaEstudiantesId;

		return $this;
	}

	/**
	 * Get the value of taeCodigo
	 */
	public function getTaeCodigo()
	{
		return $this->taeCodigo;
	}

	/**
	 * Set the value of taeCodigo
	 *
	 * @return  self
	 */
	public function setTaeCodigo($taeCodigo)
	{
		$this->taeCodigo = $taeCodigo;

		return $this;
	}

	/**
	 * Get the value of tipoAsistenciaEstudiante
	 */
	public function getTipoAsistenciaEstudiante()
	{
		return $this->tipoAsistenciaEstudiante;
	}

	/**
	 * Set the value of tipoAsistenciaEstudiante
	 *
	 * @return  self
	 */
	public function setTipoAsistenciaEstudiante($tipoAsistenciaEstudiante)
	{
		$this->tipoAsistenciaEstudiante = $tipoAsistenciaEstudiante;

		return $this;
	}

	/**
	 * Get the value of taeOculto
	 */
	public function getTaeOculto()
	{
		return $this->taeOculto;
	}

	/**
	 * Set the value of taeOculto
	 *
	 * @return  self
	 */
	public function setTaeOculto($taeOculto)
	{
		$this->taeOculto = $taeOculto;

		return $this;
	}

	/**
	 * Get the value of taeAccion
	 */
	public function getTaeAccion()
	{
		return $this->taeAccion;
	}

	/**
	 * Set the value of taeAccion
	 *
	 * @return  self
	 */
	public function setTaeAccion($taeAccion)
	{
		$this->taeAccion = $taeAccion;

		return $this;
	}

	/**
	 * Get the value of taefecha
	 */
	public function getTaefecha()
	{
		return $this->taefecha;
	}

	/**
	 * Set the value of taefecha
	 *
	 * @return  self
	 */
	public function setTaefecha($taefecha)
	{
		$this->taefecha = $taefecha;

		return $this;
	}

	/**
	 * Get the value of taesuser
	 */
	public function getTaesuser()
	{
		return $this->taesuser;
	}

	/**
	 * Set the value of taesuser
	 *
	 * @return  self
	 */
	public function setTaesuser($taesuser)
	{
		$this->taesuser = $taesuser;

		return $this;
	}
}
