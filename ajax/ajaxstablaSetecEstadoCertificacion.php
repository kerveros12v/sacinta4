<?php
require_once("../Crud/CrudSetecestadoCertificacion.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudSetecestadoscertificacion;

session_start();
function cargartablaSetecestadoscertificacion()
{
    $r = "";
    $crud = new CrudSetecestadoscertificacion();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="seccodigo" name="seccodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="secdetalle" name="secdetalle"  value=""/>
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
            <input type="text" class="camptext1" id="seccodigo' . $dato->getIdsec() . '" name="seccodigo' . $dato->getIdsec() . '"  maxlength="10" value="' . $dato->getSeccodigo() . '"/>
        </td>
        <td>
            <input type="text" id="secdetalle' . $dato->getIdsec() . '" name="secdetalle' . $dato->getIdsec() . '"  value="' . $dato->getSecdetalle() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdsec() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdsec() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaSetecestadoscertificacion();
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
