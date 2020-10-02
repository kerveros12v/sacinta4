<?php
require_once("../clasesphp/Bachilleratos.php");
require_once('../Crud/CrudBachillerato.php');
require_once("respuestasgenerales.php");

use Clasesphp\Bachilleratos;
use Crud\CrudBachillerato;

//Estudiante
session_start();
function datosrecargadosbachilleratos($dato)
{
	$dato->setFkEstudiantesNumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->setColegiosidColegios(strtoupper(trim($_POST['colegio'])));
	$dato->setFkTiposBacilleratotiposBacilleratoId($_POST['fkTiposBacilleratotiposBacilleratoId']);
	$dato->setAnioGraduacion($_POST['graduacion']);
	$dato->setBachilleratoOculto($_POST['eliminar']);
	$dato->setBachilleratoAccion($_POST['actualizar']);
	$dato->setBachilleratofecha(date("Y-m-d"));
	$dato->setBachilleratouser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : "est" . $_SESSION['campbuscarest']);
	return $dato;
}
function opcionBachillerato()
{
	try {
		$dato = new Bachilleratos();

		$crud = new CrudBachillerato();
		$opcion = $_POST['opt'];
		if ($opcion == 1) {
			if ($crud->existe($_SESSION['campbuscarest']) == 0) {
				echo "<script>console.log('Datos del estudiante a buscar: " . $_SESSION['campbuscarest'] . "');</script>";
				$dato = datosrecargadosbachilleratos($dato);
				echo $dato;
				$crud->insertar($dato);
				return (guardarR());
			} else {
				$opcion = 2;
			}
		}
		if ($opcion == 2) {
			$dato = $crud->obtenerBachillerato($_SESSION['campbuscarest']);
			$dato = datosrecargadosbachilleratos($dato);
			$dato->setBachilleratoAccion(1);
			$crud->actualizar($dato);
			return (actualizarR());
		}

		if ($opcion == optEliminar()) {
			$crud->eliminar($dato->getFkEstudiantesNumeroIdentificacion(), $_SESSION['campbuscarperiodo']);
			return (eliminarR());
		}
	} catch (Exception $e) {
		return $e;
	}
}
try {
	echo opcionBachillerato();
} catch (\Throwable $e) {
	echo $e;
}
