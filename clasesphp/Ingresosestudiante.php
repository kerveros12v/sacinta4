<?php

namespace Clasesphp;

class Ingresosestudiante
{
	private $ingresosestudiantecodigo, $ingresosestudianteOculto, $ingresosestudianteAccion, $ingresosestudiantefecha, $ingresosestudianteuser;
	private $ingresosestudianteId;
	private $ingresosestudiante;
	public function _construct()
	{
	}
	public function set_ingresosestudianteId($ingresosestudianteId)
	{
		$this->ingresosestudianteId = $ingresosestudianteId;
	}
	public function get_ingresosestudianteId()
	{
		return $this->ingresosestudianteId;
	}
	public function set_ingresosestudiante($ingresosestudiante)
	{
		$this->ingresosestudiante = $ingresosestudiante;
	}
	public function get_ingresosestudiante()
	{
		return $this->ingresosestudiante;
	}
	public function set_ingresosestudiantecodigo($ingresosestudiantecodigo)
	{
		$this->ingresosestudiantecodigo = $ingresosestudiantecodigo;
	}
	public function get_ingresosestudiantecodigo()
	{
		return $this->ingresosestudiantecodigo;
	}
	public function set_ingresosestudianteOculto($ingresosestudianteOculto)
	{
		$this->ingresosestudianteOculto = $ingresosestudianteOculto;
	}
	public function get_ingresosestudianteOculto()
	{
		return $this->ingresosestudianteOculto;
	}
	public function set_ingresosestudianteAccion($ingresosestudianteAccion)
	{
		$this->ingresosestudianteAccion = $ingresosestudianteAccion;
	}
	public function get_ingresosestudianteAccion()
	{
		return $this->ingresosestudianteAccion;
	}
	public function set_ingresosestudiantefecha($ingresosestudiantefecha)
	{
		$this->ingresosestudiantefecha = $ingresosestudiantefecha;
	}
	public function get_ingresosestudiantefecha()
	{
		return $this->ingresosestudiantefecha;
	}
	public function set_ingresosestudianteuser($ingresosestudianteuser)
	{
		$this->ingresosestudianteuser = $ingresosestudianteuser;
	}
	public function get_ingresosestudianteuser()
	{
		return $this->ingresosestudianteuser;
	}
}
