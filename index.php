<?php
session_start();
$_SESSION['urlbase'] = $_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>SAC-INT</title>

  <link rel="stylesheet" type="text/css" href="../css/cssfinal.css" />

</head>



<body>

  <table width="100%" border="0" cellspacing="0">

    <tr>

      <td><img src="img/EsCayambe.png" name="logoindex" width="600" height="250" id="logoindex" /></td>

    </tr>

    <tr>

      <td>
        <table width="100%" border="0" cellspacing="0">

          <tr>

            <td>&nbsp;</td>

            <td></td>

            <td>&nbsp;</td>

            <td>&nbsp;</td>

          </tr>

          <tr>

            <td class="m1login"><a href="Templates/opcionesMatriculacion.php"><img src="img/matricula_1.png" width="419" height="185" />Matriculacion</a></td>

            <td class="m1login"><a href="Templates/visorSetec.php"><img src="img/logo2018setec.jpg" width="419" height="185" />Setec</a></td>

            <td class="m1login"><a href="Templates/vinculacionsociedad.php">UVCOM</a></td>

            <td class="m1login"><a href="#">UPRAP</a></td>

            <td><a href="Templates/login.php">Acceso sistema</a></td>

          </tr>

        </table>
      </td>

    </tr>



  </table>

  <?php

  $user1 = "EST";

  $fecha = date('Y-m-d');

  $accion = 0;

  $oculto = 0;

  echo ("Usuario: " . $user1);

  echo ("fecha: " . $fecha);

  echo ("accion: " . $accion);

  echo ("oculto: " . $oculto);



  ?>

</body>

</html>