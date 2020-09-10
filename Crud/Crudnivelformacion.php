<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Nivelformacion.php");

use Clasesphp\Nivelformacion;

class CrudNivelformacion
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaNivelformacion = null;
		$select = $db->query("SELECT * FROM `nivelformacion`");

		foreach ($select->fetchAll() as $nivelformacion1) {
			$mynivelformacion = new Nivelformacion();
			$mynivelformacion->setNivelFormacionId($nivelformacion1['nivelFormacionId']);
			$mynivelformacion->setCodigonivelFormacion($nivelformacion1['codigonivelFormacion']);
			$mynivelformacion->setNivelFormacion($nivelformacion1['nivelFormacion']);
			$mynivelformacion->setNivelInstruccion($nivelformacion1['nivelInstruccion']);
			$mynivelformacion->setNivelformacionfecha($nivelformacion1['nivelformacionfecha']);
			$mynivelformacion->setNivelformacionuser($nivelformacion1['nivelformacionuser']);
			$mynivelformacion->setNivelformacionOculto($nivelformacion1['nivelformacionOculto']);
			$mynivelformacion->setNivelformacionAccion($nivelformacion1['nivelformacionAccion']);

			$listaNivelformacion[] = $mynivelformacion;
		}
		return $listaNivelformacion;
	}
	public function nivelInstruccion()
	{
		$db = Db::conectar();
		$listaNivelformacion = null;
		$select = $db->query("SELECT nivelInstruccion FROM nivelformacion group by nivelInstruccion;");

		foreach ($select->fetchAll() as $nivelformacion1) {
			$listaNivelformacion[] = $nivelformacion1['nivelInstruccion'];
		}
		return $listaNivelformacion;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM nivelformacion WHERE nivelFormacionId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerFormacion($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM nivelformacion WHERE nivelFormacionId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$nivelformacion1 = $select->fetch();
		$mynivelformacion = new Nivelformacion();
		$mynivelformacion->setNivelFormacionId($nivelformacion1['nivelFormacionId']);
		$mynivelformacion->setCodigonivelFormacion($nivelformacion1['codigonivelFormacion']);
		$mynivelformacion->setNivelFormacion($nivelformacion1['nivelFormacion']);
		$mynivelformacion->setNivelInstruccion($nivelformacion1['nivelInstruccion']);
		$mynivelformacion->setNivelformacionfecha($nivelformacion1['nivelformacionfecha']);
		$mynivelformacion->setNivelformacionuser($nivelformacion1['nivelformacionuser']);
		$mynivelformacion->setNivelformacionOculto($nivelformacion1['nivelformacionOculto']);
		$mynivelformacion->setNivelformacionAccion($nivelformacion1['nivelformacionAccion']);
		return $mynivelformacion;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT nivelFormacion FROM nivelformacion WHERE nivelFormacionId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$nivelformacion1 = $select->fetch();
		$mynivelformacion = ($nivelformacion1['nivelFormacion']);

		return $mynivelformacion;
	}
	public function actualizar($nivelformacion1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `nivelformacion`
			SET
			`nivelFormacionId` = :nivelFormacionId1,
			`codigonivelFormacion` = :codigonivelFormacion1,
			`nivelFormacion` = :nivelFormacion1,
			`nivelInstruccion` = :nivelInstruccion1,
			`nivelformacionOculto` = :nivelformacionOculto1,
			`nivelformacionAccion` = :nivelformacionAccion1,
			`nivelformacionfecha` = :nivelformacionfecha1,
			`nivelformacionuser` = :nivelformacionuser1
			WHERE `nivelFormacionId` = :nivelFormacionId1;');
		$actualizar->bindValue('nivelFormacionId1', $nivelformacion1->getNivelFormacionId());
		$actualizar->bindValue('codigonivelFormacion1', $nivelformacion1->getCodigonivelFormacion());
		$actualizar->bindValue('nivelFormacion1', $nivelformacion1->getNivelFormacion());
		$actualizar->bindValue('nivelInstruccion1', $nivelformacion1->getNivelInstruccion());
		$actualizar->bindValue('nivelformacionOculto1', $nivelformacion1->getNivelformacionOculto());
		$actualizar->bindValue('nivelformacionAccion1', $nivelformacion1->getNivelformacionAccion());
		$actualizar->bindValue('nivelformacionfecha1', $nivelformacion1->getNivelformacionfecha());
		$actualizar->bindValue('nivelformacionuser1', $nivelformacion1->getNivelformacionuser());
		$actualizar->execute();
	}
	public function insertar($nivelformacion1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `nivelformacion`
			(`nivelFormacionId`,
			`codigonivelFormacion`,
			`nivelFormacion`,
			`nivelInstruccion`,
			`nivelformacionOculto`,
			`nivelformacionAccion`,
			`nivelformacionfecha`,
			`nivelformacionuser`)
			VALUES
			(:nivelFormacionId1,
			:codigonivelFormacion1,
			:nivelFormacion1,
			:nivelInstruccion1,
			:nivelformacionOculto1,
			:nivelformacionAccion1,
			:nivelformacionfecha1,
			:nivelformacionuser1);');
		$insert->bindValue('nivelFormacionId1', $nivelformacion1->getNivelFormacionId());
		$insert->bindValue('codigonivelFormacion1', $nivelformacion1->getCodigonivelFormacion());
		$insert->bindValue('nivelFormacion1', $nivelformacion1->getNivelFormacion());
		$insert->bindValue('nivelInstruccion1', $nivelformacion1->getNivelInstruccion());
		$insert->bindValue('nivelformacionOculto1', $nivelformacion1->getNivelformacionOculto());
		$insert->bindValue('nivelformacionAccion1', $nivelformacion1->getNivelformacionAccion());
		$insert->bindValue('nivelformacionfecha1', $nivelformacion1->getNivelformacionfecha());
		$insert->bindValue('nivelformacionuser1', $nivelformacion1->getNivelformacionuser());
		$insert->execute();
	}
}
