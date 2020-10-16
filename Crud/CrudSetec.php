<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/Setec.php");

use Clasesphp\Setec;

class CrudSetec
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasetec = null;
		$select = $db->query("SELECT * FROM `setec`");
		foreach ($select->fetchAll() as $setec) {
			$mysetec = new Setec();
			//, , , , , , , , , ,
			$mysetec->setIdsetec($setec['idsetec']);
			$mysetec->setSetecAspiranteNumeroidentificacionsetec($setec['setecAspirante_numeroidentificacionsetec']);
			$mysetec->setFksetecEncuestador($setec['fksetecEncuestador']);
			$mysetec->setSetecCertificacionIdsetecCertificacion($setec['setecCertificacion_idsetecCertificacion']);
			$mysetec->setSetecfkcondiciondevida($setec['setecfkcondiciondevida']);
			$mysetec->setSetecfkcondicionlaboral($setec['setecfkcondicionlaboral']);
			$mysetec->setFksecestadocertificacion($setec['fksecestadocertificacion']);
			$mysetec->setSetecOculto($setec['setecOculto']);
			$mysetec->setSetecAccion($setec['setecAccion']);
			$mysetec->setSetecfecha($setec['setecfecha']);
			$mysetec->setSetecuser($setec['setecuser']);
			////
			$listasetec[] = $mysetec;
		}
		return $listasetec;
	}
	public function obtenersetec($id, $certificacion)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setec` WHERE `setecAspirante_numeroidentificacionsetec`=:id AND setecCertificacion_idsetecCertificacion=:dato;");
		$select->bindValue('id', $id);
		$select->bindValue('dato', $certificacion);
		$select->execute();
		$setec = $select->fetch();
		$mysetec = new Setec();
		///
		$mysetec->setIdsetec($setec['idsetec']);
		$mysetec->setSetecAspiranteNumeroidentificacionsetec($setec['setecAspirante_numeroidentificacionsetec']);
		$mysetec->setFksetecEncuestador($setec['fksetecEncuestador']);
		$mysetec->setSetecCertificacionIdsetecCertificacion($setec['setecCertificacion_idsetecCertificacion']);
		$mysetec->setSetecfkcondiciondevida($setec['setecfkcondiciondevida']);
		$mysetec->setSetecfkcondicionlaboral($setec['setecfkcondicionlaboral']);
		$mysetec->setFksecestadocertificacion($setec['fksecestadocertificacion']);
		$mysetec->setSetecOculto($setec['setecOculto']);
		$mysetec->setSetecAccion($setec['setecAccion']);
		$mysetec->setSetecfecha($setec['setecfecha']);
		$mysetec->setSetecuser($setec['setecuser']);
		return $mysetec;
	}
	public function mostrarsetec($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setec` WHERE `setecAspirante_numeroidentificacionsetec`=:id ");
		$select->bindValue('id', $id);
		$select->execute();
		$listasetec = null;
		foreach ($select->fetchAll() as $setec) {
			$mysetec = new Setec();
			///
			$mysetec->setIdsetec($setec['idsetec']);
			$mysetec->setSetecAspiranteNumeroidentificacionsetec($setec['setecAspirante_numeroidentificacionsetec']);
			$mysetec->setFksetecEncuestador($setec['fksetecEncuestador']);
			$mysetec->setSetecCertificacionIdsetecCertificacion($setec['setecCertificacion_idsetecCertificacion']);
			$mysetec->setSetecfkcondiciondevida($setec['setecfkcondiciondevida']);
			$mysetec->setSetecfkcondicionlaboral($setec['setecfkcondicionlaboral']);
			$mysetec->setFksecestadocertificacion($setec['fksecestadocertificacion']);
			$mysetec->setSetecOculto($setec['setecOculto']);
			$mysetec->setSetecAccion($setec['setecAccion']);
			$mysetec->setSetecfecha($setec['setecfecha']);
			$mysetec->setSetecuser($setec['setecuser']);
			////
			$listasetec[] = $mysetec;
		}
		return $listasetec;
	}
	public  function existe($id, $dato)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM setec where setecAspirante_numeroidentificacionsetec=:id AND setecCertificacion_idsetecCertificacion=idCertificacion;");
		$select->bindValue('id', $id);
		$select->bindValue('idCertificacion', $dato);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public function insertar($datos)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `setec`
		(`idsetec`,
		`setecAspirante_numeroidentificacionsetec`,
		`fksetecEncuestador`,
		`setecCertificacion_idsetecCertificacion`,
		`setecfkcondiciondevida`,
		`setecfkcondicionlaboral`,
		`fksecestadocertificacion`,
		`setecOculto`,
		`setecAccion`,
		`setecfecha`,
		`setecuser`)
		VALUES
		(:idsetec1,
		:setecAspirante_numeroidentificacionsetec1,
		:fksetecEncuestador1,
		:setecCertificacion_idsetecCertificacion1,
		:setecfkcondiciondevida1,
		:setecfkcondicionlaboral1,
		:fksecestadocertificacion1,
		:setecOculto1,
		:setecAccion1,
		:setecfecha1,
		:setecuser1);");
		$insert->bindValue('idsetec1', $datos->getIdsetec());
		$insert->bindValue('setecAspirante_numeroidentificacionsetec1', $datos->getSetecAspiranteNumeroidentificacionsetec());
		$insert->bindValue('fksetecEncuestador1', $datos->getFksetecEncuestador());
		$insert->bindValue('setecCertificacion_idsetecCertificacion1', $datos->getSetecCertificacionIdsetecCertificacion());
		$insert->bindValue('setecfkcondiciondevida1', $datos->getSetecfkcondiciondevida());
		$insert->bindValue('setecfkcondicionlaboral1', $datos->getSetecfkcondicionlaboral());
		$insert->bindValue('fksecestadocertificacion1', $datos->getFksecestadocertificacion());
		$insert->bindValue('setecOculto1', $datos->getSetecOculto());
		$insert->bindValue('setecAccion1', $datos->getSetecAccion());
		$insert->bindValue('setecfecha1', $datos->getSetecfecha());
		$insert->bindValue('setecuser1', $datos->getSetecuser());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `setec`
		SET
		`idsetec` = :idsetec1,
		`setecAspirante_numeroidentificacionsetec` = :setecAspirante_numeroidentificacionsetec1,
		`fksetecEncuestador` = :fksetecEncuestador1,
		`setecCertificacion_idsetecCertificacion` = :setecCertificacion_idsetecCertificacion1,
		`setecfkcondiciondevida` = :setecfkcondiciondevida1,
		`setecfkcondicionlaboral` = :setecfkcondicionlaboral1,
		`fksecestadocertificacion` = :fksecestadocertificacion1,
		`setecOculto` = :setecOculto1,
		`setecAccion` = :setecAccion1,
		`setecfecha` = :setecfecha1,
		`setecuser` = :setecuser1
		WHERE `idsetec` = :idsetec1;");
		$actualizar->bindValue('idsetec1', $datos->getIdsetec());
		$actualizar->bindValue('setecAspirante_numeroidentificacionsetec1', $datos->getSetecAspiranteNumeroidentificacionsetec());
		$actualizar->bindValue('fksetecEncuestador1', $datos->getFksetecEncuestador());
		$actualizar->bindValue('setecCertificacion_idsetecCertificacion1', $datos->getSetecCertificacionIdsetecCertificacion());
		$actualizar->bindValue('setecfkcondiciondevida1', $datos->getSetecfkcondiciondevida());
		$actualizar->bindValue('setecfkcondicionlaboral1', $datos->getSetecfkcondicionlaboral());
		$actualizar->bindValue('fksecestadocertificacion1', $datos->getFksecestadocertificacion());
		$actualizar->bindValue('setecOculto1', $datos->getSetecOculto());
		$actualizar->bindValue('setecAccion1', $datos->getSetecAccion());
		$actualizar->bindValue('setecfecha1', $datos->getSetecfecha());
		$actualizar->bindValue('setecuser1', $datos->getSetecuser());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setec` WHERE idsetec=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
