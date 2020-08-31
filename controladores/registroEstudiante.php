<?php

use Clasesphp\Estudiantes;
use Crud\CrudEstudiantes;

error_reporting(E_ALL ^ E_NOTICE);
require_once("../clasesphp/Estudiantes.php");
require_once('../Crud/CrudEstudiante.php');
require_once("respuestasgenerales.php");


/*DATOS GENERALES DE AUDITORIA*/
$user1 = $_POST['u'];;
$fecha = date('Y-m-d');
//if(isset($_SESSION['cedula'])) {
$cd1 = $_POST['ced'];

//Estudiante
session_start();
function datosrecargados($dato)
{
	$dato->set_fktipodocumentoId($_POST['tipodocumento']);
	$dato->set_numeroIdentificacion(strtoupper(trim($_POST['ced'])));
	$dato->set_primerApellido(strtoupper(trim($_POST['apellidoEst'])));
	$dato->set_segundoApellido(strtoupper(trim($_POST['apellidoEst2'])));
	$dato->set_primerNombre(strtoupper(trim($_POST['nombreEst'])));
	$dato->set_segundoNombre(strtoupper(trim($_POST['nombreEst2'])));
	$dato->set_fksexoId($_POST['lstsexo']);
	$dato->set_fkGeneroId($_POST['lstgeneros']);
	$dato->set_fkEstadoCivilId($_POST['estadoCivil']);
	$dato->set_fkTipoSangreId($_POST['lstsangre']);
	$dato->set_fechaNacimiento($_POST['fechanaci']);
	$dato->set_fkPaisNacionalidadId($_POST['paisNacionalidad']);
	$dato->set_fkProvinciaNacimientoId($_POST['provinciaNacionalidad']);
	$dato->set_fkCantonNacimientoId($_POST['cantonNacionalidad']);
	$dato->set_categoriaMigratoria_categoriaMigratoriaId($_POST['categoraMigratoria']);
	$dato->set_fktEtniaId($_POST['etnia']);
	$dato->set_fkPuebloNacionalidadId($_POST['pueblonacionalidad']);
	$dato->set_idiomas($_POST['lstidioma']);
	$dato->set_correoElectronico(trim($_POST['email1']));
	$dato->set_numeroCelular(strtoupper(trim($_POST['numcelular'])));
	$dato->set_numeroComvencional($_POST['numconvenconal']);
	$dato->set_estudiantesOculto($_POST['eliminar']);
	$dato->set_estudiantesAccion($_POST['actualizar']);
	$dato->set_estudiantesfecha(date("Y-m-d"));
	$dato->set_estudiantesuser((isset($_SESSION['tipouser']))?$_SESSION['tipouser'] . $_SESSION['user']:$_SESSION['campbuscarest']);
	return $dato;
}
function opciondatosestudiante()
{
	try {
		$dato = new Estudiantes();

		$crud = new CrudEstudiantes();
		$opcion = $_POST['opt'];
		if ($_SESSION['user'] != "" || $_SESSION['campbuscarest'] != "") {
			if ($opcion == 1) {
				if ($crud->existe($_SESSION['campbuscarest']) == 0) {
					$dato = datosrecargados($dato);
					$dato->set_usuarioEstudiantes($_POST['ced']);
					$dato->set_passwordEstudiantes(md5($_POST['ced']));
					$dato->set_accesodepartamento_codigo(2);
					//echo ("<script>console.log(".$dato->__toString().")<\script>");
					$crud->insertar($dato);
					return (guardarR());
				} else $opcion = 2;
			}
			if ($opcion == 2) {
				$dato=$crud->obtenerEstudiantes($_SESSION['campbuscarest']);
				$dato = datosrecargados($dato);
				$crud->actualizar($dato);
				return (actualizarR());
			}
			if ($opcion == 3) {
				if (isset($_POST['imgsubirest'])) {
					$imgContenido =  base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
					$dato = isset($_SESSION['campbuscarest']) ? $dato = $crud->obtenerEstudiantes($_SESSION['campbuscarest']) : $dato->set_fktipodocumentoId(null);
					$dato->set_estudiantesimg($imgContenido);
					echo ("<script>console.log(Datos autocargados" . $dato->__toString() . ");</script>");
					$crud->actualizar($dato);
					return (actualizarFoto());
				} else {
					return "Por favor seleccione imagen a subir.";
				}
			}
			if ($opcion == 4) {
				$dato = isset($_SESSION['campbuscarest']) ? $dato = $crud->obtenerEstudiantes($_SESSION['campbuscarest']) : $dato->set_fktipodocumentoId(null);
				$dato->set_numeroComvencional($_POST['numconvenconal']);
				$dato->set_usuarioEstudiantes($_POST['tipodocumento']);
				$dato->set_passwordEstudiantes($_POST['tipodocumento']);
				$dato->set_accesodepartamento_codigo($_POST['accesodepartamento_codigo']);
				$crud->actualizar($dato);
				return (actualizarR());
			}
			if ($opcion == optEliminar()) {
				$crud->eliminar($dato->get_numeroIdentificacion());
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
