<?php
if (!isset($_GET['ancho']) && !isset($_GET['alto'])) {
  echo "<script language=\"JavaScript\">
<!--
document.location=\"$PHP_SELF?ancho=\"+screen.width+\"&alto=\"+screen.height;
//-->
</script>";
} else {
  if (isset($_GET['ancho']) && isset($_GET['alto'])) {
    // Resolución de pantalla
    echo "<script>console.log('Esta es tu resolucion de pantalla: Ancho= " . $_GET['ancho'] . " y Alto= " . $_GET['alto'] . "')</script>";
  } else {
    // Error en la detección
    echo "No se ha podido detectar la resolución de pantalla";
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Administracion</title>
  <link rel="stylesheet" type="text/css" href="../css/cssmenusec.css" />
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="../js/ajaxsadministraciondocentes.js"></script>
</head>

<body>
  <div class="sidebar_2" id="nav1">

  </div>
  <iframe class="contenedor1" id="contenedor1" name="contenedor1" border: none;></iframe>


</body>

</html>