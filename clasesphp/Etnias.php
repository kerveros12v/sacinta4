<?php

namespace Clasesphp;

class Etnias
{
	private $etniasOculto, $etniasAccion, $etniasfecha, $etniasuser;
	private $etniaId;
	private $etnia;
	private $etniascodigo;
	public function _construct()
	{
	}
	public function set_etniaId($etniaId)
	{
		$this->etniaId = $etniaId;
	}
	public function set_etnia($etnia)
	{
		$this->etnia = $etnia;
	}
	public function get_etniaId()
	{
		return $this->etniaId;
	}
	public function get_etnia()
	{
		return $this->etnia;
	}
	public function set_etniascodigo($etniascodigo)
	{
		$this->etniascodigo = $etniascodigo;
	}
	public function get_etniascodigo()
	{
		return $this->etniascodigo;
	}
	public function set_etniasOculto($etniasOculto)
	{
		$this->etniasOculto = $etniasOculto;
	}
	public function get_etniasOculto()
	{
		return $this->etniasOculto;
	}
	public function set_etniasAccion($etniasAccion)
	{
		$this->etniasAccion = $etniasAccion;
	}
	public function get_etniasAccion()
	{
		return $this->etniasAccion;
	}
	public function set_etniasfecha($etniasfecha)
	{
		$this->etniasfecha = $etniasfecha;
	}
	public function get_etniasfecha()
	{
		return $this->etniasfecha;
	}
	public function set_etniasuser($etniasuser)
	{
		$this->etniasuser = $etniasuser;
	}
	public function get_etniasuser()
	{
		return $this->etniasuser;
	}
}
