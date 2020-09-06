<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Titulotercernivel.php");

use Clasesphp\Titulotercernivel;

class CrudTituloTercerNivel
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
		$listatitulotercernivel = null;
		$select = $db->query('SELECT * FROM titulotercernivel');
		foreach ($select->fetchAll() as $titulotercernivel) {
			$mytitulotercernivel = new Titulotercernivel();
			$mytitulotercernivel->setTituloTercerNivelId($titulotercernivel['tituloTercerNivelId']);
			$mytitulotercernivel->setTitulotercernivelcodigo($titulotercernivel['titulotercernivelcodigo']);
			$mytitulotercernivel->setTituloTercerNivel($titulotercernivel['tituloTercerNivel']);
			$mytitulotercernivel->setTitulotercernivelOculto($titulotercernivel['titulotercernivelOculto']);
			$mytitulotercernivel->setTitulotercernivelAccion($titulotercernivel['titulotercernivelAccion']);
			$mytitulotercernivel->setTitulotercernivelfecha($titulotercernivel['titulotercernivelfecha']);
			$mytitulotercernivel->setTitulotercerniveluser($titulotercernivel['titulotercerniveluser']);

			$listatitulotercernivel[] = $mytitulotercernivel;
		}
		return $listatitulotercernivel;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM titulotercernivel WHERE tituloTercerNivelId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenertituloTercerNivel($id)
	{
		$mytitulotercernivel = new Titulotercernivel();
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM `titulotercernivel` WHERE  tituloTercerNivelId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$titulotercernivel = $select->fetch();
		$mytitulotercernivel->setTituloTercerNivelId($titulotercernivel['tituloTercerNivelId']);
		$mytitulotercernivel->setTitulotercernivelcodigo($titulotercernivel['titulotercernivelcodigo']);
		$mytitulotercernivel->setTituloTercerNivel($titulotercernivel['tituloTercerNivel']);
		$mytitulotercernivel->setTitulotercernivelOculto($titulotercernivel['titulotercernivelOculto']);
		$mytitulotercernivel->setTitulotercernivelAccion($titulotercernivel['titulotercernivelAccion']);
		$mytitulotercernivel->setTitulotercernivelfecha($titulotercernivel['titulotercernivelfecha']);
		$mytitulotercernivel->setTitulotercerniveluser($titulotercernivel['titulotercerniveluser']);

		return $mytitulotercernivel;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT tituloTercerNivel FROM titulotercernivel WHERE tituloTercerNivelId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$titulotercernivel = $select->fetch();
		$mytitulotercernivel = ($titulotercernivel['tituloTercerNivel']);

		return $mytitulotercernivel;
	}
	public function actualizar($titulotercernivel)
	{
		$db = Db::conectar();

		$actualizar = $db->prepare('UPDATE `titulotercernivel`
			SET
			`tituloTercerNivelId` = :tituloTercerNivelId1,
			`titulotercernivelcodigo` = :titulotercernivelcodigo1,
			`tituloTercerNivel` = :tituloTercerNivel1,
			`titulotercernivelOculto` = :titulotercernivelOculto1,
			`titulotercernivelAccion` = :titulotercernivelAccion1,
			`titulotercernivelfecha` = :titulotercernivelfecha1,
			`titulotercerniveluser` = :titulotercerniveluser1
			WHERE `tituloTercerNivelId` = :tituloTercerNivelId1;');
		$actualizar->bindValue('tituloTercerNivelId1', $titulotercernivel->getTituloTercerNivelId());
		$actualizar->bindValue('titulotercernivelcodigo1', $titulotercernivel->getTitulotercernivelcodigo());
		$actualizar->bindValue('tituloTercerNivel1', $titulotercernivel->getTituloTercerNivel());
		$actualizar->bindValue('titulotercernivelOculto1', $titulotercernivel->getTitulotercernivelOculto());
		$actualizar->bindValue('titulotercernivelAccion1', $titulotercernivel->getTitulotercernivelAccion());
		$actualizar->bindValue('titulotercernivelfecha1', $titulotercernivel->getTitulotercernivelfecha());
		$actualizar->bindValue('titulotercerniveluser1', $titulotercernivel->getTitulotercerniveluser());
		$actualizar->execute();
	}
	public function insertar($titulotercernivel)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `titulotercernivel`
			(`tituloTercerNivelId`,
			`titulotercernivelcodigo`,
			`tituloTercerNivel`,
			`titulotercernivelOculto`,
			`titulotercernivelAccion`,
			`titulotercernivelfecha`,
			`titulotercerniveluser`)
			VALUES
			(:tituloTercerNivelId1,
			:titulotercernivelcodigo1,
			:tituloTercerNivel1,
			:titulotercernivelOculto1,
			:titulotercernivelAccion1,
			:titulotercernivelfecha1,
			:titulotercerniveluser1);');
		$insert->bindValue('tituloTercerNivelId1', $titulotercernivel->getTituloTercerNivelId());
		$insert->bindValue('titulotercernivelcodigo1', $titulotercernivel->getTitulotercernivelcodigo());
		$insert->bindValue('tituloTercerNivel1', $titulotercernivel->getTituloTercerNivel());
		$insert->bindValue('titulotercernivelOculto1', $titulotercernivel->getTitulotercernivelOculto());
		$insert->bindValue('titulotercernivelAccion1', $titulotercernivel->getTitulotercernivelAccion());
		$insert->bindValue('titulotercernivelfecha1', $titulotercernivel->getTitulotercernivelfecha());
		$insert->bindValue('titulotercerniveluser1', $titulotercernivel->getTitulotercerniveluser());
		$insert->execute();
	}
}
