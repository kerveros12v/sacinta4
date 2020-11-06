<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Sexos.php");

use Clasesphp\Sexos;

class CrudSexo
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasexo = null;
		$select = $db->query('SELECT * FROM sexo');

		foreach ($select->fetchAll() as $sexos1) {
			$mysexo = new Sexos();
			$mysexo->setSexoId($sexos1['sexoId']);
			$mysexo->setSexo($sexos1['sexo']);
			$mysexo->setSexocodigo($sexos1['sexocodigo']);
			$mysexo->setSexoOculto($sexos1['sexoOculto']);
			$mysexo->setSexoAccion($sexos1['sexoAccion']);
			$mysexo->setSexofecha($sexos1['sexofecha']);
			$mysexo->setSexouser($sexos1['sexouser']);
			$listasexo[] = $mysexo;
		}
		return $listasexo;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM sexo WHERE sexoId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerSexo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM sexo WHERE sexoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sexos1 = $select->fetch();
		$mysexo = new Sexos();
		$mysexo->setSexoId($sexos1['sexoId']);
		$mysexo->setSexo($sexos1['sexo']);
		$mysexo->setSexocodigo($sexos1['sexocodigo']);
		$mysexo->setSexoOculto($sexos1['sexoOculto']);
		$mysexo->setSexoAccion($sexos1['sexoAccion']);
		$mysexo->setSexofecha($sexos1['sexofecha']);
		$mysexo->setSexouser($sexos1['sexouser']);
		return $mysexo;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM sexo WHERE sexoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sexos1 = $select->fetch();
		$mysexo = ($sexos1['sexo']);

		return $mysexo;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT sexocodigo FROM sexo WHERE sexoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sexos1 = $select->fetch();
		$mysexo = ($sexos1['sexocodigo']);

		return $mysexo;
	}
	public function actualizar($sexos1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `sexo`
			SET
			`sexoId` = :sexoId1,
			`sexocodigo` = :sexocodigo1,
			`sexo` = :sexo1,
			`sexoOculto` = :sexoOculto1,
			`sexoAccion` = :sexoAccion1,
			`sexofecha` = :sexofecha1,
			`sexouser` = :sexouser1
			WHERE `sexoId` = :sexoId1;');
		$actualizar->bindValue('sexoId1', $sexos1->getSexoId());
		$actualizar->bindValue('sexocodigo1', $sexos1->getSexocodigo());
		$actualizar->bindValue('sexo1', $sexos1->getSexo());
		$actualizar->bindValue('sexoOculto1', $sexos1->getSexoOculto());
		$actualizar->bindValue('sexoAccion1', $sexos1->getSexoAccion());
		$actualizar->bindValue('sexofecha1', $sexos1->getSexofecha());
		$actualizar->bindValue('sexouser1', $sexos1->getSexouser());
		$actualizar->execute();
	}
	public function insertar($sexos1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `sexo`
			(`sexoId`,
			`sexocodigo`,
			`sexo`,
			`sexoOculto`,
			`sexoAccion`,
			`sexofecha`,
			`sexouser`)
			VALUES
			(:sexoId1,
			:sexocodigo1,
			:sexo1,
			:sexoOculto1,
			:sexoAccion1,
			:sexofecha1,
			:sexouser1);');
		$insert->bindValue('sexoId1', $sexos1->getSexoId());
		$insert->bindValue('sexocodigo1', $sexos1->getSexocodigo());
		$insert->bindValue('sexo1', $sexos1->getSexo());
		$insert->bindValue('sexoOculto1', $sexos1->getSexoOculto());
		$insert->bindValue('sexoAccion1', $sexos1->getSexoAccion());
		$insert->bindValue('sexofecha1', $sexos1->getSexofecha());
		$insert->bindValue('sexouser1', $sexos1->getSexouser());
		$insert->execute();
	}
}
