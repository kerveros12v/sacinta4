<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Tipocolegio.php");

use Clasesphp\Tipocolegio;

class CrudTipocolegio
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipocolegio = null;
		$select = $db->query("SELECT * FROM `tipocolegio`");
		foreach ($select->fetchAll() as $tipocolegio) {
			$mytipocolegio = new Tipocolegio();
			$mytipocolegio->setTipoColegioId($tipocolegio['tipoColegioId']);
			$mytipocolegio->setTipoColegio($tipocolegio['tipoColegio']);
			$mytipocolegio->setTipocolegiocodigo($tipocolegio['tipocolegiocodigo']);
			$mytipocolegio->setTipocolegioOculto($tipocolegio['tipocolegioOculto']);
			$mytipocolegio->setTipocolegioAccion($tipocolegio['tipocolegioAccion']);
			$mytipocolegio->setTipocolegiofecha($tipocolegio['tipocolegiofecha']);
			$mytipocolegio->setTipocolegiouser($tipocolegio['tipocolegiouser']);
			$listatipocolegio[] = $mytipocolegio;
		}
		return $listatipocolegio;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `tipocolegio`
		WHERE `tipoColegioId`=:id;');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerTipocolegio($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM ​tipocolegio WHERE tipoColegioId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipocolegio = $select->fetch();
		$mytipocolegio = new Tipocolegio();
		$mytipocolegio->setTipoColegioId($tipocolegio['tipoColegioId']);
		$mytipocolegio->setTipoColegio($tipocolegio['tipoColegio']);
		$mytipocolegio->setTipocolegiocodigo($tipocolegio['tipocolegiocodigo']);
		$mytipocolegio->setTipocolegioOculto($tipocolegio['tipocolegioOculto']);
		$mytipocolegio->setTipocolegioAccion($tipocolegio['tipocolegioAccion']);
		$mytipocolegio->setTipocolegiofecha($tipocolegio['tipocolegiofecha']);
		$mytipocolegio->setTipocolegiouser($tipocolegio['tipocolegiouser']);

		return $mytipocolegio;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT `tipoColegio` FROM `tipocolegio` WHERE `tipoColegioId`=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipocolegio = $select->fetch();
		$mytipocolegio = $tipocolegio['tipoColegio'];

		return $mytipocolegio;
	}
	public function obtenerCodigo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT `tipocolegiocodigo` FROM `tipocolegio` WHERE `tipoColegioId`=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipocolegio = $select->fetch();
		$mytipocolegio = $tipocolegio['tipocolegiocodigo'];

		return $mytipocolegio;
	}
	public function actualizar($tipocolegio)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tipocolegio`
		SET
		`tipoColegioId` = :tipoColegioId1,
		`tipocolegiocodigo` = :tipocolegiocodigo1,
		`tipoColegio` = :tipoColegio1,
		`tipocolegioOculto` = :tipocolegioOculto1,
		`tipocolegioAccion` = :tipocolegioAccion1,
		`tipocolegiofecha` = :tipocolegiofecha1,
		`tipocolegiouser` = :tipocolegiouser1
		WHERE `tipoColegioId` = :tipoColegioId1;');
		$actualizar->bindValue('tipoColegioId1', $tipocolegio->getTipoColegioId());
		$actualizar->bindValue('tipocolegiocodigo1', $tipocolegio->getTipocolegiocodigo());
		$actualizar->bindValue('tipoColegio1', $tipocolegio->getTipoColegio());
		$actualizar->bindValue('tipocolegioOculto1', $tipocolegio->getTipocolegioOculto());
		$actualizar->bindValue('tipocolegioAccion1', $tipocolegio->getTipocolegioAccion());
		$actualizar->bindValue('tipocolegiofecha1', $tipocolegio->getTipocolegiofecha());
		$actualizar->bindValue('tipocolegiouser1', $tipocolegio->getTipocolegiouser());
		$actualizar->execute();
	}
	public function insertar($tipocolegio)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipocolegio`
		(`tipoColegioId`,
		`tipocolegiocodigo`,
		`tipoColegio`,
		`tipocolegioOculto`,
		`tipocolegioAccion`,
		`tipocolegiofecha`,
		`tipocolegiouser`)
		VALUES
		(:tipoColegioId1,
		:tipocolegiocodigo1,
		:tipoColegio1,
		:tipocolegioOculto1,
		:tipocolegioAccion1,
		:tipocolegiofecha1,
		:tipocolegiouser1);');
		$insert->bindValue('tipoColegioId1', $tipocolegio->getTipoColegioId());
		$insert->bindValue('tipocolegiocodigo1', $tipocolegio->getTipocolegiocodigo());
		$insert->bindValue('tipoColegio1', $tipocolegio->getTipoColegio());
		$insert->bindValue('tipocolegioOculto1', $tipocolegio->getTipocolegioOculto());
		$insert->bindValue('tipocolegioAccion1', $tipocolegio->getTipocolegioAccion());
		$insert->bindValue('tipocolegiofecha1', $tipocolegio->getTipocolegiofecha());
		$insert->bindValue('tipocolegiouser1', $tipocolegio->getTipocolegiouser());

		$insert->execute();
	}
}
