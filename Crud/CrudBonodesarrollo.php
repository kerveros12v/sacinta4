<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Bonodesarrollo.php");

use Clasesphp\Bonodesarrollo;

class CrudBonodesarrollo
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listabonoDesarrollo = null;
		$select = $db->query("SELECT * FROM bonodesarrollo;");
		foreach ($select->fetchAll() as $bonoDesarrollo) {
			$mybonoDesarrollo = new Bonodesarrollo();
			$mybonoDesarrollo->setBonoDesarrolloId($bonoDesarrollo['bonoDesarrolloId']);
			$mybonoDesarrollo->setBonoDesarrollo($bonoDesarrollo['bonoDesarrollo']);
			$mybonoDesarrollo->setBonodesarrollocodigo($bonoDesarrollo['bonodesarrollocodigo']);
			$mybonoDesarrollo->setBonodesarrolloOculto($bonoDesarrollo['bonodesarrolloOculto']);
			$mybonoDesarrollo->setBonodesarrolloAccion($bonoDesarrollo['bonodesarrolloAccion']);
			$mybonoDesarrollo->setBonodesarrollofecha($bonoDesarrollo['bonodesarrollofecha']);
			$mybonoDesarrollo->setBonodesarrollouser($bonoDesarrollo['bonodesarrollouser']);
			$listabonoDesarrollo[] = $mybonoDesarrollo;
		}
		return $listabonoDesarrollo;
	}
	public function obtenerbonoDesarrollo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM bonodesarrollo WHERE bonoDesarrolloId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$bonoDesarrollo = $select->fetch();
		$mybonoDesarrollo = new Bonodesarrollo();
		$mybonoDesarrollo->setBonoDesarrolloId($bonoDesarrollo['bonoDesarrolloId']);
		$mybonoDesarrollo->setBonoDesarrollo($bonoDesarrollo['bonoDesarrollo']);
		$mybonoDesarrollo->setBonodesarrollocodigo($bonoDesarrollo['bonodesarrollocodigo']);
		$mybonoDesarrollo->setBonodesarrolloOculto($bonoDesarrollo['bonodesarrolloOculto']);
		$mybonoDesarrollo->setBonodesarrolloAccion($bonoDesarrollo['bonodesarrolloAccion']);
		$mybonoDesarrollo->setBonodesarrollofecha($bonoDesarrollo['bonodesarrollofecha']);
		$mybonoDesarrollo->setBonodesarrollouser($bonoDesarrollo['bonodesarrollouser']);
		return $mybonoDesarrollo;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT bonoDesarrollo FROM bonodesarrollo WHERE bonoDesarrolloId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$bonoDesarrollo = $select->fetch();
		$mybonoDesarrollo = ($bonoDesarrollo['bonoDesarrollo']);
		return $mybonoDesarrollo;
	}




	public function actualizar($bonodesarrollo)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `bonodesarrollo`
		SET
		`bonoDesarrolloId` = :bonoDesarrolloId1,
		`bonodesarrollocodigo` = :bonodesarrollocodigo1,
		`bonoDesarrollo` = :bonoDesarrollo1,
		`bonodesarrolloOculto` = :bonodesarrolloOculto1,
		`bonodesarrolloAccion` = :bonodesarrolloAccion1,
		`bonodesarrollofecha` = :bonodesarrollofecha1,
		`bonodesarrollouser` = :bonodesarrollouser1
		WHERE `bonoDesarrolloId` = :bonoDesarrolloId1;');
		$actualizar->bindValue('bonoDesarrolloId1', $bonodesarrollo->getBonoDesarrolloId());
		$actualizar->bindValue('bonodesarrollocodigo1', $bonodesarrollo->getBonodesarrollocodigo());
		$actualizar->bindValue('bonoDesarrollo1', $bonodesarrollo->getBonoDesarrollo());
		$actualizar->bindValue('bonodesarrolloOculto1', $bonodesarrollo->getBonodesarrolloOculto());
		$actualizar->bindValue('bonodesarrolloAccion1', $bonodesarrollo->getBonodesarrolloAccion());
		$actualizar->bindValue('bonodesarrollofecha1', $bonodesarrollo->getBonodesarrollofecha());
		$actualizar->bindValue('bonodesarrollouser1', $bonodesarrollo->getBonodesarrollouser());
		$actualizar->execute();
	}
	public function insertar($bonodesarrollo)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `bonodesarrollo`
		(`bonoDesarrolloId`,
		`bonodesarrollocodigo`,
		`bonoDesarrollo`,
		`bonodesarrolloOculto`,
		`bonodesarrolloAccion`,
		`bonodesarrollofecha`,
		`bonodesarrollouser`)
		VALUES
		(:bonoDesarrolloId1,
		:bonodesarrollocodigo1,
		:bonoDesarrollo1,
		:bonodesarrolloOculto1,
		:bonodesarrolloAccion1,
		:bonodesarrollofecha1,
		:bonodesarrollouser1);
		');
		$insert->bindValue('bonoDesarrolloId1', $bonodesarrollo->getBonoDesarrolloId());
		$insert->bindValue('bonodesarrollocodigo1', $bonodesarrollo->getBonodesarrollocodigo());
		$insert->bindValue('bonoDesarrollo1', $bonodesarrollo->getBonoDesarrollo());
		$insert->bindValue('bonodesarrolloOculto1', $bonodesarrollo->getBonodesarrolloOculto());
		$insert->bindValue('bonodesarrolloAccion1', $bonodesarrollo->getBonodesarrolloAccion());
		$insert->bindValue('bonodesarrollofecha1', $bonodesarrollo->getBonodesarrollofecha());
		$insert->bindValue('bonodesarrollouser1', $bonodesarrollo->getBonodesarrollouser());
		$insert->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM bonodesarrollo WHERE bonoDesarrolloId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
