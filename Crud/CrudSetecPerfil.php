<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecPerfil.php");

use Clasesphp\SetecPerfil;

class CrudSetecPerfil
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
		$listasetecperfil = null;
		$select = $db->query("SELECT * FROM `setecperfil`");

		foreach ($select->fetchAll() as $setecperfil) {
			$mysetecperfil = new SetecPerfil();
			///, , , , , ,
			$mysetecperfil->setIdsetecperfil($setecperfil['idsetecperfil']);
			$mysetecperfil->setSetecperfilnombre($setecperfil['setecperfilnombre']);
			$mysetecperfil->setSetecperfilcodigo($setecperfil['setecperfilcodigo']);
			$mysetecperfil->setSetecperfilOculto($setecperfil['setecperfilOculto']);
			$mysetecperfil->setSetecperfilAccion($setecperfil['setecperfilAccion']);
			$mysetecperfil->setSetecperfilfecha($setecperfil['setecperfilfecha']);
			$mysetecperfil->setSetecperfiluser($setecperfil['setecperfiluser']);

			////
			$listasetecperfil[] = $mysetecperfil;
		}
		return $listasetecperfil;
	}
	public function obtenerSetecPerfil($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setecperfil` WHERE `idsetecperfil`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecperfil = $select->fetch();
		$mysetecperfil = new SetecPerfil();
		///
		$mysetecperfil->setIdsetecperfil($setecperfil['idsetecperfil']);
		$mysetecperfil->setSetecperfilnombre($setecperfil['setecperfilnombre']);
		$mysetecperfil->setSetecperfilcodigo($setecperfil['setecperfilcodigo']);
		$mysetecperfil->setSetecperfilOculto($setecperfil['setecperfilOculto']);
		$mysetecperfil->setSetecperfilAccion($setecperfil['setecperfilAccion']);
		$mysetecperfil->setSetecperfilfecha($setecperfil['setecperfilfecha']);
		$mysetecperfil->setSetecperfiluser($setecperfil['setecperfiluser']);
		return $mysetecperfil;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT `setecperfilnombre` FROM `setecperfil` WHERE `idsetecperfil`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecperfil = $select->fetch();
		$mysetecperfil = ($setecperfil['setecperfilnombre']);
		return $mysetecperfil;
	}
	public function insertar($datos)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `setecperfil`
		(`idsetecperfil`,
		`setecperfilnombre`,
		`setecperfilcodigo`,
		`setecperfilOculto`,
		`setecperfilAccion`,
		`setecperfilfecha`,
		`setecperfiluser`)
		VALUES
		(:idsetecperfil1,
		:setecperfilnombre1,
		:setecperfilcodigo1,
		:setecperfilOculto1,
		:setecperfilAccion1,
		:setecperfilfecha1,
		:setecperfiluser1);");
		$insert->bindValue('idsetecperfil1', $datos->getIdsetecperfil());
		$insert->bindValue('setecperfilnombre1', $datos->getSetecperfilnombre());
		$insert->bindValue('setecperfilcodigo1', $datos->getSetecperfilcodigo());
		$insert->bindValue('setecperfilOculto1', $datos->getSetecperfilOculto());
		$insert->bindValue('setecperfilAccion1', $datos->getSetecperfilAccion());
		$insert->bindValue('setecperfilfecha1', $datos->getSetecperfilfecha());
		$insert->bindValue('setecperfiluser1', $datos->getSetecperfiluser());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `setecperfil`
		SET
		`idsetecperfil` = :idsetecperfil1,
		`setecperfilnombre` = :setecperfilnombre1,
		`setecperfilcodigo` = :setecperfilcodigo1,
		`setecperfilOculto` = :setecperfilOculto1,
		`setecperfilAccion` = :setecperfilAccion1,
		`setecperfilfecha` = :setecperfilfecha1,
		`setecperfiluser` = :setecperfiluser1
		WHERE `idsetecperfil` = :idsetecperfil1;");
		$actualizar->bindValue('idsetecperfil1', $datos->getIdsetecperfil());
		$actualizar->bindValue('setecperfilnombre1', $datos->getSetecperfilnombre());
		$actualizar->bindValue('setecperfilcodigo1', $datos->getSetecperfilcodigo());
		$actualizar->bindValue('setecperfilOculto1', $datos->getSetecperfilOculto());
		$actualizar->bindValue('setecperfilAccion1', $datos->getSetecperfilAccion());
		$actualizar->bindValue('setecperfilfecha1', $datos->getSetecperfilfecha());
		$actualizar->bindValue('setecperfiluser1', $datos->getSetecperfiluser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setecperfil` WHERE idsetecperfil=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
