<?php

namespace Clasesphp;

class Docentes
{
	private $tipodocumentoId;
	private $numeroIdentificacion;
	private $primerApellido;
	private $segundoApellido;
	private $primerNombre;
	private $segundoNombre;
	private $fkDocenteSexoId;
	private $fkDocenteGeneroId;
	private $fkDocenteEstadocivilId;
	private $fkDocenteEtniaId;
	private $fkDocentePuebloNacionalidadId;
	private $direccionDomiciliaria;
	private $fkDocenteProvinciaSufragio;
	private $numeroCelular;
	private $correoElectronico;
	private $numDomicilio;
	private $fkDocenteTipoEnfermedadCatastroficaId;
	private $fechaNacimiento;
	private $fkDocentePaisNacionalidadId;
	private $fechaIngresoIES;
	private $fechaSalidaIES;
	private $fkDocenteRelacionLaboralIESId;
	private $fkDocenteEscalafonDocenteId;
	private $fkDocenteIngresoConConcursoMeritosId;
	private $fkDocenteCargoDirectivoId;
	private $nombreUnidadAcademica;
	private $nroasignaturasdocente;
	private $nroHorasLaborablesSemanaEnCarreraPrograma;
	private $nroHorasClaseSemanaCarreraPrograma;
	private $nroHorasInvestigacionSemanaCarreraPrograma;
	private $nroHorasAdministrativasSemanaCarreraPrograma;
	private $nroHorasOtrasActividadesSemanaCarreraPrograma;
	private $nroHorasVinculacionSociedad;
	private $salarioMensual;
	private $fkDocenteDocenciaTecnicoSuperiorId;
	private $fkDocenteDocenciaTecnologicoId;
	private $fkDocenteEstaEnPeriodoSabaticoId;
	private $fechaInicioPeriodoSabatico;
	private $fkDocenteEstaCursandoEstudiosId;
	private $fkDocenteInstitucionDondeCursaEstudiosId;
	private $fkDocentePaisEstudiosId;
	private $tituloAObtener;
	private $usuarioDocentes;
	private $passwordDocentes;
	private $niveDeFormacionId;
	private $accesodepartamentoIdaccesodepartamento;
	private $docentesOculto;
	private $docentesAccion;
	private $docentesfecha;
	private $docentesuser;
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Get the value of tipodocumentoId
	 */
	public function getTipodocumentoId()
	{
		return $this->tipodocumentoId;
	}

	/**
	 * Set the value of tipodocumentoId
	 *
	 * @return  self
	 */
	public function setTipodocumentoId($tipodocumentoId)
	{
		$this->tipodocumentoId = $tipodocumentoId;

		return $this;
	}

	/**
	 * Get the value of numeroIdentificacion
	 */
	public function getNumeroIdentificacion()
	{
		return $this->numeroIdentificacion;
	}

	/**
	 * Set the value of numeroIdentificacion
	 *
	 * @return  self
	 */
	public function setNumeroIdentificacion($numeroIdentificacion)
	{
		$this->numeroIdentificacion = $numeroIdentificacion;

		return $this;
	}

	/**
	 * Get the value of primerApellido
	 */
	public function getPrimerApellido()
	{
		return $this->primerApellido;
	}

	/**
	 * Set the value of primerApellido
	 *
	 * @return  self
	 */
	public function setPrimerApellido($primerApellido)
	{
		$this->primerApellido = $primerApellido;

		return $this;
	}

	/**
	 * Get the value of segundoApellido
	 */
	public function getSegundoApellido()
	{
		return $this->segundoApellido;
	}

	/**
	 * Set the value of segundoApellido
	 *
	 * @return  self
	 */
	public function setSegundoApellido($segundoApellido)
	{
		$this->segundoApellido = $segundoApellido;

		return $this;
	}

	/**
	 * Get the value of primerNombre
	 */
	public function getPrimerNombre()
	{
		return $this->primerNombre;
	}

	/**
	 * Set the value of primerNombre
	 *
	 * @return  self
	 */
	public function setPrimerNombre($primerNombre)
	{
		$this->primerNombre = $primerNombre;

		return $this;
	}

	/**
	 * Get the value of segundoNombre
	 */
	public function getSegundoNombre()
	{
		return $this->segundoNombre;
	}

	/**
	 * Set the value of segundoNombre
	 *
	 * @return  self
	 */
	public function setSegundoNombre($segundoNombre)
	{
		$this->segundoNombre = $segundoNombre;

		return $this;
	}

	/**
	 * Get the value of fkDocenteSexoId
	 */
	public function getFkDocenteSexoId()
	{
		return $this->fkDocenteSexoId;
	}

	/**
	 * Set the value of fkDocenteSexoId
	 *
	 * @return  self
	 */
	public function setFkDocenteSexoId($fkDocenteSexoId)
	{
		$this->fkDocenteSexoId = $fkDocenteSexoId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteGeneroId
	 */
	public function getFkDocenteGeneroId()
	{
		return $this->fkDocenteGeneroId;
	}

	/**
	 * Set the value of fkDocenteGeneroId
	 *
	 * @return  self
	 */
	public function setFkDocenteGeneroId($fkDocenteGeneroId)
	{
		$this->fkDocenteGeneroId = $fkDocenteGeneroId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteEstadocivilId
	 */
	public function getFkDocenteEstadocivilId()
	{
		return $this->fkDocenteEstadocivilId;
	}

	/**
	 * Set the value of fkDocenteEstadocivilId
	 *
	 * @return  self
	 */
	public function setFkDocenteEstadocivilId($fkDocenteEstadocivilId)
	{
		$this->fkDocenteEstadocivilId = $fkDocenteEstadocivilId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteEtniaId
	 */
	public function getFkDocenteEtniaId()
	{
		return $this->fkDocenteEtniaId;
	}

	/**
	 * Set the value of fkDocenteEtniaId
	 *
	 * @return  self
	 */
	public function setFkDocenteEtniaId($fkDocenteEtniaId)
	{
		$this->fkDocenteEtniaId = $fkDocenteEtniaId;

		return $this;
	}

	/**
	 * Get the value of fkDocentePuebloNacionalidadId
	 */
	public function getFkDocentePuebloNacionalidadId()
	{
		return $this->fkDocentePuebloNacionalidadId;
	}

	/**
	 * Set the value of fkDocentePuebloNacionalidadId
	 *
	 * @return  self
	 */
	public function setFkDocentePuebloNacionalidadId($fkDocentePuebloNacionalidadId)
	{
		$this->fkDocentePuebloNacionalidadId = $fkDocentePuebloNacionalidadId;

		return $this;
	}

	/**
	 * Get the value of direccionDomiciliaria
	 */
	public function getDireccionDomiciliaria()
	{
		return $this->direccionDomiciliaria;
	}

	/**
	 * Set the value of direccionDomiciliaria
	 *
	 * @return  self
	 */
	public function setDireccionDomiciliaria($direccionDomiciliaria)
	{
		$this->direccionDomiciliaria = $direccionDomiciliaria;

		return $this;
	}

	/**
	 * Get the value of fkDocenteProvinciaSufragio
	 */
	public function getFkDocenteProvinciaSufragio()
	{
		return $this->fkDocenteProvinciaSufragio;
	}

	/**
	 * Set the value of fkDocenteProvinciaSufragio
	 *
	 * @return  self
	 */
	public function setFkDocenteProvinciaSufragio($fkDocenteProvinciaSufragio)
	{
		$this->fkDocenteProvinciaSufragio = $fkDocenteProvinciaSufragio;

		return $this;
	}

	/**
	 * Get the value of numeroCelular
	 */
	public function getNumeroCelular()
	{
		return $this->numeroCelular;
	}

	/**
	 * Set the value of numeroCelular
	 *
	 * @return  self
	 */
	public function setNumeroCelular($numeroCelular)
	{
		$this->numeroCelular = $numeroCelular;

		return $this;
	}

	/**
	 * Get the value of correoElectronico
	 */
	public function getCorreoElectronico()
	{
		return $this->correoElectronico;
	}

	/**
	 * Set the value of correoElectronico
	 *
	 * @return  self
	 */
	public function setCorreoElectronico($correoElectronico)
	{
		$this->correoElectronico = $correoElectronico;

		return $this;
	}

	/**
	 * Get the value of numDomicilio
	 */
	public function getNumDomicilio()
	{
		return $this->numDomicilio;
	}

	/**
	 * Set the value of numDomicilio
	 *
	 * @return  self
	 */
	public function setNumDomicilio($numDomicilio)
	{
		$this->numDomicilio = $numDomicilio;

		return $this;
	}

	/**
	 * Get the value of fkDocenteTipoEnfermedadCatastroficaId
	 */
	public function getFkDocenteTipoEnfermedadCatastroficaId()
	{
		return $this->fkDocenteTipoEnfermedadCatastroficaId;
	}

	/**
	 * Set the value of fkDocenteTipoEnfermedadCatastroficaId
	 *
	 * @return  self
	 */
	public function setFkDocenteTipoEnfermedadCatastroficaId($fkDocenteTipoEnfermedadCatastroficaId)
	{
		$this->fkDocenteTipoEnfermedadCatastroficaId = $fkDocenteTipoEnfermedadCatastroficaId;

		return $this;
	}

	/**
	 * Get the value of fechaNacimiento
	 */
	public function getFechaNacimiento()
	{
		return $this->fechaNacimiento;
	}

	/**
	 * Set the value of fechaNacimiento
	 *
	 * @return  self
	 */
	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento = $fechaNacimiento;

		return $this;
	}

	/**
	 * Get the value of fkDocentePaisNacionalidadId
	 */
	public function getFkDocentePaisNacionalidadId()
	{
		return $this->fkDocentePaisNacionalidadId;
	}

	/**
	 * Set the value of fkDocentePaisNacionalidadId
	 *
	 * @return  self
	 */
	public function setFkDocentePaisNacionalidadId($fkDocentePaisNacionalidadId)
	{
		$this->fkDocentePaisNacionalidadId = $fkDocentePaisNacionalidadId;

		return $this;
	}

	/**
	 * Get the value of fechaIngresoIES
	 */
	public function getFechaIngresoIES()
	{
		return $this->fechaIngresoIES;
	}

	/**
	 * Set the value of fechaIngresoIES
	 *
	 * @return  self
	 */
	public function setFechaIngresoIES($fechaIngresoIES)
	{
		$this->fechaIngresoIES = $fechaIngresoIES;

		return $this;
	}

	/**
	 * Get the value of fechaSalidaIES
	 */
	public function getFechaSalidaIES()
	{
		return $this->fechaSalidaIES;
	}

	/**
	 * Set the value of fechaSalidaIES
	 *
	 * @return  self
	 */
	public function setFechaSalidaIES($fechaSalidaIES)
	{
		$this->fechaSalidaIES = $fechaSalidaIES;

		return $this;
	}

	/**
	 * Get the value of fkDocenteRelacionLaboralIESId
	 */
	public function getFkDocenteRelacionLaboralIESId()
	{
		return $this->fkDocenteRelacionLaboralIESId;
	}

	/**
	 * Set the value of fkDocenteRelacionLaboralIESId
	 *
	 * @return  self
	 */
	public function setFkDocenteRelacionLaboralIESId($fkDocenteRelacionLaboralIESId)
	{
		$this->fkDocenteRelacionLaboralIESId = $fkDocenteRelacionLaboralIESId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteEscalafonDocenteId
	 */
	public function getFkDocenteEscalafonDocenteId()
	{
		return $this->fkDocenteEscalafonDocenteId;
	}

	/**
	 * Set the value of fkDocenteEscalafonDocenteId
	 *
	 * @return  self
	 */
	public function setFkDocenteEscalafonDocenteId($fkDocenteEscalafonDocenteId)
	{
		$this->fkDocenteEscalafonDocenteId = $fkDocenteEscalafonDocenteId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteIngresoConConcursoMeritosId
	 */
	public function getFkDocenteIngresoConConcursoMeritosId()
	{
		return $this->fkDocenteIngresoConConcursoMeritosId;
	}

	/**
	 * Set the value of fkDocenteIngresoConConcursoMeritosId
	 *
	 * @return  self
	 */
	public function setFkDocenteIngresoConConcursoMeritosId($fkDocenteIngresoConConcursoMeritosId)
	{
		$this->fkDocenteIngresoConConcursoMeritosId = $fkDocenteIngresoConConcursoMeritosId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteCargoDirectivoId
	 */
	public function getFkDocenteCargoDirectivoId()
	{
		return $this->fkDocenteCargoDirectivoId;
	}

	/**
	 * Set the value of fkDocenteCargoDirectivoId
	 *
	 * @return  self
	 */
	public function setFkDocenteCargoDirectivoId($fkDocenteCargoDirectivoId)
	{
		$this->fkDocenteCargoDirectivoId = $fkDocenteCargoDirectivoId;

		return $this;
	}

	/**
	 * Get the value of nombreUnidadAcademica
	 */
	public function getNombreUnidadAcademica()
	{
		return $this->nombreUnidadAcademica;
	}

	/**
	 * Set the value of nombreUnidadAcademica
	 *
	 * @return  self
	 */
	public function setNombreUnidadAcademica($nombreUnidadAcademica)
	{
		$this->nombreUnidadAcademica = $nombreUnidadAcademica;

		return $this;
	}

	/**
	 * Get the value of nroasignaturasdocente
	 */
	public function getNroasignaturasdocente()
	{
		return $this->nroasignaturasdocente;
	}

	/**
	 * Set the value of nroasignaturasdocente
	 *
	 * @return  self
	 */
	public function setNroasignaturasdocente($nroasignaturasdocente)
	{
		$this->nroasignaturasdocente = $nroasignaturasdocente;

		return $this;
	}

	/**
	 * Get the value of nroHorasLaborablesSemanaEnCarreraPrograma
	 */
	public function getNroHorasLaborablesSemanaEnCarreraPrograma()
	{
		return $this->nroHorasLaborablesSemanaEnCarreraPrograma;
	}

	/**
	 * Set the value of nroHorasLaborablesSemanaEnCarreraPrograma
	 *
	 * @return  self
	 */
	public function setNroHorasLaborablesSemanaEnCarreraPrograma($nroHorasLaborablesSemanaEnCarreraPrograma)
	{
		$this->nroHorasLaborablesSemanaEnCarreraPrograma = $nroHorasLaborablesSemanaEnCarreraPrograma;

		return $this;
	}

	/**
	 * Get the value of nroHorasClaseSemanaCarreraPrograma
	 */
	public function getNroHorasClaseSemanaCarreraPrograma()
	{
		return $this->nroHorasClaseSemanaCarreraPrograma;
	}

	/**
	 * Set the value of nroHorasClaseSemanaCarreraPrograma
	 *
	 * @return  self
	 */
	public function setNroHorasClaseSemanaCarreraPrograma($nroHorasClaseSemanaCarreraPrograma)
	{
		$this->nroHorasClaseSemanaCarreraPrograma = $nroHorasClaseSemanaCarreraPrograma;

		return $this;
	}

	/**
	 * Get the value of nroHorasInvestigacionSemanaCarreraPrograma
	 */
	public function getNroHorasInvestigacionSemanaCarreraPrograma()
	{
		return $this->nroHorasInvestigacionSemanaCarreraPrograma;
	}

	/**
	 * Set the value of nroHorasInvestigacionSemanaCarreraPrograma
	 *
	 * @return  self
	 */
	public function setNroHorasInvestigacionSemanaCarreraPrograma($nroHorasInvestigacionSemanaCarreraPrograma)
	{
		$this->nroHorasInvestigacionSemanaCarreraPrograma = $nroHorasInvestigacionSemanaCarreraPrograma;

		return $this;
	}

	/**
	 * Get the value of nroHorasAdministrativasSemanaCarreraPrograma
	 */
	public function getNroHorasAdministrativasSemanaCarreraPrograma()
	{
		return $this->nroHorasAdministrativasSemanaCarreraPrograma;
	}

	/**
	 * Set the value of nroHorasAdministrativasSemanaCarreraPrograma
	 *
	 * @return  self
	 */
	public function setNroHorasAdministrativasSemanaCarreraPrograma($nroHorasAdministrativasSemanaCarreraPrograma)
	{
		$this->nroHorasAdministrativasSemanaCarreraPrograma = $nroHorasAdministrativasSemanaCarreraPrograma;

		return $this;
	}

	/**
	 * Get the value of nroHorasOtrasActividadesSemanaCarreraPrograma
	 */
	public function getNroHorasOtrasActividadesSemanaCarreraPrograma()
	{
		return $this->nroHorasOtrasActividadesSemanaCarreraPrograma;
	}

	/**
	 * Set the value of nroHorasOtrasActividadesSemanaCarreraPrograma
	 *
	 * @return  self
	 */
	public function setNroHorasOtrasActividadesSemanaCarreraPrograma($nroHorasOtrasActividadesSemanaCarreraPrograma)
	{
		$this->nroHorasOtrasActividadesSemanaCarreraPrograma = $nroHorasOtrasActividadesSemanaCarreraPrograma;

		return $this;
	}

	/**
	 * Get the value of nroHorasVinculacionSociedad
	 */
	public function getNroHorasVinculacionSociedad()
	{
		return $this->nroHorasVinculacionSociedad;
	}

	/**
	 * Set the value of nroHorasVinculacionSociedad
	 *
	 * @return  self
	 */
	public function setNroHorasVinculacionSociedad($nroHorasVinculacionSociedad)
	{
		$this->nroHorasVinculacionSociedad = $nroHorasVinculacionSociedad;

		return $this;
	}

	/**
	 * Get the value of salarioMensual
	 */
	public function getSalarioMensual()
	{
		return $this->salarioMensual;
	}

	/**
	 * Set the value of salarioMensual
	 *
	 * @return  self
	 */
	public function setSalarioMensual($salarioMensual)
	{
		$this->salarioMensual = $salarioMensual;

		return $this;
	}

	/**
	 * Get the value of fkDocenteDocenciaTecnicoSuperiorId
	 */
	public function getFkDocenteDocenciaTecnicoSuperiorId()
	{
		return $this->fkDocenteDocenciaTecnicoSuperiorId;
	}

	/**
	 * Set the value of fkDocenteDocenciaTecnicoSuperiorId
	 *
	 * @return  self
	 */
	public function setFkDocenteDocenciaTecnicoSuperiorId($fkDocenteDocenciaTecnicoSuperiorId)
	{
		$this->fkDocenteDocenciaTecnicoSuperiorId = $fkDocenteDocenciaTecnicoSuperiorId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteDocenciaTecnologicoId
	 */
	public function getFkDocenteDocenciaTecnologicoId()
	{
		return $this->fkDocenteDocenciaTecnologicoId;
	}

	/**
	 * Set the value of fkDocenteDocenciaTecnologicoId
	 *
	 * @return  self
	 */
	public function setFkDocenteDocenciaTecnologicoId($fkDocenteDocenciaTecnologicoId)
	{
		$this->fkDocenteDocenciaTecnologicoId = $fkDocenteDocenciaTecnologicoId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteEstaEnPeriodoSabaticoId
	 */
	public function getFkDocenteEstaEnPeriodoSabaticoId()
	{
		return $this->fkDocenteEstaEnPeriodoSabaticoId;
	}

	/**
	 * Set the value of fkDocenteEstaEnPeriodoSabaticoId
	 *
	 * @return  self
	 */
	public function setFkDocenteEstaEnPeriodoSabaticoId($fkDocenteEstaEnPeriodoSabaticoId)
	{
		$this->fkDocenteEstaEnPeriodoSabaticoId = $fkDocenteEstaEnPeriodoSabaticoId;

		return $this;
	}

	/**
	 * Get the value of fechaInicioPeriodoSabatico
	 */
	public function getFechaInicioPeriodoSabatico()
	{
		return $this->fechaInicioPeriodoSabatico;
	}

	/**
	 * Set the value of fechaInicioPeriodoSabatico
	 *
	 * @return  self
	 */
	public function setFechaInicioPeriodoSabatico($fechaInicioPeriodoSabatico)
	{
		$this->fechaInicioPeriodoSabatico = $fechaInicioPeriodoSabatico;

		return $this;
	}

	/**
	 * Get the value of fkDocenteEstaCursandoEstudiosId
	 */
	public function getFkDocenteEstaCursandoEstudiosId()
	{
		return $this->fkDocenteEstaCursandoEstudiosId;
	}

	/**
	 * Set the value of fkDocenteEstaCursandoEstudiosId
	 *
	 * @return  self
	 */
	public function setFkDocenteEstaCursandoEstudiosId($fkDocenteEstaCursandoEstudiosId)
	{
		$this->fkDocenteEstaCursandoEstudiosId = $fkDocenteEstaCursandoEstudiosId;

		return $this;
	}

	/**
	 * Get the value of fkDocenteInstitucionDondeCursaEstudiosId
	 */
	public function getFkDocenteInstitucionDondeCursaEstudiosId()
	{
		return $this->fkDocenteInstitucionDondeCursaEstudiosId;
	}

	/**
	 * Set the value of fkDocenteInstitucionDondeCursaEstudiosId
	 *
	 * @return  self
	 */
	public function setFkDocenteInstitucionDondeCursaEstudiosId($fkDocenteInstitucionDondeCursaEstudiosId)
	{
		$this->fkDocenteInstitucionDondeCursaEstudiosId = $fkDocenteInstitucionDondeCursaEstudiosId;

		return $this;
	}

	/**
	 * Get the value of fkDocentePaisEstudiosId
	 */
	public function getFkDocentePaisEstudiosId()
	{
		return $this->fkDocentePaisEstudiosId;
	}

	/**
	 * Set the value of fkDocentePaisEstudiosId
	 *
	 * @return  self
	 */
	public function setFkDocentePaisEstudiosId($fkDocentePaisEstudiosId)
	{
		$this->fkDocentePaisEstudiosId = $fkDocentePaisEstudiosId;

		return $this;
	}

	/**
	 * Get the value of tituloAObtener
	 */
	public function getTituloAObtener()
	{
		return $this->tituloAObtener;
	}

	/**
	 * Set the value of tituloAObtener
	 *
	 * @return  self
	 */
	public function setTituloAObtener($tituloAObtener)
	{
		$this->tituloAObtener = $tituloAObtener;

		return $this;
	}

	/**
	 * Get the value of usuarioDocentes
	 */
	public function getUsuarioDocentes()
	{
		return $this->usuarioDocentes;
	}

	/**
	 * Set the value of usuarioDocentes
	 *
	 * @return  self
	 */
	public function setUsuarioDocentes($usuarioDocentes)
	{
		$this->usuarioDocentes = $usuarioDocentes;

		return $this;
	}

	/**
	 * Get the value of passwordDocentes
	 */
	public function getPasswordDocentes()
	{
		return $this->passwordDocentes;
	}

	/**
	 * Set the value of passwordDocentes
	 *
	 * @return  self
	 */
	public function setPasswordDocentes($passwordDocentes)
	{
		$this->passwordDocentes = $passwordDocentes;

		return $this;
	}

	/**
	 * Get the value of niveDeFormacionId
	 */
	public function getNiveDeFormacionId()
	{
		return $this->niveDeFormacionId;
	}

	/**
	 * Set the value of niveDeFormacionId
	 *
	 * @return  self
	 */
	public function setNiveDeFormacionId($niveDeFormacionId)
	{
		$this->niveDeFormacionId = $niveDeFormacionId;

		return $this;
	}

	/**
	 * Get the value of accesodepartamentoIdaccesodepartamento
	 */
	public function getAccesodepartamentoIdaccesodepartamento()
	{
		return $this->accesodepartamentoIdaccesodepartamento;
	}

	/**
	 * Set the value of accesodepartamentoIdaccesodepartamento
	 *
	 * @return  self
	 */
	public function setAccesodepartamentoIdaccesodepartamento($accesodepartamentoIdaccesodepartamento)
	{
		$this->accesodepartamentoIdaccesodepartamento = $accesodepartamentoIdaccesodepartamento;

		return $this;
	}

	/**
	 * Get the value of docentesOculto
	 */
	public function getDocentesOculto()
	{
		return $this->docentesOculto;
	}

	/**
	 * Set the value of docentesOculto
	 *
	 * @return  self
	 */
	public function setDocentesOculto($docentesOculto)
	{
		$this->docentesOculto = $docentesOculto;

		return $this;
	}

	/**
	 * Get the value of docentesAccion
	 */
	public function getDocentesAccion()
	{
		return $this->docentesAccion;
	}

	/**
	 * Set the value of docentesAccion
	 *
	 * @return  self
	 */
	public function setDocentesAccion($docentesAccion)
	{
		$this->docentesAccion = $docentesAccion;

		return $this;
	}

	/**
	 * Get the value of docentesfecha
	 */
	public function getDocentesfecha()
	{
		return $this->docentesfecha;
	}

	/**
	 * Set the value of docentesfecha
	 *
	 * @return  self
	 */
	public function setDocentesfecha($docentesfecha)
	{
		$this->docentesfecha = $docentesfecha;

		return $this;
	}

	/**
	 * Get the value of docentesuser
	 */
	public function getDocentesuser()
	{
		return $this->docentesuser;
	}

	/**
	 * Set the value of docentesuser
	 *
	 * @return  self
	 */
	public function setDocentesuser($docentesuser)
	{
		$this->docentesuser = $docentesuser;

		return $this;
	}
}
