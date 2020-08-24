<?php

namespace Clasesphp;

class Bimestres
{
	private $idBimestres;
	private $bimestrescodigo;
	private $bimestre;
	private $bimestresOculto;
	private $bimestresAccion;
	private $bimestresfecha;
	private $bimestresuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idBimestres
	 */
	public function getIdBimestres()
	{
		return $this->idBimestres;
	}

	/**
	 * Set the value of idBimestres
	 *
	 * @return  self
	 */
	public function setIdBimestres($idBimestres)
	{
		$this->idBimestres = $idBimestres;

		return $this;
	}

	/**
	 * Get the value of bimestrescodigo
	 */
	public function getBimestrescodigo()
	{
		return $this->bimestrescodigo;
	}

	/**
	 * Set the value of bimestrescodigo
	 *
	 * @return  self
	 */
	public function setBimestrescodigo($bimestrescodigo)
	{
		$this->bimestrescodigo = $bimestrescodigo;

		return $this;
	}

	/**
	 * Get the value of bimestre
	 */
	public function getBimestre()
	{
		return $this->bimestre;
	}

	/**
	 * Set the value of bimestre
	 *
	 * @return  self
	 */
	public function setBimestre($bimestre)
	{
		$this->bimestre = $bimestre;

		return $this;
	}

	/**
	 * Get the value of bimestresOculto
	 */
	public function getBimestresOculto()
	{
		return $this->bimestresOculto;
	}

	/**
	 * Set the value of bimestresOculto
	 *
	 * @return  self
	 */
	public function setBimestresOculto($bimestresOculto)
	{
		$this->bimestresOculto = $bimestresOculto;

		return $this;
	}

	/**
	 * Get the value of bimestresAccion
	 */
	public function getBimestresAccion()
	{
		return $this->bimestresAccion;
	}

	/**
	 * Set the value of bimestresAccion
	 *
	 * @return  self
	 */
	public function setBimestresAccion($bimestresAccion)
	{
		$this->bimestresAccion = $bimestresAccion;

		return $this;
	}

	/**
	 * Get the value of bimestresfecha
	 */
	public function getBimestresfecha()
	{
		return $this->bimestresfecha;
	}

	/**
	 * Set the value of bimestresfecha
	 *
	 * @return  self
	 */
	public function setBimestresfecha($bimestresfecha)
	{
		$this->bimestresfecha = $bimestresfecha;

		return $this;
	}

	/**
	 * Get the value of bimestresuser
	 */
	public function getBimestresuser()
	{
		return $this->bimestresuser;
	}

	/**
	 * Set the value of bimestresuser
	 *
	 * @return  self
	 */
	public function setBimestresuser($bimestresuser)
	{
		$this->bimestresuser = $bimestresuser;

		return $this;
	}
}
