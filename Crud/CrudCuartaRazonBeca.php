<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Cuartarazonbeca.php';

use Clasesphp\Cuartarazonbeca;

class CrudCuartarazonbeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$cuartarazon = null;
		$select = $db->query('SELECT * FROM cuartarazonbeca;');
		foreach ($select->fetchAll() as $cuartarazon) {
			$mycuartarazonBeca = new Cuartarazonbeca();
			$mycuartarazonBeca->setCuartaRazonBecaId($cuartarazon['cuartaRazonBecaId']);
			$mycuartarazonBeca->setCuartaRazonBeca($cuartarazon['cuartaRazonBeca']);
			$mycuartarazonBeca->setCuartarazonbecacodigo($cuartarazon['cuartarazonbecacodigo']);
			$mycuartarazonBeca->setCuartarazonbecaOculto($cuartarazon['cuartarazonbecaOculto']);
			$mycuartarazonBeca->setCuartarazonbecaAccion($cuartarazon['cuartarazonbecaAccion']);
			$mycuartarazonBeca->setCuartarazonbecafecha($cuartarazon['cuartarazonbecafecha']);
			$mycuartarazonBeca->setCuartarazonbecauser($cuartarazon['cuartarazonbecauser']);
			$mycuartarazonBeca->setCuartarazonbecabool($cuartarazon['cuartarazonbecabool']);
			$listacuartarazon[] = $mycuartarazonBeca;
		}

		return $listacuartarazon;
	}

	public function obtenercuartarazonBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM cuartarazonbeca WHERE cuartaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cuartarazon = $select->fetch();
		$mycuartarazonBeca = new Cuartarazonbeca();
		$mycuartarazonBeca->setCuartaRazonBecaId($cuartarazon['cuartaRazonBecaId']);
		$mycuartarazonBeca->setCuartaRazonBeca($cuartarazon['cuartaRazonBeca']);
		$mycuartarazonBeca->setCuartarazonbecacodigo($cuartarazon['cuartarazonbecacodigo']);
		$mycuartarazonBeca->setCuartarazonbecaOculto($cuartarazon['cuartarazonbecaOculto']);
		$mycuartarazonBeca->setCuartarazonbecaAccion($cuartarazon['cuartarazonbecaAccion']);
		$mycuartarazonBeca->setCuartarazonbecafecha($cuartarazon['cuartarazonbecafecha']);
		$mycuartarazonBeca->setCuartarazonbecauser($cuartarazon['cuartarazonbecauser']);
		$mycuartarazonBeca->setCuartarazonbecabool($cuartarazon['cuartarazonbecabool']);

		return $mycuartarazonBeca;
	}
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cuartaRazonBeca FROM cuartarazonbeca WHERE cuartarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cuartarazon = $select->fetch();

		$mycuartarazonBeca = ($cuartarazon['cuartaRazonBeca']);

		return $mycuartarazonBeca;
	}
	public function obtenerCodigobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cuartarazonbecacodigo FROM cuartarazonbeca WHERE cuartarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cuartarazon = $select->fetch();

		$mycuartarazonBeca = ($cuartarazon['cuartarazonbecacodigo']);

		return $mycuartarazonBeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cuartaRazonBeca FROM cuartarazonbeca WHERE cuartaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cuartarazon = $select->fetch();

		$mycuartarazonBeca = ($cuartarazon['cuartaRazonBeca']);

		return $mycuartarazonBeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cuartarazonbecacodigo FROM cuartarazonbeca WHERE cuartaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cuartarazon = $select->fetch();

		$mycuartarazonBeca = ($cuartarazon['cuartarazonbecacodigo']);

		return $mycuartarazonBeca;
	}

	public function actualizar($cuartarazon)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `cuartarazonbeca`
		SET
		`cuartaRazonBecaId` = :cuartaRazonBecaId1,
		`cuartarazonbecacodigo` = :cuartarazonbecacodigo1,
		`cuartaRazonBeca` = :cuartaRazonBeca1,
		`cuartarazonbecaOculto` = :cuartarazonbecaOculto1,
		`cuartarazonbecaAccion` = :cuartarazonbecaAccion1,
		`cuartarazonbecafecha` = :cuartarazonbecafecha1,
		`cuartarazonbecauser` = :cuartarazonbecauser1,
		`cuartarazonbecabool`=:cuartarazonbecabool1
		WHERE `cuartaRazonBecaId` = :cuartaRazonBecaId1;');
		$actualizar->bindValue('cuartaRazonBecaId1', $cuartarazon->getCuartaRazonBecaId());
		$actualizar->bindValue('cuartarazonbecacodigo1', $cuartarazon->getCuartarazonbecacodigo());
		$actualizar->bindValue('cuartaRazonBeca1', $cuartarazon->getCuartaRazonBeca());
		$actualizar->bindValue('cuartarazonbecaOculto1', $cuartarazon->getCuartarazonbecaOculto());
		$actualizar->bindValue('cuartarazonbecaAccion1', $cuartarazon->getCuartarazonbecaAccion());
		$actualizar->bindValue('cuartarazonbecafecha1', $cuartarazon->getCuartarazonbecafecha());
		$actualizar->bindValue('cuartarazonbecauser1', $cuartarazon->getCuartarazonbecauser());
		$actualizar->bindValue('cuartarazonbecabool1', $cuartarazon->getCuartarazonbecabool());
		$actualizar->execute();
	}

	public function insertar($cuartarazon)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `cuartarazonbeca`
		(`cuartaRazonBecaId`,
		`cuartarazonbecacodigo`,
		`cuartaRazonBeca`,
		`cuartarazonbecaOculto`,
		`cuartarazonbecaAccion`,
		`cuartarazonbecafecha`,
		`cuartarazonbecauser`,
		`cuartarazonbecabool`)
		VALUES
		(:cuartaRazonBecaId1,
		:cuartarazonbecacodigo1,
		:cuartaRazonBeca1,
		:cuartarazonbecaOculto1,
		:cuartarazonbecaAccion1,
		:cuartarazonbecafecha1,
		:cuartarazonbecauser1,
		:cuartarazonbecabool1);');
		$insert->bindValue('cuartaRazonBecaId1', $cuartarazon->getCuartaRazonBecaId());
		$insert->bindValue('cuartarazonbecacodigo1', $cuartarazon->getCuartarazonbecacodigo());
		$insert->bindValue('cuartaRazonBeca1', $cuartarazon->getCuartaRazonBeca());
		$insert->bindValue('cuartarazonbecaOculto1', $cuartarazon->getCuartarazonbecaOculto());
		$insert->bindValue('cuartarazonbecaAccion1', $cuartarazon->getCuartarazonbecaAccion());
		$insert->bindValue('cuartarazonbecafecha1', $cuartarazon->getCuartarazonbecafecha());
		$insert->bindValue('cuartarazonbecauser1', $cuartarazon->getCuartarazonbecauser());
		$insert->bindValue('cuartarazonbecabool1', $cuartarazon->getCuartarazonbecabool());

		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM cuartarazonbeca WHERE cuartaRazonBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
