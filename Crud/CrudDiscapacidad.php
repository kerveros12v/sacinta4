<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Discapacidad.php");

use Clasesphp\Discapacidad;

class CrudDiscapacidad
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listadiscapacidad = null;
		$select = $db->query("SELECT * FROM `discapacidad`");

		foreach ($select->fetchAll() as $discapac1) {
			$mydiscapac = new Discapacidad();

			$mydiscapac->setDiscapacidadbool($discapac1['discapacidadbool']);
			$mydiscapac->setDiscapacidadId($discapac1['discapacidadId']);
			$mydiscapac->setDiscapacidadcodigo($discapac1['discapacidadcodigo']);
			$mydiscapac->setDiscapacidad($discapac1['discapacidad']);
			$mydiscapac->setDiscapacidadOculto($discapac1['discapacidadOculto']);
			$mydiscapac->setDiscapacidadAccion($discapac1['discapacidadAccion']);
			$mydiscapac->setDiscapacidadfecha($discapac1['discapacidadfecha']);
			$mydiscapac->setDiscapacidaduser($discapac1['discapacidaduser']);
			$listadiscapacidad[] = $mydiscapac;
		}
		return $listadiscapacidad;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM discapacidad WHERE discapacidadId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerDiscapacidad($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM discapacidad WHERE discapacidadId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$discapac1 = $select->fetch();
		$mydiscapac = new Discapacidad();
		$mydiscapac->setDiscapacidadbool($discapac1['discapacidadbool']);
		$mydiscapac->setDiscapacidadId($discapac1['discapacidadId']);
		$mydiscapac->setDiscapacidadcodigo($discapac1['discapacidadcodigo']);
		$mydiscapac->setDiscapacidad($discapac1['discapacidad']);
		$mydiscapac->setDiscapacidadOculto($discapac1['discapacidadOculto']);
		$mydiscapac->setDiscapacidadAccion($discapac1['discapacidadAccion']);
		$mydiscapac->setDiscapacidadfecha($discapac1['discapacidadfecha']);
		$mydiscapac->setDiscapacidaduser($discapac1['discapacidaduser']);
		return $mydiscapac;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT discapacidad FROM discapacidad WHERE discapacidadId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$discapac1 = $select->fetch();
		$mydiscapac = ($discapac1['discapacidad']);

		return $mydiscapac;
	}
	public function actualizar($discapac1)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare('UPDATE `discapacidad`
			SET
			`discapacidadId` = :discapacidadId1,
			`discapacidadcodigo` = :discapacidadcodigo1,
			`discapacidad` = :discapacidad1,
			`discapacidadbool` = :discapacidadbool1,
			`discapacidadOculto` = :discapacidadOculto1,
			`discapacidadAccion` = :discapacidadAccion1,
			`discapacidadfecha` = :discapacidadfecha1,
			`discapacidaduser` = :discapacidaduser1
			WHERE `discapacidadId` = :discapacidadId1;');
		$actualizar->bindValue('discapacidadId1', $discapac1->getDiscapacidadId());
		$actualizar->bindValue('discapacidadcodigo1', $discapac1->getDiscapacidadcodigo());
		$actualizar->bindValue('discapacidad1', $discapac1->getDiscapacidad());
		$actualizar->bindValue('discapacidadbool1', $discapac1->getDiscapacidadbool());
		$actualizar->bindValue('discapacidadOculto1', $discapac1->getDiscapacidadOculto());
		$actualizar->bindValue('discapacidadAccion1', $discapac1->getDiscapacidadAccion());
		$actualizar->bindValue('discapacidadfecha1', $discapac1->getDiscapacidadfecha());
		$actualizar->bindValue('discapacidaduser1', $discapac1->getDiscapacidaduser());
		$actualizar->execute();
	}
	public function insertar($discapac1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `discapacidad`
		(`discapacidadId`,
		`discapacidadcodigo`,
		`discapacidad`,
		`discapacidadbool`,
		`discapacidadOculto`,
		`discapacidadAccion`,
		`discapacidadfecha`,
		`discapacidaduser`)
		VALUES
		(:discapacidadId1,
		:discapacidadcodigo1,
		:discapacidad1,
		:discapacidadbool1,
		:discapacidadOculto1,
		:discapacidadAccion1,
		:discapacidadfecha1,
		:discapacidaduser1);');
		$insert->bindValue('discapacidadId1', $discapac1->getDiscapacidadId());
		$insert->bindValue('discapacidadcodigo1', $discapac1->getDiscapacidadcodigo());
		$insert->bindValue('discapacidad1', $discapac1->getDiscapacidad());
		$insert->bindValue('discapacidadbool1', $discapac1->getDiscapacidadbool());
		$insert->bindValue('discapacidadOculto1', $discapac1->getDiscapacidadOculto());
		$insert->bindValue('discapacidadAccion1', $discapac1->getDiscapacidadAccion());
		$insert->bindValue('discapacidadfecha1', $discapac1->getDiscapacidadfecha());
		$insert->bindValue('discapacidaduser1', $discapac1->getDiscapacidaduser());
		$insert->execute();
	}
}
