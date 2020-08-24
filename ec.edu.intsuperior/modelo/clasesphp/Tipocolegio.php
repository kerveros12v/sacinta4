<?php

namespace Clasesphp;

class Tipocolegio
{
	private $tipocolegiocodigo, $tipocolegioOculto, $tipocolegioAccion, $tipocolegiofecha, $tipocolegiouser;
	private $tipoColegioId;
	private $tipoColegio;
	public function _construct()
	{
	}
	public function set_tipoColegioId($tipoColegioId)
	{
		$this->tipoColegioId = $tipoColegioId;
	}
	public function get_tipoColegioId()
	{
		return $this->tipoColegioId;
	}
	public function set_tipoColegio($tipoColegio)
	{
		$this->tipoColegio = $tipoColegio;
	}
	public function get_tipoColegio()
	{
		return $this->tipoColegio;
	}
	public function set_tipocolegiocodigo($tipocolegiocodigo)
	{
		$this->tipocolegiocodigo = $tipocolegiocodigo;
	}
	public function get_tipocolegiocodigo()
	{
		return $this->tipocolegiocodigo;
	}
	public function set_tipocolegioOculto($tipocolegioOculto)
	{
		$this->tipocolegioOculto = $tipocolegioOculto;
	}
	public function get_tipocolegioOculto()
	{
		return $this->tipocolegioOculto;
	}
	public function set_tipocolegioAccion($tipocolegioAccion)
	{
		$this->tipocolegioAccion = $tipocolegioAccion;
	}
	public function get_tipocolegioAccion()
	{
		return $this->tipocolegioAccion;
	}
	public function set_tipocolegiofecha($tipocolegiofecha)
	{
		$this->tipocolegiofecha = $tipocolegiofecha;
	}
	public function get_tipocolegiofecha()
	{
		return $this->tipocolegiofecha;
	}
	public function set_tipocolegiouser($tipocolegiouser)
	{
		$this->tipocolegiouser = $tipocolegiouser;
	}
	public function get_tipocolegiouser()
	{
		return $this->tipocolegiouser;
	}
}
