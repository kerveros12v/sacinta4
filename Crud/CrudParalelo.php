<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Paralelos.php");

use Clasesphp\Paralelos;

class CrudParalelo
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaparalelo = null;
		$select = $db->query("SELECT * FROM `paralelo`;");

		foreach ($select->fetchAll() as $paralelo) {
			$myparalelo = new Paralelos();
			$myparalelo->setParaleloId($paralelo['paraleloId']);
			$myparalelo->setParalelo($paralelo['paralelo']);
			$myparalelo->setParalelocodigo($paralelo['paralelocodigo']);
			$myparalelo->setParaleloOculto($paralelo['paraleloOculto']);
			$myparalelo->setParaleloAccion($paralelo['paraleloAccion']);
			$myparalelo->setParalelofecha($paralelo['paralelofecha']);
			$myparalelo->setParalelouser($paralelo['paralelouser']);
			$listaparalelo[] = $myparalelo;
		}
		return $listaparalelo;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM paralelo WHERE paraleloId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerParalelo($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM paralelo WHERE paraleloId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$paralelo = $select->fetch();
		$myparalelo = new Paralelos();
		$myparalelo->setParaleloId($paralelo['paraleloId']);
		$myparalelo->setParalelo($paralelo['paralelo']);
		$myparalelo->setParalelocodigo($paralelo['paralelocodigo']);
		$myparalelo->setParaleloOculto($paralelo['paraleloOculto']);
		$myparalelo->setParaleloAccion($paralelo['paraleloAccion']);
		$myparalelo->setParalelofecha($paralelo['paralelofecha']);
		$myparalelo->setParalelouser($paralelo['paralelouser']);

		return $myparalelo;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT paralelo FROM paralelo WHERE paraleloId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$paralelo = $select->fetch();
		$myparalelo = ($paralelo['paralelo']);

		return $myparalelo;
	}

	public function actualizar($paralelo)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `paralelo`
			SET
			`paraleloId` = :paraleloId1,
			`paralelocodigo` = :paralelocodigo1,
			`paralelo` = :paralelo1,
			`paraleloOculto` = :paraleloOculto1,
			`paraleloAccion` = :paraleloAccion1,
			`paralelofecha` = :paralelofecha1,
			`paralelouser` = :paralelouser1
			WHERE `paraleloId` = :paraleloId1;');
		$actualizar->bindValue('paraleloId1', $paralelo->getParaleloId());
		$actualizar->bindValue('paralelocodigo1', $paralelo->getParalelocodigo());
		$actualizar->bindValue('paralelo1', $paralelo->getParalelo());
		$actualizar->bindValue('paraleloOculto1', $paralelo->getParaleloOculto());
		$actualizar->bindValue('paraleloAccion1', $paralelo->getParaleloAccion());
		$actualizar->bindValue('paralelofecha1', $paralelo->getParalelofecha());
		$actualizar->bindValue('paralelouser1', $paralelo->getParalelouser());

		$actualizar->execute();
	}
	public function insertar($paralelo)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `paralelo`
			(`paraleloId`,
			`paralelocodigo`,
			`paralelo`,
			`paraleloOculto`,
			`paraleloAccion`,
			`paralelofecha`,
			`paralelouser`)
			VALUES
			(:paraleloId1,
			:paralelocodigo1,
			:paralelo1,
			:paraleloOculto1,
			:paraleloAccion1,
			:paralelofecha1,
			:paralelouser1);');
		$insert->bindValue('paraleloId1', $paralelo->getParaleloId());
		$insert->bindValue('paralelocodigo1', $paralelo->getParalelocodigo());
		$insert->bindValue('paralelo1', $paralelo->getParalelo());
		$insert->bindValue('paraleloOculto1', $paralelo->getParaleloOculto());
		$insert->bindValue('paraleloAccion1', $paralelo->getParaleloAccion());
		$insert->bindValue('paralelofecha1', $paralelo->getParalelofecha());
		$insert->bindValue('paralelouser1', $paralelo->getParalelouser());

		$insert->execute();
	}
}
