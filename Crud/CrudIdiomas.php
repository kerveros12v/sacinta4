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
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listaidiomaAncestral = null;
		$select = $db->query('SELECT * FROM idiomasancestrales');

		foreach ($select->fetchAll() as $idiomaAncestral) {
			$myidiomaAncestral = new Idiomas();
			$myidiomaAncestral->setIdidiomaAncestral($idiomaAncestral['ididiomaAncestral']);
			$myidiomaAncestral->setIdioma($idiomaAncestral['idioma']);
			$myidiomaAncestral->setIdiomaetnia($idiomaAncestral['idiomaetnia']);
			$myidiomaAncestral->setIdiomaancestralOculto($idiomaAncestral['idiomaancestralOculto']);
			$myidiomaAncestral->setIdiomaancestralAccion($idiomaAncestral['idiomaancestralAccion']);
			$myidiomaAncestral->setIdiomaancestralfecha($idiomaAncestral['idiomaancestralfecha']);
			$myidiomaAncestral->setIdiomaancestraluser($idiomaAncestral['idiomaancestraluser']);
			$myidiomaAncestral->setIdiomasancestralcodigo($idiomaAncestral['idiomasancestralcodigo']);
			$listaidiomaAncestral[] = $myidiomaAncestral;
		}
		return $listaidiomaAncestral;
	}
	public function mostrarporEtnia($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM idiomasancestrales WHERE idiomaetnia=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$listaidiomaAncestral = null;
		foreach ($select->fetchAll() as $idiomaAncestral) {
			$myidiomaAncestral = new Idiomas();
			$myidiomaAncestral->setIdidiomaAncestral($idiomaAncestral['ididiomaAncestral']);
			$myidiomaAncestral->setIdioma($idiomaAncestral['idioma']);
			$myidiomaAncestral->setIdiomaetnia($idiomaAncestral['idiomaetnia']);
			$myidiomaAncestral->setIdiomaancestralOculto($idiomaAncestral['idiomaancestralOculto']);
			$myidiomaAncestral->setIdiomaancestralAccion($idiomaAncestral['idiomaancestralAccion']);
			$myidiomaAncestral->setIdiomaancestralfecha($idiomaAncestral['idiomaancestralfecha']);
			$myidiomaAncestral->setIdiomaancestraluser($idiomaAncestral['idiomaancestraluser']);
			$myidiomaAncestral->setIdiomasancestralcodigo($idiomaAncestral['idiomasancestralcodigo']);
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
		$myidiomaAncestral->setIdidiomaAncestral($idiomaAncestral['ididiomaAncestral']);
		$myidiomaAncestral->setIdioma($idiomaAncestral['idioma']);
		$myidiomaAncestral->setIdiomaetnia($idiomaAncestral['idiomaetnia']);
		$myidiomaAncestral->setIdiomaancestralOculto($idiomaAncestral['idiomaancestralOculto']);
		$myidiomaAncestral->setIdiomaancestralAccion($idiomaAncestral['idiomaancestralAccion']);
		$myidiomaAncestral->setIdiomaancestralfecha($idiomaAncestral['idiomaancestralfecha']);
		$myidiomaAncestral->setIdiomaancestraluser($idiomaAncestral['idiomaancestraluser']);
		$myidiomaAncestral->setIdiomasancestralcodigo($idiomaAncestral['idiomasancestralcodigo']);
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
		$actualizar->bindValue('ididiomaAncestral1', $idiomaAncestral->getIdidiomaAncestral());
		$actualizar->bindValue('idiomasancestralcodigo1', $idiomaAncestral->getIdiomasancestralcodigo());
		$actualizar->bindValue('idioma1',  $idiomaAncestral->getIdioma());
		$actualizar->bindValue('idiomaetnia1', $idiomaAncestral->getIdiomaetnia());
		$actualizar->bindValue('idiomaancestralOculto1', $idiomaAncestral->getIdiomaancestralOculto());
		$actualizar->bindValue('idiomaancestralAccion1', $idiomaAncestral->getIdiomaancestralAccion());
		$actualizar->bindValue('idiomaancestralfecha1', $idiomaAncestral->getIdiomaancestralfecha());
		$actualizar->bindValue('idiomaancestraluser1', $idiomaAncestral->getIdiomaancestraluser());

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
		$insert->bindValue('ididiomaAncestral1', $idiomaAncestral->getIdidiomaAncestral());
		$insert->bindValue('idiomasancestralcodigo1', $idiomaAncestral->getIdiomasancestralcodigo());
		$insert->bindValue('idioma1', $idiomaAncestral->getIdioma());
		$insert->bindValue('idiomaetnia1', $idiomaAncestral->getIdiomaetnia());
		$insert->bindValue('idiomaancestralOculto1', $idiomaAncestral->getIdiomaancestralOculto());
		$insert->bindValue('idiomaancestralAccion1', $idiomaAncestral->getIdiomaancestralAccion());
		$insert->bindValue('idiomaancestralfecha1', $idiomaAncestral->getIdiomaancestralfecha());
		$insert->bindValue('idiomaancestraluser1', $idiomaAncestral->getIdiomaancestraluser());

		$insert->execute();
	}
}
