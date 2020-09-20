<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/CicloPeriodo.php");

use Crud\Db;
use Clasesphp\CicloPeriodo;

class CrudCicloPeriodo
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaclicloperiodo = NULL;
		$select = $db->query("SELECT * FROM `cicloperiodo`");
		foreach ($select->fetchAll() as $clicloperiodo) {
			$myclicloperiodo = new CicloPeriodo();
			$myclicloperiodo->setIdcicloperiodo($clicloperiodo['idcicloperiodo']);
			$myclicloperiodo->setCicloperiodocodigo($clicloperiodo['cicloperiodocodigo']);
			$myclicloperiodo->setCiclo($clicloperiodo['ciclo']);
			$myclicloperiodo->setCicloperiodoOculto($clicloperiodo['cicloperiodoOculto']);
			$myclicloperiodo->setCicloperiodoAccion($clicloperiodo['cicloperiodoAccion']);
			$myclicloperiodo->setCicloperiodofecha($clicloperiodo['cicloperiodofecha']);
			$myclicloperiodo->setCicloperiodouser($clicloperiodo['cicloperiodouser']);

			$listaclicloperiodo[] = $myclicloperiodo;
		}
		return $listaclicloperiodo;
	}


	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM cicloperiodo WHERE idcicloperiodo=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerclicloperiodo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM cicloperiodo WHERE idcicloperiodo=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$clicloperiodo = $select->fetch();
		$myclicloperiodo = new CicloPeriodo();
		$myclicloperiodo->setIdcicloperiodo($clicloperiodo['idcicloperiodo']);
		$myclicloperiodo->setCicloperiodocodigo($clicloperiodo['cicloperiodocodigo']);
		$myclicloperiodo->setCiclo($clicloperiodo['ciclo']);
		$myclicloperiodo->setCicloperiodoOculto($clicloperiodo['cicloperiodoOculto']);
		$myclicloperiodo->setCicloperiodoAccion($clicloperiodo['cicloperiodoAccion']);
		$myclicloperiodo->setCicloperiodofecha($clicloperiodo['cicloperiodofecha']);
		$myclicloperiodo->setCicloperiodouser($clicloperiodo['cicloperiodouser']);
		return $myclicloperiodo;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT ciclo FROM cicloperiodo WHERE idcicloperiodo=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$clicloperiodo = $select->fetch();
		$myclicloperiodo = ($clicloperiodo['ciclo']);

		return $myclicloperiodo;
	}
	public function actualizar($clicloperiodo)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `cicloperiodo`
		SET
		`idcicloperiodo` = :idcicloperiodo1,
		`cicloperiodocodigo` = :cicloperiodocodigo1,
		`ciclo` = :ciclo1,
		`cicloperiodoOculto` = :cicloperiodoOculto1,
		`cicloperiodoAccion` = :cicloperiodoAccion1,
		`cicloperiodofecha` = :cicloperiodofecha1,
		`cicloperiodouser` = :cicloperiodouser1
		WHERE `idcicloperiodo` = :idcicloperiodo1;');
		$actualizar->bindValue('idcicloperiodo1', $clicloperiodo->getIdcicloperiodo());
		$actualizar->bindValue('cicloperiodocodigo1', $clicloperiodo->getCicloperiodocodigo());
		$actualizar->bindValue('ciclo1', $clicloperiodo->getCiclo());
		$actualizar->bindValue('cicloperiodoOculto1', $clicloperiodo->getCicloperiodoOculto());
		$actualizar->bindValue('cicloperiodoAccion1', $clicloperiodo->getCicloperiodoAccion());
		$actualizar->bindValue('cicloperiodofecha1', $clicloperiodo->getCicloperiodofecha());
		$actualizar->bindValue('cicloperiodouser1', $clicloperiodo->getCicloperiodouser());
		$actualizar->execute();
	}
	public function insertar($clicloperiodo)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `cicloperiodo`
				(`idcicloperiodo`,`cicloperiodocodigo`,`ciclo`,`cicloperiodoOculto`,`cicloperiodoAccion`,`cicloperiodofecha`,`cicloperiodouser`)
				VALUES
				(:idcicloperiodo1,:cicloperiodocodigo1,:ciclo1,:cicloperiodoOculto1,:cicloperiodoAccion1,:cicloperiodofecha1,:cicloperiodouser1);');
		$insert->bindValue('idcicloperiodo1', $clicloperiodo->getIdcicloperiodo());
		$insert->bindValue('cicloperiodocodigo1', $clicloperiodo->getCicloperiodocodigo());
		$insert->bindValue('ciclo1', $clicloperiodo->getCiclo());
		$insert->bindValue('cicloperiodoOculto1', $clicloperiodo->getCicloperiodoOculto());
		$insert->bindValue('cicloperiodoAccion1', $clicloperiodo->getCicloperiodoAccion());
		$insert->bindValue('cicloperiodofecha1', $clicloperiodo->getCicloperiodofecha());
		$insert->bindValue('cicloperiodouser1', $clicloperiodo->getCicloperiodouser());

		$insert->execute();
	}
}
