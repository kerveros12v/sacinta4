<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/ContactosEmergencia.php");

use Clasesphp\Contactosemergencia;

class CrudContactosemergencia
{
	// constructor de la clase
	public function __construct()
	{
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listacontactoEmergencia = null;
		$select = $db->query("SELECT * FROM `contactosemergencia`");
		foreach ($select->fetchAll() as $contactoEmergencia) {
			$mycontactoEmergencia = new Contactosemergencia();
			///
			$mycontactoEmergencia->setContactosEmergenciaId($contactoEmergencia['contactosEmergenciaId']);
			$mycontactoEmergencia->setNombreContactoEmergencia($contactoEmergencia['nombreContactoEmergencia']);
			$mycontactoEmergencia->setNumeroContactosEmergencia($contactoEmergencia['numeroContactosEmergencia']);
			$mycontactoEmergencia->setParentescosIdParentescos($contactoEmergencia['parentescos_idParentescos']);
			$mycontactoEmergencia->setEstudiantesNumeroIdentificacion($contactoEmergencia['estudiantes_numeroIdentificacion']);
			$mycontactoEmergencia->setContactosperiodo($contactoEmergencia['contactosperiodo']);
			$mycontactoEmergencia->setContactosemergenciaOculto($contactoEmergencia['contactosemergenciaOculto']);
			$mycontactoEmergencia->setContactosemergenciaAccion($contactoEmergencia['contactosemergenciaAccion']);
			$mycontactoEmergencia->setContactosemergenciafecha($contactoEmergencia['contactosemergenciafecha']);
			$mycontactoEmergencia->setContactosemergenciauser($contactoEmergencia['contactosemergenciauser']);
			////
			$listacontactoEmergencia[] = $mycontactoEmergencia;
		}
		return $listacontactoEmergencia;
	}
	public  function existe($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `contactosemergencia` where estudiantes_numeroIdentificacion=:id AND contactosperiodo=:periodo");
		$select->bindValue('id', $id);
		$select->bindValue('periodo', $periodo);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function obtenerContactoEmergencia($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM `contactosemergencia` WHERE estudiantes_numeroIdentificacion =:id AND contactosperiodo=:periodo;");
		$select->bindValue('id', $id);
		$select->bindValue('periodo', $periodo);
		$select->execute();
		$contactoEmergencia = $select->fetch();
		$mycontactoEmergencia = new Contactosemergencia();
		///
		$mycontactoEmergencia->setContactosEmergenciaId($contactoEmergencia['contactosEmergenciaId']);
		$mycontactoEmergencia->setNombreContactoEmergencia($contactoEmergencia['nombreContactoEmergencia']);
		$mycontactoEmergencia->setNumeroContactosEmergencia($contactoEmergencia['numeroContactosEmergencia']);
		$mycontactoEmergencia->setParentescosIdParentescos($contactoEmergencia['parentescos_idParentescos']);
		$mycontactoEmergencia->setEstudiantesNumeroIdentificacion($contactoEmergencia['estudiantes_numeroIdentificacion']);
		$mycontactoEmergencia->setContactosperiodo($contactoEmergencia['contactosperiodo']);
		$mycontactoEmergencia->setContactosemergenciaOculto($contactoEmergencia['contactosemergenciaOculto']);
		$mycontactoEmergencia->setContactosemergenciaAccion($contactoEmergencia['contactosemergenciaAccion']);
		$mycontactoEmergencia->setContactosemergenciafecha($contactoEmergencia['contactosemergenciafecha']);
		$mycontactoEmergencia->setContactosemergenciauser($contactoEmergencia['contactosemergenciauser']);
		return $mycontactoEmergencia;
	}
	public  function insertar($contactoEmergencia)
	{

		$db = Db::conectar();
		$insert = $db->prepare("INSERT INTO `contactosemergencia`
		(`contactosEmergenciaId`,
		`nombreContactoEmergencia`,
		`numeroContactosEmergencia`,
		`estudiantes_numeroIdentificacion`,
		`parentescos_idParentescos`,
		`contactosperiodo`,
		`contactosemergenciaOculto`,
		`contactosemergenciaAccion`,
		`contactosemergenciafecha`,
		`contactosemergenciauser`)
		VALUES
		(:contactosEmergenciaId1,
		:nombreContactoEmergencia1,
		:numeroContactosEmergencia1,
		:estudiantes_numeroIdentificacion1,
		:parentescos_idParentescos1,
		:contactosperiodo1,
		:contactosemergenciaOculto1,
		:contactosemergenciaAccion1,
		:contactosemergenciafecha1,
		:contactosemergenciauser1);");
		$insert->bindValue('contactosEmergenciaId1', $contactoEmergencia->getContactosEmergenciaId());
		$insert->bindValue('nombreContactoEmergencia1', $contactoEmergencia->getNombreContactoEmergencia());
		$insert->bindValue('numeroContactosEmergencia1', $contactoEmergencia->getNumeroContactosEmergencia());
		$insert->bindValue('estudiantes_numeroIdentificacion1', $contactoEmergencia->getEstudiantesNumeroIdentificacion());
		$insert->bindValue('parentescos_idParentescos1', $contactoEmergencia->getParentescosIdParentescos());
		$insert->bindValue('contactosperiodo1', $contactoEmergencia->getContactosperiodo());
		$insert->bindValue('contactosemergenciaOculto1', $contactoEmergencia->getContactosemergenciaOculto());
		$insert->bindValue('contactosemergenciaAccion1', $contactoEmergencia->getContactosemergenciaAccion());
		$insert->bindValue('contactosemergenciafecha1', $contactoEmergencia->getContactosemergenciafecha());
		$insert->bindValue('contactosemergenciauser1', $contactoEmergencia->getContactosemergenciauser());
		$insert->execute();
	}

	public  function actualizar($contactoEmergencia)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `contactosemergencia`
		SET
		`contactosEmergenciaId` = :contactosEmergenciaId1,
		`nombreContactoEmergencia` = :nombreContactoEmergencia1,
		`numeroContactosEmergencia` = :numeroContactosEmergencia1,
		`estudiantes_numeroIdentificacion` = :estudiantes_numeroIdentificacion1,
		`parentescos_idParentescos` = :parentescos_idParentescos1,
		`contactosperiodo` = :contactosperiodo1,
		`contactosemergenciaOculto` = :contactosemergenciaOculto1,
		`contactosemergenciaAccion` = :contactosemergenciaAccion1,
		`contactosemergenciafecha` = :contactosemergenciafecha1,
		`contactosemergenciauser` = :contactosemergenciauser1
		WHERE `contactosEmergenciaId` = :contactosEmergenciaId1 AND contactosperiodo=:contactosperiodo1;");
		$actualizar->bindValue('contactosEmergenciaId1', $contactoEmergencia->getContactosEmergenciaId());
		$actualizar->bindValue('nombreContactoEmergencia1', $contactoEmergencia->getNombreContactoEmergencia());
		$actualizar->bindValue('numeroContactosEmergencia1', $contactoEmergencia->getNumeroContactosEmergencia());
		$actualizar->bindValue('estudiantes_numeroIdentificacion1', $contactoEmergencia->getEstudiantesNumeroIdentificacion());
		$actualizar->bindValue('parentescos_idParentescos1', $contactoEmergencia->getParentescosIdParentescos());
		$actualizar->bindValue('contactosperiodo1', $contactoEmergencia->getContactosperiodo());
		$actualizar->bindValue('contactosemergenciaOculto1', $contactoEmergencia->getContactosemergenciaOculto());
		$actualizar->bindValue('contactosemergenciaAccion1', $contactoEmergencia->getContactosemergenciaAccion());
		$actualizar->bindValue('contactosemergenciafecha1', $contactoEmergencia->getContactosemergenciafecha());
		$actualizar->bindValue('contactosemergenciauser1', $contactoEmergencia->getContactosemergenciauser());
		$actualizar->execute();
	}
	public  function eliminar($id, $periodo1)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM `contactosemergencia` WHERE estudiantes_numeroIdentificacion1=:id AND contactosperiodo1=:periodo1');
		$eliminar->bindValue('id', $id);
		$eliminar->bindValue('periodo1', $periodo1);
		$eliminar->execute();
	}
}
