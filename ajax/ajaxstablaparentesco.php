<?php
require_once("../Crud/CrudParentesco.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudParentescos;

session_start();
function cargartablaparentesco()
{
    $r = "";
    $crud = new CrudParentescos();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="parentescocodigo" name="parentescocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="parentesco" name="parentesco"  value=""/>
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
            <input type="text" class="camptext1" id="parentescocodigo' . $dato->getIdParentescos() . '" name="parentescocodigo' . $dato->getIdParentescos() . '"  maxlength="10" value="' . $dato->getParentescocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="parentesco' . $dato->getIdParentescos() . '" name="parentesco' . $dato->getIdParentescos() . '"  value="' . $dato->getParentesco() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getIdParentescos() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getIdParentescos() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablaparentesco();
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
