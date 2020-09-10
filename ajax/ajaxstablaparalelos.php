<?php

require_once("../Crud/CrudParalelo.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudParalelo;

session_start();
function cargartablaparalelos()
{
    $r = "";
    $crud = new CrudParalelo();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="paralelocodigo" name="paralelocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="paralelo" name="paralelo"  value=""/>
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
            <input type="text" class="camptext1" id="paralelocodigo' . $dato->getParaleloId() . '" name="paralelocodigo' . $dato->getParaleloId() . '"  maxlength="10" value="' . $dato->getParalelocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="paralelo' . $dato->getParaleloId() . '" name="paralelo' . $dato->getParaleloId() . '"  value="' . $dato->getParalelo() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getParaleloId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getParaleloId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaparalelos();
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
