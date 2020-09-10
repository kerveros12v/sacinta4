<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Nivelacademico.php");

use Clasesphp\Nivelacademico;

class CrudNivelacademico
{
	// constructor de la clase
	public function __construct()
	{
	}
	//nivelAcademicoQueCursaId, nivelacademicocodigo, nivelAcademicoQueCursa, nivelacademicoOculto, nivelacademicoAccion, nivelacademicofecha, nivelacademicouser
	public function mostrar()
	{
		$db = Db::conectar();
		$listanivelacademico = null;
		$select = $db->query("SELECT * FROM nivelacademico;");
		foreach ($select->fetchAll() as $nivelacademico11) {
			$mynivelacademico = new Nivelacademico();
			$mynivelacademico->setNivelAcademicoQueCursaId($nivelacademico11['nivelAcademicoQueCursaId']);
			$mynivelacademico->setNivelAcademicoQueCursa($nivelacademico11['nivelAcademicoQueCursa']);
			$mynivelacademico->setNivelacademicocodigo($nivelacademico11['nivelacademicocodigo']);
			$mynivelacademico->setNivelacademicoOculto($nivelacademico11['nivelacademicoOculto']);
			$mynivelacademico->setNivelacademicoAccion($nivelacademico11['nivelacademicoAccion']);
			$mynivelacademico->setNivelacademicofecha($nivelacademico11['nivelacademicofecha']);
			$mynivelacademico->setNivelacademicouser($nivelacademico11['nivelacademicouser']);

			$listanivelacademico[] = $mynivelacademico;
		}
		return $listanivelacademico;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM nivelacademico WHERE nivelAcademicoQueCursaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerNivelacademico($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM nivelacademico WHERE nivelAcademicoQueCursaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$nivelacademico11 = $select->fetch();
		$mynivelacademico = new Nivelacademico();
		$mynivelacademico->setNivelAcademicoQueCursaId($nivelacademico11['nivelAcademicoQueCursaId']);
		$mynivelacademico->setNivelAcademicoQueCursa($nivelacademico11['nivelAcademicoQueCursa']);
		$mynivelacademico->setNivelacademicocodigo($nivelacademico11['nivelacademicocodigo']);
		$mynivelacademico->setNivelacademicoOculto($nivelacademico11['nivelacademicoOculto']);
		$mynivelacademico->setNivelacademicoAccion($nivelacademico11['nivelacademicoAccion']);
		$mynivelacademico->setNivelacademicofecha($nivelacademico11['nivelacademicofecha']);
		$mynivelacademico->setNivelacademicouser($nivelacademico11['nivelacademicouser']);

		return $mynivelacademico;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT nivelAcademicoQueCursa FROM nivelacademico WHERE nivelAcademicoQueCursaId=:id');
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
			`nivelAcademicoQueCursaId` = :nivelAcademicoQueCursaId1,
			`nivelacademicocodigo` = :nivelacademicocodigo1,
			`nivelAcademicoQueCursa` = :nivelAcademicoQueCursa1,
			`nivelacademicoOculto` = :nivelacademicoOculto1,
			`nivelacademicoAccion` = :nivelacademicoAccion1,
			`nivelacademicofecha` = :nivelacademicofecha1,
			`nivelacademicouser` = :nivelacademicouser1
			WHERE `nivelAcademicoQueCursaId` = :nivelAcademicoQueCursaId1;');
		$actualizar->bindValue('nivelAcademicoQueCursaId1', $nivelacademico1->getNivelAcademicoQueCursaId());
		$actualizar->bindValue('nivelacademicocodigo1', $nivelacademico1->getNivelacademicocodigo());
		$actualizar->bindValue('nivelAcademicoQueCursa1', $nivelacademico1->getNivelAcademicoQueCursa());
		$actualizar->bindValue('nivelacademicoOculto1', $nivelacademico1->getNivelacademicoOculto());
		$actualizar->bindValue('nivelacademicoAccion1', $nivelacademico1->getNivelacademicoAccion());
		$actualizar->bindValue('nivelacademicofecha1', $nivelacademico1->getNivelacademicofecha());
		$actualizar->bindValue('nivelacademicouser1', $nivelacademico1->getNivelacademicouser());
		$actualizar->execute();
	}
	public function insertar($nivelacademico1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `nivelacademico`
			(`nivelAcademicoQueCursaId`,
			`nivelacademicocodigo`,
			`nivelAcademicoQueCursa`,
			`nivelacademicoOculto`,
			`nivelacademicoAccion`,
			`nivelacademicofecha`,
			`nivelacademicouser`)
			VALUES
			(:nivelAcademicoQueCursaId1,
			:nivelacademicocodigo1,
			:nivelAcademicoQueCursa1,
			:nivelacademicoOculto1,
			:nivelacademicoAccion1,
			:nivelacademicofecha1,
			:nivelacademicouser1);');
		$insert->bindValue('nivelAcademicoQueCursaId1', $nivelacademico1->getNivelAcademicoQueCursaId());
		$insert->bindValue('nivelacademicocodigo1', $nivelacademico1->getNivelacademicocodigo());
		$insert->bindValue('nivelAcademicoQueCursa1', $nivelacademico1->getNivelAcademicoQueCursa());
		$insert->bindValue('nivelacademicoOculto1', $nivelacademico1->getNivelacademicoOculto());
		$insert->bindValue('nivelacademicoAccion1', $nivelacademico1->getNivelacademicoAccion());
		$insert->bindValue('nivelacademicofecha1', $nivelacademico1->getNivelacademicofecha());
		$insert->bindValue('nivelacademicouser1', $nivelacademico1->getNivelacademicouser());
		$insert->execute();
	}
}
