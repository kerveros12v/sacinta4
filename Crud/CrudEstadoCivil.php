<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Estadosciviles.php");

use Clasesphp\Estadosciviles;

class CrudEStadoCivil
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaEstadosciviles = null;
		$select = $db->query('SELECT * FROM estadosciviles');
		foreach ($select->fetchAll() as $estadosciviles1) {
			$myEstadosciviles = new Estadosciviles();
			$myEstadosciviles->setEstadoCivilId($estadosciviles1['estadoCivilId']);
			$myEstadosciviles->setEstadoCivil($estadosciviles1['estadoCivil']);
			$myEstadosciviles->setEstadoscivilcodigo($estadosciviles1['estadoscivilcodigo']);
			$myEstadosciviles->setEstadoCivilOculto($estadosciviles1['estadoCivilOculto']);
			$myEstadosciviles->setEstadoCivilAccion($estadosciviles1['estadoCivilAccion']);
			$myEstadosciviles->setEstadoCivilfecha($estadosciviles1['estadoCivilfecha']);
			$myEstadosciviles->setEstadoCiviluser($estadosciviles1['estadoCiviluser']);
			$listaEstadosciviles[] = $myEstadosciviles;
		}
		return $listaEstadosciviles;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM estadosciviles WHERE estadoCivilId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerEstadosciviles($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM estadosciviles WHERE estadoCivilId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$estadosciviles1 = $select->fetch();
		$myEstadosciviles = new Estadosciviles();
		$myEstadosciviles->setEstadoCivilId($estadosciviles1['estadoCivilId']);
		$myEstadosciviles->setEstadoCivil($estadosciviles1['estadoCivil']);
		$myEstadosciviles->setEstadoscivilcodigo($estadosciviles1['estadoscivilcodigo']);
		$myEstadosciviles->setEstadoCivilOculto($estadosciviles1['estadoCivilOculto']);
		$myEstadosciviles->setEstadoCivilAccion($estadosciviles1['estadoCivilAccion']);
		$myEstadosciviles->setEstadoCivilfecha($estadosciviles1['estadoCivilfecha']);
		$myEstadosciviles->setEstadoCiviluser($estadosciviles1['estadoCiviluser']);
		return $myEstadosciviles;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT estadoCivil FROM estadosciviles WHERE estadoCivilId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$estadosciviles1 = $select->fetch();
		$myEstadosciviles = $estadosciviles1['estadoCivil'];

		return $myEstadosciviles;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT estadoscivilcodigo FROM estadosciviles WHERE estadoCivilId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$estadosciviles1 = $select->fetch();
		$myEstadosciviles = $estadosciviles1['estadoscivilcodigo'];

		return $myEstadosciviles;
	}
	public function actualizar($estadosciviles1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `estadosciviles`
			SET
			`estadoCivilId` = :estadoCivilId1,
			`estadoscivilcodigo` = :estadoscivilcodigo1,
			`estadoCivil` = :estadoCivil1,
			`estadoCivilOculto` = :estadoCivilOculto1,
			`estadoCivilAccion` = :estadoCivilAccion1,
			`estadoCivilfecha` = :estadoCivilfecha1,
			`estadoCiviluser` = :estadoCiviluser1
			WHERE `estadoCivilId` = :estadoCivilId1;');
		$actualizar->bindValue('estadoCivilId1', $estadosciviles1->getEstadoCivilId());
		$actualizar->bindValue('estadoscivilcodigo1', $estadosciviles1->getEstadoscivilcodigo());
		$actualizar->bindValue('estadoCivil1', $estadosciviles1->getEstadoCivil());
		$actualizar->bindValue('estadoCivilOculto1', $estadosciviles1->getEstadoCivilOculto());
		$actualizar->bindValue('estadoCivilAccion1', $estadosciviles1->getEstadoCivilAccion());
		$actualizar->bindValue('estadoCivilfecha1', $estadosciviles1->getEstadoCivilfecha());
		$actualizar->bindValue('estadoCiviluser1', $estadosciviles1->getEstadoCiviluser());
		$actualizar->execute();
	}
	public function insertar($estadosciviles1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `estadosciviles`
			(`estadoCivilId`,
			`estadoscivilcodigo`,
			`estadoCivil`,
			`estadoCivilOculto`,
			`estadoCivilAccion`,
			`estadoCivilfecha`,
			`estadoCiviluser`)
			VALUES
			(:estadoCivilId1,
			:estadoscivilcodigo1,
			:estadoCivil1,
			:estadoCivilOculto1,
			:estadoCivilAccion1,
			:estadoCivilfecha1,
			:estadoCiviluser1);');
		$insert->bindValue('estadoCivilId1', $estadosciviles1->getEstadoCivilId());
		$insert->bindValue('estadoscivilcodigo1', $estadosciviles1->getEstadoscivilcodigo());
		$insert->bindValue('estadoCivil1', $estadosciviles1->getEstadoCivil());
		$insert->bindValue('estadoCivilOculto1', $estadosciviles1->getEstadoCivilOculto());
		$insert->bindValue('estadoCivilAccion1', $estadosciviles1->getEstadoCivilAccion());
		$insert->bindValue('estadoCivilfecha1', $estadosciviles1->getEstadoCivilfecha());
		$insert->bindValue('estadoCiviluser1', $estadosciviles1->getEstadoCiviluser());
		$insert->execute();
	}
}
