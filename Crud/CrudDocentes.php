<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Docentes.php");

use Clasesphp\Docentes;
use Crud\Db;

class CrudDocentes
{
	// constructor de la clase
	public  function __construct()
	{
	}
	public  function mostrar()
	{
		$db = Db::conectar();
		$listaestudiantes = null;
		$select = $db->query("SELECT * FROM docentes");
		foreach ($select->fetchAll() as $docentes1) {
			$myestudiantes = new Docentes();
			$myestudiantes->setTipodocumentoId($docentes1['tipodocumentoId']);
			$myestudiantes->setNumeroIdentificacion($docentes1['numeroIdentificacion']);
			$myestudiantes->setPrimerApellido($docentes1['primerApellido']);
			$myestudiantes->setSegundoApellido($docentes1['segundoApellido']);
			$myestudiantes->setPrimerNombre($docentes1['primerNombre']);
			$myestudiantes->setSegundoNombre($docentes1['segundoNombre']);
			$myestudiantes->setFkDocenteSexoId($docentes1['fkDocenteSexoId']);
			$myestudiantes->setFkDocenteGeneroId($docentes1['fkDocenteGeneroId']);
			$myestudiantes->setFkDocenteEstadocivilId($docentes1['fkDocenteEstadocivilId']);
			$myestudiantes->setFkDocentePuebloNacionalidadId($docentes1['fkDocentePuebloNacionalidadId']);
			$myestudiantes->setDireccionDomiciliaria($docentes1['direccionDomiciliaria']);
			$myestudiantes->setFkDocenteProvinciaSufragio($docentes1['fkDocenteProvinciaSufragio']);
			$myestudiantes->setNumeroCelular($docentes1['numeroCelular']);
			$myestudiantes->setCorreoElectronico($docentes1['correoElectronico']);
			$myestudiantes->setNumDomicilio($docentes1['numDomicilio']);
			$myestudiantes->setFkDocenteTipoEnfermedadCatastroficaId($docentes1['fkDocenteTipoEnfermedadCatastroficaId']);
			$myestudiantes->setFechaNacimiento($docentes1['fechaNacimiento']);
			$myestudiantes->setFkDocentePaisNacionalidadId($docentes1['fkDocentePaisNacionalidadId']);
			$myestudiantes->setFechaIngresoIES($docentes1['fechaIngresoIES']);
			$myestudiantes->setFechaSalidaIES($docentes1['fechaSalidaIES']);
			$myestudiantes->setFkDocenteRelacionLaboralIESId($docentes1['fkDocenteRelacionLaboralIESId']);
			$myestudiantes->setFkDocenteEscalafonDocenteId($docentes1['fkDocenteEscalafonDocenteId']);
			$myestudiantes->setFkDocenteIngresoConConcursoMeritosId($docentes1['fkDocenteIngresoConConcursoMeritosId']);
			$myestudiantes->setFkDocenteCargoDirectivoId($docentes1['fkDocenteCargoDirectivoId']);
			$myestudiantes->setNombreUnidadAcademica($docentes1['nombreUnidadAcademica']);
			$myestudiantes->setNroasignaturasdocente($docentes1['nroasignaturasdocente']);
			$myestudiantes->setNroHorasLaborablesSemanaEnCarreraPrograma($docentes1['nroHorasLaborablesSemanaEnCarreraPrograma']);
			$myestudiantes->setNroHorasClaseSemanaCarreraPrograma($docentes1['nroHorasClaseSemanaCarreraPrograma']);
			$myestudiantes->setNroHorasInvestigacionSemanaCarreraPrograma($docentes1['nroHorasInvestigacionSemanaCarreraPrograma']);
			$myestudiantes->setNroHorasAdministrativasSemanaCarreraPrograma($docentes1['nroHorasAdministrativasSemanaCarreraPrograma']);
			$myestudiantes->setNroHorasOtrasActividadesSemanaCarreraPrograma($docentes1['nroHorasOtrasActividadesSemanaCarreraPrograma']);
			$myestudiantes->setNroHorasVinculacionSociedad($docentes1['nroHorasVinculacionSociedad']);
			$myestudiantes->setSalarioMensual($docentes1['salarioMensual']);
			$myestudiantes->setFkDocenteDocenciaTecnicoSuperiorId($docentes1['fkDocenteDocenciaTecnicoSuperiorId']);
			$myestudiantes->setFkDocenteDocenciaTecnologicoId($docentes1['fkDocenteDocenciaTecnologicoId']);
			$myestudiantes->setFkDocenteEstaEnPeriodoSabaticoId($docentes1['fkDocenteEstaEnPeriodoSabaticoId']);
			$myestudiantes->setFechaInicioPeriodoSabatico($docentes1['fechaInicioPeriodoSabatico']);
			$myestudiantes->setFkDocenteEstaCursandoEstudiosId($docentes1['fkDocenteEstaCursandoEstudiosId']);
			$myestudiantes->setFkDocenteInstitucionDondeCursaEstudiosId($docentes1['fkDocenteInstitucionDondeCursaEstudiosId']);
			$myestudiantes->setFkDocentePaisEstudiosId($docentes1['fkDocentePaisEstudiosId']);
			$myestudiantes->setTituloAObtener($docentes1['tituloAObtener']);
			$myestudiantes->setUsuarioDocentes($docentes1['usuarioDocentes']);
			$myestudiantes->setPasswordDocentes($docentes1['passwordDocentes']);
			$myestudiantes->setNiveDeFormacionId($docentes1['niveDeFormacionId']);
			$myestudiantes->setAccesodepartamentoIdaccesodepartamento($docentes1['accesodepartamento_idaccesodepartamento']);
			$myestudiantes->setDocentesOculto($docentes1['docentesOculto']);
			$myestudiantes->setDocentesAccion($docentes1['docentesAccion']);
			$myestudiantes->setDocentesfecha($docentes1['docentesfecha']);
			$myestudiantes->setDocentesuser($docentes1['docentesuser']);
			////
			$listaestudiantes[] = $myestudiantes;
		}
		return $listaestudiantes;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM estudiantes where numeroIdentificacion=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}

	public  function login($id, $pass)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM estudiantes where usuarioEstudiantes=:id and passwordEstudiantes=:pass;");
		$select->bindValue('id', $id);
		$select->bindValue('pass', $pass);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}

	public  function obtenerEstudiantes($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM estudiantes where numeroIdentificacion=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$docentes1 = $select->fetch();
		$myestudiantes = new Estudiantes();
		///--------------------------------------------------
		$myestudiantes->setFktipodocumentoId($docentes1['fktipodocumentoId']);
		$myestudiantes->setNumeroIdentificacion($docentes1['numeroIdentificacion']);
		$myestudiantes->setPrimerApellido($docentes1['primerApellido']);
		$myestudiantes->setSegundoApellido($docentes1['segundoApellido']);
		$myestudiantes->setPrimerNombre($docentes1['primerNombre']);
		$myestudiantes->setSegundoNombre($docentes1['segundoNombre']);
		$myestudiantes->setFksexoId($docentes1['fksexoId']);
		$myestudiantes->setFkGeneroId($docentes1['fkGeneroId']);
		$myestudiantes->setFkEstadoCivilId($docentes1['fkEstadoCivilId']);
		$myestudiantes->setFkPuebloNacionalidadId($docentes1['fkPuebloNacionalidadId']);
		$myestudiantes->setFkTipoSangreId($docentes1['fkTipoSangreId']);
		$myestudiantes->setFechaNacimiento($docentes1['fechaNacimiento']);
		$myestudiantes->setFkCantonNacimientoId($docentes1['fkCantonNacimientoId']);
		$myestudiantes->setCorreoElectronico($docentes1['correoElectronico']);
		$myestudiantes->setNumeroCelular($docentes1['numeroCelular']);
		$myestudiantes->setNumeroComvencional($docentes1['numeroComvencional']);
		$myestudiantes->setUsuarioEstudiantes($docentes1['usuarioEstudiantes']);
		$myestudiantes->setPasswordEstudiantes($docentes1['passwordEstudiantes']);
		$myestudiantes->setCategoriaMigratoriaId($docentes1['categoriaMigratoria_categoriaMigratoriaId']);
		$myestudiantes->setIdiomas($docentes1['idiomas']);
		$myestudiantes->setAccesodepartamentoCodigo($docentes1['accesodepartamento_codigo']);
		//$myestudiantes->set_estudiantesimg($docentes1['estudiantesimg']);
		$myestudiantes->setEstudiantesOculto($docentes1['estudiantesOculto']);
		$myestudiantes->setEstudiantesAccion($docentes1['estudiantesAccion']);
		$myestudiantes->setEstudiantesfecha($docentes1['estudiantesfecha']);
		$myestudiantes->setEstudiantesuser($docentes1['estudiantesuser']);
		///----------------------------------------------
		return $myestudiantes;
	}
	public function cargarImg($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT estudiantesimg FROM estudiantes where numeroIdentificacion=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$docentes1 = $select->fetch();
		return $docentes1;
	}
	public  function obtenerPermisosEstudiante($id, $pass)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM estudiantes where usuarioEstudiantes=:id and passwordEstudiantes=:pass;");
		$select->bindValue('id', $id);
		$select->bindValue('pass', $pass);
		$select->execute();
		$docentes1 = $select->fetch();
		///
		$myestudiantes = ($docentes1['numeroIdentificacion']);
		return $myestudiantes;
	}
	public function insertar($docentes1)
	{

		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `estudiantes`
		(`fktipodocumentoId`,
		`numeroIdentificacion`,
		`primerApellido`,
		`segundoApellido`,
		`primerNombre`,
		`segundoNombre`,
		`fksexoId`,
		`fkGeneroId`,
		`fkEstadoCivilId`,
		`fkPuebloNacionalidadId`,
		`fkTipoSangreId`,
		`fechaNacimiento`,
		`fkCantonNacimientoId`,
		`correoElectronico`,
		`numeroCelular`,
		`numeroComvencional`,
		`usuarioEstudiantes`,
		`passwordEstudiantes`,
		`categoriaMigratoria_categoriaMigratoriaId`,
		`idiomas`,
		`accesodepartamento_codigo`,
		`estudiantesimg`,
		`estudiantesOculto`,
		`estudiantesAccion`,
		`estudiantesfecha`,
		`estudiantesuser`)
		VALUES
		(:fktipodocumentoId1,
		:numeroIdentificacion1,
		:primerApellido1,
		:segundoApellido1,
		:primerNombre1,
		:segundoNombre1,
		:fksexoId1,
		:fkGeneroId1,
		:fkEstadoCivilId1,
		:fkPuebloNacionalidadId1,
		:fkTipoSangreId1,
		:fechaNacimiento1,
		:fkCantonNacimientoId1,
		:correoElectronico1,
		:numeroCelular1,
		:numeroComvencional1,
		:usuariodocentes1,
		:passworddocentes1,
		:categoriaMigratoria_categoriaMigratoriaId1,
		:idiomas1,
		:accesodepartamento_codigo1,
		:estudiantesimg1,
		:estudiantesOculto1,
		:estudiantesAccion1,
		:estudiantesfecha1,
		:estudiantesuser1);');
		$insert->bindValue('fktipodocumentoId1', $docentes1->getFktipodocumentoId());
		$insert->bindValue('numeroIdentificacion1', $docentes1->getNumeroIdentificacion());
		$insert->bindValue('primerApellido1', $docentes1->getPrimerApellido());
		$insert->bindValue('segundoApellido1', $docentes1->getSegundoApellido());
		$insert->bindValue('primerNombre1', $docentes1->getPrimerNombre());
		$insert->bindValue('segundoNombre1', $docentes1->getSegundoNombre());
		$insert->bindValue('fksexoId1', $docentes1->getFksexoId());
		$insert->bindValue('fkGeneroId1', $docentes1->getFkGeneroId());
		$insert->bindValue('fkEstadoCivilId1', $docentes1->getFkEstadoCivilId());
		$insert->bindValue('fkPuebloNacionalidadId1', $docentes1->getFkPuebloNacionalidadId());
		$insert->bindValue('fkTipoSangreId1', $docentes1->getFkTipoSangreId());
		$insert->bindValue('fechaNacimiento1', $docentes1->getFechaNacimiento());
		$insert->bindValue('fkCantonNacimientoId1', $docentes1->getFkCantonNacimientoId());
		$insert->bindValue('correoElectronico1', $docentes1->getCorreoElectronico());
		$insert->bindValue('numeroCelular1', $docentes1->getNumeroCelular());
		$insert->bindValue('numeroComvencional1', $docentes1->getNumeroComvencional());
		$insert->bindValue('usuariodocentes1', $docentes1->getUsuarioEstudiantes());
		$insert->bindValue('estudiantesimg1', NULL);
		$insert->bindValue('passworddocentes1', $docentes1->getPasswordEstudiantes());
		$insert->bindValue('categoriaMigratoria_categoriaMigratoriaId1', $docentes1->getCategoriaMigratoriaId());
		$insert->bindValue('idiomas1', $docentes1->getIdiomas());
		$insert->bindValue('accesodepartamento_codigo1', $docentes1->getAccesodepartamentoCodigo());
		$insert->bindValue('estudiantesOculto1', $docentes1->getEstudiantesOculto());
		$insert->bindValue('estudiantesAccion1', $docentes1->getEstudiantesAccion());
		$insert->bindValue('estudiantesfecha1', $docentes1->getEstudiantesfecha());
		$insert->bindValue('estudiantesuser1', $docentes1->getEstudiantesuser());

		$insert->execute();
	}

	public  function actualizar($docentes1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare(
			"UPDATE `estudiantes`
			SET
			`fktipodocumentoId` = :fktipodocumentoId1,
			`numeroIdentificacion` = :numeroIdentificacion1,
			`primerApellido` = :primerApellido1,
			`segundoApellido` = :segundoApellido1,
			`primerNombre` = :primerNombre1,
			`segundoNombre` = :segundoNombre1,
			`fksexoId` = :fksexoId1,
			`fkGeneroId` = :fkGeneroId1,
			`fkEstadoCivilId` = :fkEstadoCivilId1,
			`fkPuebloNacionalidadId` = :fkPuebloNacionalidadId1,
			`fkTipoSangreId` = :fkTipoSangreId1,
			`fechaNacimiento` = :fechaNacimiento1,
			`fkCantonNacimientoId` = :fkCantonNacimientoId1,
			`correoElectronico` = :correoElectronico1,
			`numeroCelular` = :numeroCelular1,
			`numeroComvencional` = :numeroComvencional1,
			`usuarioEstudiantes` = :usuariodocentes1,
			`passwordEstudiantes` = :passworddocentes1,
			`categoriaMigratoria_categoriaMigratoriaId` = :categoriaMigratoria_categoriaMigratoriaId1,
			`idiomas` = :idiomas1,
			`accesodepartamento_codigo` = :accesodepartamento_codigo1,
			`estudiantesimg` = :estudiantesimg1,
			`estudiantesOculto` = :estudiantesOculto1,
			`estudiantesAccion` = :estudiantesAccion1,
			`estudiantesfecha` = :estudiantesfecha1,
			`estudiantesuser` = :estudiantesuser1
			WHERE `numeroIdentificacion` = :fktipodocumentoId1;

			"
		);
		$actualizar->bindValue('fktipodocumentoId1', $docentes1->getFktipodocumentoId());
		$actualizar->bindValue('numeroIdentificacion1', $docentes1->getNumeroIdentificacion());
		$actualizar->bindValue('primerApellido1', $docentes1->getPrimerApellido());
		$actualizar->bindValue('segundoApellido1', $docentes1->getSegundoApellido());
		$actualizar->bindValue('primerNombre1', $docentes1->getPrimerNombre());
		$actualizar->bindValue('segundoNombre1', $docentes1->getSegundoNombre());
		$actualizar->bindValue('fksexoId1', $docentes1->getFksexoId());
		$actualizar->bindValue('fkGeneroId1', $docentes1->getFkGeneroId());
		$actualizar->bindValue('fkEstadoCivilId1', $docentes1->getFkEstadoCivilId());
		$actualizar->bindValue('fkPuebloNacionalidadId1', $docentes1->getFkPuebloNacionalidadId());
		$actualizar->bindValue('fkTipoSangreId1', $docentes1->getFkTipoSangreId());
		$actualizar->bindValue('fechaNacimiento1', $docentes1->getFechaNacimiento());
		$actualizar->bindValue('fkCantonNacimientoId1', $docentes1->getFkCantonNacimientoId());
		$actualizar->bindValue('correoElectronico1', $docentes1->getCorreoElectronico());
		$actualizar->bindValue('numeroCelular1', $docentes1->getNumeroCelular());
		$actualizar->bindValue('numeroComvencional1', $docentes1->getNumeroComvencional());
		$actualizar->bindValue('usuariodocentes1', $docentes1->getUsuarioEstudiantes());
		$actualizar->bindValue('estudiantesimg1', NULL);
		$actualizar->bindValue('passworddocentes1', $docentes1->getPasswordEstudiantes());
		$actualizar->bindValue('categoriaMigratoria_categoriaMigratoriaId1', $docentes1->getCategoriaMigratoriaId());
		$actualizar->bindValue('idiomas1', $docentes1->getIdiomas());
		$actualizar->bindValue('accesodepartamento_codigo1', $docentes1->getAccesodepartamentoCodigo());
		$actualizar->bindValue('estudiantesOculto1', $docentes1->getEstudiantesOculto());
		$actualizar->bindValue('estudiantesAccion1', $docentes1->getEstudiantesAccion());
		$actualizar->bindValue('estudiantesfecha1', $docentes1->getEstudiantesfecha());
		$actualizar->bindValue('estudiantesuser1', $docentes1->getEstudiantesuser());

		$actualizar->execute();
	}
	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM estudiantes WHERE numeroIdentificacion=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
