<?php
require_once("../Crud/CrudEstudiante.php");

use \Crud\CrudEstudiantes;

try {


	session_start();
	$usuario_1 = $_POST['username'];
	$clave_1 = $_POST['password'];

	////////////////////////////////////

	$crudest1 = new CrudEstudiantes();

	//Seccion donde se coloca el crudPersonal
	$crudpersonal = null;
	//Seccion donde se coloca el crudDocente
	$crudDocente = null;
	if ($crudest1->existe($usuario_1)) {
		$est2 = $crudest1->obtenerEstudiantes($usuario_1);
		if ($crudest1->login($usuario_1, md5($clave_1)) == 1) {
			$_SESSION['user'] = $est2->get_numeroIdentificacion();
			$_SESSION['est'] = $est2->get_numeroIdentificacion();
			$_SESSION['tipouser'] = "est";
			$_SESSION['acceso'] = $est2->get_accesodepartamento_codigo();
			$_SESSION['campbuscarest']=$est2->get_numeroIdentificacion();
			cargarplantilla();
		}
	}
	/*
	if($crudDocente->existe($usuario_1)){
		$est2=$crudDocente->obtenerDocente($usuario_1);
		if($crudDocente->login($usuario_1,md5($clave_1))==1){
			$_SESSION['user']=$est2->get_numeroIdentificacion();
			$_SESSION['doce']=$est2->get_numeroIdentificacion();
			$_SESSION['tipouser']="est";
			$_SESSION['acceso'] = $est2->get_accesodepartamento_codigo();
			cargarplantilla();
		}
	}
	if($crudpersonal->existe($usuario_1)){
		$est2=$crudpersonal->obtenerPersonal($usuario_1);
		if($crudpersonal->login($usuario_1,md5($clave_1))==1){
			$_SESSION['user']=$est2->get_numeroIdentificacion();
			$_SESSION['pers']=$est2->get_numeroIdentificacion();
			$_SESSION['tipouser']="est";
			$_SESSION['acceso'] = $est2->get_accesodepartamento_codigo();
			cargarplantilla();
		}
	}

*/ else {
		//echo "<script>console.log('No existe el usuario')</script>";
		cargarlogin();
	}
} catch (Exception $ex) {
	echo $ex;
}
function cargarlogin()
{
	try {
		header("Status: 301 Moved Permanently");
		header("Location: ../Templates/login.php");

		exit;
	} catch (Exception $ex) {
		echo ("<script>console.log('" . $ex . "');</script>");
	}
}
function cargarplantilla()
{
	try {
		header("Status: 301 Moved Permanently");
		header("Location: ../Templates/plantillaBase.php");
		exit;
	} catch (Exception $ex) {
		echo ("<script>console.log('" . $ex . "');</script>");
	}
}
