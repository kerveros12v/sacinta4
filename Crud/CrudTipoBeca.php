<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Tipobeca.php");

use Clasesphp\Tipobeca;

class CrudTipoBeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipobeca = null;
		$select = $db->query('SELECT * FROM tipobeca;');
		foreach ($select->fetchAll() as $tipobeca) {
			$mytipobeca = new TipoBeca();
			$mytipobeca->setTipoBecaId($tipobeca['tipoBecaId']);
			$mytipobeca->setTipobecacodigo($tipobeca['tipobecacodigo']);
			$mytipobeca->setTipoBeca($tipobeca['tipoBeca']);
			$mytipobeca->setTipobecaOculto($tipobeca['tipobecaOculto']);
			$mytipobeca->setTipobecaAccion($tipobeca['tipobecaAccion']);
			$mytipobeca->setTipobecafecha($tipobeca['tipobecafecha']);
			$mytipobeca->setTipobecauser($tipobeca['tipobecauser']);
			$mytipobeca->setTipobecabool(($tipobeca['tipobecabool']));
			$listatipobeca[] = $mytipobeca;
		}
		return $listatipobeca;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tipobeca WHERE tipoBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenertipobeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM `tipobeca` WHERE  tipobecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipobeca = $select->fetch();
		$mytipobeca = new TipoBeca();
		$mytipobeca->setTipoBecaId($tipobeca['tipoBecaId']);
		$mytipobeca->setTipobecacodigo($tipobeca['tipobecacodigo']);
		$mytipobeca->setTipoBeca($tipobeca['tipoBeca']);
		$mytipobeca->setTipobecaOculto($tipobeca['tipobecaOculto']);
		$mytipobeca->setTipobecaAccion($tipobeca['tipobecaAccion']);
		$mytipobeca->setTipobecafecha($tipobeca['tipobecafecha']);
		$mytipobeca->setTipobecauser($tipobeca['tipobecauser']);
		$mytipobeca->setTipobecabool(($tipobeca['tipobecabool']));


		return $mytipobeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoBeca FROM tipobeca WHERE tipobecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipobeca = $select->fetch();
		$mytipobeca = ($tipobeca['tipoBeca']);

		return $mytipobeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipobecacodigo FROM tipobeca WHERE tipobecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipobeca = $select->fetch();
		$mytipobeca = ($tipobeca['tipobecacodigo']);

		return $mytipobeca;
	}
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoBeca FROM tipobeca WHERE tipobecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipobeca = $select->fetch();
		$mytipobeca = ($tipobeca['tipoBeca']);

		return $mytipobeca;
	}
	public function obtenerboolCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipobecacodigo FROM tipobeca WHERE tipobecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipobeca = $select->fetch();
		$mytipobeca = ($tipobeca['tipobecacodigo']);

		return $mytipobeca;
	}
	public function actualizar($tipobeca)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare('UPDATE `tipobeca`
			SET
			`tipoBecaId` = :tipoBecaId1,
			`tipobecacodigo` = :tipobecacodigo1,
			`tipoBeca` = :tipoBeca1,
			`tipobecaOculto` = :tipobecaOculto1,
			`tipobecaAccion` = :tipobecaAccion1,
			`tipobecafecha` = :tipobecafecha1,
			`tipobecauser` = :tipobecauser1,
			`tipobecabool`=:tipobecabool1
			WHERE `tipoBecaId` = :tipoBecaId1;');
		$actualizar->bindValue('tipoBecaId1', $tipobeca->getTipoBecaId());
		$actualizar->bindValue('tipobecacodigo1', $tipobeca->getTipobecacodigo());
		$actualizar->bindValue('tipoBeca1', $tipobeca->getTipoBeca());
		$actualizar->bindValue('tipobecaOculto1', $tipobeca->getTipobecaOculto());
		$actualizar->bindValue('tipobecaAccion1', $tipobeca->getTipobecaAccion());
		$actualizar->bindValue('tipobecafecha1', $tipobeca->getTipobecafecha());
		$actualizar->bindValue('tipobecauser1', $tipobeca->getTipobecauser());
		$actualizar->bindValue('tipobecabool1', $tipobeca->getTipobecabool());
		$actualizar->execute();
	}
	public function insertar($tipobeca)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipobeca`
			(`tipoBecaId`,
			`tipobecacodigo`,
			`tipoBeca`,
			`tipobecaOculto`,
			`tipobecaAccion`,
			`tipobecafecha`,
			`tipobecauser`,
			`tipobecabool`)
			VALUES
			(:tipoBecaId1,
			:tipobecacodigo1,
			:tipoBeca1,
			:tipobecaOculto1,
			:tipobecaAccion1,
			:tipobecafecha1,
			:tipobecauser1,
			:tipobecabool1);');
		$insert->bindValue('tipoBecaId1', $tipobeca->getTipoBecaId());
		$insert->bindValue('tipobecacodigo1', $tipobeca->getTipobecacodigo());
		$insert->bindValue('tipoBeca1', $tipobeca->getTipoBeca());
		$insert->bindValue('tipobecaOculto1', $tipobeca->getTipobecaOculto());
		$insert->bindValue('tipobecaAccion1', $tipobeca->getTipobecaAccion());
		$insert->bindValue('tipobecafecha1', $tipobeca->getTipobecafecha());
		$insert->bindValue('tipobecauser1', $tipobeca->getTipobecauser());
		$insert->bindValue('tipobecabool1', $tipobeca->getTipobecabool());
		$insert->execute();
	}
}
