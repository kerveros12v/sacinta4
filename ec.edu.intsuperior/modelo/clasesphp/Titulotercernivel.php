<?php

namespace Clasesphp;

class Titulotercernivel
{

	private $tituloTercerNivelId;
	private $tituloTercerNivel;
	private $titulotercernivelcodigo;
	private $titulotercernivelOculto;
	private $titulotercernivelAccion;
	private $titulotercernivelfecha;
	private $titulotercerniveluse;
	public function _construct()
	{
	}
	public function set_tituloTercerNivelId($tituloTercerNivelId)
	{
		$this->tituloTercerNivelId = $tituloTercerNivelId;
	}
	public function get_tituloTercerNivelId()
	{
		return $this->tituloTercerNivelId;
	}
	public function set_tituloTercerNivel($tituloTercerNivel)
	{
		$this->tituloTercerNivel = $tituloTercerNivel;
	}
	public function get_tituloTercerNivel()
	{
		return $this->tituloTercerNivel;
	}

	public function set_titulotercernivelcodigo($titulotercernivelcodigo)
	{
		$this->titulotercernivelcodigo = $titulotercernivelcodigo;
	}
	public function set_titulotercernivelOculto($titulotercernivelOculto)
	{
		$this->titulotercernivelOculto = $titulotercernivelOculto;
	}
	public function set_titulotercernivelAccion($titulotercernivelAccion)
	{
		$this->titulotercernivelAccion = $titulotercernivelAccion;
	}
	public function set_titulotercernivelfecha($titulotercernivelfecha)
	{
		$this->titulotercernivelfecha = $titulotercernivelfecha;
	}
	public function set_titulotercerniveluse($titulotercerniveluse)
	{
		$this->titulotercerniveluse = $titulotercerniveluse;
	}
	public function get_titulotercernivelcodigo()
	{
		return $this->titulotercernivelcodigo;
	}
	public function get_titulotercernivelOculto()
	{
		return $this->titulotercernivelOculto;
	}
	public function get_titulotercernivelAccion()
	{
		return $this->titulotercernivelAccion;
	}
	public function get_titulotercernivelfecha()
	{
		return $this->titulotercernivelfecha;
	}
	public function get_titulotercerniveluse()
	{
		return $this->titulotercerniveluse;
	}
	public function _toString()
	{
		return "tituloTercerNivelId:{" . $this->tituloTercerNivelId .
			"}tituloTercerNivel:{" . $this->tituloTercerNivel .
			"}titulotercernivelcodigo:{" . $this->titulotercernivelcodigo .
			"}titulotercernivelOculto:{" . $this->titulotercernivelOculto .
			"}titulotercernivelAccion:{" . $this->titulotercernivelAccion .
			"}titulotercernivelfecha:{" . $this->titulotercernivelfecha .
			"}titulotercerniveluse:{" . $this->titulotercerniveluse . "}";
	}
}
