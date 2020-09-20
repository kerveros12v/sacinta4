<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Carreras.php");

use Clasesphp\Carreras;

class CrudCarreras
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listacarreras = null;
		$select = $db->query("SELECT * FROM `carreras`");

		foreach ($select->fetchAll() as $carreras) {
			$mycarreras = new Carreras();
			//carrerasId, codigoCarreras, carrera, estado, carreraTituloAOptener, fktipoCarrerasId, fkmodalidadCarreraId, carreraOculto, carreraAccion, carrerafecha, carrerauser

			$mycarreras->setCarrerasId($carreras['carrerasId']);
			$mycarreras->setCarrera($carreras['carrera']);
			$mycarreras->setCodigoCarreras($carreras['codigoCarreras']);
			$mycarreras->setCarreraTituloAOptener($carreras['carreraTituloAOptener']);
			$mycarreras->setEstado($carreras['estado']);
			$mycarreras->setFkmodalidadCarreraId($carreras['fkmodalidadCarreraId']);
			$mycarreras->setFktipoCarrerasId($carreras['fktipoCarrerasId']);
			$mycarreras->setCarreraOculto($carreras['carreraOculto']);
			$mycarreras->setCarreraAccion($carreras['carreraAccion']);
			$mycarreras->setCarrerafecha($carreras['carrerafecha']);
			$mycarreras->setCarrerauser($carreras['carrerauser']);
			////
			$listacarreras[] = $mycarreras;
		}
		return $listacarreras;
	}
	public function obtenerCarrerasporId($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `carreras` WHERE carrerasId =:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$carreras = $select->fetch();
		$mycarreras = new Carreras();
		///
		$mycarreras->setCarrerasId($carreras['carrerasId']);
		$mycarreras->setCarrera($carreras['carrera']);
		$mycarreras->setCodigoCarreras($carreras['codigoCarreras']);
		$mycarreras->setCarreraTituloAOptener($carreras['carreraTituloAOptener']);
		$mycarreras->setEstado($carreras['estado']);
		$mycarreras->setFkmodalidadCarreraId($carreras['fkmodalidadCarreraId']);
		$mycarreras->setFktipoCarrerasId($carreras['fktipoCarrerasId']);
		$mycarreras->setCarreraOculto($carreras['carreraOculto']);
		$mycarreras->setCarreraAccion($carreras['carreraAccion']);
		$mycarreras->setCarrerafecha($carreras['carrerafecha']);
		$mycarreras->setCarrerauser($carreras['carrerauser']);
		return $mycarreras;
	}

	public function obtenerCarrerasporCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `carreras` WHERE codigoCarreras =:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$carreras = $select->fetch();
		$mycarreras = new Carreras();
		///
		$mycarreras->setCarrerasId($carreras['carrerasId']);
		$mycarreras->setCarrera($carreras['carrera']);
		$mycarreras->setCodigoCarreras($carreras['codigoCarreras']);
		$mycarreras->setCarreraTituloAOptener($carreras['carreraTituloAOptener']);
		$mycarreras->setEstado($carreras['estado']);
		$mycarreras->setFkmodalidadCarreraId($carreras['fkmodalidadCarreraId']);
		$mycarreras->setFktipoCarrerasId($carreras['fktipoCarrerasId']);
		$mycarreras->setCarreraOculto($carreras['carreraOculto']);
		$mycarreras->setCarreraAccion($carreras['carreraAccion']);
		$mycarreras->setCarrerafecha($carreras['carrerafecha']);
		$mycarreras->setCarrerauser($carreras['carrerauser']);
		return $mycarreras;
	}
	public function insertar($carrera)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `carreras`
			(`carrerasId`,
			`codigoCarreras`,
			`carrera`,
			`estado`,
			`carreraTituloAOptener`,
			`fktipoCarrerasId`,
			`fkmodalidadCarreraId`,
			`carreraOculto`,
			`carreraAccion`,
			`carrerafecha`,
			`carrerauser`)
			VALUES
			(:carrerasId1,
			:codigoCarreras1,
			:carrera1,
			:estado1,
			:carreraTituloAOptener1,
			:fktipoCarrerasId1,
			:fkmodalidadCarreraId1,
			:carreraOculto1,
			:carreraAccion1,
			:carrerafecha1,
			:carrerauser1);");

		$insert->bindValue('carrerasId1', $carrera->getCarrerasId());
		$insert->bindValue('codigoCarreras1', $carrera->getCodigoCarreras());
		$insert->bindValue('carrera1', $carrera->getCarrera());
		$insert->bindValue('estado1', $carrera->getEstado());
		$insert->bindValue('carreraTituloAOptener1', $carrera->getCarreraTituloAOptener());
		$insert->bindValue('fktipoCarrerasId1', $carrera->getFktipoCarrerasId());
		$insert->bindValue('fkmodalidadCarreraId1', $carrera->getFkmodalidadCarreraId());
		$insert->bindValue('carreraOculto1', $carrera->getCarreraOculto());
		$insert->bindValue('carreraAccion1', $carrera->getCarreraAccion());
		$insert->bindValue('carrerafecha1', $carrera->getCarrerafecha());
		$insert->bindValue('carrerauser1', $carrera->getCarrerauser());
		$insert->execute();
	}
	public function actualizar($carrera)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `carreras`
		SET
		`carrerasId` = :carrerasId1,
		`codigoCarreras` = :codigoCarreras1,
		`carrera` = :carrera1,
		`estado` = :estado1,
		`carreraTituloAOptener` = :carreraTituloAOptener1,
		`fktipoCarrerasId` = :fktipoCarrerasId1,
		`fkmodalidadCarreraId` = :fkmodalidadCarreraId1,
		`carreraOculto` = :carreraOculto1,
		`carreraAccion` = :carreraAccion1,
		`carrerafecha` = :carrerafecha1,
		`carrerauser` = :carrerauser1
		WHERE `carrerasId` = :carrerasId1;");

		$actualizar->bindValue('carrerasId1', $carrera->getCarrerasId());
		$actualizar->bindValue('codigoCarreras1', $carrera->getCodigoCarreras());
		$actualizar->bindValue('carrera1', $carrera->getCarrera());
		$actualizar->bindValue('estado1', $carrera->getEstado());
		$actualizar->bindValue('carreraTituloAOptener1', $carrera->getCarreraTituloAOptener());
		$actualizar->bindValue('fktipoCarrerasId1', $carrera->getFktipoCarrerasId());
		$actualizar->bindValue('fkmodalidadCarreraId1', $carrera->getFkmodalidadCarreraId());
		$actualizar->bindValue('carreraOculto1', $carrera->getCarreraOculto());
		$actualizar->bindValue('carreraAccion1', $carrera->getCarreraAccion());
		$actualizar->bindValue('carrerafecha1', $carrera->getCarrerafecha());
		$actualizar->bindValue('carrerauser1', $carrera->getCarrerauser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `carreras` WHERE carrerasId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
