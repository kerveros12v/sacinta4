<?php

namespace Clasesphp;

class Tipobeca
{
	private $tipoBecaId;
	private $tipoBeca;
	private $tipobecacodigo;
	private $tipobecaOculto;
	private $tipobecaAccion;
	private $tipobecafecha;
	private $tipobecauser;
	public function _construct()
	{
	}
	public function set_tipoBecaId($tipoBecaId)
	{
		$this->tipoBecaId = $tipoBecaId;
	}
	public function get_tipoBecaId()
	{
		return $this->tipoBecaId;
	}
	public function set_tipoBeca($tipoBeca)
	{
		$this->tipoBeca = $tipoBeca;
	}
	public function get_tipoBeca()
	{
		return $this->tipoBeca;
	}
	public function set_tipobecacodigo($tipobecacodigo)
	{
		$this->tipobecacodigo = $tipobecacodigo;
	}
	public function get_tipobecacodigo()
	{
		return $this->tipobecacodigo;
	}
	public function set_tipobecaOculto($tipobecaOculto)
	{
		$this->tipobecaOculto = $tipobecaOculto;
	}
	public function get_tipobecaOculto()
	{
		return $this->tipobecaOculto;
	}
	public function set_tipobecaAccion($tipobecaAccion)
	{
		$this->tipobecaAccion = $tipobecaAccion;
	}
	public function get_tipobecaAccion()
	{
		return $this->tipobecaAccion;
	}
	public function set_tipobecafecha($tipobecafecha)
	{
		$this->tipobecafecha = $tipobecafecha;
	}
	public function get_tipobecafecha()
	{
		return $this->tipobecafecha;
	}
	public function set_tipobecauser($tipobecauser)
	{
		$this->tipobecauser = $tipobecauser;
	}
	public function get_tipobecauser()
	{
		return $this->tipobecauser;
	}
	public function formatoJSON()
	{
		$myarray = array(
			'tipoBecaId' => $this->tipoBecaId,
			'tipobecacodigo' => $this->tipobecacodigo,
			'tipoBeca' => $this->tipoBeca,
			'tipobecaOculto' => $this->tipobecaOculto,
			'tipobecaAccion' => $this->tipobecaAccion,
			'tipobecafecha' => $this->tipobecafecha,
			'tipobecauser' => $this->tipobecauser
		);
		return json_encode($myarray, JSON_PRETTY_PRINT);
	}
}
