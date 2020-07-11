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
		$db = Db::conectar();
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaclicloperiodo = NULL;
		$select = $db->query("SELECT * FROM `cicloperiodo`");
		foreach ($select->fetchAll() as $clicloperiodo) {
			$myclicloperiodo = new CicloPeriodo();
			$myclicloperiodo->set_idcicloperiodo($clicloperiodo['idcicloperiodo']);
			$myclicloperiodo->set_cicloperiodocodigo($clicloperiodo['cicloperiodocodigo']);
			$myclicloperiodo->set_ciclo($clicloperiodo['ciclo']);
			$myclicloperiodo->set_cicloperiodoOculto($clicloperiodo['cicloperiodoOculto']);
			$myclicloperiodo->set_cicloperiodoAccion($clicloperiodo['cicloperiodoAccion']);
			$myclicloperiodo->set_cicloperiodofecha($clicloperiodo['cicloperiodofecha']);
			$myclicloperiodo->set_cicloperiodouser($clicloperiodo['cicloperiodouser']);

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
		$myclicloperiodo->set_idcicloperiodo($clicloperiodo['idcicloperiodo']);
		$myclicloperiodo->set_cicloperiodocodigo($clicloperiodo['cicloperiodocodigo']);
		$myclicloperiodo->set_ciclo($clicloperiodo['ciclo']);
		$myclicloperiodo->set_cicloperiodoOculto($clicloperiodo['cicloperiodoOculto']);
		$myclicloperiodo->set_cicloperiodoAccion($clicloperiodo['cicloperiodoAccion']);
		$myclicloperiodo->set_cicloperiodofecha($clicloperiodo['cicloperiodofecha']);
		$myclicloperiodo->set_cicloperiodouser($clicloperiodo['cicloperiodouser']);

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
		$clicloperiodo = new CicloPeriodo();
		$actualizar = $db->prepare('UPDATE canton SET `cantonId`=:id,`canton`=:clicloperiodo WHERE cantonId=:id');
		$actualizar->bindValue('idcicloperiodo1', $clicloperiodo->get_idcicloperiodo());
		$actualizar->bindValue('cicloperiodocodigo1', $clicloperiodo->get_cicloperiodocodigo());
		$actualizar->bindValue('ciclo1', $clicloperiodo->get_ciclo());
		$actualizar->bindValue('cicloperiodoOculto1', $clicloperiodo->get_cicloperiodoOculto());
		$actualizar->bindValue('cicloperiodoAccion1', $clicloperiodo->get_cicloperiodoAccion());
		$actualizar->bindValue('cicloperiodofecha1', $clicloperiodo->get_cicloperiodofecha());
		$actualizar->bindValue('cicloperiodouser1', $clicloperiodo->get_cicloperiodouser());
		$actualizar->execute();
	}
	public function insertar($clicloperiodo)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `cicloperiodo`
				(`idcicloperiodo`,`cicloperiodocodigo`,`ciclo`,`cicloperiodoOculto`,`cicloperiodoAccion`,`cicloperiodofecha`,`cicloperiodouser`)
				VALUES
				(:idcicloperiodo1,:cicloperiodocodigo1,:ciclo1,:cicloperiodoOculto1,:cicloperiodoAccion1,:cicloperiodofecha1,:cicloperiodouser1);');
		$insert->bindValue('idcicloperiodo1', $clicloperiodo->get_idcicloperiodo());
		$insert->bindValue('cicloperiodocodigo1', $clicloperiodo->get_cicloperiodocodigo());
		$insert->bindValue('ciclo1', $clicloperiodo->get_ciclo());
		$insert->bindValue('cicloperiodoOculto1', $clicloperiodo->get_cicloperiodoOculto());
		$insert->bindValue('cicloperiodoAccion1', $clicloperiodo->get_cicloperiodoAccion());
		$insert->bindValue('cicloperiodofecha1', $clicloperiodo->get_cicloperiodofecha());
		$insert->bindValue('cicloperiodouser1', $clicloperiodo->get_cicloperiodouser());

		$insert->execute();
	}
}
