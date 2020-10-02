<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("../clasesphp/ContactosEmergencia.php");
require_once('../Crud/CrudContactosemergencia.php');
require_once("respuestasgenerales.php");

use Clasesphp\Contactosemergencia;
use Crud\CrudContactosemergencia;

//Estudiante
session_start();
function datosrecargadosContacEmergencia($dato)
{
	$dato->setEstudiantesNumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->setNombreContactoEmergencia(strtoupper(trim($_POST['nomcontactoemergen'])));
	$dato->setNumeroContactosEmergencia($_POST['numcontacto']);
	$dato->setParentescosIdParentescos($_POST['parentesco1']);
	$dato->setContactosperiodo($_SESSION['campbuscarperiodo']);
	$dato->setContactosemergenciaOculto($_POST['eliminar']);
	$dato->setContactosemergenciaAccion($_POST['actualizar']);
	$dato->setContactosemergenciafecha(date("Y-m-d"));
	$dato->setContactosemergenciauser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : "est" . $_SESSION['campbuscarest']);

	return $dato;
}
function opcionContacEmergencia()
{
	try {
		$dato = new Contactosemergencia();

		$crud = new CrudContactosemergencia();
		$opcion = $_POST['opt'];
		if ($opcion == 1) {
			if ($crud->existe($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']) == 0) {
				$dato = datosrecargadosContacEmergencia($dato);
				echo $dato;
				$crud->insertar($dato);
				return (guardarR());
			} else {
				$opcion = 2;
			}
		}
		if ($opcion == 2) {
			$dato = $crud->obtenerContactoEmergencia($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
			$dato = datosrecargadosContacEmergencia($dato);
			$dato->setContactosemergenciaAccion(1);
			$crud->actualizar($dato);
			return (actualizarR());
		}

		if ($opcion == optEliminar()) {
			$crud->eliminar($dato->getEstudiantesNumeroIdentificacion(), $_SESSION['campbuscarperiodo']);
			return (eliminarR());
		}
	} catch (Exception $e) {
		return $e;
	}
}
try {
	echo opcionContacEmergencia();
} catch (\Throwable $e) {
	echo $e;
}
