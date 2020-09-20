<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Estudiantes.php");

use Crud\Db;
use Clasesphp\Estudiantes;

class CrudEstudiantes
{
	// constructor de la clase
	public  function __construct()
	{
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listaestudiantes = null;
		$select = $db->query("SELECT * FROM estudiantes");
		foreach ($select->fetchAll() as $estudiantes1) {
			$myestudiantes = new Estudiantes();
			$myestudiantes->setFktipodocumentoId($estudiantes1['fktipodocumentoId']);
			$myestudiantes->setNumeroIdentificacion($estudiantes1['numeroIdentificacion']);
			$myestudiantes->setPrimerApellido($estudiantes1['primerApellido']);
			$myestudiantes->setSegundoApellido($estudiantes1['segundoApellido']);
			$myestudiantes->setPrimerNombre($estudiantes1['primerNombre']);
			$myestudiantes->setSegundoNombre($estudiantes1['segundoNombre']);
			$myestudiantes->setFksexoId($estudiantes1['fksexoId']);
			$myestudiantes->setFkGeneroId($estudiantes1['fkGeneroId']);
			$myestudiantes->setFkEstadoCivilId($estudiantes1['fkEstadoCivilId']);
			$myestudiantes->setFkPuebloNacionalidadId($estudiantes1['fkPuebloNacionalidadId']);
			$myestudiantes->setFkTipoSangreId($estudiantes1['fkTipoSangreId']);
			$myestudiantes->setFechaNacimiento($estudiantes1['fechaNacimiento']);
			$myestudiantes->setFkCantonNacimientoId($estudiantes1['fkCantonNacimientoId']);
			$myestudiantes->setCorreoElectronico($estudiantes1['correoElectronico']);
			$myestudiantes->setNumeroCelular($estudiantes1['numeroCelular']);
			$myestudiantes->setNumeroComvencional($estudiantes1['numeroComvencional']);
			$myestudiantes->setUsuarioEstudiantes($estudiantes1['usuarioEstudiantes']);
			$myestudiantes->setPasswordEstudiantes($estudiantes1['passwordEstudiantes']);
			$myestudiantes->setCategoriaMigratoriaId($estudiantes1['categoriaMigratoria_categoriaMigratoriaId']);
			$myestudiantes->setIdiomas($estudiantes1['idiomas']);
			$myestudiantes->setAccesodepartamentoCodigo($estudiantes1['accesodepartamento_codigo']);
			//$myestudiantes->set_estudiantesimg($estudiantes1['estudiantesimg']);
			$myestudiantes->setEstudiantesOculto($estudiantes1['estudiantesOculto']);
			$myestudiantes->setEstudiantesAccion($estudiantes1['estudiantesAccion']);
			$myestudiantes->setEstudiantesfecha($estudiantes1['estudiantesfecha']);
			$myestudiantes->setEstudiantesuser($estudiantes1['estudiantesuser']);

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
		$estudiantes1 = $select->fetch();
		$myestudiantes = new Estudiantes();
		///--------------------------------------------------
		$myestudiantes->setFktipodocumentoId($estudiantes1['fktipodocumentoId']);
		$myestudiantes->setNumeroIdentificacion($estudiantes1['numeroIdentificacion']);
		$myestudiantes->setPrimerApellido($estudiantes1['primerApellido']);
		$myestudiantes->setSegundoApellido($estudiantes1['segundoApellido']);
		$myestudiantes->setPrimerNombre($estudiantes1['primerNombre']);
		$myestudiantes->setSegundoNombre($estudiantes1['segundoNombre']);
		$myestudiantes->setFksexoId($estudiantes1['fksexoId']);
		$myestudiantes->setFkGeneroId($estudiantes1['fkGeneroId']);
		$myestudiantes->setFkEstadoCivilId($estudiantes1['fkEstadoCivilId']);
		$myestudiantes->setFkPuebloNacionalidadId($estudiantes1['fkPuebloNacionalidadId']);
		$myestudiantes->setFkTipoSangreId($estudiantes1['fkTipoSangreId']);
		$myestudiantes->setFechaNacimiento($estudiantes1['fechaNacimiento']);
		$myestudiantes->setFkCantonNacimientoId($estudiantes1['fkCantonNacimientoId']);
		$myestudiantes->setCorreoElectronico($estudiantes1['correoElectronico']);
		$myestudiantes->setNumeroCelular($estudiantes1['numeroCelular']);
		$myestudiantes->setNumeroComvencional($estudiantes1['numeroComvencional']);
		$myestudiantes->setUsuarioEstudiantes($estudiantes1['usuarioEstudiantes']);
		$myestudiantes->setPasswordEstudiantes($estudiantes1['passwordEstudiantes']);
		$myestudiantes->setCategoriaMigratoriaId($estudiantes1['categoriaMigratoria_categoriaMigratoriaId']);
		$myestudiantes->setIdiomas($estudiantes1['idiomas']);
		$myestudiantes->setAccesodepartamentoCodigo($estudiantes1['accesodepartamento_codigo']);
		//$myestudiantes->set_estudiantesimg($estudiantes1['estudiantesimg']);
		$myestudiantes->setEstudiantesOculto($estudiantes1['estudiantesOculto']);
		$myestudiantes->setEstudiantesAccion($estudiantes1['estudiantesAccion']);
		$myestudiantes->setEstudiantesfecha($estudiantes1['estudiantesfecha']);
		$myestudiantes->setEstudiantesuser($estudiantes1['estudiantesuser']);
		///----------------------------------------------
		return $myestudiantes;
	}
	public function cargarImg($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT estudiantesimg FROM estudiantes where numeroIdentificacion=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$estudiantes1 = $select->fetch();
		return $estudiantes1;
	}
	public  function obtenerPermisosEstudiante($id, $pass)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM estudiantes where usuarioEstudiantes=:id and passwordEstudiantes=:pass;");
		$select->bindValue('id', $id);
		$select->bindValue('pass', $pass);
		$select->execute();
		$estudiantes1 = $select->fetch();
		///
		$myestudiantes = ($estudiantes1['numeroIdentificacion']);
		return $myestudiantes;
	}
	public function insertar($estudiantes1)
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
		:usuarioEstudiantes1,
		:passwordEstudiantes1,
		:categoriaMigratoria_categoriaMigratoriaId1,
		:idiomas1,
		:accesodepartamento_codigo1,
		:estudiantesimg1,
		:estudiantesOculto1,
		:estudiantesAccion1,
		:estudiantesfecha1,
		:estudiantesuser1);');
		$insert->bindValue('fktipodocumentoId1', $estudiantes1->getFktipodocumentoId());
		$insert->bindValue('numeroIdentificacion1', $estudiantes1->getNumeroIdentificacion());
		$insert->bindValue('primerApellido1', $estudiantes1->getPrimerApellido());
		$insert->bindValue('segundoApellido1', $estudiantes1->getSegundoApellido());
		$insert->bindValue('primerNombre1', $estudiantes1->getPrimerNombre());
		$insert->bindValue('segundoNombre1', $estudiantes1->getSegundoNombre());
		$insert->bindValue('fksexoId1', $estudiantes1->getFksexoId());
		$insert->bindValue('fkGeneroId1', $estudiantes1->getFkGeneroId());
		$insert->bindValue('fkEstadoCivilId1', $estudiantes1->getFkEstadoCivilId());
		$insert->bindValue('fkPuebloNacionalidadId1', $estudiantes1->getFkPuebloNacionalidadId());
		$insert->bindValue('fkTipoSangreId1', $estudiantes1->getFkTipoSangreId());
		$insert->bindValue('fechaNacimiento1', $estudiantes1->getFechaNacimiento());
		$insert->bindValue('fkCantonNacimientoId1', $estudiantes1->getFkCantonNacimientoId());
		$insert->bindValue('correoElectronico1', $estudiantes1->getCorreoElectronico());
		$insert->bindValue('numeroCelular1', $estudiantes1->getNumeroCelular());
		$insert->bindValue('numeroComvencional1', $estudiantes1->getNumeroComvencional());
		$insert->bindValue('usuarioEstudiantes1', $estudiantes1->getUsuarioEstudiantes());
		$insert->bindValue('estudiantesimg1', NULL);
		$insert->bindValue('passwordEstudiantes1', $estudiantes1->getPasswordEstudiantes());
		$insert->bindValue('categoriaMigratoria_categoriaMigratoriaId1', $estudiantes1->getCategoriaMigratoriaId());
		$insert->bindValue('idiomas1', $estudiantes1->getIdiomas());
		$insert->bindValue('accesodepartamento_codigo1', $estudiantes1->getAccesodepartamentoCodigo());
		$insert->bindValue('estudiantesOculto1', $estudiantes1->getEstudiantesOculto());
		$insert->bindValue('estudiantesAccion1', $estudiantes1->getEstudiantesAccion());
		$insert->bindValue('estudiantesfecha1', $estudiantes1->getEstudiantesfecha());
		$insert->bindValue('estudiantesuser1', $estudiantes1->getEstudiantesuser());

		$insert->execute();
	}

	public  function actualizar($estudiantes1)
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
			`usuarioEstudiantes` = :usuarioEstudiantes1,
			`passwordEstudiantes` = :passwordEstudiantes1,
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
		$actualizar->bindValue('fktipodocumentoId1', $estudiantes1->getFktipodocumentoId());
		$actualizar->bindValue('numeroIdentificacion1', $estudiantes1->getNumeroIdentificacion());
		$actualizar->bindValue('primerApellido1', $estudiantes1->getPrimerApellido());
		$actualizar->bindValue('segundoApellido1', $estudiantes1->getSegundoApellido());
		$actualizar->bindValue('primerNombre1', $estudiantes1->getPrimerNombre());
		$actualizar->bindValue('segundoNombre1', $estudiantes1->getSegundoNombre());
		$actualizar->bindValue('fksexoId1', $estudiantes1->getFksexoId());
		$actualizar->bindValue('fkGeneroId1', $estudiantes1->getFkGeneroId());
		$actualizar->bindValue('fkEstadoCivilId1', $estudiantes1->getFkEstadoCivilId());
		$actualizar->bindValue('fkPuebloNacionalidadId1', $estudiantes1->getFkPuebloNacionalidadId());
		$actualizar->bindValue('fkTipoSangreId1', $estudiantes1->getFkTipoSangreId());
		$actualizar->bindValue('fechaNacimiento1', $estudiantes1->getFechaNacimiento());
		$actualizar->bindValue('fkCantonNacimientoId1', $estudiantes1->getFkCantonNacimientoId());
		$actualizar->bindValue('correoElectronico1', $estudiantes1->getCorreoElectronico());
		$actualizar->bindValue('numeroCelular1', $estudiantes1->getNumeroCelular());
		$actualizar->bindValue('numeroComvencional1', $estudiantes1->getNumeroComvencional());
		$actualizar->bindValue('usuarioEstudiantes1', $estudiantes1->getUsuarioEstudiantes());
		$actualizar->bindValue('estudiantesimg1', NULL);
		$actualizar->bindValue('passwordEstudiantes1', $estudiantes1->getPasswordEstudiantes());
		$actualizar->bindValue('categoriaMigratoria_categoriaMigratoriaId1', $estudiantes1->getCategoriaMigratoriaId());
		$actualizar->bindValue('idiomas1', $estudiantes1->getIdiomas());
		$actualizar->bindValue('accesodepartamento_codigo1', $estudiantes1->getAccesodepartamentoCodigo());
		$actualizar->bindValue('estudiantesOculto1', $estudiantes1->getEstudiantesOculto());
		$actualizar->bindValue('estudiantesAccion1', $estudiantes1->getEstudiantesAccion());
		$actualizar->bindValue('estudiantesfecha1', $estudiantes1->getEstudiantesfecha());
		$actualizar->bindValue('estudiantesuser1', $estudiantes1->getEstudiantesuser());

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
