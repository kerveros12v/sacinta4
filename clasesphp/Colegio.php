<?php

namespace Clasesphp;

class Colegios
{
	private $colegioscodigo, $colegiosOculto, $colegiosAccion, $colegiosfecha, $colegiosuser;
	private $idColegios;
	private $colegio;
	private $cantonCantonId;
	private $tipoColegioTipoColegioId;
	public function _construct()
	{
	}

	public function get_colegioscodigo()
	{
		return $this->colegioscodigo;
	}
	public function set_colegioscodigo($colegioscodigo)
	{
		$this->colegioscodigo = $colegioscodigo;
	}
	public function get_colegiosOculto()
	{
		return $this->colegiosOculto;
	}
	public function set_colegiosOculto($colegiosOculto)
	{
		$this->colegiosOculto = $colegiosOculto;
	}
	public function get_colegiosAccion()
	{
		return $this->colegiosAccion;
	}
	public function set_colegiosAccion($colegiosAccion)
	{
		$this->colegiosAccion = $colegiosAccion;
	}
	public function get_colegiosfecha()
	{
		return $this->colegiosfecha;
	}
	public function set_colegiosfecha($colegiosfecha)
	{
		$this->colegiosfecha = $colegiosfecha;
	}
	public function get_colegiosuser()
	{
		return $this->colegiosuser;
	}
	public function set_colegiosuser($colegiosuser)
	{
		$this->colegiosuser = $colegiosuser;
	}
	public function get_idColegios()
	{
		return $this->idColegios;
	}
	public function get_colegio()
	{
		return $this->colegio;
	}

	public function get_cantonCantonId()
	{
		return $this->cantonCantonId;
	}
	public function get_tipoColegioTipoColegioId()
	{
		return $this->tipoColegioTipoColegioId;
	}
	public function set_idColegios($idColegios)
	{
		$this->idColegios = $idColegios;
	}
	public function set_colegio($colegio)
	{
		$this->colegio = $colegio;
	}

	public function set_cantonCantonId($cantonCantonId)
	{
		$this->cantonCantonId = $cantonCantonId;
	}
	public function set_tipoColegioTipoColegioId($tipoColegioTipoColegioId)
	{
		$this->tipoColegioTipoColegioId = $tipoColegioTipoColegioId;
	}
	public function __toString()
	{
		return ('idColegios: {' . $this->get_idColegios() . '} colegio: {' . $this->get_colegio() . '} cantonCantonId: {' . $this->get_cantonCantonId() . '} tipoColegioTipoColegioId: {' . $this->get_tipoColegioTipoColegioId() . "}");
	}
	public function formatoJSON()
	{
		$myarray = array('idColegios' => $this->idColegios, 'colegio' => $this->colegio,  'cantonCantonId' => $this->cantonCantonId, 'tipoColegioTipoColegioId' => $this->tipoColegioTipoColegioId);
	}
}
