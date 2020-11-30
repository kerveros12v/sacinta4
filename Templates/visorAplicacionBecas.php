<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Cuarta Razon</title>
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../vendor/components/jquery/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <link href="../vendor/components/jqueryui/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script src="../vendor/components/jqueryui/jquery-ui.min.js"></script>

  <script type="text/javascript" src="../js/ajaxsestudiantebecaslistado.js"></script>

</head>

<body>
  <div id="dialog" style="display: none;" title="Respuesta del servidor">
    <p id="dialog-confirm"></p>
  </div>
  <input type="button" id="nuevo" onclick="registro()" value="Nuevo Registro" class="btnunico">
  <table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">
    <tbody id="contenedorbecastabla">
    </tbody>
  </table>
</body>

</html>