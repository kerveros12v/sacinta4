<?php

namespace Crud;

require_once 'conexion.php';
require_once '../clasesphp/Bimestres.php';

use Clasesphp\Bimestres;

class CrudBimestres
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$bimestres = null;
		$select = $db->query('SELECT * FROM bimestres;');
		foreach ($select->fetchAll() as $bimestres) {
			$mybimestres = new Bimestres();
			$mybimestres->setIdBimestres($bimestres['idBimestres']);
			$mybimestres->setBimestre($bimestres['bimestre']);
			$mybimestres->setBimestrescodigo($bimestres['bimestrescodigo']);
			$mybimestres->setBimestresOculto($bimestres['bimestresOculto']);
			$mybimestres->setBimestresAccion($bimestres['bimestresAccion']);
			$mybimestres->setBimestresfecha($bimestres['bimestresfecha']);
			$mybimestres->setBimestresuser($bimestres['bimestresuser']);
			$listabonoDesarrollo[] = $mybimestres;
		}

		return $listabonoDesarrollo;
	}

	public function obtenerBimestre($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM bimestres WHERE idBimestres=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$bimestres = $select->fetch();
		$mybimestres = new Bimestres();
		$mybimestres->setIdBimestres($bimestres['idBimestres']);
		$mybimestres->setBimestre($bimestres['bimestre']);
		$mybimestres->setBimestrescodigo($bimestres['bimestrescodigo']);
		$mybimestres->setBimestresOculto($bimestres['bimestresOculto']);
		$mybimestres->setBimestresAccion($bimestres['bimestresAccion']);
		$mybimestres->setBimestresfecha($bimestres['bimestresfecha']);
		$mybimestres->setBimestresuser($bimestres['bimestresuser']);

		return $mybimestres;
	}

	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT bimestre FROM bimestres WHERE idBimestres=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$bimestres = $select->fetch();

		$mybimestres = ($bimestres['bimestre']);

		return $mybimestres;
	}

	public function actualizar($bimestres)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `bimestres`
        SET
        `idBimestres` = :idBimestres1,
        `bimestrescodigo` = :bimestrescodigo1,
        `bimestre` = :bimestre1,
        `bimestresOculto` = :bimestresOculto1,
        `bimestresAccion` = :bimestresAccion1,
        `bimestresfecha` = :bimestresfecha1,
        `bimestresuser` = :bimestresuser1
        WHERE `idBimestres` = :idBimestres1;');
		$actualizar->bindValue('idBimestres1', $bimestres->getIdBimestres());
		$actualizar->bindValue('bimestrescodigo1', $bimestres->getBimestrescodigo());
		$actualizar->bindValue('bimestre1', $bimestres->getBimestre());
		$actualizar->bindValue('bimestresOculto1', $bimestres->getBimestresOculto());
		$actualizar->bindValue('bimestresAccion1', $bimestres->getBimestresAccion());
		$actualizar->bindValue('bimestresfecha1', $bimestres->getBimestresfecha());
		$actualizar->bindValue('bimestresuser1', $bimestres->getBimestresuser());
		$actualizar->execute();
	}

	public function insertar($bimestres)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `bimestres`
        (`idBimestres`,
        `bimestrescodigo`,
        `bimestre`,
        `bimestresOculto`,
        `bimestresAccion`,
        `bimestresfecha`,
        `bimestresuser`)
        VALUES
        (:idBimestres1,
        :bimestrescodigo1,
        :bimestre1,
        :bimestresOculto1,
        :bimestresAccion1,
        :bimestresfecha1,
        :bimestresuser1);');
		$insert->bindValue('idBimestres1', $bimestres->getIdBimestres());
		$insert->bindValue('bimestrescodigo1', $bimestres->getBimestrescodigo());
		$insert->bindValue('bimestre1', $bimestres->getBimestre());
		$insert->bindValue('bimestresOculto1', $bimestres->getBimestresOculto());
		$insert->bindValue('bimestresAccion1', $bimestres->getBimestresAccion());
		$insert->bindValue('bimestresfecha1', $bimestres->getBimestresfecha());
		$insert->bindValue('bimestresuser1', $bimestres->getBimestresuser());
		$insert->execute();
	}

	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM bimestres WHERE idBimestres=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
