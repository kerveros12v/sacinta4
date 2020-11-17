<?php
require_once("PlantillaReportes.php");
require_once("../Crud/CrudEstudiante.php");
require_once("../Crud/CrudMatriculacion.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("../Crud/CrudTipoDocumento.php");
require_once("../Crud/CrudSexo.php");
require_once("../Crud/CrudGeneros.php");
require_once("../Crud/CrudResidenciaestudiantes.php");
require_once("../Crud/CrudParroquia.php");
require_once("../Crud/CrudContactosemergencia.php");
require_once("../Crud/CrudParentesco.php");
require_once("../Crud/CrudPueblonacionalidad.php");
require_once("../Crud/CrudEtnia.php");
require_once("../Crud/CrudIdiomas.php");
require_once("../Crud/CrudTipoSangre.php");
require_once("../Crud/CrudCanton.php");
require_once("../Crud/CrudPaises.php");
require_once("../Crud/CrudProvincia.php");
require_once("../Crud/CrudCategoriaMigratoria.php");
require_once("../Crud/CrudEstadoCivil.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("../Crud/CrudDiscapacidad.php");
require_once("../Crud/CrudBachillerato.php");
require_once("../Crud/CrudTipoBachillerato.php");
require_once("../Crud/CrudTipoColegio.php");
require_once("../Crud/CrudColegios.php");
require_once("../Crud/CrudTipoMatricula.php");
require_once("../Crud/Crud​Estudiantestitulotercernivel.php");
require_once("../Crud/CrudTituloTercerNivel.php");
require_once("../Crud/CrudCicloPeriodo.php");
require_once("../Crud/CrudNivelacademico.php");
require_once("../Crud/CrudParalelo.php");
require_once("../Crud/CrudCarreras.php");
require_once("../Crud/CrudTipoCarreras.php");
require_once("../Crud/CrudModalidadCarrera.php");
require_once("../Crud/CrudJornadasAcademicas.php");


require_once("../Crud/CrudHarepetidoalmenosunamateria.php");

require_once("../Crud/CrudHaperdidoLaGratuidad.php");
/*require_once("../Crud/CrudPracticasEstudiantes.php");
require_once("../Crud/CrudVinculacion.php");
*/
require_once("../Crud/CrudEstudianteOcupacion.php");
require_once("../Crud/CrudIngresosestudiante.php");
require_once("../Crud/CrudEstudianteTrabajo.php");
require_once("../Crud/CrudBonodesarrollo.php");
require_once("../Crud/CrudSectorEconomico.php");
require_once("../Crud/Crudnivelformacion.php");


use Clasesphp\Bachilleratos;
use Clasesphp\Cantones;
use Clasesphp\Colegios;
use Clasesphp\Contactosemergencia;
use Clasesphp\Estudiantes;
use Clasesphp\Matriculas;
use Clasesphp\PueblosNacionalidad;
use Clasesphp\Residenciaestudiantes;
use Clasesphp\Tiposbacillerato;
use Crud\CrudBachillerato;
use Crud\CrudBonodesarrollo;
use Crud\CrudCantones;
use Crud\CrudCarreras;
use Crud\CrudCategoriasMigratoria;
use Crud\CrudCicloPeriodo;
use Crud\CrudColegios;
use Crud\CrudContactosemergencia;
use Crud\CrudDiscapacidad;
use Crud\CrudDiscapacidadesestudiantes;
use Crud\CrudEStadoCivil;
use Crud\CrudEstudianteOcupacion;
use Crud\CrudEstudiantes;
use Crud\CrudEstudiantestitulotercernivel;
use Crud\CrudEstudianteTrabajo;
use Crud\CrudEtnia;
use Crud\CrudGeneros;
use Crud\CrudHaperdidoLaGratuidad;
use Crud\CrudHarepetidoalmenosunamateria;
use Crud\CrudIdiomas;
use Crud\CrudIngresosestudiante;
use Crud\CrudJornadasAcademicas;
use Crud\CrudMatriculas;
use Crud\CrudModalidadcarreras;
use Crud\CrudNivelacademico;
use Crud\CrudNivelformacion;
use Crud\CrudPaises;
use Crud\CrudParalelo;
use Crud\CrudParentescos;
use Crud\CrudParroquia;
use Crud\CrudPeriodoacademico;
use Crud\CrudProvincias;
use Crud\CrudPuebloNacionalidad;
use Crud\CrudResidenciaestudiantes;
use Crud\CrudSectorEconomico;
use Crud\CrudSexo;
use Crud\CrudTipoBachillerato;
use Crud\CrudTipoCarreras;
use Crud\CrudTipocolegio;
use Crud\CrudTipoDiscapacidad;
use Crud\CrudTipodocumento;
use Crud\CrudTipomatricula;
use Crud\CrudTipoSangre;
use Crud\CrudTituloTercerNivel;
use Reporte\PlantillaReportes;

session_start();
function caluloEdadr($f1, $f2)
{

  $edad1 = abs(strtotime($f2) - strtotime($f1));
  $years = floor($edad1 / (365 * 60 * 60 * 24));
  $months = floor(($edad1 - ($years * 365 * 60 * 60 * 24)) / (30 * 60 * 60 * 24));
  $day = floor(($edad1 - ($years * 365 * 60 * 60 * 24) - ($months * 30 * 60 * 60 * 24)) / (60 * 60 * 24));
  return $years . " AÑOS ";
}
try {
  // code...

  //declaracion variables del crud
  $crudEst = new CrudEstudiantes();
  $crudmatricula = new CrudMatriculas();
  $crudperiodoaca = new CrudPeriodoacademico();
  $crudtipoDocumento = new CrudTipodocumento();
  $crudsexo = new CrudSexo();
  $crudgenero = new CrudGeneros();
  $crudResidencia = new CrudResidenciaestudiantes();
  $crudparroquia = new CrudParroquia();
  $crudContactoEmergencia = new CrudContactosemergencia();
  $crudparentesco = new CrudParentescos();
  $crudpueblona = new CrudPuebloNacionalidad();
  $crudEtnia = new CrudEtnia();
  $crudidioma = new CrudIdiomas();
  $crudtipoSangre = new CrudTipoSangre();
  $crudpais = new CrudPaises();
  $crudprovincia = new CrudProvincias();
  $crudcanton = new CrudCantones();
  $crudMigratoria = new CrudCategoriasMigratoria();
  $crudEstadoCivil = new CrudEStadoCivil();
  $crudDiscapacidadEstudiante = new CrudDiscapacidadesestudiantes();
  $crudTipoDiscapacidad = new CrudTipoDiscapacidad();
  $cruddiscapacidad = new CrudDiscapacidad();
  $crudBaclillerato = new CrudBachillerato();
  $crudTipoBachillerato = new CrudTipoBachillerato();
  $crudtipocolegio = new CrudTipocolegio();
  $crudcolegio = new CrudColegios();
  $crudtituloTercerNivelEstudiante = new CrudEstudiantestitulotercernivel();
  $crudtipoMatricula = new CrudTipomatricula();
  $crudtitulotercernivel = new CrudTituloTercerNivel();
  $crudcicloperiodo = new CrudCicloPeriodo();
  $crudnivelacademico = new CrudNivelacademico();
  $crudparalelo1 = new CrudParalelo();
  $crudcarreras = new CrudCarreras();
  $crudtipocarrera1 = new CrudTipoCarreras();
  $crudmodalidad = new CrudModalidadcarreras();
  $crudjornadaacademic = new CrudJornadasAcademicas();
  $crudgratuidad = new CrudHaperdidoLaGratuidad();
  $crudaperdidoalmenosunamateria = new CrudHarepetidoalmenosunamateria();
  /*
  $crudpracticas=new CrudPracticasEstudiantes();
  $crudvinculacion=new CrudVinculacion();
  */
  $crudocupacion = new CrudEstudianteOcupacion();
  $crudtrabajo = new CrudEstudianteTrabajo();
  $crudingresoestudiante = new CrudIngresosestudiante();
  $crudbonodesarrollo = new CrudBonodesarrollo();
  $crudsectoreconomico = new CrudSectorEconomico();
  $crudnivelformacion = new CrudNivelformacion();
  //declaracion variables base
  $est = new Estudiantes();
  $matricula = new Matriculas();
  $resi = new Residenciaestudiantes();
  $contacemer = new Contactosemergencia();
  $pueblonacio = new PueblosNacionalidad();
  $canton1 = new Cantones();
  $bachillerato = new Bachilleratos();
  $tipoBachillerato = new Tiposbacillerato();
  $colegio = new Colegios();
  $est = $crudEst->obtenerEstudiantes($_SESSION['campbuscarest']);
  $periodoacademico = $crudperiodoaca->obtenerPeriodoAcademicoActual();
  $matricula = $crudmatricula->obtenerMatricula($est->getNumeroIdentificacion(), $periodoacademico->getPeriodoacademicoId());
  $resi = $crudResidencia->obtenerresidenciaestudiantes($est->getNumeroIdentificacion(), $periodoacademico->getPeriodoacademicoId());
  $parroquia = $crudparroquia->obtenerParroquia($resi->getCodigoPostal());
  $contacemer = $crudContactoEmergencia->obtenerContactoEmergencia($est->getNumeroIdentificacion(), $periodoacademico->getPeriodoacademicoId());
  $pueblonacio = $crudpueblona->obtenerpuebloNacionalidad($est->getFkPuebloNacionalidadId());
  $canton = $crudcanton->obtenerCanton($parroquia->getParroquiasCanton());
  $provincia = $crudprovincia->obtenerProvincia($canton->getCantonprovincia());
  $pais = $crudpais->obtenerPaises($provincia->getProvinciapais());
  $canton1 = $crudcanton->obtenerCanton($est->getFkCantonNacimientoId());
  $provincia1 = $crudprovincia->obtenerProvincia($canton1->getCantonprovincia());
  $pais1 = $crudpais->obtenerPaises($provincia1->getProvinciapais());
  $discapest = $crudDiscapacidadEstudiante->obtenerdiscapacidadesestudiantes($est->getNumeroIdentificacion(), $periodoacademico->getPeriodoacademicoId());
  $tipodiscapacidad = $crudTipoDiscapacidad->obtenerTipoDiscapacidad($discapest->getFkTipoDiscapacidadTipoDiscapacidadId());
  $bachillerato = $crudBaclillerato->obtenerBachillerato($est->getNumeroIdentificacion());
  $colegio = $crudcolegio->obtenerColegio($bachillerato->getColegiosidColegios());
  $carrera1 = $crudcarreras->obtenerCarrerasporId($matricula->getCcarrerasId());
  $trabajo1 = $crudtrabajo->obtenerEstudianteTrabajo($est->getNumeroIdentificacion(), $periodoacademico->getPeriodoacademicoId());



  //inicio pdf

  $pdf = new PlantillaReportes();

  $pdf->AddPage();
  /***
   *pagina 1
   ****/
  $pdf->SetXY(75, 30);
  $pdf->SetFont('Arial', 'B', 10);
  //$pdf->Rect(189, 30, 15, 8, 'C');
  $pdf->Cell(0, 1, utf8_decode('FORMULARIO DE MATRICULACION'), 0, 1, 'J', false);
  $pdf->SetXY(165, 35);
  $pdf->SetFont('Arial', '', 10);
  //$pdf->Rect(189, 30, 15, 8, 'C');
  $pdf->Cell(0, 1, utf8_decode($carrera1->getCodigoCarreras() . '-' . $matricula->getCodigoMatricula()), 0, 1, 'J', false);

  //1. Tipo de Documento
  $pdf->SetXY(7, 40);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Cell(1, 5, utf8_decode('1.Tipo de Documento de Identificación: '), 0, 1);
  $pdf->SetXY(90, 42);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(0, 0, utf8_decode($crudtipoDocumento->obtenerDato($est->getFktipodocumentoId()) . ''), 0, 1);
  //2.Numero de Documento
  $pdf->SetXY(7, 50);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 46, 90, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('2. Número de Documento de Identificación: '), 0, 1);
  $pdf->SetXY(30, 57);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(0, 0, $est->getNumeroIdentificacion(), 0, 1); //Celda
  //3. Sexo
  $pdf->SetXY(98, 53);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(96, 46, 45, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('3. Sexo: '), 0, 1);
  $pdf->SetXY(114, 53);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(0, 0, '  ' . utf8_decode($crudsexo->obtenerDato($est->getFksexoId())), 0, 1);
  //4.Género
  $pdf->SetXY(143, 53);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(141, 46, 62, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('4.Género:'), 0, 1);
  $pdf->SetXY(165, 53);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(0, 0, utf8_decode($crudgenero->obtenerDato($est->getFkGeneroId())), 0, 1);

  //5. Apellidos y Nombres del Estudiante:
  $pdf->SetXY(7, 66);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 62, 197, 8, 'C');
  $pdf->Cell(0, 0, utf8_decode('5. Apellidos y Nombres del Estudiante:'), 0, 1);
  $pdf->SetXY(86, 62);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Rect(6, 38, 197, 8, 'C');
  $pdf->CellFitSpace(117, 8, utf8_decode($est->getPrimerApellido() . ' ' . $est->getSegundoApellido() . ' ' . $est->getPrimerNombre() . ' ' . $est->getSegundoNombre()), 0, 1, 'C', false);
  //6. Correo Electrónico:
  $pdf->SetXY(7, 74);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 70, 98, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('6. Correo Electrónico:'), 0, 1);
  $pdf->SetXY(7, 76);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(95, 8, $est->getCorreoElectronico(), 0, 1, 'C', false);

  //7. Nro. Celular:

  $pdf->SetXY(105, 74);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(104, 70, 99, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('7. Nro. Celular:'), 0, 1);
  $pdf->SetXY(150, 74);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(0, 0, $est->getNumeroCelular(), 0, 1);
  //8. Nro. Convencional:
  $pdf->SetXY(105, 81);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Cell(0, 0, utf8_decode('8. Nro. Convencional:'), 0, 1);
  $pdf->SetXY(150, 81);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(0, 0, $est->getNumeroComvencional(), 0, 1);

  // 9. Dirección:
  $pdf->SetXY(7, 90);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 86, 144, 8, 'C');
  $pdf->Cell(0, 0, utf8_decode('9. Dirección:'), 0, 1);
  $pdf->SetXY(33, 86);
  $pdf->SetFont('Arial', '', 10);
  $pdf->CellFitSpace(110, 8, utf8_decode($resi->getDireccionDomiciliariaResidencia()), 0, 1, 'N', false); //Auto ajustable
  // 10. Código postal:
  $pdf->SetXY(150, 90);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(150, 86, 53, 8, 'C');
  $pdf->Cell(0, 0, utf8_decode('10. Código postal:'), 0, 1);
  $pdf->SetXY(188, 90);
  $pdf->SetFont('Arial', '', 11);
  $pdf->Rect(6, 38, 197, 8, 'C');
  $pdf->Cell(0, 0, $parroquia->getParroquiascodigo(), 0, 1);
  // 11. En caso de emergencia contactar a:
  $pdf->SetXY(6, 94);
  $pdf->SetFont('Arial', 'B', 10); //B
  $pdf->Rect(6, 94, 110, 16, 'C');
  $pdf->CellFitSpace(110, 8, utf8_decode('11. En caso de emergencia contactar a:(Apellidos yNombres)'), 0, 1, 'C', false); //Auto ajustable
  $pdf->SetXY(6, 100);
  $pdf->SetFont('Arial', '', 12);
  $pdf->Rect(6, 38, 197, 8, 'C');
  $pdf->CellFitSpace(110, 8, utf8_decode($contacemer->getNombreContactoEmergencia()), 0, 1, 'C', false); //Auto ajustable
  // 12. Parentesco:
  $pdf->SetXY(117, 98);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(116, 94, 38, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('12. Parentesco:'), 0, 1);
  $pdf->SetXY(116, 100);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(38, 8, utf8_decode($crudparentesco->obtenerDato($contacemer->getParentescosIdParentescos())), 0, 1, 'C', false);
  // 13. Nro. de Contacto:
  $pdf->SetXY(155, 98);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(154, 94, 49, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('13. Nro. de Contacto:'), 0, 1);
  $pdf->SetXY(154, 100);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(49, 8, $contacemer->getNumeroContactosEmergencia(), 0, 1, 'C', false);
  // 14. Etnia:
  $pdf->SetXY(6, 114);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 110, 60, 8, 'C');
  $pdf->Cell(0, 0, utf8_decode('14. Etnia:'), 0, 1);
  $pdf->SetXY(26, 110);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(40, 8, utf8_decode($crudEtnia->obtenerDato($pueblonacio->getPnetnia())), 0, 1, 'C', false);

  // 15. En caso de escoger etnia Indígenau Otroespecifique su nacionalidad:
  $pdf->SetXY(66, 110);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(66, 110, 75, 8, 'C');
  $pdf->CellFitSpace(42, 8, utf8_decode('15. Pueblo nacionalidad:'), 0, 1, 'C', false);
  $pdf->SetXY(107, 110);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(34, 8, utf8_decode($pueblonacio->getPueblonacionalidad()), 0, 1, 'C', false);

  // 16. Habla algún idioma ancestral:
  $pdf->SetXY(141, 110);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(141, 110, 62, 8, 'C');
  $pdf->CellFitSpace(35, 8, utf8_decode('16. Idioma Ancestral:'), 0, 1, 'C', false);
  $pdf->SetXY(176, 110);
  $pdf->SetFont('Arial', '', 10);
  $pdf->CellFitSpace(27, 8, utf8_decode($crudidioma->obtenerDato($est->getIdiomas())) . '', 0, 1, 'N', false);

  // 17. Fecha de Nacimiento:
  $pdf->SetXY(6, 118);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 118, 76, 8, 'C');
  $pdf->Cell(35, 8, utf8_decode('17. Fecha de Nacimiento:'), 0, 1);
  $pdf->SetXY(58, 118);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(24, 8, $est->getFechaNacimiento(), 0, 1, 'N', false);
  // 17.1  EDAD
  $pdf->SetXY(82, 118);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(82, 118, 68, 8, 'N');
  $pdf->Cell(35, 8, utf8_decode('17.1  Edad:'), 0, 1);
  $pdf->SetXY(107, 118);
  $pdf->SetFont('Arial', '', 11);
  $pdf->CellFitSpace(43, 8, utf8_decode(caluloEdadr($est->getFechaNacimiento(), $matricula->getFechaMatricula())), 0, 1, 'N', false);
  // 18. Tipo de Sangre:
  $pdf->SetXY(150, 118);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(150, 118, 53, 8, 'C');
  $pdf->Cell(35, 8, utf8_decode('18. Tipo de Sangre: '), 0, 1);
  $pdf->SetXY(192, 118);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(11, 8, $crudtipoSangre->obtenerDato($est->getFkTipoSangreId()) . '', 0, 1, 'C', false);
  // 19. País de Nacionalidad:
  $pdf->SetXY(6, 126);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 126, 70, 16, 'C');
  $pdf->Cell(35, 8, utf8_decode('19. País de Nacionalidad:'), 0, 1);
  $pdf->SetXY(6, 134);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(70, 8, utf8_decode($pais1->getPais()), 0, 1, 'C', false);
  //20. Provincia de Nacimiento:
  $pdf->SetXY(76, 126);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(76, 126, 60, 16, 'C');
  $pdf->Cell(60, 8, utf8_decode('20. Provincia de Nacimiento:'), 0, 1);
  $pdf->SetXY(76, 134);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(60, 8, utf8_decode($provincia1->getProvincia()), 0, 1, 'C', false);

  //21. Cantón de Nacimiento:
  $pdf->SetXY(140, 126);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(136, 126, 67, 16, 'C');
  $pdf->Cell(60, 8, utf8_decode('21. Cantón de Nacimiento:'), 0, 1);
  $pdf->SetXY(136, 134);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(67, 8, utf8_decode($canton1->getCanton()), 0, 1, 'C', false);

  //22. Categoría migratoria: (en caso de ser extranjero)
  $pdf->SetXY(6, 142);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 142, 197, 8, 'C');
  $pdf->Cell(60, 8, utf8_decode('22. Categoría migratoria: (en caso de ser extranjero)'), 0, 1);
  $pdf->SetXY(120, 142);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(67, 8, utf8_decode($crudMigratoria->obtenerDato($est->getCategoriaMigratoriaId())), 0, 1, 'N', false);


  //23. País de Residencia:
  $pdf->SetXY(6, 150);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 150, 70, 16, 'C');
  $pdf->Cell(35, 8, utf8_decode('23. País de Residencia:'), 0, 1);
  $pdf->SetXY(6, 158);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(70, 8, utf8_decode($pais->getPais()), 0, 1, 'C', false);

  //24. Provincia de Residencia:
  $pdf->SetXY(76, 150);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(76, 150, 60, 16, 'C');
  $pdf->Cell(60, 8, utf8_decode('24. Provincia de Residencia:'), 0, 1);
  $pdf->SetXY(76, 158);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(60, 8, utf8_decode($provincia->getProvincia()), 0, 1, 'C', false);

  //25. Cantón de Residencia:
  $pdf->SetXY(140, 150);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(136, 150, 67, 16, 'C');
  $pdf->Cell(60, 8, utf8_decode('25. Cantón de Residencia:'), 0, 1);
  $pdf->SetXY(136, 158);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(67, 8, utf8_decode($canton->getCanton()), 0, 1, 'C', false);

  //26. Estado Civil:
  $pdf->SetXY(6, 166);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 166, 197, 8, 'C');
  $pdf->Cell(60, 8, utf8_decode('26. Estado Civil:'), 0, 1);
  $pdf->SetXY(40, 166);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(40, 8, utf8_decode($crudEstadoCivil->obtenerDato($est->getFkEstadoCivilId())), 0, 1, 'C', false);

  //27. Tiene Alguna Discapacidad:
  $pdf->SetXY(6, 174);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 174, 100, 16, 'C');
  $pdf->CellFitSpace(65, 8, utf8_decode('27.Tiene Alguna Discapacidad: '), 0, 1, 'C', false);
  $pdf->SetXY(60, 174);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(39, 8, ($cruddiscapacidad->obtenerDato($tipodiscapacidad->getTipodiscapacidadbool())), 0, 1, 'C', false);
  //28. Nro. Carnet CONADIS:
  $pdf->SetXY(6, 182);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 182, 100, 8, 'C');
  $pdf->CellFitSpace(65, 8, utf8_decode('29. Porcentaje  de Discapacidad'), 0, 1, 'C', false);
  $pdf->SetXY(70, 182);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(18, 8, utf8_decode($discapest->getPorcentajeDiscapacidad()), 0, 1, 'C', false);

  //29. Porcentaje  de Discapacidad
  $pdf->SetXY(106, 174);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(106, 174, 97, 8, 'C');
  $pdf->CellFitSpace(45, 8, utf8_decode('28. Nro. Carnet CONADIS:'), 0, 1, 'C', false);
  $pdf->SetXY(170, 174);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(20, 8, utf8_decode($discapest->getCarnetConadisId()), 0, 1, 'C', false);
  //30. Porcentaje  de Discapacidad
  $pdf->SetXY(100, 182);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(106, 182, 97, 8, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('30. Tipo Discapacidad:'), 0, 1, 'C', false);
  $pdf->SetXY(152, 182);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(50, 8, utf8_decode($crudTipoDiscapacidad->obtenerDato($discapest->getFkTipoDiscapacidadTipoDiscapacidadId())), 0, 1, 'C', false);


  //31. Tipo de Colegio:
  $pdf->SetXY(6, 194);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 190, 45, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('31. Tipo de Colegio:'), 0, 1);
  $pdf->SetXY(6, 198);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(45, 8, utf8_decode($crudtipocolegio->obtenerDato($colegio->getTipoColegioTipoColegioId())), 0, 1, 'C', false);

  //32.Tipo de Bachillerato:
  $pdf->SetXY(75, 194);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(51, 190, 90, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('32.Tipo de Bachillerato:'), 0, 1);
  $pdf->SetXY(51, 198);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(90, 8, utf8_decode($crudTipoBachillerato->obtenerDato($bachillerato->getFkTiposBacilleratotiposBacilleratoId())) . '', 0, 1, 'C', false);
  //33.Año de graduación:
  $pdf->SetXY(145, 194);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(141, 190, 62, 16, 'C');
  $pdf->Cell(0, 0, utf8_decode('33.Año de graduación:'), 0, 1);
  $pdf->SetXY(141, 198);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(62, 8, $bachillerato->getAnioGraduacion(), 0, 1, 'C', false);
  //34. Posee algún título de Educación Superior:
  $pdf->SetXY(6, 206);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 206, 197, 8, 'C');
  $pdf->Cell(60, 8, utf8_decode('34.Título de Educación Superior:  '), 0, 1);
  $pdf->SetXY(75, 206);
  $pdf->SetFont('Arial', '', 10);
  $pdf->CellFitSpace(128, 8, $crudtitulotercernivel->obtenerDato($crudtituloTercerNivelEstudiante->obtenerDato($est->getNumeroIdentificacion())), 0, 1, 'N', false);

  //  35. Fecha en la que inició el estudiante la Carrera: (Año-Mes-Dia
  $pdf->SetXY(6, 214);
  $pdf->SetFont('Arial', 'B', 10); //B
  $pdf->Rect(6, 214, 197, 8, 'C');
  $pdf->CellFitSpace(80, 8, utf8_decode('35. Fecha en la que inició el estudiante la Carrera:'), 0, 1, 'C', false);
  $pdf->SetXY(86, 214);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, $matricula->getFechainicioCarrera(), 0, 1, 'C', false);
  // 36. Fecha de Matrícula:(Año-Mes-Dia)
  $pdf->SetXY(112, 214);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(112, 214, 91, 8, 'C');
  $pdf->CellFitSpace(50, 8, utf8_decode('36. Fecha de Matrícula:'), 0, 1, 'C', false);
  $pdf->SetXY(165, 214);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, $matricula->getFechaMatricula(), 0, 1, 'C', false);
  //37. Tipo de Matrícula:
  $pdf->SetXY(6, 222);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 222, 70, 16, 'C');
  $pdf->Cell(35, 8, utf8_decode('37. Tipo de Matrícula:'), 0, 1);
  $pdf->SetXY(6, 230);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(70, 8, $crudtipoMatricula->obtenerDato($matricula->getTtipoMatriculaId()), 0, 1, 'C', false);
  //38. Período /Ciclo Académico:
  $pdf->SetXY(76, 222);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(76, 222, 60, 16, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('38. Período /Ciclo Académico: '), 0, 1, 'C', false);
  $pdf->SetXY(76, 230);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(60, 8, utf8_decode($crudcicloperiodo->obtenerDato($periodoacademico->getCicloperiodoIdcicloperiodo())), 0, 1, 'C', false);
  //39. Año del Período Académico:
  $pdf->SetXY(140, 222);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(136, 222, 67, 16, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('39. Año del Período Académico:'), 0, 1, 'C', false);
  $pdf->SetXY(136, 230);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(67, 8, $periodoacademico->getFechaInicio(), 0, 1, 'C', false);
  //40. Nivel Académico
  $pdf->SetXY(6, 238);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 238, 106, 8, 'C');
  $pdf->CellFitSpace(40, 8, utf8_decode('40. Nivel Académico:'), 0, 1, 'C', false);
  $pdf->SetXY(50, 238);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, $crudnivelacademico->obtenerDato($matricula->getNnivelAcademicoQueCursaId()), 0, 1, 'N', false);
  //41. Paralelo (A-T):
  $pdf->SetXY(112, 238);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(112, 238, 91, 8, 'C');
  $pdf->CellFitSpace(50, 8, utf8_decode('41. Paralelo (A-T):'), 0, 1, 'C', false);
  $pdf->SetXY(165, 238);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, $crudparalelo1->obtenerDato($matricula->getPparaleloId()) . '', 0, 1, 'N', false);
  //42. Nombre de la Carrera
  $pdf->SetXY(6, 246);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 246, 197, 8, 'C');
  $pdf->Cell(60, 8, utf8_decode('42. Nombre de la Carrera:'), 0, 1);
  $pdf->SetXY(58, 246);
  $pdf->SetFont('Arial', '', 11);
  $pdf->CellFitSpace(130, 8, utf8_decode($carrera1->getCarrera()), 0, 1, 'N', false);

  //43. Título que otorga la Carrera
  $pdf->SetXY(6, 254);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 254, 197, 8, 'C');
  $pdf->Cell(60, 8, utf8_decode('43. Título que otorga la Carrera:'), 0, 1);
  $pdf->SetXY(73, 254);
  $pdf->SetFont('Arial', '', 11);
  $pdf->CellFitSpace(128, 8, utf8_decode($crudtitulotercernivel->obtenerDato($carrera1->getCarreraTituloAOptener())), 0, 1, 'N', false);

  //44. Tipo de Carrera:
  $pdf->SetXY(6, 262);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 262, 70, 16, 'C');
  $pdf->Cell(35, 8, utf8_decode('44. Tipo de Carrera: '), 0, 1);
  $pdf->SetXY(6, 268);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(70, 8, $crudtipocarrera1->obtenerDato($carrera1->getFktipoCarrerasId()), 0, 1, 'C', false);
  //45. Modalidad de la Carrera:
  $pdf->SetXY(76, 262);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(76, 262, 60, 16, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('45. Modalidad de la Carrera:'), 0, 1, 'C', false);
  $pdf->SetXY(76, 268);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(60, 8, $crudmodalidad->obtenerDato($carrera1->getFkmodalidadCarreraId()), 0, 1, 'C', false);
  //46. Jornada en la que Estudia:
  $pdf->SetXY(140, 262);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(136, 262, 67, 16, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('46. Jornada en la que Estudia:'), 0, 1, 'C', false);
  $pdf->SetXY(136, 268);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(67, 8, $crudjornadaacademic->obtenerDato($matricula->getJjornadaAcademicaId()), 0, 1, 'C', false);
  $pdf->AddPage();

  //47. Ha repetido al menos una materia
  $pdf->SetXY(6, 40);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(6, 40, 106, 8, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('47. Ha repetido al menos una materia'), 0, 1, 'C', false);
  $pdf->SetXY(60, 40);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, $crudaperdidoalmenosunamateria->obtenerDato($matricula->getHhaRepetidoAlMenosUnaMateriaid()), 0, 1, 'C', false);
  //48. Ha Perdido la Gratuidad:
  $pdf->SetXY(112, 40);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(112, 40, 91, 8, 'C');
  $pdf->CellFitSpace(60, 8, utf8_decode('48. Ha Perdido la Gratuidad:'), 0, 1, 'C', false);
  $pdf->SetXY(165, 40);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, $crudgratuidad->obtenerDato($matricula->getHhaPerdidoLaGratuidadId()), 0, 1, 'C', false);
  //49. Ha realizado Prácticas Preprofesionales:
  $pdf->SetXY(6, 48);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 48, 106, 8, 'C');
  $pdf->CellFitSpace(90, 8, utf8_decode('49. Ha realizado Prácticas Preprofesionales:'), 0, 1, 'C', false);
  $pdf->SetXY(90, 48);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, 'No', 0, 1, 'C', false);
  //50. Nro. Horas de Prácticas PreprofesionalesRealizadas:
  $pdf->SetXY(112, 48);
  $pdf->SetFont('Arial', 'B', 10); //B
  $pdf->Rect(112, 48, 91, 8, 'C');
  $pdf->CellFitSpace(80, 8, utf8_decode('50. Nro. Horas de Prácticas PreprofesionalesRealizadas:'), 0, 1, 'C', false);
  $pdf->SetXY(185, 48);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(25, 8, 'NA', 0, 1, 'C', false);
  //51. Tipo de Institución en el que se realiza Prácticas Pre profesionales:
  $pdf->SetXY(6, 56);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 56, 197, 8, 'C');
  $pdf->Cell(60, 8, utf8_decode('51. Tipo de Institución en el que se realiza Prácticas Pre profesionales:'), 0, 1);
  $pdf->SetXY(150, 56);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(53, 8, 'NA', 0, 1, 'C', false);
  //52. Sector Económico en el que realiza Prácticas Preprofesionales:
  $pdf->SetXY(6, 64);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(6, 64, 197, 8, 'C');
  $pdf->CellFitSpace(120, 8, utf8_decode('52. Sector Económico en el que realiza Prácticas Preprofesionales:'), 0, 1, 'C', false);
  $pdf->SetXY(108, 64);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(95, 8, 'NA', 0, 1, 'C', false);
  //53. Ha participado en algún Proyecto de Vinculación con la Sociedad en el Instituto:
  $pdf->SetXY(6, 72);
  $pdf->SetFont('Arial', 'B', 11); //B
  $pdf->Rect(6, 72, 197, 8, 'C');
  $pdf->CellFitSpace(140, 8, utf8_decode('53. Ha participado en algún Proyecto de Vinculación con la Sociedad en el Instituto:'), 0, 1, 'C', false);
  $pdf->SetXY(148, 72);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(55, 8, 'NA', 0, 1, 'C', false);
  //54. Cuál es el alcance del Proyecto de Vinculación con la Sociedad:
  $pdf->SetXY(6, 80);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 80, 197, 8, 'C');
  $pdf->CellFitSpace(138, 8, utf8_decode('54. Cuál es el alcance del Proyecto de Vinculación con la Sociedad:'), 0, 1, 'C', false);
  $pdf->SetXY(148, 80);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(55, 8, 'NA', 0, 1, 'C', false);
  //55. El Estudiante se encuentra dedicado a:
  $pdf->SetXY(6, 88);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 88, 197, 8, 'C');
  $pdf->CellFitSpace(82, 8, utf8_decode('55. El Estudiante se encuentra dedicado a:'), 0, 1, 'C', false);
  $pdf->SetXY(90, 88);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(90, 8, $crudocupacion->obtenerDato($matricula->getEestudianteOcupacionId()), 0, 1, 'C', false);
  //56.Cuál es el nombre de la empresa donde labora:
  $pdf->SetXY(6, 96);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 96, 197, 8, 'C');
  $pdf->CellFitSpace(100, 8, utf8_decode('56.Cuál es el nombre de la empresa donde labora:'), 0, 1, 'C', false);
  $pdf->SetXY(106, 96);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(97, 8, $trabajo1->getNomempresa(), 0, 1, 'C', false);
  //57.Indique cuál es el Sector Económicode la empresa:
  $pdf->SetXY(6, 104);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 104, 197, 16, 'C');
  $pdf->CellFitSpace(110, 8, utf8_decode('57.Indique cuál es el Sector Económicode la empresa:'), 0, 1, 'C', false);
  $pdf->SetXY(6, 112);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(197, 8, $crudsectoreconomico->obtenerDato($trabajo1->getSectoreconomico()), 0, 1, 'N', false);
  //58. Para que emplea sus ingresoseconómicosel estudiante:
  $pdf->SetXY(6, 120);
  $pdf->SetFont('Arial', 'B', 10); //B
  $pdf->Rect(6, 120, 197, 8, 'C');
  $pdf->CellFitSpace(135, 8, utf8_decode('58. Para que emplea sus ingresoseconómicosel estudiante:'), 0, 1, 'N', false);
  $pdf->SetXY(106, 120);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(97, 8, $crudingresoestudiante->obtenerDato($matricula->getIingresosestudianteId()), 0, 1, 'N', false);
  //59. Usted o algún miembro de la familia recibe el bono de desarrollo humano:
  $pdf->SetXY(6, 128);
  $pdf->SetFont('Arial', 'B', 10); //B
  $pdf->Rect(6, 128, 197, 8, 'C');
  $pdf->CellFitSpace(170, 8, utf8_decode('59. Usted o algún miembro de la familia recibe el bono de desarrollo humano:'), 0, 1, 'N', false);
  $pdf->SetXY(138, 128);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(88, 8, $crudbonodesarrollo->obtenerDato($matricula->getBbonoDesarrolloId()), 0, 1, 'N', false);
  //60. Nivelde Formación del Padre:
  $pdf->SetXY(6, 136);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 136, 197, 8, 'C');
  $pdf->CellFitSpace(70, 8, utf8_decode('60. Nivelde Formación del Padre:'), 0, 1, 'C', false);
  $pdf->SetXY(75, 136);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(120, 8, utf8_decode($crudnivelformacion->obtenerDato($matricula->getFkNivelFormacionPadre())), 0, 1, 'N', false);
  //61. Nivel de Formación delaMadre:
  $pdf->SetXY(6, 144);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 144, 197, 8, 'C');
  $pdf->CellFitSpace(70, 8, utf8_decode('61. Nivel de Formación de la Madre:'), 0, 1, 'C', false);
  $pdf->SetXY(75, 144);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(120, 8, utf8_decode($crudnivelformacion->obtenerDato($matricula->getFkNivelFormacionMadre())), 0, 1, 'N', false);
  //62. Ingresos del Hogar:
  $pdf->SetXY(6, 152);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(6, 152, 106, 8, 'C');
  $pdf->CellFitSpace(50, 8, utf8_decode('62. Ingresos del Hogar:'), 0, 1, 'C', false);
  $pdf->SetXY(70, 152);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(30, 8, $matricula->getIngresoTotalHogar(), 0, 1, 'N', false);
  //63. Número de Miembros del Hogar:
  $pdf->SetXY(112, 152);
  $pdf->SetFont('Arial', 'B', 12); //B
  $pdf->Rect(112, 152, 91, 8, 'C');
  $pdf->CellFitSpace(80, 8, utf8_decode('63. Número de Miembros del Hogar:'), 0, 1, 'C', false);
  $pdf->SetXY(188, 152);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(15, 8, $matricula->getCantidadMiembrosHogar(), 0, 1, 'N', false);



  //FIRMA ESTUDIANTE:
  $pdf->SetXY(80, 190);
  $pdf->SetFont('Arial', '', 12);
  $pdf->CellFitSpace(50, 8, '________________________', 0, 1, 'C', false);
  $pdf->SetXY(80, 198);
  $pdf->SetFont('Arial', 'B', 12);
  $pdf->CellFitSpace(50, 8, 'FIRMA ESTUDIANTE:', 0, 1, 'C', false);

  $pdf->Output();
} catch (\Throwable $e) {
  echo $e;
}
