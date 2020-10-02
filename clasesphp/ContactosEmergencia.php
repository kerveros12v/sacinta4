<?php

namespace Clasesphp;

class Contactosemergencia
{
	private $contactosEmergenciaId;
	private $nombreContactoEmergencia;
	private $numeroContactosEmergencia;
	private $estudiantesNumeroIdentificacion;
	private $parentescosIdParentescos;
	private $contactosperiodo;
	private $contactosemergenciaOculto;
	private $contactosemergenciaAccion;
	private $contactosemergenciafecha;
	private $contactosemergenciauser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of contactosEmergenciaId
	 */
	public function getContactosEmergenciaId()
	{
		return $this->contactosEmergenciaId;
	}

	/**
	 * Set the value of contactosEmergenciaId
	 *
	 * @return  self
	 */
	public function setContactosEmergenciaId($contactosEmergenciaId)
	{
		$this->contactosEmergenciaId = $contactosEmergenciaId;

		return $this;
	}

	/**
	 * Get the value of nombreContactoEmergencia
	 */
	public function getNombreContactoEmergencia()
	{
		return $this->nombreContactoEmergencia;
	}

	/**
	 * Set the value of nombreContactoEmergencia
	 *
	 * @return  self
	 */
	public function setNombreContactoEmergencia($nombreContactoEmergencia)
	{
		$this->nombreContactoEmergencia = $nombreContactoEmergencia;

		return $this;
	}

	/**
	 * Get the value of numeroContactosEmergencia
	 */
	public function getNumeroContactosEmergencia()
	{
		return $this->numeroContactosEmergencia;
	}

	/**
	 * Set the value of numeroContactosEmergencia
	 *
	 * @return  self
	 */
	public function setNumeroContactosEmergencia($numeroContactosEmergencia)
	{
		$this->numeroContactosEmergencia = $numeroContactosEmergencia;

		return $this;
	}

	/**
	 * Get the value of estudiantesNumeroIdentificacion
	 */
	public function getEstudiantesNumeroIdentificacion()
	{
		return $this->estudiantesNumeroIdentificacion;
	}

	/**
	 * Set the value of estudiantesNumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setEstudiantesNumeroIdentificacion($estudiantesNumeroIdentificacion)
	{
		$this->estudiantesNumeroIdentificacion = $estudiantesNumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of parentescosIdParentescos
	 */
	public function getParentescosIdParentescos()
	{
		return $this->parentescosIdParentescos;
	}

	/**
	 * Set the value of parentescosIdParentescos
	 *
	 * @return  self
	 */
	public function setParentescosIdParentescos($parentescosIdParentescos)
	{
		$this->parentescosIdParentescos = $parentescosIdParentescos;

		return $this;
	}

	/**
	 * Get the value of contactosperiodo
	 */
	public function getContactosperiodo()
	{
		return $this->contactosperiodo;
	}

	/**
	 * Set the value of contactosperiodo
	 *
	 * @return  self
	 */
	public function setContactosperiodo($contactosperiodo)
	{
		$this->contactosperiodo = $contactosperiodo;

		return $this;
	}

	/**
	 * Get the value of contactosemergenciaOculto
	 */
	public function getContactosemergenciaOculto()
	{
		return $this->contactosemergenciaOculto;
	}

	/**
	 * Set the value of contactosemergenciaOculto
	 *
	 * @return  self
	 */
	public function setContactosemergenciaOculto($contactosemergenciaOculto)
	{
		$this->contactosemergenciaOculto = $contactosemergenciaOculto;

		return $this;
	}

	/**
	 * Get the value of contactosemergenciaAccion
	 */
	public function getContactosemergenciaAccion()
	{
		return $this->contactosemergenciaAccion;
	}

	/**
	 * Set the value of contactosemergenciaAccion
	 *
	 * @return  self
	 */
	public function setContactosemergenciaAccion($contactosemergenciaAccion)
	{
		$this->contactosemergenciaAccion = $contactosemergenciaAccion;

		return $this;
	}

	/**
	 * Get the value of contactosemergenciafecha
	 */
	public function getContactosemergenciafecha()
	{
		return $this->contactosemergenciafecha;
	}

	/**
	 * Set the value of contactosemergenciafecha
	 *
	 * @return  self
	 */
	public function setContactosemergenciafecha($contactosemergenciafecha)
	{
		$this->contactosemergenciafecha = $contactosemergenciafecha;

		return $this;
	}

	/**
	 * Get the value of contactosemergenciauser
	 */
	public function getContactosemergenciauser()
	{
		return $this->contactosemergenciauser;
	}

	/**
	 * Set the value of contactosemergenciauser
	 *
	 * @return  self
	 */
	public function setContactosemergenciauser($contactosemergenciauser)
	{
		$this->contactosemergenciauser = $contactosemergenciauser;

		return $this;
	}
	public function __toString()
	{
		return 	"contactosEmergenciaId: {" . $this->contactosEmergenciaId;
		"}nombreContactoEmergencia:{" . $this->nombreContactoEmergencia;
		"}numeroContactosEmergencia:{" . $this->numeroContactosEmergencia;
		"}estudiantesNumeroIdentificacion:{" . $this->estudiantesNumeroIdentificacion;
		"}parentescosIdParentescos:{" . $this->parentescosIdParentescos;
		"}contactosperiodo:{" . $this->contactosperiodo;
		"}contactosemergenciaOculto:{" . $this->contactosemergenciaOculto;
		"}contactosemergenciaAccion:{" . $this->contactosemergenciaAccion;
		"}contactosemergenciafecha:{" . $this->contactosemergenciafecha;
		"}contactosemergenciauser:{" . $this->contactosemergenciauser . "}";
	}
}
