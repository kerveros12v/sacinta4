<?php

namespace Clasesphp;

class Recibepensiondiferenciada
{
	private  $recibepensiondiferenciadacodigo,  $recibepensiondiferenciadaOculto, $recibepensiondiferenciadaAccion, $recibepensiondiferenciadafecha, $recibepensiondiferenciadauser;
	private $recibePensionDiferenciadaId;
	private $recibePensionDiferenciada;
	public function _construct()
	{
	}
	public function set_recibePensionDiferenciadaId($recibePensionDiferenciadaId)
	{
		$this->recibePensionDiferenciadaId = $recibePensionDiferenciadaId;
	}
	public function get_recibePensionDiferenciadaId()
	{
		return $this->recibePensionDiferenciadaId;
	}
	public function set_recibePensionDiferenciada($recibePensionDiferenciada)
	{
		$this->recibePensionDiferenciada = $recibePensionDiferenciada;
	}
	public function get_recibePensionDiferenciada()
	{
		return $this->recibePensionDiferenciada;
	}

	public function set_recibepensiondiferenciadacodigo($recibepensiondiferenciadacodigo)
	{
		$this->recibepensiondiferenciadacodigo = $recibepensiondiferenciadacodigo;
	}
	public function get_recibepensiondiferenciadacodigo()
	{
		return $this->recibepensiondiferenciadacodigo;
	}
	public function set_recibepensiondiferenciadaOculto($recibepensiondiferenciadaOculto)
	{
		$this->recibepensiondiferenciadaOculto = $recibepensiondiferenciadaOculto;
	}
	public function get_recibepensiondiferenciadaOculto()
	{
		return $this->recibepensiondiferenciadaOculto;
	}
	public function set_recibepensiondiferenciadaAccion($recibepensiondiferenciadaAccion)
	{
		$this->recibepensiondiferenciadaAccion = $recibepensiondiferenciadaAccion;
	}
	public function get_recibepensiondiferenciadaAccion()
	{
		return $this->recibepensiondiferenciadaAccion;
	}
	public function set_recibepensiondiferenciadafecha($recibepensiondiferenciadafecha)
	{
		$this->recibepensiondiferenciadafecha = $recibepensiondiferenciadafecha;
	}
	public function get_recibepensiondiferenciadafecha()
	{
		return $this->recibepensiondiferenciadafecha;
	}
	public function set_recibepensiondiferenciadauser($recibepensiondiferenciadauser)
	{
		$this->recibepensiondiferenciadauser = $recibepensiondiferenciadauser;
	}
	public function get_recibepensiondiferenciadauser()
	{
		return $this->recibepensiondiferenciadauser;
	}
}
