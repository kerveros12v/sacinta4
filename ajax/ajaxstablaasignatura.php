<?php
require_once("../Crud/CrudAsignaturas.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudAsignaturas;

session_start();
function cargartablaasignaturas()
{
    $r = "";
    $crud = new CrudAsignaturas();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="codigoMateria" name="codigoMateria"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="materia" name="materia"  value=""/>
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
            <input type="text" class="camptext1" id="codigoMateria' . $dato->getAsignaturasId() . '" name="codigoMateria' . $dato->getAsignaturasId() . '"  maxlength="10" value="' . $dato->getCodigoMateria() . '"/>
        </td>
        <td>
            <input type="text" id="materia' . $dato->getAsignaturasId() . '" name="materia' . $dato->getAsignaturasId() . '"  value="' . $dato->getMateria() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getAsignaturasId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getAsignaturasId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaasignaturas();
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
