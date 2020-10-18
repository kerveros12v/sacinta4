<?php
require_once("../clasesphp/EstudianteTrabajo.php");
require_once('../Crud/CrudEstudianteTrabajo.php');
require_once("respuestasgenerales.php");

use Clasesphp\EstudianteTrabajo;
use Crud\CrudEstudianteTrabajo;

//Estudiante
session_start();
function datosrecargadosTrabajo($dato)
{
	$dato->setEstudinatenum($_SESSION['campbuscarest']);
	$dato->setNomempresa(strtoupper(trim($_POST['trabajo'])));
	$dato->setEstudinatetrabajoperiodo($_SESSION['campbuscarperiodo']);
	$dato->setEstudinatetrabajoOculto($_POST['eliminar']);
	$dato->setEstudinatetrabajoAccion($_POST['actualizar']);
	$dato->setEstudinatetrabajofecha(date("Y-m-d"));
	$dato->setEstudinatetrabajouser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : "est" . $_SESSION['campbuscarest']);
	$dato->setSectoreconomico($_POST['sectrabajo']);
	return $dato;
}
function opcionTrabajo()
{
	try {
		$dato = new EstudianteTrabajo();

		$crud = new CrudEstudianteTrabajo();
		$opcion = $_POST['opt'];
		if ($opcion == 1) {
			if ($crud->existe($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']) == 0) {
				$dato = datosrecargadosTrabajo($dato);
				$crud->insertar($dato);
				return (guardarR());
			} else {
				$opcion = 2;
			}
		}
		if ($opcion == 2) {
			$dato = $crud->obtenerEstudianteTrabajo($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
			$dato = datosrecargadosTrabajo($dato);
			$dato->setEstudinatetrabajoAccion(1);
			$crud->actualizar($dato);
			return (actualizarR());
		}

		if ($opcion == optEliminar()) {
			$crud->eliminar($dato->getEstudinatenum(), $_SESSION['campbuscarperiodo']);
			return (eliminarR());
		}
	} catch (Exception $e) {
		return $e;
	}
}
try {
	echo opcionTrabajo();
} catch (\Throwable $e) {
	echo $e;
}
