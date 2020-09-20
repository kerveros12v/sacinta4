<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("../clasesphp/Estudiantes.php");
require_once('../Crud/CrudEstudiante.php');
require_once("respuestasgenerales.php");

use Clasesphp\Residenciaestudiantes;
use Crud\CrudResidenciaestudiantes;
//Estudiante
session_start();
function datosrecargadosresidencia($dato)
{
	$dato->setFknumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->setDireccionDomiciliariaResidencia(strtoupper(trim($_POST['direcciondomi'])));
	$dato->setCodigoPostal(strtoupper((trim($_POST['parroquiaRecidencia']))));
	$dato->setFkperiodo($_SESSION['campbuscarperiodo']);
	$dato->setResidenciaestudiantesOculto($_POST['eliminar']);
	$dato->setResidenciaestudiantesAccion($_POST['actualizar']);
	$dato->setResidenciaestudiantesfecha(date("Y-m-d"));
	$dato->setResidenciaestudiantesuser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : $_SESSION['campbuscarest']);

	return $dato;
}
function opcionresidenciaestudiante()
{
	try {
		$dato = new Residenciaestudiantes();

		$crud = new CrudResidenciaestudiantes();
		$opcion = $_POST['opt'];
		if ($_SESSION['user'] != "" || $_SESSION['campbuscarest'] != "") {
			if ($opcion == 1) {
				if ($crud->existe($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']) == 0) {
					$dato = datosrecargadosresidencia($dato);
					$crud->insertar($dato);
					return (guardarR());
				} else $opcion = 2;
			}
			if ($opcion == 2) {
				$dato = $crud->obtenerresidenciaestudiantes($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
				$dato = datosrecargadosresidencia($dato);
				$crud->actualizar($dato);
				return (actualizarR());
			}

			if ($opcion == optEliminar()) {
				$crud->eliminar($dato->getResidenciaEstudiantesId());
				return (eliminarR());
			}
		} else {
			echo (tiempoExedido());
		}
	} catch (Exception $e) {
		return $e;
	}
}
echo opcionresidenciaestudiante();
