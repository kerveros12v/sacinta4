<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Datos del Estudiante</title>
  <link rel="stylesheet" type="text/css" href="../css/cssmenusec.css" />
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>
  <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../js/ajaxsestudianteselect.js"></script>
  <script type="text/javascript" src="../js/ajaxsestudiantes.js"></script>
</head>

<body style="display: flex;">

  <div class="sidebar_2">
    <div id="foto" name="foto">
      <a href="#" onclick="cargafotoestudiante()">
      <img src="../ajax/ajaxsestudiantefoto.php" height="200px" width="200px"/>
    </a>
      <div id="nav1">
      </div>
    </div>

  </div>
  <div style="padding-left: 10px;">
    <table class="contenedor1" border="1">
      <tr class="contenedordatos" id="contenedordatos"></tr>

    </table>
  </div>
</body>

</html>