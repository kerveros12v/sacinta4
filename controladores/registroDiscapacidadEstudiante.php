<?php

use Clasesphp\Discapacidadesestudiantes;
use Crud\CrudDiscapacidadesestudiantes;
use Crud\CrudPeriodoacademico;

error_reporting(E_ALL ^ E_NOTICE);
require_once("../clasesphp/Discapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("../Crud/CrudPeriodoacademico.php");
require_once("respuestasgenerales.php");

session_start();
function datosrecargadosdiscapacidadestudiante($dato)
{
	$dato->set_fkEstudiantesNumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->set_fkDiscapacidadDiscapacidadId(strtoupper(trim($_POST['fkDiscapacidadDiscapacidadId'])));
	$dato->set_fkTipoDiscapacidadTipoDiscapacidadId(strtoupper(trim($_POST['fkTipoDiscapacidadTipoDiscapacidadId'])));
	$dato->set_porcentajeDiscapacidad(strtoupper(trim($_POST['porcentajeDiscapacidad'])));
	$dato->set_discapacidadestperiodo(strtoupper(trim($_POST['discapacidadestperiodo'])));
	$dato->set_discapacidadesestudiantesOculto($_POST['eliminar']);
	$dato->set_discapacidadesestudiantesAccion($_POST['actualizar']);
	$dato->set_discapacidadesestudiantesfecha(date("Y-m-d"));
	$dato->set_discapacidadesestudiantesuser((isset($_SESSION['tipouser']))?$_SESSION['tipouser'] . $_SESSION['user']:$_SESSION['campbuscarest']);

	return $dato;
}
function opciondatosestudiante()
{
	try {
		$dato = new Discapacidadesestudiantes();
		$crud = new CrudDiscapacidadesestudiantes();
		$crudperiodo=new CrudPeriodoacademico();

		$opcion = $_POST['opt'];
		if ($_SESSION['user'] != "" || $_SESSION['campbuscarest'] != "") {
			if ($opcion == 1) {

					$dato = datosrecargadosdiscapacidadestudiante($dato);
					$crud->insertar($dato);
					return (guardarR());
			}
			if ($opcion == 2) {
				$dato=$crud->obtenerdiscapacidadesestudiantes($_SESSION['campbuscarest'],$_SESSION['campbuscarperiodo']);
				$dato = datosrecargadosdiscapacidadestudiante($dato);
				$crud->actualizar($dato);
				return (actualizarR());
			}

			if ($opcion == optEliminar()) {
				$crud->eliminar($dato->get_CarnetConadisId());
				return (eliminarR());
			}
		} else {
			echo (tiempoExedido());
		}
	} catch (Exception $e) {
		return $e;
	}
}
echo opciondatosestudiante();
