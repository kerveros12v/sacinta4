<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Socioempleo.php");

use Clasesphp\SocioEmpleo;

class CrudSocioEmpleo
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listadato = null;
		$select = $db->query("SELECT * FROM socioempleo");

		foreach ($select->fetchAll() as $d) {
			$mydato = new SocioEmpleo();
			$mydato->setIdsocioempleo($d['idsocioempleo']);
			$mydato->setSocioEmpleoregistro($d['socioEmpleoregistro']);
			$mydato->setSocioempleoOculto($d['socioempleoOculto']);
			$mydato->setSocioempleoAccion($d['socioempleoAccion']);
			$mydato->setSocioempleofecha($d['socioempleofecha']);
			$mydato->setSocioempleouser($d['socioempleouser']);

			$listadato[] = $mydato;
		}
		return $listadato;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM socioempleo WHERE idsocioempleo=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerSocioEmpleo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM socioempleo WHERE idsocioempleo=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$d = $select->fetch();
		$mydato = new SocioEmpleo();
		$mydato->setIdsocioempleo($d['idsocioempleo']);
		$mydato->setSocioEmpleoregistro($d['socioEmpleoregistro']);
		$mydato->setSocioempleoOculto($d['socioempleoOculto']);
		$mydato->setSocioempleoAccion($d['socioempleoAccion']);
		$mydato->setSocioempleofecha($d['socioempleofecha']);
		$mydato->setSocioempleouser($d['socioempleouser']);
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT socioEmpleoregistro FROM socioempleo WHERE idsocioempleo=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$d = $select->fetch();
		$mydato = ($d['socioEmpleoregistro']);

		return $mydato;
	}
	public function actualizar($d)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare('UPDATE `socioempleo`
            SET
            `idsocioempleo` = :idsocioempleo1,
            `socioEmpleoregistro` = :socioEmpleoregistro1,
            `socioempleoOculto` = :socioempleoOculto1,
            `socioempleoAccion` = :socioempleoAccion1,
            `socioempleofecha` = :socioempleofecha1,
            `socioempleouser` = :socioempleouser1
            WHERE `idsocioempleo` = :idsocioempleo1;');
		$actualizar->bindValue('idsocioempleo1', $d->getIdsocioempleo());
		$actualizar->bindValue('socioEmpleoregistro1', $d->getSocioEmpleoregistro());
		$actualizar->bindValue('socioempleoOculto1', $d->getSocioempleoOculto());
		$actualizar->bindValue('socioempleoAccion1', $d->getSocioempleoAccion());
		$actualizar->bindValue('socioempleofecha1', $d->getSocioempleofecha());
		$actualizar->bindValue('socioempleouser1', $d->getSocioempleouser());
		$actualizar->execute();
	}
	public function insertar($d)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `socioempleo`
            (`idsocioempleo`,
            `socioEmpleoregistro`,
            `socioempleoOculto`,
            `socioempleoAccion`,
            `socioempleofecha`,
            `socioempleouser`)
            VALUES
            (:idsocioempleo1,
            :socioEmpleoregistro1,
            :socioempleoOculto1,
            :socioempleoAccion1,
            :socioempleofecha1,
            :socioempleouser1);');
		$insert->bindValue('idsocioempleo1', $d->getIdsocioempleo());
		$insert->bindValue('socioEmpleoregistro1', $d->getSocioEmpleoregistro());
		$insert->bindValue('socioempleoOculto1', $d->getSocioempleoOculto());
		$insert->bindValue('socioempleoAccion1', $d->getSocioempleoAccion());
		$insert->bindValue('socioempleofecha1', $d->getSocioempleofecha());
		$insert->bindValue('socioempleouser1', $d->getSocioempleouser());
		$insert->execute();
	}
}
