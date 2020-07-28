<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proceso de Matriculacion</title>
<link rel="stylesheet" type="text/css" href="../css/csslogin.css"/>
<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../js/validaciones.js"></script>
</head>
<!-- actualizarEstudiante.php-->
<body>
<div class="cabecera" id="cabecera"><img src="../img/EsCayambe.png" id="logo" class="logo"  /></div>
<form action="../Templates/actualizarEstudiante.php" enctype="application/x-www-form-urlencoded" name="login" id="loginform"  method="POST">
<div class="login">
  <input type="text" placeholder="Numero de Indentificacin" id="cedula" name="cedula" onKeyUp="validarcedula()" maxlength="10" required /><label id="salidacedula"></label>
  <!--<div>
		<input name="chk01" id="chk01" type="checkbox" />
		<label id="newEstudiante" for="chk01">Es un nuevo estudiante.</label>
  </div>
  -->
  <input id="btningresar" class="btningresar" type="submit" value="Buscar" name="buscarCedula">
</div>
<div class="shadow"></div>
</form>
</body>
</html>