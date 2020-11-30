<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Harealizadopracticaspreprofesionales.php");

use Clasesphp\Harealizadopracticaspreprofesionales;

class CrudHarealizadopracticaspreprofesionales
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listahpp = null;
		$select = $db->query("SELECT * FROM `harealizadopracticaspreprofesionales`");

		foreach ($select->fetchAll() as $hpp) {
			$myhpp = new Harealizadopracticaspreprofesionales();
			$myhpp->setHppbool($hpp['hppbool']);
			$myhpp->setHhrppid($hpp['haRealizadoPracticasPreprofesionalesid']);
			$myhpp->setHrppcodigo($hpp['harealizadopracticaspreprofesionalescodigo']);
			$myhpp->setHaRealizadoPracticasPreprofesionales($hpp['haRealizadoPracticasPreprofesionales']);
			$myhpp->setHppOculto($hpp['hppOculto']);
			$myhpp->setHppAccion($hpp['hppAccion']);
			$myhpp->setHppfecha($hpp['hppfecha']);
			$myhpp->setHppuser($hpp['hppuser']);
			$listahpp[] = $myhpp;
		}
		return $listahpp;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM harealizadopracticaspreprofesionales WHERE haRealizadoPracticasPreprofesionalesid=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	/**
	 * Undocumented function
	 *Obtiene el objeto de la base de datos
	 * @param [type] $id
	 * @return Harealizadopracticaspreprofesionales
	 */
	public function obtenerHpp($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM harealizadopracticaspreprofesionales WHERE haRealizadoPracticasPreprofesionalesid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$hpp = $select->fetch();
		$myhpp = new Harealizadopracticaspreprofesionales();
		$myhpp->setHppbool($hpp['hppbool']);
		$myhpp->setHhrppid($hpp['haRealizadoPracticasPreprofesionalesid']);
		$myhpp->setHrppcodigo($hpp['harealizadopracticaspreprofesionalescodigo']);
		$myhpp->setHaRealizadoPracticasPreprofesionales($hpp['haRealizadoPracticasPreprofesionales']);
		$myhpp->setHppOculto($hpp['hppOculto']);
		$myhpp->setHppAccion($hpp['hppAccion']);
		$myhpp->setHppfecha($hpp['hppfecha']);
		$myhpp->setHppuser($hpp['hppuser']);
		return $myhpp;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT haRealizadoPracticasPreprofesionales FROM harealizadopracticaspreprofesionales WHERE haRealizadoPracticasPreprofesionalesid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$hpp = $select->fetch();
		$myhpp = ($hpp['haRealizadoPracticasPreprofesionales']);

		return $myhpp;
	}
	public function actualizar($hpp)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare('UPDATE `harealizadopracticaspreprofesionales`
		SET
		`haRealizadoPracticasPreprofesionalesid` = :haRealizadoPracticasPreprofesionalesid1,
		`harealizadopracticaspreprofesionalescodigo` = :harealizadopracticaspreprofesionalescodigo1,
		`haRealizadoPracticasPreprofesionales` = :haRealizadoPracticasPreprofesionales1,
		`hppbool` = :hppbool1,
		`hppOculto` = :hppOculto1,
		`hppAccion` = :hppAccion1,
		`hppfecha` = :hppfecha1,
		`hppuser` = :hppuser1
		WHERE `haRealizadoPracticasPreprofesionalesid` = :haRealizadoPracticasPreprofesionalesid1;');
		$actualizar->bindValue('haRealizadoPracticasPreprofesionalesid1', $hpp->getHhrppid());
		$actualizar->bindValue('harealizadopracticaspreprofesionalescodigo1', $hpp->getHrppcodigo());
		$actualizar->bindValue('haRealizadoPracticasPreprofesionales1', $hpp->getHaRealizadoPracticasPreprofesionales());
		$actualizar->bindValue('hppbool1', $hpp->getHppbool());
		$actualizar->bindValue('hppOculto1', $hpp->getHppOculto());
		$actualizar->bindValue('hppAccion1', $hpp->getHppAccion());
		$actualizar->bindValue('hppfecha1', $hpp->getHppfecha());
		$actualizar->bindValue('hppuser1', $hpp->getHppuser());
		$actualizar->execute();
	}
	public function insertar($hpp)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `harealizadopracticaspreprofesionales`
		(`haRealizadoPracticasPreprofesionalesid`,
		`harealizadopracticaspreprofesionalescodigo`,
		`haRealizadoPracticasPreprofesionales`,
		`hppbool`,
		`hppOculto`,
		`hppAccion`,
		`hppfecha`,
		`hppuser`)
		VALUES
		(:haRealizadoPracticasPreprofesionalesid1,
		:harealizadopracticaspreprofesionalescodigo1,
		:haRealizadoPracticasPreprofesionales1,
		:hppbool1,
		:hppOculto1,
		:hppAccion1,
		:hppfecha1,
		:hppuser1);');
		$insert->bindValue('haRealizadoPracticasPreprofesionalesid1', $hpp->getHhrppid());
		$insert->bindValue('harealizadopracticaspreprofesionalescodigo1', $hpp->getHrppcodigo());
		$insert->bindValue('haRealizadoPracticasPreprofesionales1', $hpp->getHaRealizadoPracticasPreprofesionales());
		$insert->bindValue('hppbool1', $hpp->getHppbool());
		$insert->bindValue('hppOculto1', $hpp->getHppOculto());
		$insert->bindValue('hppAccion1', $hpp->getHppAccion());
		$insert->bindValue('hppfecha1', $hpp->getHppfecha());
		$insert->bindValue('hppuser1', $hpp->getHppuser());
		$insert->execute();
	}
}
