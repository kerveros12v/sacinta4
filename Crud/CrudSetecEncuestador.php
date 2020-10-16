<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecEncuestador.php");

use Clasesphp\SetecEncuestador;
use Exception;

class CrudSetecEncuestador
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
		$listasetecencuestador = null;
		$select = $db->query("SELECT * FROM `setecencuestador`");

		foreach ($select->fetchAll() as $setecencuestador) {
			$mysetecencuestador = new SetecEncuestador();
			///, , , , , ,
			$mysetecencuestador->setIdnumIdentificacion($setecencuestador['idsetecEncuestadornumIdentificacion']);
			$mysetecencuestador->setNombre($setecencuestador['nombre']);
			$mysetecencuestador->setEtniasEtniaId($setecencuestador['etnias_etniaId']);
			$mysetecencuestador->setSetecencuestadorOculto($setecencuestador['setecencuestadorOculto']);
			$mysetecencuestador->setSetecencuestadorAccion($setecencuestador['setecencuestadorAccion']);
			$mysetecencuestador->setSetecencuestadorfecha($setecencuestador['setecencuestadorfecha']);
			$mysetecencuestador->setSetecencuestadoruser($setecencuestador['setecencuestadoruser']);
			$mysetecencuestador->setSetecencuestadorperfil($setecencuestador['setecencuestadorperfil']);
			////
			$listasetecencuestador[] = $mysetecencuestador;
		}
		return $listasetecencuestador;
	}
	public function obtenerSetecEncuestador($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setecencuestador` WHERE `idsetecEncuestadornumIdentificacion`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecencuestador = $select->fetch();
		$mysetecencuestador = new SetecEncuestador();
		///, , , , , ,
		$mysetecencuestador->setIdnumIdentificacion($setecencuestador['idsetecEncuestadornumIdentificacion']);
		$mysetecencuestador->setNombre($setecencuestador['nombre']);
		$mysetecencuestador->setEtniasEtniaId($setecencuestador['etnias_etniaId']);
		$mysetecencuestador->setSetecencuestadorOculto($setecencuestador['setecencuestadorOculto']);
		$mysetecencuestador->setSetecencuestadorAccion($setecencuestador['setecencuestadorAccion']);
		$mysetecencuestador->setSetecencuestadorfecha($setecencuestador['setecencuestadorfecha']);
		$mysetecencuestador->setSetecencuestadoruser($setecencuestador['setecencuestadoruser']);
		$mysetecencuestador->setSetecencuestadorperfil($setecencuestador['setecencuestadorperfil']);
		////
		return $mysetecencuestador;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM setecencuestador where idsetecEncuestadornumIdentificacion=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT `nombre` FROM `setecencuestador` WHERE `idsetecEncuestadornumIdentificacion`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecencuestador = $select->fetch();

		///
		$mysetecencuestador = $setecencuestador['nombre'];
		////
		return $mysetecencuestador;
	}
	public function insertar($datos)
	{
		//	echo "ingreso al insertar";
		try {
			$db = Db::conectar();
			$insert = $db->prepare('INSERT INTO `setecencuestador`
		(`idsetecEncuestadornumIdentificacion`,
		`nombre`,
		`etnias_etniaId`,
		`setecencuestadorperfil`,
		`setecencuestadorOculto`,
		`setecencuestadorAccion`,
		`setecencuestadorfecha`,
		`setecencuestadoruser`)
		VALUES
		(:idsetecEncuestadornumIdentificacion1,
		:nombre1,
		:etnias_etniaId1,
		:setecencuestadorperfil1,
		:setecencuestadorOculto1,
		:setecencuestadorAccion1,
		:setecencuestadorfecha1,
		:setecencuestadoruser1);');
			$insert->bindValue('idsetecEncuestadornumIdentificacion1', $datos->getIdnumIdentificacion());
			$insert->bindValue('nombre1', $datos->getNombre());
			$insert->bindValue('etnias_etniaId1', $datos->getEtniasEtniaId());
			$insert->bindValue('setecencuestadorOculto1', $datos->getSetecencuestadorOculto());
			$insert->bindValue('setecencuestadorAccion1', $datos->getSetecencuestadorAccion());
			$insert->bindValue('setecencuestadorfecha1', $datos->getSetecencuestadorfecha());
			$insert->bindValue('setecencuestadoruser1', $datos->getSetecencuestadoruser());
			$insert->bindValue('setecencuestadorperfil1', $datos->getSetecencuestadorperfil());
			$insert->execute();
			//echo "Se ejecuto Correctamente la insercion";
		} catch (Exception $e) {
			echo $e;
		}
	}
	public function actualizar($datos)
	{
		try {
			$db = Db::conectar();
			$actualizar = $db->prepare("UPDATE `setecencuestador`
			SET
			`idsetecEncuestadornumIdentificacion` = :idsetecEncuestadornumIdentificacion1,
			`nombre` = :nombre1,
			`etnias_etniaId` = :etnias_etniaId1,
			`setecencuestadorperfil` = :setecencuestadorperfil1,
			`setecencuestadorOculto` = :setecencuestadorOculto1,
			`setecencuestadorAccion` = :setecencuestadorAccion1,
			`setecencuestadorfecha` = :setecencuestadorfecha1,
			`setecencuestadoruser` = :setecencuestadoruser1
			WHERE `idsetecEncuestadornumIdentificacion` = :idsetecEncuestadornumIdentificacion1;");
			$actualizar->bindValue('idsetecEncuestadornumIdentificacion1', $datos->getIdnumIdentificacion());
			$actualizar->bindValue('nombre1', $datos->getNombre());
			$actualizar->bindValue('etnias_etniaId1', $datos->getEtniasEtniaId());
			$actualizar->bindValue('setecencuestadorOculto1', $datos->getSetecencuestadorOculto());
			$actualizar->bindValue('setecencuestadorAccion1', $datos->getSetecencuestadorAccion());
			$actualizar->bindValue('setecencuestadorfecha1', $datos->getSetecencuestadorfecha());
			$actualizar->bindValue('setecencuestadoruser1', $datos->getSetecencuestadoruser());
			$actualizar->bindValue('setecencuestadorperfil1', $datos->getSetecencuestadorperfil());
			$actualizar->execute();
		} catch (Exception $e) {
			echo $e;
		}
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setecencuestador`
			WHERE `idsetecEncuestadornumIdentificacion` = :idsetecEncuestadornumIdentificacion1;');
		$eliminar->bindValue('idsetecEncuestadornumIdentificacion1', $id);
		$eliminar->execute();
	}
}
