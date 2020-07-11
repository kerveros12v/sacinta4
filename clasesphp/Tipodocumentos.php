<?php

namespace Clasesphp;

class Tipodocumento
{
	private $tipoDocumentoOculto, $tipoDocumentoAccion, $tipoDocumentofecha, $tipoDocumentouser;
	private $tipoDocumentoId;
	private $tipoDocumento;
	private $tipoDocumentocodigo;
	public function _construct()
	{
	}
	public function set_tipoDocumentoId($tipoDocumentoId)
	{
		$this->tipoDocumentoId = $tipoDocumentoId;
	}
	public function set_tipoDocumento($tipoDocumento)
	{
		$this->tipoDocumento = $tipoDocumento;
	}
	public function get_tipoDocumentoId()
	{
		return $this->tipoDocumentoId;
	}
	public function get_tipoDocumento()
	{
		return $this->tipoDocumento;
	}
	public function set_tipoDocumentocodigo($tipoDocumentocodigo)
	{
		$this->tipoDocumentocodigo = $tipoDocumentocodigo;
	}
	public function get_tipoDocumentocodigo()
	{
		return $this->tipoDocumentocodigo;
	}

	public function set_tipoDocumentoOculto($tipoDocumentoOculto)
	{
		$this->tipoDocumentoOculto = $tipoDocumentoOculto;
	}
	public function get_tipoDocumentoOculto()
	{
		return $this->tipoDocumentoOculto;
	}
	public function set_tipoDocumentoAccion($tipoDocumentoAccion)
	{
		$this->tipoDocumentoAccion = $tipoDocumentoAccion;
	}
	public function get_tipoDocumentoAccion()
	{
		return $this->tipoDocumentoAccion;
	}
	public function set_tipoDocumentofecha($tipoDocumentofecha)
	{
		$this->tipoDocumentofecha = $tipoDocumentofecha;
	}
	public function get_tipoDocumentofecha()
	{
		return $this->tipoDocumentofecha;
	}
	public function set_tipoDocumentouser($tipoDocumentouser)
	{
		$this->tipoDocumentouser = $tipoDocumentouser;
	}
	public function get_tipoDocumentouser()
	{
		return $this->tipoDocumentouser;
	}
}
