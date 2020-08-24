<?php
namespace Crud;
require_once("conexion.php");
require_once("../clasesphp/Matriculas.php");
use Clasesphp\Matriculas;
class CrudMatriculas{
		// constructor de la clase
		public function _construct(){
			$db=Db::conectar();
			$select=$db->query("SET NAMES 'utf8'");
			}

		public  function mostrar(){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->query("SELECT * FROM matriculas");

			foreach($select->fetchAll() as $m){
			  $mymatricula= new Matriculas();
			  $mymatricula->set_matriculasId($m['matriculasId']);
			  $mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
			  $mymatricula->set_fechaMatricula($m['fechaMatricula']);
			  $mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
			  $mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
			  $mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
			  $mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
			  $mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
			  $mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
			  $mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
			  $mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
			  $mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
			  $mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
			  $mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
			  $mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
			  $mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
			  $mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
			  $mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
			  $mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
			  $mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
			  $mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			  $mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			  $mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			  $mymatricula->set_matriculasOculto($m['matriculasOculto']);
			  $mymatricula->set_matriculasAccion($m['matriculasAccion']);
			  $mymatricula->set_matriculasfecha($m['matriculasfecha']);
			  $mymatricula->set_matriculasuser($m['matriculasuser']);

				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function mostrarlistafechasMatriculacion(){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->query("SELECT fechaMatricula FROM `matriculas` GROUP BY fechaMatricula");

			foreach($select->fetchAll() as $matricula){
			 ///
			   $mymatricula=($matricula['fechaMatricula']);

			 ////
				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function listaMatriculas($cedulaEstudiante){
			$db=Db::conectar();
			$listamatricula=array();
			$select=$db->prepare("SELECT * FROM matriculas WHERE estudiantes_numeroIdentificacion=:id ");
			$select->bindValue('id',$cedulaEstudiante);
			$select->execute();
			foreach($select->fetchAll() as $m){
				$mymatricula= new Matriculas();
				$mymatricula->set_matriculasId($m['matriculasId']);
				$mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
				$mymatricula->set_fechaMatricula($m['fechaMatricula']);
				$mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
				$mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
				$mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
				$mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
				$mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
				$mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
				$mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
				$mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
				$mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
				$mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
				$mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
				$mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
				$mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
				$mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
				$mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
				$mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
				$mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
				$mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
				$mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
				$mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
				$mymatricula->set_matriculasOculto($m['matriculasOculto']);
				$mymatricula->set_matriculasAccion($m['matriculasAccion']);
				$mymatricula->set_matriculasfecha($m['matriculasfecha']);
				$mymatricula->set_matriculasuser($m['matriculasuser']);
				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function listaFechasPorPeriodos($periodo2){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->prepare("SELECT fechaMatricula FROM `matriculas` WHERE periodoacademico_periodoacademicoId=:id GROUP BY fechaMatricula");
			$select->bindValue('id',$periodo2);
			$select->execute();
			foreach($select->fetchAll() as $matricula){
			  $mymatricula=($matricula['fechaMatricula']);
			  $listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function listaMatriculasporFecha($fechamatricula1){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->prepare("SELECT * FROM matriculas WHERE fechaMatricula=:id ");
			$select->bindValue('id',$fechamatricula1);
			$select->execute();
			foreach($select->fetchAll() as $m){
				$mymatricula= new Matriculas();
				$mymatricula->set_matriculasId($m['matriculasId']);
				$mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
				$mymatricula->set_fechaMatricula($m['fechaMatricula']);
				$mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
				$mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
				$mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
				$mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
				$mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
				$mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
				$mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
				$mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
				$mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
				$mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
				$mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
				$mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
				$mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
				$mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
				$mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
				$mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
				$mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
				$mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
				$mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
				$mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
				$mymatricula->set_matriculasOculto($m['matriculasOculto']);
				$mymatricula->set_matriculasAccion($m['matriculasAccion']);
				$mymatricula->set_matriculasfecha($m['matriculasfecha']);
				$mymatricula->set_matriculasuser($m['matriculasuser']);
				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function listaMatriculasporPeriodo($periodo1){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->prepare("SELECT * FROM matriculas WHERE periodoacademico_periodoacademicoId=:id ");
			$select->bindValue('id',$periodo1);
			$select->execute();
			foreach($select->fetchAll() as $m){
				$mymatricula= new Matriculas();
				$mymatricula->set_matriculasId($m['matriculasId']);
				$mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
				$mymatricula->set_fechaMatricula($m['fechaMatricula']);
				$mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
				$mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
				$mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
				$mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
				$mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
				$mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
				$mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
				$mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
				$mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
				$mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
				$mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
				$mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
				$mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
				$mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
				$mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
				$mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
				$mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
				$mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
				$mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
				$mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
				$mymatricula->set_matriculasOculto($m['matriculasOculto']);
				$mymatricula->set_matriculasAccion($m['matriculasAccion']);
				$mymatricula->set_matriculasfecha($m['matriculasfecha']);
				$mymatricula->set_matriculasuser($m['matriculasuser']);
				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function listaMatriculasporCarreras($carrera1){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->prepare("SELECT * FROM matriculas WHERE carreras_carrerasId=:id ");
			$select->bindValue('id',$carrera1);
			$select->execute();
			foreach($select->fetchAll() as $m){
				$mymatricula= new Matriculas();
				$mymatricula->set_matriculasId($m['matriculasId']);
				$mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
				$mymatricula->set_fechaMatricula($m['fechaMatricula']);
				$mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
				$mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
				$mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
				$mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
				$mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
				$mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
				$mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
				$mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
				$mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
				$mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
				$mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
				$mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
				$mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
				$mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
				$mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
				$mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
				$mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
				$mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
				$mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
				$mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
				$mymatricula->set_matriculasOculto($m['matriculasOculto']);
				$mymatricula->set_matriculasAccion($m['matriculasAccion']);
				$mymatricula->set_matriculasfecha($m['matriculasfecha']);
				$mymatricula->set_matriculasuser($m['matriculasuser']);
				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function listaMatriculasporCursos($curso1){
			$db=Db::conectar();
			$listamatricula=NULL;
			$select=$db->prepare("SELECT * FROM matriculas WHERE nivelacademico_NivelAcademicoQueCursaId=:id ");
			$select->bindValue('id',$curso1);
			$select->execute();
			foreach($select->fetchAll() as $m){
				$mymatricula= new Matriculas();
				$mymatricula->set_matriculasId($m['matriculasId']);
				$mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
				$mymatricula->set_fechaMatricula($m['fechaMatricula']);
				$mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
				$mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
				$mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
				$mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
				$mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
				$mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
				$mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
				$mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
				$mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
				$mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
				$mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
				$mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
				$mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
				$mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
				$mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
				$mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
				$mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
				$mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
				$mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
				$mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
				$mymatricula->set_matriculasOculto($m['matriculasOculto']);
				$mymatricula->set_matriculasAccion($m['matriculasAccion']);
				$mymatricula->set_matriculasfecha($m['matriculasfecha']);
				$mymatricula->set_matriculasuser($m['matriculasuser']);
				$listamatricula[]=$mymatricula;
			}
			return $listamatricula;
	}
	public  function existeMatricula($periodom,$cedestu){
		$db=Db::conectar();
		$select=$db->prepare("SELECT * FROM matriculas where periodoacademico_periodoacademicoId =:id AND estudiantes_numeroIdentificacion= :cedula");
		$select->bindValue('id',$periodom);
		$select->bindValue('cedula',$cedestu);
		$select->execute();
		if ($select->fetch()==0)return 0;
			return 1;
	}
	public  function existe($id){
		$db=Db::conectar();
		$select=$db->prepare("SELECT * FROM matriculas where CodigoMatricula=:id");
		$select->bindValue('id',$id);
		$select->execute();
		if ($select->fetch()==0)return 0;
			return 1;
	}

	public  function obtenerMatricula($id , $periodo){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM matriculas where estudiantes_numeroIdentificacion=:id and periodoacademico_periodoacademicoId=:periodo;");
			$select->bindValue('id',$id);
			$select->bindValue('periodo',$periodo);
			$select->execute();
			$m=$select->fetch();
			$mymatricula= new Matriculas();
			$mymatricula->set_matriculasId($m['matriculasId']);
			$mymatricula->set_CodigoMatricula($m['CodigoMatricula']);
			$mymatricula->set_fechaMatricula($m['fechaMatricula']);
			$mymatricula->set_montoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->set_montoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->set_fechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->set_estudiantes_numeroIdentificacion($m['estudiantes_numeroIdentificacion']);
			$mymatricula->set_carreras_carrerasId($m['carreras_carrerasId']);
			$mymatricula->set_jornadasacademicas_JornadaAcademicaId($m['jornadasacademicas_JornadaAcademicaId']);
			$mymatricula->set_periodoacademico_periodoacademicoId($m['periodoacademico_periodoacademicoId']);
			$mymatricula->set_paralelo_paraleloId($m['paralelo_paraleloId']);
			$mymatricula->set_tipomatricula_tipoMatriculaId($m['tipomatricula_tipoMatriculaId']);
			$mymatricula->set_nivelacademico_NivelAcademicoQueCursaId($m['nivelacademico_NivelAcademicoQueCursaId']);
			$mymatricula->set_recibepensiondiferenciada_recibePensionDiferenciadaId($m['recibepensiondiferenciada_recibePensionDiferenciadaId']);
			$mymatricula->set_estudianteocupacion_estudianteOcupacionId($m['estudianteocupacion_estudianteOcupacionId']);
			$mymatricula->set_bonodesarrollo_bonoDesarrolloId($m['bonodesarrollo_bonoDesarrolloId']);
			$mymatricula->set_ingresosestudiante_ingresosestudianteId($m['ingresosestudiante_ingresosestudianteId']);
			$mymatricula->set_harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid($m['harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->set_haperdidolagratuidad_HaPerdidoLaGratuidadId($m['haperdidolagratuidad_HaPerdidoLaGratuidadId']);
			$mymatricula->set_ingresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->set_fkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->set_fkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->set_cantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->set_matriculasOculto($m['matriculasOculto']);
			$mymatricula->set_matriculasAccion($m['matriculasAccion']);
			$mymatricula->set_matriculasfecha($m['matriculasfecha']);
			$mymatricula->set_matriculasuser($m['matriculasuser']);
			return $mymatricula;
		}
 public  function insertar($matricula){
	// $matricula=new Matriculas();
			$db=Db::conectar();

			$insert=$db->prepare("INSERT INTO `matriculas`
			(`matriculasId`,
			`CodigoMatricula`,
			`fechaMatricula`,
			`montoCreditoEducativo`,
			`montoAyudaEconomica`,
			`fechainicioCarrera`,
			`estudiantes_numeroIdentificacion`,
			`carreras_carrerasId`,
			`jornadasacademicas_JornadaAcademicaId`,
			`periodoacademico_periodoacademicoId`,
			`paralelo_paraleloId`,
			`tipomatricula_tipoMatriculaId`,
			`nivelacademico_NivelAcademicoQueCursaId`,
			`recibepensiondiferenciada_recibePensionDiferenciadaId`,
			`estudianteocupacion_estudianteOcupacionId`,
			`bonodesarrollo_bonoDesarrolloId`,
			`ingresosestudiante_ingresosestudianteId`,
			`harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid`,
			`haperdidolagratuidad_HaPerdidoLaGratuidadId`,
			`ingresoTotalHogar`,
			`fkNivelFormacionMadre`,
			`fkNivelFormacionPadre`,
			`cantidadMiembrosHogar`,
			`matriculasOculto`,
			`matriculasAccion`,
			`matriculasfecha`,
			`matriculasuser`)
			VALUES
			(:matriculasId1,
			:CodigoMatricula1,
			:fechaMatricula1,
			:montoCreditoEducativo1,
			:montoAyudaEconomica1,
			:fechainicioCarrera1,
			:estudiantes_numeroIdentificacion1,
			:carreras_carrerasId1,
			:jornadasacademicas_JornadaAcademicaId1,
			:periodoacademico_periodoacademicoId1,
			:paralelo_paraleloId1,
			:tipomatricula_tipoMatriculaId1,
			:nivelacademico_NivelAcademicoQueCursaId1,
			:recibepensiondiferenciada_recibePensionDiferenciadaId1,
			:estudianteocupacion_estudianteOcupacionId1,
			:bonodesarrollo_bonoDesarrolloId1,
			:ingresosestudiante_ingresosestudianteId1,
			:harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid1,
			:haperdidolagratuidad_HaPerdidoLaGratuidadId1,
			:ingresoTotalHogar1,
			:fkNivelFormacionMadre1,
			:fkNivelFormacionPadre1,
			:cantidadMiembrosHogar1,
			:matriculasOculto1,
			:matriculasAccion1,
			:matriculasfecha1,
			:matriculasuser1);
			");

	$insert->bindValue('matriculasId1',$matricula->get_matriculasId());
	$insert->bindValue('CodigoMatricula1',$matricula->get_codigoMatricula());
	$insert->bindValue('fechaMatricula1',$matricula->get_fechaMatricula());
	$insert->bindValue('montoCreditoEducativo1',$matricula->get_montoCreditoEducativo());
	$insert->bindValue('montoAyudaEconomica1',$matricula->get_montoAyudaEconomica());
	$insert->bindValue('fechainicioCarrera1',$matricula->get_fechainicioCarrera());
	$insert->bindValue('estudiantes_numeroIdentificacion1',$matricula->get_estudiantes_numeroIdentificacion());
	$insert->bindValue('carreras_carrerasId1',$matricula->get_carreras_carrerasId());
	$insert->bindValue('jornadasacademicas_JornadaAcademicaId1',$matricula->get_jornadasAcademicas());
	$insert->bindValue('periodoacademico_periodoacademicoId1',$matricula->get_periodoAcademic());
	$insert->bindValue('paralelo_paraleloId1',$matricula->get_paralelo_paraleloId());
	$insert->bindValue('tipomatricula_tipoMatriculaId1',$matricula->get_tipoMatricula_());
	$insert->bindValue('nivelacademico_NivelAcademicoQueCursaId1',$matricula->get_nivelAcademico_NivelAcademicoQueCursaId());
	$insert->bindValue('recibepensiondiferenciada_recibePensionDiferenciadaId1',$matricula->get_recibePensionDiferenciada());
	$insert->bindValue('estudianteocupacion_estudianteOcupacionId1',$matricula->get_estudianteocupacion_estudianteOcupacionId());
	$insert->bindValue('bonodesarrollo_bonoDesarrolloId1',$matricula->get_bonodesarrollo_bonoDesarrolloId());
	$insert->bindValue('ingresosestudiante_ingresosestudianteId1',$matricula->get_ingresosestudiante());
	$insert->bindValue('harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid1',$matricula->get_haRepetidoAlMenosUnaMateri());
	$insert->bindValue('haperdidolagratuidad_HaPerdidoLaGratuidadId1',$matricula->get_haPerdidoLaGratuidad());
	$insert->bindValue('ingresoTotalHogar1',$matricula->get_ingresoTotalHogar());
	$insert->bindValue('fkNivelFormacionMadre1',$matricula->get_fkNivelFormacionMadre());
	$insert->bindValue('fkNivelFormacionPadre1',$matricula->get_fkNivelFormacionPadre());
	$insert->bindValue('cantidadMiembrosHogar1',$matricula->get_cantidadMiembrosHogar());
	$insert->bindValue('matriculasOculto1',$matricula->get_matriculasOculto());
	$insert->bindValue('matriculasAccion1',$matricula->get_matriculasAccion());
	$insert->bindValue('matriculasfecha1',$matricula->get_matriculasfecha());
	$insert->bindValue('matriculasuser1',$matricula->get_matriculasuser());
	$insert->execute();
	}

	public  function actualizar($matricula){
		$db=Db::conectar();
			$actualizar=$db->prepare("UPDATE `matriculas`
			SET
			`matriculasId` = :matriculasId1,
			`CodigoMatricula` = :CodigoMatricula1,
			`fechaMatricula` = :fechaMatricula1,
			`montoCreditoEducativo` = :montoCreditoEducativo1,
			`montoAyudaEconomica` = :montoAyudaEconomica1,
			`fechainicioCarrera` = :fechainicioCarrera1,
			`estudiantes_numeroIdentificacion` = :estudiantes_numeroIdentificacion1,
			`carreras_carrerasId` = :carreras_carrerasId1,
			`jornadasacademicas_JornadaAcademicaId` = :jornadasacademicas_JornadaAcademicaId1,
			`periodoacademico_periodoacademicoId` = :periodoacademico_periodoacademicoId1,
			`paralelo_paraleloId` = :paralelo_paraleloId1,
			`tipomatricula_tipoMatriculaId` = :tipomatricula_tipoMatriculaId1,
			`nivelacademico_NivelAcademicoQueCursaId` = :nivelacademico_NivelAcademicoQueCursaId1,
			`recibepensiondiferenciada_recibePensionDiferenciadaId` = :recibepensiondiferenciada_recibePensionDiferenciadaId1,
			`estudianteocupacion_estudianteOcupacionId` = :estudianteocupacion_estudianteOcupacionId1,
			`bonodesarrollo_bonoDesarrolloId` = :bonodesarrollo_bonoDesarrolloId1,
			`ingresosestudiante_ingresosestudianteId` = :ingresosestudiante_ingresosestudianteId1,
			`harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid` = :harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid1,
			`haperdidolagratuidad_HaPerdidoLaGratuidadId` = :haperdidolagratuidad_HaPerdidoLaGratuidadId1,
			`ingresoTotalHogar` = :ingresoTotalHogar1,
			`fkNivelFormacionMadre` = :fkNivelFormacionMadre1,
			`fkNivelFormacionPadre` = :fkNivelFormacionPadre1,
			`cantidadMiembrosHogar` = :cantidadMiembrosHogar1,
			`matriculasOculto` = :matriculasOculto1,
			`matriculasAccion` = :matriculasAccion1,
			`matriculasfecha` = :matriculasfecha1,
			`matriculasuser` = :matriculasuser1
			WHERE `matriculasId` = :matriculasId1;
		");
		$actualizar->bindValue('matriculasId1',$matricula->get_matriculasId());
		$actualizar->bindValue('CodigoMatricula1',$matricula->get_codigoMatricula());
		$actualizar->bindValue('fechaMatricula1',$matricula->get_fechaMatricula());
		$actualizar->bindValue('montoCreditoEducativo1',$matricula->get_montoCreditoEducativo());
		$actualizar->bindValue('montoAyudaEconomica1',$matricula->get_montoAyudaEconomica());
		$actualizar->bindValue('fechainicioCarrera1',$matricula->get_fechainicioCarrera());
		$actualizar->bindValue('estudiantes_numeroIdentificacion1',$matricula->get_estudiantes_numeroIdentificacion());
		$actualizar->bindValue('carreras_carrerasId1',$matricula->get_carreras_carrerasId());
		$actualizar->bindValue('jornadasacademicas_JornadaAcademicaId1',$matricula->get_jornadasAcademicas());
		$actualizar->bindValue('periodoacademico_periodoacademicoId1',$matricula->get_periodoAcademic());
		$actualizar->bindValue('paralelo_paraleloId1',$matricula->get_paralelo_paraleloId());
		$actualizar->bindValue('tipomatricula_tipoMatriculaId1',$matricula->get_tipoMatricula_());
		$actualizar->bindValue('nivelacademico_NivelAcademicoQueCursaId1',$matricula->get_nivelAcademico_NivelAcademicoQueCursaId());
		$actualizar->bindValue('recibepensiondiferenciada_recibePensionDiferenciadaId1',$matricula->get_recibePensionDiferenciada());
		$actualizar->bindValue('estudianteocupacion_estudianteOcupacionId1',$matricula->get_estudianteocupacion_estudianteOcupacionId());
		$actualizar->bindValue('bonodesarrollo_bonoDesarrolloId1',$matricula->get_bonodesarrollo_bonoDesarrolloId());
		$actualizar->bindValue('ingresosestudiante_ingresosestudianteId1',$matricula->get_ingresosestudiante());
		$actualizar->bindValue('harepetidoalmenosunamateria_HaRepetidoAlMenosUnaMateriaid1',$matricula->get_haRepetidoAlMenosUnaMateri());
		$actualizar->bindValue('haperdidolagratuidad_HaPerdidoLaGratuidadId1',$matricula->get_haPerdidoLaGratuidad());
		$actualizar->bindValue('ingresoTotalHogar1',$matricula->get_ingresoTotalHogar());
		$actualizar->bindValue('fkNivelFormacionMadre1',$matricula->get_fkNivelFormacionMadre());
		$actualizar->bindValue('fkNivelFormacionPadre1',$matricula->get_fkNivelFormacionPadre());
		$actualizar->bindValue('cantidadMiembrosHogar1',$matricula->get_cantidadMiembrosHogar());
		$actualizar->bindValue('matriculasOculto1',$matricula->get_matriculasOculto());
		$actualizar->bindValue('matriculasAccion1',$matricula->get_matriculasAccion());
		$actualizar->bindValue('matriculasfecha1',$matricula->get_matriculasfecha());
		$actualizar->bindValue('matriculasuser1',$matricula->get_matriculasuser());
    $actualizar->execute();
	}

	  public  function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM matriculas WHERE matriculasId=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

}
?>