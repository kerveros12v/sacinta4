<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Tipocarreras.php");

use Clasesphp\Tipocarreras;

class CrudTipoCarreras
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipocarrera = null;
		$select = $db->query("SELECT * FROM `tipocarreras`;");
		foreach ($select->fetchAll() as $carrera1) {
			$mytipocarrera = new Tipocarreras();
			$mytipocarrera->setTipoCarrerasId($carrera1['tipoCarrerasId']);
			$mytipocarrera->setTipoCarreras($carrera1['tipoCarreras']);
			$mytipocarrera->setTipocarrerascodigo($carrera1['tipocarrerascodigo']);
			$mytipocarrera->setTipocarrerasOculto($carrera1['tipocarrerasOculto']);
			$mytipocarrera->setTipocarrerasAccion($carrera1['tipocarrerasAccion']);
			$mytipocarrera->setTipocarrerasfecha($carrera1['tipocarrerasfecha']);
			$mytipocarrera->setTipocarrerasuser($carrera1['tipocarrerasuser']);
			$listatipocarrera[] = $mytipocarrera;
		}
		return $listatipocarrera;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tipocarreras WHERE tipoCarrerasId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerTipoCarreras($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tipocarreras WHERE tipoCarrerasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$carrera1 = $select->fetch();
		$mytipocarrera = new Tipocarreras();
		$mytipocarrera->setTipoCarrerasId($carrera1['tipoCarrerasId']);
		$mytipocarrera->setTipoCarreras($carrera1['tipoCarreras']);
		$mytipocarrera->setTipocarrerascodigo($carrera1['tipocarrerascodigo']);
		$mytipocarrera->setTipocarrerasOculto($carrera1['tipocarrerasOculto']);
		$mytipocarrera->setTipocarrerasAccion($carrera1['tipocarrerasAccion']);
		$mytipocarrera->setTipocarrerasfecha($carrera1['tipocarrerasfecha']);
		$mytipocarrera->setTipocarrerasuser($carrera1['tipocarrerasuser']);


		return $mytipocarrera;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoCarreras FROM tipocarreras WHERE tipoCarrerasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$carrera1 = $select->fetch();
		$mytipocarrera = ($carrera1['tipoCarreras']);

		return $mytipocarrera;
	}
	public function actualizar($carrera1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tipocarreras`
		SET
		`tipoCarrerasId` = :tipoCarrerasId1,
		`tipocarrerascodigo` = :tipocarrerascodigo1,
		`tipoCarreras` = :tipoCarreras1,
		`tipocarrerasOculto` = :tipocarrerasOculto1,
		`tipocarrerasAccion` = :tipocarrerasAccion1,
		`tipocarrerasfecha` = :tipocarrerasfecha1,
		`tipocarrerasuser` = :tipocarrerasuser1
		WHERE `tipoCarrerasId` = :tipoCarrerasId1;');
		$actualizar->bindValue('tipoCarrerasId1', $carrera1->getTipoCarrerasId());
		$actualizar->bindValue('tipocarrerascodigo1', $carrera1->getTipocarrerascodigo());
		$actualizar->bindValue('tipoCarreras1', $carrera1->getTipoCarreras());
		$actualizar->bindValue('tipocarrerasOculto1', $carrera1->getTipocarrerasOculto());
		$actualizar->bindValue('tipocarrerasAccion1', $carrera1->getTipocarrerasAccion());
		$actualizar->bindValue('tipocarrerasfecha1', $carrera1->getTipocarrerasfecha());
		$actualizar->bindValue('tipocarrerasuser1', $carrera1->getTipocarrerasuser());
		$actualizar->execute();
	}
	public function insertar($carrera1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipocarreras`
		(`tipoCarrerasId`,
		`tipocarrerascodigo`,
		`tipoCarreras`,
		`tipocarrerasOculto`,
		`tipocarrerasAccion`,
		`tipocarrerasfecha`,
		`tipocarrerasuser`)
		VALUES
		(:tipoCarrerasId1,
		:tipocarrerascodigo1,
		:tipoCarreras1,
		:tipocarrerasOculto1,
		:tipocarrerasAccion1,
		:tipocarrerasfecha1,
		:tipocarrerasuser1);
		');
		$insert->bindValue('tipoCarrerasId1', $carrera1->getTipoCarrerasId());
		$insert->bindValue('tipocarrerascodigo1', $carrera1->getTipocarrerascodigo());
		$insert->bindValue('tipoCarreras1', $carrera1->getTipoCarreras());
		$insert->bindValue('tipocarrerasOculto1', $carrera1->getTipocarrerasOculto());
		$insert->bindValue('tipocarrerasAccion1', $carrera1->getTipocarrerasAccion());
		$insert->bindValue('tipocarrerasfecha1', $carrera1->getTipocarrerasfecha());
		$insert->bindValue('tipocarrerasuser1', $carrera1->getTipocarrerasuser());
		$insert->execute();
	}
}
