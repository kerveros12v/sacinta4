<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecEstadoOcupacional.php");

use Clasesphp\SetecEstadoOcupacional;

class CrudSetecEstadoOcupacional
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasetecEstadoOcupacional = null;
		$select = $db->query("SELECT * FROM `setecestadoocupacional`");

		foreach ($select->fetchAll() as $setecEstadoOcupacional) {
			$mysetecEstadoOcupacional = new SetecEstadoOcupacional();
			///, , , , , ,
			$mysetecEstadoOcupacional->setSetecEstadoOcupacionalId($setecEstadoOcupacional['setecEstadoOcupacionalId']);
			$mysetecEstadoOcupacional->setSetecestadoocupacionalcodigo($setecEstadoOcupacional['setecestadoocupacionalcodigo']);
			$mysetecEstadoOcupacional->setEstadoOcupacional($setecEstadoOcupacional['estadoOcupacional']);
			$mysetecEstadoOcupacional->setSeoOculto($setecEstadoOcupacional['seoOculto']);
			$mysetecEstadoOcupacional->setSeoAccion($setecEstadoOcupacional['seoAccion']);
			$mysetecEstadoOcupacional->setSeofecha($setecEstadoOcupacional['seofecha']);
			$mysetecEstadoOcupacional->setSeouser($setecEstadoOcupacional['seouser']);
			////
			$listasetecEstadoOcupacional[] = $mysetecEstadoOcupacional;
		}
		return $listasetecEstadoOcupacional;
	}
	public function obtenerSetecEstadoOcupacional($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setecestadoocupacional` WHERE `setecEstadoOcupacionalId`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecEstadoOcupacional = $select->fetch();
		$mysetecEstadoOcupacional = new SetecEstadoOcupacional();
		///
		$mysetecEstadoOcupacional->setSetecEstadoOcupacionalId($setecEstadoOcupacional['setecEstadoOcupacionalId']);
		$mysetecEstadoOcupacional->setSetecestadoocupacionalcodigo($setecEstadoOcupacional['setecestadoocupacionalcodigo']);
		$mysetecEstadoOcupacional->setEstadoOcupacional($setecEstadoOcupacional['estadoOcupacional']);
		$mysetecEstadoOcupacional->setSeoOculto($setecEstadoOcupacional['seoOculto']);
		$mysetecEstadoOcupacional->setSeoAccion($setecEstadoOcupacional['seoAccion']);
		$mysetecEstadoOcupacional->setSeofecha($setecEstadoOcupacional['seofecha']);
		$mysetecEstadoOcupacional->setSeouser($setecEstadoOcupacional['seouser']);
		return $mysetecEstadoOcupacional;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT `estadoOcupacional` FROM `setecestadoocupacional` WHERE `setecEstadoOcupacionalId`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecestadoocupacional = $select->fetch();
		$mysetecestadoocupacional = ($setecestadoocupacional['estadoOcupacional']);
		return $mysetecestadoocupacional;
	}
	public function insertar($datos)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `setecestadoocupacional`
		(`setecEstadoOcupacionalId`,
		`setecestadoocupacionalcodigo`,
		`estadoOcupacional`,
		`seoOculto`,
		`seoAccion`,
		`seofecha`,
		`seouser`)
		VALUES
		(:setecEstadoOcupacionalId1,
		:setecestadoocupacionalcodigo1,
		:estadoOcupacional1,
		:seoOculto1,
		:seoAccion1,
		:seofecha1,
		:seouser1);");
		$insert->bindValue('setecEstadoOcupacionalId1', $datos->getSetecEstadoOcupacionalId());
		$insert->bindValue('setecestadoocupacionalcodigo1', $datos->getSetecestadoocupacionalcodigo());
		$insert->bindValue('estadoOcupacional1', $datos->getEstadoOcupacional());
		$insert->bindValue('seoOculto1', $datos->getSeoOculto());
		$insert->bindValue('seoAccion1', $datos->getSeoAccion());
		$insert->bindValue('seofecha1', $datos->getSeofecha());
		$insert->bindValue('seouser1', $datos->getSeouser());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `setecestadoocupacional`
		SET
		`setecEstadoOcupacionalId` = :setecEstadoOcupacionalId1,
		`setecestadoocupacionalcodigo` = :setecestadoocupacionalcodigo1,
		`estadoOcupacional` = :estadoOcupacional1,
		`seoOculto` = :seoOculto1,
		`seoAccion` = :seoAccion1,
		`seofecha` = :seofecha1,
		`seouser` = :seouser1
		WHERE `setecEstadoOcupacionalId` = :setecEstadoOcupacionalId1;");
		$actualizar->bindValue('setecEstadoOcupacionalId1', $datos->getSetecEstadoOcupacionalId());
		$actualizar->bindValue('setecestadoocupacionalcodigo1', $datos->getSetecestadoocupacionalcodigo());
		$actualizar->bindValue('estadoOcupacional1', $datos->getEstadoOcupacional());
		$actualizar->bindValue('seoOculto1', $datos->getSeoOculto());
		$actualizar->bindValue('seoAccion1', $datos->getSeoAccion());
		$actualizar->bindValue('seofecha1', $datos->getSeofecha());
		$actualizar->bindValue('seouser1', $datos->getSeouser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setecestadoocupacional`
			WHERE setecEstadoOcupacionalId=:id;');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
