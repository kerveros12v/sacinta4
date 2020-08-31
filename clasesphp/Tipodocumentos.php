<?php

namespace Clasesphp;

class Tipodocumento
{
	private $tipoDocumentoId;
	private $tipoDocumentocodigo;
	private $tipoDocumento;
	private $tipoDocumentoOculto;
	private $tipoDocumentoAccion;
	private $tipoDocumentofecha;
	private $tipoDocumentouser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipoDocumentoId
	 */
	public function getTipoDocumentoId()
	{
		return $this->tipoDocumentoId;
	}

	/**
	 * Set the value of tipoDocumentoId
	 *
	 * @return  self
	 */
	public function setTipoDocumentoId($tipoDocumentoId)
	{
		$this->tipoDocumentoId = $tipoDocumentoId;

		return $this;
	}

	/**
	 * Get the value of tipoDocumentocodigo
	 */
	public function getTipoDocumentocodigo()
	{
		return $this->tipoDocumentocodigo;
	}

	/**
	 * Set the value of tipoDocumentocodigo
	 *
	 * @return  self
	 */
	public function setTipoDocumentocodigo($tipoDocumentocodigo)
	{
		$this->tipoDocumentocodigo = $tipoDocumentocodigo;

		return $this;
	}

	/**
	 * Get the value of tipoDocumento
	 */
	public function getTipoDocumento()
	{
		return $this->tipoDocumento;
	}

	/**
	 * Set the value of tipoDocumento
	 *
	 * @return  self
	 */
	public function setTipoDocumento($tipoDocumento)
	{
		$this->tipoDocumento = $tipoDocumento;

		return $this;
	}

	/**
	 * Get the value of tipoDocumentoOculto
	 */
	public function getTipoDocumentoOculto()
	{
		return $this->tipoDocumentoOculto;
	}

	/**
	 * Set the value of tipoDocumentoOculto
	 *
	 * @return  self
	 */
	public function setTipoDocumentoOculto($tipoDocumentoOculto)
	{
		$this->tipoDocumentoOculto = $tipoDocumentoOculto;

		return $this;
	}

	/**
	 * Get the value of tipoDocumentoAccion
	 */
	public function getTipoDocumentoAccion()
	{
		return $this->tipoDocumentoAccion;
	}

	/**
	 * Set the value of tipoDocumentoAccion
	 *
	 * @return  self
	 */
	public function setTipoDocumentoAccion($tipoDocumentoAccion)
	{
		$this->tipoDocumentoAccion = $tipoDocumentoAccion;

		return $this;
	}

	/**
	 * Get the value of tipoDocumentofecha
	 */
	public function getTipoDocumentofecha()
	{
		return $this->tipoDocumentofecha;
	}

	/**
	 * Set the value of tipoDocumentofecha
	 *
	 * @return  self
	 */
	public function setTipoDocumentofecha($tipoDocumentofecha)
	{
		$this->tipoDocumentofecha = $tipoDocumentofecha;

		return $this;
	}

	/**
	 * Get the value of tipoDocumentouser
	 */
	public function getTipoDocumentouser()
	{
		return $this->tipoDocumentouser;
	}

	/**
	 * Set the value of tipoDocumentouser
	 *
	 * @return  self
	 */
	public function setTipoDocumentouser($tipoDocumentouser)
	{
		$this->tipoDocumentouser = $tipoDocumentouser;

		return $this;
	}
}
