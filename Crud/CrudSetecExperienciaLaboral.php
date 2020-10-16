<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecExperienciaLaboral.php");

use Clasesphp\SetecExperienciaLaboral;

class CrudSetecExperienciaLaboral
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasetecexperiencialaboral = null;
		$select = $db->query("SELECT * FROM `setecexperiencialaboral`");

		foreach ($select->fetchAll() as $setecexperienciaLaboral) {
			$mysetecExperienciaLaboral = new SetecExperienciaLaboral();
			///, , , , , , , ,
			$mysetecExperienciaLaboral->setIdsetecExperienciaLaboral($setecexperienciaLaboral['idsetecExperienciaLaboral']);
			$mysetecExperienciaLaboral->setFknumidentificacion($setecexperienciaLaboral['fknumidentificacion']);
			$mysetecExperienciaLaboral->setExperiencianombreEmpresa($setecexperienciaLaboral['experiencianombreEmpresa']);
			$mysetecExperienciaLaboral->setTiempodetrabajo($setecexperienciaLaboral['tiempodetrabajo']);
			$mysetecExperienciaLaboral->setSetecactividadRealizada($setecexperienciaLaboral['setecactividadRealizada']);
			$mysetecExperienciaLaboral->setSplOculto($setecexperienciaLaboral['splOculto']);
			$mysetecExperienciaLaboral->setSplAccion($setecexperienciaLaboral['splAccion']);
			$mysetecExperienciaLaboral->setSplfecha($setecexperienciaLaboral['splfecha']);
			$mysetecExperienciaLaboral->setSpluser($setecexperienciaLaboral['spluser']);

			////
			$listasetecexperiencialaboral[] = $mysetecExperienciaLaboral;
		}
		return $listasetecexperiencialaboral;
	}
	public function obtenerSetecexperiencialaboral($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setecexperiencialaboral` WHERE `idsetecExperienciaLaboral`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecexperienciaLaboral = $select->fetch();
		$mysetecExperienciaLaboral = new SetecExperienciaLaboral();
		///
		$mysetecExperienciaLaboral->setIdsetecExperienciaLaboral($setecexperienciaLaboral['idsetecExperienciaLaboral']);
		$mysetecExperienciaLaboral->setFknumidentificacion($setecexperienciaLaboral['fknumidentificacion']);
		$mysetecExperienciaLaboral->setExperiencianombreEmpresa($setecexperienciaLaboral['experiencianombreEmpresa']);
		$mysetecExperienciaLaboral->setTiempodetrabajo($setecexperienciaLaboral['tiempodetrabajo']);
		$mysetecExperienciaLaboral->setSetecactividadRealizada($setecexperienciaLaboral['setecactividadRealizada']);
		$mysetecExperienciaLaboral->setSplOculto($setecexperienciaLaboral['splOculto']);
		$mysetecExperienciaLaboral->setSplAccion($setecexperienciaLaboral['splAccion']);
		$mysetecExperienciaLaboral->setSplfecha($setecexperienciaLaboral['splfecha']);
		$mysetecExperienciaLaboral->setSpluser($setecexperienciaLaboral['spluser']);


		return $mysetecExperienciaLaboral;
	}
	public function insertar($datos)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `setecexperiencialaboral`
		(`idsetecExperienciaLaboral`,
		`fknumidentificacion`,
		`experiencianombreEmpresa`,
		`tiempodetrabajo`,
		`setecactividadRealizada`,
		`splOculto`,
		`splAccion`,
		`splfecha`,
		`spluser`)
		VALUES
		(:idsetecExperienciaLaboral1,
		:fknumidentificacion1,
		:experiencianombreEmpresa1,
		:tiempodetrabajo1,
		:setecactividadRealizada1,
		:splOculto1,
		:splAccion1,
		:splfecha1,
		:spluser1);");
		$insert->bindValue('idsetecExperienciaLaboral1', $datos->getIdsetecExperienciaLaboral());
		$insert->bindValue('fknumidentificacion1', $datos->getFknumidentificacion());
		$insert->bindValue('experiencianombreEmpresa1', $datos->getExperiencianombreEmpresa());
		$insert->bindValue('tiempodetrabajo1', $datos->getTiempodetrabajo());
		$insert->bindValue('setecactividadRealizada1', $datos->getSetecactividadRealizada());
		$insert->bindValue('splOculto1', $datos->getSplOculto());
		$insert->bindValue('splAccion1', $datos->getSplAccion());
		$insert->bindValue('splfecha1', $datos->getSplfecha());
		$insert->bindValue('spluser1', $datos->getSpluser());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `setecexperiencialaboral`
		SET
		`idsetecExperienciaLaboral` = :idsetecExperienciaLaboral1,
		`fknumidentificacion` = :fknumidentificacion1,
		`experiencianombreEmpresa` = :experiencianombreEmpresa1,
		`tiempodetrabajo` = :tiempodetrabajo1,
		`setecactividadRealizada` = :setecactividadRealizada1,
		`splOculto` = :splOculto1,
		`splAccion` = :splAccion1,
		`splfecha` = :splfecha1,
		`spluser` = :spluser1
		WHERE `idsetecExperienciaLaboral` = :idsetecExperienciaLaboral1;");
		$actualizar->bindValue('idsetecExperienciaLaboral1', $datos->getIdsetecExperienciaLaboral());
		$actualizar->bindValue('fknumidentificacion1', $datos->getFknumidentificacion());
		$actualizar->bindValue('experiencianombreEmpresa1', $datos->getExperiencianombreEmpresa());
		$actualizar->bindValue('tiempodetrabajo1', $datos->getTiempodetrabajo());
		$actualizar->bindValue('setecactividadRealizada1', $datos->getSetecactividadRealizada());
		$actualizar->bindValue('splOculto1', $datos->getSplOculto());
		$actualizar->bindValue('splAccion1', $datos->getSplAccion());
		$actualizar->bindValue('splfecha1', $datos->getSplfecha());
		$actualizar->bindValue('spluser1', $datos->getSpluser());
		$actualizar->execute();
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM setecexperiencialaboral where idsetecExperienciaLaboral=:id ;");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setecexperiencialaboral` WHERE idsetecExperienciaLaboral=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
