<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tipo Sangre</title>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../js/ajaxsestudiantelistado.js"></script>
</head>

<body>
<table class="ui-widget ui-widget-content" title="Perfiles Registradas Actualmente:">
  <tr class="ui-widget-header">
    <th></th>
    <th>CEDULA</th>
   <th >APELLIDOS Y NOMBRES</th>
   <th></th>

  </tr>
  <tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="numeroIdentificacion" name="numeroIdentificacion"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="nombre" name="nombre"  value=""/>
    </td>
    <td>
    <!--
        <input type="button" value="Buscar" id="btndoble" class="btnunico" onclick="Buscar()">
        -->
        <input type="button" value="Nuevo Estudiante" id="btnactualizar" class="btnunico" onclick="registro()">

    </td>

</tr>
  <tbody id="contenedorlstestudiantes">
  </tbody>
</table>
</body>
</html>