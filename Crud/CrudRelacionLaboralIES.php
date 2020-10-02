<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/RelacionLaboralIES.php");

use Clasesphp\RelacionLaboralIES;

class CrudRelacionLaboralIES
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$listarlies = null;
		$select = $db->query("SELECT * FROM `relacionlaboralies` ");
		foreach ($select->fetchAll() as $rlies) {
			$myrlies = new RelacionLaboralIES();
			$myrlies->setRelacionLaboralIESId($rlies['relacionLaboralIESId']);
			$myrlies->setRelacionLaboralIES($rlies['relacionLaboralIES']);
			$myrlies->setRelacionlaboraliescodigo($rlies['relacionlaboraliescodigo']);
			$myrlies->setRelacionlaboraliesOculto($rlies['relacionlaboraliesOculto']);
			$myrlies->setRelacionlaboraliesAccion($rlies['relacionlaboraliesAccion']);
			$myrlies->setRelacionlaboraliesfecha($rlies['relacionlaboraliesfecha']);
			$myrlies->setRelacionlaboraliesuser($rlies['relacionlaboraliesuser']);
			$listarlies[] = $myrlies;
		}
		return $listarlies;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM relacionlaboralies WHERE relacionLaboralIESId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerPaises($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM relacionlaboralies WHERE relacionLaboralIESId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$rlies = $select->fetch();
		$myrlies = new RelacionLaboralIES();
		$myrlies->setRelacionLaboralIESId($rlies['relacionLaboralIESId']);
		$myrlies->setRelacionLaboralIES($rlies['relacionLaboralIES']);
		$myrlies->setRelacionlaboraliescodigo($rlies['relacionlaboraliescodigo']);
		$myrlies->setRelacionlaboraliesOculto($rlies['relacionlaboraliesOculto']);
		$myrlies->setRelacionlaboraliesAccion($rlies['relacionlaboraliesAccion']);
		$myrlies->setRelacionlaboraliesfecha($rlies['relacionlaboraliesfecha']);
		$myrlies->setRelacionlaboraliesuser($rlies['relacionlaboraliesuser']);
		return $myrlies;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT relacionLaboralIES FROM relacionlaboralies WHERE relacionLaboralIESId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$rlies = $select->fetch();
		$myrlies = ($rlies['relacionLaboralIES']);

		return $myrlies;
	}
	public function actualizar($rlies)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `relacionlaboralies`
		SET
		`relacionLaboralIESId` = :relacionLaboralIESId1,
		`relacionlaboraliescodigo` = :relacionlaboraliescodigo1,
		`relacionLaboralIES` = :relacionLaboralIES1,
		`relacionlaboraliesOculto` = :relacionlaboraliesOculto1,
		`relacionlaboraliesAccion` = :relacionlaboraliesAccion1,
		`relacionlaboraliesfecha` = :relacionlaboraliesfecha1,
		`relacionlaboraliesuser` = :relacionlaboraliesuser1
		WHERE `relacionLaboralIESId` = :relacionLaboralIESId1;');
		$actualizar->bindValue('relacionLaboralIESId1', $rlies->getRelacionLaboralIESId());
		$actualizar->bindValue('relacionlaboraliescodigo1', $rlies->getRelacionlaboraliescodigo());
		$actualizar->bindValue('relacionLaboralIES1', $rlies->getRelacionLaboralIES());
		$actualizar->bindValue('relacionlaboraliesOculto1', $rlies->getRelacionlaboraliesOculto());
		$actualizar->bindValue('relacionlaboraliesAccion1', $rlies->getRelacionlaboraliesAccion());
		$actualizar->bindValue('relacionlaboraliesfecha1', $rlies->getRelacionlaboraliesfecha());
		$actualizar->bindValue('relacionlaboraliesuser1', $rlies->getRelacionlaboraliesuser());
		$actualizar->execute();
	}
	public function insertar($rlies)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `relacionlaboralies`
		(`relacionLaboralIESId`,
		`relacionlaboraliescodigo`,
		`relacionLaboralIES`,
		`relacionlaboraliesOculto`,
		`relacionlaboraliesAccion`,
		`relacionlaboraliesfecha`,
		`relacionlaboraliesuser`)
		VALUES
		(:relacionLaboralIESId1,
		:relacionlaboraliescodigo1,
		:relacionLaboralIES1,
		:relacionlaboraliesOculto1,
		:relacionlaboraliesAccion1,
		:relacionlaboraliesfecha1,
		:relacionlaboraliesuser1);');
		$insert->bindValue('relacionLaboralIESId1', $rlies->getRelacionLaboralIESId());
		$insert->bindValue('relacionlaboraliescodigo1', $rlies->getRelacionlaboraliescodigo());
		$insert->bindValue('relacionLaboralIES1', $rlies->getRelacionLaboralIES());
		$insert->bindValue('relacionlaboraliesOculto1', $rlies->getRelacionlaboraliesOculto());
		$insert->bindValue('relacionlaboraliesAccion1', $rlies->getRelacionlaboraliesAccion());
		$insert->bindValue('relacionlaboraliesfecha1', $rlies->getRelacionlaboraliesfecha());
		$insert->bindValue('relacionlaboraliesuser1', $rlies->getRelacionlaboraliesuser());
		$insert->execute();
	}
}
