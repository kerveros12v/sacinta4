<?php
require_once("SetecPlantillaReportes.php");
require_once("../Crud/CrudSetec.php");
require_once("../Crud/CrudSetecAspirante.php");
require_once("../Crud/CrudGeneros.php");
require_once("../Crud/CrudFormacionArtesanal.php");
require_once("../Crud/Crudnivelformacion.php");
require_once("../Crud/CrudParroquia.php");
require_once("../Crud/CrudCanton.php");
require_once("../Crud/CrudProvincia.php");
require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("../Crud/CrudDiscapacidad.php");
require_once("../Crud/CrudSocioEmpleo.php");
require_once("../Crud/CrudSetecCertificacion.php");

use Crud\CrudCantones;
use Crud\CrudDiscapacidad;
use Crud\CrudProvincias;
use Crud\CrudParroquia;
use Crud\CrudFormacionArtesanal;
use Crud\CrudGeneros;
use Crud\CrudNivelformacion;
use Crud\CrudSetec;
use Crud\CrudSetecAspirante;
use Crud\CrudSetecCertificacion;
use Crud\CrudSocioEmpleo;
use Crud\CrudTipoDiscapacidad;

function caluloEdad($f1, $f2)
{

	$edad1 = abs(strtotime($f2) - strtotime($f1));
	$years = floor($edad1 / (365 * 60 * 60 * 24));
	$months = floor(($edad1 - ($years * 365 * 60 * 60 * 24)) / (30 * 60 * 60 * 24));
	$day = floor(($edad1 - ($years * 365 * 60 * 60 * 24) - ($months * 30 * 60 * 60 * 24)) / (60 * 60 * 24));
	return $years . " AÑOS ";
}
//Datos que recibe

$crudSetecr = new CrudSetec();
$crudaspiranter = new CrudSetecAspirante();
$crudgeneror = new CrudGeneros();
$crudformarter = new CrudFormacionArtesanal();
$crudnivelf = new CrudNivelformacion();
$crudparroquiar = new CrudParroquia();
$crudcantonr = new CrudCantones();
$crudprovinciar = new CrudProvincias();
$crudtipodiscapacidad = new CrudTipoDiscapacidad();
$cruddiscapacidad = new CrudDiscapacidad();
$crudsocioempleo = new CrudSocioEmpleo();

$crudcertificacion = new CrudSetecCertificacion();
$certificacionr = $_GET['certificaion'];
$cedular = $_GET['cedulapostulante'];
$setecr = $crudSetecr->obtenersetec($cedular, $certificacionr);
$aspiranter = $crudaspiranter->obtenerSetecaspirante($cedular);
$parroquiar = $crudparroquiar->obtenerParroquia($aspiranter->getParroquiasetec());
$cantonr = $crudcantonr->obtenerCanton($parroquiar->getParroquiasCanton());
$provinciar = $crudprovinciar->obtenerProvincia($cantonr->getCantonprovincia());
$tipodiscapacidadr = $crudtipodiscapacidad->obtenerTipoDiscapacidad($aspiranter->getFktipodiscapacidad());
$discapacidadr = $cruddiscapacidad->obtenerDato($tipodiscapacidadr->getTipodiscapacidadbool());
$cedulapostulante = $aspiranter->getNumeroidentificacionsetec();
$postulante = $aspiranter->getPrimerApellidosetec() . " " . $aspiranter->getSegundoApellidosetec() . " " . $aspiranter->getPrimerNombresetec() . " " . $aspiranter->getSegundoNombresetec();
$edad = caluloEdad($aspiranter->getFechanacimiento(), date('Y-m-d'));
$genero = $crudgeneror->obtenerDato($aspiranter->getFkgenerosetec());
$artesano = $crudformarter->obtenerDato($aspiranter->getFkformacionArtesano());
$registro = $crudnivelf->obtenerDato($aspiranter->getInstruccionRegistroCivil());
$instruccion = $aspiranter->getSetecaspiinstriccionseleccionada();
$provincia = $provinciar->getProvincia();
$canton = $cantonr->getCanton();
$parroquia = $parroquiar->getParroquia();
$domicilio = $aspiranter->getDireccionsetec();
$correo = $aspiranter->getCorreoelectronicoSetec();
$telefono = $aspiranter->getTelefonosetec();
$celular = $aspiranter->getCelularsetec();
$discapacidad = $discapacidadr;
$tipodediscapacidad = $tipodiscapacidadr->getTipoDiscapacidad();
$socioempleo = $crudsocioempleo->obtenerDato($aspiranter->getFksocioempleo());
$perfil = $_GET['perfil'];
$fechaprueba = $_GET['fechaprueba'];
$horaprueba = $_GET['horaprueba'];
$costo = $_GET['costo'];
$lugarexaminado = $_GET['lugarexaminado'];
$empresa = $_GET['empresa'];
$direccionempresa = $_GET['direccionempresa'];
$teléfonoempresa = $_GET['teléfonoempresa'];
$entrevistador = $_GET['entrevistador'];
$entrevistadorperfil = $_GET['entrevistadorperfil'];
$entrevistadorcedula = $_GET['entrevistadorcedula'];
$autoidentificacion = $_GET['autoidentificacion'];
$trabaja = $_GET['trabaja'];
$tipodeocupacion = $_GET['tipodeocupacion'];
$ocupacionencuentra = $_GET['ocupacionencuentra'];
$horastrabaja  = $_GET['horastrabaja'];
$departamento = $_GET['departamento'];
$transporte = $_GET['transporte'];
$capacitacion = $_GET['capacitacion'];
$bonificaciones = $_GET['bonificaciones'];
$ascenso = $_GET['ascenso'];
$satisfecho = $_GET['satisfecho'];
$agotado = $_GET['agotado'];
$capacidades = $_GET['capacidades'];
$calidad = $_GET['calidad'];
$riesgos = $_GET['riesgos'];
$cambiardetrabajo = $_GET['cambiardetrabajo'];
$jefehogar = $_GET['jefehogar'];
$seguromedico = $_GET['seguromedico'];
$tienehijos = $_GET['tienehijos'];
$cuántoshijos = $_GET['cuántoshijos'];
$hijosmayores = $_GET['hijosmayores'];
$asisteinstitucion = $_GET['asisteinstitucion'];
$miembroshogar = $_GET['miembroshogar'];
$vivienda = $_GET['vivienda'];
$luz = $_GET['luz'];
$agua = $_GET['agua'];
$internet = $_GET['internet'];

//--------------------------------
$fecha1 = date("Y-m-d | h:i:sa");
$tipoletra = 'Arial';
$tamanioLetra = 12;

$liniaposY = 58;
$saltolinea = 8;
$margen = 10;

$pdf = new PlantillaReportes();
$pdf->AddPage();

function nuevaHoja($l, $p)
{
	if ($l > 276) {
		$p->AddPage();
		$l = 42;
	}
	return $l;
}
$pdf->SetXY(60, 37);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
//$pdf->Rect(189,30, 15, 8, 'C');
$pdf->Cell(0, 1, '"RESUMEN DEL REGISTRO DE PERSONAS"', 0, 1);
//1. Tipo de Documento
$pdf->SetXY(15, 40);
$pdf->SetFont($tipoletra, '', 10);
$pdf->Cell(1, 5, utf8_decode('ORGANISMO EVALUADOR: INSTITUTO TECNOLOGICO SUPERIOR NELSON TORRES'), 0, 1);
$pdf->SetXY(15, 46);
$pdf->Cell(1, 5, utf8_decode("FECHA Y HORA:  " . $fecha1), 0, 1);

$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('1. DATOS GENERALES'), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('CÉDULA DE IDENTIDAD:'), 0, 1);
$pdf->SetXY(67 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($cedulapostulante), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('NOMBRE DEL PARTICIPANTE: '), 0, 1);
$pdf->SetXY(79 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($postulante), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('EDAD: '), 0, 1);
$pdf->SetXY(40 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($edad), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('GÉNERO: '), 0, 1);
$pdf->SetXY(40 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($genero), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('FORMACIÓN ARTESANO: '), 0, 1);
$pdf->SetXY(69 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($artesano), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('INSTRUCCIÓN REGISTRO CIVIL:'), 0, 1);
$pdf->SetXY(84 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($registro), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('INSTRUCCIÓN SELECCIONADA:'), 0, 1);
$pdf->SetXY(84 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($instruccion), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('PROVINCIA:'), 0, 1);
$pdf->SetXY(44 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($provincia), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('CANTÓN:'), 0, 1);
$pdf->SetXY(39 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($canton), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('PARROQUIA:'), 0, 1);
$pdf->SetXY(44 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($parroquia), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('DIRECCIÓN DEL DOMICILIO:'), 0, 1);
$pdf->SetXY(78 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($domicilio), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('CORREO ELECTRÓNCO:'), 0, 1);
$pdf->SetXY(70 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($correo), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('TELÉFONO:'), 0, 1);
$pdf->SetXY(43 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($telefono), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('CELULAR:'), 0, 1);
$pdf->SetXY(40 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($celular), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('TIENE DISCAPACIDAD:'), 0, 1);
$pdf->SetXY(65 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($discapacidad), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('TIPO DE DISCAPACIDAD:'), 0, 1);
$pdf->SetXY(70 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($tipodediscapacidad), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('DESEA SER PARTE DE SOCIO EMPLEO:'), 0, 1);
$pdf->SetXY(100 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($socioempleo), 0, 1);

$liniaposY += $saltolinea + 6;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('2. DATOS DE LA CERTIFICACIÓN - PERFIL/UNIDAD DE COMPETENCIA'), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('NOMBRE DEL PERFIL: '), 0, 1);
$pdf->SetXY(65 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($perfil), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('FECHA PARA RENDIR LA PRUEBA:'), 0, 1);
$pdf->SetXY(90 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($fechaprueba), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('HORA PARA RENDIR LA PRUEBA:'), 0, 1);
$pdf->SetXY(88 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($horaprueba), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('COSTO DE LA CERTIFICACIÓN:'), 0, 1);
$pdf->SetXY(85 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($costo), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('LUGAR DONDE DESEA SER EXAMINADO: '), 0, 1);
$pdf->SetXY(105 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($lugarexaminado), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('NOMBRE EMPRESA/LUGAR:'), 0, 1);
$pdf->SetXY(75 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($empresa), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('DIRECCIÓN EMPRESA/LUGAR:'), 0, 1);
$pdf->SetXY(80 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($direccionempresa), 0, 1);

$liniaposY += $saltolinea;
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('TELÉFONO EMPRESA/LUGAR:'), 0, 1);
$pdf->SetXY(80 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($teléfonoempresa), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('3. EXPERIENCIA LABORAL EN EL PERFIL'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15, $liniaposY);
$pdf->Rect(15, $liniaposY - 4, 15, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('No.'), 0, 1);
$pdf->SetXY(30, $liniaposY);
$pdf->Rect(30, $liniaposY - 4, 70, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('Nombre de la Empresa'), 0, 1);
$pdf->SetXY(100, $liniaposY);
$pdf->Rect(100, $liniaposY - 4, 40, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('Tiempo en Meses'), 0, 1);
$pdf->SetXY(140, $liniaposY);
$pdf->Rect(140, $liniaposY - 4, 55, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('Actividades Realizadas'), 0, 1);
/////////////----tabla dinamica-----//////////////////
$liniaposY += $saltolinea + 8;
$liniaposY = nuevaHoja($liniaposY, $pdf);

///////////////////////////////

$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('4. INFORMACIÓN DETALLADA'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('NOMBRE DEL ENTREVISTADOR:'), 0, 1);
$pdf->SetXY(85 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($entrevistador), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('NOMBRE DEL PERFIL:'), 0, 1);
$pdf->SetXY(65 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($entrevistadorperfil), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('SECCIÓN 1. DATOS GENERALES DEL ENCUESTADO'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('CÉDULA DE IDENTIDAD:'), 0, 1);
$pdf->SetXY(70 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($entrevistadorcedula), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('AUTOIDENTIFICACIÓN:'), 0, 1);
$pdf->SetXY(70 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($autoidentificacion), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('SECCIÓN 2. DATOS DE EMPLEABILIDAD'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿ACTUALMENTE USTED TRABAJA? '), 0, 1);
$pdf->SetXY(95 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($trabaja), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('2.1 CIUDADANOS/AS OCUPADOS/AS'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('TIPO DE OCUPACIÓN:  '), 0, 1);
$pdf->SetXY(65 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($tipodeocupacion), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('EN LA OCUPACIÓN SELECCIONADA SE ENCUENTRA:'), 0, 1);
$liniaposY += $saltolinea;
$pdf->SetXY(30 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($ocupacionencuentra), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿INDIQUE CUANTAS HORAS HABITUALMENTE TRABAJA A LA SEMANA? '), 0, 1);
$pdf->SetXY(170 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($horastrabaja), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('ÁREA/DEPARTAMENTO DONDE TRABAJA:'), 0, 1);
$liniaposY += $saltolinea;
$pdf->SetXY(30 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($departamento), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('2.1.2 CONDICIONES LABORALES'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('RECIBE POR PARTE DE SU PATRONO O EMPLEADOR:'), 0, 1);
$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('RECIBE TRANSPORTE:'), 0, 1);
$pdf->SetXY(70 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($transporte), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('RECIBE CAPACITACIÓN:'), 0, 1);
$pdf->SetXY(70 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($capacitacion), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('RECIBE BONIFICACIONES POR DESEMPEÑO:'), 0, 1);
$pdf->SetXY(115 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($bonificaciones), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->CellFitSpace(160, -1, utf8_decode('¿HA TENIDO USTED ALGÚN CAMBIO DE PUESTO O ASCENSO EN SU EMPRESA?: '), 0, 1, 'C');
$pdf->SetXY(175 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($ascenso), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿ESTÁ SATISFECHO CON EL EMPLEO ACTUAL?: '), 0, 1);
$pdf->SetXY(125 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($satisfecho), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿SE SIENTE AGOTADO, DEBIDO A LA CARGA DE TRABAJO?:'), 0, 1);
$pdf->SetXY(145 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($agotado), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿SUS COMPAÑEROS RESPETAN SU TRABAJO Y SUS CAPACIDADES?: '), 0, 1);
$pdf->SetXY(165 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($capacidades), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿SUS JEFES RECONOCEN LA CALIDAD DE SU TRABAJO?:'), 0, 1);
$pdf->SetXY(140 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($calidad), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿EN SU TRABAJO EXISTEN RIESGOS LABORALES?:'), 0, 1);
$pdf->SetXY(130 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($riesgos), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿DESEARÍA CAMBIAR DE TRABAJO?: '), 0, 1);
$pdf->SetXY(100 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($cambiardetrabajo), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->Rect(15 + $margen, $liniaposY - 4, 175 - $margen, 6, 'C');
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('SECCIÓN 3. DATOS DE CONDICIONES DE VIDA'), 0, 1);

$liniaposY += $saltolinea + 6;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿USTED ES JEFE DE HOGAR?: '), 0, 1);
$pdf->SetXY(85 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($jefehogar), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿USTED O SU FAMILIA POSEE UN SEGURO MÉDICO?: '), 0, 1);
$pdf->SetXY(130 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($seguromedico), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿TIENE HIJOS?: '), 0, 1);
$pdf->SetXY(50 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($tienehijos), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿CUÁNTOS HIJOS?: '), 0, 1);
$pdf->SetXY(60 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($cuántoshijos), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('HIJOS MAYORES A 3 AÑOS Y MENORES DE 18 AÑOS: '), 0, 1);
$pdf->SetXY(130 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($hijosmayores), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿ASISTEN ACTUALMENTE A ALGUNA INSTITUCIÓN EDUCATIVA?:  '), 0, 1);
$pdf->SetXY(160 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($asisteinstitucion), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿CUÁNTAS PERSONAS SON MIEMBROS DE SU HOGAR?: '), 0, 1);
$pdf->SetXY(140 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($miembroshogar), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('¿SU VIVIENDA ES?:'), 0, 1);
$pdf->SetXY(60 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('ARRENDADA:'), 0, 1);
$pdf->SetXY(90 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($vivienda), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('SERVICIOS BÁSICOS A LOS QUE TIENE ACCESO USTED Y SU FAMILIA:'), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('LUZ'), 0, 1);
$pdf->SetXY(40 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($luz), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('AGUA'), 0, 1);
$pdf->SetXY(40 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($agua), 0, 1);

$liniaposY += $saltolinea;
$liniaposY = nuevaHoja($liniaposY, $pdf);
$pdf->SetXY(15 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, 'B', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode('INTERNET:'), 0, 1);
$pdf->SetXY(40 + $margen, $liniaposY);
$pdf->SetFont($tipoletra, '', $tamanioLetra);
$pdf->Cell(0, 0, utf8_decode($internet), 0, 1);

$pdf->Output(); //Salida al navegador
