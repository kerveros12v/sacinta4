<?php

namespace Crud;

require_once("conexion.php");
require_once("../ec.edu.intsuperior/modelo/clasesphp/Periodoacademico.php");

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
			$myperiodoacademico->setDuracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
			$myperiodoacademico->setAnioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
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
		$myperiodoacademico->setDuracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
		$myperiodoacademico->setAnioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
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
		$myperiodoacademico->setDuracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
		$myperiodoacademico->setAnioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
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
		$myperiodoacademico->setDuracionPeriodoAcademico($periodoacademico['duracionPeriodoAcademico']);
		$myperiodoacademico->setAnioPeriodoAcademico($periodoacademico['anioPeriodoAcademico']);
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
}
