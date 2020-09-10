<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Parentescos.php");

use Clasesphp\Parentescos;

class CrudParentescos
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaparentescos = null;
		$select = $db->query("SELECT * FROM `parentescos`");

		foreach ($select->fetchAll() as $parentescos) {
			$myparentescos = new Parentescos();
			///
			$myparentescos->setIdParentescos($parentescos['idParentescos']);
			$myparentescos->setParentescocodigo($parentescos['parentescocodigo']);
			$myparentescos->setParentesco($parentescos['parentesco']);
			$myparentescos->setParentescosOculto($parentescos['parentescosOculto']);
			$myparentescos->setParentescosAccion($parentescos['parentescosAccion']);
			$myparentescos->setParentescosfecha($parentescos['parentescosfecha']);
			$myparentescos->setParentescosuser($parentescos['parentescosuser']);
			////
			$listaparentescos[] = $myparentescos;
		}
		return $listaparentescos;
	}
	public function obtenerParentesco($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT `parentesco` FROM `parentescos` WHERE `idParentescos`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$parentescos = $select->fetch();
		$myparentescos = new Parentescos();
		///
		$myparentescos->setIdParentescos($parentescos['idParentescos']);
		$myparentescos->setParentescocodigo($parentescos['parentescocodigo']);
		$myparentescos->setParentesco($parentescos['parentesco']);
		$myparentescos->setParentescosOculto($parentescos['parentescosOculto']);
		$myparentescos->setParentescosAccion($parentescos['parentescosAccion']);
		$myparentescos->setParentescosfecha($parentescos['parentescosfecha']);
		$myparentescos->setParentescosuser($parentescos['parentescosuser']);
		return $myparentescos;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT `parentesco` FROM `parentescos` WHERE `idParentescos`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$parentesco = $select->fetch();
		$myparentesco = ($parentesco['parentesco']);
		return $myparentesco;
	}
	public function insertar($parentesco)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `parentescos`
			(`idParentescos`,
			`parentescocodigo`,
			`parentesco`,
			`parentescosOculto`,
			`parentescosAccion`,
			`parentescosfecha`,
			`parentescosuser`)
			VALUES
			(:idParentescos1,
			:parentescocodigo1,
			:parentesco1,
			:parentescosOculto1,
			:parentescosAccion1,
			:parentescosfecha1,
			:parentescosuser1);");
		$insert->bindValue('idParentescos1', $parentesco->getIdParentescos());
		$insert->bindValue('parentescocodigo1', $parentesco->getParentescocodigo());
		$insert->bindValue('parentesco1', $parentesco->getParentesco());
		$insert->bindValue('parentescosOculto1', $parentesco->getParentescosOculto());
		$insert->bindValue('parentescosAccion1', $parentesco->getParentescosAccion());
		$insert->bindValue('parentescosfecha1', $parentesco->getParentescosfecha());
		$insert->bindValue('parentescosuser1', $parentesco->getParentescosuser());
		$insert->execute();
	}
	public function actualizar($parentesco)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `parentescos`
		SET
		`idParentescos` = :idParentescos1,
		`parentescocodigo` = :parentescocodigo1,
		`parentesco` = :parentesco1,
		`parentescosOculto` = :parentescosOculto1,
		`parentescosAccion` = :parentescosAccion1,
		`parentescosfecha` = :parentescosfecha1,
		`parentescosuser` = :parentescosuser1
		WHERE `idParentescos` = :idParentescos1;");

		$actualizar->bindValue('idParentescos1', $parentesco->getIdParentescos());
		$actualizar->bindValue('parentescocodigo1', $parentesco->getParentescocodigo());
		$actualizar->bindValue('parentesco1', $parentesco->getParentesco());
		$actualizar->bindValue('parentescosOculto1', $parentesco->getParentescosOculto());
		$actualizar->bindValue('parentescosAccion1', $parentesco->getParentescosAccion());
		$actualizar->bindValue('parentescosfecha1', $parentesco->getParentescosfecha());
		$actualizar->bindValue('parentescosuser1', $parentesco->getParentescosuser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `parentescos` WHERE idParentescos=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
