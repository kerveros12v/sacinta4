<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Matriculas.php");

use Clasesphp\Matriculas;

class CrudMatriculas
{
	// constructor de la clase
	public function __construct()
	{
	}

	public  function mostrar()
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->query("SELECT * FROM matriculas");
		foreach ($select->fetchAll() as $m) {
			$mymatricula = new Matriculas();
			$mymatricula->setMatriculasId($m['matriculasId']);
			$mymatricula->setCodigoMatricula($m['codigoMatricula']);
			$mymatricula->setFechaMatricula($m['fechaMatricula']);
			$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
			$mymatricula->setCcarrerasId($m['ccarrerasId']);
			$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
			$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
			$mymatricula->setPparaleloId($m['pparaleloId']);
			$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
			$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
			$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
			$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
			$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
			$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
			$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
			$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->setMatriculasOculto($m['matriculasOculto']);
			$mymatricula->setMatriculasAccion($m['matriculasAccion']);
			$mymatricula->setMatriculasfecha($m['matriculasfecha']);
			$mymatricula->setMatriculasuser($m['matriculasuser']);

			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function mostrarlistafechasMatriculacion()
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->query("SELECT fechaMatricula FROM `matriculas` GROUP BY fechaMatricula");

		foreach ($select->fetchAll() as $matricula) {
			///
			$mymatricula = ($matricula['fechaMatricula']);

			////
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function listaMatriculas($cedulaEstudiante)
	{
		$db = Db::conectar();
		$listamatricula = array();
		$select = $db->prepare("SELECT * FROM matriculas WHERE enumeroIdentificacion=:id ");
		$select->bindValue('id', $cedulaEstudiante);
		$select->execute();
		foreach ($select->fetchAll() as $m) {
			$mymatricula = new Matriculas();
			$mymatricula->setMatriculasId($m['matriculasId']);
			$mymatricula->setCodigoMatricula($m['codigoMatricula']);
			$mymatricula->setFechaMatricula($m['fechaMatricula']);
			$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
			$mymatricula->setCcarrerasId($m['ccarrerasId']);
			$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
			$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
			$mymatricula->setPparaleloId($m['pparaleloId']);
			$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
			$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
			$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
			$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
			$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
			$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
			$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
			$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->setMatriculasOculto($m['matriculasOculto']);
			$mymatricula->setMatriculasAccion($m['matriculasAccion']);
			$mymatricula->setMatriculasfecha($m['matriculasfecha']);
			$mymatricula->setMatriculasuser($m['matriculasuser']);
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function listaFechasPorPeriodos($periodo2)
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->prepare("SELECT fechaMatricula FROM `matriculas` WHERE pperiodoacademicoId=:id GROUP BY fechaMatricula");
		$select->bindValue('id', $periodo2);
		$select->execute();
		foreach ($select->fetchAll() as $matricula) {
			$mymatricula = ($matricula['fechaMatricula']);
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function listaMatriculasporFecha($fechaMatricula1)
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->prepare("SELECT * FROM matriculas WHERE fechaMatricula=:id ");
		$select->bindValue('id', $fechaMatricula1);
		$select->execute();
		foreach ($select->fetchAll() as $m) {
			$mymatricula = new Matriculas();
			$mymatricula->setMatriculasId($m['matriculasId']);
			$mymatricula->setCodigoMatricula($m['codigoMatricula']);
			$mymatricula->setFechaMatricula($m['fechaMatricula']);
			$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
			$mymatricula->setCcarrerasId($m['ccarrerasId']);
			$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
			$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
			$mymatricula->setPparaleloId($m['pparaleloId']);
			$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
			$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
			$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
			$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
			$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
			$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
			$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
			$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->setMatriculasOculto($m['matriculasOculto']);
			$mymatricula->setMatriculasAccion($m['matriculasAccion']);
			$mymatricula->setMatriculasfecha($m['matriculasfecha']);
			$mymatricula->setMatriculasuser($m['matriculasuser']);
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function listaMatriculasporPeriodo($periodo1)
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->prepare("SELECT * FROM matriculas WHERE pperiodoacademicoId=:id ");
		$select->bindValue('id', $periodo1);
		$select->execute();
		foreach ($select->fetchAll() as $m) {
			$mymatricula = new Matriculas();
			$mymatricula->setMatriculasId($m['matriculasId']);
			$mymatricula->setCodigoMatricula($m['codigoMatricula']);
			$mymatricula->setFechaMatricula($m['fechaMatricula']);
			$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
			$mymatricula->setCcarrerasId($m['ccarrerasId']);
			$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
			$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
			$mymatricula->setPparaleloId($m['pparaleloId']);
			$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
			$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
			$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
			$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
			$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
			$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
			$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
			$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->setMatriculasOculto($m['matriculasOculto']);
			$mymatricula->setMatriculasAccion($m['matriculasAccion']);
			$mymatricula->setMatriculasfecha($m['matriculasfecha']);
			$mymatricula->setMatriculasuser($m['matriculasuser']);
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function listaMatriculasporCarreras($carrera1)
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->prepare("SELECT * FROM matriculas WHERE ccarrerasId=:id ");
		$select->bindValue('id', $carrera1);
		$select->execute();
		foreach ($select->fetchAll() as $m) {
			$mymatricula = new Matriculas();
			$mymatricula->setMatriculasId($m['matriculasId']);
			$mymatricula->setCodigoMatricula($m['codigoMatricula']);
			$mymatricula->setFechaMatricula($m['fechaMatricula']);
			$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
			$mymatricula->setCcarrerasId($m['ccarrerasId']);
			$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
			$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
			$mymatricula->setPparaleloId($m['pparaleloId']);
			$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
			$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
			$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
			$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
			$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
			$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
			$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
			$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->setMatriculasOculto($m['matriculasOculto']);
			$mymatricula->setMatriculasAccion($m['matriculasAccion']);
			$mymatricula->setMatriculasfecha($m['matriculasfecha']);
			$mymatricula->setMatriculasuser($m['matriculasuser']);
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function listaMatriculasporCursos($curso1)
	{
		$db = Db::conectar();
		$listamatricula = NULL;
		$select = $db->prepare("SELECT * FROM matriculas WHERE nnivelAcademicoQueCursaId=:id ");
		$select->bindValue('id', $curso1);
		$select->execute();
		foreach ($select->fetchAll() as $m) {
			$mymatricula = new Matriculas();
			$mymatricula->setMatriculasId($m['matriculasId']);
			$mymatricula->setCodigoMatricula($m['codigoMatricula']);
			$mymatricula->setFechaMatricula($m['fechaMatricula']);
			$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
			$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
			$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
			$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
			$mymatricula->setCcarrerasId($m['ccarrerasId']);
			$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
			$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
			$mymatricula->setPparaleloId($m['pparaleloId']);
			$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
			$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
			$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
			$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
			$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
			$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
			$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
			$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
			$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
			$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
			$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
			$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
			$mymatricula->setMatriculasOculto($m['matriculasOculto']);
			$mymatricula->setMatriculasAccion($m['matriculasAccion']);
			$mymatricula->setMatriculasfecha($m['matriculasfecha']);
			$mymatricula->setMatriculasuser($m['matriculasuser']);
			$listamatricula[] = $mymatricula;
		}
		return $listamatricula;
	}
	public  function existeMatricula($periodom, $cedestu)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM matriculas where pperiodoacademicoId =:id AND enumeroIdentificacion= :cedula");
		$select->bindValue('id', $periodom);
		$select->bindValue('cedula', $cedestu);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}
	public  function existe($id)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM matriculas where codigoMatricula=:id");
		$select->bindValue('id', $id);
		$select->execute();
		if ($select->fetch() == 0) return 0;
		return 1;
	}

	public  function obtenerMatricula($id, $periodo)
	{
		$db = Db::conectar();
		$select = $db->prepare("SELECT * FROM matriculas where enumeroIdentificacion=:id and pperiodoacademicoId=:periodo;");
		$select->bindValue('id', $id);
		$select->bindValue('periodo', $periodo);
		$select->execute();
		$m = $select->fetch();
		$mymatricula = new Matriculas();
		$mymatricula->setMatriculasId($m['matriculasId']);
		$mymatricula->setCodigoMatricula($m['codigoMatricula']);
		$mymatricula->setFechaMatricula($m['fechaMatricula']);
		$mymatricula->setMontoCreditoEducativo($m['montoCreditoEducativo']);
		$mymatricula->setMontoAyudaEconomica($m['montoAyudaEconomica']);
		$mymatricula->setFechainicioCarrera($m['fechainicioCarrera']);
		$mymatricula->setEnumeroIdentificacion($m['enumeroIdentificacion']);
		$mymatricula->setCcarrerasId($m['ccarrerasId']);
		$mymatricula->setJjornadaAcademicaId($m['jjornadaAcademicaId']);
		$mymatricula->setPperiodoacademicoId($m['pperiodoacademicoId']);
		$mymatricula->setPparaleloId($m['pparaleloId']);
		$mymatricula->setTtipoMatriculaId($m['ttipoMatriculaId']);
		$mymatricula->setNnivelAcademicoQueCursaId($m['nnivelAcademicoQueCursaId']);
		$mymatricula->setRrecibePensionDiferenciadaId($m['rrecibePensionDiferenciadaId']);
		$mymatricula->setEestudianteOcupacionId($m['eestudianteOcupacionId']);
		$mymatricula->setBbonoDesarrolloId($m['bbonoDesarrolloId']);
		$mymatricula->setIingresosestudianteId($m['iingresosestudianteId']);
		$mymatricula->setHhaRepetidoAlMenosUnaMateriaid($m['hhaRepetidoAlMenosUnaMateriaid']);
		$mymatricula->setHhaPerdidoLaGratuidadId($m['hhaPerdidoLaGratuidadId']);
		$mymatricula->setIngresoTotalHogar($m['ingresoTotalHogar']);
		$mymatricula->setFkNivelFormacionMadre($m['fkNivelFormacionMadre']);
		$mymatricula->setFkNivelFormacionPadre($m['fkNivelFormacionPadre']);
		$mymatricula->setCantidadMiembrosHogar($m['cantidadMiembrosHogar']);
		$mymatricula->setMatriculasOculto($m['matriculasOculto']);
		$mymatricula->setMatriculasAccion($m['matriculasAccion']);
		$mymatricula->setMatriculasfecha($m['matriculasfecha']);
		$mymatricula->setMatriculasuser($m['matriculasuser']);
		return $mymatricula;
	}
	public  function insertar($matricula)
	{
		// $matricula=new Matriculas();
		$db = Db::conectar();

		$insert = $db->prepare("INSERT INTO `matriculas`
			(`matriculasId`,
			`codigoMatricula`,
			`fechaMatricula`,
			`montoCreditoEducativo`,
			`montoAyudaEconomica`,
			`fechainicioCarrera`,
			`enumeroIdentificacion`,
			`ccarrerasId`,
			`jjornadaAcademicaId`,
			`pperiodoacademicoId`,
			`pparaleloId`,
			`ttipoMatriculaId`,
			`nnivelAcademicoQueCursaId`,
			`rrecibePensionDiferenciadaId`,
			`eestudianteOcupacionId`,
			`bbonoDesarrolloId`,
			`iingresosestudianteId`,
			`hhaRepetidoAlMenosUnaMateriaid`,
			`hhaPerdidoLaGratuidadId`,
			`ingresoTotalHogar`,
			`fkNivelFormacionMadre`,
			`fkNivelFormacionPadre`,
			`cantidadMiembrosHogar`,
			`matriculasOculto`,
			`matriculasAccion`,
			`matriculasfecha`,
			`matriculasuser`)
			VALUES
			(:matriculasId1,
			:codigoMatricula1,
			:fechaMatricula1,
			:montoCreditoEducativo1,
			:montoAyudaEconomica1,
			:fechainicioCarrera1,
			:enumeroIdentificacion1,
			:ccarrerasId1,
			:jjornadaAcademicaId1,
			:pperiodoacademicoId1,
			:pparaleloId1,
			:ttipoMatriculaId1,
			:nnivelAcademicoQueCursaId1,
			:rrecibePensionDiferenciadaId1,
			:eestudianteOcupacionId1,
			:bbonoDesarrolloId1,
			:iingresosestudianteId1,
			:hhaRepetidoAlMenosUnaMateriaid1,
			:hhaPerdidoLaGratuidadId1,
			:ingresoTotalHogar1,
			:fkNivelFormacionMadre1,
			:fkNivelFormacionPadre1,
			:cantidadMiembrosHogar1,
			:matriculasOculto1,
			:matriculasAccion1,
			:matriculasfecha1,
			:matriculasuser1);
			");

		$insert->bindValue('matriculasId1', $matricula->getMatriculasId());
		$insert->bindValue('codigoMatricula1', $matricula->getCodigoMatricula());
		$insert->bindValue('fechaMatricula1', $matricula->getFechaMatricula());
		$insert->bindValue('montoCreditoEducativo1', $matricula->getMontoCreditoEducativo());
		$insert->bindValue('montoAyudaEconomica1', $matricula->getMontoAyudaEconomica());
		$insert->bindValue('fechainicioCarrera1', $matricula->getFechainicioCarrera());
		$insert->bindValue('enumeroIdentificacion1', $matricula->getEnumeroIdentificacion());
		$insert->bindValue('ccarrerasId1', $matricula->getCcarrerasId());
		$insert->bindValue('jjornadaAcademicaId1', $matricula->getJjornadaAcademicaId());
		$insert->bindValue('pperiodoacademicoId1', $matricula->getPperiodoacademicoId());
		$insert->bindValue('pparaleloId1', $matricula->getPparaleloId());
		$insert->bindValue('ttipoMatriculaId1', $matricula->getTtipoMatriculaId());
		$insert->bindValue('nnivelAcademicoQueCursaId1', $matricula->getNnivelAcademicoQueCursaId());
		$insert->bindValue('rrecibePensionDiferenciadaId1', $matricula->getRrecibePensionDiferenciadaId());
		$insert->bindValue('eestudianteOcupacionId1', $matricula->getEestudianteOcupacionId());
		$insert->bindValue('bbonoDesarrolloId1', $matricula->getBbonoDesarrolloId());
		$insert->bindValue('iingresosestudianteId1', $matricula->getIingresosestudianteId());
		$insert->bindValue('hhaRepetidoAlMenosUnaMateriaid1', $matricula->getHhaRepetidoAlMenosUnaMateriaid());
		$insert->bindValue('hhaPerdidoLaGratuidadId1', $matricula->getHhaPerdidoLaGratuidadId());
		$insert->bindValue('ingresoTotalHogar1', $matricula->getIngresoTotalHogar());
		$insert->bindValue('fkNivelFormacionMadre1', $matricula->getFkNivelFormacionMadre());
		$insert->bindValue('fkNivelFormacionPadre1', $matricula->getFkNivelFormacionPadre());
		$insert->bindValue('cantidadMiembrosHogar1', $matricula->getCantidadMiembrosHogar());
		$insert->bindValue('matriculasOculto1', $matricula->getMatriculasOculto());
		$insert->bindValue('matriculasAccion1', $matricula->getMatriculasAccion());
		$insert->bindValue('matriculasfecha1', $matricula->getMatriculasfecha());
		$insert->bindValue('matriculasuser1', $matricula->getMatriculasuser());
		$insert->execute();
	}

	public  function actualizar($matricula)
	{
		$db = Db::conectar();
		$actualizar = $db->prepare("UPDATE `matriculas`
			SET
			`matriculasId` = :matriculasId1,
			`codigoMatricula` = :codigoMatricula1,
			`fechaMatricula` = :fechaMatricula1,
			`montoCreditoEducativo` = :montoCreditoEducativo1,
			`montoAyudaEconomica` = :montoAyudaEconomica1,
			`fechainicioCarrera` = :fechainicioCarrera1,
			`enumeroIdentificacion` = :enumeroIdentificacion1,
			`ccarrerasId` = :ccarrerasId1,
			`jjornadaAcademicaId` = :jjornadaAcademicaId1,
			`pperiodoacademicoId` = :pperiodoacademicoId1,
			`pparaleloId` = :pparaleloId1,
			`ttipoMatriculaId` = :ttipoMatriculaId1,
			`nnivelAcademicoQueCursaId` = :nnivelAcademicoQueCursaId1,
			`rrecibePensionDiferenciadaId` = :rrecibePensionDiferenciadaId1,
			`eestudianteOcupacionId` = :eestudianteOcupacionId1,
			`bbonoDesarrolloId` = :bbonoDesarrolloId1,
			`iingresosestudianteId` = :iingresosestudianteId1,
			`hhaRepetidoAlMenosUnaMateriaid` = :hhaRepetidoAlMenosUnaMateriaid1,
			`hhaPerdidoLaGratuidadId` = :hhaPerdidoLaGratuidadId1,
			`ingresoTotalHogar` = :ingresoTotalHogar1,
			`fkNivelFormacionMadre` = :fkNivelFormacionMadre1,
			`fkNivelFormacionPadre` = :fkNivelFormacionPadre1,
			`cantidadMiembrosHogar` = :cantidadMiembrosHogar1,
			`matriculasOculto` = :matriculasOculto1,
			`matriculasAccion` = :matriculasAccion1,
			`matriculasfecha` = :matriculasfecha1,
			`matriculasuser` = :matriculasuser1
			WHERE `matriculasId` = :matriculasId1;
		");
		$actualizar->bindValue('matriculasId1', $matricula->getMatriculasId());
		$actualizar->bindValue('codigoMatricula1', $matricula->getCodigoMatricula());
		$actualizar->bindValue('fechaMatricula1', $matricula->getFechaMatricula());
		$actualizar->bindValue('montoCreditoEducativo1', $matricula->getMontoCreditoEducativo());
		$actualizar->bindValue('montoAyudaEconomica1', $matricula->getMontoAyudaEconomica());
		$actualizar->bindValue('fechainicioCarrera1', $matricula->getFechainicioCarrera());
		$actualizar->bindValue('enumeroIdentificacion1', $matricula->getEnumeroIdentificacion());
		$actualizar->bindValue('ccarrerasId1', $matricula->getCcarrerasId());
		$actualizar->bindValue('jjornadaAcademicaId1', $matricula->getJjornadaAcademicaId());
		$actualizar->bindValue('pperiodoacademicoId1', $matricula->getPperiodoacademicoId());
		$actualizar->bindValue('pparaleloId1', $matricula->getPparaleloId());
		$actualizar->bindValue('ttipoMatriculaId1', $matricula->getTtipoMatriculaId());
		$actualizar->bindValue('nnivelAcademicoQueCursaId1', $matricula->getNnivelAcademicoQueCursaId());
		$actualizar->bindValue('rrecibePensionDiferenciadaId1', $matricula->getRrecibePensionDiferenciadaId());
		$actualizar->bindValue('eestudianteOcupacionId1', $matricula->getEestudianteOcupacionId());
		$actualizar->bindValue('bbonoDesarrolloId1', $matricula->getBbonoDesarrolloId());
		$actualizar->bindValue('iingresosestudianteId1', $matricula->getIingresosestudianteId());
		$actualizar->bindValue('hhaRepetidoAlMenosUnaMateriaid1', $matricula->getHhaRepetidoAlMenosUnaMateriaid());
		$actualizar->bindValue('hhaPerdidoLaGratuidadId1', $matricula->getHhaPerdidoLaGratuidadId());
		$actualizar->bindValue('ingresoTotalHogar1', $matricula->getIngresoTotalHogar());
		$actualizar->bindValue('fkNivelFormacionMadre1', $matricula->getFkNivelFormacionMadre());
		$actualizar->bindValue('fkNivelFormacionPadre1', $matricula->getFkNivelFormacionPadre());
		$actualizar->bindValue('cantidadMiembrosHogar1', $matricula->getCantidadMiembrosHogar());
		$actualizar->bindValue('matriculasOculto1', $matricula->getMatriculasOculto());
		$actualizar->bindValue('matriculasAccion1', $matricula->getMatriculasAccion());
		$actualizar->bindValue('matriculasfecha1', $matricula->getMatriculasfecha());
		$actualizar->bindValue('matriculasuser1', $matricula->getMatriculasuser());
		$actualizar->execute();
	}

	public  function eliminar($id)
	{
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM matriculas WHERE matriculasId=:id');
		$eliminar->bindValue('id', $id);
		$eliminar->execute();
	}
}
