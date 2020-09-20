<?php

use Clasesphp\Estudiantes;
use Crud\CrudEstudiantes;

error_reporting(E_ALL ^ E_NOTICE);
require_once("../clasesphp/Estudiantes.php");
require_once('../Crud/CrudEstudiante.php');
require_once("respuestasgenerales.php");

//Estudiante
session_start();
function datosrecargados($dato)
{
	$dato->setFktipodocumentoId($_POST['tipodocumento']);
	$dato->setNumeroIdentificacion(strtoupper(trim($_POST['ced'])));
	$dato->setPrimerApellido(strtoupper(trim($_POST['apellidoEst'])));
	$dato->setSegundoApellido(strtoupper(trim($_POST['apellidoEst2'])));
	$dato->setPrimerNombre(strtoupper(trim($_POST['nombreEst'])));
	$dato->setSegundoNombre(strtoupper(trim($_POST['nombreEst2'])));
	$dato->setFksexoId($_POST['lstsexo']);
	$dato->setFkGeneroId($_POST['lstgeneros']);
	$dato->setFkEstadoCivilId($_POST['estadoCivil']);
	$dato->setFkTipoSangreId($_POST['lstsangre']);
	$dato->setFechaNacimiento($_POST['fechanaci']);
	$dato->setFkCantonNacimientoId($_POST['cantonNacionalidad']);
	$dato->setCategoriaMigratoriaId($_POST['categoraMigratoria']);
	$dato->setFkPuebloNacionalidadId($_POST['pueblonacionalidad']);
	$dato->setIdiomas($_POST['lstidioma']);
	$dato->setCorreoElectronico(trim($_POST['email1']));
	$dato->setNumeroCelular(strtoupper(trim($_POST['numcelular'])));
	$dato->setNumeroComvencional($_POST['numconvenconal']);
	$dato->setEstudiantesOculto($_POST['eliminar']);
	$dato->setEstudiantesAccion($_POST['actualizar']);
	$dato->setEstudiantesfecha(date("Y-m-d"));
	$dato->setEstudiantesuser((isset($_SESSION['tipouser'])) ? $_SESSION['tipouser'] . $_SESSION['user'] : $_SESSION['campbuscarest']);
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
					$dato->setUsuarioEstudiantes($_POST['ced']);
					$dato->setPasswordEstudiantes(md5($_POST['ced']));
					$dato->setAccesodepartamentoCodigo(2);
					//echo ("<script>console.log(".$dato->__toString().")<\script>");
					$crud->insertar($dato);
					return (guardarR());
				} else $opcion = 2;
			}
			if ($opcion == 2) {
				$dato = $crud->obtenerEstudiantes($_SESSION['campbuscarest']);
				$dato = datosrecargados($dato);
				$crud->actualizar($dato);
				return (actualizarR());
			}
			if ($opcion == 3) {
				if (isset($_POST['imgsubirest'])) {
					$imgContenido =  base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
					$dato = isset($_SESSION['campbuscarest']) ? $dato = $crud->obtenerEstudiantes($_SESSION['campbuscarest']) : $dato->setFktipodocumentoId(null);
					$dato->setEstudiantesimg($imgContenido);
					echo ("<script>console.log(Datos autocargados" . $dato->__toString() . ");</script>");
					$crud->actualizar($dato);
					return (actualizarFoto());
				} else {
					return "Por favor seleccione imagen a subir.";
				}
			}
			if ($opcion == 4) {
				$dato = isset($_SESSION['campbuscarest']) ? $dato = $crud->obtenerEstudiantes($_SESSION['campbuscarest']) : $dato->setFktipodocumentoId(null);
				$dato->setUsuarioEstudiantes($_POST['tipodocumento']);
				$dato->setPasswordEstudiantes($_POST['tipodocumento']);
				$dato->setAccesodepartamentoCodigo($_POST['accesodepartamento_codigo']);
				$crud->actualizar($dato);
				return (actualizarR());
			}
			if ($opcion == optEliminar()) {
				$crud->eliminar($dato->getNumeroIdentificacion());
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
