<?php

namespace Clasesphp;

class Modalidadcarreras
{
	private  $modalidadcarreracodigo,  $modalidadcarreraOculto, $modalidadcarreraAccion, $modalidadcarrerafecha, $modalidadcarrerauser;
	private $modalidadCarreraId;
	private $modalidadCarrera;
	public function _construct()
	{
	}
	public function set_modalidadCarreraId($modalidadCarreraId)
	{
		$this->modalidadCarreraId = $modalidadCarreraId;
	}
	public function set_modalidadCarrera($modalidadCarrera)
	{
		$this->modalidadCarrera = $modalidadCarrera;
	}
	public function get_modalidadCarreraId()
	{
		return $this->modalidadCarreraId;
	}
	public function get_modalidadCarrera()
	{
		return $this->modalidadCarrera;
	}

	public function set_modalidadcarreracodigo($modalidadcarreracodigo)
	{
		$this->modalidadcarreracodigo = $modalidadcarreracodigo;
	}
	public function get_modalidadcarreracodigo()
	{
		return $this->modalidadcarreracodigo;
	}
	public function set_modalidadcarreraOculto($modalidadcarreraOculto)
	{
		$this->modalidadcarreraOculto = $modalidadcarreraOculto;
	}
	public function get_modalidadcarreraOculto()
	{
		return $this->modalidadcarreraOculto;
	}
	public function set_modalidadcarreraAccion($modalidadcarreraAccion)
	{
		$this->modalidadcarreraAccion = $modalidadcarreraAccion;
	}
	public function get_modalidadcarreraAccion()
	{
		return $this->modalidadcarreraAccion;
	}
	public function set_modalidadcarrerafecha($modalidadcarrerafecha)
	{
		$this->modalidadcarrerafecha = $modalidadcarrerafecha;
	}
	public function get_modalidadcarrerafecha()
	{
		return $this->modalidadcarrerafecha;
	}
	public function set_modalidadcarrerauser($modalidadcarrerauser)
	{
		$this->modalidadcarrerauser = $modalidadcarrerauser;
	}
	public function get_modalidadcarrerauser()
	{
		return $this->modalidadcarrerauser;
	}
}
