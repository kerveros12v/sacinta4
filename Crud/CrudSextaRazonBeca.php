<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/SextaRazonBeca.php';

use Clasesphp\Sextarazonbeca;

class CrudSextarazonbeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$sextarazon = null;
		$select = $db->query('SELECT * FROM sextarazonbeca;');
		foreach ($select->fetchAll() as $sextarazon) {
			$mysextarazonBeca = new Sextarazonbeca();
			$mysextarazonBeca->setSextaRazonBecaId($sextarazon['sextaRazonBecaId']);
			$mysextarazonBeca->setSextaRazonBeca($sextarazon['sextaRazonBeca']);
			$mysextarazonBeca->setSextarazonbecacodigo($sextarazon['sextarazonbecacodigo']);
			$mysextarazonBeca->setSextarazonbecaOculto($sextarazon['sextarazonbecaOculto']);
			$mysextarazonBeca->setSextarazonbecaAccion($sextarazon['sextarazonbecaAccion']);
			$mysextarazonBeca->setSextarazonbecafecha($sextarazon['sextarazonbecafecha']);
			$mysextarazonBeca->setSextarazonbecauser($sextarazon['sextarazonbecauser']);
			$listasextarazon[] = $mysextarazonBeca;
		}

		return $listasextarazon;
	}

	public function obtenersextarazonBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM sextarazonbeca WHERE sextaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sextarazon = $select->fetch();
		$mysextarazonBeca = new sextarazonBeca();
		$mysextarazonBeca->setSextaRazonBecaId($sextarazon['sextaRazonBecaId']);
		$mysextarazonBeca->setSextaRazonBeca($sextarazon['sextaRazonBeca']);
		$mysextarazonBeca->setSextarazonbecacodigo($sextarazon['sextarazonbecacodigo']);
		$mysextarazonBeca->setSextarazonbecaOculto($sextarazon['sextarazonbecaOculto']);
		$mysextarazonBeca->setSextarazonbecaAccion($sextarazon['sextarazonbecaAccion']);
		$mysextarazonBeca->setSextarazonbecafecha($sextarazon['sextarazonbecafecha']);
		$mysextarazonBeca->setSextarazonbecauser($sextarazon['sextarazonbecauser']);

		return $mysextarazonBeca;
	}

	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT sextaRazonBeca FROM sextarazonbeca WHERE sextaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sextarazon = $select->fetch();

		$mysextarazonBeca = ($sextarazon['sextaRazonBeca']);

		return $mysextarazonBeca;
	}

	public function actualizar($sextarazon)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `sextarazonbeca`
		SET
		`sextaRazonBecaId` = :sextaRazonBecaId1,
		`sextaRazonBeca` = :sextaRazonBeca1,
		`sextarazonbecacodigo` = :sextarazonbecacodigo1,
		`sextarazonbecaOculto` = :sextarazonbecaOculto1,
		`sextarazonbecaAccion` = :sextarazonbecaAccion1,
		`sextarazonbecafecha` = :sextarazonbecafecha1,
		`sextarazonbecauser` = :sextarazonbecauser1
		WHERE `sextaRazonBecaId` = :sextaRazonBecaId1;');
		$actualizar->bindValue('sextaRazonBecaId1', $sextarazon->getSextaRazonBecaId());
		$actualizar->bindValue('sextarazonbecacodigo1', $sextarazon->getSextarazonbecacodigo());
		$actualizar->bindValue('sextaRazonBeca1', $sextarazon->getSextaRazonBeca());
		$actualizar->bindValue('sextarazonbecaOculto1', $sextarazon->getSextarazonbecaOculto());
		$actualizar->bindValue('sextarazonbecaAccion1', $sextarazon->getSextarazonbecaAccion());
		$actualizar->bindValue('sextarazonbecafecha1', $sextarazon->getSextarazonbecafecha());
		$actualizar->bindValue('sextarazonbecauser1', $sextarazon->getSextarazonbecauser());
		$actualizar->execute();
	}

	public function insertar($sextarazon)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `sextarazonbeca`
		(`sextaRazonBecaId`,
		`sextaRazonBeca`,
		`sextarazonbecacodigo`,
		`sextarazonbecaOculto`,
		`sextarazonbecaAccion`,
		`sextarazonbecafecha`,
		`sextarazonbecauser`)
		VALUES
		(:sextaRazonBecaId1,
		:sextaRazonBeca1,
		:sextarazonbecacodigo1,
		:sextarazonbecaOculto1,
		:sextarazonbecaAccion1,
		:sextarazonbecafecha1,
		:sextarazonbecauser1);');
		$insert->bindValue('sextaRazonBecaId1', $sextarazon->getSextaRazonBecaId());
		$insert->bindValue('sextarazonbecacodigo1', $sextarazon->getSextarazonbecacodigo());
		$insert->bindValue('sextaRazonBeca1', $sextarazon->getSextaRazonBeca());
		$insert->bindValue('sextarazonbecaOculto1', $sextarazon->getSextarazonbecaOculto());
		$insert->bindValue('sextarazonbecaAccion1', $sextarazon->getSextarazonbecaAccion());
		$insert->bindValue('sextarazonbecafecha1', $sextarazon->getSextarazonbecafecha());
		$insert->bindValue('sextarazonbecauser1', $sextarazon->getSextarazonbecauser());
		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM sextarazonbeca WHERE sextaRazonBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
