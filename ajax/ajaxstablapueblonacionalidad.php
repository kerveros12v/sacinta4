<?php
require_once("../Crud/CrudPueblonacionalidad.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudPuebloNacionalidad;

session_start();
function cargartablapueblonacionalidad()
{
    $r = "";
    $crud = new CrudPuebloNacionalidad();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="pueblonacionalidadescodigo" name="pueblonacionalidadescodigo"  value=""/>
    </td>
    <td>
        <input type="text" id="pueblonacionalidad" name="pueblonacionalidad"  value=""/>
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
            <input type="text" class="camptext1" id="pueblonacionalidadescodigo' . $dato->getPueblonacionalidadId() . '" name="pueblonacionalidadescodigo' . $dato->getPueblonacionalidadId() . '"   value="' . $dato->getPueblonacionalidadescodigo() . '"/>
        </td>
        <td>
            <input type="text" id="pueblonacionalidad' . $dato->getPueblonacionalidadId() . '" name="pueblonacionalidad' . $dato->getPueblonacionalidadId() . '"  value="' . $dato->getPueblonacionalidad() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getPueblonacionalidadId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getPueblonacionalidadId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablapueblonacionalidad();
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
