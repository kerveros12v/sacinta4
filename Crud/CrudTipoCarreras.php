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
		foreach ($select->fetchAll() as $carrera_) {
			$mytipocarrera = new Tipocarreras();
			$mytipocarrera->set_tipoCarrerasId($carrera_['tipoCarrerasId']);
			$mytipocarrera->set_tipoCarreras($carrera_['tipoCarreras']);
			$mytipocarrera->set_tipocarrerascodigo($carrera_['tipocarrerascodigo']);
			$mytipocarrera->set_tipocarrerasOculto($carrera_['tipocarrerasOculto']);
			$mytipocarrera->set_tipocarrerasAccion($carrera_['tipocarrerasAccion']);
			$mytipocarrera->set_tipocarrerasfecha($carrera_['tipocarrerasfecha']);
			$mytipocarrera->set_tipocarrerasuser($carrera_['tipocarrerasuser']);
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
		$carrera_ = $select->fetch();
		$mytipocarrera = new Tipocarreras();
		$mytipocarrera->set_tipoCarrerasId($carrera_['tipoCarrerasId']);
		$mytipocarrera->set_tipoCarreras($carrera_['tipoCarreras']);
		$mytipocarrera->set_tipocarrerascodigo($carrera_['tipocarrerascodigo']);
		$mytipocarrera->set_tipocarrerasOculto($carrera_['tipocarrerasOculto']);
		$mytipocarrera->set_tipocarrerasAccion($carrera_['tipocarrerasAccion']);
		$mytipocarrera->set_tipocarrerasfecha($carrera_['tipocarrerasfecha']);
		$mytipocarrera->set_tipocarrerasuser($carrera_['tipocarrerasuser']);


		return $mytipocarrera;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoCarreras FROM tipocarreras WHERE tipoCarrerasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$carrera_ = $select->fetch();
		$mytipocarrera = ($carrera_['tipoCarreras']);

		return $mytipocarrera;
	}
	public function actualizar($carrera_)
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
		$actualizar->bindValue('tipoCarrerasId1', $carrera_->get_tipoCarrerasId());
		$actualizar->bindValue('tipocarrerascodigo1', $carrera_->get_tipocarrerascodigo());
		$actualizar->bindValue('tipoCarreras1', $carrera_->get_tipoCarreras());
		$actualizar->bindValue('tipocarrerasOculto1', $carrera_->get_tipocarrerasOculto());
		$actualizar->bindValue('tipocarrerasAccion1', $carrera_->get_tipocarrerasAccion());
		$actualizar->bindValue('tipocarrerasfecha1', $carrera_->get_tipocarrerasfecha());
		$actualizar->bindValue('tipocarrerasuser1', $carrera_->get_tipocarrerasuser());
		$actualizar->execute();
	}
	public function insertar($carrera_)
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
		$insert->bindValue('tipoCarrerasId1', $carrera_->get_tipoCarrerasId());
		$insert->bindValue('tipocarrerascodigo1', $carrera_->get_tipocarrerascodigo());
		$insert->bindValue('tipoCarreras1', $carrera_->get_tipoCarreras());
		$insert->bindValue('tipocarrerasOculto1', $carrera_->get_tipocarrerasOculto());
		$insert->bindValue('tipocarrerasAccion1', $carrera_->get_tipocarrerasAccion());
		$insert->bindValue('tipocarrerasfecha1', $carrera_->get_tipocarrerasfecha());
		$insert->bindValue('tipocarrerasuser1', $carrera_->get_tipocarrerasuser());
		$insert->execute();
	}
}
