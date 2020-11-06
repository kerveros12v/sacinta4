<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Empresas.php");

use Clasesphp\Empresas;

class CrudEmpresas
{
	// constructor de la clase
	public function __construct()
	{
		$db = Db::conectar();
		$select = $db->query("SET NAMES 'utf8'");
	}
	public function mostrar()
	{
		//, , , , , , , , , , , , , ,
		$db = Db::conectar();
		$listaempresas = null;
		$select = $db->query("SELECT * FROM `empresas` ");
		foreach ($select->fetchAll() as $empresas1) {
			$myempresas = new Empresas();
			$myempresas->setEmpresasId($empresas1['empresasId']);
			$myempresas->setNombreEmpresaInstitucion($empresas1['nombreEmpresaInstitucion']);
			$myempresas->setUbicacion($empresas1['ubicacion']);
			$myempresas->setRepresentanteLega($empresas1['representanteLega']);
			$myempresas->setNoInformeTecnicodeViabilidad($empresas1['noInformeTecnicodeViabilidad']);
			$myempresas->setFechaInformeTecnicodeViabilidad($empresas1['fechaInformeTecnicodeViabilidad']);
			$myempresas->setNoDeConvenio($empresas1['noDeConvenio']);
			$myempresas->setFechaConvenio($empresas1['fechaConvenio']);
			$myempresas->setContactoEmpresa($empresas1['contactoEmpresa']);
			$myempresas->setCorreoEmpresas($empresas1['correoEmpresas']);
			$myempresas->setDepartamentocoodinador($empresas1['departamentocoodinador']);
			$myempresas->setEmpresasOculto($empresas1['empresasOculto']);
			$myempresas->setEmpresasAccion($empresas1['empresasAccion']);
			$myempresas->setEmpresasfecha($empresas1['empresasfecha']);
			$myempresas->setEmpresasuser($empresas1['empresasuser']);

			$listaempresas[] = $myempresas;
		}
		return $listadias;
	}
	public function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM empresas WHERE empresasId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
	public function obtenerDias($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT * FROM empresas WHERE empresasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$empresas1 = $select->fetch();
		$myempresas = new Empresas();
		$myempresas->setEmpresasId($empresas1['empresasId']);
		$myempresas->setNombreEmpresaInstitucion($empresas1['nombreEmpresaInstitucion']);
		$myempresas->setUbicacion($empresas1['ubicacion']);
		$myempresas->setRepresentanteLega($empresas1['representanteLega']);
		$myempresas->setNoInformeTecnicodeViabilidad($empresas1['noInformeTecnicodeViabilidad']);
		$myempresas->setFechaInformeTecnicodeViabilidad($empresas1['fechaInformeTecnicodeViabilidad']);
		$myempresas->setNoDeConvenio($empresas1['noDeConvenio']);
		$myempresas->setFechaConvenio($empresas1['fechaConvenio']);
		$myempresas->setContactoEmpresa($empresas1['contactoEmpresa']);
		$myempresas->setCorreoEmpresas($empresas1['correoEmpresas']);
		$myempresas->setDepartamentocoodinador($empresas1['departamentocoodinador']);
		$myempresas->setEmpresasOculto($empresas1['empresasOculto']);
		$myempresas->setEmpresasAccion($empresas1['empresasAccion']);
		$myempresas->setEmpresasfecha($empresas1['empresasfecha']);
		$myempresas->setEmpresasuser($empresas1['empresasuser']);

		return $myempresas;
	}
	public function obtenerDato($id)
	{
		$db = Db::conectar();
		$select = $db->prepare('SELECT nombreEmpresaInstitucion FROM empresas WHERE empresasId=:id');
		$select->bindValue('id', $id);
		$select->execute();
		$empresas1 = $select->fetch();
		$myempresas = ($empresas1['nombreEmpresaInstitucion']);

		return $myempresas;
	}
	public function actualizar($empresas1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE `empresas`
		SET
		`empresasId` = :empresasId1,
		`nombreEmpresaInstitucion` = :nombreEmpresaInstitucion1,
		`ubicacion` = :ubicacion1,
		`representanteLega` = :representanteLega1,
		`noInformeTecnicodeViabilidad` = :noInformeTecnicodeViabilidad1,
		`fechaInformeTecnicodeViabilidad` = :fechaInformeTecnicodeViabilidad1,
		`noDeConvenio` = :noDeConvenio1,
		`fechaConvenio` = :fechaConvenio1,
		`contactoEmpresa` = :contactoEmpresa1,
		`correoEmpresas` = :correoEmpresas1,
		`departamentocoodinador` = :departamentocoodinador1,
		`empresasOculto` = :empresasOculto1,
		`empresasAccion` = :empresasAccion1,
		`empresasfecha` = :empresasfecha1,
		`empresasuser` = :empresasuser1
		WHERE `empresasId` = :empresasId1;');
		$actualizar->bindValue('empresasId1', $empresas1->getEmpresasId());
		$actualizar->bindValue('nombreEmpresaInstitucion1', $empresas1->getNombreEmpresaInstitucion());
		$actualizar->bindValue('ubicacion1', $empresas1->getUbicacion());
		$actualizar->bindValue('representanteLega1', $empresas1->getRepresentanteLega());
		$actualizar->bindValue('noInformeTecnicodeViabilidad1', $empresas1->getNoInformeTecnicodeViabilidad());
		$actualizar->bindValue('fechaInformeTecnicodeViabilidad1', $empresas1->getFechaInformeTecnicodeViabilidad());
		$actualizar->bindValue('noDeConvenio1', $empresas1->getNoDeConvenio());
		$actualizar->bindValue('fechaConvenio1', $empresas1->getFechaConvenio());
		$actualizar->bindValue('contactoEmpresa1', $empresas1->getContactoEmpresa());
		$actualizar->bindValue('correoEmpresas1', $empresas1->getCorreoEmpresas());
		$actualizar->bindValue('departamentocoodinador1', $empresas1->getDepartamentocoodinador());
		$actualizar->bindValue('empresasOculto1', $empresas1->getEmpresasOculto());
		$actualizar->bindValue('empresasAccion1', $empresas1->getEmpresasAccion());
		$actualizar->bindValue('empresasfecha1', $empresas1->getEmpresasfecha());
		$actualizar->bindValue('empresasuser1', $empresas1->getEmpresasuser());
		$actualizar->execute();
	}
	public function insertar($empresas1)
	{
		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `empresas`
		(`empresasId`,
		`nombreEmpresaInstitucion`,
		`ubicacion`,
		`representanteLega`,
		`noInformeTecnicodeViabilidad`,
		`fechaInformeTecnicodeViabilidad`,
		`noDeConvenio`,
		`fechaConvenio`,
		`contactoEmpresa`,
		`correoEmpresas`,
		`departamentocoodinador`,
		`empresasOculto`,
		`empresasAccion`,
		`empresasfecha`,
		`empresasuser`)
		VALUES
		(:empresasId1,
		:nombreEmpresaInstitucion1,
		:ubicacion1,
		:representanteLega1,
		:noInformeTecnicodeViabilidad1,
		:fechaInformeTecnicodeViabilidad1,
		:noDeConvenio1,
		:fechaConvenio1,
		:contactoEmpresa1,
		:correoEmpresas1,
		:departamentocoodinador1,
		:empresasOculto1,
		:empresasAccion1,
		:empresasfecha1,
		:empresasuser1);');
		$insert->bindValue('empresasId1', $empresas1->getEmpresasId());
		$insert->bindValue('nombreEmpresaInstitucion1', $empresas1->getNombreEmpresaInstitucion());
		$insert->bindValue('ubicacion1', $empresas1->getUbicacion());
		$insert->bindValue('representanteLega1', $empresas1->getRepresentanteLega());
		$insert->bindValue('noInformeTecnicodeViabilidad1', $empresas1->getNoInformeTecnicodeViabilidad());
		$insert->bindValue('fechaInformeTecnicodeViabilidad1', $empresas1->getFechaInformeTecnicodeViabilidad());
		$insert->bindValue('noDeConvenio1', $empresas1->getNoDeConvenio());
		$insert->bindValue('fechaConvenio1', $empresas1->getFechaConvenio());
		$insert->bindValue('contactoEmpresa1', $empresas1->getContactoEmpresa());
		$insert->bindValue('correoEmpresas1', $empresas1->getCorreoEmpresas());
		$insert->bindValue('departamentocoodinador1', $empresas1->getDepartamentocoodinador());
		$insert->bindValue('empresasOculto1', $empresas1->getEmpresasOculto());
		$insert->bindValue('empresasAccion1', $empresas1->getEmpresasAccion());
		$insert->bindValue('empresasfecha1', $empresas1->getEmpresasfecha());
		$insert->bindValue('empresasuser1', $empresas1->getEmpresasuser());
		$insert->execute();
	}
}
