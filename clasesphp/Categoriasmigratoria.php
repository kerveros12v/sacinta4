<?php

namespace Clasesphp;

class Categoriasmigratoria
{
	private $categoriaMigratoriaId;
	private $categoriaMigratoria;
	private $categoriasmigratoriacodigo,  $categoriasmigratoriaOculto, $categoriasmigratoriaAccion, $categoriasmigratoriafecha, $categoriasmigratoriauser;

	public function _construct()
	{
	}
	public function set_categoriasmigratoriauser($categoriasmigratoriauser)
	{
		$this->categoriasmigratoriauser = $categoriasmigratoriauser;
	}
	public function get_categoriasmigratoriauser()
	{
		return $this->categoriasmigratoriauser;
	}
	public function set_categoriasmigratoriafecha($categoriasmigratoriafecha)
	{
		$this->categoriasmigratoriafecha = $categoriasmigratoriafecha;
	}
	public function get_categoriasmigratoriafecha()
	{
		return $this->categoriasmigratoriafecha;
	}
	public function set_categoriasmigratoriaAccion($categoriasmigratoriaAccion)
	{
		$this->categoriasmigratoriaAccion = $categoriasmigratoriaAccion;
	}
	public function get_categoriasmigratoriaAccion()
	{
		return $this->categoriasmigratoriaAccion;
	}
	public function set_categoriasmigratoriaOculto($categoriasmigratoriaOculto)
	{
		$this->categoriasmigratoriaOculto = $categoriasmigratoriaOculto;
	}
	public function get_categoriasmigratoriaOculto()
	{
		return $this->categoriasmigratoriaOculto;
	}
	public function set_categoriasmigratoriacodigo($categoriasmigratoriacodigo)
	{
		$this->categoriasmigratoriacodigo = $categoriasmigratoriacodigo;
	}
	public function get_categoriasmigratoriacodigo()
	{
		return $this->categoriasmigratoriacodigo;
	}

	public function set_categoriaMigratoriaId($categoriaMigratoriaId)
	{
		$this->categoriaMigratoriaId = $categoriaMigratoriaId;
	}
	public function get_categoriaMigratoriaId()
	{
		return $this->categoriaMigratoriaId;
	}
	public function set_categoriaMigratoria($categoriaMigratoria)
	{
		$this->categoriaMigratoria = $categoriaMigratoria;
	}
	public function get_categoriaMigratoria()
	{
		return $this->categoriaMigratoria;
	}
	public function formatoJSON()
	{
		$myarray = array('categoriaMigratoriaId' => $this->categoriaMigratoriaId, 'categoriaMigratoria' => $this->categoriaMigratoria);
		return json_encode($myarray, JSON_PRETTY_PRINT);
	}
}
