<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/PueblosNacionalidad.php");

use Clasesphp\PueblosNacionalidad;

class CrudPuebloNacionalidad
{
	// constructor de la clase
	public function _construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listapueblonacionalidad = null;
		$select = $db->query("SELECT * FROM `pueblonacionalidades` ORDER BY pueblonacionalidadescodigo DESC");
		foreach ($select->fetchAll() as $pueblonacionalidad1) {
			$mypueblonacionalidad = new PueblosNacionalidad();
			$mypueblonacionalidad->setPueblonacionalidadId($pueblonacionalidad1['pueblonacionalidadId']);
			$mypueblonacionalidad->setPueblonacionalidadescodigo($pueblonacionalidad1['pueblonacionalidadescodigo']);
			$mypueblonacionalidad->setPueblonacionalidad($pueblonacionalidad1['pueblonacionalidad']);
			$mypueblonacionalidad->setPueblonacionalidadOculto($pueblonacionalidad1['pueblonacionalidadOculto']);
			$mypueblonacionalidad->setPueblonacionalidadAccion($pueblonacionalidad1['pueblonacionalidadAccion']);
			$mypueblonacionalidad->setPueblonacionalidadfecha($pueblonacionalidad1['pueblonacionalidadfecha']);
			$mypueblonacionalidad->setPueblonacionalidaduser($pueblonacionalidad1['pueblonacionalidaduser']);
			$mypueblonacionalidad->setPnetnia($pueblonacionalidad1['pnetnia']);
			$listapueblonacionalidad[] = $mypueblonacionalidad;
		}
		return $listapueblonacionalidad;
	}
	public function mostrarporEtnia($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM pueblonacionalidades WHERE pnetnia=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$listapueblonacionalidad = null;
		foreach ($select->fetchAll() as $pueblonacionalidad1) {
			$mypueblonacionalidad = new PueblosNacionalidad();
			$mypueblonacionalidad->setPueblonacionalidadId($pueblonacionalidad1['pueblonacionalidadId']);
			$mypueblonacionalidad->setPueblonacionalidadescodigo($pueblonacionalidad1['pueblonacionalidadescodigo']);
			$mypueblonacionalidad->setPueblonacionalidad($pueblonacionalidad1['pueblonacionalidad']);
			$mypueblonacionalidad->setPueblonacionalidadOculto($pueblonacionalidad1['pueblonacionalidadOculto']);
			$mypueblonacionalidad->setPueblonacionalidadAccion($pueblonacionalidad1['pueblonacionalidadAccion']);
			$mypueblonacionalidad->setPueblonacionalidadfecha($pueblonacionalidad1['pueblonacionalidadfecha']);
			$mypueblonacionalidad->setPueblonacionalidaduser($pueblonacionalidad1['pueblonacionalidaduser']);
			$mypueblonacionalidad->setPnetnia($pueblonacionalidad1['pnetnia']);
			$listapueblonacionalidad[] = $mypueblonacionalidad;
		}
		return $listapueblonacionalidad;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM pueblonacionalidades WHERE pueblonacionalidadId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerpuebloNacionalidad($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM pueblonacionalidades WHERE pueblonacionalidadId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$pueblonacionalidad1 = $select->fetch();
		$mypueblonacionalidad = new PueblosNacionalidad();
		$mypueblonacionalidad->setPueblonacionalidadId($pueblonacionalidad1['pueblonacionalidadId']);
		$mypueblonacionalidad->setPueblonacionalidadescodigo($pueblonacionalidad1['pueblonacionalidadescodigo']);
		$mypueblonacionalidad->setPueblonacionalidad($pueblonacionalidad1['pueblonacionalidad']);
		$mypueblonacionalidad->setPueblonacionalidadOculto($pueblonacionalidad1['pueblonacionalidadOculto']);
		$mypueblonacionalidad->setPueblonacionalidadAccion($pueblonacionalidad1['pueblonacionalidadAccion']);
		$mypueblonacionalidad->setPueblonacionalidadfecha($pueblonacionalidad1['pueblonacionalidadfecha']);
		$mypueblonacionalidad->setPueblonacionalidaduser($pueblonacionalidad1['pueblonacionalidaduser']);
		$mypueblonacionalidad->setPnetnia($pueblonacionalidad1['pnetnia']);

		return $mypueblonacionalidad;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT puebloNacionalidad FROM pueblonacionalidades WHERE puebloNacionalidadId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$pueblonacionalidad1 = $select->fetch();
		$mypueblonacionalidad = ($pueblonacionalidad1['puebloNacionalidad']);

		return $mypueblonacionalidad;
	}
	public function actualizar($pueblonacionalidad1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `pueblonacionalidades`
		SET
		`pueblonacionalidadId` = :pueblonacionalidadId1,
		`pueblonacionalidadescodigo` = :pueblonacionalidadescodigo1,
		`pueblonacionalidad` = :pueblonacionalidad1,
		`pnetnia` = :pnetnia1,
		`pueblonacionalidadOculto` = :pueblonacionalidadOculto1,
		`pueblonacionalidadAccion` = :pueblonacionalidadAccion1,
		`pueblonacionalidadfecha` = :pueblonacionalidadfecha1,
		`pueblonacionalidaduser` = :pueblonacionalidaduser1
		WHERE `pueblonacionalidadId` = :pueblonacionalidadId1;');
		$actualizar->bindValue('pueblonacionalidadId1', $pueblonacionalidad1->getPueblonacionalidadId());
		$actualizar->bindValue('pueblonacionalidadescodigo1', $pueblonacionalidad1->getPueblonacionalidadescodigo());
		$actualizar->bindValue('pueblonacionalidad1', $pueblonacionalidad1->getPueblonacionalidad());
		$actualizar->bindValue('pnetnia1', $pueblonacionalidad1->getPnetnia());
		$actualizar->bindValue('pueblonacionalidadOculto1', $pueblonacionalidad1->getPueblonacionalidadOculto());
		$actualizar->bindValue('pueblonacionalidadAccion1', $pueblonacionalidad1->getPueblonacionalidadAccion());
		$actualizar->bindValue('pueblonacionalidadfecha1', $pueblonacionalidad1->getPueblonacionalidadfecha());
		$actualizar->bindValue('pueblonacionalidaduser1', $pueblonacionalidad1->getPueblonacionalidaduser());
		$actualizar->execute();
	}
	public function insertar($pueblonacionalidad1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `pueblonacionalidades`
		(`pueblonacionalidadId`,
		`pueblonacionalidadescodigo`,
		`pueblonacionalidad`,
		`pnetnia`,
		`pueblonacionalidadOculto`,
		`pueblonacionalidadAccion`,
		`pueblonacionalidadfecha`,
		`pueblonacionalidaduser`)
		VALUES
		(:pueblonacionalidadId1,
		:pueblonacionalidadescodigo1,
		:pueblonacionalidad1,
		:pnetnia1,
		:pueblonacionalidadOculto1,
		:pueblonacionalidadAccion1,
		:pueblonacionalidadfecha1,
		:pueblonacionalidaduser1);');
		$insert->bindValue('pueblonacionalidadId1', $pueblonacionalidad1->getPueblonacionalidadId());
		$insert->bindValue('pueblonacionalidadescodigo1', $pueblonacionalidad1->getPueblonacionalidadescodigo());
		$insert->bindValue('pueblonacionalidad1', $pueblonacionalidad1->getPueblonacionalidad());
		$insert->bindValue('pnetnia1', $pueblonacionalidad1->getPnetnia());
		$insert->bindValue('pueblonacionalidadOculto1', $pueblonacionalidad1->getPueblonacionalidadOculto());
		$insert->bindValue('pueblonacionalidadAccion1', $pueblonacionalidad1->getPueblonacionalidadAccion());
		$insert->bindValue('pueblonacionalidadfecha1', $pueblonacionalidad1->getPueblonacionalidadfecha());
		$insert->bindValue('pueblonacionalidaduser1', $pueblonacionalidad1->getPueblonacionalidaduser());
		$insert->execute();
	}
}
