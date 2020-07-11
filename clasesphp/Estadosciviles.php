<?php

namespace Clasesphp;

class Estadosciviles
{
	private $estadoCivilId, $estadoscivilcodigo, $estadoCivil, $estadoCivilOculto, $estadoCivilAccion, $estadoCivilfecha, $estadoCiviluser;

	public function _construct()
	{
	}
	public function set_estadoCivilId($estadoCivilId)
	{
		$this->estadoCivilId = $estadoCivilId;
	}
	public function get_estadoCivilId()
	{
		return $this->estadoCivilId;
	}
	public function set_estadoCivil($estadoCivil)
	{
		$this->estadoCivil = $estadoCivil;
	}
	public function get_estadoCivil()
	{
		return $this->estadoCivil;
	}
	public function set_estadoscivilcodigo($estadoscivilcodigo)
	{
		$this->estadoscivilcodigo = $estadoscivilcodigo;
	}
	public function get_estadoscivilcodigo()
	{
		return $this->estadoscivilcodigo;
	}

	public function set_estadoCivilOculto($estadoCivilOculto)
	{
		$this->estadoCivilOculto = $estadoCivilOculto;
	}
	public function get_estadoCivilOculto()
	{
		return $this->estadoCivilOculto;
	}
	public function set_estadoCivilAccion($estadoCivilAccion)
	{
		$this->estadoCivilAccion = $estadoCivilAccion;
	}
	public function get_estadoCivilAccion()
	{
		return $this->estadoCivilAccion;
	}
	public function set_estadoCivilfecha($estadoCivilfecha)
	{
		$this->estadoCivilfecha = $estadoCivilfecha;
	}
	public function get_estadoCivilfecha()
	{
		return $this->estadoCivilfecha;
	}
	public function set_estadoCiviluser($estadoCiviluser)
	{
		$this->estadoCiviluser = $estadoCiviluser;
	}
	public function get_estadoCiviluser()
	{
		return $this->estadoCiviluser;
	}
}
