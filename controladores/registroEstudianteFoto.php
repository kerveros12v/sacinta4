<?php

use Crud\CrudEstudiantes;

require_once("../clasesphp/Estudiantes.php");
require_once('../Crud/CrudEstudiante.php');
require_once("respuestasgenerales.php");

//Estudiante
session_start();
function opcionfotoestudiantedefault()
{
	try {
		$crud = new CrudEstudiantes();
		if ($_SESSION['user'] != "" || $_SESSION['campbuscarest'] != "") {

			if (!isset($_FILES["image"]) || $_FILES["image"]["error"] > 0) {
				echo "Ha ocurrido un error.";
			} else {
				// Verificamos si el tipo de archivo es un tipo de imagen permitido.
				// y que el tamaño del archivo no exceda los 16MB
				$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
				$limite_kb = 16384;

				if (in_array($_FILES['image']['type'], $permitidos) && $_FILES['image']['size'] <= $limite_kb * 1024) {

					// Archivo temporal
					$imagen_temporal = $_FILES['image']['tmp_name'];

					// Tipo de archivo
					$tipo = $_FILES['image']['type'];

					// Leemos el contenido del archivo temporal en binario.
					$fp = fopen($imagen_temporal, 'r+b');
					$data = fread($fp, filesize($imagen_temporal));
					fclose($fp);

					// Insertamos en la base de datos.
					$resultado = $crud->insertarImagen($_SESSION['campbuscarest'], $data);

					header("Status: 301 Moved Permanently");
					header("Location: ../Templates/visorDatosEstudiante.php");
				} else {
					return "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
				}
			}
		} else {
			echo (tiempoExedido());
		}
	} catch (Exception $e) {
		return $e;
	}
}
function opcionfotoestudiante()
{
	try {
		$crud = new CrudEstudiantes();
		if ($_SESSION['user'] != "" || $_SESSION['campbuscarest'] != "") {


			if (!isset($_FILES["image"]) || $_FILES["image"]["error"] > 0) {
				echo "Ha ocurrido un error.";
			} else {
				// Verificamos si el tipo de archivo es un tipo de imagen permitido.
				// y que el tamaño del archivo no exceda los 16MB
				$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
				$limite_kb = 16384;

				if (in_array($_FILES['image']['type'], $permitidos) && $_FILES['image']['size'] <= $limite_kb * 1024) {

					// Archivo temporal
					$imagen_temporal = $_FILES['image']['tmp_name'];

					// Tipo de archivo
					$tipo = $_FILES['image']['type'];

					// Leemos el contenido del archivo temporal en binario.
					$fp = fopen($imagen_temporal, 'r+b');
					$data = fread($fp, filesize($imagen_temporal));
					fclose($fp);

					// Insertamos en la base de datos.
					$resultado = $crud->insertarImagen($_SESSION['campbuscarest'], $data);

					header("Status: 301 Moved Permanently");
					header("Location: ../Templates/visorDatosEstudiante.php");
				} else {
					return "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
				}
			}
		} else {
			echo (tiempoExedido());
		}
	} catch (Exception $e) {
		return $e;
	}
}

echo opcionfotoestudiante();
