<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Estudianteocupacion.php");

use Clasesphp\Estudianteocupacion;

class CrudEstudianteOcupacion
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listaestudianteocupacion = null;
		$select = $db->query("SELECT * FROM estudianteocupacion;");
		foreach ($select->fetchAll() as $o) {
			$myestudianteocupacion = new Estudianteocupacion();
			$myestudianteocupacion->setEstudianteOcupacionId($o['estudianteOcupacionId']);
			$myestudianteocupacion->setEstudianteocupacioncodigo($o['estudianteocupacioncodigo']);
			$myestudianteocupacion->setEstudianteOcupacion($o['estudianteOcupacion']);
			$myestudianteocupacion->setEstudianteocupacionOculto($o['estudianteocupacionOculto']);
			$myestudianteocupacion->setEstudianteocupacionAccion($o['estudianteocupacionAccion']);
			$myestudianteocupacion->setEstudianteocupacionfecha($o['estudianteocupacionfecha']);
			$myestudianteocupacion->setEstudianteocupacionuser($o['estudianteocupacionuser']);
			$listaestudianteocupacion[] = $myestudianteocupacion;
		}
		return $listaestudianteocupacion;
	}
	public function obtenerOcupacion($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM estudianteocupacion WHERE estudianteOcupacionId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$o = $select->fetch();
		$myestudianteocupacion = new Estudianteocupacion();
		$myestudianteocupacion->setEstudianteOcupacionId($o['estudianteOcupacionId']);
		$myestudianteocupacion->setEstudianteocupacioncodigo($o['estudianteocupacioncodigo']);
		$myestudianteocupacion->setEstudianteOcupacion($o['estudianteOcupacion']);
		$myestudianteocupacion->setEstudianteocupacionOculto($o['estudianteocupacionOculto']);
		$myestudianteocupacion->setEstudianteocupacionAccion($o['estudianteocupacionAccion']);
		$myestudianteocupacion->setEstudianteocupacionfecha($o['estudianteocupacionfecha']);
		$myestudianteocupacion->setEstudianteocupacionuser($o['estudianteocupacionuser']);

		return $myestudianteocupacion;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM estudianteocupacion WHERE estudianteOcupacionId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM estudianteocupacion WHERE estudianteOcupacionId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$estudianteocupacion = $select->fetch();
		$myestudianteocupacion = ($estudianteocupacion['estudianteOcupacion']);

		return $myestudianteocupacion;
	}
	public function insertar($estudianteocupacion)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `estudianteocupacion`
			(`estudianteOcupacionId`,
			`estudianteocupacioncodigo`,
			`estudianteOcupacion`,
			`estudianteocupacionOculto`,
			`estudianteocupacionAccion`,
			`estudianteocupacionfecha`,
			`estudianteocupacionuser`)
			VALUES
			(:estudianteOcupacionId1,
			:estudianteocupacioncodigo1,
			:estudianteOcupacion1,
			:estudianteocupacionOculto1,
			:estudianteocupacionAccion1,
			:estudianteocupacionfecha1,
			:estudianteocupacionuser1);');
		$insert->bindValue('estudianteOcupacionId1', $estudianteocupacion->getEstudianteOcupacionId());
		$insert->bindValue('estudianteocupacioncodigo1', $estudianteocupacion->getEstudianteocupacioncodigo());
		$insert->bindValue('estudianteOcupacion1', $estudianteocupacion->getEstudianteOcupacion());
		$insert->bindValue('estudianteocupacionOculto1', $estudianteocupacion->getEstudianteocupacionOculto());
		$insert->bindValue('estudianteocupacionAccion1', $estudianteocupacion->getEstudianteocupacionAccion());
		$insert->bindValue('estudianteocupacionfecha1', $estudianteocupacion->getEstudianteocupacionfecha());
		$insert->bindValue('estudianteocupacionuser1', $estudianteocupacion->getEstudianteocupacionuser());

		$insert->execute();
	}
	public function actualizar($estudianteocupacion)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `estudianteocupacion`
			SET
			`estudianteOcupacionId` = :estudianteOcupacionId1,
			`estudianteocupacioncodigo` = :estudianteocupacioncodigo1,
			`estudianteOcupacion` = :estudianteOcupacion1,
			`estudianteocupacionOculto` = :estudianteocupacionOculto1,
			`estudianteocupacionAccion` = :estudianteocupacionAccion1,
			`estudianteocupacionfecha` = :estudianteocupacionfecha1,
			`estudianteocupacionuser` = :estudianteocupacionuser1
			WHERE `estudianteOcupacionId` = :estudianteOcupacionId1;');
		$actualizar->bindValue('estudianteOcupacionId1', $estudianteocupacion->getEstudianteOcupacionId());
		$actualizar->bindValue('estudianteocupacioncodigo1', $estudianteocupacion->getEstudianteocupacioncodigo());
		$actualizar->bindValue('estudianteOcupacion1', $estudianteocupacion->getEstudianteOcupacion());
		$actualizar->bindValue('estudianteocupacionOculto1', $estudianteocupacion->getEstudianteocupacionOculto());
		$actualizar->bindValue('estudianteocupacionAccion1', $estudianteocupacion->getEstudianteocupacionAccion());
		$actualizar->bindValue('estudianteocupacionfecha1', $estudianteocupacion->getEstudianteocupacionfecha());
		$actualizar->bindValue('estudianteocupacionuser1', $estudianteocupacion->getEstudianteocupacionuser());
		$actualizar->execute();
	}
}
