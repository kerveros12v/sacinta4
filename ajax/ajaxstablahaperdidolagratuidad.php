<?php

require_once("../Crud/CrudHaperdidoLaGratuidad.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudHaperdidoLaGratuidad;

session_start();
function cargartabahaperdidolagratuidad()
{
    $r="";
    $crud = new CrudHaperdidoLaGratuidad();
    $r.= '
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
            <input type="text" class="camptext1" id="haperdidolagratuidadcodigo' . $dato->get_HaPerdidoLaGratuidadId() . '" name="haperdidolagratuidadcodigo' . $dato->get_HaPerdidoLaGratuidadId() . '"  maxlength="10" value="' . $dato->get_haperdidolagratuidadcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="haPerdidoLaGratuidad' . $dato->get_HaPerdidoLaGratuidadId() . '" name="haPerdidoLaGratuidad' . $dato->get_HaPerdidoLaGratuidadId() . '"  value="' . $dato->get_haPerdidoLaGratuidad() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_HaPerdidoLaGratuidadId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_HaPerdidoLaGratuidadId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartabahaperdidolagratuidad();
} else{
	echo '<tr>
		<td>
		</td>
		<td>
		</td>
		<td>
		</td>
		<td>
			'.tiempoExedido().'
		</td>
	</tr>';
}
