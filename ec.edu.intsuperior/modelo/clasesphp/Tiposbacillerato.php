<?php

namespace Clasesphp;

class Tiposbacillerato
{
	private $tiposbacilleratocodigo, $tiposbacilleratoOculto, $tiposbacilleratoAccion, $tiposbacilleratofecha, $tiposbacilleratouser;

	private $tiposBacilleratoId;
	private $tipoBacillerato;
	public function _construct()
	{
	}
	public function set_tiposBacilleratoId($tiposBacilleratoId)
	{
		$this->tiposBacilleratoId = $tiposBacilleratoId;
	}
	public function get_tiposBacilleratoId()
	{
		return $this->tiposBacilleratoId;
	}
	public function set_tipoBacillerato($tipoBacillerato)
	{
		$this->tipoBacillerato = $tipoBacillerato;
	}
	public function get_tipoBacillerato()
	{
		return $this->tipoBacillerato;
	}

	public function set_tiposbacilleratocodigo($tiposbacilleratocodigo)
	{
		$this->tiposbacilleratocodigo = $tiposbacilleratocodigo;
	}
	public function get_tiposbacilleratocodigo()
	{
		return $this->tiposbacilleratocodigo;
	}
	public function set_tiposbacilleratoOculto($tiposbacilleratoOculto)
	{
		$this->tiposbacilleratoOculto = $tiposbacilleratoOculto;
	}
	public function get_tiposbacilleratoOculto()
	{
		return $this->tiposbacilleratoOculto;
	}
	public function set_tiposbacilleratoAccion($tiposbacilleratoAccion)
	{
		$this->tiposbacilleratoAccion = $tiposbacilleratoAccion;
	}
	public function get_tiposbacilleratoAccion()
	{
		return $this->tiposbacilleratoAccion;
	}
	public function set_tiposbacilleratofecha($tiposbacilleratofecha)
	{
		$this->tiposbacilleratofecha = $tiposbacilleratofecha;
	}
	public function get_tiposbacilleratofecha()
	{
		return $this->tiposbacilleratofecha;
	}
	public function set_tiposbacilleratouser($tiposbacilleratouser)
	{
		$this->tiposbacilleratouser = $tiposbacilleratouser;
	}
	public function get_tiposbacilleratouser()
	{
		return $this->tiposbacilleratouser;
	}
}
