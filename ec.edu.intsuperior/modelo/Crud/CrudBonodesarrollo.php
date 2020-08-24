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
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listabonoDesarrollo = null;
		$select = $db->query("SELECT * FROM bonodesarrollo;");
		foreach ($select->fetchAll() as $bonoDesarrollo) {
			$mybonoDesarrollo = new Bonodesarrollo();
			$mybonoDesarrollo->set_bonoDesarrolloId($bonoDesarrollo['bonoDesarrolloId']);
			$mybonoDesarrollo->set_bonoDesarrollo($bonoDesarrollo['bonoDesarrollo']);
			$mybonoDesarrollo->set_bonodesarrollocodigo($bonoDesarrollo['bonodesarrollocodigo']);
			$mybonoDesarrollo->set_bonodesarrolloOculto($bonoDesarrollo['bonodesarrolloOculto']);
			$mybonoDesarrollo->set_bonodesarrolloAccion($bonoDesarrollo['bonodesarrolloAccion']);
			$mybonoDesarrollo->set_bonodesarrollofecha($bonoDesarrollo['bonodesarrollofecha']);
			$mybonoDesarrollo->set_bonodesarrollouser($bonoDesarrollo['bonodesarrollouser']);
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
		$mybonoDesarrollo->set_bonoDesarrolloId($bonoDesarrollo['bonoDesarrolloId']);
		$mybonoDesarrollo->set_bonoDesarrollo($bonoDesarrollo['bonoDesarrollo']);
		$mybonoDesarrollo->set_bonodesarrollocodigo($bonoDesarrollo['bonodesarrollocodigo']);
		$mybonoDesarrollo->set_bonodesarrolloOculto($bonoDesarrollo['bonodesarrolloOculto']);
		$mybonoDesarrollo->set_bonodesarrolloAccion($bonoDesarrollo['bonodesarrolloAccion']);
		$mybonoDesarrollo->set_bonodesarrollofecha($bonoDesarrollo['bonodesarrollofecha']);
		$mybonoDesarrollo->set_bonodesarrollouser($bonoDesarrollo['bonodesarrollouser']);
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




	public function actualizar($bonodesarrollo){
		$db=Db::conectar();
		$actualizar=$db->prepare('UPDATE `bonodesarrollo`
		SET
		`bonoDesarrolloId` = :bonoDesarrolloId1,
		`bonodesarrollocodigo` = :bonodesarrollocodigo1,
		`bonoDesarrollo` = :bonoDesarrollo1,
		`bonodesarrolloOculto` = :bonodesarrolloOculto1,
		`bonodesarrolloAccion` = :bonodesarrolloAccion1,
		`bonodesarrollofecha` = :bonodesarrollofecha1,
		`bonodesarrollouser` = :bonodesarrollouser1
		WHERE `bonoDesarrolloId` = :bonoDesarrolloId1;');
		$actualizar->bindValue('bonoDesarrolloId1',$bonodesarrollo->get_bonoDesarrolloId());
		$actualizar->bindValue('bonodesarrollocodigo1',$bonodesarrollo->get_bonodesarrollocodigo());
		$actualizar->bindValue('bonoDesarrollo1',$bonodesarrollo->get_bonoDesarrollo());
		$actualizar->bindValue('bonodesarrolloOculto1',$bonodesarrollo->get_bonodesarrolloOculto());
		$actualizar->bindValue('bonodesarrolloAccion1',$bonodesarrollo->get_bonodesarrolloAccion());
		$actualizar->bindValue('bonodesarrollofecha1',$bonodesarrollo->get_bonodesarrollofecha());
		$actualizar->bindValue('bonodesarrollouser1',$bonodesarrollo->get_bonodesarrollouser());
		$actualizar->execute();
	}
	public function insertar($bonodesarrollo){
		$db=Db::conectar();
		$insert=$db->prepare('INSERT INTO `bonodesarrollo`
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
		$insert->bindValue('bonoDesarrolloId1',$bonodesarrollo->get_bonoDesarrolloId());
		$insert->bindValue('bonodesarrollocodigo1',$bonodesarrollo->get_bonodesarrollocodigo());
		$insert->bindValue('bonoDesarrollo1',$bonodesarrollo->get_bonoDesarrollo());
		$insert->bindValue('bonodesarrolloOculto1',$bonodesarrollo->get_bonodesarrolloOculto());
		$insert->bindValue('bonodesarrolloAccion1',$bonodesarrollo->get_bonodesarrolloAccion());
		$insert->bindValue('bonodesarrollofecha1',$bonodesarrollo->get_bonodesarrollofecha());
		$insert->bindValue('bonodesarrollouser1',$bonodesarrollo->get_bonodesarrollouser());
		$insert->execute();

	}
	public function eliminar($id){
		$db=Db::conectar();
		$eliminar=$db->prepare('DELETE FROM bonodesarrollo WHERE bonoDesarrolloId=:id');
		$eliminar->bindValue('id',$id);
		$eliminar->execute();
	}
}
