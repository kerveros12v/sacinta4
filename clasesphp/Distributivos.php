<?php
namespace Clasesphp;

	class Distributivos
{
private $distributivosId;
private $distributivosNumero;
private $fechaVinculacion;
private $numeroHorasClaseSemanales;
private $numeroHorasAcademicas;
private $numeroHorasInvestigacion;
private $numeroHorasGestionDireccionAcacemica;
private $distributivosTotalHoras;
private $docentes_numeroIdentificacion;
private $titulosProfecionales_TituloProfecionalId;
private $gradosOcupacionales_gradoOcupacionalId;
private $asignaturas_codigoMateria;
private $tiempoDedicacion_tiempoDedicacionId;
private $proyectosInvestigacion_ProyectosInvestigacionId;
private $cursosPeriodoAcademico_fkperiodoacademicoId;
private $cursosPeriodoAcademico_Cursos_idCursos;
private $cursosPeriodoAcademico_periodoAcademicoCursoId;

public function set_distributivosId ($distributivosId)
{
	$this->distributivosId=$distributivosId;
	}
public function set_distributivosNumero($distributivosNumero)
{
	$this->distributivosNumero=$distributivosNumero;
	}
public function set_fechaVinculacion($fechaVinculacion)
{
	$this->fechaVinculacion=$fechaVinculacion;
	}
public function set_numeroHorasClaseSemanales($numeroHorasClaseSemanales)
{
	$this->numeroHorasClaseSemanales=$numeroHorasClaseSemanales;
	}
public function set_numeroHorasAcademicas($numeroHorasAcademicas)
{
	$this->numeroHorasAcademicas=$numeroHorasAcademicas;
	}
public function set_numeroHorasInvestigacion($numeroHorasInvestigacion)
{
	$this->numeroHorasInvestigacion=$numeroHorasInvestigacion;
	}
public function set_numeroHorasGestionDireccionAcacemica($numeroHorasGestionDireccionAcacemica)
{
	$this->numeroHorasGestionDireccionAcacemica=$numeroHorasGestionDireccionAcacemica;
	}
public function set_distributivosTotalHoras($distributivosTotalHoras)
{
	$this->distributivosTotalHoras=$distributivosTotalHoras;
	}
public function set_docentes_numeroIdentificacion ($docentes_numeroIdentificacion)
{
	$this->docentes_numeroIdentificacion=$docentes_numeroIdentificacion;
	}
public function set_titulosProfecionales_TituloProfecionalId ($titulosProfecionales_TituloProfecionalId)
{
	$this->titulosProfecionales_TituloProfecionalId=$titulosProfecionales_TituloProfecionalId;
	}
public function set_gradosOcupacionales_gradoOcupacionalId ($gradosOcupacionales_gradoOcupacionalId)
{
	$this->gradosOcupacionales_gradoOcupacionalId=$gradosOcupacionales_gradoOcupacionalId;
	}
public function set_asignaturas_codigoMateria ($asignaturas_codigoMateria){
	$this->asignaturas_codigoMateria=$asignaturas_codigoMateria;
	}
public function set_tiempoDedicacion_tiempoDedicacionId ($tiempoDedicacion_tiempoDedicacionId)
{
	$this->tiempoDedicacion_tiempoDedicacionId=$tiempoDedicacion_tiempoDedicacionId;
	}
public function set_proyectosInvestigacion_ProyectosInvestigacionId ($proyectosInvestigacion_ProyectosInvestigacionId)
{
	$this->proyectosInvestigacion_ProyectosInvestigacionId=$proyectosInvestigacion_ProyectosInvestigacionId;
	}
public function set_cursosPeriodoAcademico_fkperiodoacademicoId ($cursosPeriodoAcademico_fkperiodoacademicoId)
{
	$this->cursosPeriodoAcademico_fkperiodoacademicoId=$cursosPeriodoAcademico_fkperiodoacademicoId;
	}
public function set_cursosPeriodoAcademico_Cursos_idCursos ($cursosPeriodoAcademico_Cursos_idCursos)
{
	$this->cursosPeriodoAcademico_Cursos_idCursos=$cursosPeriodoAcademico_Cursos_idCursos;
	}
public function set_cursosPeriodoAcademico_periodoAcademicoCursoId ($cursosPeriodoAcademico_periodoAcademicoCursoId)
{
	$this->cursosPeriodoAcademico_periodoAcademicoCursoId=$cursosPeriodoAcademico_periodoAcademicoCursoId;
	}

public function get_distributivosId ()
{
	return $this->distributivosId;
	}
public function get_distributivosNumero()
{
	return $this->distributivosNumero;
	}
public function get_fechaVinculacion()
{
	return $this->fechaVinculacion;
	}
public function get_numeroHorasClaseSemanales()
{
	return $this->numeroHorasClaseSemanales;
	}
public function get_numeroHorasAcademicas()
{
	return $this->numeroHorasAcademicas;
	}
public function get_numeroHorasInvestigacion()
{
	return $this->numeroHorasInvestigacion;
	}
public function get_numeroHorasGestionDireccionAcacemica()
{
	return $this->numeroHorasGestionDireccionAcacemica;
	}
public function get_distributivosTotalHoras(){
	return $this->distributivosTotalHoras;
	}
public function get_docentes_numeroIdentificacion (){
	return $this->docentes_numeroIdentificacion;
	}
public function get_titulosProfecionales_TituloProfecionalId ()
{
	return $this->titulosProfecionales_TituloProfecionalId;
}
public function get_gradosOcupacionales_gradoOcupacionalId ()
{
	return $this->gradosOcupacionales_gradoOcupacionalId;
	}
public function get_asignaturas_codigoMateria ()
{
	return $this->asignaturas_codigoMateria;
	}
public function get_tiempoDedicacion_tiempoDedicacionId ()
{
	return $this->tiempoDedicacion_tiempoDedicacionId;
	}
public function get_proyectosInvestigacion_ProyectosInvestigacionId ()
{
	return $this->proyectosInvestigacion_ProyectosInvestigacionId;
	}
public function get_cursosPeriodoAcademico_fkperiodoacademicoId ()
{
	return $this->cursosPeriodoAcademico_fkperiodoacademicoId;
	}
public function get_cursosPeriodoAcademico_Cursos_idCursos ()
{
	return $this->cursosPeriodoAcademico_Cursos_idCursos;
	}
public function get_cursosPeriodoAcademico_periodoAcademicoCursoId ()
{
	return $this->cursosPeriodoAcademico_periodoAcademicoCursoId;
	}

public function _construct(){}


	}
?>