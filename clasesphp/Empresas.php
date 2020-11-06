<?php

namespace Clasesphp;

class Empresas
{
	private $empresasId;
	private $nombreEmpresaInstitucion;
	private $ubicacion;
	private $representanteLega;
	private $noInformeTecnicodeViabilidad;
	private $fechaInformeTecnicodeViabilidad;
	private $noDeConvenio;
	private $fechaConvenio;
	private $contactoEmpresa;
	private $correoEmpresas;
	private $departamentocoodinador;
	private $empresasOculto;
	private $empresasAccion;
	private $empresasfecha;
	private $empresasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of empresasId
	 */
	public function getEmpresasId()
	{
		return $this->empresasId;
	}

	/**
	 * Set the value of empresasId
	 *
	 * @return  self
	 */
	public function setEmpresasId($empresasId)
	{
		$this->empresasId = $empresasId;

		return $this;
	}

	/**
	 * Get the value of nombreEmpresaInstitucion
	 */
	public function getNombreEmpresaInstitucion()
	{
		return $this->nombreEmpresaInstitucion;
	}

	/**
	 * Set the value of nombreEmpresaInstitucion
	 *
	 * @return  self
	 */
	public function setNombreEmpresaInstitucion($nombreEmpresaInstitucion)
	{
		$this->nombreEmpresaInstitucion = $nombreEmpresaInstitucion;

		return $this;
	}

	/**
	 * Get the value of ubicacion
	 */
	public function getUbicacion()
	{
		return $this->ubicacion;
	}

	/**
	 * Set the value of ubicacion
	 *
	 * @return  self
	 */
	public function setUbicacion($ubicacion)
	{
		$this->ubicacion = $ubicacion;

		return $this;
	}

	/**
	 * Get the value of representanteLega
	 */
	public function getRepresentanteLega()
	{
		return $this->representanteLega;
	}

	/**
	 * Set the value of representanteLega
	 *
	 * @return  self
	 */
	public function setRepresentanteLega($representanteLega)
	{
		$this->representanteLega = $representanteLega;

		return $this;
	}

	/**
	 * Get the value of noInformeTecnicodeViabilidad
	 */
	public function getNoInformeTecnicodeViabilidad()
	{
		return $this->noInformeTecnicodeViabilidad;
	}

	/**
	 * Set the value of noInformeTecnicodeViabilidad
	 *
	 * @return  self
	 */
	public function setNoInformeTecnicodeViabilidad($noInformeTecnicodeViabilidad)
	{
		$this->noInformeTecnicodeViabilidad = $noInformeTecnicodeViabilidad;

		return $this;
	}

	/**
	 * Get the value of fechaInformeTecnicodeViabilidad
	 */
	public function getFechaInformeTecnicodeViabilidad()
	{
		return $this->fechaInformeTecnicodeViabilidad;
	}

	/**
	 * Set the value of fechaInformeTecnicodeViabilidad
	 *
	 * @return  self
	 */
	public function setFechaInformeTecnicodeViabilidad($fechaInformeTecnicodeViabilidad)
	{
		$this->fechaInformeTecnicodeViabilidad = $fechaInformeTecnicodeViabilidad;

		return $this;
	}

	/**
	 * Get the value of noDeConvenio
	 */
	public function getNoDeConvenio()
	{
		return $this->noDeConvenio;
	}

	/**
	 * Set the value of noDeConvenio
	 *
	 * @return  self
	 */
	public function setNoDeConvenio($noDeConvenio)
	{
		$this->noDeConvenio = $noDeConvenio;

		return $this;
	}

	/**
	 * Get the value of fechaConvenio
	 */
	public function getFechaConvenio()
	{
		return $this->fechaConvenio;
	}

	/**
	 * Set the value of fechaConvenio
	 *
	 * @return  self
	 */
	public function setFechaConvenio($fechaConvenio)
	{
		$this->fechaConvenio = $fechaConvenio;

		return $this;
	}

	/**
	 * Get the value of contactoEmpresa
	 */
	public function getContactoEmpresa()
	{
		return $this->contactoEmpresa;
	}

	/**
	 * Set the value of contactoEmpresa
	 *
	 * @return  self
	 */
	public function setContactoEmpresa($contactoEmpresa)
	{
		$this->contactoEmpresa = $contactoEmpresa;

		return $this;
	}

	/**
	 * Get the value of correoEmpresas
	 */
	public function getCorreoEmpresas()
	{
		return $this->correoEmpresas;
	}

	/**
	 * Set the value of correoEmpresas
	 *
	 * @return  self
	 */
	public function setCorreoEmpresas($correoEmpresas)
	{
		$this->correoEmpresas = $correoEmpresas;

		return $this;
	}

	/**
	 * Get the value of empresasOculto
	 */
	public function getEmpresasOculto()
	{
		return $this->empresasOculto;
	}

	/**
	 * Set the value of empresasOculto
	 *
	 * @return  self
	 */
	public function setEmpresasOculto($empresasOculto)
	{
		$this->empresasOculto = $empresasOculto;

		return $this;
	}

	/**
	 * Get the value of empresasAccion
	 */
	public function getEmpresasAccion()
	{
		return $this->empresasAccion;
	}

	/**
	 * Set the value of empresasAccion
	 *
	 * @return  self
	 */
	public function setEmpresasAccion($empresasAccion)
	{
		$this->empresasAccion = $empresasAccion;

		return $this;
	}

	/**
	 * Get the value of empresasfecha
	 */
	public function getEmpresasfecha()
	{
		return $this->empresasfecha;
	}

	/**
	 * Set the value of empresasfecha
	 *
	 * @return  self
	 */
	public function setEmpresasfecha($empresasfecha)
	{
		$this->empresasfecha = $empresasfecha;

		return $this;
	}

	/**
	 * Get the value of empresasuser
	 */
	public function getEmpresasuser()
	{
		return $this->empresasuser;
	}

	/**
	 * Set the value of empresasuser
	 *
	 * @return  self
	 */
	public function setEmpresasuser($empresasuser)
	{
		$this->empresasuser = $empresasuser;

		return $this;
	}

	/**
	 * Get the value of departamentocoodinador
	 */
	public function getDepartamentocoodinador()
	{
		return $this->departamentocoodinador;
	}

	/**
	 * Set the value of departamentocoodinador
	 *
	 * @return  self
	 */
	public function setDepartamentocoodinador($departamentocoodinador)
	{
		$this->departamentocoodinador = $departamentocoodinador;

		return $this;
	}
}
