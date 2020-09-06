<?php
require_once("../Crud/CrudBonodesarrollo.php");

use Crud\CrudBonodesarrollo;

session_start();
function cargartablatitulotercernivel()
{
    $r = "";
    $crud = new CrudBonodesarrollo();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="bonodesarrollocodigo" name="bonodesarrollocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="bonoDesarrollo" name="bonoDesarrollo"  value=""/>
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
            <input type="text" class="camptext1" id="bonodesarrollocodigo' . $dato->getBonoDesarrolloId() . '" name="bonodesarrollocodigo' . $dato->getBonoDesarrolloId() . '"  maxlength="10" value="' . $dato->getBonodesarrollocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="bonoDesarrollo' . $dato->getBonoDesarrolloId() . '" name="bonoDesarrollo' . $dato->getBonoDesarrolloId() . '"  value="' . $dato->getBonoDesarrollo() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getBonoDesarrolloId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getBonoDesarrolloId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablatitulotercernivel();
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
