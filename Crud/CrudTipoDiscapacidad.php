<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Tipodiscapacidad.php");

use Clasesphp\Tipodiscapacidad;

class CrudTipoDiscapacidad
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipodiscapacidad = null;
		$select = $db->query('SELECT * FROM tipodiscapacidad');
		foreach ($select->fetchAll() as $tipodiscapacidad) {
			$mytipodiscapacidad = new Tipodiscapacidad();
			$mytipodiscapacidad->setTipoDiscapacidadid($tipodiscapacidad['tipoDiscapacidadid']);
			$mytipodiscapacidad->setTipoDiscapacidad($tipodiscapacidad['tipoDiscapacidad']);
			$mytipodiscapacidad->setTdcodigo($tipodiscapacidad['tdcodigo']);
			$mytipodiscapacidad->setTdOculto($tipodiscapacidad['tdOculto']);
			$mytipodiscapacidad->setTdAccion($tipodiscapacidad['tdAccion']);
			$mytipodiscapacidad->setTdfecha($tipodiscapacidad['tdfecha']);
			$mytipodiscapacidad->setTduser($tipodiscapacidad['tduser']);
			$mytipodiscapacidad->setTipodiscapacidadbool($tipodiscapacidad['tipodiscapacidadbool']);
			$listatipodiscapacidad[] = $mytipodiscapacidad;
		}
		return $listatipodiscapacidad;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tipodiscapacidad WHERE tipoDiscapacidadid=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerTipoDiscapacidad($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tipodiscapacidad WHERE tipoDiscapacidadid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipodiscapacidad = $select->fetch();
		$mytipodiscapacidad = new Tipodiscapacidad();
		$mytipodiscapacidad->setTipoDiscapacidadid($tipodiscapacidad['tipoDiscapacidadid']);
		$mytipodiscapacidad->setTipoDiscapacidad($tipodiscapacidad['tipoDiscapacidad']);
		$mytipodiscapacidad->setTdcodigo($tipodiscapacidad['tdcodigo']);
		$mytipodiscapacidad->setTdOculto($tipodiscapacidad['tdOculto']);
		$mytipodiscapacidad->setTdAccion($tipodiscapacidad['tdAccion']);
		$mytipodiscapacidad->setTdfecha($tipodiscapacidad['tdfecha']);
		$mytipodiscapacidad->setTduser($tipodiscapacidad['tduser']);
		$mytipodiscapacidad->setTipodiscapacidadbool($tipodiscapacidad['tipodiscapacidadbool']);

		return $mytipodiscapacidad;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoDiscapacidad FROM tipodiscapacidad WHERE tipoDiscapacidadid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipodiscapacidad = $select->fetch();
		$mytipodiscapacidad = ($tipodiscapacidad['tipoDiscapacidad']);

		return $mytipodiscapacidad;
	}
	public function actualizar($tipodiscapacidad)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tipodiscapacidad`
		SET
		`tipoDiscapacidadid` = :tipoDiscapacidadid1,
		`tdcodigo` = :tdcodigo1,
		`tipoDiscapacidad` = :tipoDiscapacidad1,
		`tipodiscapacidadbool` = :tipodiscapacidadbool1,
		`tdOculto` = :tdOculto1,
		`tdAccion` = :tdAccion1,
		`tdfecha` = :tdfecha1,
		`tduser` = :tduser1
		WHERE `tipoDiscapacidadid` = :tipoDiscapacidadid1;');
		$actualizar->bindValue('tipoDiscapacidadid1', $tipodiscapacidad->getTipoDiscapacidadid());
		$actualizar->bindValue('tdcodigo1', $tipodiscapacidad->getTdcodigo());
		$actualizar->bindValue('tipoDiscapacidad1', $tipodiscapacidad->getTipoDiscapacidad());
		$actualizar->bindValue('tipodiscapacidadbool1', $tipodiscapacidad->getTipodiscapacidadbool());
		$actualizar->bindValue('tdOculto1', $tipodiscapacidad->getTdOculto());
		$actualizar->bindValue('tdAccion1', $tipodiscapacidad->getTdAccion());
		$actualizar->bindValue('tdfecha1', $tipodiscapacidad->getTdfecha());
		$actualizar->bindValue('tduser1', $tipodiscapacidad->getTduser());
		$actualizar->execute();
	}
	public function insertar($tipodiscapacidad)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipodiscapacidad`
		(`tipoDiscapacidadid`,
		`tdcodigo`,
		`tipoDiscapacidad`,
		`tipodiscapacidadbool`,
		`tdOculto`,
		`tdAccion`,
		`tdfecha`,
		`tduser`)
		VALUES
		(:tipoDiscapacidadid1,
		:tdcodigo1,
		:tipoDiscapacidad1,
		:tipodiscapacidadbool1,
		:tdOculto1,
		:tdAccion1,
		:tdfecha1,
		:tduser1);');
		$insert->bindValue('tipoDiscapacidadid1', $tipodiscapacidad->getTipoDiscapacidadid());
		$insert->bindValue('tdcodigo1', $tipodiscapacidad->getTdcodigo());
		$insert->bindValue('tipoDiscapacidad1', $tipodiscapacidad->getTipoDiscapacidad());
		$insert->bindValue('tipodiscapacidadbool1', $tipodiscapacidad->getTipodiscapacidadbool());
		$insert->bindValue('tdOculto1', $tipodiscapacidad->getTdOculto());
		$insert->bindValue('tdAccion1', $tipodiscapacidad->getTdAccion());
		$insert->bindValue('tdfecha1', $tipodiscapacidad->getTdfecha());
		$insert->bindValue('tduser1', $tipodiscapacidad->getTduser());
		$insert->execute();
	}
}
