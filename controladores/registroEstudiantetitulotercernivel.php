<?php
require_once("../clasesphp/Estudiantestitulotercernivel.php");
require_once('../Crud/Crud​Estudiantestitulotercernivel.php');
require_once("respuestasgenerales.php");

use Clasesphp\Estudiantestitulotercernivel;
use Crud\CrudEstudiantestitulotercernivel;

//Estudiante
session_start();
function datosrecargadosEstudiantestitulotercernivel($dato)
{
	$dato->setEstudiantesNumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->setEtnTituloTercerNivelId($_POST['tituloSuperior']);
	$dato->setEtnOculto($_POST['eliminar']);
	$dato->setEtnAccion($_POST['actualizar']);
	$dato->setEtnfecha(date("Y-m-d"));
	$dato->setEtnuser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : "est" . $_SESSION['campbuscarest']);

	return $dato;
}
function opcionEstudiantestitulotercernivel()
{
	try {
		$dato = new Estudiantestitulotercernivel();

		$crud = new CrudEstudiantestitulotercernivel();
		$opcion = $_POST['opt'];
		if ($opcion == 1) {
			echo "session titulo: " . $_SESSION['campbuscarest'];
			if ($crud->existe($_SESSION['campbuscarest']) == 0) {
				$dato = datosrecargadosEstudiantestitulotercernivel($dato);
				$crud->insertar($dato);
				return (guardarR());
			} else {
				$opcion = 2;
			}
		}
		if ($opcion == 2) {
			$dato = $crud->obtenerEstudiantestitulotercernivel($_SESSION['campbuscarest']);
			$dato = datosrecargadosEstudiantestitulotercernivel($dato);
			$dato->setEtnAccion(1);
			$crud->actualizar($dato);
			return (actualizarR());
		}

		if ($opcion == optEliminar()) {
			$crud->eliminar($dato->getEstudiantesNumeroIdentificacion());
			return (eliminarR());
		}
	} catch (Exception $e) {
		return $e;
	}
}
try {
	echo opcionEstudiantestitulotercernivel();
} catch (\Throwable $e) {
	echo $e;
}
