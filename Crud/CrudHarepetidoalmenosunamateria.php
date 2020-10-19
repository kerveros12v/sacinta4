<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Harepetidoalmenosunamateria.php");

use Clasesphp\Harepetidoalmenosunamateria;

class CrudHarepetidoalmenosunamateria
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
		$listaperdidomateria = null;
		$select = $db->query("SELECT * FROM `harepetidoalmenosunamateria`");
		foreach ($select->fetchAll() as $perdidomateria) {
			$myperdidomateria = new Harepetidoalmenosunamateria();
			$myperdidomateria->setHaRepetidoAlMenosUnaMateriaid($perdidomateria['haRepetidoAlMenosUnaMateriaid']);
			$myperdidomateria->setHarepetidoalmenosunamateriacodigo($perdidomateria['harepetidoalmenosunamateriacodigo']);
			$myperdidomateria->setHaRepetidoAlMenosUnaMateria($perdidomateria['haRepetidoAlMenosUnaMateria']);
			$myperdidomateria->setHarepetidoalmenosunamateriaOculto($perdidomateria['harepetidoalmenosunamateriaOculto']);
			$myperdidomateria->setHarepetidoalmenosunamateriaAccion($perdidomateria['harepetidoalmenosunamateriaAccion']);
			$myperdidomateria->setHarepetidoalmenosunamateriafecha($perdidomateria['harepetidoalmenosunamateriafecha']);
			$myperdidomateria->setHarepetidoalmenosunamateriauser($perdidomateria['harepetidoalmenosunamateriauser']);
			$listaperdidomateria[] = $myperdidomateria;
		}
		return $listaperdidomateria;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM harepetidoalmenosunamateria WHERE haRepetidoAlMenosUnaMateriaid=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerHarepetidoalmenosunamateria($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM harepetidoalmenosunamateria WHERE haRepetidoAlMenosUnaMateriaid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$perdidomateria = $select->fetch();
		$myperdidomateria = new Harepetidoalmenosunamateria();
		$myperdidomateria->setHaRepetidoAlMenosUnaMateriaid($perdidomateria['haRepetidoAlMenosUnaMateriaid']);
		$myperdidomateria->setHarepetidoalmenosunamateriacodigo($perdidomateria['harepetidoalmenosunamateriacodigo']);
		$myperdidomateria->setHaRepetidoAlMenosUnaMateria($perdidomateria['haRepetidoAlMenosUnaMateria']);
		$myperdidomateria->setHarepetidoalmenosunamateriaOculto($perdidomateria['harepetidoalmenosunamateriaOculto']);
		$myperdidomateria->setHarepetidoalmenosunamateriaAccion($perdidomateria['harepetidoalmenosunamateriaAccion']);
		$myperdidomateria->setHarepetidoalmenosunamateriafecha($perdidomateria['harepetidoalmenosunamateriafecha']);
		$myperdidomateria->setHarepetidoalmenosunamateriauser($perdidomateria['harepetidoalmenosunamateriauser']);

		return $myperdidomateria;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT haRepetidoAlMenosUnaMateria FROM harepetidoalmenosunamateria WHERE haRepetidoAlMenosUnaMateriaid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$perdidomateria = $select->fetch();
		$myperdidomateria = ($perdidomateria['haRepetidoAlMenosUnaMateria']);

		return $myperdidomateria;
	}
	public function actualizar($perdidomateria)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `harepetidoalmenosunamateria`
		SET
		`haRepetidoAlMenosUnaMateriaid` = :haRepetidoAlMenosUnaMateriaid1,
		`harepetidoalmenosunamateriacodigo` = :harepetidoalmenosunamateriacodigo1,
		`haRepetidoAlMenosUnaMateria` = :haRepetidoAlMenosUnaMateria1,
		`harepetidoalmenosunamateriaOculto` = :harepetidoalmenosunamateriaOculto1,
		`harepetidoalmenosunamateriaAccion` = :harepetidoalmenosunamateriaAccion1,
		`harepetidoalmenosunamateriafecha` = :harepetidoalmenosunamateriafecha1,
		`harepetidoalmenosunamateriauser` = :harepetidoalmenosunamateriauser1
		WHERE `haRepetidoAlMenosUnaMateriaid` = :haRepetidoAlMenosUnaMateriaid1;');
		$actualizar->bindValue('haRepetidoAlMenosUnaMateriaid1', $perdidomateria->getHaRepetidoAlMenosUnaMateriaid());
		$actualizar->bindValue('harepetidoalmenosunamateriacodigo1', $perdidomateria->getHarepetidoalmenosunamateriacodigo());
		$actualizar->bindValue('haRepetidoAlMenosUnaMateria1', $perdidomateria->getHaRepetidoAlMenosUnaMateria());
		$actualizar->bindValue('harepetidoalmenosunamateriaOculto1', $perdidomateria->getHarepetidoalmenosunamateriaOculto());
		$actualizar->bindValue('harepetidoalmenosunamateriaAccion1', $perdidomateria->getHarepetidoalmenosunamateriaAccion());
		$actualizar->bindValue('harepetidoalmenosunamateriafecha1', $perdidomateria->getHarepetidoalmenosunamateriafecha());
		$actualizar->bindValue('harepetidoalmenosunamateriauser1', $perdidomateria->getHarepetidoalmenosunamateriauser());
		$actualizar->execute();
	}
	public function insertar($perdidomateria)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `harepetidoalmenosunamateria`
		(`haRepetidoAlMenosUnaMateriaid`,
		`harepetidoalmenosunamateriacodigo`,
		`haRepetidoAlMenosUnaMateria`,
		`harepetidoalmenosunamateriaOculto`,
		`harepetidoalmenosunamateriaAccion`,
		`harepetidoalmenosunamateriafecha`,
		`harepetidoalmenosunamateriauser`)
		VALUES
		(:haRepetidoAlMenosUnaMateriaid1,
		:harepetidoalmenosunamateriacodigo1,
		:haRepetidoAlMenosUnaMateria1,
		:harepetidoalmenosunamateriaOculto1,
		:harepetidoalmenosunamateriaAccion1,
		:harepetidoalmenosunamateriafecha1,
		:harepetidoalmenosunamateriauser1);');
		$insert->bindValue('haRepetidoAlMenosUnaMateriaid1', $perdidomateria->getHaRepetidoAlMenosUnaMateriaid());
		$insert->bindValue('harepetidoalmenosunamateriacodigo1', $perdidomateria->getHarepetidoalmenosunamateriacodigo());
		$insert->bindValue('haRepetidoAlMenosUnaMateria1', $perdidomateria->getHaRepetidoAlMenosUnaMateria());
		$insert->bindValue('harepetidoalmenosunamateriaOculto1', $perdidomateria->getHarepetidoalmenosunamateriaOculto());
		$insert->bindValue('harepetidoalmenosunamateriaAccion1', $perdidomateria->getHarepetidoalmenosunamateriaAccion());
		$insert->bindValue('harepetidoalmenosunamateriafecha1', $perdidomateria->getHarepetidoalmenosunamateriafecha());
		$insert->bindValue('harepetidoalmenosunamateriauser1', $perdidomateria->getHarepetidoalmenosunamateriauser());
		$insert->execute();
	}
}
