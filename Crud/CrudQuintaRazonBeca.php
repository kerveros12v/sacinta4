<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/QuintaRazonBeca.php';

use Clasesphp\Quintarazonbeca;

class CrudQuintarazonbeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$quintarazon = null;
		$select = $db->query('SELECT * FROM quintarazonbeca;');
		foreach ($select->fetchAll() as $quintarazon) {
			$myquintarazonBeca = new Quintarazonbeca();
			$myquintarazonBeca->setQuintaRazonBecaId($quintarazon['quintaRazonBecaId']);
			$myquintarazonBeca->setQuintaRazonBeca($quintarazon['quintaRazonBeca']);
			$myquintarazonBeca->setQuintarazonbecacoldigo($quintarazon['quintarazonbecacoldigo']);
			$myquintarazonBeca->setQuintarazonbecaOculto($quintarazon['quintarazonbecaOculto']);
			$myquintarazonBeca->setQuintarazonbecaAccion($quintarazon['quintarazonbecaAccion']);
			$myquintarazonBeca->setQuintarazonbecafecha($quintarazon['quintarazonbecafecha']);
			$myquintarazonBeca->setQuintarazonbecauser($quintarazon['quintarazonbecauser']);
			$myquintarazonBeca->setQuintarazonbecabool($quintarazon['quintarazonbecabool']);
			$listaquintarazon[] = $myquintarazonBeca;
		}

		return $listaquintarazon;
	}

	public function obtenerquintarazonBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM quintarazonbeca WHERE quintaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$quintarazon = $select->fetch();
		$myquintarazonBeca = new quintarazonBeca();
		$myquintarazonBeca->setQuintaRazonBecaId($quintarazon['quintaRazonBecaId']);
		$myquintarazonBeca->setQuintaRazonBeca($quintarazon['quintaRazonBeca']);
		$myquintarazonBeca->setQuintarazonbecacoldigo($quintarazon['quintarazonbecacoldigo']);
		$myquintarazonBeca->setQuintarazonbecaOculto($quintarazon['quintarazonbecaOculto']);
		$myquintarazonBeca->setQuintarazonbecaAccion($quintarazon['quintarazonbecaAccion']);
		$myquintarazonBeca->setQuintarazonbecafecha($quintarazon['quintarazonbecafecha']);
		$myquintarazonBeca->setQuintarazonbecauser($quintarazon['quintarazonbecauser']);
		$myquintarazonBeca->setQuintarazonbecabool($quintarazon['quintarazonbecabool']);

		return $myquintarazonBeca;
	}
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT quintaRazonBeca FROM quintarazonbeca WHERE quintarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$quintarazon = $select->fetch();

		$myquintarazonBeca = ($quintarazon['quintaRazonBeca']);

		return $myquintarazonBeca;
	}
	public function obtenerCodigobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT quintarazonbecacoldigo FROM quintarazonbeca WHERE quintarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$quintarazon = $select->fetch();

		$myquintarazonBeca = ($quintarazon['quintarazonbecacoldigo']);

		return $myquintarazonBeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT quintaRazonBeca FROM quintarazonbeca WHERE quintaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$quintarazon = $select->fetch();

		$myquintarazonBeca = ($quintarazon['quintaRazonBeca']);

		return $myquintarazonBeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT quintarazonbecacoldigo FROM quintarazonbeca WHERE quintaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$quintarazon = $select->fetch();

		$myquintarazonBeca = ($quintarazon['quintarazonbecacoldigo']);

		return $myquintarazonBeca;
	}
	public function actualizar($quintarazon)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `quintarazonbeca`
		SET
		`quintaRazonBecaId` = :quintaRazonBecaId1,
		`quintarazonbecacoldigo` = :quintarazonbecacoldigo1,
		`quintaRazonBeca` = :quintaRazonBeca1,
		`quintarazonbecaOculto` = :quintarazonbecaOculto1,
		`quintarazonbecaAccion` = :quintarazonbecaAccion1,
		`quintarazonbecafecha` = :quintarazonbecafecha1,
		`quintarazonbecauser` = :quintarazonbecauser1,
		`quintarazonbecabool`=:quintarazonbecabool1
		WHERE `quintaRazonBecaId` = :quintaRazonBecaId1;');
		$actualizar->bindValue('quintaRazonBecaId1', $quintarazon->getQuintaRazonBecaId());
		$actualizar->bindValue('quintarazonbecacoldigo1', $quintarazon->getQuintarazonbecacoldigo());
		$actualizar->bindValue('quintaRazonBeca1', $quintarazon->getQuintaRazonBeca());
		$actualizar->bindValue('quintarazonbecaOculto1', $quintarazon->getQuintarazonbecaOculto());
		$actualizar->bindValue('quintarazonbecaAccion1', $quintarazon->getQuintarazonbecaAccion());
		$actualizar->bindValue('quintarazonbecafecha1', $quintarazon->getQuintarazonbecafecha());
		$actualizar->bindValue('quintarazonbecauser1', $quintarazon->getQuintarazonbecauser());
		$actualizar->bindValue('quintarazonbecabool1', $quintarazon->getQuintarazonbecabool());
		$actualizar->execute();
	}

	public function insertar($quintarazon)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `quintarazonbeca`
		(`quintaRazonBecaId`,
		`quintarazonbecacoldigo`,
		`quintaRazonBeca`,
		`quintarazonbecaOculto`,
		`quintarazonbecaAccion`,
		`quintarazonbecafecha`,
		`quintarazonbecauser`,
		`quintarazonbecabool`)
		VALUES
		(:quintaRazonBecaId1,
		:quintarazonbecacoldigo1,
		:quintaRazonBeca1,
		:quintarazonbecaOculto1,
		:quintarazonbecaAccion1,
		:quintarazonbecafecha1,
		:quintarazonbecauser1,
		:quintarazonbecabool1);');
		$insert->bindValue('quintaRazonBecaId1', $quintarazon->getQuintaRazonBecaId());
		$insert->bindValue('quintarazonbecacoldigo1', $quintarazon->getQuintarazonbecacoldigo());
		$insert->bindValue('quintaRazonBeca1', $quintarazon->getQuintaRazonBeca());
		$insert->bindValue('quintarazonbecaOculto1', $quintarazon->getQuintarazonbecaOculto());
		$insert->bindValue('quintarazonbecaAccion1', $quintarazon->getQuintarazonbecaAccion());
		$insert->bindValue('quintarazonbecafecha1', $quintarazon->getQuintarazonbecafecha());
		$insert->bindValue('quintarazonbecauser1', $quintarazon->getQuintarazonbecauser());
		$insert->bindValue('quintarazonbecabool1', $quintarazon->getQuintarazonbecabool());
		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM quintarazonbeca WHERE quintaRazonBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
