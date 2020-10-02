<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/FormacionArtesanal.php");

use Clasesphp\FormacionArtesanal;

class CrudFormacionArtesanal
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
		$listadatos = null;
		$select = $db->query("SELECT * FROM `formacionartesano` ORDER BY idformacionArtesano DESC ");
		foreach ($select->fetchAll() as $dato) {
			$mydato = new FormacionArtesanal();
			$mydato->setIdformacionArtesano($dato['idformacionArtesano']);
			$mydato->setFormacionartesanocodigo($dato['formacionartesanocodigo']);
			$mydato->setFormacionArtesanal($dato['formacionArtesanal']);
			$mydato->setFormacionartesanoOculto($dato['formacionartesanoOculto']);
			$mydato->setFormacionartesanoAccion($dato['formacionartesanoAccion']);
			$mydato->setFormacionartesanofecha($dato['formacionartesanofecha']);
			$mydato->setFormacionartesanouser($dato['formacionartesanouser']);
			$listadatos[] = $mydato;
		}
		return $listadatos;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM formacionartesano WHERE idformacionArtesano=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerFormacionartesano($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM formacionartesano WHERE idformacionArtesano=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$dato = $select->fetch();
		$mydato = new FormacionArtesanal();
		$mydato->setIdformacionArtesano($dato['idformacionArtesano']);
		$mydato->setFormacionartesanocodigo($dato['formacionartesanocodigo']);
		$mydato->setFormacionArtesanal($dato['formacionArtesanal']);
		$mydato->setFormacionartesanoOculto($dato['formacionartesanoOculto']);
		$mydato->setFormacionartesanoAccion($dato['formacionartesanoAccion']);
		$mydato->setFormacionartesanofecha($dato['formacionartesanofecha']);
		$mydato->setFormacionartesanouser($dato['formacionartesanouser']);

		return $mydato;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT formacionArtesanal FROM formacionartesano WHERE idformacionArtesano=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$discapac1 = $select->fetch();
		$mydiscapac = ($discapac1['formacionArtesanal']);

		return $mydiscapac;
	}
	public function actualizar($dato)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `formacionartesano`
			SET
			`idformacionArtesano` = :idformacionArtesano1,
			`formacionartesanocodigo` = :formacionartesanocodigo1,
			`formacionArtesanal` = :formacionArtesanal1,
			`formacionartesanoOculto` = :formacionartesanoOculto1,
			`formacionartesanoAccion` = :formacionartesanoAccion1,
			`formacionartesanofecha` = :formacionartesanofecha1,
			`formacionartesanouser` = :formacionartesanouser1
			WHERE `idformacionArtesano` = :idformacionArtesano1;');
		$actualizar->bindValue('idformacionArtesano1', $dato->getIdformacionArtesano());
		$actualizar->bindValue('formacionartesanocodigo1', $dato->getFormacionartesanocodigo());
		$actualizar->bindValue('formacionArtesanal1', $dato->getFormacionArtesanal());
		$actualizar->bindValue('formacionartesanoOculto1', $dato->getFormacionartesanoOculto());
		$actualizar->bindValue('formacionartesanoAccion1', $dato->getFormacionartesanoAccion());
		$actualizar->bindValue('formacionartesanofecha1', $dato->getFormacionartesanofecha());
		$actualizar->bindValue('formacionartesanouser1', $dato->getFormacionartesanouser());
		$actualizar->execute();
	}
	public function insertar($dato)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `formacionartesano`
			(`idformacionArtesano`,
			`formacionartesanocodigo`,
			`formacionArtesanal`,
			`formacionartesanoOculto`,
			`formacionartesanoAccion`,
			`formacionartesanofecha`,
			`formacionartesanouser`)
			VALUES
			(:idformacionArtesano1,
			:formacionartesanocodigo1,
			:formacionArtesanal1,
			:formacionartesanoOculto1,
			:formacionartesanoAccion1,
			:formacionartesanofecha1,
			:formacionartesanouser1);');

		$insert->bindValue('idformacionArtesano1', $dato->getIdformacionArtesano());
		$insert->bindValue('formacionartesanocodigo1', $dato->getFormacionartesanocodigo());
		$insert->bindValue('formacionArtesanal1', $dato->getFormacionArtesanal());
		$insert->bindValue('formacionartesanoOculto1', $dato->getFormacionartesanoOculto());
		$insert->bindValue('formacionartesanoAccion1', $dato->getFormacionartesanoAccion());
		$insert->bindValue('formacionartesanofecha1', $dato->getFormacionartesanofecha());
		$insert->bindValue('formacionartesanouser1', $dato->getFormacionartesanouser());


		$insert->execute();
	}
}
