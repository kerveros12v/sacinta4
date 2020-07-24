<?php
	session_start();
	$_SESSION['campbuscarest']=$_POST['ced'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-type" content="text/html; " />
<title>Matriculacion Estudiante</title>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../js/ajaxsestudiantes.js"></script>
<link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css"/>
<link rel="stylesheet" type="text/css" href="../css/cssPlantilla.css"/>
<script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>
<link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

</head>
<body id="formulario1">

	<?php
	if (!isset($_SESSION['user'])) {
		# code...
		echo '<div class="sidebar1">
		<div class="sidebar1">
			<a href="#" target="contenedor"><img src="../img/logo-principal.png"  name="logo" width="110" height="60" id="logo"  /></a>
			<h1 href="#">Formulario Matriculacion </h1>
		</div>
		<div class="sidebar2">
			<ul class="nav">
				<li>
					  <a id="salir" onclick="salirmatricula()">Salir</a>
				</li>
	  		</ul>
		</div>

  </div>';
	}

?>

	<div class="cuerpo">
	<form method="POST" >
		<table border="1">
				<tr class="tabtitulos" id="codmatricula"></tr>
				<tr id="datosestudiante"></tr>
				<tr id="datosdiscapacidad1"></tr>
				<tr id="datosresidencia"></tr>
				<tr id="datoscontactosEmergencia"></tr>
				<tr id="bachillerato"></tr>
				<tr id="titulotercernivel"></tr>
				<tr id="datosMatricula"></tr>
				<tr id="datosTrabajo"></tr>
		</table>
			<input type="button" class="btnunico" value="Guardar" onclick=mostrarReporteMatricula()>
		</form>
	</div>

</body>



</html>
