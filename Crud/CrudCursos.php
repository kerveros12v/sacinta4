<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Cursos.php';

use Clasesphp\Cursos;

class CrudCursos
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		//, , , , , , , , ,

		$db = Db::conectar();
		$cursos = null;
		$select = $db->query('SELECT * FROM cursos;');
		foreach ($select->fetchAll() as $cursos) {
			$mycursos = new Cursos();
			$mycursos->setIdCursos($cursos['idCursos']);
			$mycursos->setCursoscodigo($cursos['cursoscodigo']);
			$mycursos->setFkcarrerasId($cursos['fkcarrerasId']);
			$mycursos->setFkparaleloId($cursos['fkparaleloId']);
			$mycursos->setFknivelAcademicoQueCursaId($cursos['fknivelAcademicoQueCursaId']);
			$mycursos->setFkjJornadaAcademicaId($cursos['fkjJornadaAcademicaId']);
			$mycursos->setCursosOculto($cursos['cursosOculto']);
			$mycursos->setCursosAccion($cursos['cursosAccion']);
			$mycursos->setCursosfecha($cursos['cursosfecha']);
			$mycursos->setCursosuser($cursos['cursosuser']);
			$mycursos->setFkperiodo($cursos['fkperiodo']);
			$listacursos[] = $mycursos;
		}

		return $listacursos;
	}

	public function obtenercursos($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM cursos WHERE idCursos=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cursos = $select->fetch();
		$mycursos = new Cursos();
		$mycursos->setIdCursos($cursos['idCursos']);
		$mycursos->setCursoscodigo($cursos['cursoscodigo']);
		$mycursos->setFkcarrerasId($cursos['fkcarrerasId']);
		$mycursos->setFkparaleloId($cursos['fkparaleloId']);
		$mycursos->setFknivelAcademicoQueCursaId($cursos['fknivelAcademicoQueCursaId']);
		$mycursos->setFkjJornadaAcademicaId($cursos['fkjJornadaAcademicaId']);
		$mycursos->setCursosOculto($cursos['cursosOculto']);
		$mycursos->setCursosAccion($cursos['cursosAccion']);
		$mycursos->setCursosfecha($cursos['cursosfecha']);
		$mycursos->setCursosuser($cursos['cursosuser']);
		$mycursos->setFkperiodo($cursos['fkperiodo']);

		return $mycursos;
	}

	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT cursoscodigo FROM cursos WHERE idCursos=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$cursos = $select->fetch();

		$mycursos = ($cursos['cursoscodigo']);

		return $mycursos;
	}

	public function actualizar($cursos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `cursos`
		SET
		`idCursos` = :idCursos1,
		`cursoscodigo` = :cursoscodigo1,
		`fkcarrerasId` = :fkcarrerasId1,
		`fkparaleloId` = :fkparaleloId1,
		`fknivelAcademicoQueCursaId` = :fknivelAcademicoQueCursaId1,
		`fkjJornadaAcademicaId` = :fkjJornadaAcademicaId1,
		`fkperiodo` = :fkperiodo1,
		`cursosOculto` = :cursosOculto1,
		`cursosAccion` = :cursosAccion1,
		`cursosfecha` = :cursosfecha1,
		`cursosuser` = :cursosuser1
		WHERE `idCursos` = :idCursos1;');
		$actualizar->bindValue('idCursos1', $cursos->getIdCursos());
		$actualizar->bindValue('cursoscodigo1', $cursos->getCursoscodigo());
		$actualizar->bindValue('fkcarrerasId1', $cursos->getFkcarrerasId());
		$actualizar->bindValue('fkparaleloId1', $cursos->getFkparaleloId());
		$actualizar->bindValue('fknivelAcademicoQueCursaId1', $cursos->getFknivelAcademicoQueCursaId());
		$actualizar->bindValue('fkjJornadaAcademicaId1', $cursos->getFkjJornadaAcademicaId());
		$actualizar->bindValue('fkperiodo1', $cursos->getFkperiodo());
		$actualizar->bindValue('cursosOculto1', $cursos->getCursosOculto());
		$actualizar->bindValue('cursosAccion1', $cursos->getCursosAccion());
		$actualizar->bindValue('cursosfecha1', $cursos->getCursosfecha());
		$actualizar->bindValue('cursosuser1', $cursos->getCursosuser());
		$actualizar->execute();
	}

	public function insertar($cursos)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `cursos`
		(`idCursos`,
		`cursoscodigo`,
		`fkcarrerasId`,
		`fkparaleloId`,
		`fknivelAcademicoQueCursaId`,
		`fkjJornadaAcademicaId`,
		`fkperiodo`,
		`cursosOculto`,
		`cursosAccion`,
		`cursosfecha`,
		`cursosuser`)
		VALUES
		(:idCursos1,
		:cursoscodigo1,
		:fkcarrerasId1,
		:fkparaleloId1,
		:fknivelAcademicoQueCursaId1,
		:fkjJornadaAcademicaId1,
		:fkperiodo1,
		:cursosOculto1,
		:cursosAccion1,
		:cursosfecha1,
		:cursosuser1);');
		$insert->bindValue('idCursos1', $cursos->getIdCursos());
		$insert->bindValue('cursoscodigo1', $cursos->getCursoscodigo());
		$insert->bindValue('fkcarrerasId1', $cursos->getFkcarrerasId());
		$insert->bindValue('fkparaleloId1', $cursos->getFkparaleloId());
		$insert->bindValue('fknivelAcademicoQueCursaId1', $cursos->getFknivelAcademicoQueCursaId());
		$insert->bindValue('fkjJornadaAcademicaId1', $cursos->getFkjJornadaAcademicaId());
		$insert->bindValue('fkperiodo1', $cursos->getFkperiodo());
		$insert->bindValue('cursosOculto1', $cursos->getCursosOculto());
		$insert->bindValue('cursosAccion1', $cursos->getCursosAccion());
		$insert->bindValue('cursosfecha1', $cursos->getCursosfecha());
		$insert->bindValue('cursosuser1', $cursos->getCursosuser());

		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM cursos WHERE idCursos=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
