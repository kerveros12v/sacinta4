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
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaprovincia = null;
		$select = $db->query("SELECT * FROM `provincia` ");
		foreach ($select->fetchAll() as $provincia1) {
			$myprovincia = new Provincias();
			$myprovincia->set_provinciaId($provincia1['provinciaId']);
			$myprovincia->set_provincia($provincia1['provincia']);
			$myprovincia->set_provinciacodigo($provincia1['provinciacodigo']);
			$myprovincia->set_provinciapais($provincia1['provinciapais']);
			$myprovincia->set_provinciaOculto($provincia1['provinciaOculto']);
			$myprovincia->set_provinciaAccion($provincia1['provinciaAccion']);
			$myprovincia->set_provinciafecha($provincia1['provinciafecha']);
			$myprovincia->set_provinciauser($provincia1['provinciauser']);
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
			$myprovincia->set_provinciaId($provincia1['provinciaId']);
			$myprovincia->set_provincia($provincia1['provincia']);
			$myprovincia->set_provinciacodigo($provincia1['provinciacodigo']);
			$myprovincia->set_provinciapais($provincia1['provinciapais']);
			$myprovincia->set_provinciaOculto($provincia1['provinciaOculto']);
			$myprovincia->set_provinciaAccion($provincia1['provinciaAccion']);
			$myprovincia->set_provinciafecha($provincia1['provinciafecha']);
			$myprovincia->set_provinciauser($provincia1['provinciauser']);
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
		$myprovincia->set_provinciaId($provincia1['provinciaId']);
		$myprovincia->set_provincia($provincia1['provincia']);
		$myprovincia->set_provinciacodigo($provincia1['provinciacodigo']);
		$myprovincia->set_provinciapais($provincia1['provinciapais']);
		$myprovincia->set_provinciaOculto($provincia1['provinciaOculto']);
		$myprovincia->set_provinciaAccion($provincia1['provinciaAccion']);
		$myprovincia->set_provinciafecha($provincia1['provinciafecha']);
		$myprovincia->set_provinciauser($provincia1['provinciauser']);

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
		$actualizar->bindValue('provinciaId1', $provincia1->get_provinciaId());
		$actualizar->bindValue('provinciacodigo1', $provincia1->get_provinciacodigo());
		$actualizar->bindValue('provincia1', $provincia1->get_provincia());
		$actualizar->bindValue('provinciapais1', $provincia1->get_provinciapais());
		$actualizar->bindValue('provinciaOculto1', $provincia1->get_provinciaOculto());
		$actualizar->bindValue('provinciaAccion1', $provincia1->get_provinciaAccion());
		$actualizar->bindValue('provinciafecha1', $provincia1->get_provinciafecha());
		$actualizar->bindValue('provinciauser1', $provincia1->get_provinciauser());
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
		$insert->bindValue('provinciaId1', $provincia1->get_provinciaId());
		$insert->bindValue('provinciacodigo1', $provincia1->get_provinciacodigo());
		$insert->bindValue('provincia1', $provincia1->get_provincia());
		$insert->bindValue('provinciapais1', $provincia1->get_provinciapais());
		$insert->bindValue('provinciaOculto1', $provincia1->get_provinciaOculto());
		$insert->bindValue('provinciaAccion1', $provincia1->get_provinciaAccion());
		$insert->bindValue('provinciafecha1', $provincia1->get_provinciafecha());
		$insert->bindValue('provinciauser1', $provincia1->get_provinciauser());

		$insert->execute();
	}
}
