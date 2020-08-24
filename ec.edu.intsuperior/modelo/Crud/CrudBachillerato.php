<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Bachilleratos.php");

use Clasesphp\Bachilleratos;

class CrudBachillerato
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listabachillerato = null;
		$select = $db->query("SELECT * FROM `bachillerato`");

		foreach ($select->fetchAll() as $bachillerato) {
			$mybachillerato = new Bachilleratos();
			$mybachillerato->set_bachilleratoId($bachillerato['bachilleratoId']);
			$mybachillerato->set_fkEstudiantesNumeroIdentificacion($bachillerato['fkEstudiantesNumeroIdentificacion']);
			$mybachillerato->set_fkTiposBacilleratotiposBacilleratoId($bachillerato['fkTiposBacilleratotiposBacilleratoId']);
			$mybachillerato->set_anioGraduacion($bachillerato['anioGraduacion']);
			$mybachillerato->set_colegios_idColegios($bachillerato['colegios_idColegios']);
			$mybachillerato->set_bachilleratoOculto($bachillerato['bachilleratoOculto']);
			$mybachillerato->set_bachilleratoAccion($bachillerato['bachilleratoAccion']);
			$mybachillerato->set_bachilleratofecha($bachillerato['bachilleratofecha']);
			$mybachillerato->set_bachilleratouser($bachillerato['bachilleratouser']);
			$listabachillerato[] = $mybachillerato;
		}
		return $listabachillerato;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `bachillerato` where fkEstudiantesNumeroIdentificacion=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function obtenerBachillerato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `bachillerato` WHERE fkEstudiantesNumeroIdentificacion =:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$bachillerato = $select->fetch();
		$mybachillerato = new Bachilleratos();
		$mybachillerato->set_bachilleratoId($bachillerato['bachilleratoId']);
		$mybachillerato->set_fkEstudiantesNumeroIdentificacion($bachillerato['fkEstudiantesNumeroIdentificacion']);
		$mybachillerato->set_fkTiposBacilleratotiposBacilleratoId($bachillerato['fkTiposBacilleratotiposBacilleratoId']);
		$mybachillerato->set_anioGraduacion($bachillerato['anioGraduacion']);
		$mybachillerato->set_colegios_idColegios($bachillerato['colegios_idColegios']);
		$mybachillerato->set_bachilleratoOculto($bachillerato['bachilleratoOculto']);
		$mybachillerato->set_bachilleratoAccion($bachillerato['bachilleratoAccion']);
		$mybachillerato->set_bachilleratofecha($bachillerato['bachilleratofecha']);
		$mybachillerato->set_bachilleratouser($bachillerato['bachilleratouser']);

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
		$insert->bindValue('bachilleratoId1', $bachillerato->get_bachilleratoId());
		$insert->bindValue('fkEstudiantesNumeroIdentificacion1', $bachillerato->get_fkEstudiantesNumeroIdentificacion());
		$insert->bindValue('fkTiposBacilleratotiposBacilleratoId1', $bachillerato->get_fkTiposBacilleratotiposBacilleratoId());
		$insert->bindValue('anioGraduacion1', $bachillerato->get_anioGraduacion());
		$insert->bindValue('colegios_idColegios1', $bachillerato->get_colegios_idColegios());
		$insert->bindValue('bachilleratoOculto1', $bachillerato->get_bachilleratoOculto());
		$insert->bindValue('bachilleratoAccion1', $bachillerato->get_bachilleratoAccion());
		$insert->bindValue('bachilleratofecha1', $bachillerato->get_bachilleratofecha());
		$insert->bindValue('bachilleratouser1', $bachillerato->get_bachilleratouser());
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
		$actualizar->bindValue('bachilleratoId1', $bachillerato->get_bachilleratoId());
		$actualizar->bindValue('fkEstudiantesNumeroIdentificacion1', $bachillerato->get_fkEstudiantesNumeroIdentificacion());
		$actualizar->bindValue('fkTiposBacilleratotiposBacilleratoId1', $bachillerato->get_fkTiposBacilleratotiposBacilleratoId());
		$actualizar->bindValue('anioGraduacion1', $bachillerato->get_anioGraduacion());
		$actualizar->bindValue('colegios_idColegios1', $bachillerato->get_colegios_idColegios());
		$actualizar->bindValue('bachilleratoOculto1', $bachillerato->get_bachilleratoOculto());
		$actualizar->bindValue('bachilleratoAccion1', $bachillerato->get_bachilleratoAccion());
		$actualizar->bindValue('bachilleratofecha1', $bachillerato->get_bachilleratofecha());
		$actualizar->bindValue('bachilleratouser1', $bachillerato->get_bachilleratouser());
		$actualizar->execute();
	}

	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `bachillerato` WHERE fkEstudiantesNumeroIdentificacion=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
