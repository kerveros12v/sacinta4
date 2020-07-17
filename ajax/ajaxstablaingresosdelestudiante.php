<?php

require_once("../Crud/CrudIngresosestudiante.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudIngresosestudiante;

session_start();
function cargartablaingresosestudiante()
{
    $r="";
    $crud = new CrudIngresosestudiante();
    $r.= '
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
            <input type="text" class="camptext1" id="ingresosestudiantecodigo' . $dato->get_ingresosestudianteId() . '" name="ingresosestudiantecodigo' . $dato->get_ingresosestudianteId() . '"  maxlength="10" value="' . $dato->get_ingresosestudiantecodigo() . '"/>
        </td>
        <td>
            <input type="text" id="ingresosestudiante' . $dato->get_ingresosestudianteId() . '" name="ingresosestudiante' . $dato->get_ingresosestudianteId() . '"  value="' . $dato->get_ingresosestudiante() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_ingresosestudianteId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_ingresosestudianteId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablaingresosestudiante();
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
