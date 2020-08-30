<?php

namespace Clasesphp;

class Tiporetiroestudiante
{
	private $tipoRetiroEstudianteId;
	private $trecodigo;
	private $tipoRetiroEstudiante;
	private $treOculto;
	private $periodoacademicoAccion;
	private $trefecha;
	private $treuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoRetiroEstudianteId
	 */
	public function getTipoRetiroEstudianteId()
	{
		return $this->tipoRetiroEstudianteId;
	}

	/**
	 * Set the value of tipoRetiroEstudianteId
	 *
	 * @return  self
	 */
	public function setTipoRetiroEstudianteId($tipoRetiroEstudianteId)
	{
		$this->tipoRetiroEstudianteId = $tipoRetiroEstudianteId;

		return $this;
	}

	/**
	 * Get the value of trecodigo
	 */
	public function getTrecodigo()
	{
		return $this->trecodigo;
	}

	/**
	 * Set the value of trecodigo
	 *
	 * @return  self
	 */
	public function setTrecodigo($trecodigo)
	{
		$this->trecodigo = $trecodigo;

		return $this;
	}

	/**
	 * Get the value of tipoRetiroEstudiante
	 */
	public function getTipoRetiroEstudiante()
	{
		return $this->tipoRetiroEstudiante;
	}

	/**
	 * Set the value of tipoRetiroEstudiante
	 *
	 * @return  self
	 */
	public function setTipoRetiroEstudiante($tipoRetiroEstudiante)
	{
		$this->tipoRetiroEstudiante = $tipoRetiroEstudiante;

		return $this;
	}

	/**
	 * Get the value of treOculto
	 */
	public function getTreOculto()
	{
		return $this->treOculto;
	}

	/**
	 * Set the value of treOculto
	 *
	 * @return  self
	 */
	public function setTreOculto($treOculto)
	{
		$this->treOculto = $treOculto;

		return $this;
	}

	/**
	 * Get the value of periodoacademicoAccion
	 */
	public function getPeriodoacademicoAccion()
	{
		return $this->periodoacademicoAccion;
	}

	/**
	 * Set the value of periodoacademicoAccion
	 *
	 * @return  self
	 */
	public function setPeriodoacademicoAccion($periodoacademicoAccion)
	{
		$this->periodoacademicoAccion = $periodoacademicoAccion;

		return $this;
	}

	/**
	 * Get the value of trefecha
	 */
	public function getTrefecha()
	{
		return $this->trefecha;
	}

	/**
	 * Set the value of trefecha
	 *
	 * @return  self
	 */
	public function setTrefecha($trefecha)
	{
		$this->trefecha = $trefecha;

		return $this;
	}

	/**
	 * Get the value of treuser
	 */
	public function getTreuser()
	{
		return $this->treuser;
	}

	/**
	 * Set the value of treuser
	 *
	 * @return  self
	 */
	public function setTreuser($treuser)
	{
		$this->treuser = $treuser;

		return $this;
	}
}
