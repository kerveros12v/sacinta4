<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Lista de Estudiantes</title>
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="../js/ajaxsestudiantelistado.js"></script>
</head>

<body>
  <div id="dialog" style="display: none;" title="Respuesta del servidor">
    <p id="dialog-confirm"></p>
  </div>
  <table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">

    <tr>
      <td>
        <label>Ingrese la Cedula: </label>
      </td>
      <td>
        <input type="text" class="camptext1" id="numeroIdentificacion" name="numeroIdentificacion" maxlength="10" value="" />
      </td>
      <td>
        <input type="button" value="Nuevo Estudiante" id="btnactualizar" class="btnunico" onclick="registro()">

      </td>
      <td>
        <input type="button" value="Buscar" id="btndoble" class="btnunico" onclick="Buscar()">
      </td>

    </tr>
    <tbody id="contenedorlstestudiantes">
    </tbody>
  </table>
</body>

</html>