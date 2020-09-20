<?php

require_once("../Crud/CrudEstudiante.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudEstudiantes;

session_start();
function cargartablaEstudiantes()
{
    $r = "";
    $crud = new CrudEstudiantes();
    $r .= '
    <tr class="ui-widget-header">
  <th></th>
  <th>Cedula</th>
  <th>Apellidos y Nombres</th>
  <th></th>

</tr>

';

    foreach ($crud->mostrar() as $dato) {
        $nombre = "";
        if ($dato->getPrimerApellido() != "") {
            $nombre = $nombre . $dato->getPrimerApellido() . " ";
        }
        if ($dato->getSegundoApellido() != "") {
            $nombre = $nombre . $dato->getSegundoApellido() . " ";
        }
        if ($dato->getPrimerNombre() != "") {
            $nombre = $nombre . $dato->getPrimerNombre() . " ";
        }
        if ($dato->getSegundoNombre() != "") {
            $nombre = $nombre . $dato->getSegundoNombre() . " ";
        }
        $r .= '
    <tr>
        <td>

        </td>
        <td>
            <input type="text" class="camptext1" id="numeroIdentificacion' . $dato->getNumeroIdentificacion() . '" name="numeroIdentificacion' . $dato->getNumeroIdentificacion() . '"  maxlength="10" value="' . $dato->getNumeroIdentificacion() . '"/>
        </td>
        <td>
            <input type="text" id="nombre' .  $dato->getNumeroIdentificacion() . '" name="nombre' . $dato->getNumeroIdentificacion() . '"  value="' . $nombre . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Mostrar Informacion" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getNumeroIdentificacion() . ')">

        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaEstudiantes();
} else {
    echo '<tr>
		<td>
			' . tiempoExedido() . '
		</td>
	</tr>';
}
