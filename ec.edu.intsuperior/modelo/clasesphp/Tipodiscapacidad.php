<?php

namespace Clasesphp;

class Tipodiscapacidad
{
	private $tdcodigo,  $tdOculto, $tdAccion, $tdfecha, $tduser;
	private $tipoDiscapacidadid;
	private $tipoDiscapacidad;
	private $tipodiscapacidadbool;
	public function _construct()
	{
	}

	public function set_tipodiscapacidadbool($tipodiscapacidadbool)
	{
		$this->tipodiscapacidadbool = $tipodiscapacidadbool;
	}
	public function get_tipodiscapacidadbool()
	{
		return $this->tipodiscapacidadbool;
	}

	public function set_tipoDiscapacidadid($tipoDiscapacidadid)
	{
		$this->tipoDiscapacidadid = $tipoDiscapacidadid;
	}
	public function get_tipoDiscapacidadid()
	{
		return $this->tipoDiscapacidadid;
	}
	public function set_tipoDiscapacidad($tipoDiscapacidad)
	{
		$this->tipoDiscapacidad = $tipoDiscapacidad;
	}
	public function get_tipoDiscapacidad()
	{
		return $this->tipoDiscapacidad;
	}

	public function set_tdcodigo($tdcodigo)
	{
		$this->tdcodigo = $tdcodigo;
	}
	public function get_tdcodigo()
	{
		return $this->tdcodigo;
	}
	public function set_tdOculto($tdOculto)
	{
		$this->tdOculto = $tdOculto;
	}
	public function get_tdOculto()
	{
		return $this->tdOculto;
	}
	public function set_tdAccion($tdAccion)
	{
		$this->tipoDtdAccioniscapacidadid = $tdAccion;
	}
	public function get_tdAccion()
	{
		return $this->tdAccion;
	}
	public function set_tdfecha($tdfecha)
	{
		$this->tdfecha = $tdfecha;
	}
	public function get_tdfecha()
	{
		return $this->tdfecha;
	}
	public function set_tduser($tduser)
	{
		$this->tduser = $tduser;
	}
	public function get_tduser()
	{
		return $this->tduser;
	}


	public function formatoJSON()
	{
		$myarray = array(
			'tipoDiscapacidadid' => $this->tipoDiscapacidadid,
			'tipoDiscapacidad' => $this->tipoDiscapacidad
		);
		return json_encode($myarray);
	}
	public function formatoArray()
	{
		$myarray = array(
			'tipoDiscapacidadid' => $this->tipoDiscapacidadid,
			'tipoDiscapacidad' => $this->tipoDiscapacidad
		);
		return $myarray;
	}
}
