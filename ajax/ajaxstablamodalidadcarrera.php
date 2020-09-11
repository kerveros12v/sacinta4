<?php

require_once("../Crud/CrudModalidadCarrera.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudModalidadcarreras;

session_start();
function cargartablamodalidadCarrera()
{
    $r = "";
    $crud = new CrudModalidadcarreras();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="modalidadcarreracodigo" name="modalidadcarreracodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="modalidadCarrera" name="modalidadCarrera"  value=""/>
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
            <input type="text" class="camptext1" id="modalidadcarreracodigo' . $dato->getModalidadCarreraId() . '" name="modalidadcarreracodigo' . $dato->getModalidadCarreraId() . '"  maxlength="10" value="' . $dato->getModalidadcarreracodigo() . '"/>
        </td>
        <td>
            <input type="text" id="modalidadCarrera' . $dato->getModalidadCarreraId() . '" name="modalidadCarrera' . $dato->getModalidadCarreraId() . '"  value="' . $dato->getModalidadCarrera() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getModalidadCarreraId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getModalidadCarreraId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablamodalidadCarrera();
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
