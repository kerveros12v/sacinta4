<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Cargodirectivo.php");

use Clasesphp\Cargodirectivo;

class CrudCargodirectivo
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listacargodirectivo = null;
		$select = $db->query("SELECT * FROM `cargodirectivo` ");
		foreach ($select->fetchAll() as $cargodirectivo1) {
			$mycargodirectivo = new Cargodirectivo();
			$mycargodirectivo->setCargoDirectivoId($cargodirectivo1['cargoDirectivoId']);
			$mycargodirectivo->setCargoDirectivo($cargodirectivo1['cargoDirectivo']);
			$mycargodirectivo->setCargodirectivocodigo($cargodirectivo1['cargodirectivocodigo']);
			$mycargodirectivo->setCargodirectivoOculto($cargodirectivo1['cargodirectivoOculto']);
			$mycargodirectivo->setCargodirectivoAccion($cargodirectivo1['cargodirectivoAccion']);
			$mycargodirectivo->setCargodirectivofecha($cargodirectivo1['cargodirectivofecha']);
			$mycargodirectivo->setCargodirectivouser($cargodirectivo1['cargodirectivouser']);
			$listacargodirectivo[] = $mycargodirectivo;
		}
		return $listacargodirectivo;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM cargodirectivo WHERE cargoDirectivoId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerCargodirectivo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM cargodirectivo WHERE cargoDirectivoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cargodirectivo1 = $select->fetch();
		$mycargodirectivo = new Cargodirectivo();
		$mycargodirectivo->setCargoDirectivoId($cargodirectivo1['cargoDirectivoId']);
		$mycargodirectivo->setCargoDirectivo($cargodirectivo1['cargoDirectivo']);
		$mycargodirectivo->setCargodirectivocodigo($cargodirectivo1['cargodirectivocodigo']);
		$mycargodirectivo->setCargodirectivoOculto($cargodirectivo1['cargodirectivoOculto']);
		$mycargodirectivo->setCargodirectivoAccion($cargodirectivo1['cargodirectivoAccion']);
		$mycargodirectivo->setCargodirectivofecha($cargodirectivo1['cargodirectivofecha']);
		$mycargodirectivo->setCargodirectivouser($cargodirectivo1['cargodirectivouser']);

		return $mycargodirectivo;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cargoDirectivo FROM cargodirectivo WHERE cargoDirectivoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cargodirectivo1 = $select->fetch();
		$mycargodirectivo = ($cargodirectivo1['cargoDirectivo']);

		return $mycargodirectivo;
	}
	public function actualizar($cargodirectivo1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `cargodirectivo`
		SET
		`cargoDirectivoId` = :cargoDirectivoId1,
		`cargodirectivocodigo` = :cargodirectivocodigo1,
		`cargoDirectivo` = :cargoDirectivo1,
		`cargodirectivoOculto` = :cargodirectivoOculto1,
		`cargodirectivoAccion` = :cargodirectivoAccion1,
		`cargodirectivofecha` = :cargodirectivofecha1,
		`cargodirectivouser` = :cargodirectivouser1
		WHERE `cargoDirectivoId` = :cargoDirectivoId1;');
		$actualizar->bindValue('cargoDirectivoId1', $cargodirectivo1->getCargoDirectivoId());
		$actualizar->bindValue('cargodirectivocodigo1', $cargodirectivo1->getCargodirectivocodigo());
		$actualizar->bindValue('cargoDirectivo1', $cargodirectivo1->getCargoDirectivo());
		$actualizar->bindValue('cargodirectivoOculto1', $cargodirectivo1->getCargodirectivoOculto());
		$actualizar->bindValue('cargodirectivoAccion1', $cargodirectivo1->getCargodirectivoAccion());
		$actualizar->bindValue('cargodirectivofecha1', $cargodirectivo1->getCargodirectivofecha());
		$actualizar->bindValue('cargodirectivouser1', $cargodirectivo1->getCargodirectivouser());
		$actualizar->execute();
	}
	public function insertar($cargodirectivo1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `cargodirectivo`
		(`cargoDirectivoId`,
		`cargodirectivocodigo`,
		`cargoDirectivo`,
		`cargodirectivoOculto`,
		`cargodirectivoAccion`,
		`cargodirectivofecha`,
		`cargodirectivouser`)
		VALUES
		(:cargoDirectivoId1,
		:cargodirectivocodigo1,
		:cargoDirectivo1,
		:cargodirectivoOculto1,
		:cargodirectivoAccion1,
		:cargodirectivofecha1,
		:cargodirectivouser1);');
		$insert->bindValue('cargoDirectivoId1', $cargodirectivo1->getCargoDirectivoId());
		$insert->bindValue('cargodirectivocodigo1', $cargodirectivo1->getCargodirectivocodigo());
		$insert->bindValue('cargoDirectivo1', $cargodirectivo1->getCargoDirectivo());
		$insert->bindValue('cargodirectivoOculto1', $cargodirectivo1->getCargodirectivoOculto());
		$insert->bindValue('cargodirectivoAccion1', $cargodirectivo1->getCargodirectivoAccion());
		$insert->bindValue('cargodirectivofecha1', $cargodirectivo1->getCargodirectivofecha());
		$insert->bindValue('cargodirectivouser1', $cargodirectivo1->getCargodirectivouser());
		$insert->execute();
	}
}
