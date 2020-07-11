<?php

namespace Clasesphp;

class Bonodesarrollo
{
	private $bonodesarrollocodigo,  $bonodesarrolloOculto, $bonodesarrolloAccion, $bonodesarrollofecha, $bonodesarrollouser;
	private $bonoDesarrolloId;
	private $bonoDesarrollo;
	public function _construct()
	{
	}
	public function set_bonoDesarrolloId($bonoDesarrolloId)
	{
		$this->bonoDesarrolloId = $bonoDesarrolloId;
	}
	public function get_bonoDesarrolloId()
	{
		return $this->bonoDesarrolloId;
	}
	public function set_bonoDesarrollo($bonoDesarrollo)
	{
		$this->bonoDesarrollo = $bonoDesarrollo;
	}
	public function get_bonoDesarrollo()
	{
		return $this->bonoDesarrollo;
	}

	public function set_bonodesarrollocodigo($bonodesarrollocodigo)
	{
		$this->bonodesarrollocodigo = $bonodesarrollocodigo;
	}
	public function get_bonodesarrollocodigo()
	{
		return $this->bonodesarrollocodigo;
	}
	public function set_bonodesarrolloOculto($bonodesarrolloOculto)
	{
		$this->bonodesarrolloOculto = $bonodesarrolloOculto;
	}
	public function get_bonodesarrolloOculto()
	{
		return $this->bonodesarrolloOculto;
	}
	public function set_bonodesarrolloAccion($bonodesarrolloAccion)
	{
		$this->bonodesarrolloAccion = $bonodesarrolloAccion;
	}
	public function get_bonodesarrolloAccion()
	{
		return $this->bonodesarrolloAccion;
	}
	public function set_bonodesarrollofecha($bonodesarrollofecha)
	{
		$this->bonodesarrollofecha = $bonodesarrollofecha;
	}
	public function get_bonodesarrollofecha()
	{
		return $this->bonodesarrollofecha;
	}
	public function set_bonodesarrollouser($bonodesarrollouser)
	{
		$this->bonodesarrollouser = $bonodesarrollouser;
	}
	public function get_bonodesarrollouser()
	{
		return $this->bonodesarrollouser;
	}

	public function formatoJSON()
	{
		$myarray = array('bonoDesarrolloId' => $this->bonoDesarrolloId, 'bonoDesarrollo' => $this->bonoDesarrollo);
		return json_encode($myarray, JSON_PRETTY_PRINT);
	}
}
