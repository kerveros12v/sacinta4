<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Tipoenfermedadcatastrofica.php");

use Clasesphp\Tipoenfermedadcatastrofica;

class CrudTipoenfermedadcatastrofica
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$listatec = null;
		$select = $db->query("SELECT * FROM `tipoenfermedadcatastrofica` ");
		foreach ($select->fetchAll() as $tec) {
			$mytec = new Tipoenfermedadcatastrofica();
			$mytec->setTipoEnfermedadCatastroficaId($tec['tipoEnfermedadCatastroficaId']);
			$mytec->setTipoEnfermedadCatastrofica($tec['tipoEnfermedadCatastrofica']);
			$mytec->setTeccodigo($tec['teccodigo']);
			$mytec->setTecOculto($tec['tecOculto']);
			$mytec->setTecAccion($tec['tecAccion']);
			$mytec->setTecfecha($tec['tecfecha']);
			$mytec->setTecuser($tec['tecuser']);
			$listatec[] = $mytec;
		}
		return $listatec;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tipoenfermedadcatastrofica WHERE tipoEnfermedadCatastroficaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerPaises($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tipoenfermedadcatastrofica WHERE tipoEnfermedadCatastroficaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tec = $select->fetch();
		$mytec = new Tipoenfermedadcatastrofica();
		$mytec->setTipoEnfermedadCatastroficaId($tec['tipoEnfermedadCatastroficaId']);
		$mytec->setTipoEnfermedadCatastrofica($tec['tipoEnfermedadCatastrofica']);
		$mytec->setTeccodigo($tec['teccodigo']);
		$mytec->setTecOculto($tec['tecOculto']);
		$mytec->setTecAccion($tec['tecAccion']);
		$mytec->setTecfecha($tec['tecfecha']);
		$mytec->setTecuser($tec['tecuser']);

		return $mytec;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoEnfermedadCatastrofica FROM tipoenfermedadcatastrofica WHERE tipoEnfermedadCatastroficaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tec = $select->fetch();
		$mytec = ($tec['tipoEnfermedadCatastrofica']);

		return $mytec;
	}
	public function actualizar($tec)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tipoenfermedadcatastrofica`
		SET
		`tipoEnfermedadCatastroficaId` = :tipoEnfermedadCatastroficaId1,
		`teccodigo` = :teccodigo1,
		`tipoEnfermedadCatastrofica` = :tipoEnfermedadCatastrofica1,
		`tecOculto` = :tecOculto1,
		`tecAccion` = :tecAccion1,
		`tecfecha` = :tecfecha1,
		`tecuser` = :tecuser1
		WHERE `tipoEnfermedadCatastroficaId` = :tipoEnfermedadCatastroficaId1;');
		$actualizar->bindValue('tipoEnfermedadCatastroficaId1', $tec->getTipoEnfermedadCatastroficaId());
		$actualizar->bindValue('teccodigo1', $tec->getTeccodigo());
		$actualizar->bindValue('tipoEnfermedadCatastrofica1', $tec->getTipoEnfermedadCatastrofica());
		$actualizar->bindValue('tecOculto1', $tec->getTecOculto());
		$actualizar->bindValue('tecAccion1', $tec->getTecAccion());
		$actualizar->bindValue('tecfecha1', $tec->getTecfecha());
		$actualizar->bindValue('tecuser1', $tec->getTecuser());
		$actualizar->execute();
	}
	public function insertar($tec)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipoenfermedadcatastrofica`
		(`tipoEnfermedadCatastroficaId`,
		`teccodigo`,
		`tipoEnfermedadCatastrofica`,
		`tecOculto`,
		`tecAccion`,
		`tecfecha`,
		`tecuser`)
		VALUES
		(:tipoEnfermedadCatastroficaId1,
		:teccodigo1,
		:tipoEnfermedadCatastrofica1,
		:tecOculto1,
		:tecAccion1,
		:tecfecha1,
		:tecuser1);');
		$insert->bindValue('tipoEnfermedadCatastroficaId1', $tec->getTipoEnfermedadCatastroficaId());
		$insert->bindValue('teccodigo1', $tec->getTeccodigo());
		$insert->bindValue('tipoEnfermedadCatastrofica1', $tec->getTipoEnfermedadCatastrofica());
		$insert->bindValue('tecOculto1', $tec->getTecOculto());
		$insert->bindValue('tecAccion1', $tec->getTecAccion());
		$insert->bindValue('tecfecha1', $tec->getTecfecha());
		$insert->bindValue('tecuser1', $tec->getTecuser());
		$insert->execute();
	}
}
