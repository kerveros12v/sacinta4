<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Cargogestiondireccionacademico.php");

use Clasesphp\Cargogestiondireccionacademico;

class CrudCargodirectivo
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		//, , , , , , ,
		$db = Db::conectar();
		$listacargodirectivo = null;
		$select = $db->query("SELECT * FROM `cargogestiondireccionacademico` ");
		foreach ($select->fetchAll() as $cargodirectivo1) {
			$mycargodirectivo = new Cargogestiondireccionacademico();
			$mycargodirectivo->setCargoGestionDireccionAcademicoId($cargodirectivo1['cargoGestionDireccionAcademicoId']);
			$mycargodirectivo->setCargo($cargodirectivo1['cargo']);
			$mycargodirectivo->setCargogestiondireccionacademicocodigo($cargodirectivo1['cargogestiondireccionacademicocodigo']);
			$mycargodirectivo->setFkcargoDirectivoId($cargodirectivo1['fkcargoGestionDireccionAcademicoId']);
			$mycargodirectivo->setCargogestiondireccionacademicoOculto($cargodirectivo1['cargogestiondireccionacademicoOculto']);
			$mycargodirectivo->setCargogestiondireccionacademicoAccion($cargodirectivo1['cargogestiondireccionacademicoAccion']);
			$mycargodirectivo->setCargogestiondireccionacademicofecha($cargodirectivo1['cargogestiondireccionacademicofecha']);
			$mycargodirectivo->setCargogestiondireccionacademicouser($cargodirectivo1['cargogestiondireccionacademicouser']);
			$listacargodirectivo[] = $mycargodirectivo;
		}
		return $listacargodirectivo;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM cargodirectivo WHERE cargoGestionDireccionAcademicoId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerCargodirectivo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM cargogestiondireccionacademico WHERE cargoGestionDireccionAcademicoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cargodirectivo1 = $select->fetch();
		$mycargodirectivo = new Cargogestiondireccionacademico();
		$mycargodirectivo->setCargoGestionDireccionAcademicoId($cargodirectivo1['cargoGestionDireccionAcademicoId']);
		$mycargodirectivo->setCargo($cargodirectivo1['cargo']);
		$mycargodirectivo->setCargogestiondireccionacademicocodigo($cargodirectivo1['cargogestiondireccionacademicocodigo']);
		$mycargodirectivo->setFkcargoDirectivoId($cargodirectivo1['fkcargoGestionDireccionAcademicoId']);
		$mycargodirectivo->setCargogestiondireccionacademicoOculto($cargodirectivo1['cargogestiondireccionacademicoOculto']);
		$mycargodirectivo->setCargogestiondireccionacademicoAccion($cargodirectivo1['cargogestiondireccionacademicoAccion']);
		$mycargodirectivo->setCargogestiondireccionacademicofecha($cargodirectivo1['cargogestiondireccionacademicofecha']);
		$mycargodirectivo->setCargogestiondireccionacademicouser($cargodirectivo1['cargogestiondireccionacademicouser']);

		return $mycargodirectivo;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cargo FROM cargogestiondireccionacademico WHERE cargoGestionDireccionAcademicoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cargodirectivo1 = $select->fetch();
		$mycargodirectivo = ($cargodirectivo1['cargo']);

		return $mycargodirectivo;
	}
	public function actualizar($cargodirectivo1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `cargodirectivo`
		SET
		`cargoGestionDireccionAcademicoId` = :cargoGestionDireccionAcademicoId1,
		`cargogestiondireccionacademicocodigo` = :cargogestiondireccionacademicocodigo1,
		`cargoDirectivo` = :cargoDirectivo1,
		`cargogestiondireccionacademicoOculto` = :cargogestiondireccionacademicoOculto1,
		`cargogestiondireccionacademicoAccion` = :cargogestiondireccionacademicoAccion1,
		`cargogestiondireccionacademicofecha` = :cargogestiondireccionacademicofecha1,
		`cargogestiondireccionacademicouser` = :cargogestiondireccionacademicouser1
		WHERE `cargoGestionDireccionAcademicoId` = :cargoGestionDireccionAcademicoId1;');
		$actualizar->bindValue('cargoGestionDireccionAcademicoId1', $cargodirectivo1->getcargoGestionDireccionAcademicoId());
		$actualizar->bindValue('cargogestiondireccionacademicocodigo1', $cargodirectivo1->getcargogestiondireccionacademicocodigo());
		$actualizar->bindValue('cargoDirectivo1', $cargodirectivo1->getCargoDirectivo());
		$actualizar->bindValue('cargogestiondireccionacademicoOculto1', $cargodirectivo1->getcargogestiondireccionacademicoOculto());
		$actualizar->bindValue('cargogestiondireccionacademicoAccion1', $cargodirectivo1->getcargogestiondireccionacademicoAccion());
		$actualizar->bindValue('cargogestiondireccionacademicofecha1', $cargodirectivo1->getcargogestiondireccionacademicofecha());
		$actualizar->bindValue('cargogestiondireccionacademicouser1', $cargodirectivo1->getcargogestiondireccionacademicouser());
		$actualizar->execute();
	}
	public function insertar($cargodirectivo1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `cargodirectivo`
		(`cargoGestionDireccionAcademicoId`,
		`cargogestiondireccionacademicocodigo`,
		`cargoDirectivo`,
		`cargogestiondireccionacademicoOculto`,
		`cargogestiondireccionacademicoAccion`,
		`cargogestiondireccionacademicofecha`,
		`cargogestiondireccionacademicouser`)
		VALUES
		(:cargoGestionDireccionAcademicoId1,
		:cargogestiondireccionacademicocodigo1,
		:cargoDirectivo1,
		:cargogestiondireccionacademicoOculto1,
		:cargogestiondireccionacademicoAccion1,
		:cargogestiondireccionacademicofecha1,
		:cargogestiondireccionacademicouser1);');
		$insert->bindValue('cargoGestionDireccionAcademicoId1', $cargodirectivo1->getcargoGestionDireccionAcademicoId());
		$insert->bindValue('cargogestiondireccionacademicocodigo1', $cargodirectivo1->getcargogestiondireccionacademicocodigo());
		$insert->bindValue('cargoDirectivo1', $cargodirectivo1->getCargoDirectivo());
		$insert->bindValue('cargogestiondireccionacademicoOculto1', $cargodirectivo1->getcargogestiondireccionacademicoOculto());
		$insert->bindValue('cargogestiondireccionacademicoAccion1', $cargodirectivo1->getcargogestiondireccionacademicoAccion());
		$insert->bindValue('cargogestiondireccionacademicofecha1', $cargodirectivo1->getcargogestiondireccionacademicofecha());
		$insert->bindValue('cargogestiondireccionacademicouser1', $cargodirectivo1->getcargogestiondireccionacademicouser());
		$insert->execute();
	}
}
