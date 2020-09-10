<!doctype html>

<html>

<head>
  <meta charset="utf-8">
  <title>Generos</title>
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../js/ajaxsgeneros.js"></script>
</head>

<body>
  <div id="dialog" style="display: none;" title="Respuesta del servidor">
    <p id="dialog-confirm"></p>
  </div>
  <div>
    <table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">
      <tr class="ui-widget-header">
        <th></th>
        <th>Codigo</th>
        <th>Genero</th>
        <th></th>
      </tr>

      <tbody id=contenedorgeneros>

      </tbody>
    </table>
  </div>

</body>

</html>