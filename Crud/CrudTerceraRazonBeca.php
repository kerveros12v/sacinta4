<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Tercerarazonbeca.php';

use Clasesphp\Tercerarazonbeca;

class CrudTercerarazonbeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$tercerarazon = null;
		$select = $db->query('SELECT * FROM tercerarazonbeca;');
		foreach ($select->fetchAll() as $tercerarazon) {
			$mytercerarazonBeca = new Tercerarazonbeca();
			$mytercerarazonBeca->setTerceraRazonBecaId($tercerarazon['terceraRazonBecaId']);
			$mytercerarazonBeca->setTerceraRazonBeca($tercerarazon['terceraRazonBeca']);
			$mytercerarazonBeca->setTercerarazonbecacodigo($tercerarazon['tercerarazonbecacodigo']);
			$mytercerarazonBeca->setTercerarazonbecaOculto($tercerarazon['tercerarazonbecaOculto']);
			$mytercerarazonBeca->setTercerarazonbecaAccion($tercerarazon['tercerarazonbecaAccion']);
			$mytercerarazonBeca->setTercerarazonbecafecha($tercerarazon['tercerarazonbecafecha']);
			$mytercerarazonBeca->setTercerarazonbecauser($tercerarazon['tercerarazonbecauser']);
			$mytercerarazonBeca->setTercerarazonbecabool($tercerarazon['tercerarazonbecabool']);
			$listatercerarazon[] = $mytercerarazonBeca;
		}

		return $listatercerarazon;
	}

	public function obtenertercerarazonBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tercerarazonbeca WHERE terceraRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tercerarazon = $select->fetch();
		$mytercerarazonBeca = new Tercerarazonbeca();
		$mytercerarazonBeca->setTerceraRazonBecaId($tercerarazon['terceraRazonBecaId']);
		$mytercerarazonBeca->setTerceraRazonBeca($tercerarazon['terceraRazonBeca']);
		$mytercerarazonBeca->setTercerarazonbecacodigo($tercerarazon['tercerarazonbecacodigo']);
		$mytercerarazonBeca->setTercerarazonbecaOculto($tercerarazon['tercerarazonbecaOculto']);
		$mytercerarazonBeca->setTercerarazonbecaAccion($tercerarazon['tercerarazonbecaAccion']);
		$mytercerarazonBeca->setTercerarazonbecafecha($tercerarazon['tercerarazonbecafecha']);
		$mytercerarazonBeca->setTercerarazonbecauser($tercerarazon['tercerarazonbecauser']);
		$mytercerarazonBeca->setTercerarazonbecabool($tercerarazon['tercerarazonbecabool']);

		return $mytercerarazonBeca;
	}
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT terceraRazonBeca FROM tercerarazonbeca WHERE tercerarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tercerarazon = $select->fetch();

		$mytercerarazonBeca = ($tercerarazon['terceraRazonBeca']);

		return $mytercerarazonBeca;
	}
	public function obtenerCodigobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tercerarazonbecacodigo FROM tercerarazonbeca WHERE tercerarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tercerarazon = $select->fetch();

		$mytercerarazonBeca = ($tercerarazon['tercerarazonbecacodigo']);

		return $mytercerarazonBeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT terceraRazonBeca FROM tercerarazonbeca WHERE terceraRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tercerarazon = $select->fetch();

		$mytercerarazonBeca = ($tercerarazon['terceraRazonBeca']);

		return $mytercerarazonBeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tercerarazonbecacodigo FROM tercerarazonbeca WHERE terceraRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tercerarazon = $select->fetch();

		$mytercerarazonBeca = ($tercerarazon['tercerarazonbecacodigo']);

		return $mytercerarazonBeca;
	}
	public function actualizar($tercerarazon)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tercerarazonbeca`
		SET
		`terceraRazonBecaId` = :terceraRazonBecaId1,
		`tercerarazonbecacodigo` = :tercerarazonbecacodigo1,
		`terceraRazonBeca` = :terceraRazonBeca1,
		`tercerarazonbecaOculto` = :tercerarazonbecaOculto1,
		`tercerarazonbecaAccion` = :tercerarazonbecaAccion1,
		`tercerarazonbecafecha` = :tercerarazonbecafecha1,
		`tercerarazonbecauser` = :tercerarazonbecauser1,
		`tercerarazonbecabool`=:tercerarazonbecabool1
		WHERE `terceraRazonBecaId` = :terceraRazonBecaId1;');
		$actualizar->bindValue('terceraRazonBecaId1', $tercerarazon->getTerceraRazonBecaId());
		$actualizar->bindValue('tercerarazonbecacodigo1', $tercerarazon->getTercerarazonbecacodigo());
		$actualizar->bindValue('terceraRazonBeca1', $tercerarazon->getTerceraRazonBeca());
		$actualizar->bindValue('tercerarazonbecaOculto1', $tercerarazon->getTercerarazonbecaOculto());
		$actualizar->bindValue('tercerarazonbecaAccion1', $tercerarazon->getTercerarazonbecaAccion());
		$actualizar->bindValue('tercerarazonbecafecha1', $tercerarazon->getTercerarazonbecafecha());
		$actualizar->bindValue('tercerarazonbecauser1', $tercerarazon->getTercerarazonbecauser());
		$actualizar->bindValue('tercerarazonbecabool1', $tercerarazon->getTercerarazonbecabool());

		$actualizar->execute();
	}

	public function insertar($tercerarazon)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tercerarazonbeca`
		(`terceraRazonBecaId`,
		`tercerarazonbecacodigo`,
		`terceraRazonBeca`,
		`tercerarazonbecaOculto`,
		`tercerarazonbecaAccion`,
		`tercerarazonbecafecha`,
		`tercerarazonbecauser`,
		`tercerarazonbecabool`)
		VALUES
		(:terceraRazonBecaId1,
		:tercerarazonbecacodigo1,
		:terceraRazonBeca1,
		:tercerarazonbecaOculto1,
		:tercerarazonbecaAccion1,
		:tercerarazonbecafecha1,
		:tercerarazonbecauser1,
		:tercerarazonbecabool1);');
		$insert->bindValue('terceraRazonBecaId1', $tercerarazon->getTerceraRazonBecaId());
		$insert->bindValue('tercerarazonbecacodigo1', $tercerarazon->getTercerarazonbecacodigo());
		$insert->bindValue('terceraRazonBeca1', $tercerarazon->getTerceraRazonBeca());
		$insert->bindValue('tercerarazonbecaOculto1', $tercerarazon->getTercerarazonbecaOculto());
		$insert->bindValue('tercerarazonbecaAccion1', $tercerarazon->getTercerarazonbecaAccion());
		$insert->bindValue('tercerarazonbecafecha1', $tercerarazon->getTercerarazonbecafecha());
		$insert->bindValue('tercerarazonbecauser1', $tercerarazon->getTercerarazonbecauser());
		$insert->bindValue('tercerarazonbecabool1', $tercerarazon->getTercerarazonbecabool());

		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tercerarazonbeca WHERE terceraRazonBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
