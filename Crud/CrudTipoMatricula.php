<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Tipomatricula.php");

use Clasesphp\Tipomatricula;

class CrudTipomatricula
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipomatricula = null;
		$select = $db->query("SELECT * FROM tipomatricula;");
		foreach ($select->fetchAll() as $tipomatricula) {
			$mytipomatricula = new Tipomatricula();
			$mytipomatricula->setTipoMatriculaId($tipomatricula['tipoMatriculaId']);
			$mytipomatricula->setTipomatriculacodigo($tipomatricula['tipomatriculacodigo']);
			$mytipomatricula->setTipoMatricula($tipomatricula['tipoMatricula']);
			$mytipomatricula->setTipomatriculaOculto($tipomatricula['tipomatriculaOculto']);
			$mytipomatricula->setTipomatriculaAccion($tipomatricula['tipomatriculaAccion']);
			$mytipomatricula->setTipomatriculafecha($tipomatricula['tipomatriculafecha']);
			$mytipomatricula->setTipomatriculauser($tipomatricula['tipomatriculauser']);

			$listatipomatricula[] = $mytipomatricula;
		}
		return $listatipomatricula;
	}
	public function obtenerTipomatricula($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tipomatricula WHERE tipoMatriculaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipomatricula = $select->fetch();
		$mytipomatricula = new Tipomatricula();
		$mytipomatricula->setTipoMatriculaId($tipomatricula['tipoMatriculaId']);
		$mytipomatricula->setTipomatriculacodigo($tipomatricula['tipomatriculacodigo']);
		$mytipomatricula->setTipoMatricula($tipomatricula['tipoMatricula']);
		$mytipomatricula->setTipomatriculaOculto($tipomatricula['tipomatriculaOculto']);
		$mytipomatricula->setTipomatriculaAccion($tipomatricula['tipomatriculaAccion']);
		$mytipomatricula->setTipomatriculafecha($tipomatricula['tipomatriculafecha']);
		$mytipomatricula->setTipomatriculauser($tipomatricula['tipomatriculauser']);
		return $mytipomatricula;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tipoMatricula FROM tipomatricula WHERE tipoMatriculaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipomatricula = $select->fetch();
		$mytipomatricula = ($tipomatricula['tipoMatricula']);

		return $mytipomatricula;
	}
	public function insertar($tipomatricula)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tipomatricula`
			(`tipoMatriculaId`,
			`tipomatriculacodigo`,
			`tipoMatricula`,
			`tipomatriculaOculto`,
			`tipomatriculaAccion`,
			`tipomatriculafecha`,
			`tipomatriculauser`)
			VALUES
			(:tipoMatriculaId1,
			:tipomatriculacodigo1,
			:tipoMatricula1,
			:tipomatriculaOculto1,
			:tipomatriculaAccion1,
			:tipomatriculafecha1,
			:tipomatriculauser1);');
		$insert->bindValue('tipoMatriculaId1', $tipomatricula->getTipoMatriculaId());
		$insert->bindValue('tipomatriculacodigo1', $tipomatricula->getTipomatriculacodigo());
		$insert->bindValue('tipoMatricula1', $tipomatricula->getTipoMatricula());
		$insert->bindValue('tipomatriculaOculto1', $tipomatricula->getTipomatriculaOculto());
		$insert->bindValue('tipomatriculaAccion1', $tipomatricula->getTipomatriculaAccion());
		$insert->bindValue('tipomatriculafecha1', $tipomatricula->getTipomatriculafecha());
		$insert->bindValue('tipomatriculauser1', $tipomatricula->getTipomatriculauser());
		$insert->execute();
	}
	public function actualizar($tipomatricula)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tipomatricula`
			SET
			`tipoMatriculaId` = :tipoMatriculaId1,
			`tipomatriculacodigo` = :tipomatriculacodigo1,
			`tipoMatricula` = :tipoMatricula1,
			`tipomatriculaOculto` = :tipomatriculaOculto1,
			`tipomatriculaAccion` = :tipomatriculaAccion1,
			`tipomatriculafecha` = :tipomatriculafecha1,
			`tipomatriculauser` = :tipomatriculauser1
			WHERE `tipoMatriculaId` = :tipoMatriculaId1;');
		$actualizar->bindValue('tipoMatriculaId1', $tipomatricula->getTipoMatriculaId());
		$actualizar->bindValue('tipomatriculacodigo1', $tipomatricula->getTipomatriculacodigo());
		$actualizar->bindValue('tipoMatricula1', $tipomatricula->getTipoMatricula());
		$actualizar->bindValue('tipomatriculaOculto1', $tipomatricula->getTipomatriculaOculto());
		$actualizar->bindValue('tipomatriculaAccion1', $tipomatricula->getTipomatriculaAccion());
		$actualizar->bindValue('tipomatriculafecha1', $tipomatricula->getTipomatriculafecha());
		$actualizar->bindValue('tipomatriculauser1', $tipomatricula->getTipomatriculauser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tipomatricula WHERE tipoMatriculaId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
