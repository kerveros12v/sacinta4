<?php

namespace Clasesphp;

class Sexos
{
	private $sexoOculto, $sexoAccion, $sexofecha, $sexouser;
	private $sexoId;
	private $sexo;
	private $sexocodigo;
	public function _construct()
	{
	}
	public function set_sexoOculto($sexoOculto)
	{
		$this->sexoOculto = $sexoOculto;
	}
	public function get_sexoOculto()
	{
		return $this->sexoOculto;
	}
	public function set_sexoAccion($sexoAccion)
	{
		$this->sexoAccion = $sexoAccion;
	}
	public function get_sexoAccion()
	{
		return $this->sexoAccion;
	}
	public function set_sexofecha($sexofecha)
	{
		$this->sexofecha = $sexofecha;
	}
	public function get_sexofecha()
	{
		return $this->sexofecha;
	}
	public function set_sexouser($sexouser)
	{
		$this->sexouser = $sexouser;
	}
	public function get_sexouser()
	{
		return $this->sexouser;
	}
	public function set_sexoId($sexoId)
	{
		$this->sexoId = $sexoId;
	}
	public function get_sexoId()
	{
		return $this->sexoId;
	}
	public function set_sexo($sexo)
	{
		$this->sexo = $sexo;
	}
	public function get_sexo()
	{
		return $this->sexo;
	}
	public function set_sexocodigo($sexocodigo)
	{
		$this->sexocodigo = $sexocodigo;
	}
	public function get_sexocodigo()
	{
		return $this->sexocodigo;
	}
	public function formatoJSON()
	{
		$myarray = array('sexoId' => $this->sexoId, 'sexo' => $this->sexo);
		return json_encode($myarray);
	}
	public function formatoArray()
	{
		$myarray = array('sexoId' => $this->sexoId, 'sexo' => $this->sexo);
		return ($myarray);
	}
}
