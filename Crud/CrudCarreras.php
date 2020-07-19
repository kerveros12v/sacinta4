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
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listacarreras = null;
		$select = $db->query("SELECT * FROM `carreras`");

		foreach ($select->fetchAll() as $carreras) {
			$mycarreras = new Carreras();
			//carrerasId, codigoCarreras, carrera, estado, carreraTituloAOptener, TipoCarreras_tipoCarrerasId, ModalidadCarrera_modalidadCarreraId, carreraOculto, carreraAccion, carrerafecha, carrerauser

			$mycarreras->set_carrerasId($carreras['carrerasId']);
			$mycarreras->set_carrera($carreras['carrera']);
			$mycarreras->set_codigoCarreras($carreras['codigoCarreras']);
			$mycarreras->set_carreraTituloAOptener($carreras['carreraTituloAOptener']);
			$mycarreras->set_estado($carreras['estado']);
			$mycarreras->set_ModalidadCarrera_modalidadCarreraId($carreras['ModalidadCarrera_modalidadCarreraId']);
			$mycarreras->set_TipoCarreras_tipoCarrerasId($carreras['TipoCarreras_tipoCarrerasId']);
			$mycarreras->set_carreraOculto($carreras['carreraOculto']);
			$mycarreras->set_carreraAccion($carreras['carreraAccion']);
			$mycarreras->set_carrerafecha($carreras['carrerafecha']);
			$mycarreras->set_carrerauser($carreras['carrerauser']);
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
		$mycarreras->set_carrerasId($carreras['carrerasId']);
		$mycarreras->set_carrera($carreras['carrera']);
		$mycarreras->set_codigoCarreras($carreras['codigoCarreras']);
		$mycarreras->set_carreraTituloAOptener($carreras['carreraTituloAOptener']);
		$mycarreras->set_estado($carreras['estado']);
		$mycarreras->set_ModalidadCarrera_modalidadCarreraId($carreras['ModalidadCarrera_modalidadCarreraId']);
		$mycarreras->set_TipoCarreras_tipoCarrerasId($carreras['TipoCarreras_tipoCarrerasId']);
		$mycarreras->set_carreraOculto($carreras['carreraOculto']);
		$mycarreras->set_carreraAccion($carreras['carreraAccion']);
		$mycarreras->set_carrerafecha($carreras['carrerafecha']);
		$mycarreras->set_carrerauser($carreras['carrerauser']);
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
		$mycarreras->set_carrerasId($carreras['carrerasId']);
		$mycarreras->set_carrera($carreras['carrera']);
		$mycarreras->set_codigoCarreras($carreras['codigoCarreras']);
		$mycarreras->set_carreraTituloAOptener($carreras['carreraTituloAOptener']);
		$mycarreras->set_estado($carreras['estado']);
		$mycarreras->set_ModalidadCarrera_modalidadCarreraId($carreras['ModalidadCarrera_modalidadCarreraId']);
		$mycarreras->set_TipoCarreras_tipoCarrerasId($carreras['TipoCarreras_tipoCarrerasId']);
		$mycarreras->set_carreraOculto($carreras['carreraOculto']);
		$mycarreras->set_carreraAccion($carreras['carreraAccion']);
		$mycarreras->set_carrerafecha($carreras['carrerafecha']);
		$mycarreras->set_carrerauser($carreras['carrerauser']);
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
			`TipoCarreras_tipoCarrerasId`,
			`ModalidadCarrera_modalidadCarreraId`,
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
			:TipoCarreras_tipoCarrerasId1,
			:ModalidadCarrera_modalidadCarreraId1,
			:carreraOculto1,
			:carreraAccion1,
			:carrerafecha1,
			:carrerauser1);");

		$insert->bindValue('carrerasId1', $carrera->get_carrerasId());
		$insert->bindValue('codigoCarreras1', $carrera->get_codigoCarreras());
		$insert->bindValue('carrera1', $carrera->get_carrera());
		$insert->bindValue('estado1', $carrera->get_estado());
		$insert->bindValue('carreraTituloAOptener1', $carrera->get_carreraTituloAOptener());
		$insert->bindValue('TipoCarreras_tipoCarrerasId1', $carrera->get_TipoCarreras_tipoCarrerasId());
		$insert->bindValue('ModalidadCarrera_modalidadCarreraId1', $carrera->get_ModalidadCarrera_modalidadCarreraId());
		$insert->bindValue('carreraOculto1', $carrera->get_carreraOculto());
		$insert->bindValue('carreraAccion1', $carrera->get_carreraAccion());
		$insert->bindValue('carrerafecha1', $carrera->get_carrerafecha());
		$insert->bindValue('carrerauser1', $carrera->get_carrerauser());
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
		`TipoCarreras_tipoCarrerasId` = :TipoCarreras_tipoCarrerasId1,
		`ModalidadCarrera_modalidadCarreraId` = :ModalidadCarrera_modalidadCarreraId1,
		`carreraOculto` = :carreraOculto1,
		`carreraAccion` = :carreraAccion1,
		`carrerafecha` = :carrerafecha1,
		`carrerauser` = :carrerauser1
		WHERE `carrerasId` = :carrerasId1;");

		$actualizar->bindValue('carrerasId1', $carrera->get_carrerasId());
		$actualizar->bindValue('codigoCarreras1', $carrera->get_codigoCarreras());
		$actualizar->bindValue('carrera1', $carrera->get_carrera());
		$actualizar->bindValue('estado1', $carrera->get_estado());
		$actualizar->bindValue('carreraTituloAOptener1', $carrera->get_carreraTituloAOptener());
		$actualizar->bindValue('TipoCarreras_tipoCarrerasId1', $carrera->get_TipoCarreras_tipoCarrerasId());
		$actualizar->bindValue('ModalidadCarrera_modalidadCarreraId1', $carrera->get_ModalidadCarrera_modalidadCarreraId());
		$actualizar->bindValue('carreraOculto1', $carrera->get_carreraOculto());
		$actualizar->bindValue('carreraAccion1', $carrera->get_carreraAccion());
		$actualizar->bindValue('carrerafecha1', $carrera->get_carrerafecha());
		$actualizar->bindValue('carrerauser1', $carrera->get_carrerauser());
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
