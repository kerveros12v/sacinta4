<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Provincias.php");

use Crud\Db;
use Clasesphp\Provincias;

class CrudProvincias
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaprovincia = null;
		$select = $db->query("SELECT * FROM `provincia` ");
		foreach ($select->fetchAll() as $provincia1) {
			$myprovincia = new Provincias();
			$myprovincia->setProvinciaId($provincia1['provinciaId']);
			$myprovincia->setProvincia($provincia1['provincia']);
			$myprovincia->setProvinciacodigo($provincia1['provinciacodigo']);
			$myprovincia->setProvinciapais($provincia1['provinciapais']);
			$myprovincia->setProvinciaOculto($provincia1['provinciaOculto']);
			$myprovincia->setProvinciaAccion($provincia1['provinciaAccion']);
			$myprovincia->setProvinciafecha($provincia1['provinciafecha']);
			$myprovincia->setProvinciauser($provincia1['provinciauser']);
			$listaprovincia[] = $myprovincia;
		}
		return $listaprovincia;
	}
	public function mostrarlistaporPais($id)
	{
		$db = Db::conectar();
		$listaprovincia = NULL;
		$select = $db->prepare("SELECT * FROM `provincia` WHERE provinciapais=:id");
		$select->bindValue('id', $id);
		$select->execute();
		foreach ($select->fetchAll() as $provincia1) {
			$myprovincia = new Provincias();
			$myprovincia->setProvinciaId($provincia1['provinciaId']);
			$myprovincia->setProvincia($provincia1['provincia']);
			$myprovincia->setProvinciacodigo($provincia1['provinciacodigo']);
			$myprovincia->setProvinciapais($provincia1['provinciapais']);
			$myprovincia->setProvinciaOculto($provincia1['provinciaOculto']);
			$myprovincia->setProvinciaAccion($provincia1['provinciaAccion']);
			$myprovincia->setProvinciafecha($provincia1['provinciafecha']);
			$myprovincia->setProvinciauser($provincia1['provinciauser']);
			$listaprovincia[] = $myprovincia;
		}
		return $listaprovincia;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM provincia WHERE provinciaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerProvincia($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM provincia WHERE provinciaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$provincia1 = $select->fetch();
		$myprovincia = new Provincias();
		$myprovincia->setProvinciaId($provincia1['provinciaId']);
		$myprovincia->setProvincia($provincia1['provincia']);
		$myprovincia->setProvinciacodigo($provincia1['provinciacodigo']);
		$myprovincia->setProvinciapais($provincia1['provinciapais']);
		$myprovincia->setProvinciaOculto($provincia1['provinciaOculto']);
		$myprovincia->setProvinciaAccion($provincia1['provinciaAccion']);
		$myprovincia->setProvinciafecha($provincia1['provinciafecha']);
		$myprovincia->setProvinciauser($provincia1['provinciauser']);

		return $myprovincia;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT provincia FROM provincia WHERE provinciaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$provincia1 = $select->fetch();
		$myprovincia = ($provincia1['provincia']);

		return $myprovincia;
	}
	public function actualizar($provincia1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `provincia`
			SET
			`provinciaId` = :provinciaId1,
			`provinciacodigo` = :provinciacodigo1,
			`provincia` = :provincia1,
			`provinciapais` = :provinciapais1,
			`provinciaOculto` = :provinciaOculto1,
			`provinciaAccion` = :provinciaAccion1,
			`provinciafecha` = :provinciafecha1,
			`provinciauser` = :provinciauser1
			WHERE `provinciaId` = :provinciaId1;');
		$actualizar->bindValue('provinciaId1', $provincia1->getProvinciaId());
		$actualizar->bindValue('provinciacodigo1', $provincia1->getProvinciacodigo());
		$actualizar->bindValue('provincia1', $provincia1->getProvincia());
		$actualizar->bindValue('provinciapais1', $provincia1->getProvinciapais());
		$actualizar->bindValue('provinciaOculto1', $provincia1->getProvinciaOculto());
		$actualizar->bindValue('provinciaAccion1', $provincia1->getProvinciaAccion());
		$actualizar->bindValue('provinciafecha1', $provincia1->getProvinciafecha());
		$actualizar->bindValue('provinciauser1', $provincia1->getProvinciauser());
		$actualizar->execute();
	}
	public function insertar($provincia1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `provincia`
			(`provinciaId`,
			`provinciacodigo`,
			`provincia`,
			`provinciapais`,
			`provinciaOculto`,
			`provinciaAccion`,
			`provinciafecha`,
			`provinciauser`)
			VALUES
			(:provinciaId1,
			:provinciacodigo1,
			:provincia1,
			:provinciapais1,
			:provinciaOculto1,
			:provinciaAccion1,
			:provinciafecha1,
			:provinciauser1);');
		$insert->bindValue('provinciaId1', $provincia1->getProvinciaId());
		$insert->bindValue('provinciacodigo1', $provincia1->getProvinciacodigo());
		$insert->bindValue('provincia1', $provincia1->getProvincia());
		$insert->bindValue('provinciapais1', $provincia1->getProvinciapais());
		$insert->bindValue('provinciaOculto1', $provincia1->getProvinciaOculto());
		$insert->bindValue('provinciaAccion1', $provincia1->getProvinciaAccion());
		$insert->bindValue('provinciafecha1', $provincia1->getProvinciafecha());
		$insert->bindValue('provinciauser1', $provincia1->getProvinciauser());

		$insert->execute();
	}
}
