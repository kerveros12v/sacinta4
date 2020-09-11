<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Etnias.php");

use Clasesphp\Etnias;

class CrudEtnia
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaEtnias = null;
		$select = $db->query("SELECT * FROM `etnias`");
		foreach ($select->fetchAll() as $etnias1) {
			$myetnias1 = new Etnias();
			$myetnias1->setEtniaId($etnias1['etniaId']);
			$myetnias1->setEtnia($etnias1['etnia']);
			$myetnias1->setEtniascodigo($etnias1['etniascodigo']);
			$myetnias1->setEtniasOculto($etnias1['etniasOculto']);
			$myetnias1->setEtniasAccion($etnias1['etniasAccion']);
			$myetnias1->setEtniasfecha($etnias1['etniasfecha']);
			$myetnias1->setEtniasuser($etnias1['etniasuser']);
			$listaEtnias[] = $myetnias1;
		}
		return $listaEtnias;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM etnias WHERE etniaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerEtnias($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM ​etnias WHERE etniaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$etnias1 = $select->fetch();
		$myetnias1 = new Etnias();
		$myetnias1->setEtniaId($etnias1['etniaId']);
		$myetnias1->setEtnia($etnias1['etnia']);
		$myetnias1->setEtniascodigo($etnias1['etniascodigo']);
		$myetnias1->setEtniasOculto($etnias1['etniasOculto']);
		$myetnias1->setEtniasAccion($etnias1['etniasAccion']);
		$myetnias1->setEtniasfecha($etnias1['etniasfecha']);
		$myetnias1->setEtniasuser($etnias1['etniasuser']);
		return $myetnias1;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT etnia FROM etnias WHERE etniaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$etnias1 = $select->fetch();
		$myetnias1 = $etnias1['etnia'];

		return $myetnias1;
	}

	public function actualizar($etnias1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `etnias`
			SET
			`etniaId` = :etniaId1,
			`etniascodigo` = :etniascodigo1,
			`etnia` = :etnia1,
			`etniasOculto` = :etniasOculto1,
			`etniasAccion` = :etniasAccion1,
			`etniasfecha` = :etniasfecha1,
			`etniasuser` = :etniasuser1
			WHERE `etniaId` = :etniaId1;');

		$actualizar->bindValue('etniaId1', $etnias1->getEtniaId());
		$actualizar->bindValue('etniascodigo1', $etnias1->getEtniascodigo());
		$actualizar->bindValue('etnia1', $etnias1->getEtnia());
		$actualizar->bindValue('etniasOculto1', $etnias1->getEtniasOculto());
		$actualizar->bindValue('etniasAccion1', $etnias1->getEtniasAccion());
		$actualizar->bindValue('etniasfecha1', $etnias1->getEtniasfecha());
		$actualizar->bindValue('etniasuser1', $etnias1->getEtniasuser());
		$actualizar->execute();
	}
	public function insertar($etnias1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `etnias`
			(`etniaId`,
			`etniascodigo`,
			`etnia`,
			`etniasOculto`,
			`etniasAccion`,
			`etniasfecha`,
			`etniasuser`)
			VALUES
			(:etniaId1,
			:etniascodigo1,
			:etnia1,
			:etniasOculto1,
			:etniasAccion1,
			:etniasfecha1,
			:etniasuser1);');
		$insert->bindValue('etniaId1', $etnias1->getEtniaId());
		$insert->bindValue('etniascodigo1', $etnias1->getEtniascodigo());
		$insert->bindValue('etnia1', $etnias1->getEtnia());
		$insert->bindValue('etniasOculto1', $etnias1->getEtniasOculto());
		$insert->bindValue('etniasAccion1', $etnias1->getEtniasAccion());
		$insert->bindValue('etniasfecha1', $etnias1->getEtniasfecha());
		$insert->bindValue('etniasuser1', $etnias1->getEtniasuser());
		$insert->execute();
	}
}
