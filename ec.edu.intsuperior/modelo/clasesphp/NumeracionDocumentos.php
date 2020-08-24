<?php

namespace Clasesphp;

class NumeracionDocumentos
{

	private $numeracionDocumentosId;
	private $nombreDocumento;
	private $numeracionSiguiente;
	private $numeraciondocumentosOculto;
	private $numeraciondocumentosAccion;
	private $numeraciondocumentosfecha;
	private $numeraciondocumentosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of numeracionDocumentosId
	 */
	public function getNumeracionDocumentosId()
	{
		return $this->numeracionDocumentosId;
	}

	/**
	 * Set the value of numeracionDocumentosId
	 *
	 * @return  self
	 */
	public function setNumeracionDocumentosId($numeracionDocumentosId)
	{
		$this->numeracionDocumentosId = $numeracionDocumentosId;

		return $this;
	}

	/**
	 * Get the value of nombreDocumento
	 */
	public function getNombreDocumento()
	{
		return $this->nombreDocumento;
	}

	/**
	 * Set the value of nombreDocumento
	 *
	 * @return  self
	 */
	public function setNombreDocumento($nombreDocumento)
	{
		$this->nombreDocumento = $nombreDocumento;

		return $this;
	}

	/**
	 * Get the value of numeracionSiguiente
	 */
	public function getNumeracionSiguiente()
	{
		return $this->numeracionSiguiente;
	}

	/**
	 * Set the value of numeracionSiguiente
	 *
	 * @return  self
	 */
	public function setNumeracionSiguiente($numeracionSiguiente)
	{
		$this->numeracionSiguiente = $numeracionSiguiente;

		return $this;
	}

	/**
	 * Get the value of numeraciondocumentosOculto
	 */
	public function getNumeraciondocumentosOculto()
	{
		return $this->numeraciondocumentosOculto;
	}

	/**
	 * Set the value of numeraciondocumentosOculto
	 *
	 * @return  self
	 */
	public function setNumeraciondocumentosOculto($numeraciondocumentosOculto)
	{
		$this->numeraciondocumentosOculto = $numeraciondocumentosOculto;

		return $this;
	}

	/**
	 * Get the value of numeraciondocumentosAccion
	 */
	public function getNumeraciondocumentosAccion()
	{
		return $this->numeraciondocumentosAccion;
	}

	/**
	 * Set the value of numeraciondocumentosAccion
	 *
	 * @return  self
	 */
	public function setNumeraciondocumentosAccion($numeraciondocumentosAccion)
	{
		$this->numeraciondocumentosAccion = $numeraciondocumentosAccion;

		return $this;
	}

	/**
	 * Get the value of numeraciondocumentosfecha
	 */
	public function getNumeraciondocumentosfecha()
	{
		return $this->numeraciondocumentosfecha;
	}

	/**
	 * Set the value of numeraciondocumentosfecha
	 *
	 * @return  self
	 */
	public function setNumeraciondocumentosfecha($numeraciondocumentosfecha)
	{
		$this->numeraciondocumentosfecha = $numeraciondocumentosfecha;

		return $this;
	}

	/**
	 * Get the value of numeraciondocumentosuser
	 */
	public function getNumeraciondocumentosuser()
	{
		return $this->numeraciondocumentosuser;
	}

	/**
	 * Set the value of numeraciondocumentosuser
	 *
	 * @return  self
	 */
	public function setNumeraciondocumentosuser($numeraciondocumentosuser)
	{
		$this->numeraciondocumentosuser = $numeraciondocumentosuser;

		return $this;
	}
}
