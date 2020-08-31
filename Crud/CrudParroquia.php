<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Parroquia.php");

use Clasesphp\Parroquia;

class CrudParroquia
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();

	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listaparroquia = null;
		$select = $db->query("SELECT * FROM parroquias;");
		foreach ($select->fetchAll() as $parroquia1) {
			$myparroquia = new Parroquia();
			$myparroquia->set_idparroquias($parroquia1['idparroquias']);
			$myparroquia->set_parroquiascodigo($parroquia1['parroquiascodigo']);
			$myparroquia->set_parroquia($parroquia1['parroquia']);
			$myparroquia->set_parroquiasCanton($parroquia1['parroquiasCanton']);
			$myparroquia->set_parroquiaOculto($parroquia1['parroquiaOculto']);
			$myparroquia->set_parroquiaAccion($parroquia1['parroquiaAccion']);
			$myparroquia->set_parroquiafecha($parroquia1['parroquiafecha']);
			$myparroquia->set_parroquiasUsuario($parroquia1['parroquiasUsuario']);
			$listaparroquia[] = $myparroquia;
		}
		return $listaparroquia;
	}
	public function mostrarporCiudad($id)
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
		$listaparroquia = null;
		$select = $db->prepare("SELECT * FROM parroquias WHERE parroquiasCanton=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		foreach ($select->fetchAll() as $parroquia1) {
			$myparroquia = new Parroquia();
			$myparroquia->set_idparroquias($parroquia1['idparroquias']);
			$myparroquia->set_parroquiascodigo($parroquia1['parroquiascodigo']);
			$myparroquia->set_parroquia($parroquia1['parroquia']);
			$myparroquia->set_parroquiasCanton($parroquia1['parroquiasCanton']);
			$myparroquia->set_parroquiaOculto($parroquia1['parroquiaOculto']);
			$myparroquia->set_parroquiaAccion($parroquia1['parroquiaAccion']);
			$myparroquia->set_parroquiafecha($parroquia1['parroquiafecha']);
			$myparroquia->set_parroquiasUsuario($parroquia1['parroquiasUsuario']);
			$listaparroquia[] = $myparroquia;
		}
		return $listaparroquia;
	}
	public function obtenerParroquia($id)
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
		$select = $db->prepare("SELECT * FROM parroquias WHERE idparroquias=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$parroquia1 = $select->fetch();
		$myparroquia = new Parroquia();
		$myparroquia->set_idparroquias($parroquia1['idparroquias']);
		$myparroquia->set_parroquiascodigo($parroquia1['parroquiascodigo']);
		$myparroquia->set_parroquia($parroquia1['parroquia']);
		$myparroquia->set_parroquiasCanton($parroquia1['parroquiasCanton']);
		$myparroquia->set_parroquiaOculto($parroquia1['parroquiaOculto']);
		$myparroquia->set_parroquiaAccion($parroquia1['parroquiaAccion']);
		$myparroquia->set_parroquiafecha($parroquia1['parroquiafecha']);
		$myparroquia->set_parroquiasUsuario($parroquia1['parroquiasUsuario']);


		return $myparroquia;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
		$select = $db->prepare("SELECT * FROM parroquias WHERE idparroquias=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$parroquia1 = $select->fetch();
		$myparroquia = $parroquia1['parroquia'];
		//print_r("<script>".$myparroquia."</script>");
		return $myparroquia;
	}
	public  function existe($id, $nom)
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
		$select = $db->prepare("SELECT * FROM parroquias where parroquiascodigo=:id and parroquia=:nom");
		$select->bindValue('id', $id);
		$select->bindValue('nom', $nom);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public function insertar($parro1)
	{
		try {
			$db = Db::conectar();
			$insert = $db->prepare('INSERT INTO `parroquias`   (`idparroquias`,`parroquiascodigo`,`parroquia`,`parroquiasCanton`,`parroquiaOculto`,`parroquiaAccion`,`parroquiafecha`,`parroquiasUsuario`)
			   VALUES
			   (:idparroquias,:parroquiascodigo,:parroquia,:parroquiasCanton,:parroquiaOculto,:parroquiaAccion,:parroquiafecha,:parroquiasUsuario);');
			$insert->bindValue('idparroquias', $parro1->get_idparroquias());
			$insert->bindValue('parroquiascodigo', $parro1->get_parroquiascodigo());
			$insert->bindValue('parroquia', $parro1->get_parroquia());
			$insert->bindValue('parroquiasCanton', $parro1->get_parroquiasCanton());
			$insert->bindValue('parroquiaOculto', $parro1->get_parroquiaOculto());
			$insert->bindValue('parroquiaAccion', $parro1->get_parroquiaAccion());
			$insert->bindValue('parroquiafecha', $parro1->get_parroquiafecha());
			$insert->bindValue('parroquiasUsuario', $parro1->get_parroquiasUsuario());
			$insert->execute();
		} catch (\Exception $ex) {
			echo ($ex->getMessage());
		}
	}
	public function actualizar($parro1)
	{
			$db = Db::conectar();
			$actualizar = $db->prepare('UPDATE `parroquias`
			SET
			`idparroquias` = :idparroquias1,
			`parroquiascodigo` = :parroquiascodigo1,
			`parroquia` = :parroquia1,
			`parroquiasCanton` = :parroquiasCanton1,
			`parroquiaOculto` = :parroquiaOculto1,
			`parroquiaAccion` = :parroquiaAccion1,
			`parroquiafecha` = :parroquiafecha1,
			`parroquiasUsuario` = :parroquiasUsuario1
			WHERE `idparroquias` = :idparroquias1;');
			$actualizar->bindValue('idparroquias1', $parro1->get_idparroquias());
			$actualizar->bindValue('parroquiascodigo1', $parro1->get_parroquiascodigo());
			$actualizar->bindValue('parroquia1', $parro1->get_parroquia());
			$actualizar->bindValue('parroquiasCanton1', $parro1->get_parroquiasCanton());
			$actualizar->bindValue('parroquiaOculto1', $parro1->get_parroquiaOculto());
			$actualizar->bindValue('parroquiaAccion1', $parro1->get_parroquiaAccion());
			$actualizar->bindValue('parroquiafecha1', $parro1->get_parroquiafecha());
			$actualizar->bindValue('parroquiasUsuario1', $parro1->get_parroquiasUsuario());
			$actualizar->execute();

	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM parroquias WHERE idparroquias=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
