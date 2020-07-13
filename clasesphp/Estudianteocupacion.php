<?php

namespace Clasesphp;

class Estudianteocupacion
{
	private $estudianteocupacioncodigo, $estudianteocupacionOculto, $estudianteocupacionAccion, $estudianteocupacionfecha, $estudianteocupacionuser;
	private $estudianteOcupacionId;
	private $estudianteOcupacion;
	public function _construct()
	{
	}
	public function set_estudianteOcupacionId($estudianteOcupacionId)
	{
		$this->estudianteOcupacionId = $estudianteOcupacionId;
	}
	public function set_estudianteOcupacion($estudianteOcupacion)
	{
		$this->estudianteOcupacion = $estudianteOcupacion;
	}
	public function get_estudianteOcupacion()
	{
		return $this->estudianteOcupacion;
	}
	public function get_estudianteOcupacionId()
	{
		return $this->estudianteOcupacionId;
	}

	public function set_estudianteocupacioncodigo($estudianteocupacioncodigo)
	{
		$this->estudianteocupacioncodigo = $estudianteocupacioncodigo;
	}
	public function set_estudianteocupacionOculto($estudianteocupacionOculto)
	{
		$this->estudianteocupacionOculto = $estudianteocupacionOculto;
	}
	public function get_estudianteocupacioncodigo()
	{
		return $this->estudianteocupacioncodigo;
	}
	public function get_estudianteocupacionOculto()
	{
		return $this->estudianteocupacionOculto;
	}

	public function set_estudianteocupacionAccion($estudianteocupacionAccion)
	{
		$this->estudianteocupacionAccion = $estudianteocupacionAccion;
	}
	public function set_estudianteocupacionfecha($estudianteocupacionfecha)
	{
		$this->estudianteocupacionfecha = $estudianteocupacionfecha;
	}
	public function get_estudianteocupacionAccion()
	{
		return $this->estudianteocupacionAccion;
	}
	public function get_estudianteocupacionfecha()
	{
		return $this->estudianteocupacionfecha;
	}

	public function set_estudianteocupacionuser($estudianteocupacionuser)
	{
		$this->estudianteocupacionuser = $estudianteocupacionuser;
	}
	public function get_estudianteocupacionuser()
	{
		return $this->estudianteocupacionuser;
	}
}
