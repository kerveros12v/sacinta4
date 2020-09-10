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
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listaparroquia = null;
		$select = $db->query("SELECT * FROM parroquias;");
		foreach ($select->fetchAll() as $parroquia1) {
			$myparroquia = new Parroquia();
			$myparroquia->setIdparroquias($parroquia1['idparroquias']);
			$myparroquia->setParroquiascodigo($parroquia1['parroquiascodigo']);
			$myparroquia->setParroquia($parroquia1['parroquia']);
			$myparroquia->setParroquiasCanton($parroquia1['parroquiasCanton']);
			$myparroquia->setParroquiaOculto($parroquia1['parroquiaOculto']);
			$myparroquia->setParroquiaAccion($parroquia1['parroquiaAccion']);
			$myparroquia->setParroquiafecha($parroquia1['parroquiafecha']);
			$myparroquia->setParroquiasUsuario($parroquia1['parroquiasUsuario']);
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
			$myparroquia->setIdparroquias($parroquia1['idparroquias']);
			$myparroquia->setParroquiascodigo($parroquia1['parroquiascodigo']);
			$myparroquia->setParroquia($parroquia1['parroquia']);
			$myparroquia->setParroquiasCanton($parroquia1['parroquiasCanton']);
			$myparroquia->setParroquiaOculto($parroquia1['parroquiaOculto']);
			$myparroquia->setParroquiaAccion($parroquia1['parroquiaAccion']);
			$myparroquia->setParroquiafecha($parroquia1['parroquiafecha']);
			$myparroquia->setParroquiasUsuario($parroquia1['parroquiasUsuario']);
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
		$myparroquia->setIdparroquias($parroquia1['idparroquias']);
		$myparroquia->setParroquiascodigo($parroquia1['parroquiascodigo']);
		$myparroquia->setParroquia($parroquia1['parroquia']);
		$myparroquia->setParroquiasCanton($parroquia1['parroquiasCanton']);
		$myparroquia->setParroquiaOculto($parroquia1['parroquiaOculto']);
		$myparroquia->setParroquiaAccion($parroquia1['parroquiaAccion']);
		$myparroquia->setParroquiafecha($parroquia1['parroquiafecha']);
		$myparroquia->setParroquiasUsuario($parroquia1['parroquiasUsuario']);


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
			$insert->bindValue('idparroquias', $parro1->getIdparroquias());
			$insert->bindValue('parroquiascodigo', $parro1->getParroquiascodigo());
			$insert->bindValue('parroquia', $parro1->getParroquia());
			$insert->bindValue('parroquiasCanton', $parro1->getParroquiasCanton());
			$insert->bindValue('parroquiaOculto', $parro1->getParroquiaOculto());
			$insert->bindValue('parroquiaAccion', $parro1->getParroquiaAccion());
			$insert->bindValue('parroquiafecha', $parro1->getParroquiafecha());
			$insert->bindValue('parroquiasUsuario', $parro1->getParroquiasUsuario());
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
		$actualizar->bindValue('idparroquias1', $parro1->getIdparroquias());
		$actualizar->bindValue('parroquiascodigo1', $parro1->getParroquiascodigo());
		$actualizar->bindValue('parroquia1', $parro1->getParroquia());
		$actualizar->bindValue('parroquiasCanton1', $parro1->getParroquiasCanton());
		$actualizar->bindValue('parroquiaOculto1', $parro1->getParroquiaOculto());
		$actualizar->bindValue('parroquiaAccion1', $parro1->getParroquiaAccion());
		$actualizar->bindValue('parroquiafecha1', $parro1->getParroquiafecha());
		$actualizar->bindValue('parroquiasUsuario1', $parro1->getParroquiasUsuario());
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
