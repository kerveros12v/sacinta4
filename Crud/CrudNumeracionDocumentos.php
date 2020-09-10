<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/NumeracionDocumentos.php");

use Clasesphp\NumeracionDocumentos;

class CrudNumeracionDocumentos
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaNumeracionDocumentos = null;
		$select = $db->query("SELECT * FROM `numeraciondocumentos`");

		foreach ($select->fetchAll() as $numeracion) {
			$mynumeracion = new NumeracionDocumentos();
			$mynumeracion->setNumeracionDocumentosId($numeracion['numeracionDocumentosId']);
			$mynumeracion->setNombreDocumento($numeracion['nombreDocumento']);
			$mynumeracion->setNumeracionSiguiente($numeracion['numeracionSiguiente']);
			$mynumeracion->setNumeraciondocumentosOculto($numeracion['numeraciondocumentosOculto']);
			$mynumeracion->setNumeraciondocumentosAccion($numeracion['numeraciondocumentosAccion']);
			$mynumeracion->setNumeraciondocumentosfecha($numeracion['numeraciondocumentosfecha']);
			$mynumeracion->setNumeraciondocumentosuser($numeracion['numeraciondocumentosuser']);
			$listaNumeracionDocumentos[] = $mynumeracion;
		}
		return $listaNumeracionDocumentos;
	}
	public function obtenerNumeracion($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM numeraciondocumentos WHERE nombreDocumento=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$numeracion = $select->fetch();
		$mynumeracion = new NumeracionDocumentos();
		$mynumeracion->setNumeracionDocumentosId($numeracion['numeracionDocumentosId']);
		$mynumeracion->setNombreDocumento($numeracion['nombreDocumento']);
		$mynumeracion->setNumeracionSiguiente($numeracion['numeracionSiguiente']);
		$mynumeracion->setNumeraciondocumentosOculto($numeracion['numeraciondocumentosOculto']);
		$mynumeracion->setNumeraciondocumentosAccion($numeracion['numeraciondocumentosAccion']);
		$mynumeracion->setNumeraciondocumentosfecha($numeracion['numeraciondocumentosfecha']);
		$mynumeracion->setNumeraciondocumentosuser($numeracion['numeraciondocumentosuser']);

		return $mynumeracion;
	}
	public function obtenerNumero($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM numeraciondocumentos WHERE numeracionDocumentosId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$jornadasAcademicas = $select->fetch();
		$myjornadasAcademicas = ($jornadasAcademicas['numeracionSiguiente']);

		return $myjornadasAcademicas;
	}
	public function actualizar($numeracion)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `numeraciondocumentos`
			SET
			`numeracionDocumentosId` = :numeracionDocumentosId1,
			`nombreDocumento` = :nombreDocumento1,
			`numeracionSiguiente` = :numeracionSiguiente1,
			`numeraciondocumentosOculto` = :numeraciondocumentosOculto1,
			`numeraciondocumentosAccion` = :numeraciondocumentosAccion1,
			`numeraciondocumentosfecha` = :numeraciondocumentosfecha1,
			`numeraciondocumentosuser` = :numeraciondocumentosuser1
			WHERE `numeracionDocumentosId` = :numeracionDocumentosId1;');
		$actualizar->bindValue('numeracionDocumentosId1', $numeracion->getNumeracionDocumentosId());
		$actualizar->bindValue('nombreDocumento1', $numeracion->getNombreDocumento());
		$actualizar->bindValue('numeracionSiguiente1', $numeracion->getNumeracionSiguiente());
		$actualizar->bindValue('numeraciondocumentosOculto1', $numeracion->getNumeraciondocumentosOculto());
		$actualizar->bindValue('numeraciondocumentosAccion1', $numeracion->getNumeraciondocumentosAccion());
		$actualizar->bindValue('numeraciondocumentosfecha1', $numeracion->getNumeraciondocumentosfecha());
		$actualizar->bindValue('numeraciondocumentosuser1', $numeracion->getNumeraciondocumentosuser());
		$actualizar->execute();
	}
}
