<?php

namespace Clasesphp;

class Ingresosestudiante
{
	private $ingresosestudianteId;
	private $ingresosestudiantecodigo;
	private $ingresosestudiante;
	private $ingresosestudianteOculto;
	private $ingresosestudianteAccion;
	private $ingresosestudiantefecha;
	private $ingresosestudianteuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of ingresosestudianteId
	 */
	public function getIngresosestudianteId()
	{
		return $this->ingresosestudianteId;
	}

	/**
	 * Set the value of ingresosestudianteId
	 *
	 * @return  self
	 */
	public function setIngresosestudianteId($ingresosestudianteId)
	{
		$this->ingresosestudianteId = $ingresosestudianteId;

		return $this;
	}

	/**
	 * Get the value of ingresosestudiantecodigo
	 */
	public function getIngresosestudiantecodigo()
	{
		return $this->ingresosestudiantecodigo;
	}

	/**
	 * Set the value of ingresosestudiantecodigo
	 *
	 * @return  self
	 */
	public function setIngresosestudiantecodigo($ingresosestudiantecodigo)
	{
		$this->ingresosestudiantecodigo = $ingresosestudiantecodigo;

		return $this;
	}

	/**
	 * Get the value of ingresosestudiante
	 */
	public function getIngresosestudiante()
	{
		return $this->ingresosestudiante;
	}

	/**
	 * Set the value of ingresosestudiante
	 *
	 * @return  self
	 */
	public function setIngresosestudiante($ingresosestudiante)
	{
		$this->ingresosestudiante = $ingresosestudiante;

		return $this;
	}

	/**
	 * Get the value of ingresosestudianteOculto
	 */
	public function getIngresosestudianteOculto()
	{
		return $this->ingresosestudianteOculto;
	}

	/**
	 * Set the value of ingresosestudianteOculto
	 *
	 * @return  self
	 */
	public function setIngresosestudianteOculto($ingresosestudianteOculto)
	{
		$this->ingresosestudianteOculto = $ingresosestudianteOculto;

		return $this;
	}

	/**
	 * Get the value of ingresosestudianteAccion
	 */
	public function getIngresosestudianteAccion()
	{
		return $this->ingresosestudianteAccion;
	}

	/**
	 * Set the value of ingresosestudianteAccion
	 *
	 * @return  self
	 */
	public function setIngresosestudianteAccion($ingresosestudianteAccion)
	{
		$this->ingresosestudianteAccion = $ingresosestudianteAccion;

		return $this;
	}

	/**
	 * Get the value of ingresosestudiantefecha
	 */
	public function getIngresosestudiantefecha()
	{
		return $this->ingresosestudiantefecha;
	}

	/**
	 * Set the value of ingresosestudiantefecha
	 *
	 * @return  self
	 */
	public function setIngresosestudiantefecha($ingresosestudiantefecha)
	{
		$this->ingresosestudiantefecha = $ingresosestudiantefecha;

		return $this;
	}

	/**
	 * Get the value of ingresosestudianteuser
	 */
	public function getIngresosestudianteuser()
	{
		return $this->ingresosestudianteuser;
	}

	/**
	 * Set the value of ingresosestudianteuser
	 *
	 * @return  self
	 */
	public function setIngresosestudianteuser($ingresosestudianteuser)
	{
		$this->ingresosestudianteuser = $ingresosestudianteuser;

		return $this;
	}
}
