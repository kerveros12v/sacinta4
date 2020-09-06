<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Paises.php");

use Clasesphp\Paises;

class CrudPaises
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
		$listapaises = null;
		$select = $db->query("SELECT * FROM `paises` ");
		foreach ($select->fetchAll() as $paises1) {
			$mypaises = new Paises();
			$mypaises->setPaisId($paises1['paisId']);
			$mypaises->setPais($paises1['pais']);
			$mypaises->setPaisescodigo($paises1['paisescodigo']);
			$mypaises->setPaisesOculto($paises1['paisesOculto']);
			$mypaises->setPaisesAccion($paises1['paisesAccion']);
			$mypaises->setPaisesfecha($paises1['paisesfecha']);
			$mypaises->setPaisesuser($paises1['paisesuser']);
			$listapaises[] = $mypaises;
		}
		return $listapaises;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM paises WHERE paisId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerPaises($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM paises WHERE paisId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$paises1 = $select->fetch();
		$mypaises = new Paises();
		$mypaises->setPaisId($paises1['paisId']);
		$mypaises->setPais($paises1['pais']);
		$mypaises->setPaisescodigo($paises1['paisescodigo']);
		$mypaises->setPaisesOculto($paises1['paisesOculto']);
		$mypaises->setPaisesAccion($paises1['paisesAccion']);
		$mypaises->setPaisesfecha($paises1['paisesfecha']);
		$mypaises->setPaisesuser($paises1['paisesuser']);

		return $mypaises;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT pais FROM paises WHERE paisId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$paises1 = $select->fetch();
		$mypaises = ($paises1['pais']);

		return $mypaises;
	}
	public function actualizar($paises1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `paises`
			SET
			`paisId` = :paisId1,
			`paisescodigo` = :paisescodigo1,
			`pais` = :pais1,
			`paisesOculto` = :paisesOculto1,
			`paisesAccion` = :paisesAccion1,
			`paisesfecha` = :paisesfecha1,
			`paisesuser` = :paisesuser1
			WHERE `paisId` = :paisId1;
			');
		$actualizar->bindValue('paisId1', $paises1->getPaisId());
		$actualizar->bindValue('paisescodigo1', $paises1->getPaisescodigo());
		$actualizar->bindValue('pais1', $paises1->getPais());
		$actualizar->bindValue('paisesOculto1', $paises1->getPaisesOculto());
		$actualizar->bindValue('paisesAccion1', $paises1->getPaisesAccion());
		$actualizar->bindValue('paisesfecha1', $paises1->getPaisesfecha());
		$actualizar->bindValue('paisesuser1', $paises1->getPaisesuser());
		$actualizar->execute();
	}
	public function insertar($paises1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `paises`
			(`paisId`,
			`paisescodigo`,
			`pais`,
			`paisesOculto`,
			`paisesAccion`,
			`paisesfecha`,
			`paisesuser`)
			VALUES
			(:paisId1,
			:paisescodigo1,
			:pais1,
			:paisesOculto1,
			:paisesAccion1,
			:paisesfecha1,
			:paisesuser1);
			');
		$insert->bindValue('paisId1', $paises1->getPaisId());
		$insert->bindValue('paisescodigo1', $paises1->getPaisescodigo());
		$insert->bindValue('pais1', $paises1->getPais());
		$insert->bindValue('paisesOculto1', $paises1->getPaisesOculto());
		$insert->bindValue('paisesAccion1', $paises1->getPaisesAccion());
		$insert->bindValue('paisesfecha1', $paises1->getPaisesfecha());
		$insert->bindValue('paisesuser1', $paises1->getPaisesuser());


		$insert->execute();
	}
}
