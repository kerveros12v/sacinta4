<?php

require_once("../Crud/CrudHaperdidoLaGratuidad.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudHaperdidoLaGratuidad;

session_start();
function cargartabahaperdidolagratuidad()
{
    $r = "";
    $crud = new CrudHaperdidoLaGratuidad();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="haperdidolagratuidadcodigo" name="haperdidolagratuidadcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="haPerdidoLaGratuidad" name="haPerdidoLaGratuidad"  value=""/>
    </td>
    <td>
        <input type="button" value="Guardar" id="btnguardar" class="btnunico" onclick="registro()">
    </td>
</tr>
';

    foreach ($crud->mostrar() as $dato) {
        $r .= '
    <tr>
        <td>

        </td>
        <td>
            <input type="text" class="camptext1" id="haperdidolagratuidadcodigo' . $dato->getHaPerdidoLaGratuidadId() . '" name="haperdidolagratuidadcodigo' . $dato->getHaPerdidoLaGratuidadId() . '"  maxlength="10" value="' . $dato->getHaperdidolagratuidadcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="haPerdidoLaGratuidad' . $dato->getHaPerdidoLaGratuidadId() . '" name="haPerdidoLaGratuidad' . $dato->getHaPerdidoLaGratuidadId() . '"  value="' . $dato->getHaPerdidoLaGratuidad() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getHaPerdidoLaGratuidadId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getHaPerdidoLaGratuidadId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartabahaperdidolagratuidad();
} else {
    echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			' . tiempoExedido() . '
		</td>
	</tr>';
}
