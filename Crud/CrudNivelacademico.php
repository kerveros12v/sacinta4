<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Nivelacademico.php");

use Clasesphp\Nivelacademico;

class CrudNivelacademico
{
	// constructor de la clase
	public function _construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listanivelacademico = null;
		$select = $db->query("SELECT * FROM nivelacademico;");
		foreach ($select->fetchAll() as $nivelacademico11) {
			$mynivelacademico = new Nivelacademico();
			$mynivelacademico->set_nivelAcademicoQueCursaQueCursaId($nivelacademico11['NivelAcademicoQueCursaId']);
			$mynivelacademico->set_nivelAcademicoQueCursa($nivelacademico11['nivelAcademicoQueCursa']);
			$mynivelacademico->set_nivelacademicocodigo($nivelacademico11['nivelacademicocodigo']);
			$mynivelacademico->set_nivelacademicoOculto($nivelacademico11['nivelacademicoOculto']);
			$mynivelacademico->set_nivelacademicoAccion($nivelacademico11['nivelacademicoAccion']);
			$mynivelacademico->set_nivelacademicofecha($nivelacademico11['nivelacademicofecha']);
			$mynivelacademico->set_nivelacademicouser($nivelacademico11['nivelacademicouser']);

			$listanivelacademico[] = $mynivelacademico;
		}
		return $listanivelacademico;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM nivelacademico WHERE NivelAcademicoQueCursaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerNivelacademico($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM nivelacademico WHERE NivelAcademicoQueCursaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$nivelacademico11 = $select->fetch();
		$mynivelacademico = new Nivelacademico();
		$mynivelacademico->set_nivelAcademicoQueCursaQueCursaId($nivelacademico11['NivelAcademicoQueCursaId']);
		$mynivelacademico->set_nivelAcademicoQueCursa($nivelacademico11['nivelAcademicoQueCursa']);
		$mynivelacademico->set_nivelacademicocodigo($nivelacademico11['nivelacademicocodigo']);
		$mynivelacademico->set_nivelacademicoOculto($nivelacademico11['nivelacademicoOculto']);
		$mynivelacademico->set_nivelacademicoAccion($nivelacademico11['nivelacademicoAccion']);
		$mynivelacademico->set_nivelacademicofecha($nivelacademico11['nivelacademicofecha']);
		$mynivelacademico->set_nivelacademicouser($nivelacademico11['nivelacademicouser']);

		return $mynivelacademico;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT nivelAcademicoQueCursa FROM nivelacademico WHERE NivelAcademicoQueCursaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$nivelacademico1 = $select->fetch();
		$mynivelacademico = ($nivelacademico1['nivelAcademicoQueCursa']);

		return $mynivelacademico;
	}
	public function actualizar($nivelacademico1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `nivelacademico`
			SET
			`NivelAcademicoQueCursaId` = :NivelAcademicoQueCursaId1,
			`nivelacademicocodigo` = :nivelacademicocodigo1,
			`nivelAcademicoQueCursa` = :nivelAcademicoQueCursa1,
			`nivelacademicoOculto` = :nivelacademicoOculto1,
			`nivelacademicoAccion` = :nivelacademicoAccion1,
			`nivelacademicofecha` = :nivelacademicofecha1,
			`nivelacademicouser` = :nivelacademicouser1
			WHERE `NivelAcademicoQueCursaId` = :NivelAcademicoQueCursaId1;');
		$actualizar->bindValue('NivelAcademicoQueCursaId1', $nivelacademico1->get_nivelAcademicoQueCursaId());
		$actualizar->bindValue('nivelacademicocodigo1', $nivelacademico1->get_nivelacademicocodigo());
		$actualizar->bindValue('nivelAcademicoQueCursa1', $nivelacademico1->get_nivelAcademicoQueCursa());
		$actualizar->bindValue('nivelacademicoOculto1', $nivelacademico1->get_nivelacademicoOculto());
		$actualizar->bindValue('nivelacademicoAccion1', $nivelacademico1->get_nivelacademicoAccion());
		$actualizar->bindValue('nivelacademicofecha1', $nivelacademico1->get_nivelacademicofecha());
		$actualizar->bindValue('nivelacademicouser1', $nivelacademico1->get_nivelacademicouser());
		$actualizar->execute();
	}
	public function insertar($nivelacademico1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `nivelacademico`
			(`NivelAcademicoQueCursaId`,
			`nivelacademicocodigo`,
			`nivelAcademicoQueCursa`,
			`nivelacademicoOculto`,
			`nivelacademicoAccion`,
			`nivelacademicofecha`,
			`nivelacademicouser`)
			VALUES
			(:NivelAcademicoQueCursaId1,
			:nivelacademicocodigo1,
			:nivelAcademicoQueCursa1,
			:nivelacademicoOculto1,
			:nivelacademicoAccion1,
			:nivelacademicofecha1,
			:nivelacademicouser1);');
		$insert->bindValue('NivelAcademicoQueCursaId1', $nivelacademico1->get_nivelAcademicoQueCursaId());
		$insert->bindValue('nivelacademicocodigo1', $nivelacademico1->get_nivelacademicocodigo());
		$insert->bindValue('nivelAcademicoQueCursa1', $nivelacademico1->get_nivelAcademicoQueCursa());
		$insert->bindValue('nivelacademicoOculto1', $nivelacademico1->get_nivelacademicoOculto());
		$insert->bindValue('nivelacademicoAccion1', $nivelacademico1->get_nivelacademicoAccion());
		$insert->bindValue('nivelacademicofecha1', $nivelacademico1->get_nivelacademicofecha());
		$insert->bindValue('nivelacademicouser1', $nivelacademico1->get_nivelacademicouser());
		$insert->execute();
	}
}
