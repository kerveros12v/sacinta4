<?php

namespace Clasesphp;

class Generos
{
	private $generoOculto;
	private $generoAccion;
	private $generofecha;
	private $generouser;
	private $generoId;
	private $genero;
	private $generoscodigo;
	public function _construct()
	{
	}
	public function set_generoId($generoId)
	{
		$this->generoId = $generoId;
	}
	public function set_genero($genero)
	{
		$this->genero = $genero;
	}
	public function get_generoId()
	{
		return $this->generoId;
	}
	public function get_genero()
	{
		return $this->genero;
	}
	public function set_generoscodigo($generoscodigo)
	{
		$this->generoscodigo = $generoscodigo;
	}
	public function get_generoscodigo()
	{
		return $this->generoscodigo;
	}
	public function set_generoOculto($generoOculto)
	{
		$this->generoOculto = $generoOculto;
	}
	public function set_generoAccion($generoAccion)
	{
		$this->generoAccion = $generoAccion;
	}
	public function get_generoOculto()
	{
		return $this->generoOculto;
	}
	public function get_generoAccion()
	{
		return $this->generoAccion;
	}
	public function set_generofecha($generofecha)
	{
		$this->generofecha = $generofecha;
	}
	public function get_generofecha()
	{
		return $this->generofecha;
	}
	public function set_generouser($generouser)
	{
		$this->generouser = $generouser;
	}
	public function get_generouser()
	{
		return $this->generouser;
	}
	public function __toString()
	{
		return "generoOculto:{" . $this->generoOculto .
			"}generoAccion:{" . $this->generoAccion .
			"}generofecha:{" . $this->generofecha .
			"}generouser:{" . $this->generouser .
			"}generoId:{" . $this->generoId .
			"}genero:{" . $this->genero .
			"}generoscodigo:{" . $this->generoscodigo . "}";
	}
}
