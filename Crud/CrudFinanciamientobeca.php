<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Financiamientobeca.php';

use Clasesphp\Financiamientobeca;

class CrudFinanciamientobeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$financiamientobeca = null;
		$select = $db->query('SELECT * FROM financiamientobeca;');
		foreach ($select->fetchAll() as $financiamientobeca) {
			$myfinanciamientobecaBeca = new Financiamientobeca();
			$myfinanciamientobecaBeca->setFinanciamientoBecaid($financiamientobeca['financiamientoBecaid']);
			$myfinanciamientobecaBeca->setFinanciamientoBeca($financiamientobeca['financiamientoBeca']);
			$myfinanciamientobecaBeca->setFinanciamientobecacodigo($financiamientobeca['financiamientobecacodigo']);
			$myfinanciamientobecaBeca->setFinanciamientobecaOculto($financiamientobeca['financiamientobecaOculto']);
			$myfinanciamientobecaBeca->setFinanciamientobecaAccion($financiamientobeca['financiamientobecaAccion']);
			$myfinanciamientobecaBeca->setFinanciamientobecafecha($financiamientobeca['financiamientobecafecha']);
			$myfinanciamientobecaBeca->setFinanciamientobecauser($financiamientobeca['financiamientobecauser']);
			$myfinanciamientobecaBeca->setFinanciamientobecabool($financiamientobeca['financiamientobecabool']);
			$listafinanciamientobeca[] = $myfinanciamientobecaBeca;
		}

		return $listafinanciamientobeca;
	}

	public function obtenerfinanciamientobecaBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM financiamientobeca WHERE financiamientoBecaid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$financiamientobeca = $select->fetch();
		$myfinanciamientobecaBeca = new Financiamientobeca();
		$myfinanciamientobecaBeca->setFinanciamientoBecaid($financiamientobeca['financiamientoBecaid']);
		$myfinanciamientobecaBeca->setFinanciamientoBeca($financiamientobeca['financiamientoBeca']);
		$myfinanciamientobecaBeca->setFinanciamientobecacodigo($financiamientobeca['financiamientobecacodigo']);
		$myfinanciamientobecaBeca->setFinanciamientobecaOculto($financiamientobeca['financiamientobecaOculto']);
		$myfinanciamientobecaBeca->setFinanciamientobecaAccion($financiamientobeca['financiamientobecaAccion']);
		$myfinanciamientobecaBeca->setFinanciamientobecafecha($financiamientobeca['financiamientobecafecha']);
		$myfinanciamientobecaBeca->setFinanciamientobecauser($financiamientobeca['financiamientobecauser']);
		$myfinanciamientobecaBeca->setFinanciamientobecabool($financiamientobeca['financiamientobecabool']);
		return $myfinanciamientobecaBeca;
	}
	//
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT financiamientoBeca FROM financiamientobeca WHERE financiamientobecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$financiamientobeca = $select->fetch();

		$myfinanciamientobecaBeca = ($financiamientobeca['financiamientoBeca']);

		return $myfinanciamientobecaBeca;
	}
	public function obtenerCodigobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT financiamientobecacodigo FROM financiamientobeca WHERE financiamientobecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$financiamientobeca = $select->fetch();

		$myfinanciamientobecaBeca = ($financiamientobeca['financiamientobecacodigo']);

		return $myfinanciamientobecaBeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT financiamientoBeca FROM financiamientobeca WHERE financiamientoBecaid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$financiamientobeca = $select->fetch();

		$myfinanciamientobecaBeca = ($financiamientobeca['financiamientoBeca']);

		return $myfinanciamientobecaBeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT financiamientobecacodigo FROM financiamientobeca WHERE financiamientoBecaid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$financiamientobeca = $select->fetch();

		$myfinanciamientobecaBeca = ($financiamientobeca['financiamientobecacodigo']);

		return $myfinanciamientobecaBeca;
	}

	public function actualizar($financiamientobeca)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `financiamientobeca`
		SET
		`financiamientoBecaid` = :financiamientoBecaid1,
		`financiamientobecacodigo` = :financiamientobecacodigo1,
		`financiamientoBeca` = :financiamientoBeca1,
		`financiamientobecaOculto` = :financiamientobecaOculto1,
		`financiamientobecaAccion` = :financiamientobecaAccion1,
		`financiamientobecafecha` = :financiamientobecafecha1,
		`financiamientobecauser` = :financiamientobecauser1,
		`financiamientobecabool`=:financiamientobecabool1
		WHERE `financiamientoBecaid` = :financiamientoBecaid1;');
		$actualizar->bindValue('financiamientoBecaid1', $financiamientobeca->getFinanciamientoBecaid());
		$actualizar->bindValue('financiamientobecacodigo1', $financiamientobeca->getFinanciamientobecacodigo());
		$actualizar->bindValue('financiamientoBeca1', $financiamientobeca->getFinanciamientoBeca());
		$actualizar->bindValue('financiamientobecaOculto1', $financiamientobeca->getFinanciamientobecaOculto());
		$actualizar->bindValue('financiamientobecaAccion1', $financiamientobeca->getFinanciamientobecaAccion());
		$actualizar->bindValue('financiamientobecafecha1', $financiamientobeca->getFinanciamientobecafecha());
		$actualizar->bindValue('financiamientobecauser1', $financiamientobeca->getFinanciamientobecauser());
		$actualizar->bindValue('financiamientobecabool1', $financiamientobeca->getFinanciamientobecabool());
		$actualizar->execute();
	}

	public function insertar($financiamientobeca)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `financiamientobeca`
		(`financiamientoBecaid`,
		`financiamientobecacodigo`,
		`financiamientoBeca`,
		`financiamientobecaOculto`,
		`financiamientobecaAccion`,
		`financiamientobecafecha`,
		`financiamientobecauser`,
		`financiamientobecabool`)
		VALUES
		(:financiamientoBecaid1,
		:financiamientobecacodigo1,
		:financiamientoBeca1,
		:financiamientobecaOculto1,
		:financiamientobecaAccion1,
		:financiamientobecafecha1,
		:financiamientobecauser1,
		:financiamientobecabool1);');
		$insert->bindValue('financiamientoBecaid1', $financiamientobeca->getFinanciamientoBecaid());
		$insert->bindValue('financiamientobecacodigo1', $financiamientobeca->getFinanciamientobecacodigo());
		$insert->bindValue('financiamientoBeca1', $financiamientobeca->getFinanciamientoBeca());
		$insert->bindValue('financiamientobecaOculto1', $financiamientobeca->getFinanciamientobecaOculto());
		$insert->bindValue('financiamientobecaAccion1', $financiamientobeca->getFinanciamientobecaAccion());
		$insert->bindValue('financiamientobecafecha1', $financiamientobeca->getFinanciamientobecafecha());
		$insert->bindValue('financiamientobecauser1', $financiamientobeca->getFinanciamientobecauser());
		$insert->bindValue('financiamientobecabool1', $financiamientobeca->getFinanciamientobecabool());
		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM financiamientobeca WHERE financiamientoBecaid=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
