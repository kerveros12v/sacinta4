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
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaparentescos = null;
		$select = $db->query("SELECT * FROM `parentescos`");

		foreach ($select->fetchAll() as $parentescos) {
			$myparentescos = new Parentescos();
			///
			$myparentescos->set_idParentescos($parentescos['idParentescos']);
			$myparentescos->set_parentescocodigo($parentescos['parentescocodigo']);
			$myparentescos->set_parentesco($parentescos['parentesco']);
			$myparentescos->set_parentescosOculto($parentescos['parentescosOculto']);
			$myparentescos->set_parentescosAccion($parentescos['parentescosAccion']);
			$myparentescos->set_parentescosfecha($parentescos['parentescosfecha']);
			$myparentescos->set_parentescosuser($parentescos['parentescosuser']);
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
		$myparentescos->set_idParentescos($parentescos['idParentescos']);
		$myparentescos->set_parentescocodigo($parentescos['parentescocodigo']);
		$myparentescos->set_parentesco($parentescos['parentesco']);
		$myparentescos->set_parentescosOculto($parentescos['parentescosOculto']);
		$myparentescos->set_parentescosAccion($parentescos['parentescosAccion']);
		$myparentescos->set_parentescosfecha($parentescos['parentescosfecha']);
		$myparentescos->set_parentescosuser($parentescos['parentescosuser']);
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
		$insert->bindValue('idParentescos1', $parentesco->get_idParentescos());
		$insert->bindValue('parentescocodigo1', $parentesco->get_parentescocodigo());
		$insert->bindValue('parentesco1', $parentesco->get_parentesco());
		$insert->bindValue('parentescosOculto1', $parentesco->get_parentescosOculto());
		$insert->bindValue('parentescosAccion1', $parentesco->get_parentescosAccion());
		$insert->bindValue('parentescosfecha1', $parentesco->get_parentescosfecha());
		$insert->bindValue('parentescosuser1', $parentesco->get_parentescosuser());
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

		$actualizar->bindValue('idParentescos1', $parentesco->get_idParentescos());
		$actualizar->bindValue('parentescocodigo1', $parentesco->get_parentescocodigo());
		$actualizar->bindValue('parentesco1', $parentesco->get_parentesco());
		$actualizar->bindValue('parentescosOculto1', $parentesco->get_parentescosOculto());
		$actualizar->bindValue('parentescosAccion1', $parentesco->get_parentescosAccion());
		$actualizar->bindValue('parentescosfecha1', $parentesco->get_parentescosfecha());
		$actualizar->bindValue('parentescosuser1', $parentesco->get_parentescosuser());
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
