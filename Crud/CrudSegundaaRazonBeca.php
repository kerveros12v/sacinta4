<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Segundarazonbeca.php';

use Clasesphp\Segundarazonbeca;

class CrudsegundarazonBeca
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , ,
		$db = Db::conectar();
		$segundarazon = null;
		$select = $db->query('SELECT * FROM segundarazonbeca;');
		foreach ($select->fetchAll() as $segundarazon) {
			$mysegundarazonbeca = new Segundarazonbeca();
			$mysegundarazonbeca->setSegundaRazonBecaId($segundarazon['segundaRazonBecaId']);
			$mysegundarazonbeca->setSegundaRazonBeca($segundarazon['segundaRazonBeca']);
			$mysegundarazonbeca->setSegundarazonbecacodigo($segundarazon['segundarazonbecacodigo']);
			$mysegundarazonbeca->setSegundarazonbecaOculto($segundarazon['segundarazonbecaOculto']);
			$mysegundarazonbeca->setSegundarazonbecaAccion($segundarazon['segundarazonbecaAccion']);
			$mysegundarazonbeca->setSegundarazonbecafecha($segundarazon['segundarazonbecafecha']);
			$mysegundarazonbeca->setSegundarazonbecauser($segundarazon['segundarazonbecauser']);
			$mysegundarazonbeca->setSegundarazonbecabool($segundarazon['segundarazonbecabool']);

			$listasegundarazon[] = $mysegundarazonbeca;
		}

		return $listasegundarazon;
	}

	public function obtenersegundarazonBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM segundarazonbeca WHERE segundaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$segundarazon = $select->fetch();
		$mysegundarazonbeca = new Segundarazonbeca();
		$mysegundarazonbeca->setSegundaRazonBecaId($segundarazon['segundaRazonBecaId']);
		$mysegundarazonbeca->setSegundaRazonBeca($segundarazon['segundaRazonBeca']);
		$mysegundarazonbeca->setSegundarazonbecacodigo($segundarazon['segundarazonbecacodigo']);
		$mysegundarazonbeca->setSegundarazonbecaOculto($segundarazon['segundarazonbecaOculto']);
		$mysegundarazonbeca->setSegundarazonbecaAccion($segundarazon['segundarazonbecaAccion']);
		$mysegundarazonbeca->setSegundarazonbecafecha($segundarazon['segundarazonbecafecha']);
		$mysegundarazonbeca->setSegundarazonbecauser($segundarazon['segundarazonbecauser']);
		$mysegundarazonbeca->setSegundarazonbecabool($segundarazon['segundarazonbecabool']);
		return $mysegundarazonbeca;
	}
	public function obtenerDatobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT segundaRazonBeca FROM segundarazonbeca WHERE segundarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$segundarazon = $select->fetch();

		$mysegundarazonbeca = ($segundarazon['segundaRazonBeca']);

		return $mysegundarazonbeca;
	}
	public function obtenerCodigobool($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT segundarazonbecacodigo FROM segundarazonbeca WHERE segundarazonbecabool=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$segundarazon = $select->fetch();

		$mysegundarazonbeca = ($segundarazon['segundarazonbecacodigo']);

		return $mysegundarazonbeca;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT segundaRazonBeca FROM segundarazonbeca WHERE segundaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$segundarazon = $select->fetch();

		$mysegundarazonbeca = ($segundarazon['segundaRazonBeca']);

		return $mysegundarazonbeca;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT segundarazonbecacodigo FROM segundarazonbeca WHERE segundaRazonBecaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$segundarazon = $select->fetch();

		$mysegundarazonbeca = ($segundarazon['segundarazonbecacodigo']);

		return $mysegundarazonbeca;
	}
	public function actualizar($segundarazon)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `segundarazonbeca`
		SET
		`segundaRazonBecaId` = :segundaRazonBecaId1,
		`segundarazonbecacodigo` = :segundarazonbecacodigo1,
		`segundaRazonBeca` = :segundaRazonBeca1,
		`segundarazonbecaOculto` = :segundarazonbecaOculto1,
		`segundarazonbecaAccion` = :segundarazonbecaAccion1,
		`segundarazonbecafecha` = :segundarazonbecafecha1,
		`segundarazonbecauser` = :segundarazonbecauser1,
		`segundarazonbecabool`=:segundarazonbecabool1
		WHERE `segundaRazonBecaId` = :segundaRazonBecaId1;');
		$actualizar->bindValue('segundaRazonBecaId1', $segundarazon->getSegundaRazonBecaId());
		$actualizar->bindValue('segundarazonbecacodigo1', $segundarazon->getSegundarazonbecacodigo());
		$actualizar->bindValue('segundaRazonBeca1', $segundarazon->getSegundaRazonBeca());
		$actualizar->bindValue('segundarazonbecaOculto1', $segundarazon->getSegundarazonbecaOculto());
		$actualizar->bindValue('segundarazonbecaAccion1', $segundarazon->getSegundarazonbecaAccion());
		$actualizar->bindValue('segundarazonbecafecha1', $segundarazon->getSegundarazonbecafecha());
		$actualizar->bindValue('segundarazonbecauser1', $segundarazon->getSegundarazonbecauser());
		$actualizar->bindValue('segundarazonbecabool1', $segundarazon->getSegundarazonbecabool());
		$actualizar->execute();
	}

	public function insertar($segundarazon)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `segundarazonbeca`
		(`segundaRazonBecaId`,
		`segundarazonbecacodigo`,
		`segundaRazonBeca`,
		`segundarazonbecaOculto`,
		`segundarazonbecaAccion`,
		`segundarazonbecafecha`,
		`segundarazonbecauser`,
		`segundarazonbecabool`)
		VALUES
		(:segundaRazonBecaId1,
		:segundarazonbecacodigo1,
		:segundaRazonBeca1,
		:segundarazonbecaOculto1,
		:segundarazonbecaAccion1,
		:segundarazonbecafecha1,
		:segundarazonbecauser1,
		:segundarazonbecabool1);');
		$insert->bindValue('segundaRazonBecaId1', $segundarazon->getSegundaRazonBecaId());
		$insert->bindValue('segundarazonbecacodigo1', $segundarazon->getSegundarazonbecacodigo());
		$insert->bindValue('segundaRazonBeca1', $segundarazon->getSegundaRazonBeca());
		$insert->bindValue('segundarazonbecaOculto1', $segundarazon->getSegundarazonbecaOculto());
		$insert->bindValue('segundarazonbecaAccion1', $segundarazon->getSegundarazonbecaAccion());
		$insert->bindValue('segundarazonbecafecha1', $segundarazon->getSegundarazonbecafecha());
		$insert->bindValue('segundarazonbecauser1', $segundarazon->getSegundarazonbecauser());
		$insert->bindValue('segundarazonbecabool1', $segundarazon->getSegundarazonbecabool());

		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM segundarazonbeca WHERE segundaRazonBecaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
