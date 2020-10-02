<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Personal.php");

use Crud\Db;
use Clasesphp\Personal;

class CrudPersonal
{
	// constructor de la clase
	public  function __construct()
	{
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listapersonal = null;
		$select = $db->query("SELECT * FROM personal");
		foreach ($select->fetchAll() as $personal1) {
			$mypersonal = new Personal();
			$mypersonal->setTipodocumentoId($personal1['tipodocumentoId']);
			$mypersonal->setNumeroIdentificacion($personal1['numeroIdentificacion']);
			$mypersonal->setPrimerApellido($personal1['primerApellido']);
			$mypersonal->setSegundoApellido($personal1['segundoApellido']);
			$mypersonal->setPrimerNombre($personal1['primerNombre']);
			$mypersonal->setSegundoNombre($personal1['segundoNombre']);
			$mypersonal->setSexoId($personal1['sexoId']);
			$mypersonal->setGeneroId($personal1['generoId']);
			$mypersonal->setEstadocivilId($personal1['estadocivilId']);
			$mypersonal->setEtniaId($personal1['etniaId']);
			$mypersonal->setPueblonacionalidadId($personal1['pueblonacionalidadId']);
			$mypersonal->setFechaNacimiento($personal1['fechaNacimiento']);
			$mypersonal->setDireccionDomiciliaria($personal1['direccionDomiciliaria']);
			$mypersonal->setCorreoElectronico($personal1['correoElectronico']);
			$mypersonal->setNumeroCelular($personal1['numeroCelular']);
			$mypersonal->setProvinciaSufragio($personal1['provinciaSufragio']);
			$mypersonal->setNumeroCelular($personal1['usuariopersonal']);
			$mypersonal->setCorreoElectronico($personal1['passwordpersonal']);
			$mypersonal->setNumDomicilio($personal1['numDomicilio']);
			$mypersonal->setPorcentajeDiscapacidad($personal1['porcentajeDiscapacidad']);
			$mypersonal->setNumCarnetDiscapacidad($personal1['numCarnetDiscapacidad']);
			$mypersonal->setTipoDiscapacidadid($personal1['tipoDiscapacidadid']);
			$mypersonal->setTipoEnfermedadCatastroficaId($personal1['tipoEnfermedadCatastroficaId']);
			$mypersonal->setFechaNacimiento($personal1['fechaNacimiento']);
			$mypersonal->setPaisNacionalidadId($personal1['paisNacionalidadId']);
			$mypersonal->setTipoPersonalAdministrativo($personal1['tipoPersonalAdministrativo']);
			$mypersonal->setFechaIngresoIES($personal1['fechaIngresoIES']);
			$mypersonal->setFechaSalidaIES($personal1['fechaSalidaIES']);
			$mypersonal->setRelacionLaboralIESId($personal1['relacionLaboralIESId']);
			$mypersonal->setIngresoConConcursoMeritos($personal1['ingresoConConcursoMeritos']);
			$mypersonal->setNroHorasLaborablesSemana($personal1['nroHorasLaborablesSemana']);
			$mypersonal->setSalarioMensual($personal1['salarioMensual']);
			$mypersonal->setUsuarioPersonal($personal1['usuarioPersonal']);
			$mypersonal->setPasswordPersonal($personal1['passwordPersonal']);
			$mypersonal->setAccesodepartamento($personal1['accesodepartamento_idaccesodepartamento']);
			$mypersonal->setPersonalOculto($personal1['personalOculto']);
			$mypersonal->setPersonalAccion($personal1['personalAccion']);
			$mypersonal->setPersonalfecha($personal1['personalfecha']);
			$mypersonal->setPersonaluser($personal1['personaluser']);
			////
			$listapersonal[] = $mypersonal;
		}
		return $listapersonal;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM personal where numeroIdentificacion=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}

	public  function login($id, $pass)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM personal where usuarioPersonal=:id and passwordPersonal=:pass;");
		$select->bindValue('id', $id);
		$select->bindValue('pass', $pass);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}

	public  function obtenerpersonal($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM personal where numeroIdentificacion=:id;");
		$select->bindValue('id', $id);
		$select->execute();
		$personal1 = $select->fetch();
		$mypersonal = new Personal();
		$mypersonal->setTipodocumentoId($personal1['tipodocumentoId']);
		$mypersonal->setNumeroIdentificacion($personal1['numeroIdentificacion']);
		$mypersonal->setPrimerApellido($personal1['primerApellido']);
		$mypersonal->setSegundoApellido($personal1['segundoApellido']);
		$mypersonal->setPrimerNombre($personal1['primerNombre']);
		$mypersonal->setSegundoNombre($personal1['segundoNombre']);
		$mypersonal->setSexoId($personal1['sexoId']);
		$mypersonal->setGeneroId($personal1['generoId']);
		$mypersonal->setEstadocivilId($personal1['estadocivilId']);
		$mypersonal->setEtniaId($personal1['etniaId']);
		$mypersonal->setPueblonacionalidadId($personal1['pueblonacionalidadId']);
		$mypersonal->setFechaNacimiento($personal1['fechaNacimiento']);
		$mypersonal->setDireccionDomiciliaria($personal1['direccionDomiciliaria']);
		$mypersonal->setCorreoElectronico($personal1['correoElectronico']);
		$mypersonal->setNumeroCelular($personal1['numeroCelular']);
		$mypersonal->setProvinciaSufragio($personal1['provinciaSufragio']);
		$mypersonal->setNumeroCelular($personal1['usuariopersonal']);
		$mypersonal->setCorreoElectronico($personal1['passwordpersonal']);
		$mypersonal->setNumDomicilio($personal1['numDomicilio']);
		$mypersonal->setPorcentajeDiscapacidad($personal1['porcentajeDiscapacidad']);
		$mypersonal->setNumCarnetDiscapacidad($personal1['numCarnetDiscapacidad']);
		$mypersonal->setTipoDiscapacidadid($personal1['tipoDiscapacidadid']);
		$mypersonal->setTipoEnfermedadCatastroficaId($personal1['tipoEnfermedadCatastroficaId']);
		$mypersonal->setFechaNacimiento($personal1['fechaNacimiento']);
		$mypersonal->setPaisNacionalidadId($personal1['paisNacionalidadId']);
		$mypersonal->setTipoPersonalAdministrativo($personal1['tipoPersonalAdministrativo']);
		$mypersonal->setFechaIngresoIES($personal1['fechaIngresoIES']);
		$mypersonal->setFechaSalidaIES($personal1['fechaSalidaIES']);
		$mypersonal->setRelacionLaboralIESId($personal1['relacionLaboralIESId']);
		$mypersonal->setIngresoConConcursoMeritos($personal1['ingresoConConcursoMeritos']);
		$mypersonal->setNroHorasLaborablesSemana($personal1['nroHorasLaborablesSemana']);
		$mypersonal->setSalarioMensual($personal1['salarioMensual']);
		$mypersonal->setUsuarioPersonal($personal1['usuarioPersonal']);
		$mypersonal->setPasswordPersonal($personal1['passwordPersonal']);
		$mypersonal->setAccesodepartamento($personal1['accesodepartamento_idaccesodepartamento']);
		$mypersonal->setPersonalOculto($personal1['personalOculto']);
		$mypersonal->setPersonalAccion($personal1['personalAccion']);
		$mypersonal->setPersonalfecha($personal1['personalfecha']);
		$mypersonal->setPersonaluser($personal1['personaluser']);
		///----------------------------------------------
		return $mypersonal;
	}

	public  function obtenerPermisosPersonal($id, $pass)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM personal where usuariopersonal=:id and passwordpersonal=:pass;");
		$select->bindValue('id', $id);
		$select->bindValue('pass', $pass);
		$select->execute();
		$personal1 = $select->fetch();
		///
		$mypersonal = ($personal1['accesodepartamento_idaccesodepartamento']);
		return $mypersonal;
	}
	public function insertar($personal1)
	{

		$db = Db::conectar();
		$insert = $db->prepare('INSERT INTO `personal`
		(`tipodocumentoId`,
		`numeroIdentificacion`,
		`primerApellido`,
		`segundoApellido`,
		`primerNombre`,
		`segundoNombre`,
		`sexoId`,
		`generoId`,
		`estadocivilId`,
		`etniaId`,
		`pueblonacionalidadId`,
		`direccionDomiciliaria`,
		`provinciaSufragio`,
		`numeroCelular`,
		`correoElectronico`,
		`numDomicilio`,
		`porcentajeDiscapacidad`,
		`numCarnetDiscapacidad`,
		`tipoDiscapacidadid`,
		`tipoEnfermedadCatastroficaId`,
		`fechaNacimiento`,
		`paisNacionalidadId`,
		`tipoPersonalAdministrativo`,
		`fechaIngresoIES`,
		`fechaSalidaIES`,
		`relacionLaboralIESId`,
		`ingresoConConcursoMeritos`,
		`nroHorasLaborablesSemana`,
		`salarioMensual`,
		`usuarioPersonal`,
		`passwordPersonal`,
		`accesodepartamento_idaccesodepartamento`,
		`personalOculto`,
		`personalAccion`,
		`personalfecha`,
		`personaluser`)
		VALUES
		(:tipodocumentoId1,
		:numeroIdentificacion1,
		:primerApellido1,
		:segundoApellido1,
		:primerNombre1,
		:segundoNombre1,
		:sexoId1,
		:generoId1,
		:estadocivilId1,
		:etniaId1,
		:pueblonacionalidadId1,
		:direccionDomiciliaria1,
		:provinciaSufragio1,
		:numeroCelular1,
		:correoElectronico1,
		:numDomicilio1,
		:porcentajeDiscapacidad1,
		:numCarnetDiscapacidad1,
		:tipoDiscapacidadid1,
		:tipoEnfermedadCatastroficaId1,
		:fechaNacimiento1,
		:paisNacionalidadId1,
		:tipoPersonalAdministrativo1,
		:fechaIngresoIES1,
		:fechaSalidaIES1,
		:relacionLaboralIESId1,
		:ingresoConConcursoMeritos1,
		:nroHorasLaborablesSemana1,
		:salarioMensual1,
		:usuarioPersonal1,
		:passwordPersonal1,
		:accesodepartamento_idaccesodepartamento1,
		:personalOculto1,
		:personalAccion1,
		:personalfecha1,
		:personaluser1);');
		$insert->bindValue('tipodocumentoId1', $personal1->getTipodocumentoId());
		$insert->bindValue('numeroIdentificacion1', $personal1->getNumeroIdentificacion());
		$insert->bindValue('primerApellido1', $personal1->getPrimerApellido());
		$insert->bindValue('segundoApellido1', $personal1->getSegundoApellido());
		$insert->bindValue('primerNombre1', $personal1->getPrimerNombre());
		$insert->bindValue('segundoNombre1', $personal1->getSegundoNombre());
		$insert->bindValue('sexoId1', $personal1->getSexoId());
		$insert->bindValue('generoId1', $personal1->getGeneroId());
		$insert->bindValue('estadocivilId1', $personal1->getEstadocivilId());
		$insert->bindValue('etniaId1', $personal1->getEtniaId());
		$insert->bindValue('pueblonacionalidadId1', $personal1->getPueblonacionalidadId());
		$insert->bindValue('direccionDomiciliaria1', $personal1->getDireccionDomiciliaria());
		$insert->bindValue('provinciaSufragio1', $personal1->getProvinciaSufragio());
		$insert->bindValue('numeroCelular1', $personal1->getNumeroCelular());
		$insert->bindValue('correoElectronico1', $personal1->getCorreoElectronico());
		$insert->bindValue('numDomicilio1', $personal1->getNumDomicilio());
		$insert->bindValue('porcentajeDiscapacidad1', $personal1->getPorcentajeDiscapacidad());
		$insert->bindValue('numCarnetDiscapacidad1', $personal1->getNumCarnetDiscapacidad());
		$insert->bindValue('tipoDiscapacidadid1', $personal1->getTipoDiscapacidadid());
		$insert->bindValue('tipoEnfermedadCatastroficaId1', $personal1->getTipoEnfermedadCatastroficaId());
		$insert->bindValue('fechaNacimiento1', $personal1->getFechaNacimiento());
		$insert->bindValue('paisNacionalidadId1', $personal1->getPaisNacionalidadId());
		$insert->bindValue('tipoPersonalAdministrativo1', $personal1->getTipoPersonalAdministrativo());
		$insert->bindValue('fechaIngresoIES1', $personal1->getFechaIngresoIES());
		$insert->bindValue('fechaSalidaIES1', $personal1->getFechaSalidaIES());
		$insert->bindValue('relacionLaboralIESId1', $personal1->getRelacionLaboralIESId());
		$insert->bindValue('ingresoConConcursoMeritos1', $personal1->getIngresoConConcursoMeritos());
		$insert->bindValue('nroHorasLaborablesSemana1', $personal1->getNroHorasLaborablesSemana());
		$insert->bindValue('salarioMensual1', $personal1->getSalarioMensual());
		$insert->bindValue('usuarioPersonal1', $personal1->getUsuarioPersonal());
		$insert->bindValue('passwordPersonal1', $personal1->getPasswordPersonal());
		$insert->bindValue('accesodepartamento_idaccesodepartamento1', $personal1->getAccesodepartamento());
		$insert->bindValue('personalOculto1', $personal1->getPersonalOculto());
		$insert->bindValue('personalAccion1', $personal1->getPersonalAccion());
		$insert->bindValue('personalfecha1', $personal1->getPersonalfecha());
		$insert->bindValue('personaluser1', $personal1->getPersonaluser());

		$insert->execute();
	}

	public  function actualizar($personal1)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `personal`
		SET
		`tipodocumentoId` = :tipodocumentoId1,
		`numeroIdentificacion` = :numeroIdentificacion1,
		`primerApellido` = :primerApellido1,
		`segundoApellido` = :segundoApellido1,
		`primerNombre` = :primerNombre1,
		`segundoNombre` = :segundoNombre1,
		`sexoId` = :sexoId1,
		`generoId` = :generoId1,
		`estadocivilId` = :estadocivilId1,
		`etniaId` = :etniaId1,
		`pueblonacionalidadId` = :pueblonacionalidadId1,
		`direccionDomiciliaria` = :direccionDomiciliaria1,
		`provinciaSufragio` = :provinciaSufragio1,
		`numeroCelular` = :numeroCelular1,
		`correoElectronico` = :correoElectronico1,
		`numDomicilio` = :numDomicilio1,
		`porcentajeDiscapacidad` = :porcentajeDiscapacidad1,
		`numCarnetDiscapacidad` = :numCarnetDiscapacidad1,
		`tipoDiscapacidadid` = :tipoDiscapacidadid1,
		`tipoEnfermedadCatastroficaId` = :tipoEnfermedadCatastroficaId1,
		`fechaNacimiento` = :fechaNacimiento1,
		`paisNacionalidadId` = :paisNacionalidadId1,
		`tipoPersonalAdministrativo` = :tipoPersonalAdministrativo1,
		`fechaIngresoIES` = :fechaIngresoIES1,
		`fechaSalidaIES` = :fechaSalidaIES1,
		`relacionLaboralIESId` = :relacionLaboralIESId1,
		`ingresoConConcursoMeritos` = :ingresoConConcursoMeritos1,
		`nroHorasLaborablesSemana` = :nroHorasLaborablesSemana1,
		`salarioMensual` = :salarioMensual1,
		`usuarioPersonal` = :usuarioPersonal1,
		`passwordPersonal` = :passwordPersonal1,
		`accesodepartamento_idaccesodepartamento` = :accesodepartamento_idaccesodepartamento1,
		`personalOculto` = :personalOculto1,
		`personalAccion` = :personalAccion1,
		`personalfecha` = :personalfecha1,
		`personaluser` = :personaluser1
		WHERE `numeroIdentificacion` = :numeroIdentificacion1;");
		$actualizar->bindValue('tipodocumentoId1', $personal1->getTipodocumentoId());
		$actualizar->bindValue('numeroIdentificacion1', $personal1->getNumeroIdentificacion());
		$actualizar->bindValue('primerApellido1', $personal1->getPrimerApellido());
		$actualizar->bindValue('segundoApellido1', $personal1->getSegundoApellido());
		$actualizar->bindValue('primerNombre1', $personal1->getPrimerNombre());
		$actualizar->bindValue('segundoNombre1', $personal1->getSegundoNombre());
		$actualizar->bindValue('sexoId1', $personal1->getSexoId());
		$actualizar->bindValue('generoId1', $personal1->getGeneroId());
		$actualizar->bindValue('estadocivilId1', $personal1->getEstadocivilId());
		$actualizar->bindValue('etniaId1', $personal1->getEtniaId());
		$actualizar->bindValue('pueblonacionalidadId1', $personal1->getPueblonacionalidadId());
		$actualizar->bindValue('direccionDomiciliaria1', $personal1->getDireccionDomiciliaria());
		$actualizar->bindValue('provinciaSufragio1', $personal1->getProvinciaSufragio());
		$actualizar->bindValue('numeroCelular1', $personal1->getNumeroCelular());
		$actualizar->bindValue('correoElectronico1', $personal1->getCorreoElectronico());
		$actualizar->bindValue('numDomicilio1', $personal1->getNumDomicilio());
		$actualizar->bindValue('porcentajeDiscapacidad1', $personal1->getPorcentajeDiscapacidad());
		$actualizar->bindValue('numCarnetDiscapacidad1', $personal1->getNumCarnetDiscapacidad());
		$actualizar->bindValue('tipoDiscapacidadid1', $personal1->getTipoDiscapacidadid());
		$actualizar->bindValue('tipoEnfermedadCatastroficaId1', $personal1->getTipoEnfermedadCatastroficaId());
		$actualizar->bindValue('fechaNacimiento1', $personal1->getFechaNacimiento());
		$actualizar->bindValue('paisNacionalidadId1', $personal1->getPaisNacionalidadId());
		$actualizar->bindValue('tipoPersonalAdministrativo1', $personal1->getTipoPersonalAdministrativo());
		$actualizar->bindValue('fechaIngresoIES1', $personal1->getFechaIngresoIES());
		$actualizar->bindValue('fechaSalidaIES1', $personal1->getFechaSalidaIES());
		$actualizar->bindValue('relacionLaboralIESId1', $personal1->getRelacionLaboralIESId());
		$actualizar->bindValue('ingresoConConcursoMeritos1', $personal1->getIngresoConConcursoMeritos());
		$actualizar->bindValue('nroHorasLaborablesSemana1', $personal1->getNroHorasLaborablesSemana());
		$actualizar->bindValue('salarioMensual1', $personal1->getSalarioMensual());
		$actualizar->bindValue('usuarioPersonal1', $personal1->getUsuarioPersonal());
		$actualizar->bindValue('passwordPersonal1', $personal1->getPasswordPersonal());
		$actualizar->bindValue('accesodepartamento_idaccesodepartamento1', $personal1->getAccesodepartamento());
		$actualizar->bindValue('personalOculto1', $personal1->getPersonalOculto());
		$actualizar->bindValue('personalAccion1', $personal1->getPersonalAccion());
		$actualizar->bindValue('personalfecha1', $personal1->getPersonalfecha());
		$actualizar->bindValue('personaluser1', $personal1->getPersonaluser());
		$actualizar->execute();
	}
	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM personal WHERE numeroIdentificacion=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
