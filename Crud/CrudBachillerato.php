<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Bachilleratos.php");

use Crud\Db;
use Clasesphp\Bachilleratos;

class CrudBachillerato
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
	}
	public  function mostrar()
	{
		$db = Db::conectar();
		$listabachillerato = null;
		$select = $db->query("SELECT * FROM `bachillerato`");
		foreach ($select->fetchAll() as $bachillerato) {
			$mybachillerato = new Bachilleratos();
			$mybachillerato->setBachilleratoId($bachillerato['bachilleratoId']);
			$mybachillerato->setFkEstudiantesNumeroIdentificacion($bachillerato['fkEstudiantesNumeroIdentificacion']);
			$mybachillerato->getFkTiposBacilleratotiposBacilleratoId($bachillerato['fkTiposBacilleratotiposBacilleratoId']);
			$mybachillerato->setAnioGraduacion($bachillerato['anioGraduacion']);
			$mybachillerato->setColegiosidColegios($bachillerato['colegios_idColegios']);
			$mybachillerato->setBachilleratoOculto($bachillerato['bachilleratoOculto']);
			$mybachillerato->setBachilleratoAccion($bachillerato['bachilleratoAccion']);
			$mybachillerato->setBachilleratofecha($bachillerato['bachilleratofecha']);
			$mybachillerato->setBachilleratouser($bachillerato['bachilleratouser']);
			$listabachillerato[] = $mybachillerato;
		}
		return $listabachillerato;
	}
	public  function existe($id1)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `bachillerato` where fkEstudiantesNumeroIdentificacion=:id");
		$select->bindValue('id', $id1);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function obtenerBachillerato($id1)
	{ //bachilleratoId, fkEstudiantesNumeroIdentificacion, , anioGraduacion, colegios_idColegios, bachilleratoOculto, bachilleratoAccion, bachilleratofecha, bachilleratouser
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `bachillerato` WHERE fkEstudiantesNumeroIdentificacion =:id;");
		$select->bindValue('id', $id1);
		$select->execute();
		$bachillerato = $select->fetch();
		$mybachillerato = new Bachilleratos();
		$mybachillerato->setBachilleratoId($bachillerato['bachilleratoId']);
		$mybachillerato->setFkEstudiantesNumeroIdentificacion($bachillerato['fkEstudiantesNumeroIdentificacion']);
		$mybachillerato->getFkTiposBacilleratotiposBacilleratoId($bachillerato['fkTiposBacilleratotiposBacilleratoId']);
		$mybachillerato->setAnioGraduacion($bachillerato['anioGraduacion']);
		$mybachillerato->setColegiosidColegios($bachillerato['colegios_idColegios']);
		$mybachillerato->setBachilleratoOculto($bachillerato['bachilleratoOculto']);
		$mybachillerato->setBachilleratoAccion($bachillerato['bachilleratoAccion']);
		$mybachillerato->setBachilleratofecha($bachillerato['bachilleratofecha']);
		$mybachillerato->setBachilleratouser($bachillerato['bachilleratouser']);

		return $mybachillerato;
	}
	public  function insertar($bachillerato)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `bachillerato`
		(`bachilleratoId`,
		`fkEstudiantesNumeroIdentificacion`,
		`fkTiposBacilleratotiposBacilleratoId`,
		`anioGraduacion`,
		`colegios_idColegios`,
		`bachilleratoOculto`,
		`bachilleratoAccion`,
		`bachilleratofecha`,
		`bachilleratouser`)
		VALUES
		(:bachilleratoId1,
		:fkEstudiantesNumeroIdentificacion1,
		:fkTiposBacilleratotiposBacilleratoId1,
		:anioGraduacion1,
		:colegios_idColegios1,
		:bachilleratoOculto1,
		:bachilleratoAccion1,
		:bachilleratofecha1,
		:bachilleratouser1);");
		$insert->bindValue('bachilleratoId1', $bachillerato->getBachilleratoId());
		$insert->bindValue('fkEstudiantesNumeroIdentificacion1', $bachillerato->getFkEstudiantesNumeroIdentificacion());
		$insert->bindValue('fkTiposBacilleratotiposBacilleratoId1', $bachillerato->getFkTiposBacilleratotiposBacilleratoId());
		$insert->bindValue('anioGraduacion1', $bachillerato->getAnioGraduacion());
		$insert->bindValue('colegios_idColegios1', $bachillerato->getColegiosidColegios());
		$insert->bindValue('bachilleratoOculto1', $bachillerato->getBachilleratoOculto());
		$insert->bindValue('bachilleratoAccion1', $bachillerato->getBachilleratoAccion());
		$insert->bindValue('bachilleratofecha1', $bachillerato->getBachilleratofecha());
		$insert->bindValue('bachilleratouser1', $bachillerato->getBachilleratouser());
		$insert->execute();
	}

	public  function actualizar($bachillerato)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `bachillerato`
		SET
		`bachilleratoId` = :bachilleratoId1,
		`fkEstudiantesNumeroIdentificacion` = :fkEstudiantesNumeroIdentificacion1,
		`fkTiposBacilleratotiposBacilleratoId` = :fkTiposBacilleratotiposBacilleratoId1,
		`anioGraduacion` = :anioGraduacion1,
		`colegios_idColegios` = :colegios_idColegios1,
		`bachilleratoOculto` = :bachilleratoOculto1,
		`bachilleratoAccion` = :bachilleratoAccion1,
		`bachilleratofecha` = :bachilleratofecha1,
		`bachilleratouser` = :bachilleratouser1
		WHERE `bachilleratoId` = :bachilleratoId1;");
		$actualizar->bindValue('bachilleratoId1', $bachillerato->getBachilleratoId());
		$actualizar->bindValue('fkEstudiantesNumeroIdentificacion1', $bachillerato->getFkEstudiantesNumeroIdentificacion());
		$actualizar->bindValue('fkTiposBacilleratotiposBacilleratoId1', $bachillerato->getFkTiposBacilleratotiposBacilleratoId());
		$actualizar->bindValue('anioGraduacion1', $bachillerato->getAnioGraduacion());
		$actualizar->bindValue('colegios_idColegios1', $bachillerato->getColegiosidColegios());
		$actualizar->bindValue('bachilleratoOculto1', $bachillerato->getBachilleratoOculto());
		$actualizar->bindValue('bachilleratoAccion1', $bachillerato->getBachilleratoAccion());
		$actualizar->bindValue('bachilleratofecha1', $bachillerato->getBachilleratofecha());
		$actualizar->bindValue('bachilleratouser1', $bachillerato->getBachilleratouser());
		$actualizar->execute();
	}

	public  function eliminar($id1)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `bachillerato` WHERE fkEstudiantesNumeroIdentificacion=:id');
		$eliminar->bindValue('id', $id1);
		$eliminar->execute();
	}
}
