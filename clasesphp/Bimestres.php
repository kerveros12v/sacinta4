<?php

namespace Clasesphp;

class Bimestres
{
	private $idBimestres, $bimestrescodigo, $bimestre, $bimestresOculto, $bimestresAccion, $bimestresfecha, $bimestresuser;
	public function _construct()
	{
	}
	public function set_idBimestres($idBimestres)
	{
		$this->idBimestres = $idBimestres;
	}
	public function set_bimestre($bimestre)
	{
		$this->bimestre = $bimestre;
	}
	public function get_idBimestres()
	{
		return $this->idBimestres;
	}
	public function get_bimestre()
	{
		return $this->bimestre;
	}

	public function set_bimestrescodigo($bimestrescodigo)
	{
		$this->bimestrescodigo = $bimestrescodigo;
	}
	public function get_bimestrescodigo()
	{
		return $this->bimestrescodigo;
	}
	public function set_bimestresOculto($bimestresOculto)
	{
		$this->bimestresOculto = $bimestresOculto;
	}
	public function get_bimestresOculto()
	{
		return $this->bimestresOculto;
	}
	public function set_bimestresAccion($bimestresAccion)
	{
		$this->bimestresAccion = $bimestresAccion;
	}
	public function get_bimestresAccion()
	{
		return $this->bimestresAccion;
	}
	public function set_bimestresfecha($bimestresfecha)
	{
		$this->bimestresfecha = $bimestresfecha;
	}
	public function get_bimestresfecha()
	{
		return $this->bimestresfecha;
	}
	public function set_bimestresuser($bimestresuser)
	{
		$this->bimestresuser = $bimestresuser;
	}
	public function get_bimestresuser()
	{
		return $this->bimestresuser;
	}
}
