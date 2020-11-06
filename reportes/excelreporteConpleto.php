<?php
require '../vendor/autoload.php';
require_once('../Crud/CrudEstudiante.php');
require_once("../clasesphp/Estudiantes.php");

require_once("../Crud/CrudResidenciaestudiantes.php");
require_once("../clasesphp/Residenciaestudiantes.php");

require_once("../Crud/CrudContactosemergencia.php");
require_once("../clasesphp/ContactosEmergencia.php");

require_once("../clasesphp/EstudianteTrabajo.php");
require_once("../Crud/CrudEstudianteTrabajo.php");

require_once("../Crud/CrudMatriculacion.php");
require_once("../clasesphp/Matriculas.php");

require_once("../clasesphp/Bachilleratos.php");
require_once("../Crud/CrudBachillerato.php");

require_once("../clasesphp/Discapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../Crud/CrudColegios.php");
require_once("../clasesphp/Colegio.php");

require_once("../Crud/CrudPeriodoacademico.php");
require_once("../clasesphp/Periodoacademico.php");
require_once("../Crud/CrudCarreras.php");
require_once("../clasesphp/Carreras.php");
require_once("../Crud/CrudPueblonacionalidad.php");
require_once("../Crud/CrudTipoDocumento.php");
require_once("../Crud/CrudGeneros.php");
require_once("../Crud/CrudSexo.php");
require_once("../Crud/CrudEstadoCivil.php");
require_once("../Crud/CrudEtnia.php");
require_once("../Crud/CrudTipoSangre.php");
require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("../Crud/CrudDiscapacidad.php");

/*require_once("../clasesphp/Vinculacionsociedad.php");
require_once("../Crud/CrudVinculacion.php");



*/

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Clasesphp\Bachilleratos;
use Clasesphp\Carreras;
use Clasesphp\Colegios;
use Clasesphp\Discapacidadesestudiantes;
use Clasesphp\Estudiantes;
use Clasesphp\EstudianteTrabajo;
use Clasesphp\Matriculas;
use Clasesphp\Periodoacademico;
use Clasesphp\Residenciaestudiantes;
use Crud\CrudCarreras;
use Crud\CrudColegios;
use Crud\CrudDiscapacidadesestudiantes;
use Crud\CrudEStadoCivil;
use Crud\CrudEstudiantes;
use Crud\CrudEstudianteTrabajo;
use Crud\CrudEtnia;
use Crud\CrudGeneros;
use Crud\CrudMatriculas;
use Crud\CrudPeriodoacademico;
use Crud\CrudPuebloNacionalidad;
use Crud\CrudResidenciaestudiantes;
use Crud\CrudSexo;
use Crud\CrudTipoDiscapacidad;
use Crud\CrudTipodocumento;
use Crud\CrudTipoSangre;

session_start();
try {

  $documento = new Spreadsheet();
  $documento
    ->getProperties()
    ->setCreator('INSTITUTO TECNOLÓGICO SUPERIOR NELSON TORRES')
    ->setLastModifiedBy($_SESSION['tipouser']) // última vez modificado por
    ->setTitle('Matriz de Matriculacion')
    ->setSubject('Consolodado')
    ->setDescription('Estudiantes Matriculados')
    ->setKeywords('office 2007 openxml php')
    ->setCategory('Reporte General');
  ///////////////////////////////////////////////////

  //seccion de consultas

  ///////////////////////////////////////////////////

  $crudestudiante = new CrudEstudiantes();
  $listaestudiantes = $crudestudiante->mostrar();
  $estudiante = new Estudiantes();
  $residencia = new Residenciaestudiantes();
  $discapacidad = new Discapacidadesestudiantes();
  $bachiller = new Bachilleratos();
  $colegio1 = new Colegios();
  $matricula = new Matriculas();
  $crudperiodo = new CrudPeriodoacademico();
  $periodo = new Periodoacademico();
  $crudcarrera = new CrudCarreras();
  $carrera = new Carreras();
  $trabajo = new EstudianteTrabajo();
  $crudPeriodoacademico = new CrudPeriodoacademico();
  $crudMatricula = new CrudMatriculas();
  $crudEstudiantes = new CrudEstudiantes();
  $crudResidenciaestudiantes = new CrudResidenciaestudiantes();
  $crudEstudianteTrabajo = new CrudEstudianteTrabajo();
  $crudDiscapacidadesestudiantes = new CrudDiscapacidadesestudiantes();
  $crudColegios = new CrudColegios();
  $crudpueblonacionalidad = new CrudPuebloNacionalidad();
  $crudtipoducumento = new CrudTipodocumento();
  $crudgenero = new CrudGeneros();
  $crudsexo = new CrudSexo();
  $crudestadocivil = new CrudEStadoCivil();
  $crudetnia = new CrudEtnia();
  $crudtiposangre = new CrudTipoSangre();
  $crudtipodiscapacidad = new CrudTipoDiscapacidad();
  $periodo = $crudPeriodoacademico->obtenerPeriodoAcademicoActual();

  $listamatricula = $crudMatricula->listaMatriculasporPeriodo($periodo->getPeriodoacademicoId());
  $matric = new Matriculas();


  $hoja = $documento->getActiveSheet();

  $hoja->setCellValue('A1', 'tipoDocumentoId');
  $hoja->setCellValue('B1', 'numeroIdentificacion');
  $hoja->setCellValue('C1', 'primerApellido');
  $hoja->setCellValue('D1', 'segundoApellido');
  $hoja->setCellValue('E1', 'primerNombre');
  $hoja->setCellValue('F1', 'segundoNombre');
  $hoja->setCellValue('G1', 'sexoId');
  $hoja->setCellValue('H1', 'generoId');
  $hoja->setCellValue('I1', 'estadocivilId');
  $hoja->setCellValue('J1', 'etniaId');
  $hoja->setCellValue('K1', 'pueblonacionalidadId');
  $hoja->setCellValue('L1', 'tipoSangre');
  $hoja->setCellValue('M1', 'discapacidad');
  $hoja->setCellValue('N1', 'porcentajeDiscapacidad');
  $hoja->setCellValue('O1', 'numCarnetConadis');
  $hoja->setCellValue('P1', 'tipoDiscapacidad');
  $hoja->setCellValue('Q1', 'fechaNacimiento');
  $hoja->setCellValue('R1', 'paisNacionalidadId');
  $hoja->setCellValue('S1', 'provinciaNacimientoId');
  $hoja->setCellValue('T1', 'cantonNacimientoId');
  $hoja->setCellValue('U1', 'paisResidenciaId');
  $hoja->setCellValue('V1', 'provinciaResidenciaId');
  $hoja->setCellValue('W1', 'cantonResidenciaId');
  $hoja->setCellValue('X1', 'tipoColegioId');
  $hoja->setCellValue('Y1', 'modalidadCarrera');
  $hoja->setCellValue('Z1', 'jornadaCarrera');
  $hoja->setCellValue('AA1', 'fechaInicioCarrera');
  $hoja->setCellValue('AB1', 'fechaMatrícula');
  $hoja->setCellValue('AC1', 'tipoMatriculaId');
  $hoja->setCellValue('AD1', 'nivelAcademicoQueCursa');
  $hoja->setCellValue('AE1', 'duracionPeriodoAcademico');
  $hoja->setCellValue('AF1', 'haRepetidoAlMenosUnaMateria');
  $hoja->setCellValue('AG1', 'paraleloId');
  $hoja->setCellValue('AH1', 'haPerdidoLaGratuidad');
  $hoja->setCellValue('AI1', 'recibePensionDiferenciada');
  $hoja->setCellValue('AJ1', 'estudianteocupacionId');
  $hoja->setCellValue('AK1', 'ingresosestudianteId');
  $hoja->setCellValue('AL1', 'bonodesarrolloId');
  $hoja->setCellValue('AM1', 'haRealizadoPracticasPreprofesionales');
  $hoja->setCellValue('AN1', 'nroHorasPracticasPreprofesionalesPorPeriodo');
  $hoja->setCellValue('AO1', 'entornoInstitucionalPracticasProfesionales');
  $hoja->setCellValue('AP1', 'sectorEconomicoPracticaProfesional');
  $hoja->setCellValue('AQ1', 'tipoBecaId');
  $hoja->setCellValue('AR1', 'primeraRazonBecaId');
  $hoja->setCellValue('AS1', 'segundaRazonBecaId');
  $hoja->setCellValue('AT1', 'terceraRazonBecaId');
  $hoja->setCellValue('AU1', 'cuartaRazonBecaId');
  $hoja->setCellValue('AV1', 'quintaRazonBecaId');
  $hoja->setCellValue('AW1', 'sextaRazonBecaId');
  $hoja->setCellValue('AX1', 'montoBeca');
  $hoja->setCellValue('AY1', 'porcientoBecaCoberturaArancel');
  $hoja->setCellValue('AZ1', 'porcientoBecaCoberturaManuntencion');
  $hoja->setCellValue('BA1', 'financiamientoBeca');
  $hoja->setCellValue('BB1', 'montoAyudaEconomica');
  $hoja->setCellValue('BC1', 'montoCreditoEducativo');
  $hoja->setCellValue('BD1', 'participaEnProyectoVinculacionSociedad');
  $hoja->setCellValue('BE1', 'tipoAlcanceProyectoVinculacionId');
  $hoja->setCellValue('BF1', 'correoElectronico');
  $hoja->setCellValue('BG1', 'numeroCelular');
  $hoja->setCellValue('BH1', 'nivelFormacionPadre');
  $hoja->setCellValue('BI1', 'nivelFormacionMadre');
  $hoja->setCellValue('BJ1', 'ingresoTotalHogar');
  $hoja->setCellValue('BK1', 'cantidadMiembrosHogar');

  $fila = 2;

  foreach ($listamatricula as $matric) {
    $estudiante = $crudEstudiantes->obtenerEstudiantes($matric->getEnumeroIdentificacion());
    $residencia = $crudResidenciaestudiantes->obtenerresidenciaestudiantes($estudiante->getNumeroIdentificacion(), $periodo->getPeriodoacademicoId());
    $discapacidad = $crudDiscapacidadesestudiantes->obtenerdiscapacidadesestudiantes($estudiante->getNumeroIdentificacion(), $periodo->getPeriodoacademicoId());
    $colegio1 = $crudColegios->obtenerColegio($bachiller->getColegiosidColegios());
    $periodo = $crudPeriodoacademico->obtenerPeriodoAcademicoActual();
    $matricula = $crudMatricula->obtenerMatricula($estudiante->getNumeroIdentificacion(), $periodo->getPeriodoacademicoId());
    $carrera = $crudcarrera->obtenerCarrerasporId($matricula->getCcarrerasId());
    $trabajo = $crudEstudianteTrabajo->obtenerEstudianteTrabajo($estudiante->getNumeroIdentificacion(), $periodo->getPeriodoacademicoId());

    ///Agragacion de ceros en los codigos de pais provincia canton
    $pueblonacionalidad = $crudpueblonacionalidad->obtenerpuebloNacionalidad($estudiante->getFkPuebloNacionalidadId());
    //$objPHPExcel->setActiveSheetIndex(0);
    $hoja->setCellValue('A' . $fila, $crudtipoducumento->obtenerCodigo($estudiante->getFktipodocumentoId())); //'tipoDocumentoId'
    $hoja->setCellValue('B' . $fila, $estudiante->getNumeroIdentificacion()); //'numeroIdentificacion'
    $hoja->setCellValue('C' . $fila, utf8_encode($estudiante->getPrimerApellido())); // 'primerApellido'
    $hoja->setCellValue('D' . $fila, utf8_encode($estudiante->getSegundoApellido())); // 'segundoApellido'
    $hoja->setCellValue('E' . $fila, utf8_encode($estudiante->getPrimerNombre())); // 'primerNombre'
    $hoja->setCellValue('F' . $fila, utf8_encode($estudiante->getSegundoNombre())); //'segundoNombre'
    $hoja->setCellValue('G' . $fila, $crudsexo->obtenerCodigo($estudiante->getFksexoId())); // 'sexoId'
    $hoja->setCellValue('H' . $fila, $crudgenero->obtenerCodigo($estudiante->getFkGeneroId())); // 'generoId')
    $hoja->setCellValue('I' . $fila, $crudestadocivil->obtenerCodigo($estudiante->getFkEstadoCivilId())); // 'estadocivilId')
    $hoja->setCellValue('J' . $fila, $crudetnia->obtenerCodigo($pueblonacionalidad->getPnetnia())); // 'etniaId')
    $hoja->setCellValue('K' . $fila, $pueblonacionalidad->getPueblonacionalidadescodigo()); // 'pueblonacionalidadId')
    $hoja->setCellValue('L' . $fila, $crudtiposangre->obtenerCodigo($estudiante->getFkTipoSangreId())); // 'tipoSangre')
    //$hoja->setCellValue('M'.$fila,$discapacidad->getdisca());// 'discapacidad')
    $hoja->setCellValue('N' . $fila, $discapacidad->getPorcentajeDiscapacidad()); // 'porcentajeDiscapacidad')
    $hoja->setCellValue('O' . $fila, $discapacidad->getCarnetConadisId()); // 'numCarnetConadis')
    $hoja->setCellValue('P' . $fila, $discapacidad->getFkTipoDiscapacidadTipoDiscapacidadId()); // 'tipoDiscapacidad')
    $hoja->setCellValue('Q' . $fila, $estudiante->getFechaNacimiento()); // 'fechaNacimiento')
    //$hoja->setCellValue('R'.$fila,$paisnacionalidad);// 'paisNacionalidadId')
    //$hoja->setCellValue('S'.$fila,$provincianacionalidad);// 'provinciaNacimientoId')
    // $hoja->setCellValue('T' . $fila, $cantonnacionalidad); // 'cantonNacimientoId')
    //$hoja->setCellValue('U'.$fila,$paisresidencia);// 'paisResidenciaId')
    //$hoja->setCellValue('V'.$fila,$provinciaresidencia);// 'provinciaResidenciaId')
    //$hoja->setCellValue('W'.$fila,$cantonresidencia);// 'cantonResidenciaId')
    $hoja->setCellValue('X' . $fila, $colegio1->getTipoColegioTipoColegioId()); // 'tipoColegioId')
    $hoja->setCellValue('Y' . $fila, $carrera->getFkmodalidadCarreraId()); // 'modalidadCarrera')
    $hoja->setCellValue('Z' . $fila, $matricula->getJjornadaAcademicaId()); // 'jornadaCarrera')
    $hoja->setCellValue('AA' . $fila, $matricula->getFechainicioCarrera()); // 'fechaInicioCarrera')
    $hoja->setCellValue('AB' . $fila, $matricula->getFechaMatricula()); // 'fechaMatrícula')
    $hoja->setCellValue('AC' . $fila, $matricula->getTtipoMatriculaId()); // 'tipoMatriculaId')
    $hoja->setCellValue('AD' . $fila, $matricula->getNnivelAcademicoQueCursaId()); // 'nivelAcademicoQueCursa')
    //$hoja->setCellValue('AE'.$fila,$periodo->());// 'duracionPeriodoAcademico')
    $hoja->setCellValue('AF' . $fila, $matricula->getHhaRepetidoAlMenosUnaMateriaid()); // 'haRepetidoAlMenosUnaMateria')
    $hoja->setCellValue('AG' . $fila, $matricula->getPparaleloId()); // 'paraleloId')
    $hoja->setCellValue('AH' . $fila, $matricula->getHhaPerdidoLaGratuidadId()); // 'haPerdidoLaGratuidad')
    $hoja->setCellValue('AI' . $fila, $matricula->getRrecibePensionDiferenciadaId()); // 'recibePensionDiferenciada')
    $hoja->setCellValue('AJ' . $fila, $matricula->getEestudianteOcupacionId()); // 'estudianteocupacionId')
    $hoja->setCellValue('AK' . $fila, $matricula->getIingresosestudianteId()); // 'ingresosestudianteId')
    $hoja->setCellValue('AL' . $fila, $matricula->getBbonoDesarrolloId()); // 'bonodesarrolloId')
    $hoja->setCellValue('AM' . $fila, 'NA'); // 'haRealizadoPracticasPreprofesionales')
    $hoja->setCellValue('AN' . $fila, 'NA'); // 'nroHorasPracticasPreprofesionalesPorPeriodo')
    $hoja->setCellValue('AO' . $fila, 'NA'); // 'entornoInstitucionalPracticasProfesionales')
    $hoja->setCellValue('AP' . $fila, 'NA'); // 'sectorEconomicoPracticaProfesional')
    $hoja->setCellValue('AQ' . $fila, 'NA'); // 'tipoBecaId')
    $hoja->setCellValue('AR' . $fila, 'NA'); // 'primeraRazonBecaId')
    $hoja->setCellValue('AS' . $fila, 'NA'); // 'segundaRazonBecaId')
    $hoja->setCellValue('AT' . $fila, 'NA'); // 'terceraRazonBecaId')
    $hoja->setCellValue('AU' . $fila, 'NA'); // 'cuartaRazonBecaId')
    $hoja->setCellValue('AV' . $fila, 'NA'); // 'quintaRazonBecaId')
    $hoja->setCellValue('AW' . $fila, 'NA'); // 'sextaRazonBecaId')
    $hoja->setCellValue('AX' . $fila, 'NA'); // 'montoBeca')
    $hoja->setCellValue('AY' . $fila, 'NA'); //'porcientoBecaCoberturaArancel')
    $hoja->setCellValue('AZ' . $fila, 'NA'); //'porcientoBecaCoberturaManuntencion')
    $hoja->setCellValue('BA' . $fila, 'NA'); //'financiamientoBeca'
    $hoja->setCellValue('BB' . $fila, $matricula->getMontoAyudaEconomica()); //'montoAyudaEconomica'
    $hoja->setCellValue('BC' . $fila, $matricula->getMontoCreditoEducativo()); //'montoCreditoEducativo'
    $hoja->setCellValue('BD' . $fila, 'NA'); //'participaEnProyectoVinculacionSociedad'
    $hoja->setCellValue('BE' . $fila, 'NA'); //'tipoAlcanceProyectoVinculacionId'
    $hoja->setCellValue('BF' . $fila, $estudiante->getCorreoElectronico()); //'correoElectronico'
    $hoja->setCellValue('BG' . $fila, $estudiante->getNumeroCelular()); //'numeroCelular'
    $hoja->setCellValue('BH' . $fila, $matricula->getFkNivelFormacionPadre()); //'nivelFormacionPadre'
    $hoja->setCellValue('BI' . $fila, $matricula->getFkNivelFormacionMadre()); //'nivelFormacionMadre'
    $hoja->setCellValue('BJ' . $fila, $matricula->getIngresoTotalHogar()); //'ingresoTotalHogar'
    $hoja->setCellValue('BK' . $fila, $matricula->getCantidadMiembrosHogar());/* 'cantidadMiembrosHogar'

*/
    $fila = $fila + 1;
  }
  // Redirect output to a client’s web browser (Excel2007)
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="Consolidado.xlsx"');
  header('Cache-Control: max-age=0');
  // If you're serving to IE 9, then the following may be needed
  header('Cache-Control: max-age=1');

  // If you're serving to IE over SSL, then the following may be needed
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
  header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
  header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
  header('Pragma: public'); // HTTP/1.0

  $writer = IOFactory::createWriter($documento, 'Xlsx');

  # Le pasamos la ruta de guardado
  $writer->save('php://output');
  exit;
} catch (\Throwable $e) {
  echo $e;
}
