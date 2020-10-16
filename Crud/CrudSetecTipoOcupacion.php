<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecTipoOcupacion.php");

use Clasesphp\SetecTipoOcupacion;

class CrudSetecTipoOcupacion
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasetectipoocupacion = null;
		$select = $db->query("SELECT * FROM `setectipoocupacion`");

		foreach ($select->fetchAll() as $setectipoocupacion) {
			$mysetectipoocupacion = new SetecTipoOcupacion();

			$mysetectipoocupacion->setIdsetecTipoOcupacion($setectipoocupacion['idsetecTipoOcupacion']);
			$mysetectipoocupacion->setTipoOcupacion($setectipoocupacion['tipoOcupacion']);
			$mysetectipoocupacion->setSetectipoocupacioncodigo($setectipoocupacion['setectipoocupacioncodigo']);
			$mysetectipoocupacion->setSetectipoocupacionoculto($setectipoocupacion['setectipoocupacionoculto']);
			$mysetectipoocupacion->setSetectipoocupacionaccion($setectipoocupacion['setectipoocupacionaccion']);
			$mysetectipoocupacion->setSetectipoocupacionfecha($setectipoocupacion['setectipoocupacionfecha']);
			$mysetectipoocupacion->setSetectipoocupacionuser($setectipoocupacion['setectipoocupacionuser']);
			$listasetectipoocupacion[] = $mysetectipoocupacion;
		}
		return $listasetectipoocupacion;
	}
	public function obtenerSetecPerfil($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setectipoocupacion` WHERE `idsetecTipoOcupacion`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setectipoocupacion = $select->fetch();
		$mysetectipoocupacion = new SetecTipoOcupacion();
		///
		$mysetectipoocupacion->setIdsetecTipoOcupacion($setectipoocupacion['idsetecTipoOcupacion']);
		$mysetectipoocupacion->setTipoOcupacion($setectipoocupacion['tipoOcupacion']);
		$mysetectipoocupacion->setSetectipoocupacioncodigo($setectipoocupacion['setectipoocupacioncodigo']);
		$mysetectipoocupacion->setSetectipoocupacionoculto($setectipoocupacion['setectipoocupacionoculto']);
		$mysetectipoocupacion->setSetectipoocupacionaccion($setectipoocupacion['setectipoocupacionaccion']);
		$mysetectipoocupacion->setSetectipoocupacionfecha($setectipoocupacion['setectipoocupacionfecha']);
		$mysetectipoocupacion->setSetectipoocupacionuser($setectipoocupacion['setectipoocupacionuser']);
		return $mysetectipoocupacion;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT `tipoOcupacion` FROM `setectipoocupacion` WHERE `idsetecTipoOcupacion`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setectipoocupacion = $select->fetch();
		$mysetectipoocupacion = ($setectipoocupacion['tipoOcupacion']);
		return $mysetectipoocupacion;
	}
	public function insertar($datos)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `setectipoocupacion`
		(`idsetecTipoOcupacion`,
		`tipoOcupacion`,
		`setectipoocupacioncodigo`,
		`setectipoocupacionoculto`,
		`setectipoocupacionaccion`,
		`setectipoocupacionfecha`,
		`setectipoocupacionuser`)
		VALUES
		(:idsetecTipoOcupacion1,
		:tipoOcupacion1,
		:setectipoocupacioncodigo1,
		:setectipoocupacionoculto1,
		:setectipoocupacionaccion1,
		:setectipoocupacionfecha1,
		:setectipoocupacionuser1);");
		$insert->bindValue('idsetecTipoOcupacion1', $datos->getIdsetecTipoOcupacion());
		$insert->bindValue('tipoOcupacion1', $datos->getTipoOcupacion());
		$insert->bindValue('setectipoocupacioncodigo1', $datos->getSetectipoocupacioncodigo());
		$insert->bindValue('setectipoocupacionoculto1', $datos->getSetectipoocupacionoculto());
		$insert->bindValue('setectipoocupacionaccion1', $datos->getSetectipoocupacionaccion());
		$insert->bindValue('setectipoocupacionfecha1', $datos->getSetectipoocupacionfecha());
		$insert->bindValue('setectipoocupacionuser1', $datos->getSetectipoocupacionuser());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `setectipoocupacion`
		SET
		`idsetecTipoOcupacion` = :idsetecTipoOcupacion1,
		`tipoOcupacion` = :tipoOcupacion1,
		`setectipoocupacioncodigo` = :setectipoocupacioncodigo1,
		`setectipoocupacionoculto` = :setectipoocupacionoculto1,
		`setectipoocupacionaccion` = :setectipoocupacionaccion1,
		`setectipoocupacionfecha` = :setectipoocupacionfecha1,
		`setectipoocupacionuser` = :setectipoocupacionuser1
		WHERE `idsetecTipoOcupacion` = :idsetecTipoOcupacion1;");
		$actualizar->bindValue('idsetecTipoOcupacion1', $datos->getIdsetecTipoOcupacion());
		$actualizar->bindValue('tipoOcupacion1', $datos->getTipoOcupacion());
		$actualizar->bindValue('setectipoocupacioncodigo1', $datos->getSetectipoocupacioncodigo());
		$actualizar->bindValue('setectipoocupacionoculto1', $datos->getSetectipoocupacionoculto());
		$actualizar->bindValue('setectipoocupacionaccion1', $datos->getSetectipoocupacionaccion());
		$actualizar->bindValue('setectipoocupacionfecha1', $datos->getSetectipoocupacionfecha());
		$actualizar->bindValue('setectipoocupacionuser1', $datos->getSetectipoocupacionuser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setectipoocupacion` WHERE idsetecTipoOcupacion=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
