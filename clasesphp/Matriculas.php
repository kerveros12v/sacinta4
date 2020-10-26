<?php

namespace Clasesphp;

class Matriculas
{
	private $matriculasId;
	private $codigoMatricula;
	private $fechaMatricula;
	private $montoCreditoEducativo;
	private $montoAyudaEconomica;
	private $fechainicioCarrera;
	private $enumeroIdentificacion;
	private $ccarrerasId;
	private $jjornadaAcademicaId;
	private $pperiodoacademicoId;
	private $pparaleloId;
	private $ttipoMatriculaId;
	private $nnivelAcademicoQueCursaId;
	private $rrecibePensionDiferenciadaId;
	private $eestudianteOcupacionId;
	private $bbonoDesarrolloId;
	private $iingresosestudianteId;
	private $hhaRepetidoAlMenosUnaMateriaid;
	private $hhaPerdidoLaGratuidadId;
	private $ingresoTotalHogar;
	private $fkNivelFormacionMadre;
	private $fkNivelFormacionPadre;
	private $cantidadMiembrosHogar;
	private $matriculasOculto;
	private $matriculasAccion;
	private $matriculasfecha;
	private $matriculasuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of matriculasId
	 */
	public function getMatriculasId()
	{
		return $this->matriculasId;
	}

	/**
	 * Set the value of matriculasId
	 *
	 * @return  self
	 */
	public function setMatriculasId($matriculasId)
	{
		$this->matriculasId = $matriculasId;

		return $this;
	}

	/**
	 * Get the value of codigoMatricula
	 */
	public function getCodigoMatricula()
	{
		return $this->codigoMatricula;
	}

	/**
	 * Set the value of codigoMatricula
	 *
	 * @return  self
	 */
	public function setCodigoMatricula($codigoMatricula)
	{
		$this->codigoMatricula = $codigoMatricula;

		return $this;
	}

	/**
	 * Get the value of fechaMatricula
	 */
	public function getFechaMatricula()
	{
		return $this->fechaMatricula;
	}

	/**
	 * Set the value of fechaMatricula
	 *
	 * @return  self
	 */
	public function setFechaMatricula($fechaMatricula)
	{
		$this->fechaMatricula = $fechaMatricula;

		return $this;
	}

	/**
	 * Get the value of montoCreditoEducativo
	 */
	public function getMontoCreditoEducativo()
	{
		return $this->montoCreditoEducativo;
	}

	/**
	 * Set the value of montoCreditoEducativo
	 *
	 * @return  self
	 */
	public function setMontoCreditoEducativo($montoCreditoEducativo)
	{
		$this->montoCreditoEducativo = $montoCreditoEducativo;

		return $this;
	}

	/**
	 * Get the value of montoAyudaEconomica
	 */
	public function getMontoAyudaEconomica()
	{
		return $this->montoAyudaEconomica;
	}

	/**
	 * Set the value of montoAyudaEconomica
	 *
	 * @return  self
	 */
	public function setMontoAyudaEconomica($montoAyudaEconomica)
	{
		$this->montoAyudaEconomica = $montoAyudaEconomica;

		return $this;
	}

	/**
	 * Get the value of fechainicioCarrera
	 */
	public function getFechainicioCarrera()
	{
		return $this->fechainicioCarrera;
	}

	/**
	 * Set the value of fechainicioCarrera
	 *
	 * @return  self
	 */
	public function setFechainicioCarrera($fechainicioCarrera)
	{
		$this->fechainicioCarrera = $fechainicioCarrera;

		return $this;
	}

	/**
	 * Get the value of enumeroIdentificacion
	 */
	public function getEnumeroIdentificacion()
	{
		return $this->enumeroIdentificacion;
	}

	/**
	 * Set the value of enumeroIdentificacion
	 *
	 * @return  self
	 */
	public function setEnumeroIdentificacion($enumeroIdentificacion)
	{
		$this->enumeroIdentificacion = $enumeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of ccarrerasId
	 */
	public function getCcarrerasId()
	{
		return $this->ccarrerasId;
	}

	/**
	 * Set the value of ccarrerasId
	 *
	 * @return  self
	 */
	public function setCcarrerasId($ccarrerasId)
	{
		$this->ccarrerasId = $ccarrerasId;

		return $this;
	}

	/**
	 * Get the value of jjornadaAcademicaId
	 */
	public function getJjornadaAcademicaId()
	{
		return $this->jjornadaAcademicaId;
	}

	/**
	 * Set the value of jjornadaAcademicaId
	 *
	 * @return  self
	 */
	public function setJjornadaAcademicaId($jjornadaAcademicaId)
	{
		$this->jjornadaAcademicaId = $jjornadaAcademicaId;

		return $this;
	}

	/**
	 * Get the value of pperiodoacademicoId
	 */
	public function getPperiodoacademicoId()
	{
		return $this->pperiodoacademicoId;
	}

	/**
	 * Set the value of pperiodoacademicoId
	 *
	 * @return  self
	 */
	public function setPperiodoacademicoId($pperiodoacademicoId)
	{
		$this->pperiodoacademicoId = $pperiodoacademicoId;

		return $this;
	}

	/**
	 * Get the value of pparaleloId
	 */
	public function getPparaleloId()
	{
		return $this->pparaleloId;
	}

	/**
	 * Set the value of pparaleloId
	 *
	 * @return  self
	 */
	public function setPparaleloId($pparaleloId)
	{
		$this->pparaleloId = $pparaleloId;

		return $this;
	}

	/**
	 * Get the value of ttipoMatriculaId
	 */
	public function getTtipoMatriculaId()
	{
		return $this->ttipoMatriculaId;
	}

	/**
	 * Set the value of ttipoMatriculaId
	 *
	 * @return  self
	 */
	public function setTtipoMatriculaId($ttipoMatriculaId)
	{
		$this->ttipoMatriculaId = $ttipoMatriculaId;

		return $this;
	}

	/**
	 * Get the value of nnivelAcademicoQueCursaId
	 */
	public function getNnivelAcademicoQueCursaId()
	{
		return $this->nnivelAcademicoQueCursaId;
	}

	/**
	 * Set the value of nnivelAcademicoQueCursaId
	 *
	 * @return  self
	 */
	public function setNnivelAcademicoQueCursaId($nnivelAcademicoQueCursaId)
	{
		$this->nnivelAcademicoQueCursaId = $nnivelAcademicoQueCursaId;

		return $this;
	}

	/**
	 * Get the value of rrecibePensionDiferenciadaId
	 */
	public function getRrecibePensionDiferenciadaId()
	{
		return $this->rrecibePensionDiferenciadaId;
	}

	/**
	 * Set the value of rrecibePensionDiferenciadaId
	 *
	 * @return  self
	 */
	public function setRrecibePensionDiferenciadaId($rrecibePensionDiferenciadaId)
	{
		$this->rrecibePensionDiferenciadaId = $rrecibePensionDiferenciadaId;

		return $this;
	}

	/**
	 * Get the value of eestudianteOcupacionId
	 */
	public function getEestudianteOcupacionId()
	{
		return $this->eestudianteOcupacionId;
	}

	/**
	 * Set the value of eestudianteOcupacionId
	 *
	 * @return  self
	 */
	public function setEestudianteOcupacionId($eestudianteOcupacionId)
	{
		$this->eestudianteOcupacionId = $eestudianteOcupacionId;

		return $this;
	}

	/**
	 * Get the value of bbonoDesarrolloId
	 */
	public function getBbonoDesarrolloId()
	{
		return $this->bbonoDesarrolloId;
	}

	/**
	 * Set the value of bbonoDesarrolloId
	 *
	 * @return  self
	 */
	public function setBbonoDesarrolloId($bbonoDesarrolloId)
	{
		$this->bbonoDesarrolloId = $bbonoDesarrolloId;

		return $this;
	}

	/**
	 * Get the value of iingresosestudianteId
	 */
	public function getIingresosestudianteId()
	{
		return $this->iingresosestudianteId;
	}

	/**
	 * Set the value of iingresosestudianteId
	 *
	 * @return  self
	 */
	public function setIingresosestudianteId($iingresosestudianteId)
	{
		$this->iingresosestudianteId = $iingresosestudianteId;

		return $this;
	}

	/**
	 * Get the value of hhaRepetidoAlMenosUnaMateriaid
	 */
	public function getHhaRepetidoAlMenosUnaMateriaid()
	{
		return $this->hhaRepetidoAlMenosUnaMateriaid;
	}

	/**
	 * Set the value of hhaRepetidoAlMenosUnaMateriaid
	 *
	 * @return  self
	 */
	public function setHhaRepetidoAlMenosUnaMateriaid($hhaRepetidoAlMenosUnaMateriaid)
	{
		$this->hhaRepetidoAlMenosUnaMateriaid = $hhaRepetidoAlMenosUnaMateriaid;

		return $this;
	}

	/**
	 * Get the value of hhaPerdidoLaGratuidadId
	 */
	public function getHhaPerdidoLaGratuidadId()
	{
		return $this->hhaPerdidoLaGratuidadId;
	}

	/**
	 * Set the value of hhaPerdidoLaGratuidadId
	 *
	 * @return  self
	 */
	public function setHhaPerdidoLaGratuidadId($hhaPerdidoLaGratuidadId)
	{
		$this->hhaPerdidoLaGratuidadId = $hhaPerdidoLaGratuidadId;

		return $this;
	}

	/**
	 * Get the value of ingresoTotalHogar
	 */
	public function getIngresoTotalHogar()
	{
		return $this->ingresoTotalHogar;
	}

	/**
	 * Set the value of ingresoTotalHogar
	 *
	 * @return  self
	 */
	public function setIngresoTotalHogar($ingresoTotalHogar)
	{
		$this->ingresoTotalHogar = $ingresoTotalHogar;

		return $this;
	}

	/**
	 * Get the value of fkNivelFormacionMadre
	 */
	public function getFkNivelFormacionMadre()
	{
		return $this->fkNivelFormacionMadre;
	}

	/**
	 * Set the value of fkNivelFormacionMadre
	 *
	 * @return  self
	 */
	public function setFkNivelFormacionMadre($fkNivelFormacionMadre)
	{
		$this->fkNivelFormacionMadre = $fkNivelFormacionMadre;

		return $this;
	}

	/**
	 * Get the value of fkNivelFormacionPadre
	 */
	public function getFkNivelFormacionPadre()
	{
		return $this->fkNivelFormacionPadre;
	}

	/**
	 * Set the value of fkNivelFormacionPadre
	 *
	 * @return  self
	 */
	public function setFkNivelFormacionPadre($fkNivelFormacionPadre)
	{
		$this->fkNivelFormacionPadre = $fkNivelFormacionPadre;

		return $this;
	}

	/**
	 * Get the value of cantidadMiembrosHogar
	 */
	public function getCantidadMiembrosHogar()
	{
		return $this->cantidadMiembrosHogar;
	}

	/**
	 * Set the value of cantidadMiembrosHogar
	 *
	 * @return  self
	 */
	public function setCantidadMiembrosHogar($cantidadMiembrosHogar)
	{
		$this->cantidadMiembrosHogar = $cantidadMiembrosHogar;

		return $this;
	}

	/**
	 * Get the value of matriculasOculto
	 */
	public function getMatriculasOculto()
	{
		return $this->matriculasOculto;
	}

	/**
	 * Set the value of matriculasOculto
	 *
	 * @return  self
	 */
	public function setMatriculasOculto($matriculasOculto)
	{
		$this->matriculasOculto = $matriculasOculto;

		return $this;
	}

	/**
	 * Get the value of matriculasAccion
	 */
	public function getMatriculasAccion()
	{
		return $this->matriculasAccion;
	}

	/**
	 * Set the value of matriculasAccion
	 *
	 * @return  self
	 */
	public function setMatriculasAccion($matriculasAccion)
	{
		$this->matriculasAccion = $matriculasAccion;

		return $this;
	}

	/**
	 * Get the value of matriculasfecha
	 */
	public function getMatriculasfecha()
	{
		return $this->matriculasfecha;
	}

	/**
	 * Set the value of matriculasfecha
	 *
	 * @return  self
	 */
	public function setMatriculasfecha($matriculasfecha)
	{
		$this->matriculasfecha = $matriculasfecha;

		return $this;
	}

	/**
	 * Get the value of matriculasuser
	 */
	public function getMatriculasuser()
	{
		return $this->matriculasuser;
	}

	/**
	 * Set the value of matriculasuser
	 *
	 * @return  self
	 */
	public function setMatriculasuser($matriculasuser)
	{
		$this->matriculasuser = $matriculasuser;

		return $this;
	}
	public function __toString()
	{
		return "matriculasId{" . $this->matriculasId .
			"}codigoMatricula{" . $this->codigoMatricula .
			"}fechaMatricula{" . $this->fechaMatricula .
			"}montoCreditoEducativo{" . $this->montoCreditoEducativo .
			"}montoAyudaEconomica{" . $this->montoAyudaEconomica .
			"}fechainicioCarrera{" . $this->fechainicioCarrera .
			"}enumeroIdentificacion{" . $this->enumeroIdentificacion .
			"}ccarrerasId{" . $this->ccarrerasId .
			"}jjornadaAcademicaId{" . $this->jjornadaAcademicaId .
			"}pperiodoacademicoId{" . $this->pperiodoacademicoId .
			"}pparaleloId{" . $this->pparaleloId .
			"}ttipoMatriculaId{" . $this->ttipoMatriculaId .
			"}nnivelAcademicoQueCursaId{" . $this->nnivelAcademicoQueCursaId .
			"}rrecibePensionDiferenciadaId{" . $this->rrecibePensionDiferenciadaId .
			"}eestudianteOcupacionId{" . $this->eestudianteOcupacionId .
			"}bbonoDesarrolloId{" . $this->bbonoDesarrolloId .
			"}iingresosestudianteId{" . $this->iingresosestudianteId .
			"}hhaRepetidoAlMenosUnaMateriaid{" . $this->hhaRepetidoAlMenosUnaMateriaid .
			"}hhaPerdidoLaGratuidadId{" . $this->hhaPerdidoLaGratuidadId .
			"}ingresoTotalHogar{" . $this->ingresoTotalHogar .
			"}fkNivelFormacionMadre{" . $this->fkNivelFormacionMadre .
			"}fkNivelFormacionPadre{" . $this->fkNivelFormacionPadre .
			"}cantidadMiembrosHogar{" . $this->cantidadMiembrosHogar .
			"}matriculasOculto{" . $this->matriculasOculto .
			"}matriculasAccion{" . $this->matriculasAccion .
			"}matriculasfecha{" . $this->matriculasfecha .
			"}matriculasuser{" . $this->matriculasuser . "}";
	}
}
