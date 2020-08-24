<?php

namespace Clasesphp;

class Estudiantestitulados
{
	private $idEstudiantesTitulados;
	private $codigoITSegresados;
	private $fkinstitutosId;
	private $fkprovinciaId;
	private $fkestnumeroIdentificacion;
	private $fkcarrerasId;
	private $fkestudiantesTituladosTrabajoTitulacion;
	private $estudiantestituladosOculto;
	private $estudiantestituladosAccion;
	private $estudiantestituladosfecha;
	private $estudiantestituladosuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of idEstudiantesTitulados
	 */
	public function getIdEstudiantesTitulados()
	{
		return $this->idEstudiantesTitulados;
	}

	/**
	 * Set the value of idEstudiantesTitulados
	 *
	 * @return  self
	 */
	public function setIdEstudiantesTitulados($idEstudiantesTitulados)
	{
		$this->idEstudiantesTitulados = $idEstudiantesTitulados;

		return $this;
	}

	/**
	 * Get the value of codigoITSegresados
	 */
	public function getCodigoITSegresados()
	{
		return $this->codigoITSegresados;
	}

	/**
	 * Set the value of codigoITSegresados
	 *
	 * @return  self
	 */
	public function setCodigoITSegresados($codigoITSegresados)
	{
		$this->codigoITSegresados = $codigoITSegresados;

		return $this;
	}

	/**
	 * Get the value of fkinstitutosId
	 */
	public function getFkinstitutosId()
	{
		return $this->fkinstitutosId;
	}

	/**
	 * Set the value of fkinstitutosId
	 *
	 * @return  self
	 */
	public function setFkinstitutosId($fkinstitutosId)
	{
		$this->fkinstitutosId = $fkinstitutosId;

		return $this;
	}

	/**
	 * Get the value of fkprovinciaId
	 */
	public function getFkprovinciaId()
	{
		return $this->fkprovinciaId;
	}

	/**
	 * Set the value of fkprovinciaId
	 *
	 * @return  self
	 */
	public function setFkprovinciaId($fkprovinciaId)
	{
		$this->fkprovinciaId = $fkprovinciaId;

		return $this;
	}

	/**
	 * Get the value of fkestnumeroIdentificacion
	 */
	public function getFkestnumeroIdentificacion()
	{
		return $this->fkestnumeroIdentificacion;
	}

	/**
	 * Set the value of fkestnumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setFkestnumeroIdentificacion($fkestnumeroIdentificacion)
	{
		$this->fkestnumeroIdentificacion = $fkestnumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of fkcarrerasId
	 */
	public function getFkcarrerasId()
	{
		return $this->fkcarrerasId;
	}

	/**
	 * Set the value of fkcarrerasId
	 *
	 * @return  self
	 */
	public function setFkcarrerasId($fkcarrerasId)
	{
		$this->fkcarrerasId = $fkcarrerasId;

		return $this;
	}

	/**
	 * Get the value of fkestudiantesTituladosTrabajoTitulacion
	 */
	public function getFkestudiantesTituladosTrabajoTitulacion()
	{
		return $this->fkestudiantesTituladosTrabajoTitulacion;
	}

	/**
	 * Set the value of fkestudiantesTituladosTrabajoTitulacion
	 *
	 * @return  self
	 */
	public function setFkestudiantesTituladosTrabajoTitulacion($fkestudiantesTituladosTrabajoTitulacion)
	{
		$this->fkestudiantesTituladosTrabajoTitulacion = $fkestudiantesTituladosTrabajoTitulacion;

		return $this;
	}

	/**
	 * Get the value of estudiantestituladosOculto
	 */
	public function getEstudiantestituladosOculto()
	{
		return $this->estudiantestituladosOculto;
	}

	/**
	 * Set the value of estudiantestituladosOculto
	 *
	 * @return  self
	 */
	public function setEstudiantestituladosOculto($estudiantestituladosOculto)
	{
		$this->estudiantestituladosOculto = $estudiantestituladosOculto;

		return $this;
	}

	/**
	 * Get the value of estudiantestituladosAccion
	 */
	public function getEstudiantestituladosAccion()
	{
		return $this->estudiantestituladosAccion;
	}

	/**
	 * Set the value of estudiantestituladosAccion
	 *
	 * @return  self
	 */
	public function setEstudiantestituladosAccion($estudiantestituladosAccion)
	{
		$this->estudiantestituladosAccion = $estudiantestituladosAccion;

		return $this;
	}

	/**
	 * Get the value of estudiantestituladosfecha
	 */
	public function getEstudiantestituladosfecha()
	{
		return $this->estudiantestituladosfecha;
	}

	/**
	 * Set the value of estudiantestituladosfecha
	 *
	 * @return  self
	 */
	public function setEstudiantestituladosfecha($estudiantestituladosfecha)
	{
		$this->estudiantestituladosfecha = $estudiantestituladosfecha;

		return $this;
	}

	/**
	 * Get the value of estudiantestituladosuser
	 */
	public function getEstudiantestituladosuser()
	{
		return $this->estudiantestituladosuser;
	}

	/**
	 * Set the value of estudiantestituladosuser
	 *
	 * @return  self
	 */
	public function setEstudiantestituladosuser($estudiantestituladosuser)
	{
		$this->estudiantestituladosuser = $estudiantestituladosuser;

		return $this;
	}
}
