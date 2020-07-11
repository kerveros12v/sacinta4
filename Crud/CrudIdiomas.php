<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Idiomas.php");

use Clasesphp\Idiomas;

class CrudIdiomas
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
		$listaidiomaAncestral = null;
		$select = $db->query('SELECT * FROM idiomasancestrales');

		foreach ($select->fetchAll() as $idiomaAncestral) {
			$myidiomaAncestral = new Idiomas();
			$myidiomaAncestral->set_ididiomaAncestral($idiomaAncestral['ididiomaAncestral']);
			$myidiomaAncestral->set_idioma($idiomaAncestral['idioma']);
			$myidiomaAncestral->set_idiomaetnia($idiomaAncestral['idiomaetnia']);
			$myidiomaAncestral->set_idiomaancestralOculto($idiomaAncestral['idiomaancestralOculto']);
			$myidiomaAncestral->set_idiomaancestralAccion($idiomaAncestral['idiomaancestralAccion']);
			$myidiomaAncestral->set_idiomaancestralfecha($idiomaAncestral['idiomaancestralfecha']);
			$myidiomaAncestral->set_idiomaancestraluser($idiomaAncestral['idiomaancestraluser']);
			$myidiomaAncestral->set_idiomasancestralcodigo($idiomaAncestral['idiomasancestralcodigo']);
			$listaidiomaAncestral[] = $myidiomaAncestral;
		}
		return $listaidiomaAncestral;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM idiomasancestrales WHERE ididiomaAncestral=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerIdiomaAncestral($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM idiomasancestrales WHERE ididiomaAncestral=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$idiomaAncestral = $select->fetch();
		$myidiomaAncestral = new Idiomas();
		$myidiomaAncestral->set_ididiomaAncestral($idiomaAncestral['ididiomaAncestral']);
		$myidiomaAncestral->set_idioma($idiomaAncestral['idioma']);
		$myidiomaAncestral->set_idiomaetnia($idiomaAncestral['idiomaetnia']);
		$myidiomaAncestral->set_idiomaancestralOculto($idiomaAncestral['idiomaancestralOculto']);
		$myidiomaAncestral->set_idiomaancestralAccion($idiomaAncestral['idiomaancestralAccion']);
		$myidiomaAncestral->set_idiomaancestralfecha($idiomaAncestral['idiomaancestralfecha']);
		$myidiomaAncestral->set_idiomaancestraluser($idiomaAncestral['idiomaancestraluser']);
		$myidiomaAncestral->set_idiomasancestralcodigo($idiomaAncestral['idiomasancestralcodigo']);


		return $myidiomaAncestral;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT idioma FROM idiomasancestrales WHERE ididiomaAncestral=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$idiomaAncestral = $select->fetch();
		$myidiomaAncestral = ($idiomaAncestral['idioma']);

		return $myidiomaAncestral;
	}
	public function actualizar($idiomaAncestral)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `idiomasancestrales`
			SET
			`ididiomaAncestral` = :ididiomaAncestral1,
			`idiomasancestralcodigo`=:idiomasancestralcodigo1,
			`idioma` = :idioma1,
			`idiomaetnia` = :idiomaetnia1,
			`idiomaancestralOculto` = :idiomaancestralOculto1,
			`idiomaancestralAccion` = :idiomaancestralAccion1,
			`idiomaancestralfecha` = :idiomaancestralfecha1,
			`idiomaancestraluser` = :idiomaancestraluser1
			WHERE `ididiomaAncestral` = :ididiomaAncestral1;');
		$actualizar->bindValue('ididiomaAncestral1', $idiomaAncestral->get_ididiomaAncestral());
		$actualizar->bindValue('idiomasancestralcodigo1', $idiomaAncestral->get_idiomasancestralcodigo());
		$actualizar->bindValue('idioma1',  $idiomaAncestral->get_idioma());
		$actualizar->bindValue('idiomaetnia1',$idiomaAncestral->get_idiomaetnia());
		$actualizar->bindValue('idiomaancestralOculto1', $idiomaAncestral->get_idiomaancestralOculto());
		$actualizar->bindValue('idiomaancestralAccion1', $idiomaAncestral->get_idiomaancestralAccion());
		$actualizar->bindValue('idiomaancestralfecha1', $idiomaAncestral->get_idiomaancestralfecha());
		$actualizar->bindValue('idiomaancestraluser1', $idiomaAncestral->get_idiomaancestraluser());

		$actualizar->execute();
	}
	public function insertar($idiomaAncestral)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `idiomasancestrales`
			(`ididiomaAncestral`,
			`idiomasancestralcodigo`,
			`idioma`,
			`idiomaetnia`,
			`idiomaancestralOculto`,
			`idiomaancestralAccion`,
			`idiomaancestralfecha`,
			`idiomaancestraluser`)
			VALUES
			(:ididiomaAncestral1,
			:idiomasancestralcodigo1,
			:idioma1,
			:idiomaetnia1,
			:idiomaancestralOculto1,
			:idiomaancestralAccion1,
			:idiomaancestralfecha1,
			:idiomaancestraluser1);');
		$insert->bindValue('ididiomaAncestral1', $idiomaAncestral->get_ididiomaAncestral());
		$insert->bindValue('idiomasancestralcodigo1', $idiomaAncestral->get_idiomasancestralcodigo());
		$insert->bindValue('idioma1',$idiomaAncestral->get_idioma() );
		$insert->bindValue('idiomaetnia1', $idiomaAncestral->get_idiomaetnia());
		$insert->bindValue('idiomaancestralOculto1', $idiomaAncestral->get_idiomaancestralOculto());
		$insert->bindValue('idiomaancestralAccion1', $idiomaAncestral->get_idiomaancestralAccion());
		$insert->bindValue('idiomaancestralfecha1', $idiomaAncestral->get_idiomaancestralfecha());
		$insert->bindValue('idiomaancestraluser1', $idiomaAncestral->get_idiomaancestraluser());

		$insert->execute();
	}
}
