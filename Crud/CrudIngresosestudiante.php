<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Ingresosestudiante.php");

use Clasesphp\Ingresosestudiante;

class CrudIngresosestudiante
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listaingresosestudiante = null;
		$select = $db->query("SELECT * FROM ingresosestudiante;");
		foreach ($select->fetchAll() as $ingresosestudiante) {
			$myingresosestudiante = new Ingresosestudiante();
			$myingresosestudiante->setIngresosestudianteId($ingresosestudiante['ingresosestudianteId']);
			$myingresosestudiante->setIngresosestudiantecodigo($ingresosestudiante['ingresosestudiantecodigo']);
			$myingresosestudiante->setIngresosestudiante($ingresosestudiante['ingresosestudiante']);
			$myingresosestudiante->setIngresosestudianteOculto($ingresosestudiante['ingresosestudianteOculto']);
			$myingresosestudiante->setIngresosestudianteAccion($ingresosestudiante['ingresosestudianteAccion']);
			$myingresosestudiante->setIngresosestudiantefecha($ingresosestudiante['ingresosestudiantefecha']);
			$myingresosestudiante->setIngresosestudianteuser($ingresosestudiante['ingresosestudianteuser']);
			$listaingresosestudiante[] = $myingresosestudiante;
		}
		return $listaingresosestudiante;
	}
	public function obtenerIngresosestudiante($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM ingresosestudiante WHERE ingresosestudianteId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$ingresosestudiante = $select->fetch();
		$myingresosestudiante = new Ingresosestudiante();
		$myingresosestudiante->setIngresosestudianteId($ingresosestudiante['ingresosestudianteId']);
		$myingresosestudiante->setIngresosestudiantecodigo($ingresosestudiante['ingresosestudiantecodigo']);
		$myingresosestudiante->setIngresosestudiante($ingresosestudiante['ingresosestudiante']);
		$myingresosestudiante->setIngresosestudianteOculto($ingresosestudiante['ingresosestudianteOculto']);
		$myingresosestudiante->setIngresosestudianteAccion($ingresosestudiante['ingresosestudianteAccion']);
		$myingresosestudiante->setIngresosestudiantefecha($ingresosestudiante['ingresosestudiantefecha']);
		$myingresosestudiante->setIngresosestudianteuser($ingresosestudiante['ingresosestudianteuser']);

		return $myingresosestudiante;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM ingresosestudiante WHERE ingresosestudianteId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$ingresosestudiante = $select->fetch();
		$myingresosestudiante = ($ingresosestudiante['ingresosestudiante']);

		return $myingresosestudiante;
	}
	public function actualizar($ingresosestudiante)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `ingresosestudiante`
			SET
			`ingresosestudianteId` = :ingresosestudianteId1,
			`ingresosestudiantecodigo` = :ingresosestudiantecodigo1,
			`ingresosestudiante` = :ingresosestudiante1,
			`ingresosestudianteOculto` = :ingresosestudianteOculto1,
			`ingresosestudianteAccion` = :ingresosestudianteAccion1,
			`ingresosestudiantefecha` = :ingresosestudiantefecha1,
			`ingresosestudianteuser` = :ingresosestudianteuser1
			WHERE `ingresosestudianteId` = :ingresosestudianteId1;');
		$actualizar->bindValue('ingresosestudianteId1', $ingresosestudiante->getIngresosestudianteId());
		$actualizar->bindValue('ingresosestudiantecodigo1', $ingresosestudiante->getIngresosestudiantecodigo());
		$actualizar->bindValue('ingresosestudiante1', $ingresosestudiante->getIngresosestudiante());
		$actualizar->bindValue('ingresosestudianteOculto1', $ingresosestudiante->getIngresosestudianteOculto());
		$actualizar->bindValue('ingresosestudianteAccion1', $ingresosestudiante->getIngresosestudianteAccion());
		$actualizar->bindValue('ingresosestudiantefecha1', $ingresosestudiante->getIngresosestudiantefecha());
		$actualizar->bindValue('ingresosestudianteuser1', $ingresosestudiante->getIngresosestudianteuser());
		$actualizar->execute();
	}
	public function insertar($ingresosestudiante)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `ingresosestudiante`
			(`ingresosestudianteId`,
			`ingresosestudiantecodigo`,
			`ingresosestudiante`,
			`ingresosestudianteOculto`,
			`ingresosestudianteAccion`,
			`ingresosestudiantefecha`,
			`ingresosestudianteuser`)
			VALUES
			(:ingresosestudianteId1,
			:ingresosestudiantecodigo1,
			:ingresosestudiante1,
			:ingresosestudianteOculto1,
			:ingresosestudianteAccion1,
			:ingresosestudiantefecha1,
			:ingresosestudianteuser1);');
		$insert->bindValue('ingresosestudianteId1', $ingresosestudiante->getIngresosestudianteId());
		$insert->bindValue('ingresosestudiantecodigo1', $ingresosestudiante->getIngresosestudiantecodigo());
		$insert->bindValue('ingresosestudiante1', $ingresosestudiante->getIngresosestudiante());
		$insert->bindValue('ingresosestudianteOculto1', $ingresosestudiante->getIngresosestudianteOculto());
		$insert->bindValue('ingresosestudianteAccion1', $ingresosestudiante->getIngresosestudianteAccion());
		$insert->bindValue('ingresosestudiantefecha1', $ingresosestudiante->getIngresosestudiantefecha());
		$insert->bindValue('ingresosestudianteuser1', $ingresosestudiante->getIngresosestudianteuser());
		$insert->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `ingresosestudiante`
		WHERE ingresosestudianteId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
