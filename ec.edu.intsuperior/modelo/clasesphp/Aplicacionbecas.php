<?php

namespace Clasesphp;

class Aplicacionbecas
{
	private $idAplicacionBecas;
	private $aplicacionbecascodigo;
	private $fktipoBecaId;
	private $fkfinanciamientoBecaid;
	private $montoBeca;
	private $porcientoBecaCoberturaManuntencion;
	private $porcientoBecaCoberturaArancel;
	private $fkprimeraRazonBecaId;
	private $fksegundaRazonBecaId;
	private $fkterceraRazonBecaId;
	private $fkcuartaRazonBecaId;
	private $fkquintaRazonBecaId;
	private $fksextaRazonBecaId;
	private $fknumeroIdentificacion;
	private $aplicacionbecasOculto;
	private $aplicacionbecasAccion;
	private $aplicacionbecasfecha;
	private $aplicacionbecasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}


	/**
	 * Get the value of aplicacionbecasuser
	 */
	public function getAplicacionbecasuser()
	{
		return $this->aplicacionbecasuser;
	}

	/**
	 * Set the value of aplicacionbecasuser
	 *
	 * @return  self
	 */
	public function setAplicacionbecasuser($aplicacionbecasuser)
	{
		$this->aplicacionbecasuser = $aplicacionbecasuser;

		return $this;
	}

	/**
	 * Get the value of aplicacionbecasfecha
	 */
	public function getAplicacionbecasfecha()
	{
		return $this->aplicacionbecasfecha;
	}

	/**
	 * Set the value of aplicacionbecasfecha
	 *
	 * @return  self
	 */
	public function setAplicacionbecasfecha($aplicacionbecasfecha)
	{
		$this->aplicacionbecasfecha = $aplicacionbecasfecha;

		return $this;
	}

	/**
	 * Get the value of aplicacionbecasAccion
	 */
	public function getAplicacionbecasAccion()
	{
		return $this->aplicacionbecasAccion;
	}

	/**
	 * Set the value of aplicacionbecasAccion
	 *
	 * @return  self
	 */
	public function setAplicacionbecasAccion($aplicacionbecasAccion)
	{
		$this->aplicacionbecasAccion = $aplicacionbecasAccion;

		return $this;
	}

	/**
	 * Get the value of aplicacionbecasOculto
	 */
	public function getAplicacionbecasOculto()
	{
		return $this->aplicacionbecasOculto;
	}

	/**
	 * Set the value of aplicacionbecasOculto
	 *
	 * @return  self
	 */
	public function setAplicacionbecasOculto($aplicacionbecasOculto)
	{
		$this->aplicacionbecasOculto = $aplicacionbecasOculto;

		return $this;
	}

	/**
	 * Get the value of fknumeroIdentificacion
	 */
	public function getFknumeroIdentificacion()
	{
		return $this->fknumeroIdentificacion;
	}

	/**
	 * Set the value of fknumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setFknumeroIdentificacion($fknumeroIdentificacion)
	{
		$this->fknumeroIdentificacion = $fknumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of fksextaRazonBecaId
	 */
	public function getFksextaRazonBecaId()
	{
		return $this->fksextaRazonBecaId;
	}

	/**
	 * Set the value of fksextaRazonBecaId
	 *
	 * @return  self
	 */
	public function setFksextaRazonBecaId($fksextaRazonBecaId)
	{
		$this->fksextaRazonBecaId = $fksextaRazonBecaId;

		return $this;
	}

	/**
	 * Get the value of fkquintaRazonBecaId
	 */
	public function getFkquintaRazonBecaId()
	{
		return $this->fkquintaRazonBecaId;
	}

	/**
	 * Set the value of fkquintaRazonBecaId
	 *
	 * @return  self
	 */
	public function setFkquintaRazonBecaId($fkquintaRazonBecaId)
	{
		$this->fkquintaRazonBecaId = $fkquintaRazonBecaId;

		return $this;
	}

	/**
	 * Get the value of fkcuartaRazonBecaId
	 */
	public function getFkcuartaRazonBecaId()
	{
		return $this->fkcuartaRazonBecaId;
	}

	/**
	 * Set the value of fkcuartaRazonBecaId
	 *
	 * @return  self
	 */
	public function setFkcuartaRazonBecaId($fkcuartaRazonBecaId)
	{
		$this->fkcuartaRazonBecaId = $fkcuartaRazonBecaId;

		return $this;
	}

	/**
	 * Get the value of fkterceraRazonBecaId
	 */
	public function getFkterceraRazonBecaId()
	{
		return $this->fkterceraRazonBecaId;
	}

	/**
	 * Set the value of fkterceraRazonBecaId
	 *
	 * @return  self
	 */
	public function setFkterceraRazonBecaId($fkterceraRazonBecaId)
	{
		$this->fkterceraRazonBecaId = $fkterceraRazonBecaId;

		return $this;
	}

	/**
	 * Get the value of fksegundaRazonBecaId
	 */
	public function getFksegundaRazonBecaId()
	{
		return $this->fksegundaRazonBecaId;
	}

	/**
	 * Set the value of fksegundaRazonBecaId
	 *
	 * @return  self
	 */
	public function setFksegundaRazonBecaId($fksegundaRazonBecaId)
	{
		$this->fksegundaRazonBecaId = $fksegundaRazonBecaId;

		return $this;
	}

	/**
	 * Get the value of fkprimeraRazonBecaId
	 */
	public function getFkprimeraRazonBecaId()
	{
		return $this->fkprimeraRazonBecaId;
	}

	/**
	 * Set the value of fkprimeraRazonBecaId
	 *
	 * @return  self
	 */
	public function setFkprimeraRazonBecaId($fkprimeraRazonBecaId)
	{
		$this->fkprimeraRazonBecaId = $fkprimeraRazonBecaId;

		return $this;
	}

	/**
	 * Get the value of porcientoBecaCoberturaArancel
	 */
	public function getPorcientoBecaCoberturaArancel()
	{
		return $this->porcientoBecaCoberturaArancel;
	}

	/**
	 * Set the value of porcientoBecaCoberturaArancel
	 *
	 * @return  self
	 */
	public function setPorcientoBecaCoberturaArancel($porcientoBecaCoberturaArancel)
	{
		$this->porcientoBecaCoberturaArancel = $porcientoBecaCoberturaArancel;

		return $this;
	}

	/**
	 * Get the value of porcientoBecaCoberturaManuntencion
	 */
	public function getPorcientoBecaCoberturaManuntencion()
	{
		return $this->porcientoBecaCoberturaManuntencion;
	}

	/**
	 * Set the value of porcientoBecaCoberturaManuntencion
	 *
	 * @return  self
	 */
	public function setPorcientoBecaCoberturaManuntencion($porcientoBecaCoberturaManuntencion)
	{
		$this->porcientoBecaCoberturaManuntencion = $porcientoBecaCoberturaManuntencion;

		return $this;
	}

	/**
	 * Get the value of montoBeca
	 */
	public function getMontoBeca()
	{
		return $this->montoBeca;
	}

	/**
	 * Set the value of montoBeca
	 *
	 * @return  self
	 */
	public function setMontoBeca($montoBeca)
	{
		$this->montoBeca = $montoBeca;

		return $this;
	}

	/**
	 * Get the value of fkfinanciamientoBecaid
	 */
	public function getFkfinanciamientoBecaid()
	{
		return $this->fkfinanciamientoBecaid;
	}

	/**
	 * Set the value of fkfinanciamientoBecaid
	 *
	 * @return  self
	 */
	public function setFkfinanciamientoBecaid($fkfinanciamientoBecaid)
	{
		$this->fkfinanciamientoBecaid = $fkfinanciamientoBecaid;

		return $this;
	}

	/**
	 * Get the value of fktipoBecaId
	 */
	public function getFktipoBecaId()
	{
		return $this->fktipoBecaId;
	}

	/**
	 * Set the value of fktipoBecaId
	 *
	 * @return  self
	 */
	public function setFktipoBecaId($fktipoBecaId)
	{
		$this->fktipoBecaId = $fktipoBecaId;

		return $this;
	}

	/**
	 * Get the value of aplicacionbecascodigo
	 */
	public function getAplicacionbecascodigo()
	{
		return $this->aplicacionbecascodigo;
	}

	/**
	 * Set the value of aplicacionbecascodigo
	 *
	 * @return  self
	 */
	public function setAplicacionbecascodigo($aplicacionbecascodigo)
	{
		$this->aplicacionbecascodigo = $aplicacionbecascodigo;

		return $this;
	}

	/**
	 * Get the value of idAplicacionBecas
	 */
	public function getIdAplicacionBecas()
	{
		return $this->idAplicacionBecas;
	}

	/**
	 * Set the value of idAplicacionBecas
	 *
	 * @return  self
	 */
	public function setIdAplicacionBecas($idAplicacionBecas)
	{
		$this->idAplicacionBecas = $idAplicacionBecas;

		return $this;
	}
}
