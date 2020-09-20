<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Sostenimientos.php");

use Clasesphp\Sostenimientos;

class CrudTipoSostenimientos
{
	// constructor de la clase
	public function __construct()
	{
	}
	//, , , , , ,
	public function mostrar()
	{
		$db = Db::conectar();
		$listasostenimiento = null;
		$select = $db->query('SELECT * FROM sostenimientos;');
		foreach ($select->fetchAll() as $sostenimiento) {
			$mysostenimiento = new Sostenimientos();
			$mysostenimiento->setIdSostenimiento($sostenimiento['idSostenimiento']);
			$mysostenimiento->setSostenimientoscodigo($sostenimiento['sostenimientoscodigo']);
			$mysostenimiento->setSostenimiento($sostenimiento['sostenimiento']);
			$mysostenimiento->setSostenimientosOculto($sostenimiento['sostenimientosOculto']);
			$mysostenimiento->setSostenimientosAccion($sostenimiento['sostenimientosAccion']);
			$mysostenimiento->setSostenimientosfecha($sostenimiento['sostenimientosfecha']);
			$mysostenimiento->setSostenimientosuser($sostenimiento['sostenimientosuser']);
			$listasostenimiento[] = $mysostenimiento;
		}
		return $listasostenimiento;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM sostenimientos WHERE idSostenimiento=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenersostenimiento($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM `sostenimientos` WHERE  idSostenimiento=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sostenimiento = $select->fetch();
		$mysostenimiento = new Sostenimientos();
		$mysostenimiento->setIdSostenimiento($sostenimiento['idSostenimiento']);
		$mysostenimiento->setSostenimientoscodigo($sostenimiento['sostenimientoscodigo']);
		$mysostenimiento->setSostenimiento($sostenimiento['sostenimiento']);
		$mysostenimiento->setSostenimientosOculto($sostenimiento['sostenimientosOculto']);
		$mysostenimiento->setSostenimientosAccion($sostenimiento['sostenimientosAccion']);
		$mysostenimiento->setSostenimientosfecha($sostenimiento['sostenimientosfecha']);
		$mysostenimiento->setSostenimientosuser($sostenimiento['sostenimientosuser']);
		return $mysostenimiento;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT sostenimiento FROM sostenimientos WHERE idSostenimiento=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sostenimiento = $select->fetch();
		$mysostenimiento = ($sostenimiento['sostenimiento']);

		return $mysostenimiento;
	}
	public function actualizar($sostenimiento)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare('UPDATE `sostenimientos`
		SET
		`idSostenimiento` = :idSostenimiento1,
		`sostenimientoscodigo` = :sostenimientoscodigo1,
		`sostenimiento` = :sostenimiento1,
		`sostenimientosOculto` = :sostenimientosOculto1,
		`sostenimientosAccion` = :sostenimientosAccion1,
		`sostenimientosfecha` = :sostenimientosfecha1,
		`sostenimientosuser` = :sostenimientosuser1
		WHERE `idSostenimiento` = :idSostenimiento1;');
		$actualizar->bindValue('idSostenimiento1', $sostenimiento->getIdSostenimiento());
		$actualizar->bindValue('sostenimientoscodigo1', $sostenimiento->getSostenimientoscodigo());
		$actualizar->bindValue('sostenimiento1', $sostenimiento->getSostenimiento());
		$actualizar->bindValue('sostenimientosOculto1', $sostenimiento->getSostenimientosOculto());
		$actualizar->bindValue('sostenimientosAccion1', $sostenimiento->getSostenimientosAccion());
		$actualizar->bindValue('sostenimientosfecha1', $sostenimiento->getSostenimientosfecha());
		$actualizar->bindValue('sostenimientosuser1', $sostenimiento->getSostenimientosuser());
		$actualizar->execute();
	}
	public function insertar($sostenimiento)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `sostenimientos`
		(`idSostenimiento`,
		`sostenimientoscodigo`,
		`sostenimiento`,
		`sostenimientosOculto`,
		`sostenimientosAccion`,
		`sostenimientosfecha`,
		`sostenimientosuser`)
		VALUES
		(:idSostenimiento1,
		:sostenimientoscodigo1,
		:sostenimiento1,
		:sostenimientosOculto1,
		:sostenimientosAccion1,
		:sostenimientosfecha1,
		:sostenimientosuser1);');
		$insert->bindValue('idSostenimiento1', $sostenimiento->getIdSostenimiento());
		$insert->bindValue('sostenimientoscodigo1', $sostenimiento->getSostenimientoscodigo());
		$insert->bindValue('sostenimiento1', $sostenimiento->getSostenimiento());
		$insert->bindValue('sostenimientosOculto1', $sostenimiento->getSostenimientosOculto());
		$insert->bindValue('sostenimientosAccion1', $sostenimiento->getSostenimientosAccion());
		$insert->bindValue('sostenimientosfecha1', $sostenimiento->getSostenimientosfecha());
		$insert->bindValue('sostenimientosuser1', $sostenimiento->getSostenimientosuser());
		$insert->execute();
	}
}
