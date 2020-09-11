<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Haperdidolagratuidad.php");

use Clasesphp\Haperdidolagratuidad;

class CrudHaperdidoLaGratuidad
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
		$listahaperdidolagratuidad = null;
		$select = $db->query("SELECT * FROM `haperdidolagratuidad`");
		//haPerdidoLaGratuidadId, haperdidolagratuidadcodigo, haPerdidoLaGratuidad, haperdidolagratuidadOculto, haperdidolagratuidadAccion, haperdidolagratuidadfecha, haperdidolagratuidaduser
		foreach ($select->fetchAll() as $haperdidolagratuidad) {
			$myhaperdidolagratuidad = new Haperdidolagratuidad();
			$myhaperdidolagratuidad->setHaPerdidoLaGratuidadId($haperdidolagratuidad['haPerdidoLaGratuidadId']);
			$myhaperdidolagratuidad->setHaperdidolagratuidadcodigo($haperdidolagratuidad['haperdidolagratuidadcodigo']);
			$myhaperdidolagratuidad->setHaPerdidoLaGratuidad($haperdidolagratuidad['haPerdidoLaGratuidad']);
			$myhaperdidolagratuidad->setHaperdidolagratuidadOculto($haperdidolagratuidad['haperdidolagratuidadOculto']);
			$myhaperdidolagratuidad->setHaperdidolagratuidadAccion($haperdidolagratuidad['haperdidolagratuidadAccion']);
			$myhaperdidolagratuidad->setHaperdidolagratuidadfecha($haperdidolagratuidad['haperdidolagratuidadfecha']);
			$myhaperdidolagratuidad->setHaperdidolagratuidaduser($haperdidolagratuidad['haperdidolagratuidaduser']);
			$listahaperdidolagratuidad[] = $myhaperdidolagratuidad;
		}
		return $listahaperdidolagratuidad;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM haperdidolagratuidad WHERE haPerdidoLaGratuidadId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerHaPerdidoLaGratuidad($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM haperdidolagratuidad WHERE haPerdidoLaGratuidadId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$haperdidolagratuidad = $select->fetch();
		$myhaperdidolagratuidad = new Haperdidolagratuidad();
		$myhaperdidolagratuidad->setHaPerdidoLaGratuidadId($haperdidolagratuidad['haPerdidoLaGratuidadId']);
		$myhaperdidolagratuidad->setHaperdidolagratuidadcodigo($haperdidolagratuidad['haperdidolagratuidadcodigo']);
		$myhaperdidolagratuidad->setHaPerdidoLaGratuidad($haperdidolagratuidad['haPerdidoLaGratuidad']);
		$myhaperdidolagratuidad->setHaperdidolagratuidadOculto($haperdidolagratuidad['haperdidolagratuidadOculto']);
		$myhaperdidolagratuidad->setHaperdidolagratuidadAccion($haperdidolagratuidad['haperdidolagratuidadAccion']);
		$myhaperdidolagratuidad->setHaperdidolagratuidadfecha($haperdidolagratuidad['haperdidolagratuidadfecha']);
		$myhaperdidolagratuidad->setHaperdidolagratuidaduser($haperdidolagratuidad['haperdidolagratuidaduser']);

		return $myhaperdidolagratuidad;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT haPerdidoLaGratuidad FROM haperdidolagratuidad WHERE haPerdidoLaGratuidadId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$haperdidolagratuidad = $select->fetch();
		$myhaperdidolagratuidad = ($haperdidolagratuidad['haPerdidoLaGratuidad']);

		return $myhaperdidolagratuidad;
	}
	public function actualizar($haperdidolagratuidad)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `haperdidolagratuidad`
			SET
			`haPerdidoLaGratuidadId` = :HaPerdidoLaGratuidadId1,
			`haperdidolagratuidadcodigo` = :haperdidolagratuidadcodigo1,
			`haPerdidoLaGratuidad` = :haPerdidoLaGratuidad1,
			`haperdidolagratuidadOculto` = :haperdidolagratuidadOculto1,
			`haperdidolagratuidadAccion` = :haperdidolagratuidadAccion1,
			`haperdidolagratuidadfecha` = :haperdidolagratuidadfecha1,
			`haperdidolagratuidaduser` = :haperdidolagratuidaduser1
			WHERE `HaPerdidoLaGratuidadId` = :HaPerdidoLaGratuidadId1;');
		$actualizar->bindValue('HaPerdidoLaGratuidadId1', $haperdidolagratuidad->getHaPerdidoLaGratuidadId());
		$actualizar->bindValue('haperdidolagratuidadcodigo1', $haperdidolagratuidad->getHaperdidolagratuidadcodigo());
		$actualizar->bindValue('haPerdidoLaGratuidad1', $haperdidolagratuidad->getHaPerdidoLaGratuidad());
		$actualizar->bindValue('haperdidolagratuidadOculto1', $haperdidolagratuidad->getHaperdidolagratuidadOculto());
		$actualizar->bindValue('haperdidolagratuidadAccion1', $haperdidolagratuidad->getHaperdidolagratuidadAccion());
		$actualizar->bindValue('haperdidolagratuidadfecha1', $haperdidolagratuidad->getHaperdidolagratuidadfecha());
		$actualizar->bindValue('haperdidolagratuidaduser1', $haperdidolagratuidad->getHaperdidolagratuidaduser());
		$actualizar->execute();
	}
	public function insertar($haperdidolagratuidad)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `haperdidolagratuidad`
			(`haPerdidoLaGratuidadId`,
			`haperdidolagratuidadcodigo`,
			`haPerdidoLaGratuidad`,
			`haperdidolagratuidadOculto`,
			`haperdidolagratuidadAccion`,
			`haperdidolagratuidadfecha`,
			`haperdidolagratuidaduser`)
			VALUES
			(:HaPerdidoLaGratuidadId1,
			:haperdidolagratuidadcodigo1,
			:haPerdidoLaGratuidad1,
			:haperdidolagratuidadOculto1,
			:haperdidolagratuidadAccion1,
			:haperdidolagratuidadfecha1,
			:haperdidolagratuidaduser1);');
		$insert->bindValue('HaPerdidoLaGratuidadId1', $haperdidolagratuidad->getHaPerdidoLaGratuidadId());
		$insert->bindValue('haperdidolagratuidadcodigo1', $haperdidolagratuidad->getHaperdidolagratuidadcodigo());
		$insert->bindValue('haPerdidoLaGratuidad1', $haperdidolagratuidad->getHaPerdidoLaGratuidad());
		$insert->bindValue('haperdidolagratuidadOculto1', $haperdidolagratuidad->getHaperdidolagratuidadOculto());
		$insert->bindValue('haperdidolagratuidadAccion1', $haperdidolagratuidad->getHaperdidolagratuidadAccion());
		$insert->bindValue('haperdidolagratuidadfecha1', $haperdidolagratuidad->getHaperdidolagratuidadfecha());
		$insert->bindValue('haperdidolagratuidaduser1', $haperdidolagratuidad->getHaperdidolagratuidaduser());
		$insert->execute();
	}
}
