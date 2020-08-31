<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Tipodocumentos.php");

use Clasesphp\Tipodocumento;

class CrudTipodocumento
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
		$listatipo_documento = null;
		$select = $db->query('SELECT * FROM tiposdocumentos');
		foreach ($select->fetchAll() as $tipo_documento1) {
			$mytipo_documento1 = new Tipodocumento();
			$mytipo_documento1->set_tipoDocumentoId($tipo_documento1['tipoDocumentoId']);
			$mytipo_documento1->set_tipoDocumento($tipo_documento1['tipoDocumento']);
			$mytipo_documento1->set_tipoDocumentocodigo($tipo_documento1['tipoDocumentocodigo']);
			$mytipo_documento1->set_tipoDocumentoOculto($tipo_documento1['tipoDocumentoOculto']);
			$mytipo_documento1->set_tipoDocumentoAccion($tipo_documento1['tipoDocumentoAccion']);
			$mytipo_documento1->set_tipoDocumentofecha($tipo_documento1['tipoDocumentofecha']);
			$mytipo_documento1->set_tipoDocumentouser($tipo_documento1['tipoDocumentouser']);
			$listatipo_documento[] = $mytipo_documento1;
		}
		return $listatipo_documento;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM tiposdocumentos WHERE tipoDocumentoId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerTipodocumento($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tiposdocumentos WHERE tipoDocumentoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipo_documento1 = $select->fetch();
		$mytipo_documento1 = new Tipodocumento();
		$mytipo_documento1->set_tipoDocumentoId($tipo_documento1['tipoDocumentoId']);
		$mytipo_documento1->set_tipoDocumento($tipo_documento1['tipoDocumento']);
		$mytipo_documento1->set_tipoDocumentocodigo($tipo_documento1['tipoDocumentocodigo']);
		$mytipo_documento1->set_tipoDocumentoOculto($tipo_documento1['tipoDocumentoOculto']);
		$mytipo_documento1->set_tipoDocumentoAccion($tipo_documento1['tipoDocumentoAccion']);
		$mytipo_documento1->set_tipoDocumentofecha($tipo_documento1['tipoDocumentofecha']);
		$mytipo_documento1->set_tipoDocumentouser($tipo_documento1['tipoDocumentouser']);

		return $mytipo_documento1;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tiposdocumentos WHERE tipoDocumentoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipo_documento1 = $select->fetch();
		$mytipo_documento1 = ($tipo_documento1['tipoDocumento']);

		return $mytipo_documento1;
	}
	public function actualizar($tipo_documento1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `tiposdocumentos`
			SET
			`tipoDocumentoId` = :tipoDocumentoId1,
			`tipoDocumentocodigo` = :tipoDocumentocodigo1,
			`tipoDocumento` = :tipoDocumento1,
			`tipoDocumentoOculto` = :tipoDocumentoOculto1,
			`tipoDocumentoAccion` = :tipoDocumentoAccion1,
			`tipoDocumentofecha` = :tipoDocumentofecha1,
			`tipoDocumentouser` = :tipoDocumentouser1
			WHERE `tipoDocumentoId` = :tipoDocumentoId1;');
		$actualizar->bindValue('tipoDocumentoId1', $tipo_documento1->get_tipoDocumentoId());
		$actualizar->bindValue('tipoDocumentocodigo1', $tipo_documento1->get_tipoDocumentocodigo());
		$actualizar->bindValue('tipoDocumento1', $tipo_documento1->get_tipoDocumento());
		$actualizar->bindValue('tipoDocumentoOculto1', $tipo_documento1->get_tipoDocumentoOculto());
		$actualizar->bindValue('tipoDocumentoAccion1', $tipo_documento1->get_tipoDocumentoAccion());
		$actualizar->bindValue('tipoDocumentofecha1', $tipo_documento1->get_tipoDocumentofecha());
		$actualizar->bindValue('tipoDocumentouser1', $tipo_documento1->get_tipoDocumentouser());
		$actualizar->execute();
	}
	public function insertar($tipo_documento1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `tiposdocumentos`
			(`tipoDocumentoId`,
			`tipoDocumentocodigo`,
			`tipoDocumento`,
			`tipoDocumentoOculto`,
			`tipoDocumentoAccion`,
			`tipoDocumentofecha`,
			`tipoDocumentouser`)
			VALUES
			(:tipoDocumentoId1,
			:tipoDocumentocodigo1,
			:tipoDocumento1,
			:tipoDocumentoOculto1,
			:tipoDocumentoAccion1,
			:tipoDocumentofecha1,
			:tipoDocumentouser1);
			');
		$insert->bindValue('tipoDocumentoId1', $tipo_documento1->get_tipoDocumentoId());
		$insert->bindValue('tipoDocumentocodigo1', $tipo_documento1->get_tipoDocumentocodigo());
		$insert->bindValue('tipoDocumento1', $tipo_documento1->get_tipoDocumento());
		$insert->bindValue('tipoDocumentoOculto1', $tipo_documento1->get_tipoDocumentoOculto());
		$insert->bindValue('tipoDocumentoAccion1', $tipo_documento1->get_tipoDocumentoAccion());
		$insert->bindValue('tipoDocumentofecha1', $tipo_documento1->get_tipoDocumentofecha());
		$insert->bindValue('tipoDocumentouser1', $tipo_documento1->get_tipoDocumentouser());
		$insert->execute();
	}
}
