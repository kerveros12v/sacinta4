<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/PrimeraRazonBeca.php';

use Clasesphp\PrimeraRazonBeca;

class CrudPrimeraRazonBeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$primerarazon = null;
		$select = $db->query('SELECT * FROM primerarazonbeca;');
		foreach ($select->fetchAll() as $primerarazon) {
			$myprimeraRazonBeca = new PrimeraRazonBeca();
			$myprimeraRazonBeca->setPrimeraRazonBecaId($primerarazon['primeraRazonBecaId']);
			$myprimeraRazonBeca->setPrimeraRazonBeca($primerarazon['primeraRazonBeca']);
			$myprimeraRazonBeca->setPrimerarazonbecacodigo($primerarazon['primerarazonbecacodigo']);
			$myprimeraRazonBeca->setPrimerarazonbecaOculto($primerarazon['primerarazonbecaOculto']);
			$myprimeraRazonBeca->setPrimerarazonbecaAccion($primerarazon['primerarazonbecaAccion']);
			$myprimeraRazonBeca->setPrimerarazonbecafecha($primerarazon['primerarazonbecafecha']);
			$myprimeraRazonBeca->setPrimerarazonbecauser($primerarazon['primerarazonbecauser']);
			$myprimeraRazonBeca->setPrimerarazonbecabool($primerarazon['primerarazonbecabool']);
			$listaprimerarazon[] = $myprimeraRazonBeca;
		}

		return $listaprimerarazon;
	}

	public function obtenerPrimeraRazonBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM primerarazonbeca WHERE primeraRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$primerarazon = $select->fetch();
		$myprimeraRazonBeca = new PrimeraRazonBeca();
		$myprimeraRazonBeca->setPrimeraRazonBecaId($primerarazon['primeraRazonBecaId']);
		$myprimeraRazonBeca->setPrimeraRazonBeca($primerarazon['primeraRazonBeca']);
		$myprimeraRazonBeca->setPrimerarazonbecacodigo($primerarazon['primerarazonbecacodigo']);
		$myprimeraRazonBeca->setPrimerarazonbecaOculto($primerarazon['primerarazonbecaOculto']);
		$myprimeraRazonBeca->setPrimerarazonbecaAccion($primerarazon['primerarazonbecaAccion']);
		$myprimeraRazonBeca->setPrimerarazonbecafecha($primerarazon['primerarazonbecafecha']);
		$myprimeraRazonBeca->setPrimerarazonbecauser($primerarazon['primerarazonbecauser']);
		$myprimeraRazonBeca->setPrimerarazonbecabool($primerarazon['primerarazonbecabool']);

		return $myprimeraRazonBeca;
	}
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT primeraRazonBeca FROM primerarazonbeca WHERE primerarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$primerarazon = $select->fetch();

		$myprimeraRazonBeca = ($primerarazon['primeraRazonBeca']);

		return $myprimeraRazonBeca;
	}
	public function obtenerCodigobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT primerarazonbecacodigo FROM primerarazonbeca WHERE primerarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$primerarazon = $select->fetch();

		$myprimeraRazonBeca = ($primerarazon['primerarazonbecacodigo']);

		return $myprimeraRazonBeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT primeraRazonBeca FROM primerarazonbeca WHERE primeraRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$primerarazon = $select->fetch();

		$myprimeraRazonBeca = ($primerarazon['primeraRazonBeca']);

		return $myprimeraRazonBeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT primerarazonbecacodigo FROM primerarazonbeca WHERE primeraRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$primerarazon = $select->fetch();

		$myprimeraRazonBeca = ($primerarazon['primerarazonbecacodigo']);

		return $myprimeraRazonBeca;
	}
	public function actualizar($primerarazon)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `primerarazonbeca`
		SET
		`primeraRazonBecaId` = :primeraRazonBecaId1,
		`primerarazonbecacodigo` = :primerarazonbecacodigo1,
		`primeraRazonBeca` = :primeraRazonBeca1,
		`primerarazonbecaOculto` = :primerarazonbecaOculto1,
		`primerarazonbecaAccion` = :primerarazonbecaAccion1,
		`primerarazonbecafecha` = :primerarazonbecafecha1,
		`primerarazonbecauser` = :primerarazonbecauser1,
		`primerarazonbecabool`=:primerarazonbecabool1
		WHERE `primeraRazonBecaId` = :primeraRazonBecaId1;');
		$actualizar->bindValue('primeraRazonBecaId1', $primerarazon->getPrimeraRazonBecaId());
		$actualizar->bindValue('primerarazonbecacodigo1', $primerarazon->getPrimerarazonbecacodigo());
		$actualizar->bindValue('primeraRazonBeca1', $primerarazon->getPrimeraRazonBeca());
		$actualizar->bindValue('primerarazonbecaOculto1', $primerarazon->getPrimerarazonbecaOculto());
		$actualizar->bindValue('primerarazonbecaAccion1', $primerarazon->getPrimerarazonbecaAccion());
		$actualizar->bindValue('primerarazonbecafecha1', $primerarazon->getPrimerarazonbecafecha());
		$actualizar->bindValue('primerarazonbecauser1', $primerarazon->getPrimerarazonbecauser());
		$actualizar->bindValue('primerarazonbecabool1', $primerarazon->getPrimerarazonbecabool());
		$actualizar->execute();
	}

	public function insertar($primerarazon)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `primerarazonbeca`
		(`primeraRazonBecaId`,
		`primerarazonbecacodigo`,
		`primeraRazonBeca`,
		`primerarazonbecaOculto`,
		`primerarazonbecaAccion`,
		`primerarazonbecafecha`,
		`primerarazonbecauser`,
		`primerarazonbecabool`)
		VALUES
		(:primeraRazonBecaId1,
		:primerarazonbecacodigo1,
		:primeraRazonBeca1,
		:primerarazonbecaOculto1,
		:primerarazonbecaAccion1,
		:primerarazonbecafecha1,
		:primerarazonbecauser1,
		:primerarazonbecabool1);');
		$insert->bindValue('primeraRazonBecaId1', $primerarazon->getPrimeraRazonBecaId());
		$insert->bindValue('primerarazonbecacodigo1', $primerarazon->getPrimerarazonbecacodigo());
		$insert->bindValue('primeraRazonBeca1', $primerarazon->getPrimeraRazonBeca());
		$insert->bindValue('primerarazonbecaOculto1', $primerarazon->getPrimerarazonbecaOculto());
		$insert->bindValue('primerarazonbecaAccion1', $primerarazon->getPrimerarazonbecaAccion());
		$insert->bindValue('primerarazonbecafecha1', $primerarazon->getPrimerarazonbecafecha());
		$insert->bindValue('primerarazonbecauser1', $primerarazon->getPrimerarazonbecauser());
		$insert->bindValue('primerarazonbecabool1', $primerarazon->getPrimerarazonbecabool());

		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM primerarazonbeca WHERE primeraRazonBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
