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
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listatipo_documento = null;
		$select = $db->query('SELECT * FROM tiposdocumentos');
		foreach ($select->fetchAll() as $tipoDocumento1) {
			$mytipoDocumento1 = new Tipodocumento();
			$mytipoDocumento1->setTipoDocumentoId($tipoDocumento1['tipoDocumentoId']);
			$mytipoDocumento1->setTipoDocumento($tipoDocumento1['tipoDocumento']);
			$mytipoDocumento1->setTipoDocumentocodigo($tipoDocumento1['tipoDocumentocodigo']);
			$mytipoDocumento1->setTipoDocumentoOculto($tipoDocumento1['tipoDocumentoOculto']);
			$mytipoDocumento1->setTipoDocumentoAccion($tipoDocumento1['tipoDocumentoAccion']);
			$mytipoDocumento1->setTipoDocumentofecha($tipoDocumento1['tipoDocumentofecha']);
			$mytipoDocumento1->setTipoDocumentouser($tipoDocumento1['tipoDocumentouser']);
			$listatipo_documento[] = $mytipoDocumento1;
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
		$tipoDocumento1 = $select->fetch();
		$mytipoDocumento1 = new Tipodocumento();
		$mytipoDocumento1->setTipoDocumentoId($tipoDocumento1['tipoDocumentoId']);
		$mytipoDocumento1->setTipoDocumento($tipoDocumento1['tipoDocumento']);
		$mytipoDocumento1->setTipoDocumentocodigo($tipoDocumento1['tipoDocumentocodigo']);
		$mytipoDocumento1->setTipoDocumentoOculto($tipoDocumento1['tipoDocumentoOculto']);
		$mytipoDocumento1->setTipoDocumentoAccion($tipoDocumento1['tipoDocumentoAccion']);
		$mytipoDocumento1->setTipoDocumentofecha($tipoDocumento1['tipoDocumentofecha']);
		$mytipoDocumento1->setTipoDocumentouser($tipoDocumento1['tipoDocumentouser']);

		return $mytipoDocumento1;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM tiposdocumentos WHERE tipoDocumentoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$tipoDocumento1 = $select->fetch();
		$mytipoDocumento1 = ($tipoDocumento1['tipoDocumento']);

		return $mytipoDocumento1;
	}
	public function actualizar($tipoDocumento1)
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
		$actualizar->bindValue('tipoDocumentoId1', $tipoDocumento1->getTipoDocumentoId());
		$actualizar->bindValue('tipoDocumentocodigo1', $tipoDocumento1->getTipoDocumentocodigo());
		$actualizar->bindValue('tipoDocumento1', $tipoDocumento1->getTipoDocumento());
		$actualizar->bindValue('tipoDocumentoOculto1', $tipoDocumento1->getTipoDocumentoOculto());
		$actualizar->bindValue('tipoDocumentoAccion1', $tipoDocumento1->getTipoDocumentoAccion());
		$actualizar->bindValue('tipoDocumentofecha1', $tipoDocumento1->getTipoDocumentofecha());
		$actualizar->bindValue('tipoDocumentouser1', $tipoDocumento1->getTipoDocumentouser());
		$actualizar->execute();
	}
	public function insertar($tipoDocumento1)
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
		$insert->bindValue('tipoDocumentoId1', $tipoDocumento1->getTipoDocumentoId());
		$insert->bindValue('tipoDocumentocodigo1', $tipoDocumento1->getTipoDocumentocodigo());
		$insert->bindValue('tipoDocumento1', $tipoDocumento1->getTipoDocumento());
		$insert->bindValue('tipoDocumentoOculto1', $tipoDocumento1->getTipoDocumentoOculto());
		$insert->bindValue('tipoDocumentoAccion1', $tipoDocumento1->getTipoDocumentoAccion());
		$insert->bindValue('tipoDocumentofecha1', $tipoDocumento1->getTipoDocumentofecha());
		$insert->bindValue('tipoDocumentouser1', $tipoDocumento1->getTipoDocumentouser());
		$insert->execute();
	}
}
