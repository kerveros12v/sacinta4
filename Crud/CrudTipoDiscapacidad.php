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
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipodiscapacidad = null;
		$select = $db->query('SELECT * FROM tipodiscapacidad');
		foreach ($select->fetchAll() as $tipodiscapacidad) {
			$mytipodiscapacidad = new Tipodiscapacidad();
			$mytipodiscapacidad->set_tipoDiscapacidadid($tipodiscapacidad['tipoDiscapacidadid']);
			$mytipodiscapacidad->set_tipoDiscapacidad($tipodiscapacidad['tipoDiscapacidad']);
			$mytipodiscapacidad->set_tdcodigo($tipodiscapacidad['tdcodigo']);
			$mytipodiscapacidad->set_tdOculto($tipodiscapacidad['tdOculto']);
			$mytipodiscapacidad->set_tdAccion($tipodiscapacidad['tdAccion']);
			$mytipodiscapacidad->set_tdfecha($tipodiscapacidad['tdfecha']);
			$mytipodiscapacidad->set_tduser($tipodiscapacidad['tduser']);

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
		$mytipodiscapacidad->set_tipoDiscapacidadid($tipodiscapacidad['tipoDiscapacidadid']);
		$mytipodiscapacidad->set_tipoDiscapacidad($tipodiscapacidad['tipoDiscapacidad']);
		$mytipodiscapacidad->set_tdcodigo($tipodiscapacidad['tdcodigo']);
		$mytipodiscapacidad->set_tdOculto($tipodiscapacidad['tdOculto']);
		$mytipodiscapacidad->set_tdAccion($tipodiscapacidad['tdAccion']);
		$mytipodiscapacidad->set_tdfecha($tipodiscapacidad['tdfecha']);
		$mytipodiscapacidad->set_tduser($tipodiscapacidad['tduser']);
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
			`tdOculto` = :tdOculto1,
			`tdAccion` = :tdAccion1,
			`tdfecha` = :tdfecha1,
			`tduser` = :tduser1
			WHERE `tipoDiscapacidadid` = :tipoDiscapacidadid1;');
		$actualizar->bindValue('tipoDiscapacidadid1', $tipodiscapacidad->get_tipoDiscapacidadid());
		$actualizar->bindValue('tdcodigo1', $tipodiscapacidad->get_tdcodigo());
		$actualizar->bindValue('tipoDiscapacidad1', $tipodiscapacidad->get_tipoDiscapacidad());
		$actualizar->bindValue('tdOculto1', $tipodiscapacidad->get_tdOculto());
		$actualizar->bindValue('tdAccion1', $tipodiscapacidad->get_tdAccion());
		$actualizar->bindValue('tdfecha1', $tipodiscapacidad->get_tdfecha());
		$actualizar->bindValue('tduser1', $tipodiscapacidad->get_tduser());
		$actualizar->execute();
	}
	public function insertar($tipodiscapacidad)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipodiscapacidad`
			(`tipoDiscapacidadid`,
			`tdcodigo`,
			`tipoDiscapacidad`,
			`tdOculto`,
			`tdAccion`,
			`tdfecha`,
			`tduser`)
			VALUES
			(:tipoDiscapacidadid1,
			:tdcodigo1,
			:tipoDiscapacidad1,
			:tdOculto1,
			:tdAccion1,
			:tdfecha1,
			:tduser1);');
		$insert->bindValue('tipoDiscapacidadid1', $tipodiscapacidad->get_tipoDiscapacidadid());
		$insert->bindValue('tdcodigo1', $tipodiscapacidad->get_tdcodigo());
		$insert->bindValue('tipoDiscapacidad1', $tipodiscapacidad->get_tipoDiscapacidad());
		$insert->bindValue('tdOculto1', $tipodiscapacidad->get_tdOculto());
		$insert->bindValue('tdAccion1', $tipodiscapacidad->get_tdAccion());
		$insert->bindValue('tdfecha1', $tipodiscapacidad->get_tdfecha());
		$insert->bindValue('tduser1', $tipodiscapacidad->get_tduser());
		$insert->execute();
	}
}
