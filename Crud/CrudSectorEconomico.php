<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Sectoreconomico.php");

use Clasesphp\Sectoreconomico;

class CrudSectorEconomico
{
	// constructor de la clase
	public function __construct()
	{
	}
	public function mostrar()
	{
		$db = Db::conectar();
		$listasectoreconomico = NULL;
		$select = $db->query("SELECT * FROM `sectoreconomico`");
		foreach ($select->fetchAll() as $sectoreconomico) {
			$mysectoreconomico = new Sectoreconomico();
			$mysectoreconomico->setSectorEconomicoid($sectoreconomico['sectorEconomicoid']);
			$mysectoreconomico->setSectorEconomico($sectoreconomico['sectorEconomico']);
			$mysectoreconomico->setSectoreconomicocodigo($sectoreconomico['sectoreconomicocodigo']);
			$mysectoreconomico->setSectoreconomicoOculto($sectoreconomico['sectoreconomicoOculto']);
			$mysectoreconomico->setSectoreconomicoAccion($sectoreconomico['sectoreconomicoAccion']);
			$mysectoreconomico->setSectoreconomicofecha($sectoreconomico['sectoreconomicofecha']);
			$mysectoreconomico->setSectoreconomicouser($sectoreconomico['sectoreconomicouser']);

			$listasectoreconomico[] = $mysectoreconomico;
		}
		return $listasectoreconomico;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM sectoreconomico WHERE sectorEconomicoid=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerSectorEconomico($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM sectoreconomico WHERE sectorEconomicoid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sectoreconomico = $select->fetch();
		$mysectoreconomico = new Sectoreconomico();
		$mysectoreconomico->setSectorEconomicoid($sectoreconomico['sectorEconomicoid']);
		$mysectoreconomico->setSectorEconomico($sectoreconomico['sectorEconomico']);
		$mysectoreconomico->setSectoreconomicocodigo($sectoreconomico['sectoreconomicocodigo']);
		$mysectoreconomico->setSectoreconomicoOculto($sectoreconomico['sectoreconomicoOculto']);
		$mysectoreconomico->setSectoreconomicoAccion($sectoreconomico['sectoreconomicoAccion']);
		$mysectoreconomico->setSectoreconomicofecha($sectoreconomico['sectoreconomicofecha']);
		$mysectoreconomico->setSectoreconomicouser($sectoreconomico['sectoreconomicouser']);

		return $mysectoreconomico;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT sectorEconomico FROM sectoreconomico WHERE sectorEconomicoid=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$sectoreconomico = $select->fetch();
		$mysectoreconomico = $sectoreconomico['SectorEconomico'];

		return $mysectoreconomico;
	}

	public function actualizar($sectoreconomico)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `sectoreconomico`
			SET
			`sectorEconomicoid` = :sectorEconomicoid1,
			`sectoreconomicocodigo` = :sectoreconomicocodigo1,
			`sectorEconomico` = :SectorEconomico1,
			`sectoreconomicoOculto` = :sectoreconomicoOculto1,
			`sectoreconomicoAccion` = :sectoreconomicoAccion1,
			`sectoreconomicofecha` = :sectoreconomicofecha1,
			`sectoreconomicouser` = :sectoreconomicouser1
			WHERE `sectorEconomicoid` = :sectorEconomicoid1;
			');
		$actualizar->bindValue('sectorEconomicoid1', $sectoreconomico->getSectorEconomicoid());
		$actualizar->bindValue('sectoreconomicocodigo1', $sectoreconomico->getSectoreconomicocodigo());
		$actualizar->bindValue('SectorEconomico1', $sectoreconomico->getSectorEconomico());
		$actualizar->bindValue('sectoreconomicoOculto1', $sectoreconomico->getSectoreconomicoOculto());
		$actualizar->bindValue('sectoreconomicoAccion1', $sectoreconomico->getSectoreconomicoAccion());
		$actualizar->bindValue('sectoreconomicofecha1', $sectoreconomico->getSectoreconomicofecha());
		$actualizar->bindValue('sectoreconomicouser1', $sectoreconomico->getSectoreconomicouser());
		$actualizar->execute();
	}
	public function insertar($sectoreconomico)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `sectoreconomico`
			(`sectorEconomicoid`,
			`sectoreconomicocodigo`,
			`sectorEconomico`,
			`sectoreconomicoOculto`,
			`sectoreconomicoAccion`,
			`sectoreconomicofecha`,
			`sectoreconomicouser`)
			VALUES
			(:sectorEconomicoid1,
			:sectoreconomicocodigo1,
			:SectorEconomico1,
			:sectoreconomicoOculto1,
			:sectoreconomicoAccion1,
			:sectoreconomicofecha1,
			:sectoreconomicouser1);');
		//$insert->bindValue('id',$sectoreconomico->get_idColegios());
		$insert->bindValue('sectorEconomicoid1', $sectoreconomico->getSectorEconomicoid());
		$insert->bindValue('sectoreconomicocodigo1', $sectoreconomico->getSectoreconomicocodigo());
		$insert->bindValue('SectorEconomico1', $sectoreconomico->getSectorEconomico());
		$insert->bindValue('sectoreconomicoOculto1', $sectoreconomico->getSectoreconomicoOculto());
		$insert->bindValue('sectoreconomicoAccion1', $sectoreconomico->getSectoreconomicoAccion());
		$insert->bindValue('sectoreconomicofecha1', $sectoreconomico->getSectoreconomicofecha());
		$insert->bindValue('sectoreconomicouser1', $sectoreconomico->getSectoreconomicouser());
		$insert->execute();
	}
}
