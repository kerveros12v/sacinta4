<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Institucion</title>
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="../js/ajaxsinstituto.js"></script>

</head>

<body>
  <div id="dialog" style="display: none;" title="Respuesta del servidor">
    <p id="dialog-confirm"></p>
  </div>
  <table>
    <tr>
      <td>
        <table>
          <tr>
            <td>
              <table>
                <tr>
                  <td>
                    Seleccione el Pais:
                  </td>
                  <td>
                    <select class="selector" id="paisinstituto" name="paisinstituto" onchange="cargarProvincias()"></select>
                  </td>
                </tr>
              </table>
            </td>
            <td>
              <table>
                <tr>
                  <td>
                    Seleccione la Provincia:
                  </td>
                  <td>
                    <select class="selector" id="provinciainstituto" name="provinciainstituto" onchange="cargartabla()"></select>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>

    </tr>
    <tr>
      <td>
        <table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">

          <tbody id="contenedorinstituto">
          </tbody>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>