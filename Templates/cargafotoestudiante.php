<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Estudiantes Imagen</title>
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../js/ajaxsestudiantes.js"></script>
</head>

<body>
  <table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">
    <tr class="ui-widget-header">
      <td>
        <form action="../controladores/registroEstudianteFoto.php" method="post" enctype="multipart/form-data">
          <b>Enviar un nuevo archivo: </b>
          <br>
          <input name="image" type="file" src="">
          <br>
          <input type="submit" name="submitir" value="Enviar">
        </form>
      </td>
    </tr>
  </table>
</body>

</html>