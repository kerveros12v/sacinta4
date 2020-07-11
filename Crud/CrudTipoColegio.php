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
			$mytipocolegio->set_tipoColegioId($tipocolegio['tipoColegioId']);
			$mytipocolegio->set_tipoColegio($tipocolegio['tipoColegio']);
			$mytipocolegio->set_tipocolegiocodigo($tipocolegio['tipocolegiocodigo']);
			$mytipocolegio->set_tipocolegioOculto($tipocolegio['tipocolegioOculto']);
			$mytipocolegio->set_tipocolegioAccion($tipocolegio['tipocolegioAccion']);
			$mytipocolegio->set_tipocolegiofecha($tipocolegio['tipocolegiofecha']);
			$mytipocolegio->set_tipocolegiouser($tipocolegio['tipocolegiouser']);
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
		$mytipocolegio->set_tipoColegioId($tipocolegio['tipoColegioId']);
		$mytipocolegio->set_tipoColegio($tipocolegio['tipoColegio']);
		$mytipocolegio->set_tipocolegiocodigo($tipocolegio['tipocolegiocodigo']);
		$mytipocolegio->set_tipocolegioOculto($tipocolegio['tipocolegioOculto']);
		$mytipocolegio->set_tipocolegioAccion($tipocolegio['tipocolegioAccion']);
		$mytipocolegio->set_tipocolegiofecha($tipocolegio['tipocolegiofecha']);
		$mytipocolegio->set_tipocolegiouser($tipocolegio['tipocolegiouser']);

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
		$actualizar->bindValue('tipoColegioId1', $tipocolegio->get_tipoColegioId());
		$actualizar->bindValue('tipocolegiocodigo1', $tipocolegio->get_tipocolegiocodigo());
		$actualizar->bindValue('tipoColegio1', $tipocolegio->get_tipoColegio());
		$actualizar->bindValue('tipocolegioOculto1', $tipocolegio->get_tipocolegioOculto());
		$actualizar->bindValue('tipocolegioAccion1', $tipocolegio->get_tipocolegioAccion());
		$actualizar->bindValue('tipocolegiofecha1', $tipocolegio->get_tipocolegiofecha());
		$actualizar->bindValue('tipocolegiouser1', $tipocolegio->get_tipocolegiouser());
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
		$insert->bindValue('tipoColegioId1', $tipocolegio->get_tipoColegioId());
		$insert->bindValue('tipocolegiocodigo1', $tipocolegio->get_tipocolegiocodigo());
		$insert->bindValue('tipoColegio1', $tipocolegio->get_tipoColegio());
		$insert->bindValue('tipocolegioOculto1', $tipocolegio->get_tipocolegioOculto());
		$insert->bindValue('tipocolegioAccion1', $tipocolegio->get_tipocolegioAccion());
		$insert->bindValue('tipocolegiofecha1', $tipocolegio->get_tipocolegiofecha());
		$insert->bindValue('tipocolegiouser1', $tipocolegio->get_tipocolegiouser());
		$insert->execute();
	}
}
