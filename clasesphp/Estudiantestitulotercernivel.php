<?php

namespace Clasesphp;

class Estudiantestitulotercernivel
{
	private $etnid;
	private $estudiantesNumeroIdentificacion;
	private $etnTituloTercerNivelId;
	private $etnOculto;
	private $etnAccion;
	private $etnfecha;
	private $etnuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of etnid
	 */
	public function getEtnid()
	{
		return $this->etnid;
	}

	/**
	 * Set the value of etnid
	 *
	 * @return  self
	 */
	public function setEtnid($etnid)
	{
		$this->etnid = $etnid;

		return $this;
	}

	/**
	 * Get the value of estudiantesNumeroIdentificacion
	 */
	public function getEstudiantesNumeroIdentificacion()
	{
		return $this->estudiantesNumeroIdentificacion;
	}

	/**
	 * Set the value of estudiantesNumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setEstudiantesNumeroIdentificacion($estudiantesNumeroIdentificacion)
	{
		$this->estudiantesNumeroIdentificacion = $estudiantesNumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of etnTituloTercerNivelId
	 */
	public function getEtnTituloTercerNivelId()
	{
		return $this->etnTituloTercerNivelId;
	}

	/**
	 * Set the value of etnTituloTercerNivelId
	 *
	 * @return  self
	 */
	public function setEtnTituloTercerNivelId($etnTituloTercerNivelId)
	{
		$this->etnTituloTercerNivelId = $etnTituloTercerNivelId;

		return $this;
	}

	/**
	 * Get the value of etnOculto
	 */
	public function getEtnOculto()
	{
		return $this->etnOculto;
	}

	/**
	 * Set the value of etnOculto
	 *
	 * @return  self
	 */
	public function setEtnOculto($etnOculto)
	{
		$this->etnOculto = $etnOculto;

		return $this;
	}

	/**
	 * Get the value of etnAccion
	 */
	public function getEtnAccion()
	{
		return $this->etnAccion;
	}

	/**
	 * Set the value of etnAccion
	 *
	 * @return  self
	 */
	public function setEtnAccion($etnAccion)
	{
		$this->etnAccion = $etnAccion;

		return $this;
	}

	/**
	 * Get the value of etnfecha
	 */
	public function getEtnfecha()
	{
		return $this->etnfecha;
	}

	/**
	 * Set the value of etnfecha
	 *
	 * @return  self
	 */
	public function setEtnfecha($etnfecha)
	{
		$this->etnfecha = $etnfecha;

		return $this;
	}

	/**
	 * Get the value of etnuser
	 */
	public function getEtnuser()
	{
		return $this->etnuser;
	}

	/**
	 * Set the value of etnuser
	 *
	 * @return  self
	 */
	public function setEtnuser($etnuser)
	{
		$this->etnuser = $etnuser;

		return $this;
	}
	public function __toString()
	{
		return 	"etnid{" . $this->etnid .
			"}estudiantesNumeroIdentificacion{" . $this->estudiantesNumeroIdentificacion .
			"}etnTituloTercerNivelId{" . $this->etnTituloTercerNivelId .
			"}etnOculto{" . $this->etnOculto .
			"}etnAccion{" . $this->etnAccion .
			"}etnfecha{" . $this->etnfecha .
			"}etnuser{" . $this->etnuser . "}";
	}
}
