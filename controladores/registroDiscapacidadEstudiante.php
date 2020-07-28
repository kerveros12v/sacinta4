<?php
require_once("../clasesphp/Discapacidadesestudiantes.php");
require_once("../Crud/CrudDiscapacidadesestudiantes.php");
require_once("respuestasgenerales.php");

use Clasesphp\Discapacidadesestudiantes;
use Crud\CrudDiscapacidadesestudiantes;

session_start();
function datosrecargadosdiscapacidadestudiante($dato)
{
	$dato->set_CarnetConadisId($_POST['CarnetConadisId']);
	$dato->set_fkEstudiantesNumeroIdentificacion($_SESSION['campbuscarest']);
	$dato->set_fkDiscapacidadDiscapacidadId($_POST['fkDiscapacidadDiscapacidadId']);
	$dato->set_fkTipoDiscapacidadTipoDiscapacidadId($_POST['fkTipoDiscapacidadTipoDiscapacidadId']);
	$dato->set_porcentajeDiscapacidad($_POST['porcentajeDiscapacidad']);
	$dato->set_discapacidadestperiodo($_SESSION['campbuscarperiodo']);
	$dato->set_discapacidadesestudiantesOculto($_POST['eliminar']);
	$dato->set_discapacidadesestudiantesAccion($_POST['actualizar']);
	$dato->set_discapacidadesestudiantesfecha(date("Y-m-d"));
	$dato->set_discapacidadesestudiantesuser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : $_SESSION['campbuscarest']);
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
				if ($dato->get_discapacidadesestudiantesid() != null) {
					$opcion=2;
				}else{
					$dato = datosrecargadosdiscapacidadestudiante($dato);
					$crud->insertar($dato);
					return (guardarR());
				}


			}
			if ($opcion == 2) {
				$dato = $crud->obtenerdiscapacidadesestudiantes($_SESSION['campbuscarest'], $_SESSION['campbuscarperiodo']);
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
