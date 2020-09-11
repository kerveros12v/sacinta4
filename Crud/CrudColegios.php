<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Colegio.php");

use Clasesphp\Colegios;

class CrudColegios
{
	// constructor de la clase
	public function __construct()
	{
	}
	//idColegios, colegioscodigo, colegio, canton_cantonId, tipoColegio_tipoColegioId, colegiosOculto, colegiosAccion, colegiosfecha, colegiosuser
	public  function mostrar()
	{
		$db = Db::conectar();
		$listaColegios = null;
		$select = $db->query('SELECT * FROM colegios ORDER BY idColegios DESC');
		foreach ($select->fetchAll() as $colegio1) {
			$myColegio = new Colegios();
			$myColegio->setIdColegios($colegio1['idColegios']);
			$myColegio->setColegio($colegio1['colegio']);
			$myColegio->setCantonCantonId($colegio1['canton_cantonId']);
			$myColegio->setTipoColegioTipoColegioId($colegio1['tipoColegio_tipoColegioId']);
			$myColegio->setColegioscodigo($colegio1['colegioscodigo']);
			$myColegio->setColegiosOculto($colegio1['colegiosOculto']);
			$myColegio->setColegiosAccion($colegio1['colegiosAccion']);
			$myColegio->setColegiosfecha($colegio1['colegiosfecha']);
			$myColegio->setColegiosuser($colegio1['colegiosuser']);
			$listaColegios[] = $myColegio;
		}
		return $listaColegios;
	}
	public  function listaColegios($ciudad)
	{
		$db = Db::conectar();
		$listaColegios = NULL;
		$select = $db->prepare("SELECT * FROM colegios WHERE Canton_cantonId=:id ORDER BY idColegios DESC");
		$select->bindValue('id', $ciudad);
		$select->execute();
		foreach ($select->fetchAll() as $colegio1) {
			$myColegio = new Colegios();
			$myColegio->setIdColegios($colegio1['idColegios']);
			$myColegio->setColegio($colegio1['colegio']);
			$myColegio->setCantonCantonId($colegio1['canton_cantonId']);
			$myColegio->setTipoColegioTipoColegioId($colegio1['tipoColegio_tipoColegioId']);
			$myColegio->setColegioscodigo($colegio1['colegioscodigo']);
			$myColegio->setColegiosOculto($colegio1['colegiosOculto']);
			$myColegio->setColegiosAccion($colegio1['colegiosAccion']);
			$myColegio->setColegiosfecha($colegio1['colegiosfecha']);
			$myColegio->setColegiosuser($colegio1['colegiosuser']);
			$listaColegios[] = $myColegio;
		}
		return $listaColegios;
	}
	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM colegios WHERE idColegios=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM colegios where idColegios=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function obtenerColegio($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM colegios WHERE idColegios=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$colegio1 = $select->fetch();
		$myColegio = new Colegios();
		$myColegio->setIdColegios($colegio1['idColegios']);
		$myColegio->setColegio($colegio1['colegio']);
		$myColegio->setCantonCantonId($colegio1['canton_cantonId']);
		$myColegio->setTipoColegioTipoColegioId($colegio1['tipoColegio_tipoColegioId']);
		$myColegio->setColegioscodigo($colegio1['colegioscodigo']);
		$myColegio->setColegiosOculto($colegio1['colegiosOculto']);
		$myColegio->setColegiosAccion($colegio1['colegiosAccion']);
		$myColegio->setColegiosfecha($colegio1['colegiosfecha']);
		$myColegio->setColegiosuser($colegio1['colegiosuser']);
		return $myColegio;
	}
	public  function actualizar($colegio1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `colegios`
			SET
			`idColegios` = :idColegios1,
			`colegioscodigo` = :colegioscodigo1,
			`colegio` = :Colegio1,
			`canton_cantonId` = :Canton_cantonId1,
			`tipoColegio_tipoColegioId` = :TipoColegio_tipoColegioId1,
			`colegiosOculto` = :colegiosOculto1,
			`colegiosAccion` = :colegiosAccion1,
			`colegiosfecha` = :colegiosfecha1,
			`colegiosuser` = :colegiosuser1
			WHERE `idColegios` = :idColegios1;');
		$actualizar->bindValue('idColegios1', $colegio1->getIdColegios());
		$actualizar->bindValue('colegioscodigo1', $colegio1->getColegioscodigo());
		$actualizar->bindValue('Colegio1', $colegio1->getColegio());
		$actualizar->bindValue('Canton_cantonId1', $colegio1->getCantonCantonId());
		$actualizar->bindValue('TipoColegio_tipoColegioId1', $colegio1->getTipoColegioTipoColegioId());
		$actualizar->bindValue('colegiosOculto1', $colegio1->getColegiosOculto());
		$actualizar->bindValue('colegiosAccion1', $colegio1->getColegiosAccion());
		$actualizar->bindValue('colegiosfecha1', $colegio1->getColegiosfecha());
		$actualizar->bindValue('colegiosuser1', $colegio1->getColegiosuser());
		$actualizar->execute();
	}
	public  function insertar($colegio1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `colegios`
			(`idColegios`,
			`colegioscodigo`,
			`colegio`,
			`canton_cantonId`,
			`tipoColegio_tipoColegioId`,
			`colegiosOculto`,
			`colegiosAccion`,
			`colegiosfecha`,
			`colegiosuser`)
			VALUES
			(:idColegios1,
			:colegioscodigo1,
			:Colegio1,
			:Canton_cantonId1,
			:TipoColegio_tipoColegioId1,
			:colegiosOculto1,
			:colegiosAccion1,
			:colegiosfecha1,
			:colegiosuser1);');
		$insert->bindValue('idColegios1', $colegio1->getIdColegios());
		$insert->bindValue('colegioscodigo1', $colegio1->getColegioscodigo());
		$insert->bindValue('Colegio1', $colegio1->getColegio());
		$insert->bindValue('Canton_cantonId1', $colegio1->getCantonCantonId());
		$insert->bindValue('TipoColegio_tipoColegioId1', $colegio1->getTipoColegioTipoColegioId());
		$insert->bindValue('colegiosOculto1', $colegio1->getColegiosOculto());
		$insert->bindValue('colegiosAccion1', $colegio1->getColegiosAccion());
		$insert->bindValue('colegiosfecha1', $colegio1->getColegiosfecha());
		$insert->bindValue('colegiosuser1', $colegio1->getColegiosuser());
		$insert->execute();
	}
}
