<?php

namespace Clasesphp;

class Paises
{
	private $paisId;
	private $pais;
	private $codigo;
	private $oculto;
	private $fecha;
	private $estado;
	private $user;
	public function __construct()
	{
	}

	public function set_paisId($paisid)
	{
		$this->paisId = $paisid;
	}
	public function get_paisId()
	{
		return $this->paisId;
	}
	public function set_pais($pais)
	{
		$this->pais = $pais;
	}
	public function get_pais()
	{
		return $this->pais;
	}

	public function set_codigo($codigo)
	{
		$this->codigo = $codigo;
	}
	public function get_codigo()
	{
		return $this->codigo;
	}
	public function set_oculto($oculto)
	{
		$this->oculto = $oculto;
	}
	public function get_oculto()
	{
		return $this->oculto;
	}

	public function set_fecha($fecha)
	{
		$this->fecha = $fecha;
	}
	public function get_fecha()
	{
		return $this->fecha;
	}
	public function set_estado($estado)
	{
		$this->estado = $estado;
	}
	public function get_estado()
	{
		return $this->estado;
	}
	public function set_user($user)
	{
		$this->user = $user;
	}
	public function get_user()
	{
		return $this->user;
	}
	public function __toString()
	{
		return "Id:{" . $this->paisId . "}Pais:{" . $this->pais . "}Codigo:{" . $this->codigo . "}Oculto:{" . $this->oculto . "}Fecha:{" . $this->fecha . "}Estado:{" . $this->estado . "}Usuario:{" . $this->user;
	}
}
