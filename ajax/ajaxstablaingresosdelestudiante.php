<?php

require_once("../Crud/CrudIngresosestudiante.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudIngresosestudiante;

session_start();
function cargartablaingresosestudiante()
{
    $r = "";
    $crud = new CrudIngresosestudiante();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="ingresosestudiantecodigo" name="ingresosestudiantecodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="ingresosestudiante" name="ingresosestudiante"  value=""/>
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
            <input type="text" class="camptext1" id="ingresosestudiantecodigo' . $dato->getIngresosestudianteId() . '" name="ingresosestudiantecodigo' . $dato->getIngresosestudianteId() . '"  maxlength="10" value="' . $dato->getIngresosestudiantecodigo() . '"/>
        </td>
        <td>
            <input type="text" id="ingresosestudiante' . $dato->getIngresosestudianteId() . '" name="ingresosestudiante' . $dato->getIngresosestudianteId() . '"  value="' . $dato->getIngresosestudiante() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIngresosestudianteId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIngresosestudianteId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaingresosestudiante();
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
