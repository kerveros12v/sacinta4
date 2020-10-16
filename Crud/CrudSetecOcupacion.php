<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecOcupacion.php");

use Clasesphp\SetecOcupacion;

class CrudSetecOcupacion
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasetecocupacion = null;
		$select = $db->query("SELECT * FROM `setecocupacion`");

		foreach ($select->fetchAll() as $setecocupacion) {
			$mysetecocupacion = new SetecOcupacion();
			$mysetecocupacion->setSetecOcupacionId($setecocupacion['setecOcupacionId']);
			$mysetecocupacion->setFkaspirantesetec($setecocupacion['fkaspirantesetec']);
			$mysetecocupacion->setFktipoOcupacion($setecocupacion['fktipoOcupacion']);
			$mysetecocupacion->setFkestadoOcupacional($setecocupacion['fkestadoOcupacional']);
			$mysetecocupacion->setHorasTrabajadasxSemana($setecocupacion['horasTrabajadasxSemana']);
			$mysetecocupacion->setFkareadepartamento($setecocupacion['fkareadepartamento']);
			$mysetecocupacion->setSetecocupacionAsignada($setecocupacion['setecocupacionAsignada']);
			$listasetecocupacion[] = $mysetecocupacion;
		}
		return $listasetecocupacion;
	}
	public function obtenerSetecOcupacion($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setecocupacion` WHERE `setecOcupacionId`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecocupacion = $select->fetch();
		$mysetecocupacion = new SetecOcupacion();
		$mysetecocupacion->setSetecOcupacionId($setecocupacion['setecOcupacionId']);
		$mysetecocupacion->setFkaspirantesetec($setecocupacion['fkaspirantesetec']);
		$mysetecocupacion->setFktipoOcupacion($setecocupacion['fktipoOcupacion']);
		$mysetecocupacion->setFkestadoOcupacional($setecocupacion['fkestadoOcupacional']);
		$mysetecocupacion->setHorasTrabajadasxSemana($setecocupacion['horasTrabajadasxSemana']);
		$mysetecocupacion->setFkareadepartamento($setecocupacion['fkareadepartamento']);
		$mysetecocupacion->setSetecocupacionAsignada($setecocupacion['setecocupacionAsignada']);
		return $mysetecocupacion;
	}
	public function insertar($datos)
	{
		$db = Db::conectar();

		$insert = $db->prepare("INSERT INTO `setecocupacion`
		(`setecOcupacionId`,
		`fkaspirantesetec`,
		`fktipoOcupacion`,
		`setecocupacionAsignada`,
		`fkestadoOcupacional`,
		`horasTrabajadasxSemana`,
		`fkareadepartamento`)
		VALUES
		(:setecOcupacionId1,
		:fkaspirantesetec1,
		:fktipoOcupacion1,
		:setecocupacionAsignada1,
		:fkestadoOcupacional1,
		:horasTrabajadasxSemana1,
		:fkareadepartamento1);");
		$insert->bindValue('setecOcupacionId1', $datos->getSetecOcupacionId());
		$insert->bindValue('fkaspirantesetec1', $datos->getFkaspirantesetec());
		$insert->bindValue('fktipoOcupacion1', $datos->getFktipoOcupacion());
		$insert->bindValue('fkestadoOcupacional1', $datos->getFkestadoOcupacional());
		$insert->bindValue('horasTrabajadasxSemana1', $datos->getHorasTrabajadasxSemana());
		$insert->bindValue('fkareadepartamento1', $datos->getFkareadepartamento());
		$insert->bindValue('setecocupacionAsignada1', $datos->getSetecocupacionAsignada());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare("UPDATE `setecocupacion`
		SET
		`setecOcupacionId` = :setecOcupacionId1,
		`fkaspirantesetec` = :fkaspirantesetec1,
		`fktipoOcupacion` = :fktipoOcupacion1,
		`setecocupacionAsignada` = :setecocupacionAsignada1,
		`fkestadoOcupacional` = :fkestadoOcupacional1,
		`horasTrabajadasxSemana` = :horasTrabajadasxSemana1,
		`fkareadepartamento` = :fkareadepartamento1
		WHERE `setecOcupacionId` = :setecOcupacionId1;");
		$actualizar->bindValue('setecOcupacionId1', $datos->getSetecOcupacionId());
		$actualizar->bindValue('fkaspirantesetec1', $datos->getFkaspirantesetec());
		$actualizar->bindValue('fktipoOcupacion1', $datos->getFktipoOcupacion());
		$actualizar->bindValue('fkestadoOcupacional1', $datos->getFkestadoOcupacional());
		$actualizar->bindValue('horasTrabajadasxSemana1', $datos->getHorasTrabajadasxSemana());
		$actualizar->bindValue('fkareadepartamento1', $datos->getFkareadepartamento());
		$actualizar->bindValue('setecocupacionAsignada1', $datos->getSetecocupacionAsignada());
		$actualizar->execute();
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM setecocupacion where setecOcupacionId=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setecocupacion` WHERE setecOcupacionId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
