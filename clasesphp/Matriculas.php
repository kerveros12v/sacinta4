<?php

namespace Clasesphp;

class Matriculas
{
	private $matriculasId, $CodigoMatricula, $fechaMatricula, $montoCreditoEducativo, $montoAyudaEconomica, $fechainicioCarrera, $estudiantes_numeroIdentificacion;
	private $carreras_carrerasId, $jornadasacademicas_JornadaAcademicaId, $periodoacademico_periodoacademicoId, $paralelo_paraleloId, $tipomatricula_tipoMatriculaId;
	private $nivelacademico_NivelAcademicoQueCursaId, $recibepensiondiferenciada_recibePensionDiferenciadaId, $estudianteocupacion_estudianteOcupacionId;
	private $bonodesarrollo_bonoDesarrolloId, $ingresosestudiante_ingresosestudianteId, $harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid, $haperdidolagratuidad_HaPerdidoLaGratuidadId;
	private $ingresoTotalHogar, $fkNivelFormacionMadre, $fkNivelFormacionPadre, $cantidadMiembrosHogar, $matriculasOculto, $matriculasAccion, $matriculasfecha, $matriculasuser;


	public function set_matriculasId($matriculasId)
	{
		$this->matriculasId = $matriculasId;
	}
	public function get_matriculasId()
	{
		return $this->matriculasId;
	}
	public function set_CodigoMatricula($CodigoMatricula)
	{
		$this->CodigoMatricula = $CodigoMatricula;
	}
	public function get_CodigoMatricula()
	{
		return $this->CodigoMatricula;
	}
	public function set_fechaMatricula($fechaMatricula)
	{
		$this->fechaMatricula = $fechaMatricula;
	}
	public function get_fechaMatricula()
	{
		return $this->fechaMatricula;
	}
	public function set_montoCreditoEducativo($montoCreditoEducativo)
	{
		$this->montoCreditoEducativo = $montoCreditoEducativo;
	}
	public function get_montoCreditoEducativo()
	{
		return $this->montoCreditoEducativo;
	}
	public function set_montoAyudaEconomica($montoAyudaEconomica)
	{
		$this->montoAyudaEconomica = $montoAyudaEconomica;
	}
	public function get_montoAyudaEconomica()
	{
		return $this->montoAyudaEconomica;
	}
	public function set_fechainicioCarrera($fechainicioCarrera)
	{
		$this->fechainicioCarrera = $fechainicioCarrera;
	}
	public function get_fechainicioCarrera()
	{
		return $this->fechainicioCarrera;
	}
	public function set_estudiantes_numeroIdentificacion($estudiantes_numeroIdentificacion)
	{
		$this->estudiantes_numeroIdentificacion = $estudiantes_numeroIdentificacion;
	}
	public function get_estudiantes_numeroIdentificacion()
	{
		return $this->estudiantes_numeroIdentificacion;
	}
	public function set_carreras_carrerasId($carreras_carrerasId)
	{
		$this->carreras_carrerasId = $carreras_carrerasId;
	}
	public function get_carreras_carrerasId()
	{
		return $this->carreras_carrerasId;
	}
	public function set_jornadasacademicas_JornadaAcademicaId($jornadasacademicas_JornadaAcademicaId)
	{
		$this->jornadasacademicas_JornadaAcademicaId = $jornadasacademicas_JornadaAcademicaId;
	}
	public function get_jornadasacademicas_JornadaAcademicaId()
	{
		return $this->jornadasacademicas_JornadaAcademicaId;
	}
	public function set_periodoacademico_periodoacademicoId($periodoacademico_periodoacademicoId)
	{
		$this->periodoacademico_periodoacademicoId = $periodoacademico_periodoacademicoId;
	}
	public function get_periodoacademico_periodoacademicoId()
	{
		return $this->periodoacademico_periodoacademicoId;
	}
	public function set_paralelo_paraleloId($paralelo_paraleloId)
	{
		$this->paralelo_paraleloId = $paralelo_paraleloId;
	}
	public function get_paralelo_paraleloId()
	{
		return $this->paralelo_paraleloId;
	}
	public function set_tipomatricula_tipoMatriculaId($tipomatricula_tipoMatriculaId)
	{
		$this->tipomatricula_tipoMatriculaId = $tipomatricula_tipoMatriculaId;
	}
	public function get_tipomatricula_tipoMatriculaId()
	{
		return $this->tipomatricula_tipoMatriculaId;
	}
	public function set_nivelacademico_NivelAcademicoQueCursaId($nivelacademico_NivelAcademicoQueCursaId)
	{
		$this->nivelacademico_NivelAcademicoQueCursaId = $nivelacademico_NivelAcademicoQueCursaId;
	}
	public function get_nivelacademico_NivelAcademicoQueCursaId()
	{
		return $this->nivelacademico_NivelAcademicoQueCursaId;
	}
	public function set_recibepensiondiferenciada_recibePensionDiferenciadaId($recibepensiondiferenciada_recibePensionDiferenciadaId)
	{
		$this->recibepensiondiferenciada_recibePensionDiferenciadaId = $recibepensiondiferenciada_recibePensionDiferenciadaId;
	}
	public function get_recibepensiondiferenciada_recibePensionDiferenciadaId()
	{
		return $this->recibepensiondiferenciada_recibePensionDiferenciadaId;
	}
	public function set_estudianteocupacion_estudianteOcupacionId($estudianteocupacion_estudianteOcupacionId)
	{
		$this->estudianteocupacion_estudianteOcupacionId = $estudianteocupacion_estudianteOcupacionId;
	}
	public function get_estudianteocupacion_estudianteOcupacionId()
	{
		return $this->estudianteocupacion_estudianteOcupacionId;
	}
	public function set_bonodesarrollo_bonoDesarrolloId($bonodesarrollo_bonoDesarrolloId)
	{
		$this->bonodesarrollo_bonoDesarrolloId = $bonodesarrollo_bonoDesarrolloId;
	}
	public function get_bonodesarrollo_bonoDesarrolloId()
	{
		return $this->bonodesarrollo_bonoDesarrolloId;
	}
	public function set_ingresosestudiante_ingresosestudianteId($ingresosestudiante_ingresosestudianteId)
	{
		$this->ingresosestudiante_ingresosestudianteId = $ingresosestudiante_ingresosestudianteId;
	}
	public function get_ingresosestudiante_ingresosestudianteId()
	{
		return $this->ingresosestudiante_ingresosestudianteId;
	}
	public function set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid)
	{
		$this->harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid = $harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid;
	}
	public function get_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid()
	{
		return $this->harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid;
	}
	public function set_haperdidolagratuidad_HaPerdidoLaGratuidadId($haperdidolagratuidad_HaPerdidoLaGratuidadId)
	{
		$this->haperdidolagratuidad_HaPerdidoLaGratuidadId = $haperdidolagratuidad_HaPerdidoLaGratuidadId;
	}
	public function get_haperdidolagratuidad_HaPerdidoLaGratuidadId()
	{
		return $this->haperdidolagratuidad_HaPerdidoLaGratuidadId;
	}
	public function set_ingresoTotalHogar($ingresoTotalHogar)
	{
		$this->ingresoTotalHogar = $ingresoTotalHogar;
	}
	public function get_ingresoTotalHogar()
	{
		return $this->ingresoTotalHogar;
	}
	public function set_fkNivelFormacionMadre($fkNivelFormacionMadre)
	{
		$this->fkNivelFormacionMadre = $fkNivelFormacionMadre;
	}
	public function get_fkNivelFormacionMadre()
	{
		return $this->fkNivelFormacionMadre;
	}
	public function set_fkNivelFormacionPadre($fkNivelFormacionPadre)
	{
		$this->fkNivelFormacionPadre = $fkNivelFormacionPadre;
	}
	public function get_fkNivelFormacionPadre()
	{
		return $this->fkNivelFormacionPadre;
	}
	public function set_cantidadMiembrosHogar($cantidadMiembrosHogar)
	{
		$this->cantidadMiembrosHogar = $cantidadMiembrosHogar;
	}
	public function get_cantidadMiembrosHogar()
	{
		return $this->cantidadMiembrosHogar;
	}
	public function set_matriculasOculto($matriculasOculto)
	{
		$this->matriculasOculto = $matriculasOculto;
	}
	public function get_matriculasOculto()
	{
		return $this->matriculasOculto;
	}
	public function set_matriculasAccion($matriculasAccion)
	{
		$this->matriculasAccion = $matriculasAccion;
	}
	public function get_matriculasAccion()
	{
		return $this->matriculasAccion;
	}
	public function set_matriculasfecha($matriculasfecha)
	{
		$this->matriculasfecha = $matriculasfecha;
	}
	public function get_matriculasfecha()
	{
		return $this->matriculasfecha;
	}
	public function set_matriculasuser($matriculasuser)
	{
		$this->matriculasuser = $matriculasuser;
	}
	public function get_matriculasuser()
	{
		return $this->matriculasuser;
	}
	public function _construct()
	{
	}
}
