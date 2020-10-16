<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecAspirante.php");

use Clasesphp\SetecAspirante;

class CrudSetecAspirante
{
	// constructor de la clase
	public function __construct()
	{
	}

	public function mostrar()
	{
		$db = Db::conectar();
		$listasetecaspirante = null;
		$select = $db->query("SELECT * FROM `setecaspirante`");

		foreach ($select->fetchAll() as $setecperfil) {
			$mysetecAspirante = new SetecAspirante();
			$mysetecAspirante->setNumeroidentificacionsetec($setecperfil['numeroidentificacionsetec']);
			$mysetecAspirante->setPrimerApellidosetec($setecperfil['primerApellidosetec']);
			$mysetecAspirante->setSegundoApellidosetec($setecperfil['segundoApellidosetec']);
			$mysetecAspirante->setPrimerNombresetec($setecperfil['primerNombresetec']);
			$mysetecAspirante->setSegundoNombresetec($setecperfil['segundoNombresetec']);
			$mysetecAspirante->setFechanacimiento($setecperfil['fechanacimiento']);
			$mysetecAspirante->setFkgenerosetec($setecperfil['fkgenerosetec']);
			$mysetecAspirante->setFkformacionArtesano($setecperfil['fkformacionArtesano']);
			$mysetecAspirante->setInstruccionRegistroCivil($setecperfil['instruccionRegistroCivil']);
			$mysetecAspirante->setParroquiasetec($setecperfil['parroquiasetec']);
			$mysetecAspirante->setDireccionsetec($setecperfil['direccionsetec']);
			$mysetecAspirante->setCorreoelectronicoSetec($setecperfil['correoelectronicoSetec']);
			$mysetecAspirante->setTelefonosetec($setecperfil['telefonosetec']);
			$mysetecAspirante->setCelularsetec($setecperfil['celularsetec']);
			$mysetecAspirante->setFktipodiscapacidad($setecperfil['fktipodiscapacidad']);
			$mysetecAspirante->setFksocioempleo($setecperfil['fksocioempleo']);
			$mysetecAspirante->setIdaccesodepartamento($setecperfil['accesodepartamento_idaccesodepartamento']);
			$mysetecAspirante->setSetecaspiranteOculto($setecperfil['setecaspiranteOculto']);
			$mysetecAspirante->setSetecaspiranteAccion($setecperfil['setecaspiranteAccion']);
			$mysetecAspirante->setSetecaspirantefecha($setecperfil['setecaspirantefecha']);
			$mysetecAspirante->setSetecaspiranteuser($setecperfil['setecaspiranteuser']);
			$mysetecAspirante->setSetecaspiinstriccionseleccionada($setecperfil['setecaspiinstriccionseleccionada']);
			////
			$listasetecaspirante[] = $mysetecAspirante;
		}
		return $listasetecaspirante;
	}
	public function obtenerSetecaspirante($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `setecaspirante` WHERE `numeroidentificacionsetec`=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$setecperfil = $select->fetch();
		$mysetecAspirante = new SetecAspirante();
		//
		$mysetecAspirante->setNumeroidentificacionsetec($setecperfil['numeroidentificacionsetec']);
		$mysetecAspirante->setPrimerApellidosetec($setecperfil['primerApellidosetec']);
		$mysetecAspirante->setSegundoApellidosetec($setecperfil['segundoApellidosetec']);
		$mysetecAspirante->setPrimerNombresetec($setecperfil['primerNombresetec']);
		$mysetecAspirante->setSegundoNombresetec($setecperfil['segundoNombresetec']);
		$mysetecAspirante->setFechanacimiento($setecperfil['fechanacimiento']);
		$mysetecAspirante->setFkgenerosetec($setecperfil['fkgenerosetec']);
		$mysetecAspirante->setFkformacionArtesano($setecperfil['fkformacionArtesano']);
		$mysetecAspirante->setInstruccionRegistroCivil($setecperfil['instruccionRegistroCivil']);
		$mysetecAspirante->setParroquiasetec($setecperfil['parroquiasetec']);
		$mysetecAspirante->setDireccionsetec($setecperfil['direccionsetec']);
		$mysetecAspirante->setCorreoelectronicoSetec($setecperfil['correoelectronicoSetec']);
		$mysetecAspirante->setTelefonosetec($setecperfil['telefonosetec']);
		$mysetecAspirante->setCelularsetec($setecperfil['celularsetec']);
		$mysetecAspirante->setFktipodiscapacidad($setecperfil['fktipodiscapacidad']);
		$mysetecAspirante->setFksocioempleo($setecperfil['fksocioempleo']);
		$mysetecAspirante->setIdaccesodepartamento($setecperfil['accesodepartamento_idaccesodepartamento']);
		$mysetecAspirante->setSetecaspiranteOculto($setecperfil['setecaspiranteOculto']);
		$mysetecAspirante->setSetecaspiranteAccion($setecperfil['setecaspiranteAccion']);
		$mysetecAspirante->setSetecaspirantefecha($setecperfil['setecaspirantefecha']);
		$mysetecAspirante->setSetecaspiranteuser($setecperfil['setecaspiranteuser']);
		$mysetecAspirante->setSetecaspiinstriccionseleccionada($setecperfil['setecaspiinstriccionseleccionada']);
		return $mysetecAspirante;
	}

	public function insertar($datos)
	{
		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `setecaspirante`
		(`numeroidentificacionsetec`,
		`primerApellidosetec`,
		`segundoApellidosetec`,
		`primerNombresetec`,
		`segundoNombresetec`,
		`fechanacimiento`,
		`fkgenerosetec`,
		`fkformacionArtesano`,
		`instruccionRegistroCivil`,
		`setecaspiinstriccionseleccionada`,
		`parroquiasetec`,
		`direccionsetec`,
		`correoelectronicoSetec`,
		`telefonosetec`,
		`celularsetec`,
		`fktipodiscapacidad`,
		`fksocioempleo`,
		`accesodepartamento_idaccesodepartamento`,
		`setecaspiranteOculto`,
		`setecaspiranteAccion`,
		`setecaspirantefecha`,
		`setecaspiranteuser`)
		VALUES
		(:numeroidentificacionsetec1,
		:primerApellidosetec1,
		:segundoApellidosetec1,
		:primerNombresetec1,
		:segundoNombresetec1,
		:fechanacimiento1,
		:fkgenerosetec1,
		:fkformacionArtesano1,
		:instruccionRegistroCivil1,
		:setecaspiinstriccionseleccionada1,
		:parroquiasetec1,
		:direccionsetec1,
		:correoelectronicoSetec1,
		:telefonosetec1,
		:celularsetec1,
		:fktipodiscapacidad1,
		:fksocioempleo1,
		:accesodepartamento_idaccesodepartamento1,
		:setecaspiranteOculto1,
		:setecaspiranteAccion1,
		:setecaspirantefecha1,
		:setecaspiranteuser1);");
		$insert->bindValue('numeroidentificacionsetec1', $datos->getNumeroidentificacionsetec());
		$insert->bindValue('primerApellidosetec1', $datos->getPrimerApellidosetec());
		$insert->bindValue('segundoApellidosetec1', $datos->getSegundoApellidosetec());
		$insert->bindValue('primerNombresetec1', $datos->getPrimerNombresetec());
		$insert->bindValue('segundoNombresetec1', $datos->getSegundoNombresetec());
		$insert->bindValue('fechanacimiento1', $datos->getFechanacimiento());
		$insert->bindValue('fkgenerosetec1', $datos->getFkgenerosetec());
		$insert->bindValue('fkformacionArtesano1', $datos->getFkformacionArtesano());
		$insert->bindValue('instruccionRegistroCivil1', $datos->getInstruccionRegistroCivil());
		$insert->bindValue('parroquiasetec1', $datos->getParroquiasetec());
		$insert->bindValue('direccionsetec1', $datos->getDireccionsetec());
		$insert->bindValue('correoelectronicoSetec1', $datos->getCorreoelectronicoSetec());
		$insert->bindValue('telefonosetec1', $datos->getTelefonosetec());
		$insert->bindValue('celularsetec1', $datos->getCelularsetec());
		$insert->bindValue('fktipodiscapacidad1', $datos->getFktipodiscapacidad());
		$insert->bindValue('fksocioempleo1', $datos->getFksocioempleo());
		$insert->bindValue('accesodepartamento_idaccesodepartamento1', $datos->getIdaccesodepartamento());
		$insert->bindValue('setecaspiranteOculto1', $datos->getSetecaspiranteOculto());
		$insert->bindValue('setecaspiranteAccion1', $datos->getSetecaspiranteAccion());
		$insert->bindValue('setecaspirantefecha1', $datos->getSetecaspirantefecha());
		$insert->bindValue('setecaspiranteuser1', $datos->getSetecaspiranteuser());
		$insert->bindValue('setecaspiinstriccionseleccionada1', $datos->getSetecaspiinstriccionseleccionada());
		$insert->execute();
	}
	public function actualizar($datos)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `setecaspirante`
		SET
		`numeroidentificacionsetec` = :numeroidentificacionsetec1,
		`primerApellidosetec` = :primerApellidosetec1,
		`segundoApellidosetec` = :segundoApellidosetec1,
		`primerNombresetec` = :primerNombresetec1,
		`segundoNombresetec` = :segundoNombresetec1,
		`fechanacimiento` = :fechanacimiento1,
		`fkgenerosetec` = :fkgenerosetec1,
		`fkformacionArtesano` = :fkformacionArtesano1,
		`instruccionRegistroCivil` = :instruccionRegistroCivil1,
		`setecaspiinstriccionseleccionada` = :setecaspiinstriccionseleccionada1,
		`parroquiasetec` = :parroquiasetec1,
		`direccionsetec` = :direccionsetec1,
		`correoelectronicoSetec` = :correoelectronicoSetec1,
		`telefonosetec` = :telefonosetec1,
		`celularsetec` = :celularsetec1,
		`fktipodiscapacidad` = :fktipodiscapacidad1,
		`fksocioempleo` = :fksocioempleo1,
		`accesodepartamento_idaccesodepartamento` = :accesodepartamento_idaccesodepartamento1,
		`setecaspiranteOculto` = :setecaspiranteOculto1,
		`setecaspiranteAccion` = :setecaspiranteAccion1,
		`setecaspirantefecha` = :setecaspirantefecha1,
		`setecaspiranteuser` = :setecaspiranteuser1
		WHERE `numeroidentificacionsetec` = :numeroidentificacionsetec1;
		");
		$actualizar->bindValue('numeroidentificacionsetec1', $datos->getNumeroidentificacionsetec());
		$actualizar->bindValue('primerApellidosetec1', $datos->getPrimerApellidosetec());
		$actualizar->bindValue('segundoApellidosetec1', $datos->getSegundoApellidosetec());
		$actualizar->bindValue('primerNombresetec1', $datos->getPrimerNombresetec());
		$actualizar->bindValue('segundoNombresetec1', $datos->getSegundoNombresetec());
		$actualizar->bindValue('fechanacimiento1', $datos->getFechanacimiento());
		$actualizar->bindValue('fkgenerosetec1', $datos->getFkgenerosetec());
		$actualizar->bindValue('fkformacionArtesano1', $datos->getFkformacionArtesano());
		$actualizar->bindValue('instruccionRegistroCivil1', $datos->getInstruccionRegistroCivil());
		$actualizar->bindValue('parroquiasetec1', $datos->getParroquiasetec());
		$actualizar->bindValue('direccionsetec1', $datos->getDireccionsetec());
		$actualizar->bindValue('correoelectronicoSetec1', $datos->getCorreoelectronicoSetec());
		$actualizar->bindValue('telefonosetec1', $datos->getTelefonosetec());
		$actualizar->bindValue('celularsetec1', $datos->getCelularsetec());
		$actualizar->bindValue('fktipodiscapacidad1', $datos->getFktipodiscapacidad());
		$actualizar->bindValue('fksocioempleo1', $datos->getFksocioempleo());
		$actualizar->bindValue('accesodepartamento_idaccesodepartamento1', $datos->getIdaccesodepartamento());
		$actualizar->bindValue('setecaspiranteOculto1', $datos->getSetecaspiranteOculto());
		$actualizar->bindValue('setecaspiranteAccion1', $datos->getSetecaspiranteAccion());
		$actualizar->bindValue('setecaspirantefecha1', $datos->getSetecaspirantefecha());
		$actualizar->bindValue('setecaspiranteuser1', $datos->getSetecaspiranteuser());
		$actualizar->bindValue('setecaspiinstriccionseleccionada1', $datos->getSetecaspiinstriccionseleccionada());
		$actualizar->execute();
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `setecaspirante` WHERE numeroidentificacionsetec=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
