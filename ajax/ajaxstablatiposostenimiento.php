<?php
require_once("../Crud/CrudTipoSostenimiento.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudTipoSostenimientos;

session_start();
function cargartablasostenimiento()
{
    $r = "";
    $crud = new CrudTipoSostenimientos();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="sostenimientoscodigo" name="sostenimientoscodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="sostenimiento" name="sostenimiento"  value=""/>
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
            <input type="text" class="camptext1" id="sostenimientoscodigo' . $dato->getIdSostenimiento() . '" name="sostenimientoscodigo' . $dato->getIdSostenimiento() . '"  maxlength="10" value="' . $dato->getSostenimientoscodigo() . '"/>
        </td>
        <td>
            <input type="text" id="sostenimiento' . $dato->getIdSostenimiento() . '" name="sostenimiento' . $dato->getIdSostenimiento() . '"  value="' . $dato->getSostenimiento() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdSostenimiento() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdSostenimiento() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablasostenimiento();
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
