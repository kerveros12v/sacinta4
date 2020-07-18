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
		$db = Db::conectar();
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listaestudiantes = null;
		$select = $db->query("SELECT * FROM estudiantes");
		foreach ($select->fetchAll() as $estudiantes1) {
			$myestudiantes = new Estudiantes();
			$myestudiantes->set_fktipodocumentoId($estudiantes1['fktipodocumentoId']);
			$myestudiantes->set_numeroIdentificacion($estudiantes1['numeroIdentificacion']);
			$myestudiantes->set_primerApellido($estudiantes1['primerApellido']);
			$myestudiantes->set_segundoApellido($estudiantes1['segundoApellido']);
			$myestudiantes->set_primerNombre($estudiantes1['primerNombre']);
			$myestudiantes->set_segundoNombre($estudiantes1['segundoNombre']);
			$myestudiantes->set_fksexoId($estudiantes1['fksexoId']);
			$myestudiantes->set_fkGeneroId($estudiantes1['fkGeneroId']);
			$myestudiantes->set_fkEstadoCivilId($estudiantes1['fkEstadoCivilId']);
			$myestudiantes->set_fktEtniaId($estudiantes1['fktEtniaId']);
			$myestudiantes->set_fkPuebloNacionalidadId($estudiantes1['fkPuebloNacionalidadId']);
			$myestudiantes->set_fkTipoSangreId($estudiantes1['fkTipoSangreId']);
			$myestudiantes->set_fechaNacimiento($estudiantes1['fechaNacimiento']);
			$myestudiantes->set_fkPaisNacionalidadId($estudiantes1['fkPaisNacionalidadId']);
			$myestudiantes->set_fkProvinciaNacimientoId($estudiantes1['fkProvinciaNacimientoId']);
			$myestudiantes->set_fkCantonNacimientoId($estudiantes1['fkCantonNacimientoId']);
			$myestudiantes->set_correoElectronico($estudiantes1['correoElectronico']);
			$myestudiantes->set_numeroCelular($estudiantes1['numeroCelular']);
			$myestudiantes->set_numeroComvencional($estudiantes1['numeroComvencional']);
			$myestudiantes->set_usuarioEstudiantes($estudiantes1['usuarioEstudiantes']);
			$myestudiantes->set_passwordEstudiantes($estudiantes1['passwordEstudiantes']);
			$myestudiantes->set_categoriaMigratoria_categoriaMigratoriaId($estudiantes1['categoriaMigratoria_categoriaMigratoriaId']);
			$myestudiantes->set_idiomas($estudiantes1['idiomas']);
			$myestudiantes->set_accesodepartamento_codigo($estudiantes1['accesodepartamento_codigo']);
			//$myestudiantes->set_estudiantesimg($estudiantes1['estudiantesimg']);
			$myestudiantes->set_estudiantesOculto($estudiantes1['estudiantesOculto']);
			$myestudiantes->set_estudiantesAccion($estudiantes1['estudiantesAccion']);
			$myestudiantes->set_estudiantesfecha($estudiantes1['estudiantesfecha']);
			$myestudiantes->set_estudiantesuser($estudiantes1['estudiantesuser']);

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
		$myestudiantes->set_fktipodocumentoId($estudiantes1['fktipodocumentoId']);
		$myestudiantes->set_numeroIdentificacion($estudiantes1['numeroIdentificacion']);
		$myestudiantes->set_primerApellido($estudiantes1['primerApellido']);
		$myestudiantes->set_segundoApellido($estudiantes1['segundoApellido']);
		$myestudiantes->set_primerNombre($estudiantes1['primerNombre']);
		$myestudiantes->set_segundoNombre($estudiantes1['segundoNombre']);
		$myestudiantes->set_fksexoId($estudiantes1['fksexoId']);
		$myestudiantes->set_fkGeneroId($estudiantes1['fkGeneroId']);
		$myestudiantes->set_fkEstadoCivilId($estudiantes1['fkEstadoCivilId']);
		$myestudiantes->set_fktEtniaId($estudiantes1['fktEtniaId']);
		$myestudiantes->set_fkPuebloNacionalidadId($estudiantes1['fkPuebloNacionalidadId']);
		$myestudiantes->set_fkTipoSangreId($estudiantes1['fkTipoSangreId']);
		$myestudiantes->set_fechaNacimiento($estudiantes1['fechaNacimiento']);
		$myestudiantes->set_fkPaisNacionalidadId($estudiantes1['fkPaisNacionalidadId']);
		$myestudiantes->set_fkProvinciaNacimientoId($estudiantes1['fkProvinciaNacimientoId']);
		$myestudiantes->set_fkCantonNacimientoId($estudiantes1['fkCantonNacimientoId']);
		$myestudiantes->set_correoElectronico($estudiantes1['correoElectronico']);
		$myestudiantes->set_numeroCelular($estudiantes1['numeroCelular']);
		$myestudiantes->set_numeroComvencional($estudiantes1['numeroComvencional']);
		$myestudiantes->set_usuarioEstudiantes($estudiantes1['usuarioEstudiantes']);
		$myestudiantes->set_passwordEstudiantes($estudiantes1['passwordEstudiantes']);
		$myestudiantes->set_categoriaMigratoria_categoriaMigratoriaId($estudiantes1['categoriaMigratoria_categoriaMigratoriaId']);
		$myestudiantes->set_idiomas($estudiantes1['idiomas']);
		$myestudiantes->set_accesodepartamento_codigo($estudiantes1['accesodepartamento_codigo']);
		//$myestudiantes->set_estudiantesimg($estudiantes1['estudiantesimg']);
		$myestudiantes->set_estudiantesOculto($estudiantes1['estudiantesOculto']);
		$myestudiantes->set_estudiantesAccion($estudiantes1['estudiantesAccion']);
		$myestudiantes->set_estudiantesfecha($estudiantes1['estudiantesfecha']);
		$myestudiantes->set_estudiantesuser($estudiantes1['estudiantesuser']);
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
			$insert = $db->prepare('INSERT INTO estudiantes
			(`fktipodocumentoId`,`numeroIdentificacion`,`primerApellido`,`segundoApellido`,`primerNombre`,`segundoNombre`,`fksexoId`,`fkGeneroId`,`fkEstadoCivilId`,`fktEtniaId`,`fkPuebloNacionalidadId`,`fkTipoSangreId`,`fechaNacimiento`,`fkPaisNacionalidadId`,`fkProvinciaNacimientoId`,`fkCantonNacimientoId`,`correoElectronico`,`numeroCelular`,`numeroComvencional`,`usuarioEstudiantes`,`passwordEstudiantes`,`categoriaMigratoria_categoriaMigratoriaId`,`idiomas`,`accesodepartamento_codigo`,`estudiantesimg`,`estudiantesOculto`,`estudiantesAccion`,`estudiantesfecha`,`estudiantesuser`)
			VALUES
			(:fktipodocumentoId1,:numeroIdentificacion1,:primerApellido1,:segundoApellido1,:primerNombre1,:segundoNombre1,:fksexoId1,
			:fkGeneroId1,:fkEstadoCivilId1,:fktEtniaId1,:fkPuebloNacionalidadId1,:fkTipoSangreId1,:fechaNacimiento1,:fkPaisNacionalidadId1,
			:fkProvinciaNacimientoId1,:fkCantonNacimientoId1,:correoElectronico1,:numeroCelular1,:numeroComvencional1,:usuarioEstudiantes1,
			:passwordEstudiantes1,:categoriaMigratoria_categoriaMigratoriaId1,:idiomas1,:accesodepartamento_codigo1,:estudiantesimg1,
			:estudiantesOculto1,:estudiantesAccion1,:estudiantesfecha1,:estudiantesuser1);');
			$insert->bindValue('fktipodocumentoId1', $estudiantes1->get_fktipodocumentoId());
			$insert->bindValue('numeroIdentificacion1', $estudiantes1->get_numeroIdentificacion());
			$insert->bindValue('primerApellido1', $estudiantes1->get_primerApellido());
			$insert->bindValue('segundoApellido1', $estudiantes1->get_segundoApellido());
			$insert->bindValue('primerNombre1', $estudiantes1->get_primerNombre());
			$insert->bindValue('segundoNombre1', $estudiantes1->get_segundoNombre());
			$insert->bindValue('fksexoId1', $estudiantes1->get_fksexoId());
			$insert->bindValue('fkGeneroId1', $estudiantes1->get_fkGeneroId());
			$insert->bindValue('fkEstadoCivilId1', $estudiantes1->get_fkEstadoCivilId());
			$insert->bindValue('fktEtniaId1', $estudiantes1->get_fktEtniaId());
			$insert->bindValue('fkPuebloNacionalidadId1', $estudiantes1->get_fkPuebloNacionalidadId());
			$insert->bindValue('fkTipoSangreId1', $estudiantes1->get_fkTipoSangreId());
			$insert->bindValue('fechaNacimiento1', $estudiantes1->get_fechaNacimiento());
			$insert->bindValue('fkPaisNacionalidadId1', $estudiantes1->get_fkPaisNacionalidadId());
			$insert->bindValue('fkProvinciaNacimientoId1', $estudiantes1->get_fkProvinciaNacimientoId());
			$insert->bindValue('fkCantonNacimientoId1', $estudiantes1->get_fkCantonNacimientoId());
			$insert->bindValue('correoElectronico1', $estudiantes1->get_correoElectronico());
			$insert->bindValue('numeroCelular1', $estudiantes1->get_numeroCelular());
			$insert->bindValue('numeroComvencional1', $estudiantes1->get_numeroComvencional());
			$insert->bindValue('usuarioEstudiantes1', $estudiantes1->get_usuarioEstudiantes());
			$insert->bindValue('estudiantesimg1', NULL);
			$insert->bindValue('passwordEstudiantes1', $estudiantes1->get_passwordEstudiantes());
			$insert->bindValue('categoriaMigratoria_categoriaMigratoriaId1', $estudiantes1->get_categoriaMigratoria_categoriaMigratoriaId());
			$insert->bindValue('idiomas1', $estudiantes1->get_idiomas());
			$insert->bindValue('accesodepartamento_codigo1', $estudiantes1->get_accesodepartamento_codigo());
			$insert->bindValue('estudiantesOculto1', $estudiantes1->get_estudiantesOculto());
			$insert->bindValue('estudiantesAccion1', $estudiantes1->get_estudiantesAccion());
			$insert->bindValue('estudiantesfecha1', $estudiantes1->get_estudiantesfecha());
			$insert->bindValue('estudiantesuser1', $estudiantes1->get_estudiantesuser());

			$insert->execute();

	}

	public  function actualizar($estudiantes1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare(
			"UPDATE estudiantes
			SET
				fktipodocumentoId=:fktipodocumentoId1,
				numeroIdentificacion=:numeroIdentificacion1,
				primerApellido=:primerApellido1,
				segundoApellido=:segundoApellido1,
				primerNombre=:primerNombre1,
				segundoNombre=:segundoNombre1,
				fksexoId=:fksexoId1,
				fkGeneroId=:fkGeneroId1,
				fkEstadoCivilId=:fkEstadoCivilId1,
				fktEtniaId=:fktEtniaId1,
				fkPuebloNacionalidadId=:fkPuebloNacionalidadId1,
				fkTipoSangreId=:fkTipoSangreId1,
				fechaNacimiento=:fechaNacimiento1,
				fkPaisNacionalidadId=:fkPaisNacionalidadId1,
				fkProvinciaNacimientoId=:fkProvinciaNacimientoId1,
				fkCantonNacimientoId=:fkCantonNacimientoId1,
				correoElectronico=:correoElectronico1,
				numeroCelular=:numeroCelular1,
				numeroComvencional=:numeroComvencional1,
				usuarioEstudiantes=:usuarioEstudiantes1,
				passwordEstudiantes=:passwordEstudiantes1,
				categoriaMigratoria_categoriaMigratoriaId=:categoriaMigratoria_categoriaMigratoriaId1,
				idiomas=:idiomas1,
				accesodepartamento_codigo=:accesodepartamento_codigo1,
				estudiantesOculto=:estudiantesOculto1,
				estudiantesAccion=:estudiantesAccion1,
				estudiantesfecha=:estudiantesfecha1,
				estudiantesuser=:estudiantesuser1
			 WHERE
			 numeroIdentificacion=:numeroIdentificacion1"
		);
		$actualizar->bindValue('fktipodocumentoId1', $estudiantes1->get_fktipodocumentoId());
		$actualizar->bindValue('numeroIdentificacion1', $estudiantes1->get_numeroIdentificacion());
		$actualizar->bindValue('primerApellido1', $estudiantes1->get_primerApellido());
		$actualizar->bindValue('segundoApellido1', $estudiantes1->get_segundoApellido());
		$actualizar->bindValue('primerNombre1', $estudiantes1->get_primerNombre());
		$actualizar->bindValue('segundoNombre1', $estudiantes1->get_segundoNombre());
		$actualizar->bindValue('fksexoId1', $estudiantes1->get_fksexoId());
		$actualizar->bindValue('fkGeneroId1', $estudiantes1->get_fkGeneroId());
		$actualizar->bindValue('fkEstadoCivilId1', $estudiantes1->get_fkEstadoCivilId());
		$actualizar->bindValue('fktEtniaId1', $estudiantes1->get_fktEtniaId());
		$actualizar->bindValue('fkPuebloNacionalidadId1', $estudiantes1->get_fkPuebloNacionalidadId());
		$actualizar->bindValue('fkTipoSangreId1', $estudiantes1->get_fkTipoSangreId());
		$actualizar->bindValue('fechaNacimiento1', $estudiantes1->get_fechaNacimiento());
		$actualizar->bindValue('fkPaisNacionalidadId1', $estudiantes1->get_fkPaisNacionalidadId());
		$actualizar->bindValue('fkProvinciaNacimientoId1', $estudiantes1->get_fkProvinciaNacimientoId());
		$actualizar->bindValue('fkCantonNacimientoId1', $estudiantes1->get_fkCantonNacimientoId());
		$actualizar->bindValue('correoElectronico1', $estudiantes1->get_correoElectronico());
		$actualizar->bindValue('numeroCelular1', $estudiantes1->get_numeroCelular());
		$actualizar->bindValue('numeroComvencional1', $estudiantes1->get_numeroComvencional());
		$actualizar->bindValue('usuarioEstudiantes1', $estudiantes1->get_usuarioEstudiantes());
		//$actualizar->bindValue('estudiantesimg1',NULL);
		$actualizar->bindValue('passwordEstudiantes1', $estudiantes1->get_passwordEstudiantes());
		$actualizar->bindValue('categoriaMigratoria_categoriaMigratoriaId1', $estudiantes1->get_categoriaMigratoria_categoriaMigratoriaId());
		$actualizar->bindValue('idiomas1', $estudiantes1->get_idiomas());
		$actualizar->bindValue('accesodepartamento_codigo1', $estudiantes1->get_accesodepartamento_codigo());
		$actualizar->bindValue('estudiantesOculto1', $estudiantes1->get_estudiantesOculto());
		$actualizar->bindValue('estudiantesAccion1', $estudiantes1->get_estudiantesAccion());
		$actualizar->bindValue('estudiantesfecha1', $estudiantes1->get_estudiantesfecha());
		$actualizar->bindValue('estudiantesuser1', $estudiantes1->get_estudiantesuser());
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
