<?php

namespace Clasesphp;

class Categoriasmigratoria
{
	private $categoriaMigratoriaId;
	private $categoriasmigratoriacodigo;
	private $categoriaMigratoria;
	private $categoriasmigratoriaOculto;
	private $categoriasmigratoriaAccion;
	private $categoriasmigratoriafecha;
	private $categoriasmigratoriauser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of categoriaMigratoriaId
	 */
	public function getCategoriaMigratoriaId()
	{
		return $this->categoriaMigratoriaId;
	}

	/**
	 * Set the value of categoriaMigratoriaId
	 *
	 * @return  self
	 */
	public function setCategoriaMigratoriaId($categoriaMigratoriaId)
	{
		$this->categoriaMigratoriaId = $categoriaMigratoriaId;

		return $this;
	}

	/**
	 * Get the value of categoriasmigratoriacodigo
	 */
	public function getCategoriasmigratoriacodigo()
	{
		return $this->categoriasmigratoriacodigo;
	}

	/**
	 * Set the value of categoriasmigratoriacodigo
	 *
	 * @return  self
	 */
	public function setCategoriasmigratoriacodigo($categoriasmigratoriacodigo)
	{
		$this->categoriasmigratoriacodigo = $categoriasmigratoriacodigo;

		return $this;
	}

	/**
	 * Get the value of categoriaMigratoria
	 */
	public function getCategoriaMigratoria()
	{
		return $this->categoriaMigratoria;
	}

	/**
	 * Set the value of categoriaMigratoria
	 *
	 * @return  self
	 */
	public function setCategoriaMigratoria($categoriaMigratoria)
	{
		$this->categoriaMigratoria = $categoriaMigratoria;

		return $this;
	}

	/**
	 * Get the value of categoriasmigratoriaOculto
	 */
	public function getCategoriasmigratoriaOculto()
	{
		return $this->categoriasmigratoriaOculto;
	}

	/**
	 * Set the value of categoriasmigratoriaOculto
	 *
	 * @return  self
	 */
	public function setCategoriasmigratoriaOculto($categoriasmigratoriaOculto)
	{
		$this->categoriasmigratoriaOculto = $categoriasmigratoriaOculto;

		return $this;
	}

	/**
	 * Get the value of categoriasmigratoriaAccion
	 */
	public function getCategoriasmigratoriaAccion()
	{
		return $this->categoriasmigratoriaAccion;
	}

	/**
	 * Set the value of categoriasmigratoriaAccion
	 *
	 * @return  self
	 */
	public function setCategoriasmigratoriaAccion($categoriasmigratoriaAccion)
	{
		$this->categoriasmigratoriaAccion = $categoriasmigratoriaAccion;

		return $this;
	}

	/**
	 * Get the value of categoriasmigratoriafecha
	 */
	public function getCategoriasmigratoriafecha()
	{
		return $this->categoriasmigratoriafecha;
	}

	/**
	 * Set the value of categoriasmigratoriafecha
	 *
	 * @return  self
	 */
	public function setCategoriasmigratoriafecha($categoriasmigratoriafecha)
	{
		$this->categoriasmigratoriafecha = $categoriasmigratoriafecha;

		return $this;
	}

	/**
	 * Get the value of categoriasmigratoriauser
	 */
	public function getCategoriasmigratoriauser()
	{
		return $this->categoriasmigratoriauser;
	}

	/**
	 * Set the value of categoriasmigratoriauser
	 *
	 * @return  self
	 */
	public function setCategoriasmigratoriauser($categoriasmigratoriauser)
	{
		$this->categoriasmigratoriauser = $categoriasmigratoriauser;

		return $this;
	}
	public function __toString()
	{
		return $this->categoriaMigratoria;
	}
}
