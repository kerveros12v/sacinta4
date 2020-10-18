<?php
require_once("../clasesphp/Discapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../clasesphp/Discapacidad.php");
require_once("../Crud/CrudDiscapacidad.php");
require_once("../clasesphp/Tipodiscapacidad.php");
require_once("../Crud/CrudTipoDiscapacidad.php");
require_once("respuestasgenerales.php");

use Clasesphp\Discapacidadesestudiantes;
use Crud\CrudDiscapacidadesestudiantes;
use Clasesphp\Discapacidad;
use Crud\CrudDiscapacidad;
use Crud\CrudTipoDiscapacidad;

session_start();
function datosrecargadosdiscapacidadestudiante($dato)
{
	$cruddiscapacidad1 = new CrudDiscapacidad();
	$crudTipodiscapacidad = new CrudTipoDiscapacidad();
	$auxtipodiscapacidad = $crudTipodiscapacidad->obtenerTipoDiscapacidad($_POST['fkTipoDiscapacidadTipoDiscapacidadId']);

	$auxdiscapacidad = $cruddiscapacidad1->obtenerDiscapacidad($auxtipodiscapacidad->getTipodiscapacidadbool());
	if ($auxdiscapacidad->getDiscapacidadbool() == 0) {
		$dato->setPorcentajeDiscapacidad(0);
		$dato->setCarnetConadisId("NA");
	} else {
		$dato->setPorcentajeDiscapacidad($_POST['porcentajeDiscapacidad']);
		if (!isset($_POST['carnetConadisId']))
			$dato->setCarnetConadisId($_POST['carnetConadisId']);
		else
			$dato->setCarnetConadisId("NA");
	}
	$dato->setFkEstudiantesNumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->setFkTipoDiscapacidadTipoDiscapacidadId($auxtipodiscapacidad->getTipoDiscapacidadid());
	$dato->setDiscapacidadestperiodo($_SESSION['campbuscarperiodo']);
	$dato->setDiscapacidadesestudiantesOculto($_POST['eliminar']);
	$dato->setDiscapacidadesestudiantesAccion($_POST['actualizar']);
	$dato->setDiscapacidadesestudiantesfecha(date("Y-m-d"));
	$dato->setDiscapacidadesestudiantesuser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : $_SESSION['campbuscarest']);
	return $dato;
}
function opciondatosestudiante()
{
	try {
		$dato = new Discapacidadesestudiantes();
		$crud = new CrudDiscapacidadesestudiantes();

		$opcion = $_POST['opt'];
		if ($_SESSION['user'] != "" || $_SESSION['campbuscarest'] != "") {
			if ($opcion == 1) {
				$dato = $crud->obtenerdiscapacidadesestudiantes($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
				if ($dato->getDiscapacidadesestudiantesid() != null) {
					$opcion = 2;
				} else {
					$dato = datosrecargadosdiscapacidadestudiante($dato);
					$crud->insertar($dato);
					return (guardarR());
				}
			}
			if ($opcion == 2) {
				$dato = $crud->obtenerdiscapacidadesestudiantes($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
				$dato = datosrecargadosdiscapacidadestudiante($dato);

				$crud->actualizar($dato);
				return (actualizarR() . "-> " . $dato);
			}

			if ($opcion == optEliminar()) {
				$crud->eliminar($dato->getCarnetConadisId());
				return (eliminarR());
			}
		} else {
			echo (tiempoExedido());
		}
	} catch (Exception $e) {
		return $e;
	}
}
$dato = new Discapacidadesestudiantes();
$dato = datosrecargadosdiscapacidadestudiante($dato);
//echo "<script> console.log('respuesta registro: ".$dato."')</script>";
echo opciondatosestudiante();
