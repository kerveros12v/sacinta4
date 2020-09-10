<?php

require_once("../Crud/CrudNivelacademico.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudNivelacademico;

session_start();
function cargartablanivelacademico()
{
    $r = "";
    $crud = new CrudNivelacademico();
    $r .= '
<tr>
    <td>

    </td>
    <td>
        <input type="text" class="camptext1" id="nivelacademicocodigo" name="nivelacademicocodigo"  maxlength="10" value=""/>
    </td>
    <td>
        <input type="text" id="nivelAcademicoQueCursa" name="nivelAcademicoQueCursa"  value=""/>
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
            <input type="text" class="camptext1" id="nivelacademicocodigo' . $dato->getNivelAcademicoQueCursaId() . '" name="nivelacademicocodigo' . $dato->getNivelAcademicoQueCursaId() . '"  maxlength="10" value="' . $dato->getNivelacademicocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="nivelAcademicoQueCursa' . $dato->getNivelAcademicoQueCursaId() . '" name="nivelAcademicoQueCursa' . $dato->getNivelAcademicoQueCursaId() . '"  value="' . $dato->getNivelAcademicoQueCursa() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->getNivelAcademicoQueCursaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->getNivelAcademicoQueCursaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user'] != "") {
    echo cargartablanivelacademico();
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
