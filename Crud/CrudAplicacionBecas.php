<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Aplicacionbecas.php';

use Clasesphp\Aplicacionbecas;

class CrudAplicacionbecas
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$beca1 = null;
		$select = $db->query('SELECT * FROM aplicacionbecas;');
		foreach ($select->fetchAll() as $beca1) {
			$mybeca1 = new Aplicacionbecas();
			$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
			$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
			$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
			$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
			$mybeca1->setMontoBeca($beca1['montoBeca']);
			$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
			$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
			$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
			$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
			$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
			$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
			$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
			$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
			$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
			$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
			$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
			$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
			$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
			$mybeca1->setAbfechainicio($beca1['abfechainicio']);
			$mybeca1->setAbfechafin($beca1['abfechafin']);
			$mybeca1->setAbperiodo($beca1['abperiodo']);
			$mybeca1->setAbobservaciones($beca1['abobservaciones']);
			$mybeca1->setAbactivo($beca1['abactivo']);
			$listabecao[] = $mybeca1;
		}

		return $listabecao;
	}
	public function mostrarCedulas()
	{
		$db = Db::conectar();
		$beca1 = null;
		$select = $db->query('SELECT fknumeroIdentificacion FROM intsistemaa6.aplicacionbecas group by fknumeroIdentificacion;');
		foreach ($select->fetchAll() as $beca1) {
			$mybeca1 = new Aplicacionbecas();
			$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
			$listabecao[] = $mybeca1;
		}

		return $listabecao;
	}
	//
	public function obtenerlistaBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM aplicacionbecas WHERE fknumeroIdentificacion=:id');
		$select->bindValue('id', $id);
		$select->execute();
		foreach ($select->fetchAll() as $beca1) {
			$mybeca1 = new Aplicacionbecas();
			$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
			$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
			$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
			$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
			$mybeca1->setMontoBeca($beca1['montoBeca']);
			$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
			$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
			$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
			$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
			$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
			$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
			$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
			$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
			$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
			$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
			$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
			$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
			$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
			$mybeca1->setAbfechainicio($beca1['abfechainicio']);
			$mybeca1->setAbfechafin($beca1['abfechafin']);
			$mybeca1->setAbperiodo($beca1['abperiodo']);
			$mybeca1->setAbobservaciones($beca1['abobservaciones']);
			$mybeca1->setAbactivo($beca1['abactivo']);
			$listabecao[] = $mybeca1;
		}

		return $listabecao;
	}
	/**
	 *Retorna un existe (1: verdadero, 0:falso) tomando como parametro el id del registro
	 * @param [type] $id
	 * @return void
	 */
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM aplicacionbecas where idAplicacionBecas=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function existeActivo($id, $est)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM aplicacionbecas WHERE abactivo=:id AND fknumeroIdentificacion=:est");
		$select->bindValue('id', $id);
		$select->bindValue('est', $est);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}

	public function obtenerBeca($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM aplicacionbecas WHERE idAplicacionBecas=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$beca1 = $select->fetch();
		$mybeca1 = new Aplicacionbecas();
		$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
		$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
		$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
		$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
		$mybeca1->setMontoBeca($beca1['montoBeca']);
		$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
		$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
		$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
		$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
		$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
		$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
		$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
		$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
		$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
		$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
		$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
		$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
		$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
		$mybeca1->setAbfechainicio($beca1['abfechainicio']);
		$mybeca1->setAbfechafin($beca1['abfechafin']);
		$mybeca1->setAbperiodo($beca1['abperiodo']);
		$mybeca1->setAbobservaciones($beca1['abobservaciones']);
		$mybeca1->setAbactivo($beca1['abactivo']);
		return $mybeca1;
	}
	public function obtenerBecafecha($id, $est)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM aplicacionbecas WHERE abfechainicio=:id AND fknumeroIdentificacion=:est');
		$select->bindValue('id', $id);
		$select->bindValue('est', $est);
		$select->execute();
		$beca1 = $select->fetch();
		$mybeca1 = new Aplicacionbecas();
		$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
		$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
		$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
		$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
		$mybeca1->setMontoBeca($beca1['montoBeca']);
		$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
		$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
		$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
		$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
		$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
		$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
		$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
		$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
		$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
		$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
		$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
		$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
		$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
		$mybeca1->setAbfechainicio($beca1['abfechainicio']);
		$mybeca1->setAbfechafin($beca1['abfechafin']);
		$mybeca1->setAbperiodo($beca1['abperiodo']);
		$mybeca1->setAbobservaciones($beca1['abobservaciones']);
		$mybeca1->setAbactivo($beca1['abactivo']);
		return $mybeca1;
	}
	public function obtenerBecaperiodo($id, $est)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM aplicacionbecas WHERE abperiodo=:id AND fknumeroIdentificacion=:est');
		$select->bindValue('id', $id);
		$select->bindValue('est', $est);
		$select->execute();
		$beca1 = $select->fetch();
		$mybeca1 = new Aplicacionbecas();
		$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
		$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
		$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
		$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
		$mybeca1->setMontoBeca($beca1['montoBeca']);
		$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
		$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
		$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
		$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
		$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
		$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
		$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
		$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
		$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
		$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
		$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
		$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
		$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
		$mybeca1->setAbfechainicio($beca1['abfechainicio']);
		$mybeca1->setAbfechafin($beca1['abfechafin']);
		$mybeca1->setAbperiodo($beca1['abperiodo']);
		$mybeca1->setAbobservaciones($beca1['abobservaciones']);
		$mybeca1->setAbactivo($beca1['abactivo']);
		return $mybeca1;
	}
	public function obtenerBecaactivo($id, $est)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM aplicacionbecas WHERE abactivo=:id AND fknumeroIdentificacion=:est');
		$select->bindValue('id', $id);
		$select->bindValue('est', $est);
		$select->execute();
		$beca1 = $select->fetch();
		$mybeca1 = new Aplicacionbecas();
		$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
		$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
		$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
		$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
		$mybeca1->setMontoBeca($beca1['montoBeca']);
		$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
		$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
		$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
		$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
		$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
		$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
		$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
		$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
		$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
		$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
		$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
		$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
		$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
		$mybeca1->setAbfechainicio($beca1['abfechainicio']);
		$mybeca1->setAbfechafin($beca1['abfechafin']);
		$mybeca1->setAbperiodo($beca1['abperiodo']);
		$mybeca1->setAbobservaciones($beca1['abobservaciones']);
		$mybeca1->setAbactivo($beca1['abactivo']);
		return $mybeca1;
	}
	public function obtenerBecatipobeca($id, $est)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM aplicacionbecas WHERE fktipoBecaId=:id AND fknumeroIdentificacion=:est');
		$select->bindValue('id', $id);
		$select->bindValue('est', $est);
		$select->execute();
		$beca1 = $select->fetch();
		$mybeca1 = new Aplicacionbecas();
		$mybeca1->setIdAplicacionBecas($beca1['idAplicacionBecas']);
		$mybeca1->setAplicacionbecascodigo($beca1['aplicacionbecascodigo']);
		$mybeca1->setFktipoBecaId($beca1['fktipoBecaId']);
		$mybeca1->setFkfinanciamientoBecaid($beca1['fkfinanciamientoBecaid']);
		$mybeca1->setMontoBeca($beca1['montoBeca']);
		$mybeca1->setPorcientoBecaCoberturaManuntencion($beca1['porcientoBecaCoberturaManuntencion']);
		$mybeca1->setPorcientoBecaCoberturaArancel($beca1['porcientoBecaCoberturaArancel']);
		$mybeca1->setFksextaRazonBecaId($beca1['fksextaRazonBecaId']);
		$mybeca1->setFkquintaRazonBecaId($beca1['fkquintaRazonBecaId']);
		$mybeca1->setFkcuartaRazonBecaId($beca1['fkcuartaRazonBecaId']);
		$mybeca1->setFkterceraRazonBecaId($beca1['fkterceraRazonBecaId']);
		$mybeca1->setFksegundaRazonBecaId($beca1['fksegundaRazonBecaId']);
		$mybeca1->setFkprimeraRazonBecaId($beca1['fkprimeraRazonBecaId']);
		$mybeca1->setFknumeroIdentificacion($beca1['fknumeroIdentificacion']);
		$mybeca1->setAplicacionbecasOculto($beca1['aplicacionbecasOculto']);
		$mybeca1->setAplicacionbecasAccion($beca1['aplicacionbecasAccion']);
		$mybeca1->setAplicacionbecasfecha($beca1['aplicacionbecasfecha']);
		$mybeca1->setAplicacionbecasuser($beca1['aplicacionbecasuser']);
		$mybeca1->setAbfechainicio($beca1['abfechainicio']);
		$mybeca1->setAbfechafin($beca1['abfechafin']);
		$mybeca1->setAbperiodo($beca1['abperiodo']);
		$mybeca1->setAbobservaciones($beca1['abobservaciones']);
		$mybeca1->setAbactivo($beca1['abactivo']);
		return $mybeca1;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT aplicacionbecascodigo FROM aplicacionbecas WHERE idAplicacionBecas=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$beca1 = $select->fetch();

		$mybeca1 = ($beca1['aplicacionbecascodigo']);

		return $mybeca1;
	}

	public function actualizar($bimestres)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `aplicacionbecas`
		SET
		`idAplicacionBecas` = :idAplicacionBecas1,
		`aplicacionbecascodigo` = :aplicacionbecascodigo1,
		`fktipoBecaId` = :fktipoBecaId1,
		`fkfinanciamientoBecaid` = :fkfinanciamientoBecaid1,
		`montoBeca` = :montoBeca1,
		`porcientoBecaCoberturaManuntencion` = :porcientoBecaCoberturaManuntencion1,
		`porcientoBecaCoberturaArancel` = :porcientoBecaCoberturaArancel1,
		`fkprimeraRazonBecaId` = :fkprimeraRazonBecaId1,
		`fksegundaRazonBecaId` = :fksegundaRazonBecaId1,
		`fkterceraRazonBecaId` = :fkterceraRazonBecaId1,
		`fkcuartaRazonBecaId` = :fkcuartaRazonBecaId1,
		`fkquintaRazonBecaId` = :fkquintaRazonBecaId1,
		`fksextaRazonBecaId` = :fksextaRazonBecaId1,
		`fknumeroIdentificacion` = :fknumeroIdentificacion1,
		`abfechainicio` = :abfechainicio1,
		`abfechafin` = :abfechafin1,
		`abperiodo` = :abperiodo1,
		`abobservaciones` = :abobservaciones1,
		`abactivo` = :abactivo1,
		`aplicacionbecasOculto` = :aplicacionbecasOculto1,
		`aplicacionbecasAccion` = :aplicacionbecasAccion1,
		`aplicacionbecasfecha` = :aplicacionbecasfecha1,
		`aplicacionbecasuser` = :aplicacionbecasuser1
		WHERE `idAplicacionBecas` = :idAplicacionBecas1;');
		$actualizar->bindValue('idAplicacionBecas1', $bimestres->getIdAplicacionBecas());
		$actualizar->bindValue('aplicacionbecascodigo1', $bimestres->getAplicacionbecascodigo());
		$actualizar->bindValue('fktipoBecaId1', $bimestres->getFktipoBecaId());
		$actualizar->bindValue('fkfinanciamientoBecaid1', $bimestres->getFkfinanciamientoBecaid());
		$actualizar->bindValue('montoBeca1', $bimestres->getMontoBeca());
		$actualizar->bindValue('porcientoBecaCoberturaManuntencion1', $bimestres->getPorcientoBecaCoberturaManuntencion());
		$actualizar->bindValue('porcientoBecaCoberturaArancel1', $bimestres->getPorcientoBecaCoberturaArancel());
		$actualizar->bindValue('fkprimeraRazonBecaId1', $bimestres->getFkprimeraRazonBecaId());
		$actualizar->bindValue('fksegundaRazonBecaId1', $bimestres->getFksegundaRazonBecaId());
		$actualizar->bindValue('fkterceraRazonBecaId1', $bimestres->getFkterceraRazonBecaId());
		$actualizar->bindValue('fkcuartaRazonBecaId1', $bimestres->getFkcuartaRazonBecaId());
		$actualizar->bindValue('fkquintaRazonBecaId1', $bimestres->getFkquintaRazonBecaId());
		$actualizar->bindValue('fksextaRazonBecaId1', $bimestres->getFksextaRazonBecaId());
		$actualizar->bindValue('fknumeroIdentificacion1', $bimestres->getFknumeroIdentificacion());
		$actualizar->bindValue('abfechainicio1', $bimestres->getAbfechainicio());
		$actualizar->bindValue('abfechafin1', $bimestres->getAbfechafin());
		$actualizar->bindValue('abperiodo1', $bimestres->getAbperiodo());
		$actualizar->bindValue('abobservaciones1', $bimestres->getAbobservaciones());
		$actualizar->bindValue('abactivo1', $bimestres->getAbactivo());
		$actualizar->bindValue('aplicacionbecasOculto1', $bimestres->getAplicacionbecasOculto());
		$actualizar->bindValue('aplicacionbecasAccion1', $bimestres->getAplicacionbecasAccion());
		$actualizar->bindValue('aplicacionbecasfecha1', $bimestres->getAplicacionbecasfecha());
		$actualizar->bindValue('aplicacionbecasuser1', $bimestres->getAplicacionbecasuser());
		$actualizar->execute();
	}

	public function insertar($bimestres)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `aplicacionbecas`
		(`idAplicacionBecas`,
		`aplicacionbecascodigo`,
		`fktipoBecaId`,
		`fkfinanciamientoBecaid`,
		`montoBeca`,
		`porcientoBecaCoberturaManuntencion`,
		`porcientoBecaCoberturaArancel`,
		`fkprimeraRazonBecaId`,
		`fksegundaRazonBecaId`,
		`fkterceraRazonBecaId`,
		`fkcuartaRazonBecaId`,
		`fkquintaRazonBecaId`,
		`fksextaRazonBecaId`,
		`fknumeroIdentificacion`,
		`abfechainicio`,
		`abfechafin`,
		`abperiodo`,
		`abobservaciones`,
		`abactivo`,
		`aplicacionbecasOculto`,
		`aplicacionbecasAccion`,
		`aplicacionbecasfecha`,
		`aplicacionbecasuser`)
		VALUES
		(:idAplicacionBecas1,
		:aplicacionbecascodigo1,
		:fktipoBecaId1,
		:fkfinanciamientoBecaid1,
		:montoBeca1,
		:porcientoBecaCoberturaManuntencion1,
		:porcientoBecaCoberturaArancel1,
		:fkprimeraRazonBecaId1,
		:fksegundaRazonBecaId1,
		:fkterceraRazonBecaId1,
		:fkcuartaRazonBecaId1,
		:fkquintaRazonBecaId1,
		:fksextaRazonBecaId1,
		:fknumeroIdentificacion1,
		:abfechainicio1,
		:abfechafin1,
		:abperiodo1,
		:abobservaciones1,
		:abactivo1,
		:aplicacionbecasOculto1,
		:aplicacionbecasAccion1,
		:aplicacionbecasfecha1,
		:aplicacionbecasuser1);');
		$insert->bindValue('idAplicacionBecas1', $bimestres->getIdAplicacionBecas());
		$insert->bindValue('aplicacionbecascodigo1', $bimestres->getAplicacionbecascodigo());
		$insert->bindValue('fktipoBecaId1', $bimestres->getFktipoBecaId());
		$insert->bindValue('fkfinanciamientoBecaid1', $bimestres->getFkfinanciamientoBecaid());
		$insert->bindValue('montoBeca1', $bimestres->getMontoBeca());
		$insert->bindValue('porcientoBecaCoberturaManuntencion1', $bimestres->getPorcientoBecaCoberturaManuntencion());
		$insert->bindValue('porcientoBecaCoberturaArancel1', $bimestres->getPorcientoBecaCoberturaArancel());
		$insert->bindValue('fkprimeraRazonBecaId1', $bimestres->getFkprimeraRazonBecaId());
		$insert->bindValue('fksegundaRazonBecaId1', $bimestres->getFksegundaRazonBecaId());
		$insert->bindValue('fkterceraRazonBecaId1', $bimestres->getFkterceraRazonBecaId());
		$insert->bindValue('fkcuartaRazonBecaId1', $bimestres->getFkcuartaRazonBecaId());
		$insert->bindValue('fkquintaRazonBecaId1', $bimestres->getFkquintaRazonBecaId());
		$insert->bindValue('fksextaRazonBecaId1', $bimestres->getFksextaRazonBecaId());
		$insert->bindValue('fknumeroIdentificacion1', $bimestres->getFknumeroIdentificacion());
		$insert->bindValue('abfechainicio1', $bimestres->getAbfechainicio());
		$insert->bindValue('abfechafin1', $bimestres->getAbfechafin());
		$insert->bindValue('abperiodo1', $bimestres->getAbperiodo());
		$insert->bindValue('abobservaciones1', $bimestres->getAbobservaciones());
		$insert->bindValue('abactivo1', $bimestres->getAbactivo());
		$insert->bindValue('aplicacionbecasOculto1', $bimestres->getAplicacionbecasOculto());
		$insert->bindValue('aplicacionbecasAccion1', $bimestres->getAplicacionbecasAccion());
		$insert->bindValue('aplicacionbecasfecha1', $bimestres->getAplicacionbecasfecha());
		$insert->bindValue('aplicacionbecasuser1', $bimestres->getAplicacionbecasuser());
		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM aplicacionbecas WHERE idAplicacionBecas=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
