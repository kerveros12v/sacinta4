<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERIODO ACADEMICO</title>
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/css10.css">
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>
  <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../js/jsvisorperiodo.js"></script>
</head>

<body>
  <div id="dialog" style="display: none;" title="Respuesta del servidor">
    <p id="dialog-confirm"></p>
  </div>
  <div>
    <table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">
      <tr class="ui-widget-header ">

        <th>Codigo</th>
        <th>Ciclo</th>
        <th>Fecha de inicio</th>
        <th>Fecha de finalizacion</th>
        <th>Estado</th>
        <th>Observaciones</th>
        <th>Periodo Activo</th>
        <th></th>
      </tr>
      <tbody id=contenedorperiodos>
      </tbody>
    </table>
  </div>
</body>

</html>