<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Ingresoconconcursomeritos.php");

use Clasesphp\Ingresoconconcursomeritos;

class CrudIngresoconconcursomeritos
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		//, , , , , , 
		$db = Db::conectar();
		$listaiccm = null;
		$select = $db->query("SELECT * FROM `ingresoconconcursomeritos` ");
		foreach ($select->fetchAll() as $iccm) {
			$myiccm = new Ingresoconconcursomeritos();
			$myiccm->setIngresoConConcursoMeritosId($iccm['ingresoConConcursoMeritosId']);
			$myiccm->setIngresoConConcursoMeritos($iccm['ingresoConConcursoMeritos']);
			$myiccm->setIngresoconconcursomeritoscodigo($iccm['ingresoconconcursomeritoscodigo']);
			$myiccm->setIngresoconconcursomeritosOculto($iccm['ingresoconconcursomeritosOculto']);
			$myiccm->setIngresoconconcursomeritosAccion($iccm['ingresoconconcursomeritosAccion']);
			$myiccm->setIngresoconconcursomeritosfecha($iccm['ingresoconconcursomeritosfecha']);
			$myiccm->setIngresoconconcursomeritosuser($iccm['ingresoconconcursomeritosuser']);
			$listaiccm[] = $myiccm;
		}
		return $listaiccm;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM ingresoconconcursomeritos WHERE ingresoConConcursoMeritosId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerPaises($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM ingresoconconcursomeritos WHERE ingresoConConcursoMeritosId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$iccm = $select->fetch();
		$myiccm = new Ingresoconconcursomeritos();
		$myiccm->setIngresoConConcursoMeritosId($iccm['ingresoConConcursoMeritosId']);
		$myiccm->setIngresoConConcursoMeritos($iccm['ingresoConConcursoMeritos']);
		$myiccm->setIngresoconconcursomeritoscodigo($iccm['ingresoconconcursomeritoscodigo']);
		$myiccm->setIngresoconconcursomeritosOculto($iccm['ingresoconconcursomeritosOculto']);
		$myiccm->setIngresoconconcursomeritosAccion($iccm['ingresoconconcursomeritosAccion']);
		$myiccm->setIngresoconconcursomeritosfecha($iccm['ingresoconconcursomeritosfecha']);
		$myiccm->setIngresoconconcursomeritosuser($iccm['ingresoconconcursomeritosuser']);

		return $myiccm;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT ingresoConConcursoMeritos FROM ingresoconconcursomeritos WHERE ingresoConConcursoMeritosId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$iccm = $select->fetch();
		$myiccm = ($iccm['ingresoConConcursoMeritos']);

		return $myiccm;
	}
	public function actualizar($iccm)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `ingresoconconcursomeritos`
		SET
		`ingresoConConcursoMeritosId` = :ingresoConConcursoMeritosId1,
		`ingresoconconcursomeritoscodigo` = :ingresoconconcursomeritoscodigo1,
		`ingresoConConcursoMeritos` = :ingresoConConcursoMeritos1,
		`ingresoconconcursomeritosOculto` = :ingresoconconcursomeritosOculto1,
		`ingresoconconcursomeritosAccion` = :ingresoconconcursomeritosAccion1,
		`ingresoconconcursomeritosfecha` = :ingresoconconcursomeritosfecha1,
		`ingresoconconcursomeritosuser` = :ingresoconconcursomeritosuser1
		WHERE `ingresoConConcursoMeritosId` = :ingresoConConcursoMeritosId1;');
		$actualizar->bindValue('ingresoConConcursoMeritosId1', $iccm->getIngresoConConcursoMeritosId());
		$actualizar->bindValue('ingresoconconcursomeritoscodigo1', $iccm->getIngresoconconcursomeritoscodigo());
		$actualizar->bindValue('ingresoConConcursoMeritos1', $iccm->getIngresoConConcursoMeritos());
		$actualizar->bindValue('ingresoconconcursomeritosOculto1', $iccm->getIngresoconconcursomeritosOculto());
		$actualizar->bindValue('ingresoconconcursomeritosAccion1', $iccm->getIngresoconconcursomeritosAccion());
		$actualizar->bindValue('ingresoconconcursomeritosfecha1', $iccm->getIngresoconconcursomeritosfecha());
		$actualizar->bindValue('ingresoconconcursomeritosuser1', $iccm->getIngresoconconcursomeritosuser());
		$actualizar->execute();
	}
	public function insertar($iccm)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `ingresoconconcursomeritos`
		(`ingresoConConcursoMeritosId`,
		`ingresoconconcursomeritoscodigo`,
		`ingresoConConcursoMeritos`,
		`ingresoconconcursomeritosOculto`,
		`ingresoconconcursomeritosAccion`,
		`ingresoconconcursomeritosfecha`,
		`ingresoconconcursomeritosuser`)
		VALUES
		(:ingresoConConcursoMeritosId1,
		:ingresoconconcursomeritoscodigo1,
		:ingresoConConcursoMeritos1,
		:ingresoconconcursomeritosOculto1,
		:ingresoconconcursomeritosAccion1,
		:ingresoconconcursomeritosfecha1,
		:ingresoconconcursomeritosuser1);');
		$insert->bindValue('ingresoConConcursoMeritosId1', $iccm->getIngresoConConcursoMeritosId());
		$insert->bindValue('ingresoconconcursomeritoscodigo1', $iccm->getIngresoconconcursomeritoscodigo());
		$insert->bindValue('ingresoConConcursoMeritos1', $iccm->getIngresoConConcursoMeritos());
		$insert->bindValue('ingresoconconcursomeritosOculto1', $iccm->getIngresoconconcursomeritosOculto());
		$insert->bindValue('ingresoconconcursomeritosAccion1', $iccm->getIngresoconconcursomeritosAccion());
		$insert->bindValue('ingresoconconcursomeritosfecha1', $iccm->getIngresoconconcursomeritosfecha());
		$insert->bindValue('ingresoconconcursomeritosuser1', $iccm->getIngresoconconcursomeritosuser());
		$insert->execute();
	}
}
