<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Institutos.php");

use Clasesphp\Institutos;

class CrudInstitutos
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listainstituto1 = null;
		$select = $db->query('SELECT * FROM institutos;');

		foreach ($select->fetchAll() as $instituto1) {
			$myinstituto1 = new Institutos();
			$myinstituto1->setInstitutosId($instituto1['institutosId']);
			$myinstituto1->setInstitutoscodigo($instituto1['institutoscodigo']);
			$myinstituto1->setInstitutoNombre($instituto1['institutoNombre']);
			$myinstituto1->setCantonId($instituto1['canton_cantonId']);
			$myinstituto1->setFkidSostenimiento($instituto1['fkidSostenimiento']);
			$myinstituto1->setInstitutosOculto($instituto1['institutosOculto']);
			$myinstituto1->setInstitutosAccion($instituto1['institutosAccion']);
			$myinstituto1->setInstitutosfecha($instituto1['institutosfecha']);
			$myinstituto1->setInstitutosuser($instituto1['institutosuser']);
			$listainstituto1[] = $myinstituto1;
		}
		return $listainstituto1;
	}
	public function mostrarporEtnia($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM institutos WHERE institutosId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$listainstituto1 = null;
		foreach ($select->fetchAll() as $instituto1) {
			$myinstituto1 = new Institutos();
			$myinstituto1->setInstitutosId($instituto1['institutosId']);
			$myinstituto1->setInstitutoscodigo($instituto1['institutoscodigo']);
			$myinstituto1->setInstitutoNombre($instituto1['institutoNombre']);
			$myinstituto1->setCantonId($instituto1['canton_cantonId']);
			$myinstituto1->setFkidSostenimiento($instituto1['fkidSostenimiento']);
			$myinstituto1->setInstitutosOculto($instituto1['institutosOculto']);
			$myinstituto1->setInstitutosAccion($instituto1['institutosAccion']);
			$myinstituto1->setInstitutosfecha($instituto1['institutosfecha']);
			$myinstituto1->setInstitutosuser($instituto1['institutosuser']);
			$listainstituto1[] = $myinstituto1;
		}
		return $listainstituto1;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM institutos WHERE institutosId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerinstituto1($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM institutos WHERE institutosId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$instituto1 = $select->fetch();
		$myinstituto1 = new Institutos();
		$myinstituto1->setInstitutosId($instituto1['institutosId']);
		$myinstituto1->setInstitutoscodigo($instituto1['institutoscodigo']);
		$myinstituto1->setInstitutoNombre($instituto1['institutoNombre']);
		$myinstituto1->setCantonId($instituto1['canton_cantonId']);
		$myinstituto1->setFkidSostenimiento($instituto1['fkidSostenimiento']);
		$myinstituto1->setInstitutosOculto($instituto1['institutosOculto']);
		$myinstituto1->setInstitutosAccion($instituto1['institutosAccion']);
		$myinstituto1->setInstitutosfecha($instituto1['institutosfecha']);
		$myinstituto1->setInstitutosuser($instituto1['institutosuser']);
		return $myinstituto1;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT institutoNombre FROM institutos WHERE institutosId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$instituto1 = $select->fetch();
		$myinstituto1 = ($instituto1['idioma']);

		return $myinstituto1;
	}
	public function actualizar($instituto1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `institutos`
		SET
		`institutosId` = :institutosId1,
		`institutoscodigo` = :institutoscodigo1,
		`institutoNombre` = :institutoNombre1,
		`canton_cantonId` = :canton_cantonId1,
		`fkidSostenimiento` = :fkidSostenimiento1,
		`institutosOculto` = :institutosOculto1,
		`institutosAccion` = :institutosAccion1,
		`institutosfecha` = :institutosfecha1,
		`institutosuser` = :institutosuser1
		WHERE `institutosId` = :institutosId1;');
		$actualizar->bindValue('institutosId1', $instituto1->getInstitutosId());
		$actualizar->bindValue('institutoscodigo1', $instituto1->getInstitutoscodigo());
		$actualizar->bindValue('institutoNombre1', $instituto1->getInstitutoNombre());
		$actualizar->bindValue('canton_cantonId1', $instituto1->getCantonId());
		$actualizar->bindValue('fkidSostenimiento1', $instituto1->getFkidSostenimiento());
		$actualizar->bindValue('institutosOculto1', $instituto1->getInstitutosOculto());
		$actualizar->bindValue('institutosAccion1', $instituto1->getInstitutosAccion());
		$actualizar->bindValue('institutosfecha1', $instituto1->getInstitutosfecha());
		$actualizar->bindValue('institutosuser1', $instituto1->getInstitutosuser());
		$actualizar->execute();
	}
	public function insertar($instituto1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `institutos`
		(`institutosId`,
		`institutoscodigo`,
		`institutoNombre`,
		`canton_cantonId`,
		`fkidSostenimiento`,
		`institutosOculto`,
		`institutosAccion`,
		`institutosfecha`,
		`institutosuser`)
		VALUES
		(:institutosId1,
		:institutoscodigo1,
		:institutoNombre1,
		:canton_cantonId1,
		:fkidSostenimiento1,
		:institutosOculto1,
		:institutosAccion1,
		:institutosfecha1,
		:institutosuser1);');
		$insert->bindValue('institutosId1', $instituto1->getInstitutosId());
		$insert->bindValue('institutoscodigo1', $instituto1->getInstitutoscodigo());
		$insert->bindValue('institutoNombre1', $instituto1->getInstitutoNombre());
		$insert->bindValue('canton_cantonId1', $instituto1->getCantonId());
		$insert->bindValue('fkidSostenimiento1', $instituto1->getFkidSostenimiento());
		$insert->bindValue('institutosOculto1', $instituto1->getInstitutosOculto());
		$insert->bindValue('institutosAccion1', $instituto1->getInstitutosAccion());
		$insert->bindValue('institutosfecha1', $instituto1->getInstitutosfecha());
		$insert->bindValue('institutosuser1', $instituto1->getInstitutosuser());

		$insert->execute();
	}
}
