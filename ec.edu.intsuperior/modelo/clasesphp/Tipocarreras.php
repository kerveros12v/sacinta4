<?php

namespace Clasesphp;

class Tipocarreras
{
	private $tipocarrerascodigo, $tipocarrerasOculto, $tipocarrerasAccion, $tipocarrerasfecha, $tipocarrerasuser;
	private $tipoCarrerasId;
	private $tipoCarreras;
	public function _construct()
	{
	}
	public function set_tipoCarrerasId($tipoCarrerasId)
	{
		$this->tipoCarrerasId = $tipoCarrerasId;
	}
	public function get_tipoCarrerasId()
	{
		return $this->tipoCarrerasId;
	}
	public function set_tipoCarreras($tipoCarreras)
	{
		$this->tipoCarreras = $tipoCarreras;
	}
	public function get_tipoCarreras()
	{
		return $this->tipoCarreras;
	}
	public function set_tipocarrerascodigo($tipocarrerascodigo)
	{
		$this->tipocarrerascodigo = $tipocarrerascodigo;
	}
	public function get_tipocarrerascodigo()
	{
		return $this->tipocarrerascodigo;
	}
	public function set_tipocarrerasOculto($tipocarrerasOculto)
	{
		$this->tipocarrerasOculto = $tipocarrerasOculto;
	}
	public function get_tipocarrerasOculto()
	{
		return $this->tipocarrerasOculto;
	}
	public function set_tipocarrerasAccion($tipocarrerasAccion)
	{
		$this->tipocarrerasAccion = $tipocarrerasAccion;
	}
	public function get_tipocarrerasAccion()
	{
		return $this->tipocarrerasAccion;
	}
	public function set_tipocarrerasfecha($tipocarrerasfecha)
	{
		$this->tipocarrerasfecha = $tipocarrerasfecha;
	}
	public function get_tipocarrerasfecha()
	{
		return $this->tipocarrerasfecha;
	}
	public function set_tipocarrerasuser($tipocarrerasuser)
	{
		$this->tipocarrerasuser = $tipocarrerasuser;
	}
	public function get_tipocarrerasuser()
	{
		return $this->tipocarrerasuser;
	}
}
