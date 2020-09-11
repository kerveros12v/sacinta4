<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Jornadasacademicas.php");

use Clasesphp\Jornadasacademicas;

class CrudJornadasAcademicas
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listaJornadasAcademicas = null;
		$select = $db->query("SELECT * FROM `jornadasacademicas`;");
		foreach ($select->fetchAll() as $jornadasAcademicas) {
			$myjornadasAcademicas = new Jornadasacademicas();
			$myjornadasAcademicas->setJornadaAcademicaId($jornadasAcademicas['jornadaAcademicaId']);
			$myjornadasAcademicas->setJornadaAcademicaCodigo($jornadasAcademicas['jornadaAcademicaCodigo']);
			$myjornadasAcademicas->setJornadaAcademica($jornadasAcademicas['jornadaAcademica']);
			$myjornadasAcademicas->setJornadasacademicasOculto($jornadasAcademicas['jornadasacademicasOculto']);
			$myjornadasAcademicas->setJornadasacademicasAccion($jornadasAcademicas['jornadasacademicasAccion']);
			$myjornadasAcademicas->setJornadasacademicasfecha($jornadasAcademicas['jornadasacademicasfecha']);
			$myjornadasAcademicas->setJornadasacademicasuser($jornadasAcademicas['jornadasacademicasuser']);
			$listaJornadasAcademicas[] = $myjornadasAcademicas;
		}
		return $listaJornadasAcademicas;
	}
	public function obtenerJornadasacademicas($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM jornadasacademicas WHERE JornadaAcademicaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$jornadasAcademicas = $select->fetch();
		$myjornadasAcademicas = new Jornadasacademicas();
		$myjornadasAcademicas->setJornadaAcademicaId($jornadasAcademicas['jornadaAcademicaId']);
		$myjornadasAcademicas->setJornadaAcademicaCodigo($jornadasAcademicas['jornadaAcademicaCodigo']);
		$myjornadasAcademicas->setJornadaAcademica($jornadasAcademicas['jornadaAcademica']);
		$myjornadasAcademicas->setJornadasacademicasOculto($jornadasAcademicas['jornadasacademicasOculto']);
		$myjornadasAcademicas->setJornadasacademicasAccion($jornadasAcademicas['jornadasacademicasAccion']);
		$myjornadasAcademicas->setJornadasacademicasfecha($jornadasAcademicas['jornadasacademicasfecha']);
		$myjornadasAcademicas->setJornadasacademicasuser($jornadasAcademicas['jornadasacademicasuser']);

		return $myjornadasAcademicas;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM jornadasacademicas WHERE jornadaAcademicaId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$jornadasAcademicas = $select->fetch();
		$myjornadasAcademicas = ($jornadasAcademicas['JornadaAcademica']);

		return $myjornadasAcademicas;
	}

	public function actualizar($jornadaacademica)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `jornadasacademicas`
			SET
			`jornadaAcademicaId` = :JornadaAcademicaId1,
			`jornadaAcademicaCodigo` = :JornadaAcademicaCodigo1,
			`jornadaAcademica` = :JornadaAcademica1,
			`jornadasacademicasOculto` = :jornadasacademicasOculto1,
			`jornadasacademicasAccion` = :jornadasacademicasAccion1,
			`jornadasacademicasfecha` = :jornadasacademicasfecha1,
			`jornadasacademicasuser` = :jornadasacademicasuser1
			WHERE `JornadaAcademicaId` = :JornadaAcademicaId1;');
		$actualizar->bindValue('JornadaAcademicaId1', $jornadaacademica->getJornadaAcademicaId());
		$actualizar->bindValue('JornadaAcademicaCodigo1', $jornadaacademica->getJornadaAcademicaCodigo());
		$actualizar->bindValue('JornadaAcademica1', $jornadaacademica->getJornadaAcademica());
		$actualizar->bindValue('jornadasacademicasOculto1', $jornadaacademica->getJornadasacademicasOculto());
		$actualizar->bindValue('jornadasacademicasAccion1', $jornadaacademica->getJornadasacademicasAccion());
		$actualizar->bindValue('jornadasacademicasfecha1', $jornadaacademica->getJornadasacademicasfecha());
		$actualizar->bindValue('jornadasacademicasuser1', $jornadaacademica->getJornadasacademicasuser());
		$actualizar->execute();
	}
	public function insertar($jornadaacademica)
	{

		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `jornadasacademicas`
			(`jornadaAcademicaId`,
			`jornadaAcademicaCodigo`,
			`jornadaAcademica`,
			`jornadasacademicasOculto`,
			`jornadasacademicasAccion`,
			`jornadasacademicasfecha`,
			`jornadasacademicasuser`)
			VALUES
			(:JornadaAcademicaId1,
			:JornadaAcademicaCodigo1,
			:JornadaAcademica1,
			:jornadasacademicasOculto1,
			:jornadasacademicasAccion1,
			:jornadasacademicasfecha1,
			:jornadasacademicasuser1);');
		$insert->bindValue('JornadaAcademicaId1', $jornadaacademica->getJornadaAcademicaId());
		$insert->bindValue('JornadaAcademicaCodigo1', $jornadaacademica->getJornadaAcademicaCodigo());
		$insert->bindValue('JornadaAcademica1', $jornadaacademica->getJornadaAcademica());
		$insert->bindValue('jornadasacademicasOculto1', $jornadaacademica->getJornadasacademicasOculto());
		$insert->bindValue('jornadasacademicasAccion1', $jornadaacademica->getJornadasacademicasAccion());
		$insert->bindValue('jornadasacademicasfecha1', $jornadaacademica->getJornadasacademicasfecha());
		$insert->bindValue('jornadasacademicasuser1', $jornadaacademica->getJornadasacademicasuser());
		$insert->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `jornadasacademicas`
			WHERE JornadaAcademicaId=:id;');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
