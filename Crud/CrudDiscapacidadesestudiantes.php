<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Discapacidadesestudiantes.php");
use Crud\Db;
use Clasesphp\Discapacidadesestudiantes;

class CrudDiscapacidadesestudiantes
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listadiscapacidadesestudiantes = null;
		$select = $db->query("SELECT * FROM `discapacidadesestudiantes`");

		foreach ($select->fetchAll() as $discapacidadesestudiantes) {
			$mydiscapacidadesestudiantes = new Discapacidadesestudiantes();
			$mydiscapacidadesestudiantes->set_discapacidadesestudiantesid($discapacidadesestudiantes['discapacidadesestudiantesid']);
			$mydiscapacidadesestudiantes->set_CarnetConadisId($discapacidadesestudiantes['CarnetConadisId']);
			$mydiscapacidadesestudiantes->set_fkEstudiantesNumeroIdentificacion($discapacidadesestudiantes['fkEstudiantesNumeroIdentificacion']);
			$mydiscapacidadesestudiantes->set_fkDiscapacidadDiscapacidadId($discapacidadesestudiantes['fkDiscapacidadDiscapacidadId']);
			$mydiscapacidadesestudiantes->set_fkTipoDiscapacidadTipoDiscapacidadId($discapacidadesestudiantes['fkTipoDiscapacidadTipoDiscapacidadId']);
			$mydiscapacidadesestudiantes->set_porcentajeDiscapacidad($discapacidadesestudiantes['porcentajeDiscapacidad']);
			$mydiscapacidadesestudiantes->set_discapacidadestperiodo($discapacidadesestudiantes['discapacidadestperiodo']);
			$mydiscapacidadesestudiantes->set_discapacidadesestudiantesOculto($discapacidadesestudiantes['discapacidadesestudiantesOculto']);
			$mydiscapacidadesestudiantes->set_discapacidadesestudiantesAccion($discapacidadesestudiantes['discapacidadesestudiantesAccion']);
			$mydiscapacidadesestudiantes->set_discapacidadesestudiantesfecha($discapacidadesestudiantes['discapacidadesestudiantesfecha']);
			$mydiscapacidadesestudiantes->set_discapacidadesestudiantesuser($discapacidadesestudiantes['discapacidadesestudiantesuser']);

			////
			$listadiscapacidadesestudiantes[] = $mydiscapacidadesestudiantes;
		}
		return $listadiscapacidadesestudiantes;
	}
	public  function actualizar($discapacidad)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `discapacidadesestudiantes`
		SET
		`discapacidadesestudiantesid` = :discapacidadesestudiantesid1,
		`CarnetConadisId` = :CarnetConadisId1,
		`fkEstudiantesNumeroIdentificacion` = :fkEstudiantesNumeroIdentificacion1,
		`fkDiscapacidadDiscapacidadId` = :fkDiscapacidadDiscapacidadId1,
		`fkTipoDiscapacidadTipoDiscapacidadId` = :fkTipoDiscapacidadTipoDiscapacidadId1,
		`porcentajeDiscapacidad` = :porcentajeDiscapacidad1,
		`discapacidadestperiodo` = :discapacidadestperiodo1,
		`discapacidadesestudiantesOculto` = :discapacidadesestudiantesOculto1,
		`discapacidadesestudiantesAccion` = :discapacidadesestudiantesAccion1,
		`discapacidadesestudiantesfecha` = :discapacidadesestudiantesfecha1,
		`discapacidadesestudiantesuser` = :discapacidadesestudiantesuser1
		WHERE `discapacidadesestudiantesid` = :discapacidadesestudiantesid1;");

		$actualizar->bindValue('discapacidadesestudiantesid1', $discapacidad->get_discapacidadesestudiantesid());
		$actualizar->bindValue('CarnetConadisId1', $discapacidad->get_CarnetConadisId());
		$actualizar->bindValue('fkEstudiantesNumeroIdentificacion1', $discapacidad->get_fkEstudiantesNumeroIdentificacion());
		$actualizar->bindValue('fkDiscapacidadDiscapacidadId1', $discapacidad->get_fkDiscapacidadDiscapacidadId());
		$actualizar->bindValue('fkTipoDiscapacidadTipoDiscapacidadId1', $discapacidad->get_fkTipoDiscapacidadTipoDiscapacidadId());
		$actualizar->bindValue('porcentajeDiscapacidad1', $discapacidad->get_porcentajeDiscapacidad());
		$actualizar->bindValue('discapacidadestperiodo1', $discapacidad->get_discapacidadestperiodo());
		$actualizar->bindValue('discapacidadesestudiantesOculto1', $discapacidad->get_discapacidadesestudiantesOculto());
		$actualizar->bindValue('discapacidadesestudiantesAccion1', $discapacidad->get_discapacidadesestudiantesAccion());
		$actualizar->bindValue('discapacidadesestudiantesfecha1', $discapacidad->get_discapacidadesestudiantesfecha());
		$actualizar->bindValue('discapacidadesestudiantesuser1', $discapacidad->get_discapacidadesestudiantesuser());
		$actualizar->execute();
	}
	public  function existe($id,$periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM discapacidadesestudiantes where fkEstudiantesNumeroIdentificacion=:id AND discapacidadestperiodo=:periodo;");
		$select->bindValue('id', $id);
		$select->bindValue('periodo', $periodo);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function obtenerdiscapacidadesestudiantes($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM discapacidadesestudiantes WHERE fkEstudiantesNumeroIdentificacion =:id AND discapacidadestperiodo=:periodo;");
		$select->bindValue('id', $id);
		$select->bindValue('periodo', $periodo);
		$select->execute();
		$discapacidadesestudiantes = $select->fetch();
		$mydiscapacidadesestudiantes = new Discapacidadesestudiantes();
		$mydiscapacidadesestudiantes->set_discapacidadesestudiantesid($discapacidadesestudiantes['discapacidadesestudiantesid']);
		$mydiscapacidadesestudiantes->set_CarnetConadisId($discapacidadesestudiantes['CarnetConadisId']);
		$mydiscapacidadesestudiantes->set_fkEstudiantesNumeroIdentificacion($discapacidadesestudiantes['fkEstudiantesNumeroIdentificacion']);
		$mydiscapacidadesestudiantes->set_fkDiscapacidadDiscapacidadId($discapacidadesestudiantes['fkDiscapacidadDiscapacidadId']);
		$mydiscapacidadesestudiantes->set_fkTipoDiscapacidadTipoDiscapacidadId($discapacidadesestudiantes['fkTipoDiscapacidadTipoDiscapacidadId']);
		$mydiscapacidadesestudiantes->set_porcentajeDiscapacidad($discapacidadesestudiantes['porcentajeDiscapacidad']);
		$mydiscapacidadesestudiantes->set_discapacidadestperiodo($discapacidadesestudiantes['discapacidadestperiodo']);
		$mydiscapacidadesestudiantes->set_discapacidadesestudiantesOculto($discapacidadesestudiantes['discapacidadesestudiantesOculto']);
		$mydiscapacidadesestudiantes->set_discapacidadesestudiantesAccion($discapacidadesestudiantes['discapacidadesestudiantesAccion']);
		$mydiscapacidadesestudiantes->set_discapacidadesestudiantesfecha($discapacidadesestudiantes['discapacidadesestudiantesfecha']);
		$mydiscapacidadesestudiantes->set_discapacidadesestudiantesuser($discapacidadesestudiantes['discapacidadesestudiantesuser']);

		return $mydiscapacidadesestudiantes;
	}
	public  function insertar($discapacidad)
	{
		$db = Db::conectar();

		$insert = $db->prepare("INSERT INTO `discapacidadesestudiantes`
		(`discapacidadesestudiantesid`,
		`CarnetConadisId`,
		`fkEstudiantesNumeroIdentificacion`,
		`fkDiscapacidadDiscapacidadId`,
		`fkTipoDiscapacidadTipoDiscapacidadId`,
		`porcentajeDiscapacidad`,
		`discapacidadestperiodo`,
		`discapacidadesestudiantesOculto`,
		`discapacidadesestudiantesAccion`,
		`discapacidadesestudiantesfecha`,
		`discapacidadesestudiantesuser`)
		VALUES
		(:discapacidadesestudiantesid1,
		:CarnetConadisId1,
		:fkEstudiantesNumeroIdentificacion1,
		:fkDiscapacidadDiscapacidadId1,
		:fkTipoDiscapacidadTipoDiscapacidadId1,
		:porcentajeDiscapacidad1,
		:discapacidadestperiodo1,
		:discapacidadesestudiantesOculto1,
		:discapacidadesestudiantesAccion1,
		:discapacidadesestudiantesfecha1,
		:discapacidadesestudiantesuser1);");
		$insert->bindValue('discapacidadesestudiantesid1', $discapacidad->get_discapacidadesestudiantesid());
		$insert->bindValue('CarnetConadisId1', $discapacidad->get_CarnetConadisId());
		$insert->bindValue('fkEstudiantesNumeroIdentificacion1', $discapacidad->get_fkEstudiantesNumeroIdentificacion());
		$insert->bindValue('fkDiscapacidadDiscapacidadId1', $discapacidad->get_fkDiscapacidadDiscapacidadId());
		$insert->bindValue('fkTipoDiscapacidadTipoDiscapacidadId1', $discapacidad->get_fkTipoDiscapacidadTipoDiscapacidadId());
		$insert->bindValue('porcentajeDiscapacidad1', $discapacidad->get_porcentajeDiscapacidad());
		$insert->bindValue('discapacidadestperiodo1', $discapacidad->get_discapacidadestperiodo());
		$insert->bindValue('discapacidadesestudiantesOculto1', $discapacidad->get_discapacidadesestudiantesOculto());
		$insert->bindValue('discapacidadesestudiantesAccion1', $discapacidad->get_discapacidadesestudiantesAccion());
		$insert->bindValue('discapacidadesestudiantesfecha1', $discapacidad->get_discapacidadesestudiantesfecha());
		$insert->bindValue('discapacidadesestudiantesuser1', $discapacidad->get_discapacidadesestudiantesuser());
		$insert->execute();
	}
	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `discapacidadesestudiantes` WHERE fkEstudiantesNumeroIdentificacion=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
