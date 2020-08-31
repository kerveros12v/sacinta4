<?php

namespace Clasesphp;

class Jornadasacademicas
{
	private $jornadaAcademicaId;
	private $jornadaAcademicaCodigo;
	private $jornadaAcademica;
	private $jornadasacademicasOculto;
	private $jornadasacademicasAccion;
	private $jornadasacademicasfecha;
	private $jornadasacademicasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of jornadaAcademicaId
	 */
	public function getJornadaAcademicaId()
	{
		return $this->jornadaAcademicaId;
	}

	/**
	 * Set the value of jornadaAcademicaId
	 *
	 * @return  self
	 */
	public function setJornadaAcademicaId($jornadaAcademicaId)
	{
		$this->jornadaAcademicaId = $jornadaAcademicaId;

		return $this;
	}

	/**
	 * Get the value of jornadaAcademicaCodigo
	 */
	public function getJornadaAcademicaCodigo()
	{
		return $this->jornadaAcademicaCodigo;
	}

	/**
	 * Set the value of jornadaAcademicaCodigo
	 *
	 * @return  self
	 */
	public function setJornadaAcademicaCodigo($jornadaAcademicaCodigo)
	{
		$this->jornadaAcademicaCodigo = $jornadaAcademicaCodigo;

		return $this;
	}

	/**
	 * Get the value of jornadaAcademica
	 */
	public function getJornadaAcademica()
	{
		return $this->jornadaAcademica;
	}

	/**
	 * Set the value of jornadaAcademica
	 *
	 * @return  self
	 */
	public function setJornadaAcademica($jornadaAcademica)
	{
		$this->jornadaAcademica = $jornadaAcademica;

		return $this;
	}

	/**
	 * Get the value of jornadasacademicasOculto
	 */
	public function getJornadasacademicasOculto()
	{
		return $this->jornadasacademicasOculto;
	}

	/**
	 * Set the value of jornadasacademicasOculto
	 *
	 * @return  self
	 */
	public function setJornadasacademicasOculto($jornadasacademicasOculto)
	{
		$this->jornadasacademicasOculto = $jornadasacademicasOculto;

		return $this;
	}

	/**
	 * Get the value of jornadasacademicasAccion
	 */
	public function getJornadasacademicasAccion()
	{
		return $this->jornadasacademicasAccion;
	}

	/**
	 * Set the value of jornadasacademicasAccion
	 *
	 * @return  self
	 */
	public function setJornadasacademicasAccion($jornadasacademicasAccion)
	{
		$this->jornadasacademicasAccion = $jornadasacademicasAccion;

		return $this;
	}

	/**
	 * Get the value of jornadasacademicasfecha
	 */
	public function getJornadasacademicasfecha()
	{
		return $this->jornadasacademicasfecha;
	}

	/**
	 * Set the value of jornadasacademicasfecha
	 *
	 * @return  self
	 */
	public function setJornadasacademicasfecha($jornadasacademicasfecha)
	{
		$this->jornadasacademicasfecha = $jornadasacademicasfecha;

		return $this;
	}

	/**
	 * Get the value of jornadasacademicasuser
	 */
	public function getJornadasacademicasuser()
	{
		return $this->jornadasacademicasuser;
	}

	/**
	 * Set the value of jornadasacademicasuser
	 *
	 * @return  self
	 */
	public function setJornadasacademicasuser($jornadasacademicasuser)
	{
		$this->jornadasacademicasuser = $jornadasacademicasuser;

		return $this;
	}
}
