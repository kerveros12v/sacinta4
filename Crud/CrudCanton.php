<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Cantones.php");

use Clasesphp\Cantones;

class CrudCantones
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
		$listacanton = NULL;
		$select = $db->query("SELECT * FROM `canton`");
		foreach ($select->fetchAll() as $canton1) {
			$mycanton = new Cantones();
			$mycanton->setCantonId($canton1['cantonId']);
			$mycanton->setCanton($canton1['canton']);
			$mycanton->setCantoncodigo($canton1['cantoncodigo']);
			$mycanton->setCantonprovincia($canton1['cantonprovincia']);
			$mycanton->setCantonAccion($canton1['cantonAccion']);
			$mycanton->setCantonOculto($canton1['cantonOculto']);
			$mycanton->setCantonfecha($canton1['cantonfecha']);
			$mycanton->setCantonuser($canton1['cantonuser']);
			$listacanton[] = $mycanton;
		}
		return $listacanton;
	}
	public function mostrarlistapoProvincia($id)
	{
		//echo("<script>console.log('Dato recibido en el crud: ".$id."');</script>");
		$db = Db::conectar();
		$listacanton = NULL;
		$select = $db->prepare("SELECT * FROM `canton` WHERE cantonprovincia=:id");
		$select->bindValue('id', $id);
		$select->execute();
		foreach ($select->fetchAll() as $canton1) {
			$mycanton = new Cantones();
			$mycanton->setCantonId($canton1['cantonId']);
			$mycanton->setCanton($canton1['canton']);
			$mycanton->setCantoncodigo($canton1['cantoncodigo']);
			$mycanton->setCantonprovincia($canton1['cantonprovincia']);
			$mycanton->setCantonAccion($canton1['cantonAccion']);
			$mycanton->setCantonOculto($canton1['cantonOculto']);
			$mycanton->setCantonfecha($canton1['cantonfecha']);
			$mycanton->setCantonuser($canton1['cantonuser']);
			$listacanton[] = $mycanton;
		}
		return $listacanton;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM canton WHERE cantonId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerCanton($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM canton WHERE cantonId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$canton1 = $select->fetch();
		$mycanton = new Cantones();
		$mycanton->setCantonId($canton1['cantonId']);
		$mycanton->setCanton($canton1['canton']);
		$mycanton->setCantoncodigo($canton1['cantoncodigo']);
		$mycanton->setCantonprovincia($canton1['cantonprovincia']);
		$mycanton->setCantonAccion($canton1['cantonAccion']);
		$mycanton->setCantonOculto($canton1['cantonOculto']);
		$mycanton->setCantonfecha($canton1['cantonfecha']);
		$mycanton->setCantonuser($canton1['cantonuser']);

		return $mycanton;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT canton FROM canton WHERE cantonId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$canton1 = $select->fetch();
		$mycanton = ($canton1['canton']);

		return $mycanton;
	}
	public function actualizar($canton1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `canton`
			SET
			`cantonId` = :cantonId1,
			`cantoncodigo` = :cantoncodigo1,
			`canton` = :canton1,
			`cantonprovincia` = :cantonprovincia1,
			`cantonOculto` = :cantonOculto1,
			`cantonAccion` = :cantonAccion1,
			`cantonfecha` = :cantonfecha1,
			`cantonuser` = :cantonuser1
			WHERE `cantonId` = :cantonId1;');
		$actualizar->bindValue('cantonId1', $canton1->getCantonId());
		$actualizar->bindValue('cantoncodigo1', $canton1->getCantoncodigo());
		$actualizar->bindValue('canton1', $canton1->getCanton());
		$actualizar->bindValue('cantonprovincia1', $canton1->getCantonprovincia());
		$actualizar->bindValue('cantonOculto1', $canton1->getCantonOculto());
		$actualizar->bindValue('cantonAccion1', $canton1->getCantonAccion());
		$actualizar->bindValue('cantonfecha1', $canton1->getCantonfecha());
		$actualizar->bindValue('cantonuser1', $canton1->getCantonuser());
		$actualizar->execute();
	}
	public function insertar($canton1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `canton`
			(`cantonId`,
			`cantoncodigo`,
			`canton`,
			`cantonprovincia`,
			`cantonOculto`,
			`cantonAccion`,
			`cantonfecha`,
			`cantonuser`)
			VALUES
			(:cantonId1,
			:cantoncodigo1,
			:canton1,
			:cantonprovincia1,
			:cantonOculto1,
			:cantonAccion1,
			:cantonfecha1,
			:cantonuser1);
			');
		$insert->bindValue('cantonId1', $canton1->getCantonId());
		$insert->bindValue('cantoncodigo1', $canton1->getCantoncodigo());
		$insert->bindValue('canton1', $canton1->getCanton());
		$insert->bindValue('cantonprovincia1', $canton1->getCantonprovincia());
		$insert->bindValue('cantonOculto1', $canton1->getCantonOculto());
		$insert->bindValue('cantonAccion1', $canton1->getCantonAccion());
		$insert->bindValue('cantonfecha1', $canton1->getCantonfecha());
		$insert->bindValue('cantonuser1', $canton1->getCantonuser());
		$insert->execute();
	}
}
