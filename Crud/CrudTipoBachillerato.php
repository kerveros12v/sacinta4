<?php

namespace Crud;

require_once('conexion.php');
require_once('../clasesphp/Tiposbacillerato.php');

use Clasesphp\Tiposbacillerato;

class CrudTipoBachillerato
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatiposbacillerato = null;
		$select = $db->query('SELECT * FROM tiposbacillerato');
		foreach ($select->fetchAll() as $tiposbacillerato) {
			$mytiposbacillerato = new Tiposbacillerato();
			$mytiposbacillerato->setTiposBacilleratoId($tiposbacillerato['tiposBacilleratoId']);
			$mytiposbacillerato->setTiposbacilleratocodigo($tiposbacillerato['tiposbacilleratocodigo']);
			$mytiposbacillerato->setTipoBacillerato($tiposbacillerato['tipoBacillerato']);
			$mytiposbacillerato->setTiposbacilleratoOculto($tiposbacillerato['tiposbacilleratoOculto']);
			$mytiposbacillerato->setTiposbacilleratoAccion($tiposbacillerato['tiposbacilleratoAccion']);
			$mytiposbacillerato->setTiposbacilleratofecha($tiposbacillerato['tiposbacilleratofecha']);
			$mytiposbacillerato->setTiposbacilleratouser($tiposbacillerato['tiposbacilleratouser']);


			$listatiposbacillerato[] = $mytiposbacillerato;
		}
		return $listatiposbacillerato;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tiposbacillerato WHERE tiposBacilleratoId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerTiposbacillerato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tiposbacillerato WHERE tiposBacilleratoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tiposbacillerato = $select->fetch();
		$mytiposbacillerato = new Tiposbacillerato();
		$mytiposbacillerato->setTiposBacilleratoId($tiposbacillerato['tiposBacilleratoId']);
		$mytiposbacillerato->setTiposbacilleratocodigo($tiposbacillerato['tiposbacilleratocodigo']);
		$mytiposbacillerato->setTipoBacillerato($tiposbacillerato['tipoBacillerato']);
		$mytiposbacillerato->setTiposbacilleratoOculto($tiposbacillerato['tiposbacilleratoOculto']);
		$mytiposbacillerato->setTiposbacilleratoAccion($tiposbacillerato['tiposbacilleratoAccion']);
		$mytiposbacillerato->setTiposbacilleratofecha($tiposbacillerato['tiposbacilleratofecha']);
		$mytiposbacillerato->setTiposbacilleratouser($tiposbacillerato['tiposbacilleratouser']);

		return $mytiposbacillerato;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoBacillerato FROM tiposbacillerato WHERE tiposBacilleratoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tiposbacillerato = $select->fetch();
		$mytiposbacillerato = ($tiposbacillerato['tipoBacillerato']);

		return $mytiposbacillerato;
	}
	public function actualizar($tiposbacillerato)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tiposbacillerato`
			SET
			`tiposBacilleratoId` = :tiposBacilleratoId1,
			`tiposbacilleratocodigo` = :tiposbacilleratocodigo1,
			`tipoBacillerato` = :tipoBacillerato1,
			`tiposbacilleratoOculto` = :tiposbacilleratoOculto1,
			`tiposbacilleratoAccion` = :tiposbacilleratoAccion1,
			`tiposbacilleratofecha` = :tiposbacilleratofecha1,
			`tiposbacilleratouser` = :tiposbacilleratouser1
			WHERE `tiposBacilleratoId` = :tiposBacilleratoId1;');
		$actualizar->bindValue('tiposBacilleratoId1', $tiposbacillerato->getTiposBacilleratoId());
		$actualizar->bindValue('tiposbacilleratocodigo1', $tiposbacillerato->getTiposbacilleratocodigo());
		$actualizar->bindValue('tipoBacillerato1', $tiposbacillerato->getTipoBacillerato());
		$actualizar->bindValue('tiposbacilleratoOculto1', $tiposbacillerato->getTiposbacilleratoOculto());
		$actualizar->bindValue('tiposbacilleratoAccion1', $tiposbacillerato->getTiposbacilleratoAccion());
		$actualizar->bindValue('tiposbacilleratofecha1', $tiposbacillerato->getTiposbacilleratofecha());
		$actualizar->bindValue('tiposbacilleratouser1', $tiposbacillerato->getTiposbacilleratouser());
		$actualizar->execute();
	}
	public function insertar($tiposbacillerato)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tiposbacillerato`
			(`tiposBacilleratoId`,
			`tiposbacilleratocodigo`,
			`tipoBacillerato`,
			`tiposbacilleratoOculto`,
			`tiposbacilleratoAccion`,
			`tiposbacilleratofecha`,
			`tiposbacilleratouser`)
			VALUES
			(:tiposBacilleratoId1,
			:tiposbacilleratocodigo1,
			:tipoBacillerato1,
			:tiposbacilleratoOculto1,
			:tiposbacilleratoAccion1,
			:tiposbacilleratofecha1,
			:tiposbacilleratouser1);');
		$insert->bindValue('tiposBacilleratoId1', $tiposbacillerato->getTiposBacilleratoId());
		$insert->bindValue('tiposbacilleratocodigo1', $tiposbacillerato->getTiposbacilleratocodigo());
		$insert->bindValue('tipoBacillerato1', $tiposbacillerato->getTipoBacillerato());
		$insert->bindValue('tiposbacilleratoOculto1', $tiposbacillerato->getTiposbacilleratoOculto());
		$insert->bindValue('tiposbacilleratoAccion1', $tiposbacillerato->getTiposbacilleratoAccion());
		$insert->bindValue('tiposbacilleratofecha1', $tiposbacillerato->getTiposbacilleratofecha());
		$insert->bindValue('tiposbacilleratouser1', $tiposbacillerato->getTiposbacilleratouser());

		$insert->execute();
	}
}
