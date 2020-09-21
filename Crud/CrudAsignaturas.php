<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Asignaturas.php';

use Clasesphp\Asignaturas;

class CrudAsignaturas
{
	// constructor de la clase
	public function __construct()
	{
	}
	//, , , , , ,
	public function mostrar()
	{
		$db = Db::conectar();
		$asignatura = null;
		$select = $db->query('SELECT * FROM asignaturas;');
		foreach ($select->fetchAll() as $asignatura) {
			$myasignatura = new Asignaturas();
			$myasignatura->setAsignaturasId($asignatura['asignaturasId']);
			$myasignatura->setMateria($asignatura['materia']);
			$myasignatura->setCodigoMateria($asignatura['codigoMateria']);
			$myasignatura->setAsignaturasOculto($asignatura['asignaturasOculto']);
			$myasignatura->setAsignaturasAccion($asignatura['asignaturasAccion']);
			$myasignatura->setAsignaturasfecha($asignatura['asignaturasfecha']);
			$myasignatura->setAsignaturasuser($asignatura['asignaturasuser']);
			$listaasignatura[] = $myasignatura;
		}

		return $listaasignatura;
	}

	public function obtenerBimestre($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM asignaturas WHERE asignaturasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$asignatura = $select->fetch();
		$myasignatura = new Asignaturas();
		$myasignatura->setAsignaturasId($asignatura['asignaturasId']);
		$myasignatura->setMateria($asignatura['materia']);
		$myasignatura->setCodigoMateria($asignatura['codigoMateria']);
		$myasignatura->setAsignaturasOculto($asignatura['asignaturasOculto']);
		$myasignatura->setAsignaturasAccion($asignatura['asignaturasAccion']);
		$myasignatura->setAsignaturasfecha($asignatura['asignaturasfecha']);
		$myasignatura->setAsignaturasuser($asignatura['asignaturasuser']);

		return $myasignatura;
	}

	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT materia FROM asignaturas WHERE asignaturasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$asignatura = $select->fetch();

		$myasignatura = ($asignatura['materia']);

		return $myasignatura;
	}

	public function actualizar($asignatura)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `asignaturas`
		SET
		`asignaturasId` = :asignaturasId1,
		`codigoMateria` = :codigoMateria1,
		`materia` = :materia1,
		`asignaturasOculto` = :asignaturasOculto1,
		`asignaturasAccion` = :asignaturasAccion1,
		`asignaturasfecha` = :asignaturasfecha1,
		`asignaturasuser` = :asignaturasuser1
		WHERE `asignaturasId` = :asignaturasId1;');
		$actualizar->bindValue('asignaturasId1', $asignatura->getAsignaturasId());
		$actualizar->bindValue('codigoMateria1', $asignatura->getCodigoMateria());
		$actualizar->bindValue('materia1', $asignatura->getMateria());
		$actualizar->bindValue('asignaturasOculto1', $asignatura->getAsignaturasOculto());
		$actualizar->bindValue('asignaturasAccion1', $asignatura->getAsignaturasAccion());
		$actualizar->bindValue('asignaturasfecha1', $asignatura->getAsignaturasfecha());
		$actualizar->bindValue('asignaturasuser1', $asignatura->getAsignaturasuser());
		$actualizar->execute();
	}

	public function insertar($asignatura)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `asignaturas`
		(`asignaturasId`,
		`codigoMateria`,
		`materia`,
		`asignaturasOculto`,
		`asignaturasAccion`,
		`asignaturasfecha`,
		`asignaturasuser`)
		VALUES
		(:asignaturasId1,
		:codigoMateria1,
		:materia1,
		:asignaturasOculto1,
		:asignaturasAccion1,
		:asignaturasfecha1,
		:asignaturasuser1);');
		$insert->bindValue('asignaturasId1', $asignatura->getAsignaturasId());
		$insert->bindValue('codigoMateria1', $asignatura->getCodigoMateria());
		$insert->bindValue('materia1', $asignatura->getMateria());
		$insert->bindValue('asignaturasOculto1', $asignatura->getAsignaturasOculto());
		$insert->bindValue('asignaturasAccion1', $asignatura->getAsignaturasAccion());
		$insert->bindValue('asignaturasfecha1', $asignatura->getAsignaturasfecha());
		$insert->bindValue('asignaturasuser1', $asignatura->getAsignaturasuser());
		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM asignaturas WHERE asignaturasId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
