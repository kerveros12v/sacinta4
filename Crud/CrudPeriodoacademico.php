<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Periodoacademico.php");

use Crud\Db;
use Clasesphp\Periodoacademico;

class CrudPeriodoacademico
{
	// constructor de la clase
	public function __construct()
	{
	}
	//, , , , , , , , , , ,
	public  function mostrar()
	{
		$db = Db::conectar();
		$listaperiodoacademico = null;
		$select = $db->query("SELECT * FROM periodoacademico;");

		foreach ($select->fetchAll() as $periodoacademico) {
			$myperiodoacademico = new Periodoacademico();
			$myperiodoacademico->setPeriodoacademicoId($periodoacademico['periodoacademicoId']);
			$myperiodoacademico->setCodigoPeriodo($periodoacademico['codigoPeriodo']);
			$myperiodoacademico->setPeriodoAcademico($periodoacademico['periodoAcademico']);
			$myperiodoacademico->setFechaInicio($periodoacademico['fechaInicio']);
			$myperiodoacademico->setfechafin($periodoacademico['fechafin']);
			$myperiodoacademico->setobservaciones($periodoacademico['observaciones']);
			$myperiodoacademico->setActual($periodoacademico['actual']);
			$myperiodoacademico->setCicloperiodoIdcicloperiodo($periodoacademico['cicloperiodo_idcicloperiodo']);
			$myperiodoacademico->setPeriodoacademicoOculto($periodoacademico['periodoacademicoOculto']);
			$myperiodoacademico->setPeriodoacademicoAccion($periodoacademico['periodoacademicoAccion']);
			$myperiodoacademico->setPeriodoacademicofecha($periodoacademico['periodoacademicofecha']);
			$myperiodoacademico->setPeriodoacademicouser($periodoacademico['periodoacademicouser']);
			$listaperiodoacademico[] = $myperiodoacademico;
		}
		return $listaperiodoacademico;
	}
	public  function obtenerPeriodoacademico($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM periodoacademico WHERE periodoacademicoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$periodoacademico = $select->fetch();
		$myperiodoacademico = new Periodoacademico();
		$myperiodoacademico->setPeriodoacademicoId($periodoacademico['periodoacademicoId']);
		$myperiodoacademico->setCodigoPeriodo($periodoacademico['codigoPeriodo']);
		$myperiodoacademico->setPeriodoAcademico($periodoacademico['periodoAcademico']);
		$myperiodoacademico->setFechaInicio($periodoacademico['fechaInicio']);
		$myperiodoacademico->setfechafin($periodoacademico['fechafin']);
		$myperiodoacademico->setobservaciones($periodoacademico['observaciones']);
		$myperiodoacademico->setActual($periodoacademico['actual']);
		$myperiodoacademico->setCicloperiodoIdcicloperiodo($periodoacademico['cicloperiodo_idcicloperiodo']);
		$myperiodoacademico->setPeriodoacademicoOculto($periodoacademico['periodoacademicoOculto']);
		$myperiodoacademico->setPeriodoacademicoAccion($periodoacademico['periodoacademicoAccion']);
		$myperiodoacademico->setPeriodoacademicofecha($periodoacademico['periodoacademicofecha']);
		$myperiodoacademico->setPeriodoacademicouser($periodoacademico['periodoacademicouser']);
		return $myperiodoacademico;
	}
	public  function obtenerPeriodoacademicoCodigo($codigo)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM periodoacademico WHERE codigoPeriodo=:id');
		$select->bindValue('id', $codigo);
		$select->execute();
		$periodoacademico = $select->fetch();
		$myperiodoacademico = new Periodoacademico();
		$myperiodoacademico->setPeriodoacademicoId($periodoacademico['periodoacademicoId']);
		$myperiodoacademico->setCodigoPeriodo($periodoacademico['codigoPeriodo']);
		$myperiodoacademico->setPeriodoAcademico($periodoacademico['periodoAcademico']);
		$myperiodoacademico->setFechaInicio($periodoacademico['fechaInicio']);
		$myperiodoacademico->setfechafin($periodoacademico['fechafin']);
		$myperiodoacademico->setobservaciones($periodoacademico['observaciones']);
		$myperiodoacademico->setActual($periodoacademico['actual']);
		$myperiodoacademico->setCicloperiodoIdcicloperiodo($periodoacademico['cicloperiodo_idcicloperiodo']);
		$myperiodoacademico->setPeriodoacademicoOculto($periodoacademico['periodoacademicoOculto']);
		$myperiodoacademico->setPeriodoacademicoAccion($periodoacademico['periodoacademicoAccion']);
		$myperiodoacademico->setPeriodoacademicofecha($periodoacademico['periodoacademicofecha']);
		$myperiodoacademico->setPeriodoacademicouser($periodoacademico['periodoacademicouser']);
		return $myperiodoacademico;
	}
	public  function obtenerPeriodoAcademicoActual()
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM periodoacademico WHERE actual=1');
		$select->execute();
		$periodoacademico = $select->fetch();
		$myperiodoacademico = new Periodoacademico();
		$myperiodoacademico->setPeriodoacademicoId($periodoacademico['periodoacademicoId']);
		$myperiodoacademico->setCodigoPeriodo($periodoacademico['codigoPeriodo']);
		$myperiodoacademico->setPeriodoAcademico($periodoacademico['periodoAcademico']);
		$myperiodoacademico->setFechaInicio($periodoacademico['fechaInicio']);
		$myperiodoacademico->setfechafin($periodoacademico['fechafin']);
		$myperiodoacademico->setobservaciones($periodoacademico['observaciones']);
		$myperiodoacademico->setActual($periodoacademico['actual']);
		$myperiodoacademico->setCicloperiodoIdcicloperiodo($periodoacademico['cicloperiodo_idcicloperiodo']);
		$myperiodoacademico->setPeriodoacademicoOculto($periodoacademico['periodoacademicoOculto']);
		$myperiodoacademico->setPeriodoacademicoAccion($periodoacademico['periodoacademicoAccion']);
		$myperiodoacademico->setPeriodoacademicofecha($periodoacademico['periodoacademicofecha']);
		$myperiodoacademico->setPeriodoacademicouser($periodoacademico['periodoacademicouser']);
		return $myperiodoacademico;
	}
	public  function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT PeriodoAcademico FROM periodoacademico WHERE periodoacademicoId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$periodoacademico = $select->fetch();
		$myperiodoacademico = ($periodoacademico['periodoAcademico']);

		return $myperiodoacademico;
	}


	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `periodoacademico`WHERE  `periodoacademicoId` = :periodoacademicoId1;');
		$eliminar->bindValue('periodoacademicoId1', $id);
		$eliminar->execute();
	}
	public function actualizar($periodoacademico1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `periodoacademico`
		SET
		`periodoacademicoId` = :periodoacademicoId1,
		`codigoPeriodo` = :codigoPeriodo1,
		`periodoAcademico` = :periodoAcademico1,
		`cicloperiodo_idcicloperiodo` = :cicloperiodo_idcicloperiodo1,
		`fechaInicio` = :fechaInicio1,
		`fechafin` = :fechafin1,
		`observaciones` = :observaciones1,
		`actual` = :actual1,
		`periodoacademicoOculto` = :periodoacademicoOculto1,
		`periodoacademicoAccion` = :periodoacademicoAccion1,
		`periodoacademicofecha` = :periodoacademicofecha1,
		`periodoacademicouser` = :periodoacademicouser1
		WHERE `periodoacademicoId` = :periodoacademicoId1;');
		$actualizar->bindValue('periodoacademicoId1', $periodoacademico1->getPeriodoacademicoId());
		$actualizar->bindValue('codigoPeriodo1', $periodoacademico1->getCodigoPeriodo());
		$actualizar->bindValue('periodoAcademico1', $periodoacademico1->getPeriodoAcademico());
		$actualizar->bindValue('cicloperiodo_idcicloperiodo1', $periodoacademico1->getCicloperiodoIdcicloperiodo());
		$actualizar->bindValue('fechaInicio1', $periodoacademico1->getFechaInicio());
		$actualizar->bindValue('fechafin1', $periodoacademico1->getfechafin());
		$actualizar->bindValue('observaciones1', $periodoacademico1->getobservaciones());
		$actualizar->bindValue('actual1', $periodoacademico1->getActual());
		$actualizar->bindValue('periodoacademicoOculto1', $periodoacademico1->getPeriodoacademicoOculto());
		$actualizar->bindValue('periodoacademicoAccion1', $periodoacademico1->getPeriodoacademicoAccion());
		$actualizar->bindValue('periodoacademicofecha1', $periodoacademico1->getPeriodoacademicofecha());
		$actualizar->bindValue('periodoacademicouser1', $periodoacademico1->getPeriodoacademicouser());
		$actualizar->execute();
	}
	public function insertar($periodoacademico1)
	{

		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `periodoacademico`
		(`periodoacademicoId`,
		`codigoPeriodo`,
		`periodoAcademico`,
		`cicloperiodo_idcicloperiodo`,
		`fechaInicio`,
		`fechafin`,
		`observaciones`,
		`actual`,
		`periodoacademicoOculto`,
		`periodoacademicoAccion`,
		`periodoacademicofecha`,
		`periodoacademicouser`)
		VALUES
		(:periodoacademicoId1,
		:codigoPeriodo1,
		:periodoAcademico1,
		:cicloperiodo_idcicloperiodo1,
		:fechaInicio1,
		:fechafin1,
		:observaciones1,
		:actual1,
		:periodoacademicoOculto1,
		:periodoacademicoAccion1,
		:periodoacademicofecha1,
		:periodoacademicouser1);');
		$insert->bindValue('periodoacademicoId1', $periodoacademico1->getPeriodoacademicoId());
		$insert->bindValue('codigoPeriodo1', $periodoacademico1->getCodigoPeriodo());
		$insert->bindValue('periodoAcademico1', $periodoacademico1->getPeriodoAcademico());
		$insert->bindValue('cicloperiodo_idcicloperiodo1', $periodoacademico1->getCicloperiodoIdcicloperiodo());
		$insert->bindValue('fechaInicio1', $periodoacademico1->getFechaInicio());
		$insert->bindValue('fechafin1', $periodoacademico1->getfechafin());
		$insert->bindValue('observaciones1', $periodoacademico1->getobservaciones());
		$insert->bindValue('actual1', $periodoacademico1->getActual());
		$insert->bindValue('periodoacademicoOculto1', $periodoacademico1->getPeriodoacademicoOculto());
		$insert->bindValue('periodoacademicoAccion1', $periodoacademico1->getPeriodoacademicoAccion());
		$insert->bindValue('periodoacademicofecha1', $periodoacademico1->getPeriodoacademicofecha());
		$insert->bindValue('periodoacademicouser1', $periodoacademico1->getPeriodoacademicouser());

		$insert->execute();
	}
}
