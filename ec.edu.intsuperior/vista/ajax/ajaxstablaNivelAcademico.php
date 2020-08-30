<?php

require_once("../Crud/CrudNivelacademico.php");
require_once("../controladores/respuestasgenerales.php");

use Crud\CrudNivelacademico;
session_start();
function cargartablanivelacademico()
{
    $r="";
    $crud = new CrudNivelacademico();
    $r.= '
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
            <input type="text" class="camptext1" id="nivelacademicocodigo' . $dato->get_nivelAcademicoQueCursaId() . '" name="nivelacademicocodigo' . $dato->get_nivelAcademicoQueCursaId() . '"  maxlength="10" value="' . $dato->get_nivelacademicocodigo() . '"/>
        </td>
        <td>
            <input type="text" id="nivelAcademicoQueCursa' . $dato->get_nivelAcademicoQueCursaId() . '" name="nivelAcademicoQueCursa' . $dato->get_nivelAcademicoQueCursaId() . '"  value="' . $dato->get_nivelAcademicoQueCursa() . '"/>
        </td>
        <td class="unilinea">
        <input type="button" value="Actualizar" id="btnactualizar" class="btndoble" onclick="actualizar(' . $dato->get_nivelAcademicoQueCursaId() . ')">
         <input type="button" value="Eliminar" id="btneliminar" class="btndoble" onclick="eliminar(' . $dato->get_nivelAcademicoQueCursaId() . ')">
        </td>
    </tr>
    ';
    }
    return $r;
}
if ($_SESSION['user']!="") {
    echo cargartablanivelacademico();
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
