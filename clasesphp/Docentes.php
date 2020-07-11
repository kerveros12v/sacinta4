<?php
namespace Clasesphp;

class Docentes{
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
public function _construct(){}
public function set_tipodocumentoId($tipodocumentoId){$this->tipodocumentoId=$tipodocumentoId;}
public function set_numeroIdentificacion($numeroIdentificacion){$this->numeroIdentificacion=$numeroIdentificacion;}
public function set_primerApellido($primerApellido){$this->primerApellido=$primerApellido;}
public function set_segundoApellido($segundoApellido){$this->segundoApellido=$segundoApellido;}
public function set_primerNombre($primerNombre){$this->primerNombre=$primerNombre;}
public function set_segundoNombre($segundoNombre){$this->segundoNombre=$segundoNombre;}
public function set_fkDocenteSexoId($fkDocenteSexoId){$this->fkDocenteSexoId=$fkDocenteSexoId;}
public function set_fkDocenteGeneroId($fkDocenteGeneroId){$this->fkDocenteGeneroId=$fkDocenteGeneroId;}
public function set_fkDocenteEstadocivilId($fkDocenteEstadocivilId){$this->fkDocenteEstadocivilId=$fkDocenteEstadocivilId;}
public function set_fkDocenteEtniaId($fkDocenteEtniaId){$this->fkDocenteEtniaId=$fkDocenteEtniaId;}
public function set_fkDocentePuebloNacionalidadId($fkDocentePuebloNacionalidadId){$this->fkDocentePuebloNacionalidadId=$fkDocentePuebloNacionalidadId;}
public function set_direccionDomiciliaria($direccionDomiciliaria){$this->direccionDomiciliaria=$direccionDomiciliaria;}
public function set_fkDocenteProvinciaSufragio($fkDocenteProvinciaSufragio){$this->fkDocenteProvinciaSufragio=$fkDocenteProvinciaSufragio;}
public function set_numeroCelular($numeroCelular){$this->numeroCelular=$numeroCelular;}
public function set_correoElectronico($correoElectronico){$this->correoElectronico=$correoElectronico;}
public function set_numDomicilio($numDomicilio){$this->numDomicilio=$numDomicilio;}
public function set_fkDocenteTipoEnfermedadCatastroficaId($fkDocenteTipoEnfermedadCatastroficaId){$this->fkDocenteTipoEnfermedadCatastroficaId=$fkDocenteTipoEnfermedadCatastroficaId;}
public function set_fechaNacimiento($fechaNacimiento){$this->fechaNacimiento=$fechaNacimiento;}
public function set_fkDocentePaisNacionalidadId($fkDocentePaisNacionalidadId){$this->fkDocentePaisNacionalidadId=$fkDocentePaisNacionalidadId;}
public function set_fechaIngresoIES($fechaIngresoIES){$this->fechaIngresoIES=$fechaIngresoIES;}
public function set_fechaSalidaIES($fechaSalidaIES){$this->fechaSalidaIES=$fechaSalidaIES;}
public function set_fkDocenteRelacionLaboralIESId($fkDocenteRelacionLaboralIESId){$this->fkDocenteRelacionLaboralIESId=$fkDocenteRelacionLaboralIESId;}
public function set_fkDocenteEscalafonDocenteId($fkDocenteEscalafonDocenteId){$this->fkDocenteEscalafonDocenteId=$fkDocenteEscalafonDocenteId;}
public function set_fkDocenteIngresoConConcursoMeritosId($fkDocenteIngresoConConcursoMeritosId){$this->fkDocenteIngresoConConcursoMeritosId=$fkDocenteIngresoConConcursoMeritosId;}
public function set_fkDocenteCargoDirectivoId($fkDocenteCargoDirectivoId){$this->fkDocenteCargoDirectivoId=$fkDocenteCargoDirectivoId;}
public function set_nombreUnidadAcademica($nombreUnidadAcademica){$this->nombreUnidadAcademica=$nombreUnidadAcademica;}
public function set_nroasignaturasdocente($nroasignaturasdocente){$this->nroasignaturasdocente=$nroasignaturasdocente;}
public function set_nroHorasLaborablesSemanaEnCarreraPrograma($nroHorasLaborablesSemanaEnCarreraPrograma){$this->nroHorasLaborablesSemanaEnCarreraPrograma=$nroHorasLaborablesSemanaEnCarreraPrograma;}
public function set_nroHorasClaseSemanaCarreraPrograma($nroHorasClaseSemanaCarreraPrograma){$this->nroHorasClaseSemanaCarreraPrograma=$nroHorasClaseSemanaCarreraPrograma;}
public function set_nroHorasInvestigacionSemanaCarreraPrograma($nroHorasInvestigacionSemanaCarreraPrograma){$this->nroHorasInvestigacionSemanaCarreraPrograma=$nroHorasInvestigacionSemanaCarreraPrograma;}
public function set_nroHorasAdministrativasSemanaCarreraPrograma($nroHorasAdministrativasSemanaCarreraPrograma){$this->nroHorasAdministrativasSemanaCarreraPrograma=$nroHorasAdministrativasSemanaCarreraPrograma;}
public function set_nroHorasOtrasActividadesSemanaCarreraPrograma($nroHorasOtrasActividadesSemanaCarreraPrograma){$this->nroHorasOtrasActividadesSemanaCarreraPrograma=$nroHorasOtrasActividadesSemanaCarreraPrograma;}
public function set_nroHorasVinculacionSociedad($nroHorasVinculacionSociedad){$this->nroHorasVinculacionSociedad=$nroHorasVinculacionSociedad;}
public function set_salarioMensual($salarioMensual){$this->salarioMensual=$salarioMensual;}
public function set_fkDocenteDocenciaTecnicoSuperiorId($fkDocenteDocenciaTecnicoSuperiorId){$this->fkDocenteDocenciaTecnicoSuperiorId=$fkDocenteDocenciaTecnicoSuperiorId;}
public function set_fkDocenteDocenciaTecnologicoId($fkDocenteDocenciaTecnologicoId){$this->fkDocenteDocenciaTecnologicoId=$fkDocenteDocenciaTecnologicoId;}
public function set_fkDocenteEstaEnPeriodoSabaticoId($fkDocenteEstaEnPeriodoSabaticoId){$this->fkDocenteEstaEnPeriodoSabaticoId=$fkDocenteEstaEnPeriodoSabaticoId;}
public function set_fechaInicioPeriodoSabatico($fechaInicioPeriodoSabatico){$this->fechaInicioPeriodoSabatico=$fechaInicioPeriodoSabatico;}
public function set_fkDocenteEstaCursandoEstudiosId($fkDocenteEstaCursandoEstudiosId){$this->fkDocenteEstaCursandoEstudiosId=$fkDocenteEstaCursandoEstudiosId;}
public function set_fkDocenteInstitucionDondeCursaEstudiosId($fkDocenteInstitucionDondeCursaEstudiosId){$this->fkDocenteInstitucionDondeCursaEstudiosId=$fkDocenteInstitucionDondeCursaEstudiosId;}
public function set_fkDocentePaisEstudiosId($fkDocentePaisEstudiosId){$this->fkDocentePaisEstudiosId=$fkDocentePaisEstudiosId;}
public function set_tituloAObtener($tituloAObtener){$this->tituloAObtener=$tituloAObtener;}
public function set_usuarioDocentes($usuarioDocentes){$this->usuarioDocentes=$usuarioDocentes;}
public function set_passwordDocentes($passwordDocentes){$this->passwordDocentes=$passwordDocentes;}
public function set_niveDeFormacionId($niveDeFormacionId){$this->niveDeFormacionId=$niveDeFormacionId;}

public function get_tipodocumentoId(){return $this->tipodocumentoId;}
public function get_numeroIdentificacion(){return $this->numeroIdentificacion;}
public function get_primerApellido(){return $this->primerApellido;}
public function get_segundoApellido(){return $this->segundoApellido;}
public function get_primerNombre(){return $this->primerNombre;}
public function get_segundoNombre(){return $this->segundoNombre;}
public function get_fkDocenteSexoId(){return $this->fkDocenteSexoId;}
public function get_fkDocenteGeneroId(){return $this->fkDocenteGeneroId;}
public function get_fkDocenteEstadocivilId(){return $this->fkDocenteEstadocivilId;}
public function get_fkDocenteEtniaId(){return $this->fkDocenteEtniaId;}
public function get_fkDocentePuebloNacionalidadId(){return $this->fkDocentePuebloNacionalidadId;}
public function get_direccionDomiciliaria(){return $this->direccionDomiciliaria;}
public function get_fkDocenteProvinciaSufragio(){return $this->fkDocenteProvinciaSufragio;}
public function get_numeroCelular(){return $this->numeroCelular;}
public function get_correoElectronico(){return $this->correoElectronico;}
public function get_numDomicilio(){return $this->numDomicilio;}
public function get_fkDocenteTipoEnfermedadCatastroficaId(){return $this->fkDocenteTipoEnfermedadCatastroficaId;}
public function get_fechaNacimiento(){return $this->fechaNacimiento;}
public function get_fkDocentePaisNacionalidadId(){return $this->fkDocentePaisNacionalidadId;}
public function get_fechaIngresoIES(){return $this->fechaIngresoIES;}
public function get_fechaSalidaIES(){return $this->fechaSalidaIES;}
public function get_fkDocenteRelacionLaboralIESId(){return $this->fkDocenteRelacionLaboralIESId;}
public function get_fkDocenteEscalafonDocenteId(){return $this->fkDocenteEscalafonDocenteId;}
public function get_fkDocenteIngresoConConcursoMeritosId(){return $this->fkDocenteIngresoConConcursoMeritosId;}
public function get_fkDocenteCargoDirectivoId(){return $this->fkDocenteCargoDirectivoId;}
public function get_nombreUnidadAcademica(){return $this->nombreUnidadAcademica;}
public function get_nroasignaturasdocente(){return $this->nroasignaturasdocente;}
public function get_nroHorasLaborablesSemanaEnCarreraPrograma(){return $this->nroHorasLaborablesSemanaEnCarreraPrograma;}
public function get_nroHorasClaseSemanaCarreraPrograma(){return $this->nroHorasClaseSemanaCarreraPrograma;}
public function get_nroHorasInvestigacionSemanaCarreraPrograma(){return $this->nroHorasInvestigacionSemanaCarreraPrograma;}
public function get_nroHorasAdministrativasSemanaCarreraPrograma(){return $this->nroHorasAdministrativasSemanaCarreraPrograma;}
public function get_nroHorasOtrasActividadesSemanaCarreraPrograma(){return $this->nroHorasOtrasActividadesSemanaCarreraPrograma;}
public function get_nroHorasVinculacionSociedad(){return $this->nroHorasVinculacionSociedad;}
public function get_salarioMensual(){return $this->salarioMensual;}
public function get_fkDocenteDocenciaTecnicoSuperiorId(){return $this->fkDocenteDocenciaTecnicoSuperiorId;}
public function get_fkDocenteDocenciaTecnologicoId(){return $this->fkDocenteDocenciaTecnologicoId;}
public function get_fkDocenteEstaEnPeriodoSabaticoId(){return $this->fkDocenteEstaEnPeriodoSabaticoId;}
public function get_fechaInicioPeriodoSabatico(){return $this->fechaInicioPeriodoSabatico;}
public function get_fkDocenteEstaCursandoEstudiosId(){return $this->fkDocenteEstaCursandoEstudiosId;}
public function get_fkDocenteInstitucionDondeCursaEstudiosId(){return $this->fkDocenteInstitucionDondeCursaEstudiosId;}
public function get_fkDocentePaisEstudiosId(){return $this->fkDocentePaisEstudiosId;}
public function get_tituloAObtener(){return $this->tituloAObtener;}
public function get_usuarioDocentes(){return $this->usuarioDocentes;}
public function get_passwordDocentes(){return $this->passwordDocentes;}
public function get_niveDeFormacionId(){return $this->niveDeFormacionId;}


	}
?>