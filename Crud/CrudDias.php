<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Dias.php");

use Clasesphp\Dias;

class CrudDias
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}
	public function mostrar()
	{
		//, , , , ,
		$db = Db::conectar();
		$listadias = null;
		$select = $db->query("SELECT * FROM `dias` ");
		foreach ($select->fetchAll() as $dias1) {
			$mydias = new Dias();
			$mydias->setIdDias($dias1['idDias']);
			$mydias->setDia($dias1['dia']);
			$mydias->setDiasOculto($dias1['diasOculto']);
			$mydias->setDiasAccion($dias1['diasAccion']);
			$mydias->setDiasfecha($dias1['diasfecha']);
			$mydias->setDiasuser($dias1['diasuser']);
			$listadias[] = $mydias;
		}
		return $listadias;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM dias WHERE idDias=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerDias($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM dias WHERE idDias=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$dias1 = $select->fetch();
		$mydias = new Dias();
		$mydias->setIdDias($dias1['idDias']);
		$mydias->setDia($dias1['dia']);
		$mydias->setDiasOculto($dias1['diasOculto']);
		$mydias->setDiasAccion($dias1['diasAccion']);
		$mydias->setDiasfecha($dias1['diasfecha']);
		$mydias->setDiasuser($dias1['diasuser']);

		return $mydias;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT dia FROM dias WHERE idDias=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$dias1 = $select->fetch();
		$mydias = ($dias1['dia']);

		return $mydias;
	}
	public function actualizar($dias1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `dias`
		SET
		`idDias` = :idDias1,
		`dia` = :dia1,
		`diasOculto` = :diasOculto1,
		`diasAccion` = :diasAccion1,
		`diasfecha` = :diasfecha1,
		`diasuser` = :diasuser1
		WHERE `idDias` = :idDias1;');
		$actualizar->bindValue('idDias1', $dias1->getIdDias());
		$actualizar->bindValue('dia1', $dias1->getDia());
		$actualizar->bindValue('diasOculto1', $dias1->getDiasOculto());
		$actualizar->bindValue('diasAccion1', $dias1->getDiasAccion());
		$actualizar->bindValue('diasfecha1', $dias1->getDiasfecha());
		$actualizar->bindValue('diasuser1', $dias1->getDiasuser());
		$actualizar->execute();
	}
	public function insertar($dias1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `dias`
		(`idDias`,
		`dia`,
		`diasOculto`,
		`diasAccion`,
		`diasfecha`,
		`diasuser`)
		VALUES
		(:idDias1,
		:dia1,
		:diasOculto1,
		:diasAccion1,
		:diasfecha1,
		:diasuser1);');
		$insert->bindValue('idDias1', $dias1->getIdDias());
		$insert->bindValue('dia1', $dias1->getDia());
		$insert->bindValue('diasOculto1', $dias1->getDiasOculto());
		$insert->bindValue('diasAccion1', $dias1->getDiasAccion());
		$insert->bindValue('diasfecha1', $dias1->getDiasfecha());
		$insert->bindValue('diasuser1', $dias1->getDiasuser());
		$insert->execute();
	}
}
