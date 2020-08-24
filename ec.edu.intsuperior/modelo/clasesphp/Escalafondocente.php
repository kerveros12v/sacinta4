<?php

namespace Clasesphp;

class Escalafondocente
{
	private $escalafonDocenteId;
	private $escalafondocentecodigo;
	private $escalafonDocente;
	private $escalafondocenteOculto;
	private $escalafondocenteAccion;
	private $escalafondocentefecha;
	private $escalafondocenteuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of escalafonDocenteId
	 */
	public function getEscalafonDocenteId()
	{
		return $this->escalafonDocenteId;
	}

	/**
	 * Set the value of escalafonDocenteId
	 *
	 * @return  self
	 */
	public function setEscalafonDocenteId($escalafonDocenteId)
	{
		$this->escalafonDocenteId = $escalafonDocenteId;

		return $this;
	}

	/**
	 * Get the value of escalafondocentecodigo
	 */
	public function getEscalafondocentecodigo()
	{
		return $this->escalafondocentecodigo;
	}

	/**
	 * Set the value of escalafondocentecodigo
	 *
	 * @return  self
	 */
	public function setEscalafondocentecodigo($escalafondocentecodigo)
	{
		$this->escalafondocentecodigo = $escalafondocentecodigo;

		return $this;
	}

	/**
	 * Get the value of escalafonDocente
	 */
	public function getEscalafonDocente()
	{
		return $this->escalafonDocente;
	}

	/**
	 * Set the value of escalafonDocente
	 *
	 * @return  self
	 */
	public function setEscalafonDocente($escalafonDocente)
	{
		$this->escalafonDocente = $escalafonDocente;

		return $this;
	}

	/**
	 * Get the value of escalafondocenteOculto
	 */
	public function getEscalafondocenteOculto()
	{
		return $this->escalafondocenteOculto;
	}

	/**
	 * Set the value of escalafondocenteOculto
	 *
	 * @return  self
	 */
	public function setEscalafondocenteOculto($escalafondocenteOculto)
	{
		$this->escalafondocenteOculto = $escalafondocenteOculto;

		return $this;
	}

	/**
	 * Get the value of escalafondocenteAccion
	 */
	public function getEscalafondocenteAccion()
	{
		return $this->escalafondocenteAccion;
	}

	/**
	 * Set the value of escalafondocenteAccion
	 *
	 * @return  self
	 */
	public function setEscalafondocenteAccion($escalafondocenteAccion)
	{
		$this->escalafondocenteAccion = $escalafondocenteAccion;

		return $this;
	}

	/**
	 * Get the value of escalafondocentefecha
	 */
	public function getEscalafondocentefecha()
	{
		return $this->escalafondocentefecha;
	}

	/**
	 * Set the value of escalafondocentefecha
	 *
	 * @return  self
	 */
	public function setEscalafondocentefecha($escalafondocentefecha)
	{
		$this->escalafondocentefecha = $escalafondocentefecha;

		return $this;
	}

	/**
	 * Get the value of escalafondocenteuser
	 */
	public function getEscalafondocenteuser()
	{
		return $this->escalafondocenteuser;
	}

	/**
	 * Set the value of escalafondocenteuser
	 *
	 * @return  self
	 */
	public function setEscalafondocenteuser($escalafondocenteuser)
	{
		$this->escalafondocenteuser = $escalafondocenteuser;

		return $this;
	}
}
