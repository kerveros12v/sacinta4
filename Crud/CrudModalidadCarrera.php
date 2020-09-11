<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Modalidadcarreras.php");

use Clasesphp\Modalidadcarreras;

class CrudModalidadcarreras
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listamodalidadCarrera = null;
		$select = $db->query("SELECT * FROM `modalidadcarrera`;");
		foreach ($select->fetchAll() as $modalidadCarrera) {
			$mymodalidadCarrera = new Modalidadcarreras();
			$mymodalidadCarrera->setModalidadCarreraId($modalidadCarrera['modalidadCarreraId']);
			$mymodalidadCarrera->setModalidadcarreracodigo($modalidadCarrera['modalidadcarreracodigo']);
			$mymodalidadCarrera->setModalidadCarrera($modalidadCarrera['modalidadCarrera']);
			$mymodalidadCarrera->setModalidadcarreraOculto($modalidadCarrera['modalidadcarreraOculto']);
			$mymodalidadCarrera->setModalidadcarreraAccion($modalidadCarrera['modalidadcarreraAccion']);
			$mymodalidadCarrera->setModalidadcarrerafecha($modalidadCarrera['modalidadcarrerafecha']);
			$mymodalidadCarrera->setModalidadcarrerauser($modalidadCarrera['modalidadcarrerauser']);
			$listamodalidadCarrera[] = $mymodalidadCarrera;
		}
		return $listamodalidadCarrera;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM modalidadcarrera WHERE modalidadCarreraId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerModalidadCarreras($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM modalidadcarrera WHERE modalidadCarreraId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$modalidadCarrera = $select->fetch();
		$mymodalidadCarrera = new Modalidadcarreras();
		$mymodalidadCarrera->setModalidadCarreraId($modalidadCarrera['modalidadCarreraId']);
		$mymodalidadCarrera->setModalidadcarreracodigo($modalidadCarrera['modalidadcarreracodigo']);
		$mymodalidadCarrera->setModalidadCarrera($modalidadCarrera['modalidadCarrera']);
		$mymodalidadCarrera->setModalidadcarreraOculto($modalidadCarrera['modalidadcarreraOculto']);
		$mymodalidadCarrera->setModalidadcarreraAccion($modalidadCarrera['modalidadcarreraAccion']);
		$mymodalidadCarrera->setModalidadcarrerafecha($modalidadCarrera['modalidadcarrerafecha']);
		$mymodalidadCarrera->setModalidadcarrerauser($modalidadCarrera['modalidadcarrerauser']);

		return $mymodalidadCarrera;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT modalidadCarrera FROM modalidadcarrera WHERE modalidadCarreraId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$modalidadCarrera = $select->fetch();
		$mymodalidadCarrera = ($modalidadCarrera['modalidadCarrera']);

		return $mymodalidadCarrera;
	}
	public function actualizar($modalidadCarrera)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `modalidadcarrera`
			SET
			`modalidadCarreraId` = :modalidadCarreraId1,
			`modalidadcarreracodigo` = :modalidadcarreracodigo1,
			`modalidadCarrera` = :modalidadCarrera1,
			`modalidadcarreraOculto` = :modalidadcarreraOculto1,
			`modalidadcarreraAccion` = :modalidadcarreraAccion1,
			`modalidadcarrerafecha` = :modalidadcarrerafecha1,
			`modalidadcarrerauser` = :modalidadcarrerauser1
			WHERE `modalidadCarreraId` = :modalidadCarreraId1;');
		$actualizar->bindValue('modalidadCarreraId1', $modalidadCarrera->getModalidadCarreraId());
		$actualizar->bindValue('modalidadcarreracodigo1', $modalidadCarrera->getModalidadcarreracodigo());
		$actualizar->bindValue('modalidadCarrera1', $modalidadCarrera->getModalidadCarrera());
		$actualizar->bindValue('modalidadcarreraOculto1', $modalidadCarrera->getModalidadcarreraOculto());
		$actualizar->bindValue('modalidadcarreraAccion1', $modalidadCarrera->getModalidadcarreraAccion());
		$actualizar->bindValue('modalidadcarrerafecha1', $modalidadCarrera->getModalidadcarrerafecha());
		$actualizar->bindValue('modalidadcarrerauser1', $modalidadCarrera->getModalidadcarrerauser());
		$actualizar->execute();
	}
	public function insertar($modalidadCarrera)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `modalidadcarrera`
			(`modalidadCarreraId`,
			`modalidadcarreracodigo`,
			`modalidadCarrera`,
			`modalidadcarreraOculto`,
			`modalidadcarreraAccion`,
			`modalidadcarrerafecha`,
			`modalidadcarrerauser`)
			VALUES
			(:modalidadCarreraId1,
			:modalidadcarreracodigo1,
			:modalidadCarrera1,
			:modalidadcarreraOculto1,
			:modalidadcarreraAccion1,
			:modalidadcarrerafecha1,
			:modalidadcarrerauser1);');
		$insert->bindValue('modalidadCarreraId1', $modalidadCarrera->getModalidadCarreraId());
		$insert->bindValue('modalidadcarreracodigo1', $modalidadCarrera->getModalidadcarreracodigo());
		$insert->bindValue('modalidadCarrera1', $modalidadCarrera->getModalidadCarrera());
		$insert->bindValue('modalidadcarreraOculto1', $modalidadCarrera->getModalidadcarreraOculto());
		$insert->bindValue('modalidadcarreraAccion1', $modalidadCarrera->getModalidadcarreraAccion());
		$insert->bindValue('modalidadcarrerafecha1', $modalidadCarrera->getModalidadcarrerafecha());
		$insert->bindValue('modalidadcarrerauser1', $modalidadCarrera->getModalidadcarrerauser());
		$insert->execute();
	}
}
