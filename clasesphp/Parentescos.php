<?php

namespace Clasesphp;

class Parentescos
{
	private $idParentescos, $parentescocodigo, $parentesco, $parentescosOculto, $parentescosAccion, $parentescosfecha, $parentescosuser;

	public function _construct()
	{
	}
	public function set_idParentescos($idParentescos)
	{
		$this->idParentescos = $idParentescos;
	}
	public function set_parentesco($parentesco)
	{
		$this->parentesco = $parentesco;
	}
	public function get_idParentescos()
	{
		return $this->idParentescos;
	}
	public function get_parentesco()
	{
		return $this->parentesco;
	}

	public function set_parentescosOculto($parentescosOculto)
	{
		$this->parentescosOculto = $parentescosOculto;
	}
	public function get_parentescosOculto()
	{
		return $this->parentescosOculto;
	}
	public function set_parentescosAccion($parentescosAccion)
	{
		$this->parentescosAccion = $parentescosAccion;
	}
	public function get_parentescosAccion()
	{
		return $this->parentescosAccion;
	}
	public function set_parentescosfecha($parentescosfecha)
	{
		$this->parentescosfecha = $parentescosfecha;
	}
	public function get_parentescosfecha()
	{
		return $this->parentescosfecha;
	}
	public function set_parentescosuser($parentescosuser)
	{
		$this->parentescosuser = $parentescosuser;
	}
	public function get_parentescosuser()
	{
		return $this->parentescosuser;
	}
	public function set_parentescocodigo($parentescocodigo)
	{
		$this->parentescocodigo = $parentescocodigo;
	}
	public function get_parentescocodigo()
	{
		return $this->parentescocodigo;
	}
}
