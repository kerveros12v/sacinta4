<?php

require_once("../Crud/CrudAplicacionBecas.php");
require_once("../Crud/CrudEstudiante.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudAplicacionbecas;
use Crud\CrudEstudiantes;

session_start();
function cargartablaEstudiantes()
{
    $r = "";
    $crud = new CrudAplicacionbecas();
    $crudest = new CrudEstudiantes();
    $r .= '
    <tr class="ui-widget-header">
  <th></th>
  <th>Cedula</th>
  <th>Apellidos y Nombres</th>
  <th></th>

</tr>

';

    foreach ($crud->mostrarCedulas() as $dato1) {
        $nombre = "";
        $dato = $crudest->obtenerEstudiantes($dato1->getFknumeroIdentificacion());
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
            <label>' . $dato1->getAplicacionbecascodigo() . '</label>
        </td>
        <td>
        <label>' . $dato->getNumeroIdentificacion() . '</label>
        </td>
        <td>
        <label>' . $nombre . '</label>
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
