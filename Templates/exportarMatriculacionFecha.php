<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Proceso de Matriculacion</title>
  <link rel="stylesheet" type="text/css" href="../css/csslogin.css" />
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="../js/validaciones.js"></script>
</head>
<!-- actualizarEstudiante.php-->

<body>
  <div class="cabecera" id="cabecera"><img src="../img/EsCayambe.png" id="logo" class="logo" /></div>
  <form action="../reportes/excelreporteFechaMatricula.php" enctype="application/x-www-form-urlencoded" name="login" id="loginform" method="GET">
    <div class="login">
      <h1>Ingrese una fecha</h1>
      <select class="selector" name="fechamatricula" id="fechamatricula">

      </select>
      <input id="btningresar" class="btningresar" type="submit" value="GENERAR REPORTE">
    </div>
    <div class="shadow"></div>
  </form>
</body>

</html>