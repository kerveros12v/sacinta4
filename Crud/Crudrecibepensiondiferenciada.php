<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Recibepensiondiferenciada.php");

use Clasesphp\Recibepensiondiferenciada;

class Crudrecibepensiondiferenciada
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listarecibepensiondiferenciada = null;
		$select = $db->query('SELECT * FROM recibepensiondiferenciada');
		foreach ($select->fetchAll() as $recibepensiondiferenciada1) {
			$myrecibepensiondiferenciada = new Recibepensiondiferenciada();
			$myrecibepensiondiferenciada->setRecibePensionDiferenciadaId($recibepensiondiferenciada1['recibePensionDiferenciadaId']);
			$myrecibepensiondiferenciada->setRecibePensionDiferenciada($recibepensiondiferenciada1['recibePensionDiferenciada']);
			$myrecibepensiondiferenciada->setRecibepensiondiferenciadacodigo($recibepensiondiferenciada1['recibepensiondiferenciadacodigo']);
			$myrecibepensiondiferenciada->setRecibepensiondiferenciadaOculto($recibepensiondiferenciada1['recibepensiondiferenciadaOculto']);
			$myrecibepensiondiferenciada->setRecibepensiondiferenciadaAccion($recibepensiondiferenciada1['recibepensiondiferenciadaAccion']);
			$myrecibepensiondiferenciada->setRecibepensiondiferenciadafecha($recibepensiondiferenciada1['recibepensiondiferenciadafecha']);
			$myrecibepensiondiferenciada->setRecibepensiondiferenciadauser($recibepensiondiferenciada1['recibepensiondiferenciadauser']);

			$listarecibepensiondiferenciada[] = $myrecibepensiondiferenciada;
		}
		return $listarecibepensiondiferenciada;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM recibepensiondiferenciada WHERE recibePensionDiferenciadaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerrecibepensiondiferenciada($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM recibepensiondiferenciada WHERE recibePensionDiferenciadaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$recibepensiondiferenciada1 = $select->fetch();
		$myrecibepensiondiferenciada = new Recibepensiondiferenciada();
		$myrecibepensiondiferenciada->setRecibePensionDiferenciadaId($recibepensiondiferenciada1['recibePensionDiferenciadaId']);
		$myrecibepensiondiferenciada->setRecibePensionDiferenciada($recibepensiondiferenciada1['recibePensionDiferenciada']);
		$myrecibepensiondiferenciada->setRecibepensiondiferenciadacodigo($recibepensiondiferenciada1['recibepensiondiferenciadacodigo']);
		$myrecibepensiondiferenciada->setRecibepensiondiferenciadaOculto($recibepensiondiferenciada1['recibepensiondiferenciadaOculto']);
		$myrecibepensiondiferenciada->setRecibepensiondiferenciadaAccion($recibepensiondiferenciada1['recibepensiondiferenciadaAccion']);
		$myrecibepensiondiferenciada->setRecibepensiondiferenciadafecha($recibepensiondiferenciada1['recibepensiondiferenciadafecha']);
		$myrecibepensiondiferenciada->setRecibepensiondiferenciadauser($recibepensiondiferenciada1['recibepensiondiferenciadauser']);

		return $myrecibepensiondiferenciada;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM recibepensiondiferenciada WHERE recibePensionDiferenciadaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$recibepensiondiferenciada1 = $select->fetch();
		$myrecibepensiondiferenciada = ($recibepensiondiferenciada1['recibePensionDiferenciada']);

		return $myrecibepensiondiferenciada;
	}
	public function actualizar($recibepensiondiferenciada1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `recibepensiondiferenciada`
			SET
			`recibePensionDiferenciadaId` = :recibePensionDiferenciadaId1,
			`recibepensiondiferenciadacodigo` = :recibepensiondiferenciadacodigo1,
			`recibePensionDiferenciada` = :recibePensionDiferenciada1,
			`recibepensiondiferenciadaOculto` = :recibepensiondiferenciadaOculto1,
			`recibepensiondiferenciadaAccion` = :recibepensiondiferenciadaAccion1,
			`recibepensiondiferenciadafecha` = :recibepensiondiferenciadafecha1,
			`recibepensiondiferenciadauser` = :recibepensiondiferenciadauser1
			WHERE `recibePensionDiferenciadaId` = :recibePensionDiferenciadaId1;');
		$actualizar->bindValue('recibePensionDiferenciadaId1', $recibepensiondiferenciada1->getRecibePensionDiferenciadaId());
		$actualizar->bindValue('recibepensiondiferenciadacodigo1', $recibepensiondiferenciada1->getRecibepensiondiferenciadacodigo());
		$actualizar->bindValue('recibePensionDiferenciada1', $recibepensiondiferenciada1->getRecibePensionDiferenciada());
		$actualizar->bindValue('recibepensiondiferenciadaOculto1', $recibepensiondiferenciada1->getRecibepensiondiferenciadaOculto());
		$actualizar->bindValue('recibepensiondiferenciadaAccion1', $recibepensiondiferenciada1->getRecibepensiondiferenciadaAccion());
		$actualizar->bindValue('recibepensiondiferenciadafecha1', $recibepensiondiferenciada1->getRecibepensiondiferenciadafecha());
		$actualizar->bindValue('recibepensiondiferenciadauser1', $recibepensiondiferenciada1->getRecibepensiondiferenciadauser());
		$actualizar->execute();
	}
	public function insertar($recibepensiondiferenciada1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `recibepensiondiferenciada`
			(`recibePensionDiferenciadaId`,
			`recibepensiondiferenciadacodigo`,
			`recibePensionDiferenciada`,
			`recibepensiondiferenciadaOculto`,
			`recibepensiondiferenciadaAccion`,
			`recibepensiondiferenciadafecha`,
			`recibepensiondiferenciadauser`)
			VALUES
			(:recibePensionDiferenciadaId1,
			:recibepensiondiferenciadacodigo1,
			:recibePensionDiferenciada1,
			:recibepensiondiferenciadaOculto1,
			:recibepensiondiferenciadaAccion1,
			:recibepensiondiferenciadafecha1,
			:recibepensiondiferenciadauser1);
			');
		$insert->bindValue('recibePensionDiferenciadaId1', $recibepensiondiferenciada1->getRecibePensionDiferenciadaId());
		$insert->bindValue('recibepensiondiferenciadacodigo1', $recibepensiondiferenciada1->getRecibepensiondiferenciadacodigo());
		$insert->bindValue('recibePensionDiferenciada1', $recibepensiondiferenciada1->getRecibePensionDiferenciada());
		$insert->bindValue('recibepensiondiferenciadaOculto1', $recibepensiondiferenciada1->getRecibepensiondiferenciadaOculto());
		$insert->bindValue('recibepensiondiferenciadaAccion1', $recibepensiondiferenciada1->getRecibepensiondiferenciadaAccion());
		$insert->bindValue('recibepensiondiferenciadafecha1', $recibepensiondiferenciada1->getRecibepensiondiferenciadafecha());
		$insert->bindValue('recibepensiondiferenciadauser1', $recibepensiondiferenciada1->getRecibepensiondiferenciadauser());
		$insert->execute();
	}
}
