<?php
require_once("../Crud/CrudDiscapacidad.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudDiscapacidad;

session_start();
function cargartabladiscapacidad()
{
    $r = "";
    $crud = new CrudDiscapacidad();


    $r .= '

<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="discapacidadcodigo" name="discapacidadcodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="discapacidad" name="discapacidad"  value=""/>
    </td>
    <td>
 <select class="selector"  id="discapacidadbool" name="discapacidadbool">
    ' . boolselect(1) . '
    </select>
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
            <input type="text" class="camptext1" id="discapacidadcodigo' . $dato->getDiscapacidadId() . '" name="discapacidadcodigo' . $dato->getDiscapacidadId() . '"  maxlength="10" value="' . $dato->getDiscapacidadcodigo() . '"/>
        </td>
        <td>
            <input type="text" id="discapacidad' . $dato->getDiscapacidadId() . '" name="discapacidad' . $dato->getDiscapacidadId() . '"  value="' . $dato->getDiscapacidad() . '"/>
        </td>
        <td>
            <select class="selector"  id="discapacidadbool" name="discapacidadbool">
                ' . boolselect($dato->getDiscapacidadbool()) . '
            </select>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getDiscapacidadId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getDiscapacidadId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartabladiscapacidad();
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
