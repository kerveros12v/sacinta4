<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/EstudianteTrabajo.php");

use Clasesphp\EstudianteTrabajo;

class CrudEstudianteTrabajo
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listatrabajo = null;
		$select = $db->query("SELECT * FROM `estudinatetrabajo`");

		foreach ($select->fetchAll() as $trabajo) {
			$mytrabajo = new EstudianteTrabajo();
			$mytrabajo->setEstudinateTrabajoid($trabajo['estudinateTrabajoid']);
			$mytrabajo->setNomempresa($trabajo['nomempresa']);
			$mytrabajo->setSectoreconomico($trabajo['sectoreconomico']);
			$mytrabajo->setEstudinatenum($trabajo['estudinatenum']);
			$mytrabajo->setEstudinatetrabajoperiodo($trabajo['estudinatetrabajoperiodo']);
			$mytrabajo->setEstudinatetrabajoOculto($trabajo['estudinatetrabajoOculto']);
			$mytrabajo->setEstudinatetrabajoAccion($trabajo['estudinatetrabajoAccion']);
			$mytrabajo->setEstudinatetrabajofecha($trabajo['estudinatetrabajofecha']);
			$mytrabajo->setEstudinatetrabajouser($trabajo['estudinatetrabajouser']);
			////
			$listatrabajo[] = $mytrabajo;
		}
		return $listatrabajo;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `estudinatetrabajo` where estudinatenum=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function obtenerEstudianteTrabajo($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `estudinatetrabajo` WHERE estudinatenum=:id AND estudinatetrabajoperiodo=:periodo;");
		$select->bindValue('id', $id);
		$select->bindValue('periodo', $periodo);
		$select->execute();
		$trabajo = $select->fetch();
		$mytrabajo = new EstudianteTrabajo();
		///
		$mytrabajo->setEstudinateTrabajoid($trabajo['estudinateTrabajoid']);
		$mytrabajo->setNomempresa($trabajo['nomempresa']);
		$mytrabajo->setSectoreconomico($trabajo['sectoreconomico']);
		$mytrabajo->setEstudinatenum($trabajo['estudinatenum']);
		$mytrabajo->setEstudinatetrabajoperiodo($trabajo['estudinatetrabajoperiodo']);
		$mytrabajo->setEstudinatetrabajoOculto($trabajo['estudinatetrabajoOculto']);
		$mytrabajo->setEstudinatetrabajoAccion($trabajo['estudinatetrabajoAccion']);
		$mytrabajo->setEstudinatetrabajofecha($trabajo['estudinatetrabajofecha']);
		$mytrabajo->setEstudinatetrabajouser($trabajo['estudinatetrabajouser']);
		return $mytrabajo;
	}
	public  function insertar($estudiantes1)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `estudinatetrabajo`
			(`estudinateTrabajoid`,
			`nomempresa`,
			`sectoreconomico`,
			`estudinatenum`,
			`estudinatetrabajoperiodo`,
			`estudinatetrabajoOculto`,
			`estudinatetrabajoAccion`,
			`estudinatetrabajofecha`,
			`estudinatetrabajouser`)
			VALUES
			(:estudinateTrabajoid1,
			:nomempresa1,
			:sectoreconomico1,
			:estudinatenum1,
			:estudinatetrabajoperiodo1,
			:estudinatetrabajoOculto1,
			:estudinatetrabajoAccion1,
			:estudinatetrabajofecha1,
			:estudinatetrabajouser1);");
		$insert->bindValue('estudinateTrabajoid1', $estudiantes1->getEstudinateTrabajoid());
		$insert->bindValue('nomempresa1', $estudiantes1->getNomempresa());
		$insert->bindValue('sectoreconomico1', $estudiantes1->getSectoreconomico());
		$insert->bindValue('estudinatenum1', $estudiantes1->getEstudinatenum());
		$insert->bindValue('estudinatetrabajoperiodo1', $estudiantes1->getEstudinatetrabajoperiodo());
		$insert->bindValue('estudinatetrabajoOculto1', $estudiantes1->getEstudinatetrabajoOculto());
		$insert->bindValue('estudinatetrabajoAccion1', $estudiantes1->getEstudinatetrabajoAccion());
		$insert->bindValue('estudinatetrabajofecha1', $estudiantes1->getEstudinatetrabajofecha());
		$insert->bindValue('estudinatetrabajouser1', $estudiantes1->getEstudinatetrabajouser());
		$insert->execute();
	}

	public  function actualizar($estudiantes1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `estudinatetrabajo`
			SET
			`estudinateTrabajoid` = :estudinateTrabajoid1,
			`nomempresa` = :nomempresa1,
			`sectoreconomico` = :sectoreconomico1,
			`estudinatenum` = :estudinatenum1,
			`estudinatetrabajoperiodo` = :estudinatetrabajoperiodo1,
			`estudinatetrabajoOculto` = :estudinatetrabajoOculto1,
			`estudinatetrabajoAccion` = :estudinatetrabajoAccion1,
			`estudinatetrabajofecha` = :estudinatetrabajofecha1,
			`estudinatetrabajouser` = :estudinatetrabajouser1
			WHERE `estudinateTrabajoid` = :estudinateTrabajoid1;
			");
		$actualizar->bindValue('estudinateTrabajoid1', $estudiantes1->getEstudinateTrabajoid());
		$actualizar->bindValue('nomempresa1', $estudiantes1->getNomempresa());
		$actualizar->bindValue('sectoreconomico1', $estudiantes1->getSectoreconomico());
		$actualizar->bindValue('estudinatenum1', $estudiantes1->getEstudinatenum());
		$actualizar->bindValue('estudinatetrabajoperiodo1', $estudiantes1->getEstudinatetrabajoperiodo());
		$actualizar->bindValue('estudinatetrabajoOculto1', $estudiantes1->getEstudinatetrabajoOculto());
		$actualizar->bindValue('estudinatetrabajoAccion1', $estudiantes1->getEstudinatetrabajoAccion());
		$actualizar->bindValue('estudinatetrabajofecha1', $estudiantes1->getEstudinatetrabajofecha());
		$actualizar->bindValue('estudinatetrabajouser1', $estudiantes1->getEstudinatetrabajouser());
		$actualizar->execute();
	}

	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `estudinatetrabajo` WHERE estudinateTrabajoid=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
