<?php

namespace Clasesphp;

class Aplicacionbecas
{
	private $aplicacionbecascodigo;
	private$aplicacionbecasOculto;
	private$aplicacionbecasAccion;
	private$aplicacionbecasfecha;
	private$aplicacionbecasuser;
	private $idAplicacionBecas;
	private $estudiantes_numeroIdentificacion;
	private $tipoBeca_tipoBecaId;
	private $financiamientoBeca_financiamientoBecaid;
	private $montoBeca;
	private $porcientoBecaCoberturaManuntencion;
	private $porcientoBecaCoberturaArancel;
	private $primeraRazonBeca_primeraRazonBecaId;
	private $segundaRazonBeca_segundaRazonBecaId;
	private $terceraRazonBeca_terceraRazonBecaId;
	private $cuartaRazonBeca_cuartaRazonBecaId;
	private $quintaRazonBeca_quintaRazonBecaId;
	private $sextaRazonBeca_sextaRazonBecaId;

	public function set_aplicacionbecascodigo($aplicacionbecascodigo)
	{
		$this->aplicacionbecascodigo = $aplicacionbecascodigo;
	}
	public function set_aplicacionbecasOculto($aplicacionbecasOculto)
	{
		$this->aplicacionbecasOculto = $aplicacionbecasOculto;
	}
	public function set_aplicacionbecasAccion($aplicacionbecasAccion)
	{
		$this->aplicacionbecasAccion = $aplicacionbecasAccion;
	}
	public function set_aplicacionbecasfecha($aplicacionbecasfecha)
	{
		$this->aplicacionbecasfecha = $aplicacionbecasfecha;
	}
	public function set_aplicacionbecasuser($aplicacionbecasuser)
	{
		$this->aplicacionbecasuser = $aplicacionbecasuser;
	}
	public function get_aplicacionbecascodigo()
	{
		return $this->aplicacionbecascodigo;
	}
	public function get_aplicacionbecasOculto()
	{
		return $this->aplicacionbecasOculto;
	}
	public function get_aplicacionbecasAccion()
	{
		return $this->aplicacionbecasAccion;
	}
	public function get_aplicacionbecasfecha()
	{
		return $this->aplicacionbecasfecha;
	}
	public function get_aplicacionbecasuser()
	{
		return $this->aplicacionbecasuser;
	}
	public function _construct()
	{
	}
	public function set_idAplicacionBecas($idAplicacionBecas)
	{
		$this->idAplicacionBecas = $idAplicacionBecas;
	}
	public function set_Estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion)
	{
		$this->estudiantes_numeroIdentificacion = $estudiantes_numeroIdentificacion;
	}
	public function set_TipoBeca_tipoBecaId($tipoBeca_tipoBecaId)
	{
		$this->tipoBeca_tipoBecaId = $tipoBeca_tipoBecaId;
	}
	public function set_FinanciamientoBeca_financiamientoBecaid($financiamientoBeca_financiamientoBecaid)
	{
		$this->financiamientoBeca_financiamientoBecaid = $financiamientoBeca_financiamientoBecaid;
	}
	public function set_montoBeca($montoBeca)
	{
		$this->montoBeca = $montoBeca;
	}
	public function set_porcientoBecaCoberturaManuntencion($porcientoBecaCoberturaManuntencion)
	{
		$this->porcientoBecaCoberturaManuntencion = $porcientoBecaCoberturaManuntencion;
	}
	public function set_porcientoBecaCoberturaArancel($porcientoBecaCoberturaArancel)
	{
		$this->porcientoBecaCoberturaArancel = $porcientoBecaCoberturaArancel;
	}
	public function set_PrimeraRazonBeca_primeraRazonBecaId($primeraRazonBeca_primeraRazonBecaId)
	{
		$this->primeraRazonBeca_primeraRazonBecaId = $primeraRazonBeca_primeraRazonBecaId;
	}
	public function set_SegundaRazonBeca_segundaRazonBecaId($segundaRazonBeca_segundaRazonBecaId)
	{
		$this->segundaRazonBeca_segundaRazonBecaId = $segundaRazonBeca_segundaRazonBecaId;
	}
	public function set_TerceraRazonBeca_terceraRazonBecaId($terceraRazonBeca_terceraRazonBecaId)
	{
		$this->terceraRazonBeca_terceraRazonBecaId = $terceraRazonBeca_terceraRazonBecaId;
	}
	public function set_CuartaRazonBeca_cuartaRazonBecaId($cuartaRazonBeca_cuartaRazonBecaId)
	{
		$this->cuartaRazonBeca_cuartaRazonBecaId = $cuartaRazonBeca_cuartaRazonBecaId;
	}
	public function set_QuintaRazonBeca_quintaRazonBecaId($quintaRazonBeca_quintaRazonBecaId)
	{
		$this->quintaRazonBeca_quintaRazonBecaId = $quintaRazonBeca_quintaRazonBecaId;
	}
	public function set_SextaRazonBeca_sextaRazonBecaId($sextaRazonBeca_sextaRazonBecaId)
	{
		$this->sextaRazonBeca_sextaRazonBecaId = $sextaRazonBeca_sextaRazonBecaId;
	}
	public function get_idAplicacionBecas()
	{
		return $this->idAplicacionBecas;
	}
	public function get_Estudiantes_numeroIdentificacion()
	{
		return $this->estudiantes_numeroIdentificacion;
	}
	public function get_TipoBeca_tipoBecaId()
	{
		return $this->tipoBeca_tipoBecaId;
	}
	public function get_FinanciamientoBeca_financiamientoBecaid()
	{
		return $this->financiamientoBeca_financiamientoBecaid;
	}
	public function get_montoBeca()
	{
		return $this->montoBeca;
	}
	public function get_porcientoBecaCoberturaManuntencion()
	{
		return $this->porcientoBecaCoberturaManuntencion;
	}
	public function get_porcientoBecaCoberturaArancel()
	{
		return $this->porcientoBecaCoberturaArancel;
	}
	public function get_PrimeraRazonBeca_primeraRazonBecaId()
	{
		return $this->primeraRazonBeca_primeraRazonBecaId;
	}
	public function get_SegundaRazonBeca_segundaRazonBecaId()
	{
		return $this->segundaRazonBeca_segundaRazonBecaId;
	}
	public function get_TerceraRazonBeca_terceraRazonBecaId()
	{
		return $this->terceraRazonBeca_terceraRazonBecaId;
	}
	public function get_CuartaRazonBeca_cuartaRazonBecaId()
	{
		return $this->cuartaRazonBeca_cuartaRazonBecaId;
	}
	public function get_QuintaRazonBeca_quintaRazonBecaId()
	{
		return $this->quintaRazonBeca_quintaRazonBecaId;
	}
	public function get_SextaRazonBeca_sextaRazonBecaId()
	{
		return $this->sextaRazonBeca_sextaRazonBecaId;
	}
}
